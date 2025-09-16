@extends('layouts.app')
@section('title', 'Home | DMM')
@section('content')

{{-- HERO CAROUSEL --}}
<section id="heroCarousel" class="carousel slide carousel-fade hero-carousel" data-bs-ride="carousel" data-bs-interval="6000" style="width:100vw;height:100vh;overflow:hidden;">
    <div class="carousel-inner">
        {{-- Slide 1 --}}
        <div class="carousel-item active slide-1 position-relative" style="height:100vh;">
            <div class="hero-bg w-100 h-100 position-absolute top-0 start-0"></div>
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100">
                <div class="hero-content-anim text-center">
                    <div class="mb-3 animate__animated animate__fadeInDown">
                        <span class="badge bg-gradient-primary px-3 py-2 fs-6 fw-semibold shadow-sm">Energy & Mining</span>
                    </div>
                    <h1 class="display-1 fw-bold mb-4 text-white text-shadow animate__animated animate__fadeInDown animate__delay-1s">
                        Empowering Energy<br>
                        <span class="text-gradient-primary d-block">Building the Future</span>
                    </h1>
                    <p class="lead mb-5 text-white-50 animate__animated animate__fadeInUp animate__delay-2s" style="font-size:1.4rem;">
                        Mining, Transport, and Sale of Coal and Minerals.<br>
                        <span class="fw-semibold text-info">Your trusted partner for reliable energy solutions in Indonesia and beyond.</span>
                    </p>
                    <div class="d-flex gap-4 justify-content-center animate__animated animate__fadeInUp animate__delay-3s">
                        <a href="/about" class="btn btn-primary btn-lg px-5 py-3 fw-semibold shadow rounded-pill ripple">
                            <i class="bi bi-info-circle me-2"></i>About Us
                        </a>
                        <a href="/business" class="btn btn-outline-light btn-lg px-5 py-3 fw-semibold shadow rounded-pill ripple">
                            <i class="bi bi-bar-chart-line me-2"></i>Our Business
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Slide 2 --}}
        <div class="carousel-item slide-2 position-relative" style="height:100vh;">
            <div class="hero-bg w-100 h-100 position-absolute top-0 start-0"></div>
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100">
                <div class="hero-content-anim text-center">
                    <div class="mb-3 animate__animated animate__fadeInDown">
                        <span class="badge bg-gradient-primary px-3 py-2 fs-6 fw-semibold shadow-sm">Logistics</span>
                    </div>
                    <h1 class="display-1 fw-bold mb-4 text-white text-shadow animate__animated animate__fadeInDown animate__delay-1s">
                        Integrated Logistics<br>
                        <span class="text-gradient-primary d-block">Modern Equipment</span>
                    </h1>
                    <p class="lead mb-5 text-white-50 animate__animated animate__fadeInUp animate__delay-2s" style="font-size:1.4rem;">
                        End-to-end control from mine to jetty.<br>
                        <span class="fw-semibold text-info">Efficient, safe, and sustainable operations.</span>
                    </p>
                    <div class="d-flex gap-4 justify-content-center animate__animated animate__fadeInUp animate__delay-3s">
                        <a href="/business" class="btn btn-primary btn-lg px-5 py-3 fw-semibold shadow rounded-pill ripple">
                            <i class="bi bi-truck-front me-2"></i>Our Logistics
                        </a>
                        <a href="/clients" class="btn btn-outline-light btn-lg px-5 py-3 fw-semibold shadow rounded-pill ripple">
                            <i class="bi bi-people-fill me-2"></i>Clients
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{-- Slide 3 --}}
        <div class="carousel-item slide-3 position-relative" style="height:100vh;">
            <div class="hero-bg w-100 h-100 position-absolute top-0 start-0"></div>
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center h-100">
                <div class="hero-content-anim text-center">
                    <div class="mb-3 animate__animated animate__fadeInDown">
                        <span class="badge bg-gradient-primary px-3 py-2 fs-6 fw-semibold shadow-sm">Vision & Mission</span>
                    </div>
                    <h1 class="display-1 fw-bold mb-4 text-white text-shadow animate__animated animate__fadeInDown animate__delay-1s">
                        Vision & Mission<br>
                        <span class="text-gradient-primary d-block">Empowering Communities</span>
                    </h1>
                    <p class="lead mb-5 text-white-50 animate__animated animate__fadeInUp animate__delay-2s" style="font-size:1.4rem;">
                        To become a world leader in coal & mineral trading.<br>
                        <span class="fw-semibold text-info">Managing resources, improving social welfare.</span>
                    </p>
                    <div class="d-flex gap-4 justify-content-center animate__animated animate__fadeInUp animate__delay-3s">
                        {{-- <a href="/vision" class="btn btn-primary btn-lg px-5 py-3 fw-semibold shadow rounded-pill ripple">
                            <i class="bi bi-bullseye me-2"></i>Our Vision
                        </a> --}}
                        <a href="/contact" class="btn btn-outline-light btn-lg px-5 py-3 fw-semibold shadow rounded-pill ripple">
                            <i class="bi bi-envelope me-2"></i>Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Carousel Controls --}}
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" style="z-index:3;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" style="z-index:3;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    {{-- Custom Carousel Indicators --}}
    <div class="carousel-indicators" style="z-index:4; margin-bottom:2rem;">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
