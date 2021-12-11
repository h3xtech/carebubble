@extends('layouts.crm')

@section('content')
<section>
  <div class="container" style="padding-top:200px;">
    <div class="row">
      <div class="col-md-12">
        <?php $message = \App\Section::find(12);?>
        <h2>{{$message->title}}</h2>
        <p>Hi {{Auth::user()->name}}, {!!$message->content!!}</p>
        <div class="panel-footer"><a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a></div>
      </div>
    </div>
  </div>
</section>
<hr>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		@csrf
</form>
@endsection
