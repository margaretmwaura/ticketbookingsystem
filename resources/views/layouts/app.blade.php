<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- This scripts I am adding here is for purposes of design -->
     <!-- Latest compiled and minified CSS -->
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}

<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>


    <!-- Scripts -->
    <!-- This script should not be enabled it is causing the ckeditor not to show-->
    
    <!-- there was a differ that was causing the ckeditor not to show -->
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    

   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<!-- This php code is to allow smooth working of the admin -->
@php
    use App\Http\Controllers\UserNumberController;
    $num = UserNumberController::number_of_users();
@endphp
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active">
                            <a class="nav-link" href="/tbapp/public/">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/tbapp/public/#title">About</a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link" href="/tbapp/public/createdevents">Events</a>
                          </li>
                          {{-- <li class="nav-item">
                            <a class="nav-link" href="/lsapp/public/posts">Blog</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/lsapp/public/posts/create">Create Post</a>
                          </li>  --}}

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                          
 <!-- No need for the round brackets -->
                            @if(app('App\Http\Controllers\UserNumberController')->number_of_users() >=2 )
                               

                                <li class="nav-item">
                                    <a class="nav-link" href="#" onclick="myFunction()" > Register</a>
                                </li>
                            @else                  

                                   @if(Route::has('register'))
                                   <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                   </li>
                                  @endif

                            @endif

                        @else
                            <li class="nav-item">
                            <a class="nav-link" href="/tbapp/public/createdevents/create">Create Event</a>
                            </li>
                                                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @include('inc.messages')
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script type="text/javascript">
        CKEDITOR.replace('editor');
    </script>
    <script>
        function myFunction() {
          alert("There is an admin already");
        }
       </script>

<script>
  
      </body>
</html>
