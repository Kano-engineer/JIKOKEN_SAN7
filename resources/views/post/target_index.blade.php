@include('common.head')
@include('common.navbar')

@section('title','目標')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('target') }}</div>
                <div class="card-body">
                <form method="post" action="">
                    {{ csrf_field() }}
                    <h1>目標を作りましょう</h1>
                    <p>こんなふうに書いてみて</p>
                    <p>Big:車を買う。</p>
                    <p>Middle:就職する。</p>
                    <textarea name="big" placeholder=""></textarea>
                     <input type="hidden" name="user_id"  value="{{Auth::user()->id}}">
                         <p><button class="btn btn-primary" type="submit">BIGを作成</button></p>

                    <textarea name="middle" placeholder=""></textarea>
                     <input type="hidden" name="user_id"  value="{{Auth::user()->id}}">
                         <p><button class="btn btn-warning"  type="submit">MIDDLEを作成</button></p>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

