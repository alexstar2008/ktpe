<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>@yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="~/scripts/tinymce/tinymce.min.js"></script>
    <!-- Script to wire up your TinyMCE editor -->
    <script type="text/javascript">
        // Initialize your tinyMCE Editor with your preferred options
        tinyMCE.init({
            // General options
            mode: "textareas",
            theme: "modern",
            // Theme options
            theme_advanced_buttons1: "save,newdocument,|,bold,italic,underline, strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|, styleselect,formatselect,fontselect,fontsizeselect",
            theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,|, search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|, link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|, forecolor,backcolor",
            theme_advanced_buttons3: "tablecontrols,|,hr,removeformat,visualaid,|, sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
            theme_advanced_buttons4: "insertlayer,moveforward,movebackward,absolute,|, styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|, visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
            theme_advanced_toolbar_location: "top",
            theme_advanced_toolbar_align: "left",
            theme_advanced_statusbar_location: "bottom",
            theme_advanced_resizing: true,

            // Example content CSS (should be your site CSS)
            content_css: "css/example.css"
        });
    </script>
    <link href="{{ asset('css/style.admin.css')  }}" rel="stylesheet"/>
    <link href="{{ asset('css/bootstrap.css')  }}" rel="stylesheet"/>
    <script src="{{ asset('js/bootstrap.min.js')  }}"></script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse" aria-expanded="false">
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
                @auth
                    <ul class="nav navbar-nav">
                        <li><a href="/admin/news">Новини</a></li>
                        <li><a href="/admin/conferences">Конференції</a></li>
                        <li><a href="/admin/competitions">Олімпіади</a></li>
                        <li><a href="/admin/offers">Вакансії</a></li>
                    </ul>
            @endauth

            <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Вхід</a></li>
                    @endguest
                    @auth
                            {{--<li><a href="{{ route('register') }}">Додати користувача</a></li>--}}
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                   aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            Вийти
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <div class="container body-content">
        @yield('content')
        <hr/>
        <footer class="text-center">
            <p>&copy; 2017 - Всі права захищено</p>
        </footer>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
