@extends("layouts.app")

 
@section('diffContentview')
<div class= "container mt-4">
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="POST"  action="{{route("post.update",$post['id'])}}">
  @csrf
  
  @method("PUT")
    <label for="floatingInput">Title</label>
    <div class="form-floating mb-3">
      
      <input type= 'text' value="{{$post->title}}" name='postTitle' class="form-control" id="floatingInput" placeholder="title">
      

    </div>
    <br>
    
    <div>
      <label for="floatingInput">Description</label>
      <input type= 'text' rows="3" name='postDescription'  value={{$post->content}}   class="form-control"placeholder="this post is for ... ">
    
    </div>
    <br>
    <label for="floatingInput">Author</label>
    <div class="form-floating">
      <select name='postCreator' class="form-control" value="{{$post->author}}">
        @foreach ($authors as $author )
          <option @selected($post->author_id==$author->id) value="{{$author->name}}"> {{$author->name}}</option>
        @endforeach
      </select>
    <br>
<button class="btn btn-success"> Edit </button>

</div>
</form>
@endsection
@section('titre') edit @endsection