</section>

{{-- FAST FACTS / USP --}}
<section class="usp-section position-relative py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-5 text-dark usp-title">Why Choose DMM?</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up">
                <div class="usp-card h-100 text-center shadow-sm rounded-4 px-4 py-5">
                    <div class="usp-icon mb-3 mx-auto">
                        <i class="bi bi-minecart-loaded"></i>
                    </div>
                    <div class="usp-metric mb-1">High Grade</div>
                    <h6 class="fw-bold mb-2">Thermal & Coking Coal</h6>
                    <p class="usp-desc">Supplying key industries with quality coal for power, cement, and steel.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="usp-card h-100 text-center shadow-sm rounded-4 px-4 py-5">
                    <div class="usp-icon mb-3 mx-auto">
                        <i class="bi bi-truck-front"></i>
                    </div>
                    <div class="usp-metric mb-1">Logistics</div>
                    <h6 class="fw-bold mb-2">Heavy Equipment & Transport</h6>
                    <p class="usp-desc">Efficient mining, modern fleet, and seamless delivery operations.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="usp-card h-100 text-center shadow-sm rounded-4 px-4 py-5">
                    <div class="usp-icon mb-3 mx-auto">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="usp-metric mb-1">Trusted</div>
                    <h6 class="fw-bold mb-2">Partners & Clients</h6>
                    <p class="usp-desc">Collaboration with PLN, SIG, and international buyers.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="usp-card h-100 text-center shadow-sm rounded-4 px-4 py-5">
                    <div class="usp-icon mb-3 mx-auto">
                        <i class="bi bi-bar-chart-line-fill"></i>
                    </div>
                    <div class="usp-metric mb-1">Growth</div>
                    <h6 class="fw-bold mb-2">Visionary Expansion</h6>
                    <p class="usp-desc">Targeting 1.5M+ MT sales & sustainable growth by 2026.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="usp-bg-gradient"></div>
</section>

{{-- VISI & MISI (INTERAKTIF & ANIMASI) --}}
{{-- VISI & MISI (ANIMASI BESAR & DINAMIS, GLASS CONTAINER & MODERN FONT) --}}
<section class="vision-mission-animated position-relative py-5">
    <div class="container-vision-mission">
        <h2 class="fw-bold text-center mb-5 vision-mission-anim-title" data-aos="fade-down">
            <span class="vision-mission-gradient-text">Our Vision, Mission & Core Values</span>
        </h2>
        <div class="row g-4 justify-content-center align-items-stretch">
            {{-- Vision --}}
            <div class="col-md-4" data-aos="fade-right">
                <div class="vision-mission-anim-card vision-card h-100 text-center p-5 rounded-5 shadow-lg glass-bg border-0 animate__animated animate__fadeInLeft">
                    <div class="vision-mission-lottie mb-4 mx-auto">
                        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_kkflmtur.json"
                            background="transparent" speed="1"
                            style="width: 120px; height: 120px;" loop autoplay></lottie-player>
                    </div>
                    <h5 class="fw-semibold mb-3 text-primary vision-mission-card-title">Vision</h5>
                    <p class="vision-mission-desc mb-0">
                        To become a part of the world’s business leaders in the trading of coal and minerals that can answer the needs for minerals and energy around the world and operates in the principle of fairness.
                    </p>
                </div>
            </div>
            {{-- Mission --}}
            <div class="col-md-4" data-aos="fade-up">
                <div class="vision-mission-anim-card mission-card h-100 text-center p-5 rounded-5 shadow-lg glass-bg border-0 animate__animated animate__fadeInUp">
                    <div class="vision-mission-lottie mb-4 mx-auto">
                        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_ya4ycrti.json"
                            background="transparent" speed="1"
                            style="width: 120px; height: 120px;" loop autoplay></lottie-player>
                    </div>
                    <h5 class="fw-semibold mb-3 text-primary vision-mission-card-title">Mission</h5>
                    <p class="vision-mission-desc mb-0">
                        To manage energy resources and to improve the social welfare of local communities through an effective and fair partnership.
                    </p>
                </div>
            </div>
            {{-- Core Values --}}
            <div class="col-md-4" data-aos="fade-left">
                <div class="vision-mission-anim-card corevalue-card h-100 text-center p-5 rounded-5 shadow-lg glass-bg border-0 animate__animated animate__fadeInRight">
                    <div class="vision-mission-lottie mb-4 mx-auto">
                        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_5ngs2ksb.json"
                            background="transparent" speed="1"
                            style="width: 120px; height: 120px;" loop autoplay></lottie-player>
                    </div>
                    <h5 class="fw-semibold mb-3 text-primary vision-mission-card-title">Core Values</h5>
                    <ul class="list-unstyled vision-mission-list mb-0 text-center mx-auto">
                        <li class="mb-2"><i class="bi bi-star-fill text-warning me-2"></i>Tenacity</li>
                        <li class="mb-2"><i class="bi bi-lightbulb-fill text-info me-2"></i>Initiative</li>
                        <li class="mb-2"><i class="bi bi-award-fill text-success me-2"></i>Excellence</li>
                        <li class="mb-2"><i class="bi bi-person-badge-fill text-primary me-2"></i>Depth of Character</li>
                        <li><i class="bi bi-gear-fill text-danger me-2"></i>Diligence</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="vision-mission-anim-bg"></div>
