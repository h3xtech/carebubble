@extends('layouts.crm')


@section('content')
  <section class="about-us" style="padding-top:100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol>
                    <li>Download the Reciever App <a href="">here</a></li>
                    <li>Invite a Patient <a href="">here</a></li>
                    <li>Send your patient the Treanmitter app <a href="">here</a></li>
                    <li>Connect your fitbit <a href="">Our guide</a></li>
                    <?php if(!isset($admin)){$admin = "";}?>
                      @if($admin == 1)
                        <li>
                          <strong>{{Auth::user()->name}}</strong>, you are admin. You can use the <a href="https://web.carebubble.co/admin" target="_blank">Admin Dashboard</a>
                        </li>
                      @endif

                    <li><a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ol>
            </div>
        </div>
    </div>
  </section>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  		@csrf
  </form>
@endsection
