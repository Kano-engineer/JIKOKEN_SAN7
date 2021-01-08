@section('aside')
<aside>
   <div class="card-body">
     <h2>USER_NAME：{{ Auth::user()->name }}</h2>
     <h3>big_targets:</h3>
     <h4>middle_targets:</h4>
        <a href="{{action('TargetController@index')}}">
           <button class="btn btn-warning" type="submit">newpost(targets)</button>
        </a>
     <h4>Everyone's post</h4>
        <a href="{{action('PostController@showTimeline')}}">
           <button class="btn btn-warning" type="submit">more</button>
        </a>
   </div>
</aside>
@endsection
