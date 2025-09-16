@extends('layouts.app')
@section('title', 'Our Clients | DMM')
@section('content')

{{-- HERO SECTION --}}
<section class="client-hero-alt2 position-relative d-flex align-items-center justify-content-center overflow-hidden" style="min-height:55vh;">
  <div class="client-hero-bg-alt2"></div>
  <div class="container text-center text-white position-relative z-2 py-5">
    <h1 class="display-4 fw-bold mb-2 animate__animated animate__fadeInDown">
      <span class="client-hero-gradient-text-alt2">Our Clients</span>
    </h1>
    <p class="lead mb-0 animate__animated animate__fadeInUp animate__delay-1s">
      <span class="fw-semibold">A network of trusted partners and industry leaders in Indonesia and Asia.</span>
    </p>
  </div>
</section>

{{-- FEATURED CLIENTS --}}
<section class="partnership-bento-section py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold mb-5 text-gradient-business text-center animate__animated animate__fadeInDown">Strategic Partnership Opportunities</h2>
    <div class="partnership-bento-grid">
      <!-- Mining Partner -->
      <div class="partnership-bento-card animate__animated animate__fadeInLeft" data-aos="fade-right">
        <div class="bento-icon-wrap">
          <span class="bento-animated-icon"><i class="bi bi-gem"></i></span>
        </div>
        <div class="bento-title">Mining Partner</div>
        <div class="bento-desc">
          Collaborate on mining operations, exploration, and resource development.<br>
          <span class="bento-highlight">Joint venture & technical synergy</span>
        </div>
      </div>
      <!-- Founder / Investor -->
      <div class="partnership-bento-card animate__animated animate__fadeInDown" data-aos="fade-down">
        <div class="bento-icon-wrap">
          <span class="bento-animated-icon"><i class="bi bi-person-badge"></i></span>
        </div>
        <div class="bento-title">Founder / Investor</div>
        <div class="bento-desc">
          Open for capital partnerships, co-funding, and strategic investment.<br>
          <span class="bento-highlight">Equity & funding collaboration</span>
        </div>
      </div>
      <!-- Buyer -->
      <div class="partnership-bento-card animate__animated animate__fadeInUp" data-aos="fade-up">
        <div class="bento-icon-wrap">
          <span class="bento-animated-icon"><i class="bi bi-cart-check"></i></span>
        </div>
        <div class="bento-title">Buyer</div>
        <div class="bento-desc">
          Secure long-term, reliable coal supply for your industry or trading needs.<br>
          <span class="bento-highlight">Direct supply contracts</span>
        </div>
      </div>
      <!-- Transportation Partner -->
      <div class="partnership-bento-card animate__animated animate__fadeInRight" data-aos="fade-left">
        <div class="bento-icon-wrap">
          <span class="bento-animated-icon"><i class="bi bi-truck-front"></i></span>
        </div>
        <div class="bento-title">Transportation Partner</div>
        <div class="bento-desc">
          Partner with us for barge, vessel, and logistics solutions.<br>
          <span class="bento-highlight">Barge, vessel & logistics synergy</span>
        </div>
      </div>
    </div>
  </div>
</section>


{{-- LOGO WALL --}}
<section class="client-wall-section py-5">
  <div class="container">
    <h2 class="fw-bold mb-5 text-gradient-business text-center animate__animated animate__fadeInUp">Client Portfolio</h2>
    <div class="client-wall-masonry">
      @foreach([
        ['logo' => 'PLN EPI.jpeg', 'name' => 'PLN EPI'],
        ['logo' => 'Bhumi Jati Power.jpeg', 'name' => 'Bhumi Jati Power'],
        ['logo' => 'Tshingsan Group.jpeg', 'name' => 'Tshingsan Group'],
        ['logo' => 'SIG.jpeg', 'name' => 'SIG Group'],
        ['logo' => 'indo_cement.jpeg', 'name' => 'Indocement'],
        ['logo' => 'holcim.jpeg', 'name' => 'Holcim'],
        ['logo' => 'baturaja.jpeg', 'name' => 'baturaja'],
        ['logo' => 'Tonasa.png', 'name' => 'Tonasa'],
        ['logo' => 'semen_padang.jpeg', 'name' => 'Padang'],
      ] as $client)
      <div class="client-wall-logo animate__animated animate__zoomIn" data-aos="fade-up" title="{{ $client['name'] }}">
        <img src="{{ asset('images/clients/' . $client['logo']) }}" alt="{{ $client['name'] }}">
      </div>
      @endforeach
    </div>
    <div class="text-center mt-5">
      <span class="client-chip">PLN EPI</span>
      <span class="client-chip">Bhumi Jati Power</span>
      <span class="client-chip">Tshingsan Group</span>
      <span class="client-chip">SIG Group</span>
      <span class="client-chip">Indocement</span>
      <span class="client-chip">Holcim</span>
      <span class="client-chip">baturaja Cement</span>
      <span class="client-chip">Tonasa Cement</span>
      <span class="client-chip">Padang Cement</span>
    </div>
  </div>
