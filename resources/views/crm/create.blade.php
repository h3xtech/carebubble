@extends('layouts.admin')

@section('content')
  <section class="content">
      <div class="row">
          <!-- Form controls -->
          <div class="col-sm-12">
              <div class="panel panel-bd lobidrag">
                  <div class="panel-heading">
                      <div class="btn-group">
                          <a class="btn btn-primary" href="/pages"> <i class="fa fa-list"></i>Pages </a>
                      </div>
                  </div>
                  <div class="panel-body" style="min-height:500px;">
                      <?php $type="create";?>
                      @include('crm.form')
                   </div>
               </div>
           </div>
       </div>
   </section> <!-- /.content -->
@endsection
