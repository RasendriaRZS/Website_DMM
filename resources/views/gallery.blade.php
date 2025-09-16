@extends('layouts.app')
@section('title', 'Gallery | DMM')
@section('content')

{{-- HERO SECTION --}}
<section class="gallery-hero-wall position-relative d-flex align-items-center justify-content-center overflow-hidden">
  <div class="gallery-hero-wall-bg" style="background-image:url('{{ asset('images/gallery/Photos Tambang.jpg') }}');"></div>
  <div class="gallery-hero-wall-overlay"></div>
  <div class="container text-center text-white position-relative z-2 py-5">
    <h1 class="display-3 fw-bold mb-3 animate__animated animate__fadeInDown floating-title">
      <span class="gallery-hero-wall-gradient">Gallery</span>
    </h1>
    <p class="lead mb-4 animate__animated animate__fadeInUp animate__delay-1s">
      <span class="fw-semibold">See our operations, people, and progress in action.</span>
    </p>
    <a href="#main-gallery" class="btn btn-gallery-cta px-4 py-2 rounded-pill shadow animate__animated animate__fadeInUp animate__delay-2s">
      <i class="bi bi-images me-2"></i> View All Photos
    </a>
    <div class="gallery-hero-quote mt-4 animate__animated animate__fadeInUp animate__delay-3s">
      <i class="bi bi-quote"></i>
      <span>“Every picture tells the story of our journey.”</span>
    </div>
  </div>
</section>

{{-- PHOTO WALL GRID --}}
<section id="main-gallery" class="gallery-wall-section py-5">
  <div class="container-fluid px-lg-5">
    <div class="gallery-wall-grid">
      @foreach([
        ['img' => 'alat_berat.jpg', 'caption' => 'Alat Berat', 'size' => 'tall', 'cat' => 'Mining'],
        ['img' => 'ambbil_sample3.jpg', 'caption' => 'Ambil Sample', 'size' => 'wide', 'cat' => 'Quality'],
        ['img' => 'ambil_sample.jpg', 'caption' => 'Sampling', 'size' => '', 'cat' => 'Quality'],
        ['img' => 'Photos Tambang.jpg', 'caption' => 'Mining Site', 'size' => 'big', 'cat' => 'Mining'],
        ['img' => 'ambil_sample2.jpg', 'caption' => 'Quality Check', 'size' => '', 'cat' => 'Quality'],
        ['img' => 'Stockpile and Jetty.jpg', 'caption' => 'Stockpile & Jetty', 'size' => 'wide', 'cat' => 'Logistics'],
        ['img' => 'Stockpile and Jetty2.jpg', 'caption' => 'Jetty Operations', 'size' => '', 'cat' => 'Logistics'],
        ['img' => 'tambang1.jpg', 'caption' => 'Coal Hauling', 'size' => 'tall', 'cat' => 'Mining'],
      ] as $i => $item)
      <div class="gallery-wall-item {{ $item['size'] }} animate__animated animate__zoomIn" data-aos="fade-up" data-aos-delay="{{ 100 + $i*80 }}">
        <a href="{{ asset('images/gallery/'.$item['img']) }}" data-fslightbox="gallery" class="gallery-wall-link">
          <img src="{{ asset('images/gallery/'.$item['img']) }}" alt="{{ $item['caption'] }}" class="gallery-wall-img">
          <div class="gallery-wall-overlay-info">
            <div>
              <span class="gallery-wall-cat">{{ $item['cat'] }}</span>
              <span class="gallery-wall-caption"><i class="bi bi-eye"></i> {{ $item['caption'] }}</span>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fslightbox/index.css">
<style>
.gallery-hero-wall {
  min-height: 100vh;
  background: #1a2a3a;
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}
.gallery-hero-wall-bg {
  position: absolute;
  top: 0; left: 0; width: 100%; height: 100%;
  background-size: cover;
  background-position: center;
  filter: blur(8px) brightness(0.6);
  z-index: 1;
  animation: heroWallBgMove 16s ease-in-out infinite alternate;
}
@keyframes heroWallBgMove {
  0% { background-position: 60% 30%; }
  100% { background-position: 40% 60%; }
}
.gallery-hero-wall-overlay {
  position: absolute;
  top: 0; left: 0; width: 100%; height: 100%;
  background: rgba(30,41,59,0.38);
  backdrop-filter: blur(2.5px);
  z-index: 2;
  border-bottom: 2.5px solid #0dcaf0;
}
.gallery-hero-wall-gradient {
  background: linear-gradient(90deg, #0dcaf0 0%, #3b82f6 80%, #2563eb 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  text-fill-color: transparent;
  display: inline-block;
  animation: floating 4.5s ease-in-out infinite alternate;
}
.floating-title { animation: floating 4.5s ease-in-out infinite alternate; }
@keyframes floating {
  0% { transform: translateY(0);}
  100% { transform: translateY(-8px);}
}
.btn-gallery-cta {
  background: rgba(13,202,240,0.15);
  border: none;
  color: #fff;
  font-weight: 700;
  font-size: 1.15rem;
  box-shadow: 0 2px 10px rgba(13,202,240,0.09);
  transition: background 0.18s, color 0.18s, transform 0.18s;
  border-radius: 50px;
  border: 2px solid transparent;
  /* border-image: linear-gradient(90deg, #0dcaf0 0%, #3b82f6 100%); */
  border-image-slice: 1;
  padding: 0.75rem 2.2rem;
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  cursor: pointer;
  user-select: none;
  position: relative;
  overflow: hidden;
}
.btn-gallery-cta:hover {
  background: linear-gradient(90deg,#0dcaf0 0%,#3b82f6 100%);
  color: #fff;
  box-shadow: 0 8px 32px rgba(13,202,240,0.23);
  transform: scale(1.05);
}
.gallery-hero-quote {
  font-size: 1.09rem;
  color: #e0f7fa;
  opacity: 0.88;
  font-style: italic;
  letter-spacing: 0.01em;
  margin-top: 1.8rem;
}
.gallery-hero-quote i {
  color: #3b82f6;
  margin-right: 0.5rem;
}
@media (max-width: 767px) {
  .gallery-hero-wall { min-height: 25vh; }
  .display-3 { font-size: 1.3rem; }
  .btn-gallery-cta { font-size: 1rem; padding: 0.5rem 1.3rem;}
}

.gallery-wall-section { background: #f8fafc; }
.gallery-wall-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(230px,1fr));
  grid-auto-flow: dense;
  gap: 1.7rem;
}
.gallery-wall-item {
  position: relative;
  overflow: hidden;
  border-radius: 1.2rem;
  box-shadow: 0 2px 12px rgba(13,202,240,0.10);
  transition: box-shadow 0.18s, transform 0.18s;
  background: #fff;
  aspect-ratio: 4/3;
  display: flex;
  align-items: stretch;
  justify-content: stretch;
}
.gallery-wall-item.tall { grid-row: span 2; aspect-ratio: 3/5; }
.gallery-wall-item.wide { grid-column: span 2; aspect-ratio: 2/1; }
.gallery-wall-item.big { grid-column: span 2; grid-row: span 2; aspect-ratio: 2/1.2; }
.gallery-wall-img {
  width: 100%; height: 100%;
  object-fit: cover;
  transition: transform 0.22s;
  border-radius: 1.2rem;
}
.gallery-wall-item:hover {
  box-shadow: 0 12px 36px rgba(59,130,246,0.13);
  transform: scale(1.03) translateY(-2px);
  z-index: 2;
}
.gallery-wall-item:hover .gallery-wall-img {
  filter: brightness(0.82) blur(1.5px);
  transform: scale(1.09) rotate(-2deg);
}
.gallery-wall-overlay-info {
  position: absolute;
  inset: 0;
  background: linear-gradient(120deg,rgba(30,41,59,0.82) 70%,rgba(30,41,59,0.05) 100%);
  color: #fff;
  opacity: 0;
  display: flex;
  align-items: flex-end;
  justify-content: flex-start;
  padding: 1.2rem 1.1rem;
  font-size: 1.08rem;
  font-weight: 600;
  border-radius: 1.2rem;
  transition: opacity 0.22s;
  pointer-events: none;
}
.gallery-wall-item:hover .gallery-wall-overlay-info {
  opacity: 1;
  pointer-events: auto;
}
.gallery-wall-cat {
  background: #0dcaf0;
  color: #fff;
  font-size: 0.82em;
  font-weight: 700;
  border-radius: 0.8em;
  padding: 0.18em 0.7em 0.13em 0.7em;
  margin-right: 0.7em;
  letter-spacing: 0.01em;
  opacity: 0.85;
  display: inline-block;
}
.gallery-wall-caption {
  display: inline-flex;
  align-items: center;
  gap: 0.4em;
}
.gallery-wall-overlay-info i {
  font-size: 1.15em;
  margin-right: 0.4em;
  color: #0dcaf0;
}
.gallery-wall-link {
  display: block;
  width: 100%; height: 100%;
  text-decoration: none;
  color: inherit;
}
@media (max-width: 991px) {
  .gallery-wall-grid { gap: 0.7rem;}
  .gallery-wall-item,
  .gallery-wall-item.tall,
  .gallery-wall-item.wide,
  .gallery-wall-item.big { aspect-ratio: 4/3; grid-column: span 1 !important; grid-row: span 1 !important;}
}
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fslightbox/index.js"></script>
<script>
  AOS.init({ once: true, duration: 800 });
  // Optional: smooth scroll for CTA
  document.querySelectorAll('a[href^="#main-gallery"]').forEach(anchor => {
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