</section>

{{-- EXPORT DESTINATIONS STEPPER --}}
<section class="client-export-stepper-section py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold mb-5 text-gradient-business text-center animate__animated animate__fadeInUp">Export Destinations</h2>
    <div class="client-stepper d-flex flex-wrap justify-content-center align-items-center">
      @foreach([
        ['country' => 'China', 'flag' => 'cn'],
        ['country' => 'Thailand', 'flag' => 'th'],
        ['country' => 'India', 'flag' => 'in'],
        ['country' => 'Pakistan', 'flag' => 'pk'],
        ['country' => 'Bangladesh', 'flag' => 'bd'],
        ['country' => 'Turkey', 'flag' => 'tr'],
        ['country' => 'Germany', 'flag' => 'de'],
        ['country' => 'Australia', 'flag' => 'au'],
        ['country' => 'SE Asia', 'flag' => 'globe'],
      ] as $i => $exp)
      <div class="client-stepper-item text-center animate__animated animate__fadeInUp" data-aos="fade-up">
        <div class="client-stepper-flag mb-2">
          @if($exp['flag'] === 'globe')
            <i class="bi bi-globe2 fs-2 text-primary"></i>
          @else
            <img src="https://flagcdn.com/32x24/{{ $exp['flag'] }}.png" alt="{{ $exp['country'] }}">
          @endif
        </div>
        <div class="client-stepper-country fw-bold">{{ $exp['country'] }}</div>
      </div>
      {{-- Arrow only between items, not after last --}}
      @if($i < count([
        'China','Thailand','India','Pakistan','Bangladesh','Turkey','Germany','Australia','SE Asia'
      ]) - 1)
        <div class="client-stepper-arrow d-none d-md-block">
          <i class="bi bi-arrow-right fs-3 text-gradient-business"></i>
        </div>
      @endif
      @endforeach
    </div>
    <div class="text-center mt-4 small text-muted">
      <i class="bi bi-truck"></i> Avg shipment: <b>55,000 MT/vessel</b>, monthly or bimonthly.
    </div>
  </div>
</section>

