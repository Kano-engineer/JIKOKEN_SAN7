@include('common.head')
@include('common.navbar')

@section('title','投稿')
<a href="{{action('HomeController@index')}}">
     <button class="btn btn-sky" type="submit">jikoken</button>
</a>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header posts-title-bold">TODO LIST or SHORT DIARY</div>
                <div class="card-body">
                    <form method="post" action="">
                        {{ csrf_field() }}
                        <h1>新しいポストを作成しましょう</h1>
                            <ul>
                                <li>TODO:今日やること</li>
                                <li>DIARY:今日やったこと</li>
                            </ul>
                                <textarea name="todo" placeholder="とても面白い本を(3章まで)読む。"></textarea>
                                 <input type="hidden" name="user_id"  value="{{Auth::user()->id}}">
                                <p><button class="btn made-btn-803 input-right"type="submit">TODOを作成</button></p>

                                <textarea name="diary" placeholder="お母さんのお手伝いをしました。喜んでいました。"></textarea>
                                 <input type="hidden" name="user_id"  value="{{Auth::user()->id}}">
                                <p><button class="btn made-btn-803 input-right"type="submit">DIARYを作成</button></p>
                    </form>
                </div>
            </div>
        </div>  
    </div>
</div>
