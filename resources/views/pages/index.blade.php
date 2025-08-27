@extends('App')

@section('content')
    <!-- Hero Section with Carousel -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active position-relative">
                    <img src="{{ asset('images/importData-1.png') }}" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption text-start animate-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-10">
                                    <h2>Beyond Education</h2>
                                    <p>Going beyond curriculum through a faith-based holistic model that guides the growth
                                        and development of each child.</p>
                                    <a href="#" class="btn btn-lg btn-warning">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item position-relative">
                    <img src="{{ asset('images/importData-2.png') }}" class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption text-start animate-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-10">
                                    <h2>Empowering Students</h2>
                                    <p>Helping students reach their full potential academically, socially, and spiritually.
                                    </p>
                                    <a href="#" class="btn btn-lg btn-warning">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item position-relative">
                    <img src="{{ asset('images/importData-3.png') }}" class="d-block w-100" alt="Slide 3">
                    <div class="carousel-caption text-start animate-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-10">
                                    <h2>Global Perspective</h2>
                                    <p>Preparing students to be future leaders with a strong moral foundation and global
                                        mindset.</p>
                                    <a href="#" class="btn btn-lg btn-warning">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Tombol Scroll to Explore -->
            <a href="#core-identity" class="scroll-btn">
                <span>Scroll to Explore</span>
                <i class="bi bi-arrow-down"></i>
            </a>
        </div>
    </section>

    <!-- Section 2: Core Identity -->
    <section id="core-identity" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <p class="text-muted small mb-4">◊ Our Core Identity</p>
                    <h2 class="fw-bold">
                        <span class="text-primary">Leading Christian</span> International <br>
                        Schools in Indonesia
                    </h2>
                </div>
                <div class="col-lg-6">
                    <p class="p-2 mb-0 mt-5">
                        We exist to bless every family who chooses SPH as their second home with an
                        established Christian international education, whose graduates are equipped and
                        inspired to lead and serve wherever God will place them. At the core of who we are,
                        we are called to serve, and with that, we are devoted to the growth of our students’ faith journey.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Numbers -->
    <section id="sph-numbers" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h3>SPH by the <span class="text-primary">Numbers</span></h3>
            </div>

            <div class="row text-center g-4">
                <!-- Baris 1 -->
                <div class="col-6 col-lg-3">
                    <div>
                        <i class="bi bi-people fs-1 text-primary"></i>
                        <h4 class="mt-3">2,400+</h4>
                        <p class="small mb-0">Students</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div>
                        <i class="bi bi-mortarboard fs-1 text-primary"></i>
                        <h4 class="mt-3">3,000+</h4>
                        <p class="small mb-0">Alumni</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div>
                        <i class="bi bi-star fs-1 text-primary"></i>
                        <h4 class="mt-3">30+</h4>
                        <p class="small mb-0">Years of Excellence</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div>
                        <i class="bi bi-globe fs-1 text-primary"></i>
                        <h4 class="mt-3">35</h4>
                        <p class="small mb-0">Nationalities</p>
                    </div>
                </div>
            </div>

            <!-- Baris 2 -->
            <div class="row text-center g-4 justify-content-center mt-5">
                <div class="col-6 col-lg-3">
                    <div>
                        <i class="bi bi-trophy fs-1 text-primary"></i>
                        <h4 class="mt-3">1<sup>st</sup></h4>
                        <p class="small mb-0">Christian IB Continuum School in Indonesia</p>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div>
                        <i class="bi bi-person-badge fs-1 text-primary"></i>
                        <h4 class="mt-3">52%</h4>
                        <p class="small mb-0">Expatriate Teachers</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="our-legacy" class="py-5 bg-light">
        <div class="container position-relative">
            <div class="row">
                <!-- Kiri: gabungan blok teks -->
                <div class="col-lg-6">
                    <!-- Blok pertama -->
                    <p class="text-muted small mb-4">◊ Our Legacy</p>
                    <h2 class="fw-bold mb-4">
                        <span>Transforming Lives through Christian Education for</span> <br>
                        <span class="text-primary">Over 30 years</span>
                    </h2>
                    <p>
                        At Sekolah Pelita Harapan (SPH), we are dedicated to blessing every family that chooses us as their
                        second home. Our mission is to provide an exceptional Christian international education that equips
                        and inspires students to lead and serve in every aspect of their lives, wherever God may call them.
                        Central to our identity is the calling to serve, and we are committed to nurturing the spiritual
                        growth of each student as they embark on their unique faith journey.
                    </p>

                    <!-- Spacer biar ada jarak -->
                    <div class="my-5"></div>

                    <!-- Blok kedua -->
                    <h2 class="fw-bold mb-4">
                        <span>A Legacy of Excellence in <br> International Education</span>
                    </h2>
                    <p>
                        With over 30 years of experience, SPH has earned a distinguished reputation as one of Indonesia’s
                        premier international schools. As a pioneer in education, SPH became the first Christian
                        international school in Indonesia to offer all three International Baccalaureate (IB) programs.
                    </p>
                    <p>
                        Our network of schools spans five key locations across Jakarta and its surrounding cities,
                        providing families with access to world-class education in a nurturing Christian environment.
                        Our commitment to holistic development ensures that students are empowered academically,
                        spiritually, and socially, preparing them for success in an ever-changing global landscape.
                    </p>
                </div>

                <!-- Kanan: gambar sepanjang tinggi dua judul -->
                <div class="col-lg-6 position-relative">
                    <img src="{{ asset('images/importData-1.png') }}" alt="Legacy Image"
                        class="img-fluid position-absolute top-0  start-0 w-100"
                        style="object-fit: cover; border-radius: 8px;">
                </div>
            </div>
        </div>
    </section>

