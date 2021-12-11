@extends('layouts.admin')

@section('content')
      <section class="content">
          <div class="row">
              <!-- Form controls -->
              <div class="col-sm-12">
                  <div class="panel panel-bd lobidrag">
                      <div class="panel-heading">
                          <div class="btn-group">
                              <a class="btn btn-primary" href="/caregivers"> <i class="fa fa-list"></i>  Care Givers </a>
                          </div>
                      </div>
                      <div class="panel-body">
                          <?php $type="edit";?>
                          @include('caregivers.form')
                       </div>
                   </div>
               </div>
           </div>
       </section> <!-- /.content -->
@endsection
