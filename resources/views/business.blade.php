@extends('layouts.app')
@section('title', 'Our Business | DMM')
@section('content')

{{-- HERO SECTION --}}
<section class="business-hero-pro position-relative d-flex align-items-center">
  <div class="business-hero-bg-pro"></div>
  <div class="container hero-content-pro text-center text-white position-relative z-2 py-5">
    <div class="business-hero-logo-wrap mb-4">
      <img src="{{ asset('images/mining/logo.jpeg') }}" alt="DMM Logo" class="business-hero-logo-pro animate__animated animate__fadeInDown">
    </div>
    <h1 class="display-3 fw-bold mb-3 animate__animated animate__fadeInDown">Our Business</h1>
    <p class="lead mb-0 animate__animated animate__fadeInUp animate__delay-1s">
      Integrated Mining & Logistics<br>
      <span class="fw-semibold">From mine to jetty with modern equipment, expert team, and a commitment to sustainability.</span>
    </p>
  </div>
</section>

{{-- PROCESS FLOW SECTION --}}
<section class="business-process-flow-pro py-5">
  <div class="container ">
    <h2 class="text-center fw-bold mb-5 text-gradient-business animate__animated animate__fadeInUp">How We Operate</h2>
    <div class="row g-4 justify-content-center process-bento">
      @foreach([
        ['icon' => 'bi-minecart-loaded', 'title' => 'Mining', 'desc' => 'Extracted from sustainable mines.'],
        ['icon' => 'bi-gear-fill', 'title' => 'Processing', 'desc' => 'Crushed, sorted, and tested.'],
        ['icon' => 'bi-truck', 'title' => 'Transport', 'desc' => 'Moved by modern fleet.'],
        ['icon' => 'bi-water', 'title' => 'Jetty', 'desc' => 'Loaded at private jetty.'],
        ['icon' => 'bi-globe2', 'title' => 'Export', 'desc' => 'Shipped globally.'],
      ] as $step)
      <div class="col-6 col-md-2 d-flex">
        <div class="process-bento-card flex-fill text-center animate__animated animate__zoomIn" data-aos="zoom-in">
          <div class="process-bento-icon mb-2"><i class="bi {{ $step['icon'] }}"></i></div>
          <div class="process-bento-title mb-1">{{ $step['title'] }}</div>
          <div class="process-bento-desc small">{{ $step['desc'] }}</div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- PRODUCT HIGHLIGHT GRID --}}
<section class="business-product-bento py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-5 text-gradient-business animate__animated animate__fadeInUp">Our Main Products</h2>
    <div class="row g-4 justify-content-center">
      <div class="col-md-6 d-flex">
        <div class="bento-product-card glass flex-fill d-flex flex-column align-items-center animate__animated animate__fadeInLeft" data-aos="fade-right">
          <img src="{{ asset('images/mining/batu.jpg') }}" class="product-bento-img mb-3" alt="Thermal Coal">
          <h4 class="fw-bold mb-2"><i class="bi bi-fire text-danger me-2"></i>Thermal Coal</h4>
          <div class="product-bento-desc mb-2">
            Used for power generation and industry. Process: coal is crushed and burned in a boiler, creating steam to drive turbines.
          </div>
          <button class="btn btn-outline-info rounded-pill px-4 py-2 mt-auto product-bento-btn" data-bs-toggle="modal" data-bs-target="#thermalModal">
            Learn More
          </button>
        </div>
      </div>
      <div class="col-md-6 d-flex">
        <div class="bento-product-card glass flex-fill d-flex flex-column align-items-center animate__animated animate__fadeInRight" data-aos="fade-left">
          <img src="{{ asset('images/mining/batu2.jpg') }}" class="product-bento-img mb-3" alt="Coking Coal">
          <h4 class="fw-bold mb-2"><i class="bi bi-building text-secondary me-2"></i>Coking Coal</h4>
          <div class="product-bento-desc mb-2">
            Used in steel and iron industries. Process: coal is heated without air at high temperatures to produce coke.
          </div>
          <button class="btn btn-outline-info rounded-pill px-4 py-2 mt-auto product-bento-btn" data-bs-toggle="modal" data-bs-target="#cokingModal">
            Learn More
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- PRODUCT MODALS --}}
<div class="modal fade" id="thermalModal" tabindex="-1" aria-labelledby="thermalModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content glass">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold" id="thermalModalLabel"><i class="bi bi-fire text-danger me-2"></i>Thermal Coal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="{{ asset('images/mining/batu.jpg') }}" class="img-fluid rounded mb-4" alt="Thermal Coal">
        <p>
          <b>Thermal coal</b> is primarily used for electricity generation and industry. It is crushed and burned in boilers, producing steam that drives turbines for power plants. DMM supplies high-quality thermal coal with consistent calorific value, low ash, and reliable logistics.
        </p>
        <ul>
          <li>Calorific value: 5,000 - 6,500 kcal/kg</li>
          <li>Low ash, low sulfur</li>
          <li>Reliable supply chain and export logistics</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="cokingModal" tabindex="-1" aria-labelledby="cokingModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content glass">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold" id="cokingModalLabel"><i class="bi bi-building text-secondary me-2"></i>Coking Coal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="{{ asset('images/mining/batu2.jpg') }}" class="img-fluid rounded mb-4" alt="Coking Coal">
        <p>
          <b>Coking coal</b> is used in the production of steel and iron. It is heated in the absence of air at high temperatures to produce coke, a key input for blast furnaces. DMM delivers premium coking coal with consistent quality and timely delivery.
        </p>
        <ul>
          <li>High fixed carbon, low volatile matter</li>
          <li>Strict quality control</li>
          <li>Trusted by steelmakers in Indonesia and abroad</li>
        </ul>
      </div>
    </div>
  </div>
