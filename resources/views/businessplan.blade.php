@extends('layouts.app')
@section('title', 'Business Plan | DMM')
@section('content')

{{-- HERO SECTION --}}
<section class="bp-hero position-relative d-flex align-items-center justify-content-center overflow-hidden">
  <!-- Animated gradient background -->
  <div class="bp-hero-bg"></div>
  <!-- Glass overlay for text -->
  <div class="bp-hero-glass"></div>
  <div class="container bp-hero-content text-center text-white position-relative z-2 py-5">
    <h1 class="display-2 fw-bold mb-3 animate__animated animate__fadeInDown">
      <span class="bp-hero-gradient-text">Business Plan</span>
      <span class="text-gradient-business">& Projected 2025</span>
    </h1>
    <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">
      <span class="fw-semibold">Empowering sustainable growth and innovation in Indonesia’s coal industry.</span>
    </p>
    <a href="#bp-content" class="btn btn-lg btn-gradient-glass px-5 rounded-pill shadow animate__animated animate__fadeInUp animate__delay-2s">
      See Our Roadmap <i class="bi bi-arrow-down-right ms-2"></i>
    </a>
  </div>
</section>


{{-- PROBLEM & SOLUTION BENTO --}}
<section id="bp-content" class="bp-bento-section py-5">
  <div class="container">
    <div class="row g-4 justify-content-center">
      <div class="col-lg-6 d-flex">
        <div class="bp-bento-card glass flex-fill animate__animated animate__fadeInLeft">
          <h3 class="fw-bold mb-3 text-danger"><i class="bi bi-exclamation-circle me-2"></i>Problem</h3>
          <ul class="bp-list">
            <li><b>Market Gap:</b> Coal is effective as an alternative energy source, but users seek greener solutions.</li>
            <li><b>Costs:</b> Demand for cheaper, efficient, and environmentally friendly materials.</li>
            <li><b>Customers:</b> Want affordable, simple fuels, but open to eco-friendly sources.</li>
            <li><b>Usability:</b> Coal is still needed for its ease of use and adoption.</li>
            <li><b>Financials:</b> Capital is essential to meet demand and profit opportunities.</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 d-flex">
        <div class="bp-bento-card glass flex-fill animate__animated animate__fadeInRight">
          <h3 class="fw-bold mb-3 text-success"><i class="bi bi-lightbulb me-2"></i>Solution</h3>
          <ul class="bp-list">
            <li><b>Close the Gap:</b> Coal simplifies management—no other energy is as easy.</li>
            <li><b>Target Market:</b> Companies seeking affordable, efficient energy (domestic & global).</li>
            <li><b>Cost Savings:</b> Help clients stay on target and within budget.</li>
            <li><b>Easy to Use:</b> Coal enables timely project completion.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- PRODUCT OVERVIEW & BENEFIT --}}
<section class="bp-product-section py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-5 text-gradient-business animate__animated animate__fadeInUp">Product Overview</h2>
    <div class="row g-4 justify-content-center">
      @foreach([
        ['icon' => 'bi-box-seam', 'title' => 'Unique', 'desc' => 'Coal is dedicated to task management, process ease, and cost savings.'],
        ['icon' => 'bi-shop', 'title' => 'First to Market', 'desc' => 'Natural, simple, cheap, and functional—coal is designed for efficiency.'],
        ['icon' => 'bi-clipboard-check', 'title' => 'Tested', 'desc' => 'Tested by independent surveyors to meet user requirements.'],
        ['icon' => 'bi-award', 'title' => 'Authentic', 'desc' => 'Developed with expert input and designed for real-world needs.'],
      ] as $item)
      <div class="col-6 col-md-3 d-flex">
        <div class="bp-product-card flex-fill animate__animated animate__zoomIn" data-aos="zoom-in">
          <div class="bp-product-icon mb-2"><i class="bi {{ $item['icon'] }}"></i></div>
          <div class="bp-product-title">{{ $item['title'] }}</div>
          <div class="bp-product-desc">{{ $item['desc'] }}</div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="text-center mt-5 animate__animated animate__fadeInUp animate__delay-1s">
      <span class="badge bg-dark px-3 py-2 fs-6 fw-semibold shadow-sm">Product Benefit</span>
      <div class="fs-5 mt-2 text-secondary">Coal is a fairly simple and efficient energy source to use.</div>
    </div>
  </div>
