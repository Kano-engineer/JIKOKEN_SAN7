<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                
                    <!-- Right Side Of Navbar -->

                    @if ( Auth::check() )
                    <ul class="navbar-nav mr-auto">
                        <div class="sidebar">
                            <div class="sidebar-item">
                                <h2>{{ Auth::user()->name }}</h2>
                                    <p><a href="/home/myprofile" class="a-sky">登録情報</a></p>
                                <div class="btn-sidebar">
                                    <a href="/post/timeline" class="btn btn-sky btn-block">タイムライン</a>
                                    <a href="{{action('HomeController@index')}}" class="btn btn-sky btn-block">マイページ</a>
                                    <a href="{{action('TargetController@index')}}" class="btn btn-sky btn-block">目標を投稿</a>
                                    <a href="{{action('PostController@index')}}" class="btn btn-sky btn-block">TODO/日記を投稿</a>
                                </div>
                            </div>
                        </div>
                    </ul>
                    @endif
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
