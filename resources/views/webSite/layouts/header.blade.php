<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet" />
    @if (App::getLocale() == 'en')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="{{ asset('webSite/fonts/icomoon/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('webSite/css/Bootstrap/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('webSite/css/mainStyle/style.css') }}" />
    @else
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
            integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="{{ asset('webSite/fonts/icomoon/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('webSite/css/Bootstrap/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('webSite/css/mainStyle/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('webSite/css/mainStyle/style-ar.css') }}" />
        
       
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
                <a class="navbar-brand w-75"  href="{{route('index')}}">
                    <img src="{{ asset('webSite/assets/images/LOGOLight.png') }}" id="light-img" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-md-auto mb-2 me-md-5 mb-lg-0">
                        <li class="nav-item mx-md-auto mx-sm-2">
                            <a class="nav-link active" aria-current="page" id="home" href="{{route('index')}}">{{trans('main_trans.Home')}}</a>
                        </li>
                        <li class="nav-item mx-md-auto mx-sm-2">
                            <a class="nav-link" aria-current="page" href="Terms.html">{{trans('main_trans.Submission')}}</a>
                        </li>
                        <li class="nav-item dropdown mx-md-auto mx-sm-2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{trans('main_trans.Press')}}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('blogPages.index')}}">{{trans('main_trans.Blogs')}}</a>
                                <a class="dropdown-item" href="{{route('newsPages.index')}}">{{trans('main_trans.News')}}</a>
                            </div>
                        </li>
                        <li class="nav-item mx-md-auto mx-sm-2">
                            <a class="nav-link" aria-current="page" href="{{route('faqs.index')}}">{{trans('main_trans.FAQ')}}</a>
                        </li>

                        <li class="nav-item dropdown mx-md-auto mx-sm-2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class='fa fa-globe'></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a rel="alternate" hreflang="{{ $localeCode }}"  id="mylink" data-href="{{ LaravelLocalization::getCurrentLocale() }}"
                                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a><br>
                                @endforeach
                            </div>
                        </li>

                    </ul>
                    <div class="login-Button ml-3 mx-sm-2 ">
                        @if (auth()->guard('web')->user())
                            <button class="btn btn-sm loginButton" type="button">
                                <a href="{{ route('authLogout') }}"
                                    style="text-decoration: none; color:white;">LOGOUT</a>
                            </button>
                        @else
                            <button class="btn btn-sm loginButton" type="button">
                                <a href="{{ route('authLogin') }}"
                                    style="text-decoration: none; color:white;">{{trans('main_trans.LOGIN')}}</a>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
    </div>
