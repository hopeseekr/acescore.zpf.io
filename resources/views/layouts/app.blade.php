<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ACE Score Quiz | Childhood Adversity Test</title>

    <meta name="description"         content="A simple quiz to find out your ACE score of childhood adversity."/>
    <meta name="twitter:card"        content="summary_large_image"/>
    <meta name="twitter:creator"     content="@hopeseekr"/>
    <meta name="twitter:title"       content="Find your ACE Childhood Adversity Score"/>
    <meta name="twitter:description" content="A simple quiz to find out your ACE score of childhood adversity."/>
    <meta name="twitter:image"       content="https://acescore.zpf.io/images/ace-twitter.jpg"/>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="https://acestoohigh.com/resources/" target="_blank">What is an ACE Score?</a></li>
                        <li><a href="https://developingchild.harvard.edu/media-coverage/take-the-ace-quiz-and-learn-what-it-does-and-doesnt-mean" target="_blank">Even more Info</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="main">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Include the JS files here for maximum page performance. -->
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
