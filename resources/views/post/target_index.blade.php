@include('common.head')
@include('common.navbar')

@section('title','目標')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header posts-title-bold">TARGET</div>
                    <div class="card-body">
                        <form method="post" action="">
                            {{ csrf_field() }}
                            <h1>目標を作りましょう</h1>
                            <ul>
                                <li>Big：最終的な大きな目標</li>
                                <li>Middle：最終目標の前に叶えるべき目標</li>
                            </ul>
                            <textarea name="big" placeholder="車を買う〜！"></textarea>
                                <input type="hidden" name="user_id"  value="{{Auth::user()->id}}">
                                <p><button class="btn made-btn-803 input-right" type="submit">BIGを作成</button></p>
                            <textarea name="middle" placeholder="就職する〜"></textarea>
                                <input type="hidden" name="user_id"  value="{{Auth::user()->id}}">
                                <p><button class="btn made-btn-803 input-right"  type="submit">MIDDLEを作成</button></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

