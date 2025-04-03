<!DOCTYPE html>
<html lang="en">

<head>


    @include('userInterface/component/css')
</head>

<body class="index-page">

    <header id="header" class="header sticky-top">


        <div class="branding d-flex align-items-center">

            <div class="container position-relative d-flex align-items-center justify-content-end">
                <a href="index.html" class="logo d-flex align-items-center me-auto">
                    <img src="home/assets/img/logo.png" alt="">
                    <!-- Uncomment the line below if you also wish to use a text logo -->
                    <!-- <h1 class="sitename">Medicio</h1>  -->
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#hero" class="active">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        @auth
                            @if(Auth::user()->role === 1)
                                <li><a href="{{ route('doctors') }}">Dashboard</a></li>
                            @endif
                            <li class="dropdown">
                                <a href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                               this.closest('form').submit();">
                                                Logout
                                            </a>
                                        </form>
                                    </li>
                                    <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                                </ul>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endauth
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

                <a class="cta-btn" href="index.html#appointment">Make an Appointment</a>

            </div>

        </div>

    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                data-bs-interval="5000">

                <div class="carousel-item active">
                    <img src="home/assets/img/hero-carousel/hero-carousel-1.jpg" alt="">
                    <div class="container">
                        <h2>Welcome to Medicio</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#about" class="btn-get-started">Read More</a>
                    </div>
                </div><!-- End Carousel Item -->


            </div><!-- End Carousel Item -->

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators"></ol>

            </div>

        </section><!-- /Hero Section -->










        @include('userInterface/component/department')
        @include('userInterface/component/doctor')
        @include('userInterface/component/appointment')














    </main>

    <footer id="footer" class="footer light-background">

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Medicio</strong> <span>All Rights Reserved</span>
            </p>
        </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="home/assets/vendor/php-email-form/validate.js"></script>
    <script src="home/assets/vendor/aos/aos.js"></script>
    <script src="home/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="home/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="home/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="home/assets/js/main.js"></script>

</body>

</html>
