@extends('layouts.crm')

@section('content')
  <div class="container">
    <div class=" mx-auto text-center" style="padding-top:150px;">
      <h1 class="display-4">Carebubble Packages</h1>
      <p class="lead">CareBubble is free to anyone who needs it. The free package will allow you to notify one person if you need help. If you need a little more support you can signup for our Full Support package and if you run a care provider we can create custom packaged for you.</p>
    </div>
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Free</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">£0 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>1 Care Giver</li>
            <li>Emergency notifications</li>
            <li>Basic metrics</li>
            <li>Support tickets</li>
          </ul>
          <a href="https://www.carebubble.co/register"><button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button></a>
        </div>
      </div>
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Full Support</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">£15 <small class="text-muted">/ mo</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Up to 5 Caregivers</li>
            <li>Emergency notifications and warnings</li>
            <li>Full metrics</li>
            <li>Email Support</li>
          </ul>
          <a href="/signup/1"><button type="button" class="btn btn-lg btn-block btn-primary">Get started</button></a>
        </div>
      </div>
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Enterprise</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">£49 <small class="text-muted">/ mo (from)</small></h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Unlimited Caregivers</li>
            <li>Unlimited patients</li>
            <li>Admin dashboard</li>
            <li>Phone and email support</li>
          </ul>
          <a href="https://www.CareBubble.co/pages/contact"><button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button></a>
        </div>
      </div>
    </div>
  </div>
@endsection
