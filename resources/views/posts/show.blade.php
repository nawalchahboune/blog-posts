
@extends('layouts.app')
@section('diffContentview')
      <div class=" container mt-4">
      <div class="card">
        <h5 class="card-header">post info</h5>
        <div class="card-body">
          <h5 class="card-title">title: {{$postInf['title']}}</h5>
          <h5 class="card-title">description: {{$postInf['content']}}</h5>
          <p class="card-text"></p>
         
        </div>
      </div>
      
      <div class="mt-4">
      <div class="card">
        <h5 class="card-header">creator info</h5>
        <div class="card-body">
          <h5 class="card-title">name: {{$postInf['author']}} </h5>
          <p class="card-text"></p>
          <h5 class="card-title">mail: {{App\Models\Author::where('id',$postInf['author_id'])->first()->email}}</h5>
        </div>
      </div>
       </div>
       
      </div>
@endsection
@section('titre') show @endsection