
@section('aside')
<div class="containar">
<aside id="sidebar">
   <div class="sidebar">
      <div class="sidebar-item">
         <a href="{{action('HomeController@index')}}" class="btn btn-sky">{{ Auth::user()->name }}ページへ</a>
<p>USER_NAME：{{ Auth::user()->name }}</p>
<p>big_targets:</p>
<p>middle_targets:</p>
<a href="{{action('TargetController@index')}}" class="btn made-btn-803">newpost(targets)</a>
<p>Everyone's post</p>
<a href="{{action('PostController@showTimeline')}}" class="btn made-btn-803">more</a>
</div>
</div>
</aside>
<div>

@endsection

