@extends('layouts.admin')

@section('content')
<?php
  if (isset($_GET['start'])) {
    $start = $_GET['start'];
  }
  else{
      $start =0;
  }
?>
<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="btn-group">
                        <a class="btn btn-success" href="/caregivers/new"> <i class="fa fa-plus"></i> Add Care Giver
                        </a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="panel-header">
                            <div class="col-sm-4 col-xs-12">
                                <div class="dataTables_length">
                                    <label>Display
                                        <select name="example_length">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> records per page</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <div class="dataTables_length">
                                     <a class="btn btn-default buttons-copy btn-sm" tabindex="0">
                                         <span>Copy</span></a>
                                         <a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0"><span>CSV</span></a>
                                         <a class="btn btn-default buttons-excel buttons-html5 btn-sm" tabindex="0"><span>Excel</span></a>
                                         <a class="btn btn-default buttons-pdf buttons-html5 btn-sm" tabindex="0"><span>PDF</span></a>
                                         <a class="btn btn-default buttons-print btn-sm" tabindex="0"><span>Print</span></a>

                                     </div>
                                 </div>
                                 <div class="col-sm-4 col-xs-12">
                                    <div class="dataTables_length">
                                        <div class="input-group custom-search-form">
                                            <input type="search" class="form-control" placeholder="search..">
                                            <span class="input-group-btn">
                                              <button class="btn btn-primary" type="button">
                                                  <span class="glyphicon glyphicon-search"></span>
                                              </button>
                                          </span>
                                      </div><!-- /input-group -->
                                  </div>
                              </div>
                          </div>

                      </div>
                      <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Serial No</th>
                                    <th>Picture</th>
                                    <th>First Name</th>
                                    <th>Role</th>
                                    <th>Cares for</th>
                                    <th>Email</th>
                                    <th>Mobile No</th>
                                    <th>Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;?>
                                @foreach($caregivers->slice($start,10) as $caregiver)
                                  <tr>
                                   <td>
                                       <label>{{$i}}</label>
                                       <?php $i++;?>
                                   </td>
                                   <td><a href="/caregiver/{{$caregiver->id}}"><img src="{{$caregiver->avatar}}" class="img-circle" alt="User Image" height="50" width="50"></td>
                                   <td><a href="/caregiver/{{$caregiver->id}}">{{$caregiver->name}}</a></td>
                                   <td>Care Giver</td>
                                   <td>
                                      <?php
                                          $connections = App\Connections::where('caregiver_id', $caregiver->id)->get();

                                      ?>

                                      @foreach($connections as $connection)
                                        <?php $caresfor = \App\Patient::find($connection->patient_id);?>
                                        @isset($caresfor->name)
                                          {{$caresfor->name}},
                                        @else
                                          Unassigned
                                        @endisset
                                      @endforeach
                                   </td>
                                   <td><a href="#">{{$caregiver->email}}</a></td>
                                   <td>019833333222</td>
                                   <td>
                                      <a href="/caregivers/{{$caregiver->id}}/edit"><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#ordine"><i class="fa fa-pencil"></i>
                                      </button></a>
                                      <a href="/caregivers/delete/{{$caregiver->id}}"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                                      </button>
                                  </td>
                                @endforeach
                            </tr>
                        </tr>

                        </td>
                    </tr>

                </tr>
            </tr>
        </tbody>
    </table>
</div>
<div class="page-nation text-right">
    <ul class="pagination pagination-large">
        <li @if($start ==0) class="active" @endif><a href="?start=10"><span>«</span></a></li>
        <li @if($start ==0) class="active" @endif><a href="?start=0"><span>1</span></a></li>
        <li @if($start !=0) class="active" @endif><a href="?start=10">2</a></li>
        <li @if($start !=0) class="active" @endif><a rel="next" href="?start=10">Next</a></li>
    </ul>
</div>
</div>
</div>
@endsection
