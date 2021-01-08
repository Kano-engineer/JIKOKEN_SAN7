@extends('layouts.app')
@include('common.aside')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="home/myprofile" class="btn btn-sky">プロフィールへ</a>
                    <a href="/post/timeline" class="btn btn-sky">タイムラインへ</a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                             {{ session('status') }}
                        </div>
                    @endif
                    <div class="flash-text">{{ __('You are logged in!') }}</div>
                </div>
                <div class="card-body">
                    <div class="card-inner row justify-content-between">
                        <p class="posts-title">
                            <i class="fas fa-tasks big-icon-posts"></i><br>
                            <span class="posts-title-bold">TO-DO LIST<span>
                            <i class="fas fa-caret-right"></i>
                        </p>
                        <ul>
                            @foreach ($tasks as $task)
                            <li>{{$task->todo}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-inner row justify-content-between">
                        <p class="posts-title">
                            <i class="fas fa-file-alt big-icon-posts"></i><br>
                            <span class="posts-title-bold">SHORT DIARY</span>
                            <i class="fas fa-caret-right"></i>
                        </p>
                        <ul>
                            @foreach ($diaries as $diary)
                            <li>{{$diary->diary}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="btn-right">
                        <a href="{{action('PostController@index')}}">
                        <button class="btn btn-warning" type="submit">newpost(todo/diary)</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="btn-right">
                        <a href="{{action('BookmarkController@index')}}">
                        <button class="btn btn-warning" type="submit">bookmark</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row justify-content-center">
     
</div>
@endsection