</section>

{{-- BUSINESS MODEL CANVAS --}}
<section class="bp-canvas-section py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5 text-gradient-business animate__animated animate__fadeInUp">Business Model Canvas</h2>
    <div class="bp-canvas-grid row g-3 justify-content-center">
      <div class="col-6 col-md-3">
        <div class="bp-canvas-box animate__animated animate__fadeInUp">
          <div class="bp-canvas-title">Key Partners</div>
          <div class="bp-canvas-desc">PLN EPI, SIG Group, Bosowa Energy, Mining Partners, Export Buyers</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="bp-canvas-box animate__animated animate__fadeInUp animate__delay-1s">
          <div class="bp-canvas-title">Key Activities</div>
          <div class="bp-canvas-desc">Coal sourcing, logistics, quality control, contract management, export/import</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="bp-canvas-box animate__animated animate__fadeInUp animate__delay-2s">
          <div class="bp-canvas-title">Value Proposition</div>
          <div class="bp-canvas-desc">Reliable supply, competitive price, efficient process, trusted team</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="bp-canvas-box animate__animated animate__fadeInUp animate__delay-3s">
          <div class="bp-canvas-title">Customer Segments</div>
          <div class="bp-canvas-desc">Power plants, cement factories, export buyers, industrial customers</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="bp-canvas-box animate__animated animate__fadeInUp animate__delay-4s">
          <div class="bp-canvas-title">Channels</div>
          <div class="bp-canvas-desc">Direct sales, partnerships, digital communication, industry events</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="bp-canvas-box animate__animated animate__fadeInUp animate__delay-5s">
          <div class="bp-canvas-title">Customer Relationships</div>
          <div class="bp-canvas-desc">Long-term contracts, customer support, tailored solutions</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="bp-canvas-box animate__animated animate__fadeInUp animate__delay-6s">
          <div class="bp-canvas-title">Cost Structure</div>
          <div class="bp-canvas-desc">Coal procurement, logistics, operations, compliance, marketing</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="bp-canvas-box animate__animated animate__fadeInUp animate__delay-7s">
          <div class="bp-canvas-title">Revenue Streams</div>
          <div class="bp-canvas-desc">Coal sales (domestic/export), service contracts, logistics fees</div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- GROWTH STRATEGY TIMELINE --}}
<section class="bp-timeline-section py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-5 text-gradient-business animate__animated animate__fadeInUp">Growth Strategy & Milestones</h2>
    <div class="bp-timeline">
      <div class="bp-timeline-item" data-aos="fade-right">
        <div class="bp-timeline-dot"></div>
        <div>
          <div class="bp-timeline-year">2025</div>
          <div class="bp-timeline-desc">
            Start cooperation with PLTU Jawa 4, cement factories, and private companies.<br>
            <span class="text-info">Target: 140,000 MT (~Rp 90B) in sales.</span>
          </div>
        </div>
      </div>
      <div class="bp-timeline-item" data-aos="fade-left">
        <div class="bp-timeline-dot"></div>
        <div>
          <div class="bp-timeline-year">2025-2026</div>
          <div class="bp-timeline-desc">
            Ramp up to 1,500,000 MT (~Rp 1T) sales for domestic & export.<br>
            <span class="text-info">Minimum 8–10% net margin.</span>
          </div>
        </div>
      </div>
      <div class="bp-timeline-item" data-aos="fade-right">
        <div class="bp-timeline-dot"></div>
        <div>
          <div class="bp-timeline-year">2026-2027</div>
          <div class="bp-timeline-desc">
            Expand to production, transport, and coal loading ports.<br>
            <span class="text-info">Diversify business division beyond sales.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- TRACTION & KEY METRICS --}}
