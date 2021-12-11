@extends('layouts.admin')

@section('content')
      <section class="content">
          <div class="row">
              <!-- Form controls -->
              <div class="col-sm-12">
                  <div class="panel panel-bd lobidrag">
                      <div class="panel-heading">
                          <div class="btn-group">
                              <a class="btn btn-primary" href="/web/locations"> <i class="fa fa-list"></i>  Add Location </a>
                          </div>
                      </div>
                      <div class="panel-body">
                          <center>
                              <img class="thumbnail img-responsive" src="{{$user->avatar}}" width="300px" height="300px">
                              <h3>{{$location}} added for {{$user->name}}</h3>
                            </center>
                          <iframe style="width:100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q={{$data}}&key=AIzaSyC6lQRaUlSOp1_RvysJHblIyMuVcgjXYvg" allowfullscreen></iframe>
                       </div>
                   </div>
               </div>
           </div>
       </section> <!-- /.content -->
@endsection
