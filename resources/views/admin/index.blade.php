@extends('layouts.admin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
            <div class="panel panel-bd cardbox">
                <div class="panel-body">
                    <div class="statistic-box">
                        <h2><span class="count-number">{{count($caregivers)}}</span>
                        </h2>
                    </div>
                    <div class="items pull-left">
                        <i class="fa fa-users fa-2x"></i>
                        <h4>Active CareGivers </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
            <div class="panel panel-bd cardbox">
                <div class="panel-body">
                    <div class="statistic-box">
                        <h2><span class="count-number">{{count($patients)}}</span>
                        </h2>
                    </div>
                    <div class="items pull-left">
                        <i class="fa fa-user-circle fa-2x"></i>
                        <h4>Patiants</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
            <div class="panel panel-bd cardbox">
                <div class="panel-body">
                    <div class="statistic-box">
                        <h2><span class="count-number">{{count($activities)}}</span>
                        </h2>
                    </div>
                    <div class="items pull-left">
                    <i class="fa fa-users fa-2x"></i>
                    <h4>Activities</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
            <div class="panel panel-bd cardbox">
                <div class="panel-body">
                    <div class="statistic-box">
                        <h2><span class="count-number">{{count($emergencies)}}</span>
                        </h2>
                    </div>
                    <div class="items pull-left">
                    <i class="fa fa-users fa-2x"></i>
                    <h4>Emergencies</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- datamap -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 ">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Incidents Overlay</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <canvas id="lineChart" height="150"></canvas>
                </div>
            </div>
        </div>
        <!-- calender -->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
            <div class="panel panel-bd lobidisable">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Calender</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <!-- monthly calender -->
                    <div class="monthly_calender">
                        <div class="monthly" id="m_calendar"></div>
                    </div>
                </div>
                 <div id="map1" class="hidden-xs hidden-sm hidden-md hidden-lg"></div>
            </div>
        </div>
        <!-- Bar Chart -->
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="panel panel-bd lobidisable">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Incidents</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <canvas id="barChart" height="200"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Most Vulnerable Patients</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Conditions</th>
                                    <th>CareGivers</th>
                                    <th>Age</th>
                                    <th>Last Locaiton</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($patients->slice(0,5) as $patient)
                                  <tr>
                                      <td>{{$patient->name}}</td>
                                      <td>
                                          @foreach($patient->conditions as $condition)
                                            {{$condition->title}},
                                          @endforeach
                                      </td>
                                      <?php $caregiver = (int)$patient->caregivers;?>
                                      <?php $caregiver = \App\Caregiver::find($caregiver);?>
                                      <td>
                                          @if(isset($caregiver->name))
                                            {{$caregiver->name}}
                                          @else
                                            Unassigned
                                          @endif
                                      </td>
                                      <td>{{$patient->age}}</td>
                                      <td>Shepards Cafe, Hoxton</td>
                                      <td>Safe</td>
                                  </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
         </div>
         <!-- Basic data map -->
        <div class="col-xs-12 col-sm-6">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h4>Pataints</h4>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="embed-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon!5e0!3m2!1sen!2suk!4v1589057132350!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.row -->
</section> <!-- /.content -->
</div>
@endsection
