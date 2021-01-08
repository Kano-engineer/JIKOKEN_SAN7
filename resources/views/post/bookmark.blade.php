@include('common.head')
@include('common.navbar')
@section('title','ブックマーク')
<div class="container">
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
                            <button class="btn made-btn-803" name="bookmark" type="submit">保存</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
