<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/x-icon" href="{{ asset('img/kpi.png') }}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}" media="screen,projection" />
        <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" media="screen,projection" />
        <!--Import Js -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="{{ asset('js/materialize.min.js')  }}"></script>
    </head>
@if(app()->getLocale()=='ua')
<body>

    <!-- Mobile Menu -->
    <ul id="slide-out" class="side-nav">
    <li>
        <a href="/">Головна</a>
    </li>
    <li><div class="divider"></div></li>
    <li>
        <a href="/lecturers">Викладачі</a>
    </li>
    <li><div class="divider"></div></li>
    <li>
        <a href="/conferences">Конференції</a>
    </li>
    <li>
        <a href="/olympiads">Олімпіади</a>
    </li>
    <li>
        <a href="/groups">Наукові гуртки</a>
    </li>
    <li>
        <a href="/researching">Науково-дослідницькі роботи</a>
    </li>
    <li><div class="divider"></div></li>
    <li>
        <a href="/curators">Куратори</a>
    </li>
    <li>
        <a href="/subjects">Дисципліни</a>
    </li>
    <li><div class="divider"></div></li>
    <li>
        <a href="/applicant"></a>
    </li>
    <li><div class="divider"></div></li>
    <li>
        <a href="/activity">Міжнародна діяльність</a>
    </li>
    <li><div class="divider"></div></li>
    <li>
        <a href="/employment">Працевлаштування</a>
    </li>
    <li>
        <a href="/offers">Пропозиції роботодавців</a>
    </li>
    <li>
        <a href="/employers">Роботодавцю</a>
    </li>
    <li><div class="divider"></div></li>
    <li>
        <a href="/en/"><img src="{{  asset('img/Prapor_Velikoyi_Britaniyi.png') }}" class="flag"></a>
    </li>
</ul>

    <!-- Desktop Menu -->
    <div class="head">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
        <img src="{{ asset('img/kpi.png') }}" class="head-logo">
        <div class="center-block">
            <div>
                <span>Національний технічний університет України <br>"Київський політехнічний інститут"</span>
            </div>
            <div>
                <span>Кафедра теоретичної та прикладної економіки</span>
            </div>
        </div>
    </div>
    <div class="nav-wrapper">
        <ul class="main-menu">
            <li><a href="/">Головна</a></li>
            <li><a href="/lecturers">Викладачі</a></li>
            <li><a href="#">Науки<i class="material-icons right">arrow_drop_down</i></a>
                <ul class="submenu">
                    <li><a href="/conferences">Конференції</a></li>
                    <li><a href="/olympiads">Олімпіади</a></li>
                    <li><a href="/groups">Наукові гуртки</a></li>
                    <li><a href="/researching">Науково-дослідницькі роботи</a></li>
                </ul>
            </li>
            <li><a href="#">Студентам<i class="material-icons right">arrow_drop_down</i></a>
                <ul class="submenu">
                    <li><a href="/curators">Куратори</a></li>
                    <li><a href="/subjects">Дисципліни</a></li>
                </ul>
            </li>
            <li><a href="/applicant">Абітурієнту</a></li>
            <li><a href="/activity">Міжнародна діяльність</a></li>
            <li><a href="#">Працевлаштування<i class="material-icons right">arrow_drop_down</i></a>
                <ul class="submenu">
                    <li><a href="/employment">Працевлаштування</a></li>
                    <li><a href="/offers">Пропозиції роботодавців</a></li>
                    <li><a href="/employers">Роботодавцю</a></li>
                </ul>
            </li>
            <li>
                <a href="/"><img src="{{ asset('img/Flag_of_Ukraine.png') }}" class="flag" /><i class="material-icons right">arrow_drop_down</i></a>
                <ul class="submenu">
                    <li><a href="/en/"><img src="{{ asset('img/Prapor_Velikoyi_Britaniyi.png') }}" class="flag"></a></li>
                </ul>
            </li>
        </ul>
    </div>
@yield('content')

<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Кафедра теоретичної та прикладної економіки</h5>
                <p class="grey-text text-lighten-4">м.Київ, вул.Політехнічна 12, корп.17, ауд.216</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Зв'язатись з нами</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Телефон: 204-85-07, 204-98-63</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Електронна пошта: kpte@ukr.net</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2017 Всі права захищено
        </div>
    </div>
