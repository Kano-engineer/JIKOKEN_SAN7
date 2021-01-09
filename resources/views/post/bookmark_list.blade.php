@include('common.head')
@include('common.navbar')
@section('title','ブックマーク')

<div class="row justify-content-center">  
                         <div>
                           <h1>Bookmark-List</h1>
                            @foreach( $bookmarks as $bookmark )
                              @if( $bookmark -> user_id == $user -> id )
                              <div>
                                <p>title：{{ $bookmark -> title }}</p>
                                <p>URL：{{ $bookmark -> url }}</p>
                                <p>説明：{{ $bookmark -> explanatory_text }}</p>
                              </div>
                              @endif
                            @endforeach
                           </div>
</table>