</section>


<section class="business-highlight-section position-relative py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                <div class="business-highlight-lottie mb-4 mx-auto">
                    <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_1pxqjqps.json"
  background="transparent" speed="1"
  style="width: 620px; height: 620px;" loop autoplay>
</lottie-player>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                <div class="business-glass-card p-5 rounded-5 shadow-lg glass-bg">
                    <h3 class="fw-bold mb-4 business-highlight-title text-gradient-blue">Integrated Mining & Logistics</h3>
                    <ul class="list-unstyled fs-5 mb-4 business-highlight-list">
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i> End-to-end control from mine to jetty</li>
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i> Modern equipment & expert team</li>
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i> Real-time scheduling & competitive pricing</li>
                        <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i> Commitment to sustainability & safety</li>
                    </ul>
                    <a href="/business" class="btn btn-gradient-blue btn-lg px-4 py-2 fw-semibold shadow rounded-pill ripple">
                        <i class="bi bi-bar-chart-line me-2"></i>Explore Our Business
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="business-highlight-bg"></div>
</section>


{{-- CLIENTS SLIDER --}}
{{-- CLIENTS SLIDER --}}
<section class="clients-slider-section position-relative py-5">
    <div class="container">
        <h4 class="fw-bold text-center mb-4 text-gradient-blue" data-aos="fade-up">
            Trusted by Leading Companies
        </h4>
        <div class="clients-slider d-flex align-items-center justify-content-center flex-wrap gap-4 py-3 px-2 glass-bg"
            data-aos="fade-up" data-aos-delay="100">
            <a href="https://www.plnepi.co.id/" target="_blank" rel="noopener" title="PLN EPI">
                <img src="{{ asset('images/clients/PLN EPI.jpeg') }}" alt="PLN" width="90" class="clients-logo">
            </a>
             <a href="https://www.bhumi-jati.co.id/" target="_blank" rel="noopener" title="Bhumi Jati Power">
                <img src="{{ asset('images/clients/Bhumi Jati Power.jpeg') }}" alt="baturaja" width="90" class="clients-logo">
            </a>
            <a href="https://www.tssgroup.com.cn/en/" target="_blank" rel="noopener" title="Tshingsan Group">
                <img src="{{ asset('images/clients/Tshingsan Group.jpeg') }}" alt="baturaja" width="90" class="clients-logo">
            </a>
            <a href="https://sig.id/" target="_blank" rel="noopener" title="SIG">
                <img src="{{ asset('images/clients/SIG.jpeg') }}" alt="SIG" width="90" class="clients-logo">
            </a>
            <a href="https://www.bosowasemen.co.id/" target="_blank" rel="noopener" title="Bosowa Semen">
                <img src="{{ asset('images/clients/bosowa semen.jpeg') }}" alt="baturaja" width="90" class="clients-logo">
            </a>
            <a href="https://semenbaturaja.co.id/" target="_blank" rel="noopener" title="Semen Baturaja">
                <img src="{{ asset('images/clients/baturaja.jpeg') }}" alt="baturaja" width="90" class="clients-logo">
            </a>
            <a href="https://www.holcim.com/" target="_blank" rel="noopener" title="Holcim">
                <img src="{{ asset('images/clients/holcim.jpeg') }}" alt="holcim" width="90" class="clients-logo">
            </a>
            <a href="https://www.indocement.co.id/" target="_blank" rel="noopener" title="Indocement">
                <img src="{{ asset('images/clients/indo_cement.jpeg') }}" alt="indo_cement" width="90" class="clients-logo">
            </a>
            <a href="https://semengresik.sig.id/id" target="_blank" rel="noopener" title="Semen Gresik">
                <img src="{{ asset('images/clients/semen_gresik.jpeg') }}" alt="semen_gresik" width="90" class="clients-logo">
            </a>
            <a href="https://semenpadang.co.id/" target="_blank" rel="noopener" title="Semen Padang">
                <img src="{{ asset('images/clients/semen_padang.jpeg') }}" alt="semen_padang" width="90" class="clients-logo">
            </a>
            <a href="https://www.sementonasa.co.id/" target="_blank" rel="noopener" title="Semen Tonasa">
                <img src="{{ asset('images/clients/Tonasa.png') }}" alt="Tonasa" width="90" class="clients-logo">
            </a>
        </div>

        {{-- Partner Countries --}}
        <div class="partner-countries mt-5">
            <h5 class="fw-semibold text-center mb-3 text-gradient-blue" data-aos="fade-up">Partner Countries</h5>
            <div class="partner-flags-marquee">
    <div class="partner-flags-track">
        <!-- Isi bendera, lalu ulangi lagi urutannya -->
        <div class="flag-wrap"><span class="fi fi-id" title="Indonesia"></span></div>
        <div class="flag-wrap"><span class="fi fi-cn" title="China"></span></div>
        <div class="flag-wrap"><span class="fi fi-th" title="Thailand"></span></div>
        <div class="flag-wrap"><span class="fi fi-in" title="India"></span></div>
        <div class="flag-wrap"><span class="fi fi-de" title="Germany"></span></div>
        <div class="flag-wrap"><span class="fi fi-jp" title="Japan"></span></div>
        <div class="flag-wrap"><span class="fi fi-kr" title="South Korea"></span></div>
        <div class="flag-wrap"><span class="fi fi-pk" title="Pakistan"></span></div>
        <div class="flag-wrap"><span class="fi fi-bd" title="Bangladesh"></span></div>
        <div class="flag-wrap"><span class="fi fi-tr" title="Turkey"></span></div>
        <div class="flag-wrap"><span class="fi fi-ae" title="United Arab Emirates"></span></div>
        <div class="flag-wrap"><span class="fi fi-my" title="Malaysia"></span></div>
        <!-- Ulangi lagi agar looping smooth -->
        <div class="flag-wrap"><span class="fi fi-id" title="Indonesia"></span></div>
        <div class="flag-wrap"><span class="fi fi-cn" title="China"></span></div>
        <div class="flag-wrap"><span class="fi fi-th" title="Thailand"></span></div>
        <div class="flag-wrap"><span class="fi fi-in" title="India"></span></div>
        <div class="flag-wrap"><span class="fi fi-de" title="Germany"></span></div>
        <div class="flag-wrap"><span class="fi fi-jp" title="Japan"></span></div>
        <div class="flag-wrap"><span class="fi fi-kr" title="South Korea"></span></div>
        <div class="flag-wrap"><span class="fi fi-pk" title="Pakistan"></span></div>
        <div class="flag-wrap"><span class="fi fi-bd" title="Bangladesh"></span></div>
        <div class="flag-wrap"><span class="fi fi-tr" title="Turkey"></span></div>
        <div class="flag-wrap"><span class="fi fi-ae" title="United Arab Emirates"></span></div>
        <div class="flag-wrap"><span class="fi fi-my" title="Malaysia"></span></div>
    </div>