{{-- (Optional) TESTIMONIALS --}}
<section class="client-testimonial-section py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-5 text-gradient-business">Client Feedback</h2>
    <div class="row g-4 justify-content-center">
      <div class="col-md-4">
        <div class="testimonial-card-alt animate__animated animate__fadeInLeft">
          <div class="testimonial-quote-alt">“DMM is a reliable partner for our energy needs.”</div>
          <div class="testimonial-client-alt mt-3">
            <span class="fw-bold">Procurement Lead</span> – SIG Group
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial-card-alt animate__animated animate__fadeInUp">
          <div class="testimonial-quote-alt">“Always professional and on time.”</div>
          <div class="testimonial-client-alt mt-3">
            <span class="fw-bold">Energy Division</span> – Bhumi Jati Power
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial-card-alt animate__animated animate__fadeInRight">
          <div class="testimonial-quote-alt">“A trusted supplier for our power plant.”</div>
          <div class="testimonial-client-alt mt-3">
            <span class="fw-bold">Plant Manager</span> – PLN EPI
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
<style>
.client-hero-alt2 {
  min-height: 55vh;
  background: #1a2a3a;
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}
.client-hero-bg-alt2 {
  position: absolute;
  top: 0; left: 0; width: 100%; height: 100%;
  background: radial-gradient(ellipse at 60% 30%, #0dcaf0 0%, #3b82f6 40%, #1a2a3a 100%);
  z-index: 1;
  animation: heroBgMove 14s ease-in-out infinite alternate;
}
@keyframes heroBgMove {
  0% { background-position: 60% 30%; }
  100% { background-position: 40% 60%; }
}
.client-hero-gradient-text-alt2 {
background: linear-gradient(90deg, #0dcaf0 0%, #3b82f6 60%, #cbd5e1 100%);

text-shadow: 0 2px 8px rgba(0,0,0,0.08), 0 1px 0 #fff;

  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  text-fill-color: transparent;
  display: inline-block;
  animation: gradientTextMove 6s ease-in-out infinite alternate;
}
@keyframes gradientTextMove {
  0% { background-position: 0% 50%; }
  100% { background-position: 100% 50%; }
}
.glass-gradient {
  background: rgba(255,255,255,0.18);
  border-radius: 1.5rem;
  box-shadow: 0 8px 32px rgba(13,202,240,0.12), 0 2px 8px rgba(13,202,240,0.08);
  backdrop-filter: blur(6px);
  border: 2.5px solid transparent;
  border-image: linear-gradient(90deg, #0dcaf0 0%, #3b82f6 100%);
  border-image-slice: 1;
  transition: box-shadow 0.22s, transform 0.22s, border 0.22s, background 0.22s;
  padding: 2.1rem 1.8rem 1.5rem 1.8rem;
  position: relative;
  overflow: hidden;
}
.glass-gradient:hover, .glass-gradient:focus {
  box-shadow: 0 16px 48px rgba(59,130,246,0.16), 0 2px 8px rgba(13,202,240,0.13);
  background: rgba(13,202,240,0.07);
  transform: translateY(-6px) scale(1.025);
  border-color: #0dcaf0;
}
.partnership-bento-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px,1fr));
  gap: 2.5rem 2.2rem;
  align-items: stretch;
  justify-items: stretch;
  margin: 0 auto;
  max-width: 980px;
}
.partnership-bento-card {
  background: rgba(255,255,255,0.25);
  border-radius: 1.5rem;
  box-shadow: 0 8px 32px rgba(13,202,240,0.10), 0 2px 8px rgba(13,202,240,0.08);
  border: 2.5px solid transparent;
  border-image: linear-gradient(100deg, #0dcaf0 0%, #3b82f6 100%);
  border-image-slice: 1;
  padding: 2.1rem 1.5rem 1.5rem 1.5rem;
  position: relative;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  align-items: center;
  min-height: 240px;
  transition: box-shadow 0.22s, transform 0.22s, border 0.22s, background 0.22s;
  cursor: pointer;
  animation: fadeInUp 1.1s;
}
.partnership-bento-card:hover, .partnership-bento-card:focus {
  box-shadow: 0 16px 48px rgba(59,130,246,0.16), 0 2px 8px rgba(13,202,240,0.13);
  background: rgba(13,202,240,0.07);
  border-color: #0dcaf0;
  transform: translateY(-8px) scale(1.035) rotate(-1deg);
}
.bento-icon-wrap {
  margin-bottom: 1.1rem;
  display: flex;
  align-items: center;
  justify-content: center;
}
.bento-animated-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 2.9rem;
  color: #0dcaf0;
  background: #fff;
  border-radius: 50%;
  box-shadow: 0 2px 10px rgba(13,202,240,0.13);
  padding: 0.7rem 1.1rem;
  animation: pulse 2.5s infinite;
  transition: background 0.18s, color 0.18s, transform 0.18s;
}
.partnership-bento-card:hover .bento-animated-icon {
  background: linear-gradient(90deg, #0dcaf0 0%, #3b82f6 100%);
  color: #fff;
  transform: scale(1.13) rotate(-10deg);
}
.bento-title {
  font-size: 1.18rem;
  font-weight: 700;
  color: #1780b8;
  margin-bottom: 0.7rem;
  text-align: center;
  letter-spacing: 0.01em;
}
.bento-desc {
  color: #223;
  font-size: 1.05rem;
  text-align: center;
  margin-bottom: 0.2rem;
  line-height: 1.6;
}
.bento-highlight {
  display: inline-block;
  margin-top: 0.5rem;
  color: #0dcaf0;
  font-weight: 600;
  font-size: 0.98rem;
  background: #e0f7fa;
  border-radius: 1rem;
  padding: 0.18rem 0.9rem;
  letter-spacing: 0.01em;
}
@keyframes pulse {
  0%, 100% { box-shadow: 0 4px 18px rgba(13,202,240,0.09);}
  50% { box-shadow: 0 12px 36px rgba(59,130,246,0.13);}
}
@media (max-width: 991px) {
  .partnership-bento-card { padding: 1.2rem 0.7rem 1.1rem 0.7rem; min-height: 140px;}
  .bento-animated-icon { font-size: 2rem; padding: 0.4rem 0.7rem;}
}
@media (max-width: 767px) {
  .partnership-bento-grid { gap: 1.1rem 0.7rem;}
  .partnership-bento-card { padding: 0.7rem 0.3rem; border-radius: 1rem; }
  .bento-animated-icon { font-size: 1.3rem; padding: 0.2rem 0.5rem;}
}

.client-wall-masonry {
  display: flex;
  flex-wrap: wrap;
  gap: 1.5rem 2.2rem;
  justify-content: center;
  align-items: flex-end;
}
.client-wall-logo {
  background: #fff;
  border-radius: 1.1rem;
  box-shadow: 0 2px 8px rgba(13,202,240,0.08);
  padding: 0.7rem 1.5rem;
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 80px;
  min-height: 60px;
  transition: box-shadow 0.18s, transform 0.18s;
  cursor: pointer;
}
.client-wall-logo:hover {
  box-shadow: 0 8px 32px rgba(13,202,240,0.14);
  transform: scale(1.06);
}
.client-wall-logo img {
  width: 44px; height: 44px;
  object-fit: contain;
  border-radius: 0.7rem;
  background: #fff;
}
.client-chip {
  display: inline-block;
  background: linear-gradient(90deg,#e0f7fa 0%,#b6eaff 100%);
  color: #1780b8;
  border-radius: 2rem;
  font-size: 1.01rem;
  font-weight: 600;
  padding: 0.34rem 1.1rem 0.28rem 0.95rem;
  box-shadow: 0 2px 8px rgba(13,202,240,0.06);
  border: 1.5px solid #eaf6fb;
  margin: 0.2rem 0.3rem;
  transition: background 0.18s, color 0.18s, box-shadow 0.18s;
}
.client-chip:hover {
  background: linear-gradient(90deg,#0dcaf0 0%,#3b82f6 100%);
  color: #fff;
  box-shadow: 0 4px 18px rgba(13,202,240,0.13);
}
.client-stepper {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 0.8rem 1.5rem;
  justify-content: center;
}
.client-stepper-item {
  min-width: 90px;
  background: #fff;
  border-radius: 1.1rem;
  box-shadow: 0 2px 8px rgba(13,202,240,0.08);
  padding: 0.8rem 1.2rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: box-shadow 0.18s, transform 0.18s;
}
.client-stepper-item:hover {
  box-shadow: 0 8px 32px rgba(13,202,240,0.14);
  transform: scale(1.06);
}
.client-stepper-flag img {
  width: 32px; height: 24px;
  object-fit: contain;
  border-radius: 0.4rem;
  background: #fff;
}
.client-stepper-country {
  font-size: 1.08rem;
  color: #1780b8;
  font-weight: 700;
}
.client-stepper-arrow {
  margin: 0 0.5rem;
}
.testimonial-card-alt {
  background: #fff;
  border-radius: 1.2rem;
  box-shadow: 0 2px 12px rgba(13,202,240,0.08);
  border: 1.5px solid #e5eaf2;
  padding: 1.3rem 1.1rem 1.1rem 1.1rem;
  min-height: 160px;
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  transition: box-shadow 0.18s, transform 0.18s;
}
.testimonial-card-alt:hover {
  box-shadow: 0 8px 32px rgba(13,202,240,0.14);
  border-color: #0dcaf0;
  transform: scale(1.03) translateY(-3px);
}
.testimonial-quote-alt {
  font-size: 1.08rem;
  color: #1780b8;
  font-style: italic;
  margin-bottom: 0.7rem;
}
.testimonial-client-alt {
  font-size: 0.96rem;
  color: #223;
}
@media (max-width: 991px) {
  .glass-gradient { padding: 1.2rem 0.7rem 1.1rem 0.7rem; }
  .client-featured-logo { width: 36px; height: 36px;}
  .client-wall-logo img { width: 28px; height: 28px;}
  .client-stepper-item { min-width: 60px; padding: 0.4rem 0.7rem;}
}
@media (max-width: 767px) {
  .client-hero-alt2 { min-height: 35vh; }
  .client-wall-masonry { gap: 0.7rem 0.4rem;}
  .client-stepper { gap: 0.4rem 0.7rem;}
}
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ once: true, duration: 800 });
</script>
@endpush
