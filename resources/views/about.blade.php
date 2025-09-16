@extends('layouts.app')
@section('title', 'About Us | DMM')
@section('content')

{{-- HERO SECTION --}}
<section class="about-hero-modern position-relative">
  <div class="about-hero-img-wrap">
    <img src="{{ asset('images/management/contoh.jpeg') }}" class="about-hero-img" alt="DMM Team">
    <div class="about-hero-gradient"></div>
    <div class="about-hero-content container">
      <h1 class="about-hero-title animate__animated animate__fadeInDown">About PT Dhirgham Murni Mandiri</h1>
      <p class="about-hero-lead animate__animated animate__fadeInUp animate__delay-1s">
        We, DMM, empower business people to grow
collaborative thinking to drive innovation further in
the workplace. DMM is formed with a team that
has the same Vision and Mission and TRUST,
Goodwill, and quality synergy, undergoing a good,
systematic, and structured process to achieve a
better future and benefit all elements, with the
experience they have, especially in the field of
natural resource processing and distribution to end
users, such as power plants, cement factories,
fertilizer factories and several users who make coal
one of the cheaper and more affordable fuels, for
domestic and international interests.
MARCH 2025 PITC.
      </p>
      
    </div>
  </div>
</section>


{{-- TIMELINE STORYTELLING --}}
<section class="about-timeline-section py-5">
  <div class="container">
    <h3 class="about-section-title text-center mb-5 animate__animated animate__fadeInUp">Our Journey</h3>
    <div class="about-timeline">
      <div class="about-timeline-item" data-aos="fade-right">
        <div class="about-timeline-dot"></div>
        <div>
          <div class="about-timeline-year">2015</div>
          <div class="about-timeline-desc">DMM was founded in West Java, pioneering integrated coal mining and trading.</div>
        </div>
      </div>
      <div class="about-timeline-item" data-aos="fade-left">
        <div class="about-timeline-dot"></div>
        <div>
          <div class="about-timeline-year">2017</div>
          <div class="about-timeline-desc">Expansion to Sumatra & Kalimantan; integrated logistics and private jetty infrastructure.</div>
        </div>
      </div>
      <div class="about-timeline-item" data-aos="fade-right">
        <div class="about-timeline-dot"></div>
        <div>
          <div class="about-timeline-year">2020</div>
          <div class="about-timeline-desc">Diversified into coking coal and minerals, strengthened local & global partnerships.</div>
        </div>
      </div>
      <div class="about-timeline-item" data-aos="fade-left">
        <div class="about-timeline-dot"></div>
        <div>
          <div class="about-timeline-year">2024</div>
          <div class="about-timeline-desc">DMM solidifies its position as a leading integrated mining and trading company in Indonesia and Asia-Pacific.</div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- MODERN BENTO GRID --}}
<section class="about-bento-section py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-12 col-md-4" data-aos="zoom-in">
        <div class="about-bento-card about-bento-blue">
          <i class="bi bi-award"></i>
          <div class="about-bento-title">Core Values</div>
          <div class="about-bento-desc">Tenacity, Initiative, Excellence, Depth of Character, Diligence</div>
        </div>
      </div>
      <div class="col-6 col-md-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="about-bento-card about-bento-gradient">
          <i class="bi bi-lightning-charge-fill"></i>
          <div class="about-bento-title">Competitive Edge</div>
          <ul class="about-bento-list">
            <li>Integrated value chain</li>
            <li>Strategic locations</li>
            <li>Modern infrastructure</li>
            <li>Expert team</li>
            <li>Sustainability</li>
          </ul>
        </div>
      </div>
      <div class="col-6 col-md-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="about-bento-card about-bento-yellow">
          <i class="bi bi-box-seam"></i>
          <div class="about-bento-title">Key Commodities</div>
          <div class="about-bento-desc">Thermal Coal, Coking Coal, Minerals</div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- CTA --}}
<section class="about-contact-banner about-cta-gradient text-white py-5" data-aos="zoom-in" data-aos-delay="600">
  <div class="container-cta">
    <div class="cta-content">
      <h2 class="cta-title animate__animated animate__fadeInDown">Ready to Collaborate?</h2>
      <p class="cta-desc animate__animated animate__fadeInUp animate__delay-1s">
        Contact our team for partnership, inquiries, or business opportunities.
      </p>
      <a href="/contact" class="btn-cta animate__animated animate__pulse animate__infinite">
        <i class="bi bi-send me-2"></i>Contact Us
      </a>
    </div>
  </div>