</footer>
</body>
@else
    <body>
    <!-- MENU -->
    <ul id="slide-out" class="side-nav">
        <li>
            <a href="/en">Home</a>
        </li>
        <li><div class="divider"></div></li>
        <li>
            <a href="/en/lecturers">Lecturers</a>
        </li>
        <li><div class="divider"></div></li>
        <li>
            <a href="/en/conferences">Conferences</a>
        </li>
        <li>
            <a href="/en/olympiads">Olympiads</a>
        </li>
        <li>
            <a href="/en/groups">Scientific groups</a>
        </li>
        <li>
            <a href="/en/researching">Research and development efforts</a>
        </li>
        <li><div class="divider"></div></li>
        <li>
            <a href="/en/curators">Curators</a>
        </li>
        <li>
            <a href="/en/subjects">Disciplines</a>
        </li>
        <li><div class="divider"></div></li>
        <li>
            <a href="/en/applicant">For applicants</a>
        </li>
        <li><div class="divider"></div></li>
        <li>
            <a href="/en/activity">International activity</a>
        </li>
        <li><div class="divider"></div></li>
        <li>
            <a href="/en/employment">Employment</a>
        </li>
        <li>
            <a href="/en/offers">Suggestions from employers</a>
        </li>
        <li>
            <a href="/en/employers">For employers</a>
        </li>
        <li><div class="divider"></div></li>
        <li>
            <a href="/"><img src="{{  asset('img/Flag_of_Ukraine.png') }}" class="flag"></a>
        </li>
    </ul>
    <!-- MENU -->

    <div class="head">
        <!-- <img class="head-background" src="img/Shapka.png" /> -->
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>  <!-- Burger Button -->
        <img src="{{ asset('img/kpi.png') }}" class="head-logo">
        <div class="center-block">
            <div>
                <span>National Technical University of Ukraine <br>"Igor Sikorsky Kyiv Polytechnic Institute"</span>
            </div>
            <div>
                <span>Department of Theoretic and Applied Economics</span>
            </div>
        </div>
    </div>

    <div class="nav-wrapper">
        <ul class="main-menu">
            <li><a href="/en/">Home</a></li>
            <li><a href="/en/lecturers">Lecturers</a></li>
            <li><a href="#">Science<i class="material-icons right">arrow_drop_down</i></a>
                <ul class="submenu">
                    <li><a href="/en/conferences">Conferences</a></li>
                    <li><a href="/en/olympiads">Olympiads</a></li>
                    <li><a href="/en/groups">Scientific groups</a></li>
                    <li><a href="/en/researching">Research and development efforts</a></li>
                </ul>
            </li>
            <li><a href="#">Students<i class="material-icons right">arrow_drop_down</i></a>
                <ul class="submenu">
                    <li><a href="/en/curators">Curators</a></li>
                    <li><a href="/en/subjects">Disciplines</a></li>
                </ul>
            </li>
            <li><a href="/en/applicant">For applicants</a></li>
            <li><a href="/en/activity">International activity</a></li>
            <li><a href="#">Employment<i class="material-icons right">arrow_drop_down</i></a>
                <ul class="submenu">
                    <li><a href="/en/employment">Employment</a></li>
                    <li><a href="/en/offers">Suggestions from employers</a></li>
                    <li><a href="/en/employers">For employers</a></li>
                </ul>
            </li>
            <li><a href="/en/"><img src="{{ asset('img/Prapor_Velikoyi_Britaniyi.png') }}" class="flag"><i class="material-icons right">arrow_drop_down</i></a>
                <ul class="submenu">
                    <li><a href="/"><img src="{{ asset('img/Flag_of_Ukraine.png') }}" class="flag"></a></li>
                </ul>
            </li>
        </ul>
    </div>
    @yield('content')

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Department of Theoretical and Applied Economics</h5>
                    <p class="grey-text text-lighten-4">Kyiv, Polytechnichna Ayr 12, building 17, room 216</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Contact us</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Phone: 204-85-07, 204-98-63</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">E-mail: kpte@ukr.net</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2017 All rights are reserved
            </div>
        </div>
    </footer>

</body>
@endif
    <!-- Burger customizing -->
    <script>
        $(document).ready(function () {
            $('.modal').modal();
        });
        $('.button-collapse').sideNav({
            menuWidth: 275, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        });
        $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrain_width: false, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: false, // Displays dropdown below the button
            alignment: 'left' // Displays dropdown with edge aligned to the left of button
        });
    </script>
</html>