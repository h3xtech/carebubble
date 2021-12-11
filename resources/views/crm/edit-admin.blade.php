@extends('layouts.crm')

@section('content')
<section style="padding-top:150px;">
    <h2 style="color:#333;!important">Edititng the " {{$page->title}} " page</h2>
  <a href="/pages">Back to admin</a>
  @foreach($sections as $section)
    <!-- ======= {{$section->title}} Section ======= -->
        <a href="/section/edit/{{$section->id}}">{!!$section->content!!}</a>
  @endforeach
</section>
@endsection
