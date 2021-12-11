@extends('layouts.crm')

@section('content')
  @foreach($sections as $section)
    <!-- ======= {{$section->title}} Section ======= -->
        {!!$section->content!!}
  @endforeach
@endsection
