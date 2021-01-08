@include('common.head')
@include('common.navbar')
@section('title','投稿')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1 class="row justify-content-center">OK!送信できました！</h1>
                    <div class="row justify-content-center send-to">
                        <p><a href="/post/timeline" class="send-link">
                            <i class="fas fa-users big-icon-posts"></i><br>タイムラインで確認！</a>
                        </p>
                    </div>
                    <div class="row justify-content-center send-to">
                        <p><a href="/home" class="send-link">
                            <i class="fas fa-user big-icon-posts"></i><br>マイページへ戻る</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>