</div>

        </div>

    </div>

</section>

{{-- GALLERY PREVIEW --}}
<section class="gallery-preview-section position-relative py-5">
    <div class="container">
        <h4 class="fw-bold text-center mb-4 text-gradient-blue" data-aos="fade-up">DMM in Action</h4>
        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-4" data-aos="zoom-in">
                <div class="gallery-thumb-wrap">
                    <img src="{{ asset('images/gallery/ambil_sample.jpg') }}" class="img-fluid rounded-4 gallery-thumb" alt="Gallery 1">
                </div>
            </div>
            <div class="col-6 col-md-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="gallery-thumb-wrap">
                    <img src="{{ asset('images/gallery/galery10.jpg') }}" class="img-fluid rounded-4 gallery-thumb" alt="Gallery 2">
                </div>
            </div>
            <div class="col-6 col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="gallery-thumb-wrap">
                    <img src="{{ asset('images/gallery/Photos Tambang2.jpg') }}" class="img-fluid rounded-4 gallery-thumb" alt="Gallery 3">
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="/gallery" class="btn btn-gradient-blue btn-lg px-4 py-2 fw-semibold shadow rounded-pill ripple">Browse More Photos &rarr;</a>
        </div>
    </div>
    <div class="gallery-preview-bg"></div>