<section class="bp-traction-section py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5 text-gradient-business animate__animated animate__fadeInUp">Traction & Key Metrics</h2>
    <div class="row g-4 justify-content-center">
      @foreach([
        ['year' => '2025', 'client' => 'PLN EPI, Tshingsan Group, CNGRZY', 'order' => '175,000 MT', 'revenue' => 'Rp 120–150B', 'margin' => '8–10%'],
        ['year' => '2026', 'client' => 'PLN EPI, Bosowa Energy, SIG Group', 'order' => '1,200,000 MT', 'revenue' => 'Rp 1T', 'margin' => '8–10%'],
        ['year' => '2027', 'client' => 'Private Company, Export Market', 'order' => '1,500,000 MT', 'revenue' => 'Rp 1T+', 'margin' => '8–10%'],
      ] as $kpi)
      <div class="col-12 col-md-4 d-flex">
        <div class="bp-kpi-card glass flex-fill animate__animated animate__fadeInUp" data-aos="zoom-in">
          <div class="bp-kpi-year">{{ $kpi['year'] }}</div>
          <div class="bp-kpi-metric"><span class="text-info">Client:</span> {{ $kpi['client'] }}</div>
          <div class="bp-kpi-metric"><span class="text-info">Order:</span> {{ $kpi['order'] }}</div>
          <div class="bp-kpi-metric"><span class="text-info">Revenue:</span> {{ $kpi['revenue'] }}</div>
          <div class="bp-kpi-metric"><span class="text-info">Net Margin:</span> {{ $kpi['margin'] }}</div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section class="bp-export-section py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-5 text-gradient-business animate__animated animate__fadeInUp">Export & Major Clients</h2>
    <div class="row g-4 justify-content-center">
      <div class="col-md-6 d-flex">
        <div class="modern-client-box glass-gradient flex-fill animate__animated animate__fadeInLeft">
          <div class="modern-client-header">
            <div class="modern-client-icon"><i class="bi bi-globe2"></i></div>
            <div>
              <span class="fw-bold text-gradient-business fs-4">Export Destinations</span>
            </div>
          </div>
          <div class="modern-client-list mt-3 mb-2">
            <span class="client-badge"><i class="bi bi-flag"></i> China</span>
            <span class="client-badge"><i class="bi bi-flag"></i> Thailand</span>
            <span class="client-badge"><i class="bi bi-flag"></i> India</span>
            <span class="client-badge"><i class="bi bi-globe"></i> SE Asia</span>
          </div>
          <div class="modern-client-info small text-muted mt-2">
            <i class="bi bi-truck"></i> Avg shipment: <b>55,000 MT/vessel</b>, monthly/bimonthly
          </div>
        </div>
      </div>
      <div class="col-md-6 d-flex">
        <div class="modern-client-box glass-gradient flex-fill animate__animated animate__fadeInRight">
          <div class="modern-client-header">
            <div class="modern-client-icon"><i class="bi bi-building"></i></div>
            <div>
              <span class="fw-bold text-gradient-business fs-4">Key Domestic Clients</span>
            </div>
          </div>
          <div class="modern-client-list mt-3 mb-2">
            <span class="client-badge"><i class="bi bi-lightning"></i> PLTU Jawa 4</span>
            <span class="client-badge"><i class="bi bi-building"></i> SIG Group</span>
            <span class="client-badge"><i class="bi bi-building"></i> Bosowa Energy</span>
            <span class="client-badge"><i class="bi bi-people"></i> Private Companies</span>
          </div>
          <div class="modern-client-info small text-muted mt-2">
            <i class="bi bi-bar-chart"></i> Cement demand: <b>16.66M tons/year</b>, DMM targets <b>10%</b> share
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


