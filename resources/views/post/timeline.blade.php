@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
      <h5>みなさん、今日も頑張っています<i class="fas fa-thumbs-up"></i>GOOD LUCK!!</h5>
  </div>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          @foreach ( $posts as $post )
          @if( $post -> diary  === NULL)
          <div class="posts-todo">
            <h5><i class="fas fa-tasks big-icon"></i><a href="{{action('HomeController@showUserProfile',$post -> id)}}" class="a-sky">
              {{ Auth::user()->name }}</a>の<span class="posts-todo-innner">TODO</span>
            </h5>
            <p>{{ $post -> todo }}</p>
            <a href="{{action('PostController@showComment',$post -> id )}}" class="a-sky"><i class="far fa-comment-dots"></i></a>
          </div><hr>
          @else( $post -> todo  === NULL)
            <div class="posts-diary">
              <h5><i class="fas fa-file-alt big-icon"></i><a href="{{action('HomeController@showUserProfile',$post -> id)}}" class="a-sky">
                {{ Auth::user()->name }}</a>の<span class="posts-diary-innner">DIARY</span>
              </h5>
              <p>{{ $post -> diary }}</p>
              <a href="{{action('PostController@showComment',$post -> id )}}" class="a-sky"><i class="far fa-comment-dots"></i></a>
            </div><hr>
          @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
