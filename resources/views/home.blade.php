@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header head-light">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="flash-text">{{ __('You are logged in!') }}</div>
            </div>
            <h3 class="text-bold">MY PAGE</h3>
            <div class="btn-right">タスクや日記を追加しましょう！
                <a href="{{action('PostController@index')}}">
                    <button class="btn made-btn-803" type="submit">投稿画面へ</button>
                </a>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-inner row justify-content-left">
                        <p class="posts-title">
                            <i class="fas fa-tasks icon-posts"></i><span class="posts-title-bold">TO-DO LIST<span>
                        </p>
                    </div>
                </div>
                <div class="card-body">
                    <ul>
                        @foreach ($tasks as $task)
                        <li class="li-ellipsis">{{$task->todo}}
                            <a href="{{action('PostController@showComment',$task ->id )}}" class="a-sky">続く</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-header">
                    <div class="card-inner row justify-content-left">
                        <p class="posts-title">
                            <i class="fas fa-file-alt icon-posts"></i><span class="posts-title-bold">SHORT DIARY</span>
                        </p>
                    </div>
                </div>
                <div class="card-body">
                    <ul>
                        @foreach ($diaries as $diary)
                        <li class="li-ellipsis">{{$diary->diary}}
                            <a href="{{action('PostController@showComment',$diary ->id )}}" class="a-sky">続く</a>
                        </li>
                        @endforeach
                        </ul>
                </div>
                <div class="card-header">
                    <div class="card-inner row justify-content-left">
                        <p class="posts-title">
                            <i class="fas fa-file-alt icon-posts"></i><span class="posts-title-bold">MY BOOK MARK</span>
                        </p>
                    </div>
</div>
                <div class="card-body">
                    <div class="btn-right">
                        <a href="{{action('BookmarkController@index')}}" class="btn made-btn-803">後でみるサイトを保管します</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>




<div class="row justify-content-center">
     
</div>
@endsection