{{-- SUMMARY --}}
<section class="bp-summary py-5 bg-light">
  <div class="container">
    <div class="bp-summary-card glass mx-auto text-center animate__animated animate__fadeInUp">
      <h3 class="fw-bold mb-3 text-gradient-business">Summary</h3>
      <p class="fs-5 mb-2">
        DMM is committed to quality, efficiency, and customer satisfaction, backed by a solid team and proactive business transformation.
      </p>
      <blockquote class="fs-6 text-secondary mb-0">
        <i>“Efficiency will come from proactive transformation of the way we do business.”</i>
      </blockquote>
    </div>
    <div class="text-center mt-4">
      <span class="text-muted small">Contact: dhirghammurnimandiri@outlook.com | +62 813 1040 6494</span>
    </div>
  </div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
<style>
html { scroll-behavior: smooth; }


.bp-hero {
   min-height: 100vh; /* FULL LAYAR */
  background: #1a2a3a;
  position: relative;
  overflow: hidden;
}
.bp-hero-bg {
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
.bp-hero-glass {
  position: absolute;
  top: 0; left: 0; width: 100%; height: 100%;
  z-index: 2;
  background: rgba(32,44,74,0.18);
  backdrop-filter: blur(3.5px);
}
.bp-hero-content {
  z-index: 3;
  padding-top: 6rem;
  padding-bottom: 5rem;
}
.bp-hero-gradient-text {
  background: linear-gradient(90deg,#0dcaf0 0%,#3b82f6 60%,#fff 100%);
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

.btn-gradient-glass {
  background: rgba(13,202,240,0.13);
  border: none;
  color: #fff;
  font-weight: 700;
  font-size: 1.18rem;
  box-shadow: 0 2px 10px rgba(13,202,240,0.09);
  transition: background 0.3s ease, color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
  backdrop-filter: blur(2px);
  border-radius: 50px;
  padding: 0.75rem 2.5rem;
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  cursor: pointer;
  user-select: none;
  position: relative;
  overflow: hidden;
}

.btn-gradient-glass:hover {
  background: linear-gradient(90deg,#0dcaf0 0%,#3b82f6 100%);
  color: #fff;
  box-shadow: 0 8px 32px rgba(13,202,240,0.3);
  transform: scale(1.05);
}

.btn-gradient-glass:active {
  transform: scale(0.95);
  box-shadow: 0 4px 16px rgba(13,202,240,0.2);
}

.btn-gradient-glass i {
  transition: transform 0.3s cubic-bezier(.4,2,.6,1);
}

.btn-gradient-glass:hover i {
  transform: translateX(7px) rotate(18deg);
}

.btn-gradient-glass:focus {
  outline: none;
  box-shadow: 0 0 0 3px rgba(13,202,240,0.5);
}



@media (max-width: 991px) {
  .bp-hero-content { padding-top: 3.5rem; padding-bottom: 2.5rem; }
  .display-2 { font-size: 2.1rem; }
}
@media (max-width: 767px) {
  .bp-hero { min-height: 220px; }
  .bp-hero-content { padding-top: 1.2rem; padding-bottom: 1.2rem; }
  .display-2 { font-size: 1.3rem; }
}
}
.bp-bento-card, .bp-client-card {
  padding: 2.1rem 1.7rem;
  min-height: 260px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.bp-list {
  padding-left: 1.2rem;
  font-size: 1.06rem;
  color: #223;
  margin-bottom: 0;
}
.bp-list li { margin-bottom: 0.6rem; }
.bp-product-card {
  background: #fff;
  border-radius: 1.3rem;
  box-shadow: 0 4px 24px rgba(13,202,240,0.08);
  border: 1.5px solid #e5eaf2;
  padding: 2rem 1.2rem 1.3rem 1.2rem;
  text-align: center;
  transition: box-shadow 0.18s, transform 0.18s;
  min-height: 180px;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.bp-product-card:hover {
  box-shadow: 0 12px 36px rgba(59,130,246,0.13);
  transform: translateY(-4px) scale(1.04);
}
.bp-product-icon {
  font-size: 2.2rem;
  color: #0dcaf0;
}
.bp-product-title {
  font-weight: 700;
  font-size: 1.13rem;
  color: #1780b8;
  margin-bottom: 0.3rem;
}
.bp-product-desc {
  color: #223;
  font-size: 1.01rem;
}
.bp-canvas-grid {
  max-width: 900px;
  margin: 0 auto;
}
.bp-canvas-box {
  background: #fff;
  border-radius: 1.1rem;
  box-shadow: 0 2px 12px rgba(13,202,240,0.08);
  padding: 1.2rem 0.8rem 1rem 0.8rem;
  min-height: 120px;
  display: flex;
  flex-direction: column;
  align-items: center;
  border: 1.5px solid #e5eaf2;
  transition: box-shadow 0.18s, transform 0.18s;
}
.bp-canvas-box:hover {
  box-shadow: 0 8px 32px rgba(13,202,240,0.14);
  transform: translateY(-4px) scale(1.04);
  border-color: #0dcaf0;
}
.bp-canvas-title {
  font-size: 1.08rem;
  font-weight: 700;
  color: #0dcaf0;
  margin-bottom: 0.2rem;
}
.bp-canvas-desc {
  font-size: 1.01rem;
  color: #223;
}
.bp-timeline {
  max-width: 700px;
  margin: 0 auto;
  position: relative;
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}
.bp-timeline-item {
  display: flex;
  align-items: flex-start;
  margin-bottom: 2.2rem;
  position: relative;
}
.bp-timeline-dot {
  width: 18px; height: 18px;
  background: linear-gradient(135deg,#0dcaf0 0%,#3b82f6 100%);
  border-radius: 50%;
  margin-right: 1.2rem;
  margin-top: 0.3rem;
  box-shadow: 0 2px 8px rgba(13,202,240,0.13);
  border: 3px solid #fff;
  animation: pulse 2.4s infinite;
}
.bp-timeline-year {
  font-size: 1.18rem;
  font-weight: 700;
  color: #0dcaf0;
  min-width: 90px;
}
.bp-timeline-desc {
  font-size: 1.07rem;
  color: #223;
  margin-bottom: 0.2rem;
}
.bp-timeline:before {
  content: "";
  position: absolute;
  left: 8px;
  top: 18px;
  width: 2.5px;
  height: calc(100% - 18px);
  background: linear-gradient(180deg,#0dcaf0 0%,#e0f7fa 100%);
  z-index: 0;
  animation: growLine 2.2s cubic-bezier(.4,2,.6,1) forwards;
}
@keyframes growLine { from { height: 0; } to { height: calc(100% - 18px); } }
.bp-kpi-card {
  background: #fff;
  border-radius: 1.3rem;
  box-shadow: 0 4px 24px rgba(13,202,240,0.08);
  border: 1.5px solid #e5eaf2;
  padding: 2rem 1.2rem 1.3rem 1.2rem;
  text-align: left;
  transition: box-shadow 0.18s, transform 0.18s;
  min-height: 210px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.bp-kpi-card:hover {
  box-shadow: 0 12px 36px rgba(59,130,246,0.13);
  transform: translateY(-4px) scale(1.04);
}
.bp-kpi-year {
  font-weight: 700;
  font-size: 1.22rem;
  color: #0dcaf0;
  margin-bottom: 0.5rem;
}
.bp-kpi-metric {
  font-size: 1.03rem;
  color: #223;
  margin-bottom: 0.2rem;
}
.bp-summary-card {
  max-width: 600px;
  margin: 0 auto;
  padding: 2.2rem 1.6rem;
  border-radius: 1.3rem;
  background: rgba(255,255,255,0.13);
  box-shadow: 0 4px 24px rgba(13,202,240,0.09);
  backdrop-filter: blur(2.5px);
  border: 1.5px solid rgba(13,202,240,0.10);
}
@media (max-width: 991px) {
  .bp-bento-card, .bp-client-card, .bp-summary-card { padding: 1.2rem 0.7rem; min-height: 120px; }
  .bp-product-card, .bp-kpi-card, .bp-canvas-box { padding: 1.2rem 0.7rem 1.1rem 0.7rem; min-height: 120px; }
  .bp-timeline { padding-left: 0.5rem; padding-right: 0.5rem; }
}
@media (max-width: 767px) {
  .bp-hero { padding-top: 2.2rem; padding-bottom: 1.2rem; }
  .bp-bento-card, .bp-client-card, .bp-summary-card { padding: 0.8rem 0.4rem; }
  .bp-product-card, .bp-kpi-card, .bp-canvas-box { padding: 0.7rem 0.3rem; }
  .bp-timeline { padding-left: 0.2rem; padding-right: 0.2rem; }
  .bp-timeline-year { min-width: 60px; font-size: 1rem; }
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
.modern-client-header {
  display: flex;
  align-items: center;
  gap: 1.1rem;
  margin-bottom: 0.2rem;
}
.modern-client-icon {
  font-size: 2.5rem;
  color: #0dcaf0;
  background: #fff;
  border-radius: 50%;
  box-shadow: 0 2px 8px rgba(13,202,240,0.12);
  padding: 0.45rem 0.7rem;
  transition: background 0.18s, color 0.18s, transform 0.18s;
  animation: pulse 2.4s infinite;
}
.glass-gradient:hover .modern-client-icon {
  background: linear-gradient(90deg, #0dcaf0 0%, #3b82f6 100%);
  color: #fff;
  transform: scale(1.12) rotate(-8deg);
}
.modern-client-list {
  display: flex;
  flex-wrap: wrap;
  gap: 0.6rem 0.7rem;
}
.client-badge {
  display: inline-flex;
  align-items: center;
  gap: 0.35rem;
  background: linear-gradient(90deg,#e0f7fa 0%,#b6eaff 100%);
  color: #1780b8;
  border-radius: 2rem;
  font-size: 1.01rem;
  font-weight: 600;
  padding: 0.44rem 1.1rem 0.38rem 0.95rem;
  box-shadow: 0 2px 8px rgba(13,202,240,0.06);
  border: 1.5px solid #eaf6fb;
  transition: background 0.18s, color 0.18s, box-shadow 0.18s;
}
.glass-gradient:hover .client-badge {
  background: linear-gradient(90deg,#0dcaf0 0%,#3b82f6 100%);
  color: #fff;
  box-shadow: 0 4px 18px rgba(13,202,240,0.13);
}
.modern-client-info {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  margin-top: 1rem;
  color: #6c757d;
}
@keyframes pulse {
  0%, 100% { box-shadow: 0 4px 18px rgba(13,202,240,0.09);}
  50% { box-shadow: 0 12px 36px rgba(59,130,246,0.13);}
}
@media (max-width: 991px) {
  .glass-gradient { padding: 1.2rem 0.7rem 1.1rem 0.7rem; }
  .modern-client-header { font-size: 1.08rem; }
  .modern-client-icon { font-size: 1.4rem; padding: 0.25rem 0.5rem; }
  .client-badge { font-size: 0.93rem; padding: 0.36rem 0.7rem 0.32rem 0.7rem;}
}
@media (max-width: 767px) {
  .glass-gradient { padding: 0.7rem 0.3rem; border-radius: 1rem; }
  .modern-client-header { font-size: 1rem; }
  .client-badge { font-size: 0.87rem; padding: 0.28rem 0.55rem 0.24rem 0.55rem;}
}


</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ once: true, duration: 800 });

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });
});

</script>
@endpush
