@extends('layouts.crm')

@section('content')
<script src="https://cdn.tiny.cloud/1/vrvoqi7ukf9wnqawr4u87jiebom8a6judcg36riuczpjsf7t/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src='https://cdn.tiny.cloud/1/vrvoqi7ukf9wnqawr4u87jiebom8a6judcg36riuczpjsf7t/tinymce/5/tinymce.min.js' referrerpolicy="origin">
</script>
<script>
  tinymce.init({
    selector: '#mytextarea'
  });
</script>
  <section id="hero" class="d-flex align-items-center" style="min-height:1200px!important;">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="padding-top:150px; padding-bottom:100px;">
          <h2 style="color:#333;!important">Edititng the " {{$section->title}} " section</h2>
          <a href="/pages">Back to admin</a>
          <form action="/section/update" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$section->id}}" />
            <label style="width:100%">Title</label>
            <input type="text" class="form-control" value="{{$section->title}}" name="title" />
            <label style="width:100%">Content</label>
            <textarea class="form-control" rows="6" id="mytextarea" name="content" style="min-height:500px!important;">{{$section->content}}</textarea>
            <label style="width:100%">Description</label>
            <textarea class="form-control" name="description">{{$section->description}}</textarea>
            <label style="width:100%">Page</label>
            <select name="page_id" class="form-control">
              <?php $pages = \App\Page::all();?>
              @foreach($pages as $page)
                <option value="{{$page->id}}">{{$page->title}}</option>
              @endforeach
            </select>
            <input type="submit" style="width:100%" class="btn btn-primary" value="Save">
          </form>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div>
      </div>
    </div>
  </section>
@endsection
