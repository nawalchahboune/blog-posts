@extends('layouts.app')
@section('diffContentview')

      <div class= "conatainer mt-4">
        
          
        <div class="text-center" > 
            <a href="{{route('post.create')}}" class="btn btn-info">Create post</a>
        </div>
      
        <div class="conatainer mt-3">
        
        <table class="table">
            <thead>
                
              <tr>
                <th scope="col">#</th>
                <th scope="col">tile</th>
                <th scope="col">Description</th>
                <th scope="col">Posted by</th>
                <th scope="col">Created at</th>
                
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td >{{$post['id']}}</td>
                        <td >{{$post['title']}}</td>
                        <td>{{$post['content']}}</td>
                        <td>{{$post['author']}}</td>
                        <td>{{$post['created_at']->format('Y-m-d') }}</td>
                        

                        <td>
                            <a href="{{ route('post.show', $post['id'])}}" class="btn btn-info">View</a>
                            <a href="{{ route('post.edit', $post['id'])}}" class="btn btn-primary">Edit</a>
                            
                            
                            <form style="display:inline" method="POST" action={{ route('post.delete',$post['id']) }}>
                              @csrf
                              @method('DELETE')
                              <button type="submit" onclick="return confirm('Do you really want to delete this post?')" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        
                        
                    </tr>
                
                @endforeach
              
              
            </tbody>
            
          </table>
      </div>
    </div>
@endsection
@section('titre')index @endsection