<section>
  <div class="container position-relative">
    <div class="row">
      <h2 class="fw-bold mb-4">
        <span>Embracing Technological Innovation and Global Perspectives</span>
      </h2>
      <p>
        As education evolves in the 21st century, SPH remains at the forefront by integrating
        technology and global perspectives into the classroom. We have embraced innovative learning
        tools, including state-of-the-art digital platforms and interactive teaching methods,
        ensuring that students are equipped with the skills necessary to thrive in a technology-driven
        world.
      </p>
    </div>

    <div class="my-5"></div>

    <div class="row">
      <h2 class="fw-bold mb-4">
        <span>Another Title Section Here</span>
      </h2>
      <p>
        Additionally, SPH offers numerous opportunities for students to participate in international
        events and competitions, allowing them to broaden their horizons and gain global exposure.
      </p>
    </div>
  </div>

</section>




    <style>
        #hero {
            height: 100vh;
            overflow: hidden;
        }

        #hero .carousel-item img {
            height: 100vh;
            object-fit: cover;
            filter: brightness(0.7);
        }

        #hero .carousel-caption {
            bottom: 20%;
            left: 0;
            right: 0;
            text-align: left;
        }

        #hero .carousel-caption h2 {
            font-size: 3rem;
            font-weight: 700;
        }

        #hero .carousel-caption p {
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
        }

        /* Animasi muncul dari bawah */
        .animate-caption {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s ease-in-out;
        }

        .carousel-item.active .animate-caption {
            opacity: 1;
            transform: translateY(0);
        }

        /* Tombol Scroll */
        .scroll-btn {
            position: absolute;
            right: 30px;
            bottom: 30px;
            background: rgba(255, 255, 255, 0.15);
            padding: 12px 18px;
            border-radius: 50px;
            color: #fff;
            font-weight: 600;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .scroll-btn:hover {
            background: rgba(255, 255, 255, 0.35);
            color: #fff;
        }

        .scroll-btn i {
            font-size: 1.2rem;
        }
    </style>

    <script>
        const heroCarousel = document.querySelector('#heroCarousel');
        const carousel = new bootstrap.Carousel(heroCarousel, {
            interval: 1000,
            ride: 'carousel',
            pause: false,
            touch: false,
            wrap: true
        });

        heroCarousel.addEventListener('slide.bs.carousel', function(e) {
            let captions = e.target.querySelectorAll('.animate-caption');
            captions.forEach(caption => {
                caption.style.opacity = "0";
                caption.style.transform = "translateY(40px)";
            });
        });

        heroCarousel.addEventListener('slid.bs.carousel', function(e) {
            let activeCaption = e.target.querySelector('.carousel-item.active .animate-caption');
            if (activeCaption) {
                activeCaption.style.opacity = "1";
                activeCaption.style.transform = "translateY(0)";
            }
        });
    </script>
@endsection
