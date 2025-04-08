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
                     {{-- <h1 class="sitename">Medicio</h1>  --}}
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
                        <h2>Welcome to Medicio - Your Health Partner</h2>
                        <p>At Medicio, we combine advanced medical technology with compassionate care to provide 
                           exceptional healthcare services. Our team of experienced doctors and specialists are 
                           committed to delivering personalized treatment plans and promoting better health outcomes 
                           for all our patients.</p>
                        <a href="#about" class="btn-get-started">Learn More About Our Services</a>
                    </div>
                </div><!-- End Carousel Item -->

                <div class="carousel-item">
                    <img src="home/assets/img/hero-carousel/hero-carousel-2.jpg" alt="">
                    <div class="container">
                        <h2>State-of-the-Art Medical Facilities</h2>
                        <p>Experience healthcare at its finest with our modern medical facilities and 
                           cutting-edge diagnostic equipment. We offer comprehensive medical services, 
                           from routine check-ups to specialized treatments, all under one roof.</p>
                        <a href="#services" class="btn-get-started">Explore Our Facilities</a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="home/assets/img/hero-carousel/hero-carousel-3.jpg" alt="">
                    <div class="container">
                        <h2>Expert Medical Professionals</h2>
                        <p>Our healthcare team consists of board-certified physicians, experienced nurses, 
                           and qualified specialists who are leaders in their respective fields. We're dedicated 
                           to providing you with the highest standard of medical care.</p>
                        <a href="#doctors" class="btn-get-started">Meet Our Team</a>
                    </div>
                </div>

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
