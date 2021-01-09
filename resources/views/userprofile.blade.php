@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                 　<h1>プロフィール</h>
                </div>
                <div class="card-body">
                　<div style="margin-top: 30px;">

               <!-- プロフィール画像を表示 -->
                <p><img src="{{ asset('storage/profileImg/'.$user -> my_pic) }}" alt="プロフィール画像"></p>
                
   　　　　　　　　　　<table class="table table-striped">  
   　　　　　　　　　　　<tr>
   　　　　　　　　　　　　<th>氏名</th>
   　　　　　　　　　　　　<td>{{ $user -> name }}</td>
   　　　　　　　　　　　</tr>  
   　　　　　　　　　　</table>
   　　　　　　　　　</div>
                </div>
            </div>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h2>{{ $user -> name }}の投稿一覧</h2>
        </div>
        <div class="card-body">
          <div class="posts-todo">
            <h5><i class="fas fa-tasks big-icon"></i>
              <span class="text-bold posts-todo-innner">TODO</span><hr>
            </h5>
              @foreach ( $posts as $post )
              @if( $post -> diary  === NULL)
              <a href="{{action('PostController@showComment',$post -> id )}}"><p>TODO：{{ $post -> todo }}</p><hr></a>
              @endif
              @endforeach
          </div>
          <div class="posts-diary">
            <h5><i class="fas fa-tasks big-icon"></i>
              <span class="text-bold posts-diary-innner">DIARY</span><hr>
            </h5>
               @foreach ( $posts as $post )
               @if( $post -> todo  === NULL)
               <a href="{{action('PostController@showComment',$post -> id )}}"><p>DIARY：{{ $post -> diary }}</p><hr></a>
               @endif
               @endforeach
          </div>
>>>>>>> 2ab4648afab4f63a3638f88373f0ed8a3d34b8ab
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
