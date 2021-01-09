@extends('layouts.app')

@include('common.aside')

@section('content')


<div class="card">
    <div class="card-body">
        <form method="post" action="/post/comment/{{ $post -> id }}">
            {{ csrf_field() }}
             <p>コメントを編集</p>
             <p>編集するコメント；{{ $comment -> comment }}</p>
             <textarea name="comment" placeholder=""></textarea>
             <input type="hidden" name="post_id" value="{{ $post -> id }}">
             <input type="hidden" name="comment_id" value="{{ $comment -> id }}">
                 <p><input class="btn btn-primary" type="submit" value="編集する！"></p>
        </form>
</div>




@endsection