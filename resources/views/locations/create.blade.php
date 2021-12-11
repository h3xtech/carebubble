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
                          <?php $type="create";?>
                          @include('locations.form')
                       </div>
                   </div>
               </div>
           </div>
       </section> <!-- /.content -->
@endsection
