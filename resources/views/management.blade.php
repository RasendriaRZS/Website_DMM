@extends('layouts.app')
@section('title', 'Management Structure | DMM')
@section('content')

<!-- HERO SECTION -->
<section class="management-hero position-relative overflow-hidden py-5 mb-5">
  <div class="container text-center text-white position-relative z-2">
    <h1 class="display-4 fw-bold mb-3 animate__animated animate__fadeInDown">Management Structure</h1>
    <p class="lead mb-0 animate__animated animate__fadeInUp animate__delay-1s">
      Strong, experienced, and collaborative leadership guiding DMM’s integrated mining and energy business.
    </p>
  </div>
</section>

<!-- ORGANIZATIONAL CHART -->
<section class="management-orgchart py-3">
  <div class="container">
    <div class="orgchart-wrapper mx-auto">
      <!-- Top Level -->
      <div class="orgchart-row">
        <div class="orgchart-node">
          <div class="orgchart-card orgchart-top animate__animated animate__fadeInDown">
            <div class="orgchart-role">President Commissioner</div>
            <div class="orgchart-name">Aditya</div>
          </div>
        </div>
      </div>
      <!-- Second Level -->
      <div class="orgchart-row">
        <div class="orgchart-node">
          <div class="orgchart-card animate__animated animate__fadeInDown animate__delay-1s">
            <div class="orgchart-role">Commissioner</div>
            <div class="orgchart-name">Fadli ST</div>
          </div>
        </div>
        <div class="orgchart-node">
          <div class="orgchart-card animate__animated animate__fadeInDown animate__delay-1s">
            <div class="orgchart-role">President Director</div>
            <div class="orgchart-name">Arifin Aras</div>
          </div>
        </div>
      </div>
      <!-- Third Level -->
      <div class="orgchart-row">
        <div class="orgchart-node">
          <div class="orgchart-card animate__animated animate__fadeInUp animate__delay-2s">
            <div class="orgchart-role">Director</div>
            <div class="orgchart-name">Nina Tiyanti Dewi</div>
          </div>
        </div>
        <div class="orgchart-node">
          <div class="orgchart-card animate__animated animate__fadeInUp animate__delay-2s">
            <div class="orgchart-role">Senior Business Development Advisor</div>
            <div class="orgchart-name">Denny Martinus</div>
          </div>
        </div>
      </div>
      <!-- Fourth Level -->
      <div class="orgchart-row">
        <div class="orgchart-node">
          <div class="orgchart-card animate__animated animate__fadeInUp animate__delay-3s">
            <div class="orgchart-role">Chief of Field & Technical Quality</div>
            <div class="orgchart-name">Nuryasin</div>
          </div>
        </div>
        <div class="orgchart-node">
          <div class="orgchart-card animate__animated animate__fadeInUp animate__delay-3s">
            <div class="orgchart-role">Head of Geologist</div>
            <div class="orgchart-name">Ir. Rinaldi Mansoer</div>
          </div>
        </div>
        <div class="orgchart-node">
          <div class="orgchart-card animate__animated animate__fadeInUp animate__delay-3s">
            <div class="orgchart-role">Head of Technical Administrative</div>
            <div class="orgchart-name">Allan Mandey</div>
          </div>
        </div>
      </div>
      <!-- SVG Lines for Chart -->
      <svg class="orgchart-svg" width="100%" height="360" viewBox="0 0 900 360">
        <!-- Top to Second Level -->
        <line x1="450" y1="50" x2="250" y2="110" class="orgchart-line"/>
        <line x1="450" y1="50" x2="650" y2="110" class="orgchart-line"/>
        <!-- Second to Third Level -->
        <line x1="250" y1="150" x2="250" y2="210" class="orgchart-line"/>
        <line x1="650" y1="150" x2="650" y2="210" class="orgchart-line"/>
        <!-- Third to Fourth Level -->
        <line x1="250" y1="250" x2="150" y2="310" class="orgchart-line"/>
        <line x1="250" y1="250" x2="350" y2="310" class="orgchart-line"/>
        <line x1="650" y1="250" x2="550" y2="310" class="orgchart-line"/>
        <line x1="650" y1="250" x2="750" y2="310" class="orgchart-line"/>
      </svg>
    </div>
  </div>
