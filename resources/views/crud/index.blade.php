<center><h1>Altie Blog</h1></center>
<center><a href="{{action('CRUDController@create')}}" class="btn btn-primary">Add</a></center>
@extends('master')
@section('content')
  <div class="container">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Post</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cruds as $post)
      <tr>
        <td>{{$post['id']}}</td>
        <td>{{$post['title']}}</td>
        <td>{{$post['post']}}</td>
        <td><a href="{{action('CRUDController@edit', $post['id'])}}" class="btn btn-primary">Edit</a></td>
        <td>
          <form action="{{action('CRUDController@destroy', $post['id'])}}" method="post">
           <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <button class="btn btn-primary" type="submit">Delete</button>
          </form>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection