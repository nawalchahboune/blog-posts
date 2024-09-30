@extends('layouts.app')
@section('diffContentview')
<!-- /resources/views/post/create.blade.php -->
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
 
<!-- Create Post Form -->
<form method="POST" action="{{route("post.store",) }}">
  @csrf
  
    <label for="floatingInput">Title</label>
    <div class="form-floating mb-3">
      <input type= 'text' name='postTitle' class="form-control"  placeholder="title" required value="{{old('postTitle')}}">
      
    </div>
    <br>
    <div>
      <label for="floatingInput">Description</label>
      <input type= 'text' name='postDescription' rows="3" value="{{old('postDescription')}} "class="form-control" placeholder="this post is for ... " required>
    
    </div>
    
    
    <br>
    <label for="floatingInput">Author</label>
    <div class="form-floating">
      <select name='postCreator' value="{{old('postCreator')}}" class="form-control"  >
        @foreach ($users as $user )
          <option value="{{$user->name}}"> {{$user->name}} </option>
        @endforeach
        
      </select>
    </div>
    <br>
    <button  class="btn btn-success">submit</button>
  </div>
</form>
@endsection
@section('titre') create @endsection