</section>

<!-- TEAM GALLERY -->
<section class="management-team-gallery py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5 text-gradient-business animate__animated animate__fadeInUp">Meet the Team</h2>
    <div class="row g-4 justify-content-center">
      @foreach([
        ['name' => 'Aditya', 'role' => 'President Commissioner', 'img' => 'aditya.jpg'],
        ['name' => 'Fadli ST', 'role' => 'Commissioner', 'img' => 'fadli.jpg'],
        ['name' => 'Arifin Aras', 'role' => 'President Director', 'img' => 'arifin.jpg'],
        ['name' => 'Nina Tiyanti Dewi', 'role' => 'Director', 'img' => 'nina.jpg'],
        ['name' => 'Denny Martinus', 'role' => 'Senior Business Development Advisor', 'img' => 'denny.jpg'],
        ['name' => 'Nuryasin', 'role' => 'Chief of Field & Technical Quality', 'img' => 'nuryasin.jpg'],
        ['name' => 'Ir. Rinaldi Mansoer', 'role' => 'Head of Geologist', 'img' => 'rinaldi.jpg'],
        ['name' => 'Allan Mandey', 'role' => 'Head of Technical Administrative', 'img' => 'allan.jpg'],
      ] as $member)
      <div class="col-6 col-md-3 d-flex">
        <div class="team-card flex-fill text-center animate__animated animate__fadeInUp" data-aos="zoom-in">
          <img src="{{ asset('images/management/' . $member['img']) }}" class="team-img mb-3" alt="{{ $member['name'] }}">
          <div class="team-name fw-bold">{{ $member['name'] }}</div>
          <div class="team-role small text-secondary">{{ $member['role'] }}</div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- COMPANY VALUES -->