</div>

{{-- STRUCTURE CAPITAL --}}
<section class="structure-capital-section py-5">
  <div class="container">
    <h2 class="fw-bold mb-5 text-gradient-business text-center animate__animated animate__fadeInUp">Structure Capital</h2>
    <div class="row align-items-center g-4">
      <div class="col-lg-8 d-flex justify-content-center">
        <div class="structure-diagram-animated position-relative animate__animated animate__fadeInLeft" data-aos="zoom-in">
          <!-- Banking Node (TOP LEFT) -->
          <div class="sc-node sc-node-bank">
            <div class="sc-circle sc-circle-bank shadow">
              <i class="bi bi-cash-coin"></i>
              <span>BANKING & FOREIGN COMPANY</span>
            </div>
          </div>
          <!-- Mine Node (BOTTOM LEFT) -->
          <div class="sc-node sc-node-mine">
            <div class="sc-circle sc-circle-mine shadow">
              <i class="bi bi-minecart-loaded"></i>
              <span>MINE</span>
            </div>
          </div>
          <!-- DMM Node (CENTER) -->
          <div class="sc-node sc-node-dmm">
            <div class="sc-circle sc-circle-dmm shadow">
              <i class="bi bi-bank2"></i>
              <span>DMM</span>
            </div>
            <div class="sc-label">Dhirgham Murni Mandiri</div>
          </div>
          <!-- Buyer Node (RIGHT) -->
          <div class="sc-node sc-node-buyer">
            <div class="sc-circle sc-circle-buyer shadow">
              <i class="bi bi-person-check"></i>
              <span>BUYER</span>
            </div>
          </div>
          <!-- Animated SVG Lines & Moving Dots -->
          <svg class="sc-svg-animated" width="100%" height="100%" viewBox="0 0 700 320" style="position:absolute;top:0;left:0;pointer-events:none;">
            <!-- Banking → DMM -->
            <path class="sc-line-anim" d="M120 60 C220 90, 260 100, 340 110"  />
            <!-- Mine ↔ DMM (bolak-balik) -->
            <path class="sc-line-anim" d="M120 220 C200 180, 260 160, 340 130" id="mine-dmm"/>
            <!-- DMM ↔ Buyer (bolak-balik) -->
            <path class="sc-line-anim" d="M370 120 C480 100, 570 110, 620 120" id="dmm-buyer"/>
            <!-- Dots (animated motion bolak-balik) -->
            <!-- Banking → DMM -->
            <circle class="sc-dot-anim" r="7" fill="#0dcaf0">
              <animateMotion dur="2.2s" repeatCount="indefinite" keyPoints="0;1" keyTimes="0;1">
                <mpath xlink:href="#banking-dmm"/>
              </animateMotion>
            </circle>
            <!-- Mine → DMM -->
            <circle class="sc-dot-anim" r="7" fill="#0dcaf0">
              <animateMotion dur="2.2s" repeatCount="indefinite" keyPoints="0;1" keyTimes="0;1">
                <mpath xlink:href="#mine-dmm"/>
              </animateMotion>
            </circle>
            <!-- DMM → Mine -->
            <circle class="sc-dot-anim-rev" r="7" fill="#3b82f6">
              <animateMotion dur="2.2s" repeatCount="indefinite" keyPoints="1;0" keyTimes="0;1">
                <mpath xlink:href="#mine-dmm"/>
              </animateMotion>
            </circle>
            <!-- DMM → Buyer -->
            <circle class="sc-dot-anim" r="7" fill="#0dcaf0">
              <animateMotion dur="2.2s" repeatCount="indefinite" keyPoints="0;1" keyTimes="0;1">
                <mpath xlink:href="#dmm-buyer"/>
              </animateMotion>
            </circle>
            <!-- Buyer → DMM -->
            <circle class="sc-dot-anim-rev" r="7" fill="#3b82f6">
              <animateMotion dur="2.2s" repeatCount="indefinite" keyPoints="1;0" keyTimes="0;1">
                <mpath xlink:href="#dmm-buyer"/>
              </animateMotion>
            </circle>
          </svg>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="structure-capital-card glass animate__animated animate__fadeInRight" data-aos="fade-left">
          <p class="mb-0 fs-5">
            <b>Capital Structure on DHIRGHAM MURNI MANDIRI (DMM)</b> is based on collaboration and cooperation with Indonesian Bank, Local and Foreign Company, as well as direct connection to mining and buyers. DMM is securely funded and ready to collaborate in coal mining and trading.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>





