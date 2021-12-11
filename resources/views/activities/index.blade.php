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
                        <a class="btn btn-success" href="/web/activity/new"> <i class="fa fa-plus"></i> Add Activity
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
                                    <th>Type</th>
                                    <th>Value</th>
                                    <th>Measured in</th>
                                    <th>User</th>
                                    <th>Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;?>
                                @foreach($activities->slice($start,1000) as $activity)
                                  <tr>
                                   <td>
                                       <label>{{$i}}</label>
                                       <?php $i++;?>
                                   </td>
                                   <td><a href="/web/activity/{{$activity->id}}">{{$activity->type}}</td>
                                   <td><a href="/web/activity/{{$activity->id}}">{{$activity->value}}</a></td>
                                   <td><a href="#">{{$activity->unit}}</a></td>
                                   <?php $patient = \App\Patient::find($activity->user_id);?>
                                   <td>{{$patient->name}}</td>
                                   <td>
                                     <?php
                                        $timestamp = $activity->created_at;
                                        $date = substr($timestamp, 0, strrpos($timestamp, ' '));
                                        $time = substr($timestamp, 10);
                                        $today = date("Y-m-d");
                                        $yesterday = date('Y-m-d',strtotime("-1 days"));
                                        if ($date == $today) {
                                          echo "Today at $time";
                                        }
                                        if ($date == $yesterday) {
                                          echo "Yesterday at $time";
                                        }
                                     ?>

                                   </td>
                                   <td>
                                      <a href="/web/activity/{{$activity->id}}/edit"><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#ordine"><i class="fa fa-pencil"></i>
                                      </button></a>
                                      <a href="/web/delete/activity/{{$activity->id}}"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
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