<section class="management-values py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-4 text-gradient-business animate__animated animate__fadeInUp">Our Core Values</h2>
    <div class="row g-4 justify-content-center">
      @foreach([
        ['icon' => 'bi-lightning-charge-fill', 'title' => 'Tenacity', 'desc' => 'Perseverance and determination in all endeavors.'],
        ['icon' => 'bi-lightbulb', 'title' => 'Initiative', 'desc' => 'Proactive in seizing opportunities and solving challenges.'],
        ['icon' => 'bi-award', 'title' => 'Excellence', 'desc' => 'Highest standards in quality and professionalism.'],
        ['icon' => 'bi-person-badge', 'title' => 'Depth of Character', 'desc' => 'Integrity, honesty, and strong moral principles.'],
        ['icon' => 'bi-graph-up-arrow', 'title' => 'Diligence', 'desc' => 'Consistent hard work and attention to detail.'],
      ] as $value)
      <div class="col-6 col-md-2 text-center" data-aos="zoom-in">
        <i class="bi {{ $value['icon'] }} text-primary fs-1 mb-3"></i>
        <h5 class="fw-bold">{{ $value['title'] }}</h5>
        <p class="text-muted small">{{ $value['desc'] }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- EMBEDDED CSS -->
<style>
.management-hero {
  background: linear-gradient(120deg, #0f2027 0%, #2c5364 100%);
  color: #fff;
}
.orgchart-wrapper {
  max-width: 900px;
  margin: 0 auto 2.5rem auto;
  position: relative;
  min-height: 370px;
}
.orgchart-row {
  display: flex;
  justify-content: center;
  gap: 2.5rem;
  margin: 1.8rem 0 0 0;
  position: relative;
  z-index: 2;
}
.orgchart-node {
  flex: 1 1 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  min-width: 180px;
}
.orgchart-card {
  background: #fff;
  border-radius: 1.2rem;
  box-shadow: 0 4px 18px rgba(13,202,240,0.09);
  padding: 1.1rem 1.3rem;
  min-width: 160px;
  min-height: 90px;
  text-align: center;
  margin-bottom: 0.5rem;
  border: 2px solid #e0f7fa;
  transition: box-shadow 0.18s, transform 0.18s;
  position: relative;
  z-index: 2;
  cursor: pointer;
  animation: pulse 3s infinite;
}
.orgchart-top {
  background: linear-gradient(90deg, #0dcaf0 0%, #3b82f6 100%);
  color: #fff;
  border: 2.5px solid #0dcaf0;
}
.orgchart-card:hover {
  box-shadow: 0 8px 32px rgba(13,202,240,0.16);
  transform: scale(1.04);
  border-color: #0dcaf0;
}
@keyframes pulse {
  0%, 100% { box-shadow: 0 4px 18px rgba(13,202,240,0.09);}
  50% { box-shadow: 0 12px 36px rgba(59,130,246,0.13);}
}
.orgchart-role {
  font-size: 1.08rem;
  font-weight: 700;
  color: #0dcaf0;
  margin-bottom: 0.2rem;
}
.orgchart-top .orgchart-role { color: #fff; }
.orgchart-name {
  font-size: 1.1rem;
  color: #223;
  font-weight: 600;
}
.orgchart-top .orgchart-name { color: #fff; }
.orgchart-svg {
  position: absolute;
  left: 0; top: 0; width: 100%; height: 360px; z-index: 1;
  pointer-events: none;
}
.orgchart-line {
  stroke: #0dcaf0;
  stroke-width: 4;
  opacity: 0.42;
  stroke-dasharray: 400;
  stroke-dashoffset: 400;
  animation: orgchart-line-draw 1.2s cubic-bezier(.4,2,.6,1) forwards;
}
@keyframes orgchart-line-draw {
  to { stroke-dashoffset: 0; }
}

.orgchart-svg,
.orgchart-line {
    display: none !important;
}


.management-team-gallery {
  background: #f8fafc;
}
.team-card {
  background: #fff;
  border-radius: 1.1rem;
  box-shadow: 0 2px 12px rgba(13,202,240,0.08);
  padding: 1.2rem 0.8rem 1rem 0.8rem;
  min-height: 210px;
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: box-shadow 0.18s, transform 0.18s;
  cursor: pointer;
  border: 1.5px solid #e5eaf2;
}
.team-card:hover {
  box-shadow: 0 8px 32px rgba(13,202,240,0.14);
  transform: translateY(-4px) scale(1.04);
  border-color: #0dcaf0;
}
.team-img {
  width: 74px; height: 74px;
  object-fit: cover;
  border-radius: 50%;
  margin-bottom: 0.7rem;
  border: 2.5px solid #0dcaf0;
  background: #eaf6fb;
}
.team-name {
  font-size: 1.09rem;
  color: #223;
  font-weight: 700;
}
.team-role {
  font-size: 0.95rem;
  color: #1780b8;
  margin-top: 0.2rem;
}
.management-values {
  background: linear-gradient(120deg, #f8fafc 0%, #eaf6fb 100%);
}
.text-gradient-business {
  background: linear-gradient(90deg, #0dcaf0 0%, #3b82f6 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  text-fill-color: transparent;
  font-weight: 800;
}
@media (max-width: 991px) {
  .orgchart-wrapper { max-width: 99vw; }
  .orgchart-card { min-width: 120px; }
  .team-card { padding: 0.6rem 0.2rem 0.5rem 0.2rem; min-height: 150px;}
  .team-img { width: 54px; height: 54px;}
  .orgchart-svg { height: 220px; }
}
@media (max-width: 767px) {
  .orgchart-row { flex-direction: column; gap: 1.2rem; margin: 1.1rem 0 0 0;}
  .orgchart-card { min-width: 90px; padding: 0.7rem 0.3rem;}
  .team-card { min-width: 90px; min-height: 110px; }
  .orgchart-svg { height: 120px; }
}
</style>
@endsection