{{-- CTA SECTION --}}
<section class="business-cta-section py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-3 text-gradient-business animate__animated animate__fadeInDown">Ready to Collaborate?</h2>
    <p class="mb-4 fs-5 text-secondary animate__animated animate__fadeInUp animate__delay-1s">
      Contact our team for partnership, inquiries, or business opportunities.
    </p>
    <a href="/contact" class="btn btn-lg btn-primary rounded-pill px-5 fw-semibold shadow animate__animated animate__pulse animate__infinite">Contact Us</a>
  </div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
<style>
/* HERO */
.business-hero-pro {
  background: linear-gradient(120deg, #0f2027 0%, #2c5364 100%);
  min-height: 340px;
  padding: 0;
  position: relative;
}
.business-hero-bg-pro {
  position: absolute;
  top: 0; left: 0; width: 100%; height: 100%;
  background: radial-gradient(ellipse at 40% 0, #0dcaf0 0%, #3b82f6 40%, #0f2027 100%);
  opacity: 0.73;
  z-index: 1;
}
.business-hero-logo-pro {
  width: 80px; height: 80px; border-radius: 18px;
  box-shadow: 0 2px 10px rgba(13,202,240,0.13);
  background: #fff;
}
.business-hero-logo-wrap { display: flex; justify-content: center; }

/* PROCESS FLOW BENTO */
.process-bento-card {
  background: #fff;
  border-radius: 1.2rem;
  box-shadow: 0 4px 18px rgba(13,202,240,0.10);
  padding: 1.6rem 0.6rem 1.1rem 0.6rem;
  min-width: 120px;
  min-height: 140px;
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: box-shadow 0.18s, transform 0.18s, background 0.18s;
  cursor: pointer;
}
.process-bento-card:hover {
  box-shadow: 0 8px 32px rgba(59,130,246,0.14);
  background: rgba(13,202,240,0.07);
  transform: translateY(-4px) scale(1.04);
}
.process-bento-icon {
  font-size: 2rem;
  color: #0dcaf0;
  margin-bottom: 0.4rem;
}
.process-bento-title {
  font-weight: 700;
  font-size: 1.08rem;
  color: #1780b8;
  margin-bottom: 0.2rem;
}
.process-bento-desc {
  color: #223;
  font-size: 0.99rem;
}

/* PRODUCT BENTO GRID */
.bento-product-card {
  background: #fff;
  border-radius: 1.3rem;
  box-shadow: 0 4px 24px rgba(13,202,240,0.08);
  border: 1.5px solid #e5eaf2;
  padding: 2rem 1.2rem 1.3rem 1.2rem;
  min-height: 410px;
  text-align: center;
  transition: box-shadow 0.18s, transform 0.18s;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.bento-product-card:hover {
  box-shadow: 0 12px 36px rgba(59,130,246,0.13);
  transform: translateY(-4px) scale(1.04);
}
.product-bento-img {
  border-radius: 1.1rem;
  max-height: 170px;
  object-fit: cover;
  width: 100%;
  box-shadow: 0 2px 12px rgba(13,202,240,0.08);
}
.product-bento-desc {
  color: #223;
  font-size: 1.05rem;
}
.product-bento-btn {
  font-size: 1.02rem;
  margin-top: 1rem;
  font-weight: 600;
  transition: background 0.18s, color 0.18s, transform 0.18s;
}
.product-bento-btn:hover {
  background: linear-gradient(90deg, #0dcaf0 0%, #3b82f6 100%);
  color: #fff;
  transform: scale(1.04);
}

/* STRUCTURE CAPITAL (same as before) */
.structure-diagram-animated {
  width: 700px;
  height: 320px;
  position: relative;
  margin: 0 auto 1.5rem auto;
  min-width: 270px;
  max-width: 100vw;
  z-index: 2;
}
.sc-node {
  position: absolute;
  text-align: center;
  z-index: 2;
}
.sc-node-bank { left: 40px; top: 20px; width: 130px; }
.sc-node-mine { left: 40px; top: 200px; width: 110px; }
.sc-node-dmm { left: 340px; top: 90px; width: 120px; }
.sc-node-buyer { left: 600px; top: 110px; width: 90px; }
.sc-circle {
  display: flex; flex-direction: column; align-items: center; justify-content: center;
  border-radius: 50%; font-weight: 700; font-size: 1.08rem;
  margin: 0 auto; box-shadow: 0 4px 18px rgba(13,202,240,0.12);
  transition: box-shadow 0.18s, transform 0.18s, background 0.18s, color 0.18s;
  cursor: pointer; min-width: 100px; min-height: 100px; max-width: 140px; max-height: 140px;
  padding: 1.1rem; background: #fff; color: #1780b8; border: 3.5px solid #0dcaf0; position: relative; z-index: 2;
  font-family: inherit;
  animation: pulse 3s ease-in-out infinite;
}
@keyframes pulse {
  0%, 100% { transform: scale(1);}
  50% { transform: scale(1.1);}
}
.sc-circle-dmm {
  background: linear-gradient(120deg, #e0f7fa 0%, #b6eaff 100%);
  color: #13a3c7;
  border-color: #0dcaf0;
}
.sc-circle-bank {
  background: linear-gradient(120deg, #e0f7fa 0%, #fff 100%);
  color: #1780b8;
  border-color: #3b82f6;
  font-size: 0.98rem;
}
.sc-circle-mine {
  background: linear-gradient(120deg, #e0f7fa 0%, #b6eaff 100%);
  color: #1780b8;
  border-color: #0dcaf0;
}
.sc-circle-buyer {
  background: linear-gradient(120deg, #e0f7fa 0%, #fff 100%);
  color: #1780b8;
  border-color: #0dcaf0;
}
.sc-circle:hover, .sc-circle:focus {
  box-shadow: 0 8px 32px rgba(13,202,240,0.20);
  background: linear-gradient(120deg, #0dcaf0 0%, #3b82f6 100%);
  color: #fff;
  transform: scale(1.13);
}
.sc-circle:hover i, .sc-circle:focus i { color: #fff; }
.sc-label {
  font-size: 0.97rem;
  color: #555;
  margin-top: 0.4rem;
  font-weight: 500;
  letter-spacing: 0.01em;
}
.sc-svg-animated {
  z-index: 1;
}
.sc-line-anim {
  fill: none;
  stroke: #0dcaf0;
  stroke-width: 5;
  stroke-linejoin: round;
  stroke-linecap: round;
  stroke-dasharray: 400;
  stroke-dashoffset: 400;
  opacity: 0.8;
  animation: sc-line-draw-anim 1.4s cubic-bezier(.4,2,.6,1) forwards;
  transition: stroke 0.3s ease;
}
@keyframes sc-line-draw-anim {
  to { stroke-dashoffset: 0; }
}
.sc-dot-anim, .sc-dot-anim-rev {
  opacity: 0.95;
  filter: drop-shadow(0 0 8px #0dcaf0);
}
.sc-dot-anim-rev { fill: #3b82f6 !important; filter: drop-shadow(0 0 8px #3b82f6);}
.structure-capital-card {
  padding: 2.1rem 1.7rem;
  border-radius: 1.3rem;
  background: rgba(255,255,255,0.13);
  box-shadow: 0 4px 24px rgba(13,202,240,0.09);
  backdrop-filter: blur(2.5px);
  border: 1.5px solid rgba(13,202,240,0.10);
  min-height: 250px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin-top: 1.5rem;
}
@media (max-width: 991px) {
  .structure-diagram-animated { width: 100%; min-width: 210px; height: 220px; }
  .structure-capital-card { padding: 1.2rem 0.7rem; min-height: 120px; }
  .sc-node-bank { left: 5px; top: 10px; width: 120px; }
  .sc-node-mine { left: 5px; top: 120px; width: 100px; }
  .sc-node-dmm { left: 300px; top: 90px; width: 100px; }
  .sc-node-buyer { left: 540px; top: 110px; width: 80px; }
}
@media (max-width: 767px) {
  .structure-diagram-animated { width: 100%; min-width: 110px; height: 120px; }
  .sc-circle { min-width: 54px; min-height: 54px; font-size: 0.89rem; padding: 0.3rem;}
  .structure-capital-card { padding: 0.8rem 0.4rem; }
  .sc-node-bank { left: 2px; top: 0px; width: 80px; }
  .sc-node-mine { left: 2px; top: 60px; width: 70px; }
  .sc-node-dmm { left: 120px; top: 40px; width: 70px; }
  .sc-node-buyer { left: 210px; top: 45px; width: 60px; }
}





/* CTA */
.business-cta-section {
  background: linear-gradient(120deg, #f8fafc 0%, #eaf6fb 100%);
}
.business-cta-section .btn-primary {
  background: linear-gradient(90deg,#0dcaf0 0%,#3b82f6 100%);
  border: none;
  font-weight: 700;
  font-size: 1.18rem;
  box-shadow: 0 2px 10px rgba(13,202,240,0.09);
  transition: background 0.2s, color 0.2s, transform 0.2s;
}
.business-cta-section .btn-primary:hover, .business-cta-section .btn-primary:focus {
  background: linear-gradient(90deg,#3b82f6 0%,#0dcaf0 100%);
  color: #fff;
  transform: scale(1.05);
}

@media (max-width: 991px) {
  .business-hero-logo-pro { width: 54px; height: 54px; }
  .hero-content-pro { padding-top: 2.2rem; padding-bottom: 1.5rem; }
  .bento-product-card, .process-bento-card { padding: 1.2rem 0.7rem 1.1rem 0.7rem; min-height: 180px; }
  .structure-diagram { width: 100%; min-width: 210px; height: 220px; }
  .structure-capital-card { padding: 1.2rem 0.7rem; min-height: 120px; }
}
@media (max-width: 767px) {
  .business-hero-pro { min-height: 220px; }
  .business-hero-bg-pro { opacity: 0.92; }
  .hero-content-pro { padding-top: 1.7rem; padding-bottom: 1.1rem; }
  .bento-product-card, .process-bento-card { padding: 1rem 0.5rem 0.7rem 0.5rem; }
  .structure-diagram { width: 100%; min-width: 140px; height: 170px; }
  .sc-circle { min-width: 70px; min-height: 70px; font-size: 0.93rem; padding: 0.5rem;}
  .structure-capital-card { padding: 0.8rem 0.4rem; }
}



</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ once: true, duration: 800 });
</script>
@endpush