</section>

{{-- CONTACT BANNER --}}
<section class="contact-banner-section position-relative py-5 px-4 text-center" data-aos="zoom-in" data-aos-delay="600">
    <div class="contact-banner-glass glass-bg rounded-5 mx-auto py-5 px-3 px-md-5 shadow-lg">
        <h4 class="fw-bold mb-2 text-gradient-blue">Ready to Collaborate?</h4>
        <p class="mb-4 fs-5 text-dark">Contact our team for partnership, inquiries, or business opportunities.</p>
        <a href="/contact" class="btn btn-gradient-blue btn-lg px-5 py-3 fw-semibold shadow rounded-pill ripple">Contact Us</a>
    </div>
    <div class="contact-banner-bg"></div>
</section>

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css">
<style>
html, body {
    width: 100vw;
    min-height: 100vh;
    margin: 0 !important;
    padding: 0 !important;
    overflow-x: hidden;
    /* background: #000; */
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
}
.hero-carousel,
.hero-carousel .carousel-inner,
.hero-carousel .carousel-item {
    width: 100vw !important;
    height: 100vh !important;
    min-height: 100vh !important;
}
.hero-carousel .carousel-item {
    position: relative;
    overflow: hidden;
}
.hero-carousel .carousel-caption {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    text-align: center;
    padding: 0;
    z-index: 2;
}
/* Background untuk setiap slide */
.slide-1 .hero-bg {
    background: linear-gradient(120deg,rgba(18,23,42,0.88) 60%,rgba(18,23,42,0.35) 100%), url('{{ asset('images/tambang_drone.jpg') }}') center center / cover no-repeat;
    transition: background 1s;
}
.slide-2 .hero-bg {
    background: linear-gradient(120deg,rgba(18,23,42,0.88) 60%,rgba(18,23,42,0.35) 100%), url('{{ asset('images/mining/Stockpile and Jetty.jpg') }}') center center / cover no-repeat;
    transition: background 1s;
}
.slide-3 .hero-bg {
    background: linear-gradient(120deg,rgba(18,23,42,0.88) 60%,rgba(18,23,42,0.35) 100%), url('{{ asset('images/mining/vision and mission2.jpg') }}') center center / cover no-repeat;
    transition: background 1s;
}
.text-gradient-primary {
    background: linear-gradient(90deg, #0dcaf0 0%, #3b82f6 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-fill-color: transparent;
    filter: drop-shadow(0 2px 12px rgba(13,202,240,0.22));
}
.text-shadow {
    text-shadow: 0 6px 28px rgba(0,0,0,0.36), 0 1.5px 0 #111;
}
.bg-gradient-primary {
    background: linear-gradient(90deg,#0dcaf0 0%,#3b82f6 100%) !important;
    color: #fff !important;
    border: none;
}
.carousel-indicators [data-bs-target] {
    background-color: #0dcaf0;
    width: 18px; height: 6px;
    border-radius: 8px;
    opacity: 0.7;
    margin: 0 8px;
    transition: width 0.3s;
}
.carousel-indicators .active {
    opacity: 1;
    width: 36px;
    background: linear-gradient(90deg,#0dcaf0 0%,#3b82f6 100%);
}
.btn-lg.ripple {
    position: relative;
    overflow: hidden;
    transition: box-shadow 0.2s, transform 0.2s;
}
.btn-lg.ripple:after {
    content: "";
    display: block;
    position: absolute;
    left: 50%; top: 50%;
    width: 0; height: 0;
    background: rgba(13,202,240,0.2);
    border-radius: 100%;
    transform: translate(-50%, -50%);
    transition: width 0.4s ease, height 0.4s ease, opacity 0.4s;
    opacity: 0;
    pointer-events: none;
}
.btn-lg.ripple:active:after {
    width: 180px;
    height: 180px;
    opacity: 1;
    transition: 0s;
}
.btn-lg {
    border-radius: 48px;
    font-weight: 600;
    font-size: 1.25rem;
    box-shadow: 0 4px 24px rgba(13,202,240,0.12);
}
.btn-lg:hover {
    transform: translateY(-2px) scale(1.04);
    box-shadow: 0 12px 32px rgba(13,202,240,0.18);
}
.badge.bg-gradient-primary {
    font-size: 1rem;
    letter-spacing: 0.04em;
    background: linear-gradient(90deg,#0dcaf0 0%,#3b82f6 100%) !important;
}

/* {{-- FAST FACTS / USP --}} */
.usp-section {
    background: #f8fafc;
    position: relative;
    overflow: hidden;
}
.usp-bg-gradient {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    z-index: 0;
    background: radial-gradient(ellipse at 70% 0,#0dcaf0 0%,#3b82f6 15%,#f8fafc 60%);
    opacity: 0.12;
    pointer-events: none;
}
.usp-title {
    letter-spacing: 0.02em;
    color: #223;
}
.usp-card {
    background: #fff;
    border-radius: 1.5rem;
    box-shadow: 0 4px 32px rgba(13,202,240,0.06);
    border: 1.5px solid #e5eaf2;
    position: relative;
    z-index: 1;
    transition: transform 0.18s, box-shadow 0.18s;
}
.usp-card:hover {
    transform: translateY(-6px) scale(1.03);
    box-shadow: 0 12px 36px rgba(59,130,246,0.13);
    border-color: #0dcaf0;
}
.usp-icon {
    width: 54px; height: 54px;
    display: flex; align-items: center; justify-content: center;
    font-size: 2.3rem;
    color: #0dcaf0;
    background: linear-gradient(120deg,#e0f7fa 0%,#f0faff 100%);
    border-radius: 50%;
    box-shadow: 0 2px 12px rgba(13,202,240,0.10);
    margin-bottom: 1rem;
}
.usp-metric {
    font-size: 1.05rem;
    font-weight: 600;
    color: #3b82f6;
    letter-spacing: 0.02em;
    text-transform: uppercase;
}
.usp-desc {
    color: #6b7280;
    font-size: 0.98rem;
    margin-bottom: 0;
}

@media (max-width: 767px) {
    .usp-card { padding: 2rem 1rem !important; }
    .usp-title { font-size: 1.3rem; }
}


/* visi & misi  */
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap');
.container-vision-mission {
    max-width: 1120px;
    margin: 0 auto;
    padding-left: 2.5rem;
    padding-right: 2.5rem;
}
.vision-mission-anim-title {
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    font-size: 2.6rem;
    font-weight: 800;
    letter-spacing: 0.01em;
    color: #223;
    margin-bottom: 2.5rem;
}
.vision-mission-gradient-text {
    background: linear-gradient(90deg, #0dcaf0 0%, #3b82f6 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-fill-color: transparent;
    filter: drop-shadow(0 2px 12px rgba(13,202,240,0.13));
}
.vision-mission-anim-card {
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    background: #fff;
    border-radius: 2.5rem;
    box-shadow: 0 16px 64px rgba(13,202,240,0.12);
    border: 1.5px solid #e5eaf2;
    position: relative;
    z-index: 1;
    transition: transform 0.22s, box-shadow 0.22s;
    cursor: pointer;
    overflow: hidden;
    min-height: 410px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.glass-bg {
    background: rgba(255,255,255,0.82);
    backdrop-filter: blur(12px) saturate(170%);
    box-shadow: 0 16px 64px rgba(13,202,240,0.11);
    border: 1.5px solid #e5eaf2;
}
.vision-mission-anim-card:hover {
    transform: translateY(-14px) scale(1.045) rotate(-2deg);
    box-shadow: 0 32px 80px rgba(59,130,246,0.17);
    border-color: #0dcaf0;
    background: linear-gradient(120deg,#f0faff 60%,#e0f2fe 100%);
}
.vision-mission-lottie {
    width: 120px; height: 120px;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 1.5rem;
}
.vision-mission-card-title {
    font-size: 1.5rem;
    font-weight: 700;
    letter-spacing: 0.01em;
}
.vision-mission-desc, .vision-mission-list span {
    font-size: 1.18rem;
    color: #223;
    font-weight: 500;
    line-height: 1.5;
}
.text-gradient-blue {
    background: linear-gradient(90deg, #0dcaf0 0%, #3b82f6 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-fill-color: transparent;
    font-weight: 700;
}
.vision-mission-list {
    max-width: 380px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 0;
}
.vision-mission-list li {
    font-size: 1.1rem;
    font-weight: 500;
    color: #223;
    display: flex;
    align-items: flex-start;
}
.vision-mission-anim-bg {
    position: absolute;
    top: -80px; left: -20vw; width: 140vw; height: 400px;
    background: radial-gradient(ellipse at 60% 0,#0dcaf0 0%,#3b82f6 25%,#e0f2fe 80%);
    opacity: 0.14;
    z-index: 0;
    pointer-events: none;
}
@media (max-width: 991px) {
    .container-vision-mission { padding-left: 1rem; padding-right: 1rem; }
    .vision-mission-anim-title { font-size: 2rem; }
    .vision-mission-anim-card { padding: 1.5rem !important; min-height: 340px; }
    .vision-mission-lottie { width: 90px; height: 90px; }
}
@media (max-width: 767px) {
    .container-vision-mission { padding-left: 0.5rem; padding-right: 0.5rem; }
    .vision-mission-animated .row { flex-direction: column !important; }
    .vision-mission-anim-card { padding: 1.1rem !important; }
    .vision-mission-lottie { width: 70px; height: 70px; }
    .vision-mission-card-title { font-size: 1.1rem; }
}

.vision-mission-animated {
    position: relative;
    /* Gradient multi-tone dengan efek biru dan putih */
    background: linear-gradient(135deg, #e0f7fa 0%, #f8fafc 55%, #e0e7ff 100%);
    overflow: hidden;
    padding-top: 4rem;
    padding-bottom: 4rem;
}
.vision-mission-anim-bg,
.vision-mission-anim-bg:after,
.vision-mission-anim-bg:before {
    content: '';
    position: absolute;
    z-index: 0;
    pointer-events: none;
}
.vision-mission-anim-bg {
    top: 0; left: 0; right: 0; bottom: 0;
    background: radial-gradient(ellipse at 60% 0,#0dcaf0 0%,#3b82f6 20%,#f8fafc 70%);
    opacity: 0.18;
}
.vision-mission-anim-bg:after {
    top: 60%; left: 60%; width: 520px; height: 340px;
    background: radial-gradient(circle at 50% 50%, #3b82f6 0%, transparent 70%);
    opacity: 0.11;
    filter: blur(18px);
    border-radius: 50%;
}
.vision-mission-anim-bg:before {
    top: -100px; left: -120px; width: 400px; height: 320px;
    background: radial-gradient(circle at 40% 60%, #0dcaf0 0%, transparent 80%);
    opacity: 0.18;
    filter: blur(22px);
    border-radius: 50%;
}
.container-vision-mission {
    position: relative;
    z-index: 2;
}
.vision-mission-anim-card {
    background: rgba(255,255,255,0.93);
    /* glassmorphism */
    box-shadow: 0 16px 64px rgba(13,202,240,0.12);
    border: 1.5px solid #e5eaf2;
    backdrop-filter: blur(12px) saturate(170%);
    border-radius: 2.5rem;
    transition: transform 0.22s, box-shadow 0.22s;
}
.vision-mission-anim-card:hover {
    transform: translateY(-14px) scale(1.045) rotate(-2deg);
    box-shadow: 0 32px 80px rgba(59,130,246,0.17);
    border-color: #0dcaf0;
    background: linear-gradient(120deg,#f0faff 60%,#e0f2fe 100%);
}
.vision-mission-anim-title {
    font-size: 2.6rem;
    font-weight: 800;
    letter-spacing: 0.01em;
    color: #223;
    margin-bottom: 2.5rem;
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
}
.vision-mission-gradient-text {
    background: linear-gradient(90deg, #0dcaf0 0%, #3b82f6 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-fill-color: transparent;
    filter: drop-shadow(0 2px 12px rgba(13,202,240,0.13));
}
@media (max-width: 991px) {
    .vision-mission-anim-title { font-size: 2rem; }
    .vision-mission-anim-card { padding: 1.5rem !important; min-height: 340px; }
}
@media (max-width: 767px) {
    .vision-mission-animated { padding-top: 2rem; padding-bottom: 2rem; }
    .vision-mission-anim-title { font-size: 1.3rem; }
}



/* bisnis */
.business-highlight-section, .clients-slider-section, .gallery-preview-section, .contact-banner-section {
    position: relative;
    overflow: hidden;
    background: linear-gradient(120deg, #f8fafc 60%, #e0f2fe 100%);
}
.business-highlight-bg, .clients-slider-bg, .gallery-preview-bg, .contact-banner-bg {
    position: absolute;
    top: -80px; left: -20vw; width: 140vw; height: 400px;
    background: radial-gradient(ellipse at 60% 0,#0dcaf0 0%,#3b82f6 25%,#e0f2fe 80%);
    opacity: 0.09;
    z-index: 0;
    pointer-events: none;
}
.business-glass-card, .glass-bg, .clients-slider, .contact-banner-glass {
    background: rgba(255,255,255,0.85);
    border-radius: 2rem;
    box-shadow: 0 8px 32px rgba(13,202,240,0.08);
    backdrop-filter: blur(10px) saturate(180%);
    border: 1.5px solid #e5eaf2;
}
.business-highlight-title, .text-gradient-blue {
    background: linear-gradient(90deg, #0dcaf0 0%, #3b82f6 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-fill-color: transparent;
    font-weight: 800;
}
.btn-gradient-blue {
    background: linear-gradient(90deg,#0dcaf0 0%,#3b82f6 100%);
    color: #fff !important;
    border: none;
    font-size: 1.13rem;
    font-weight: 600;
    transition: box-shadow 0.18s, transform 0.18s;
    box-shadow: 0 4px 18px rgba(13,202,240,0.10);
    position: relative;
    overflow: hidden;
}
.btn-gradient-blue:hover, .btn-gradient-blue:focus {
    color: #fff !important;
    transform: translateY(-2px) scale(1.04);
    box-shadow: 0 8px 32px rgba(13,202,240,0.18);
}
.business-highlight-list li {
    font-size: 1.15rem;
    font-weight: 500;
    color: #223;
    display: flex;
    align-items: flex-start;
}
.clients-logo {
    opacity: 0.8;
    transition: transform 0.18s, opacity 0.18s;
    filter: grayscale(0.2) brightness(0.98);
}
.clients-logo:hover {
    opacity: 1;
    transform: scale(1.08);
    filter: none;
}
.gallery-thumb-wrap {
    overflow: hidden;
    border-radius: 1.5rem;
    box-shadow: 0 4px 18px rgba(13,202,240,0.07);
    background: #fff;
    transition: box-shadow 0.2s;
}
.gallery-thumb {
    transition: transform 0.33s cubic-bezier(.4,2,.6,1);
    width: 100%;
    display: block;
}
.gallery-thumb-wrap:hover .gallery-thumb {
    transform: scale(1.09) rotate(-2deg);
    box-shadow: 0 12px 36px rgba(59,130,246,0.13);
}
.contact-banner-glass {
    max-width: 700px;
}
@media (max-width: 991px) {
    .business-glass-card, .clients-slider, .contact-banner-glass { padding: 2rem 1rem !important; }
}
@media (max-width: 767px) {
    .business-glass-card, .clients-slider, .contact-banner-glass { padding: 1rem !important; }
    .gallery-thumb-wrap { border-radius: 1rem; }
}


/* clients  */
.clients-logo {
    opacity: 0.8;
    transition: transform 0.18s, opacity 0.18s, box-shadow 0.18s;
    filter: grayscale(0.1) brightness(0.98);
    border-radius: 10px;
    box-shadow: 0 2px 14px rgba(13,202,240,0.07);
}
.clients-logo:hover {
    opacity: 1;
    transform: scale(1.07) translateY(-4px);
    filter: none;
    box-shadow: 0 8px 32px rgba(13,202,240,0.13);
    z-index: 2;
}
.partner-flags-marquee {
    width: 100%;
    overflow: hidden;
    position: relative;
    height: 2.8rem;
    background: none;
    margin-bottom: 1rem;
}

.partner-flags-track {
    display: flex;
    gap: 1.5rem;
    align-items: center;
    white-space: nowrap;
    animation: marquee-loop 30s linear infinite;
    will-change: transform;
}

@keyframes marquee-loop {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

.flag-wrap {
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 0.7rem;
    background: rgba(13,202,240,0.07);
    margin: 0 0.2rem;
    padding: 0.22rem 0.7rem;
    box-shadow: 0 2px 10px rgba(13,202,240,0.07);
    font-size: 1.3rem;
    vertical-align: middle;
}

.flag-wrap .fi {
    display: inline-block;
    border-radius: 6px;
    border: 1px solid #e5eaf2;
    box-shadow: 0 1px 4px rgba(13,202,240,0.08);
    font-size: inherit;
    width: 2.1em;
    height: 1.4em;
    /* animation: flag-wave 1.6s infinite linear; */
    margin: 0;
    vertical-align: middle;
}

@keyframes flag-wave {
    0%   { transform: skewY(0deg); }
    10%  { transform: skewY(-8deg); }
    20%  { transform: skewY(6deg); }
    30%  { transform: skewY(-10deg); }
    40%  { transform: skewY(12deg); }
    50%  { transform: skewY(-6deg); }
    60%  { transform: skewY(8deg); }
    70%  { transform: skewY(-4deg); }
    80%  { transform: skewY(4deg); }
    90%  { transform: skewY(-2deg); }
    100% { transform: skewY(0deg); }
}

@media (max-width: 767px) {
    .partner-flags-marquee { height: 1.5rem; }
    .flag-wrap { font-size: 0.8rem; padding: 0.10rem 0.3rem; }
    .partner-flags-track { padding: 0.05rem 0; }
}






@media (max-width: 991px) {
    .display-1 { font-size: 2.2rem; }
    .carousel-caption { padding: 0 1rem; }
}
@media (max-width: 767px) {
    .display-1 { font-size: 1.2rem; }
    .lead { font-size: 1rem; }
    .carousel-caption { padding: 0 0.5rem; }
}
</style>
@endpush

@push('scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({ duration: 900, once: true });
</script>
@endpush

@endsection
