<!DOCTYPE html>
<html>

<head>

    @if (App::getLocale() == 'en')
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="{{ asset('webSite/fonts/icomoon/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('webSite/css/Bootstrap/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('webSite/css/mainStyle/style.css') }}" />
    @else
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="{{ asset('webSite/fonts/icomoon/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('webSite/css/Bootstrap/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('webSite/css/mainStyle/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('webSite/css/mainStyle/homestyle.css') }}" />
    @endif
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Eye Ventures</title>
    <link rel="icon" href="" />
</head>

<body>
    <!-- Header -->
    <div class="header-menu">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-md displaySmallBlock">
                <a class="navbar-brand w-75" href="">
                    <img src="{{ asset('webSite/assets/images/LOGOLight.png') }}" id="light-img" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                @if(Auth::user())
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-md-auto mb-2 me-md-5 mb-lg-0">
                        <li class="nav-item mx-md-auto mx-sm-2">
                            <a class="nav-link" id="home" aria-current="page"
                                href="">Home</a>
                        </li>
                        <li class="nav-item mx-md-auto mx-sm-2">
                            <a class="nav-link" aria-current="page"
                                href="{{route('news.index')}}">News</a>
                        </li>
                        <li class="nav-item mx-md-auto mx-sm-2">
                            <a class="nav-link " aria-current="page"
                                href="{{route('posts.index')}}">Posts</a>
                        </li>
                    
                        <div class="login-Button ml-3 mx-sm-2 ">
                            
                                <button class="btn btn-sm loginButton" type="button">
                                    <a href="{{ route('authLogout') }}"
                                        style="text-decoration: none; color:white;">LOGOUT</a>
                                </button>
                        </div>
                    
                        




                    </ul>
                    
                </div>
                @endif
            </div>
        </nav>
    </div>
