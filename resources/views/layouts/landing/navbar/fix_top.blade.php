<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <a href="index.html" class="logo me-auto"><img src="{{asset('medicio/assets/img/logo.png')}}" alt=""></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link @if($navbar=='home'): active @endif " href="/">Home</a></li>
                <li><a class="nav-link @if($navbar=='about'): active @endif" href="{{route('home.about')}}">About</a></li>
                <li><a class="nav-link @if($navbar=='services'): active @endif" href="{{route('home.services')}}">Services</a></li>
                <li><a class="nav-link @if($navbar=='events'): active @endif" href="{{route('home.events')}}">Events</a></li>
                <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
                <li class="dropdown"><a href="#" class="@if($navbar=='media'): active @endif"><span>Media</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{route('home.foto')}}" class=" @if($title=='Media Foto'): active @endif">Foto</a></li>
                        <li><a href="{{route('home.video')}}" class=" @if($title=='Media Video'): active @endif">Video</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>{{url()->previous()}}</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link @if($navbar=='contact'): active @endif" href="{{route('home.contact')}}">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
