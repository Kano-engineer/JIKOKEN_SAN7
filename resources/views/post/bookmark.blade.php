@include('common.head')
@include('common.navbar')
@include('common.aside')
@section('title','ブックマーク')
<a href="{{action('HomeController@showMyProfile')}}">
    <button class="btn btn-danger" type="submit">jikoken</button>
</a>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('bookmark') }}</div>
            <div class="card-body">
                <form method="post" action="">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id"  value="{{Auth::user()->id}}">
                    <h1>ブックマーク登録</h1>
                    <ul style="list-style: none;">
                    <li>タイトル<input type="text" name="title"></li>
                    <li>URL<input type="text" name="url"></li>
                    <li>説明文<input type="text" name="explanatory_text"></li>
                    </ul>
                    </p>
                        <button class="btn btn-primary" name="bookmark" type="submit">保存</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