</section>


@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
<style>
body {
  background: #f8fafc !important;
  color: #223;
}
.about-hero-modern {
  min-height: 520px;
  position: relative;
  background: #f8fafc;
}
.about-hero-img-wrap {
  position: relative;
  min-height: 420px;
  overflow: hidden;
}
.about-hero-img {
  width: 100%;
  min-height: 380px;
  max-height: 520px;
  object-fit: cover;
  filter: brightness(0.3) contrast(1.13);
  border-bottom-left-radius: 2.5rem;
  border-bottom-right-radius: 2.5rem;
}
.about-hero-gradient {
  position: absolute;
  top: 0; left: 0; width: 100%; height: 100%;
  background: linear-gradient(120deg,rgba(13,202,240,0.17) 0%,rgba(59,130,246,0.13) 60%,rgba(255,255,255,0.74) 100%);
  z-index: 1;
  border-bottom-left-radius: 2.5rem;
  border-bottom-right-radius: 2.5rem;
  pointer-events: none;
}
.about-hero-content {
  position: absolute;
  left: 0; right: 0; top: 0; bottom: 0;
  z-index: 2;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  padding-left: 2.5rem;
  padding-right: 2.5rem;
  color: #223;
}
.about-hero-title {
  font-size: 2.8rem;
  font-weight: 900;
  background: linear-gradient(90deg, #0dcaf0 0%, #3b82f6 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  text-fill-color: transparent;
  letter-spacing: 0.01em;
}
.about-hero-lead {
  font-size: 1.25rem;
  font-weight: 500;
  color: white;
  margin-bottom: 1.7rem;
  line-height: 1.55;
  text-shadow: 0 2px 24px rgba(13,202,240,0.13);
}
.about-badge-gradient {
  background: linear-gradient(90deg,#0dcaf0 0%,#3b82f6 100%);
  color: #fff !important;
  font-weight: 600;
  border: none;
  box-shadow: 0 2px 10px rgba(13,202,240,0.13);
  letter-spacing: 0.02em;
  font-size: 1.08rem;
  border-radius: 1.2rem;
  padding: 0.5rem 1.3rem;
}
.about-hero-value {
  font-size: 1.07rem;
  color: white;
  background: rgba(0, 213, 255, 0.09);
  border-radius: 0.7rem;
  padding: 0.5rem 1.1rem;
  font-weight: 500;
  margin-left: 0.8rem;
}
.about-hero-badges { margin-bottom: 0.6rem; }

.about-section-title {
  font-size: 2.1rem;
  font-weight: 800;
  letter-spacing: 0.01em;
  color: #1780b8;
}

.about-timeline {
  position: relative;
  margin: 0 auto;
  max-width: 700px;
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}
.about-timeline-item {
  display: flex;
  align-items: flex-start;
  margin-bottom: 2.2rem;
  position: relative;
}
.about-timeline-dot {
  width: 18px; height: 18px;
  background: linear-gradient(135deg,#0dcaf0 0%,#3b82f6 100%);
  border-radius: 50%;
  margin-right: 1.2rem;
  margin-top: 0.3rem;
  box-shadow: 0 2px 8px rgba(13,202,240,0.13);
  border: 3px solid #fff;
}
.about-timeline-year {
  font-size: 1.18rem;
  font-weight: 700;
  color: #0dcaf0;
}
.about-timeline-desc {
  font-size: 1.07rem;
  color: #223;
  margin-bottom: 0.2rem;
}
.about-timeline:before {
  content: "";
  position: absolute;
  left: 8px;
  top: 18px;
  width: 2.5px;
  height: calc(100% - 18px);
  background: linear-gradient(180deg,#0dcaf0 0%,#e0f7fa 100%);
  z-index: 0;
}

.about-bento-section {
  background: linear-gradient(180deg, #f8fafc 0%, #eaf6fb 100%);
}
.about-bento-card {
  border-radius: 1.4rem;
  box-shadow: 0 4px 24px rgba(13,202,240,0.08);
  border: 1.5px solid #e5eaf2;
  padding: 2.1rem 1.3rem 1.4rem 1.3rem;
  min-height: 220px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  transition: box-shadow 0.18s, transform 0.18s, background 0.18s;
  font-size: 1.07rem;
  position: relative;
  overflow: hidden;
}
.about-bento-card:hover {
  box-shadow: 0 12px 36px rgba(59,130,246,0.13), 0 2px 8px rgba(13,202,240,0.10);
  transform: translateY(-6px) scale(1.025);
  z-index: 2;
}
.about-bento-blue {
  background: linear-gradient(120deg, #e0f7fa 0%, #b6eaff 100%);
  color: #223;
}
.about-bento-gradient {
  background: linear-gradient(120deg, #e0f7fa 0%, #3b82f6 100%);
  color: #fff;
}
.about-bento-yellow {
  background: linear-gradient(120deg, #fffbe6 0%, #ffe08a 100%);
  color: #223;
}
.about-bento-card i {
  font-size: 2.5rem;
  margin-bottom: 1.1rem;
  color: #0dcaf0;
}
.about-bento-title {
  font-weight: 700;
  font-size: 1.18rem;
  margin-bottom: 0.3rem;
  color: #1780b8;
}
.about-bento-desc {
  color: #223;
}
.about-bento-list {
  padding-left: 1.2rem;
  margin-bottom: 0;
  color: #223;
  font-size: 1.03rem;
}

.about-cta-gradient {
  background: linear-gradient(90deg, #1cb5e0 0%, #209cff 60%, #68e0cf 100%);
  border-radius: 10rem;
  margin-bottom: 0;
  box-shadow: 0 6px 32px rgba(32,156,255,0.08);
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 330px;
  position: relative;
  overflow: hidden;
}
.container-cta {
  max-width: 660px;
  margin: 0 auto;
  padding: 0 1.5rem;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.cta-content {
  width: 100%;
  text-align: center;
  padding: 2rem 0;
}
.cta-title {
  font-size: 2.5rem;
  font-weight: 800;
  margin-bottom: 1.1rem;
  letter-spacing: 0.01em;
  color: #fff;
  text-shadow: 0 2px 18px rgba(32,156,255,0.11);
}
.cta-desc {
  font-size: 1.15rem;
  color: #eaf6fb;
  margin-bottom: 2.1rem;
  font-weight: 500;
  line-height: 1.6;
}
.btn-cta {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  background: #fff;
  color: #209cff;
  font-size: 1.18rem;
  font-weight: 700;
  border: none;
  border-radius: 2rem;
  padding: 0.85rem 2.5rem;
  box-shadow: 0 2px 12px rgba(32,156,255,0.12);
  transition: background 0.18s, color 0.18s, transform 0.18s, box-shadow 0.18s;
  cursor: pointer;
  outline: none;
  letter-spacing: 0.01em;
  text-decoration: none;
}
.btn-cta:hover, .btn-cta:focus {
  background: #209cff;
  color: #fff;
  transform: translateY(-2px) scale(1.04);
  box-shadow: 0 8px 32px rgba(32,156,255,0.16);
}
.btn-cta i {
  font-size: 1.2em;
}
@media (max-width: 767px) {
  .about-cta-gradient { border-radius: 1rem; min-height: 220px; }
  .cta-title { font-size: 1.5rem; }
  .cta-content { padding: 1.1rem 0; }
  .btn-cta { font-size: 1rem; padding: 0.7rem 1.5rem; }
}

@media (max-width: 991px) {
  .about-hero-title { font-size: 2rem; }
  .about-bento-card { padding: 1.2rem 0.7rem 1.1rem 0.7rem; min-height: 120px; }
  .about-bento-card i { font-size: 1.5rem; }
}
@media (max-width: 767px) {
  .about-hero-content { padding-left: 1rem; padding-right: 1rem; }
  .about-hero-img { min-height: 180px; border-radius: 1.1rem; }
  .about-bento-card { padding: 1rem 0.5rem 0.7rem 0.5rem; }
}
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ once: true, duration: 800 });
</script>
@endpush
