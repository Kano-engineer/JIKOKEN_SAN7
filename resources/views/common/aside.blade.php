@section('aside')
<aside>
   <div class="card-body">
     <h2>USER_NAME：{{ Auth::user()->name }}</h2>
     <h3>最終目標:</h3>
     <h4>日々の目標:</h4>
        <a href="{{action('TargetController@index')}}">
           <button class="btn btn-danger" type="submit">▷目標を設定する</button>
        </a>
     <h4>Everyone's post</h4>
        <a href="{{action('PostController@showTimeline')}}">
           <button class="btn btn-danger" type="submit">▷タイムラインを見る</button>
        </a>
      <h4>新しいタスクが増えましたか？</h4>
         <a href="{{action('PostController@index')}}">
           <button class="btn btn-danger" type="submit">▷todo/日記を投稿する</button>
        </a>
   </div>
</aside>
@endsection
