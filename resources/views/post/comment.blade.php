@extends('layouts.app')

@include('common.aside')

@section('content')

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

 


@endsection