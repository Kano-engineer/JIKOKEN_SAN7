@section('aside')
<aside>
   <div class="">
   　<a href="{{action('HomeController@index')}}" class="btn btn-sky">マイページへ
    </a>
     <h2>USER_NAME：{{ Auth::user()->name }}</h2>
     <h3>big_targets:</h3>
     <h4>middle_targets:</h4>
        <a href="{{action('TargetController@index')}}" class="btn made-btn-803">newpost(targets)</a>
     <h4>Everyone's post</h4>
        <a href="{{action('PostController@showTimeline')}}" class="btn made-btn-803">more</a>
   </div>
</aside>
@endsection
