<!-- Doctors Section -->
<section id="doctors" class="doctors section light-background">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Our Medical Specialists</h2>
        <p>Meet our experienced and dedicated medical professionals</p>
    </div>

    <div class="container">
        <div class="row gy-4">
            @foreach($doctors as $doctor)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member">
                    <div class="member-img">
                        @if($doctor->profile_picture)
                            <img src="{{ asset('storage/' . $doctor->profile_picture) }}" class="img-fluid" alt="{{ $doctor->name }}">
                        @else
                            <img src="{{ asset('home/assets/img/doctors/doctors-1.jpg') }}" class="img-fluid" alt="Default Doctor Image">
                        @endif
                        <div class="social">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>{{ $doctor->name }}</h4>
                        <span>{{ $doctor->specialization }}</span>
                        <p>{{ Str::limit($doctor->bio, 100) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>