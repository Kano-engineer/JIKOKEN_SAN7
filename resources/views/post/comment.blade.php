@extends('layouts.app')

@include('common.aside')

@section('content')
<div class="row justify-content-center">
<div class="col-md-8">
  <div class="card">
    <div class="card-body">
      @if( $post -> diary  === NULL)
          <h3><i class="fas fa-tasks big-icon"></i>{{ $post -> todo }}</h3>
      @else
          <h3><i class="fas fa-file-alt big-icon"></i>{{ $post -> diary }}</h3>
      @endif
    </div>
  </div>
</div>
 </div>

<div class="">
           @foreach ( $comments as $comment )
             @if( $comment -> post_id ===  $post -> id )
               <p class="row justify-content-center">{{ $comment -> comment }}</p>
             @endif
           @endforeach
</div>

 <div class="row justify-content-center">
 <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form method="post" >
                    {{ csrf_field() }}
                     <p>
          <p class=""><a href="/userprofile/{{ $post -> id }}" class="a-sky">{{ $user_name }}さん</a>に</p>応援コメントを書いてあげましょう！</p>
                     <textarea name="comment" placeholder="すげえな！"></textarea>
                         <p><input class="btn made-btn-803"  name="todo" type="submit" value="コメントする！"></p>
                </form>
        </div>

</div>
</div>


@endsection
