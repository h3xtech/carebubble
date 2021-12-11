@extends('layouts.admin')

@section('content')
<?php
  if (isset($_GET['start'])) {
    $start = $_GET['start'];
  }
  else {
    $start = 0;
  }
?>
<section class="content">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
                <div class="panel-heading">
                    <div class="btn-group">
                        <a class="btn btn-success" href="forms_basic.html"> <i class="fa fa-plus"></i> Add location
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
                                         <a class="btn btn-default buttons-print btn-sm" tabindex="0" onclick="window.print();return false;"><span>Print</span></a>

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
                                    <th>Number</th>
                                    <th>Picture</th>
                                    <th>Name</th>
                                    <th>GPS</th>
                                    <th>Limitations</th>
                                    <th>Frequency</th>
                                    <th>User</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=$start+1;?>
                                @foreach($my_locations->slice($start,10) as $location)
                                  <tr>
                                   <td>
                                       <label>{{$i}}</label>
                                       <?php $i++;?>
                                   </td>
                                   <td><a href="/web/location/{{$location->id}}"><img src="{{$location->image}}" class="img-circle" alt="User Image" height="50" width="50"></a></td>
                                   <td><a href="/web/location/{{$location->id}}">{{$location->title}}</a></td>
                                   <td>{{$location->gps}}</td>
                                   <td>
                                     <a href="#">{{$location->limitations}}</a>
                                   </td>
                                   <td>
                                     <a href="#">{{$location->frequency}}</a>
                                   </td>
                                   <td>
                                     <?php $user = \App\User::find($location->user_id);?>
                                     <a href="#"><img src="{{$user->avatar}}" class="img-circle" alt="User Image" height="50" width="50" /></a>
                                     <strong>{{$user->name}}</strong>
                                   </td>
                                   <td>
                                     <a href="#">{{$location->status}}</a>
                                   </td>
                                   <td>
                                      <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#ordine"><i class="fa fa-pencil"></i>
                                      </button>
                                      <a href="/web/delete/location/{{$location->id}}"><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ordine"><i class="fa fa-trash-o"></i>
                                      </button></a>
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
@if(count($my_locations) > 10)
<div class="page-nation text-right">
    <ul class="pagination pagination-large">
        <li><a href="?start=0"><span>«</span></a></li>
        <li @if($start == 0) class="active" @endif><a href="?start=0"><span>1</span></a></li>
        <li @if($start != 0) class="active" @endif><a href="?start=10">2</a></li>
        <!--<li class="disabled"><span>...</span></li><li>-->
        <li><a href="?start=10">&#x21d2;</a></li>
    </ul>
</div>
@endif
</div>
</div>
@endsection
