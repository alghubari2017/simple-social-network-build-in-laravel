<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/we.css') }}" rel="stylesheet">
    <style>
            html, body {
                
                
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            
           
            .container{
                background-color: green; 
                
                
            }
            . dropdown-menu dropdown-menu-right{
                background-color: #0099ff;     
            }
           
            
            </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bgbackground-color shadow-sm">
            <div class="container">
                <a class="navbar-brand text-light" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @guest
                     @if (Route::has('register'))
                    <ul class="navbar-nav mr-auto">
                   
                    <a class="nav-link text-text-danger" href="{{ route('posts.index') }}">{{ __('post') }}</a>
                   
                    </ul>
                    @endif
                    @else


                    <ul class="navbar-nav mr-auto">
                    <a class="nav-link text-light" href="">{{ __('Message') }}</a>
                    </ul>
                     
                    <ul class="navbar-nav mr-auto">
                    <a class="nav-link text-light" href="">{{ __('Notification') }}</a>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                    <a class="nav-link text-light" href="{{ route('posts.index') }}">{{ __('Posts') }}</a>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                    <a class="nav-link text-light" href="{{ route('category.create') }}">{{ __('Category') }}</a>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                    <a class="nav-link text-light" href="{{ route('tag.create') }}">{{ __('Tag') }}</a>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                    <a class="nav-link text-light" href="{{ route('tag.index') }}">{{ __('ViewTag') }}</a>
                    </ul>


                    <ul class="navbar-nav mr-auto">          
             
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 text-light" type="submit">Search</button>
    </form>
    </ul>
    <ul class="navbar-nav mr-auto">
                    <a class="nav-link text-light" href="{{ route('posts.create')}}">{{ __('Home') }}</a>
                    </ul>
    @endguest
                    <!-- Right Side Of Navbar -->
   <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                                             @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->id }} <span class="caret"></span>
                                    <img src="app\storage\app\public\upload\a.jpg" class="rounded" alt="...">
                                </a>
                                

                                <div class="dropdown-menu dropdown-menu-right bg-primary" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item text-light" href="{{ route('user.index' )}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('profile-form').submit();">
                                        {{ __('ViewUser') }}
                                    </a> 
                                    <a class="dropdown-item text-light" href="{{ route('user.create' )}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('creat-user-form').submit();">
                                        {{ __('CreateUser') }}
                                    </a> 
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                   
                                    

                                    <form id="profile-form" action="{{ route('user.index' )}}" method="GET" style="display: none;">
                                        @csrf
                                    </form>

                                    <form id="creat-user-form" action="{{ route('user.create' )}}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                   
                                </div>
                                
                               
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

       
    </div>
    <div style="background:white">
    <main class="py-4 bg-ligh">
            @yield('content')
        </main>
    </div>
</body>
</html>
