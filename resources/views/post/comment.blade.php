@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          @if( $post -> diary  === NULL)
            <h3><i class="fas fa-tasks big-icon"></i>{{ $post -> todo }}</h3>
          @else
            <h3><i class="fas fa-file-alt big-icon"></i>{{ $post -> diary }}</h3>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
 <div class="row justify-content-center">
   <p>
        @if( $post -> diary  === NULL)
            <div class="row justify-content-center">
              <p class="">todo:{{ $post -> todo }}</p>
              <p class=""><a href="/userprofile/{{ $post -> id }}">投稿者:　{{ $user_name }}</a></p>
            </div>
        @else
            <div class="row justify-content-center">
              <p class="">diary:{{ $post -> diary }}</p>
            </div>
        @endif
    </p>
 </div>

 <div class="row justify-content-center">
　　　　　
<div class="card">
    <div class="card-body">
        <form method="post" action="/post/comment/{{ $post -> id }}">
            {{ csrf_field() }}
             <p>コメントを書く</p>
             <textarea name="comment" placeholder=""></textarea>
             <input type="hidden" name="post_id" value="{{ $post -> id }}">
                 <p><input class="btn btn-primary" name="todo" type="submit" value="コメントする！"></p>
        </form>
</div>

</div>
</div>

 <div class="">
           @foreach ( $comments as $comment )
             @if( $comment -> post_id == $post -> id )
                 <p class="row justify-content-center">{{ $comment -> comment }}</p>
                   <div class="row justify-content-center">
                    <a href="/post/commentedit/{{ $post -> id }}/{{ $comment -> id }}"><button type="submit" class="btn btn-warning" onclick='return confirm("編集しますか？");'>コメントを編集</button></a>
                    <a href="/post/commentdelete/{{ $post -> id }}/{{ $comment -> id }}"><button type="submit" class="btn btn-danger" onclick='return confirm("削除しますか？");'>コメントを削除</button></a>
                   </div>
             @endif
           @endforeach
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <form method="post" >
            {{ csrf_field() }}
            <p class=""><a href="/userprofile/{{ $post -> id }}" class="a-sky">{{ $user_name }}さん</a>に
            </p><p>応援コメントを書いてあげましょう！
            </p>
            <textarea name="comment" placeholder="すげえな！"></textarea>
            <p><input class="btn made-btn-803"  name="todo" type="submit" value="コメントする！"></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
