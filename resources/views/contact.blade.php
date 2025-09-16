@extends('layouts.app')
@section('title', 'Contact Us | DMM')
@section('content')

{{-- CONTACT HERO --}}
    {{-- <section class="contact-hero position-relative d-flex align-items-center justify-content-center overflow-hidden">
    <div class="contact-hero-bg"></div>
    <div class="contact-hero-overlay"></div>
    <div class="container text-center text-white position-relative z-2 py-5">
        <h1 class="display-4 fw-bold mb-2 animate__animated animate__fadeInDown">
        <span class="contact-hero-gradient-text">Contact Us</span>
        </h1>
        <p class="lead mb-0 animate__animated animate__fadeInUp animate__delay-1s">
        <span class="fw-semibold">We are here to assist you.<br>Reach out to us via WhatsApp, Email, or Outlook.</span>
        </p>
    </div>
    </section> --}}

{{-- CONTACT CARDS --}}
<section class="contact-section position-relative py-5 d-flex align-items-center min-vh-100" style="background: linear-gradient(120deg, #f0f9ff 0%, #e0f2fe 100%);">
  <div class="container">
    <div class="row justify-content-center g-4">
      <div class="col-md-4">
        <a href="https://wa.me/6281310406494?text=Hello%20DMM%20Team%2C%20I%20am%20interested%20in%20learning%20more%20about%20your%20coal%20mining%20and%20logistics%20services.%20Could%20you%20please%20provide%20more%20information%20or%20arrange%20a%20call%3F%20Thank%20you." target="_blank" class="contact-card-link">
  <div class="contact-card glass-gradient shadow-sm p-4 text-center animate__animated animate__fadeInLeft">
    <div class="contact-icon mb-3">
      <i class="bi bi-whatsapp"></i>
    </div>
    <h3 class="mb-2">WhatsApp</h3>
    <div class="contact-link">+62 813 1040 6494</div>
  </div>
</a>

      </div>
      <div class="col-md-4">
        <a href="mailto:dhirghammurnimandiri@outlook.com?subject=Contact%20DMM" class="contact-card-link">
          <div class="contact-card glass-gradient shadow-sm p-4 text-center animate__animated animate__fadeInUp">
            <div class="contact-icon mb-3">
              <i class="bi bi-envelope-fill"></i>
            </div>
            <h3 class="mb-2">Email</h3>
            <div class="contact-link">dhirghammurnimandiri@outlook.com</div>
          </div>
        </a>
      </div>
      <div class="col-md-4">
  <a href="https://outlook.live.com/mail/0/deeplink/compose?to=arifin.aras@outlook.co.id&subject=Contact%20DMM" target="_blank" class="contact-card-link">
    <div class="contact-card glass-gradient shadow-sm p-4 text-center animate__animated animate__fadeInRight">
      <div class="contact-icon mb-3">
        <i class="bi bi-microsoft"></i>
      </div>
      <h3 class="mb-2">Outlook</h3>
      <div class="contact-link">arifin.aras@outlook.co.id</div>
    </div>
  </a>
</div>

    </div>
  </div>
</section>

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css">
<style>
/* Navbar sticky & modern (if not already in your layout) */
.navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1050;
  background: rgba(30,41,59,0.98);
  box-shadow: 0 2px 12px rgba(13,202,240,0.07);
  transition: background 0.18s;
}
body {
  padding-top: 70px; /* atau sesuai tinggi navbar Anda */
}

.contact-section {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(120deg, #f0f9ff 0%, #e0f2fe 100%);
}
.contact-card-link {
  text-decoration: none;
  display: block;
  height: 100%;
  transition: transform 0.14s;
}
.contact-card-link:focus .contact-card,
.contact-card-link:hover .contact-card {
  box-shadow: 0 16px 48px rgba(59,130,246,0.16), 0 2px 8px rgba(13,202,240,0.13);
  background: rgba(13,202,240,0.07);
  transform: translateY(-6px) scale(1.025);
}
.contact-card {
  background: rgba(255,255,255,0.18);
  border-radius: 1.5rem;
  box-shadow: 0 8px 32px rgba(13,202,240,0.12), 0 2px 8px rgba(13,202,240,0.08);
  backdrop-filter: blur(6px);
  border: 2.5px solid transparent;
  border-image: linear-gradient(90deg, #0dcaf0 0%, #3b82f6 100%);
  border-image-slice: 1;
  cursor: pointer;
  transition: box-shadow 0.22s, transform 0.22s, border 0.22s, background 0.22s;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.contact-icon {
  font-size: 3.5rem;
  color: #0dcaf0;
  transition: color 0.3s;
  animation: pulse 2.5s infinite;
}
@keyframes pulse {
  0%, 100% { color: #0dcaf0;}
  50% { color: #3b82f6;}
}
.contact-card-link:hover .contact-icon {
  color: #3b82f6;
}
.contact-link {
  font-size: 1.15rem;
  color: #1780b8;
  font-weight: 600;
  letter-spacing: 0.01em;
  margin-top: 0.4rem;
}
@media (max-width: 767px) {
  .contact-section {
    min-height: 60vh;
    padding: 2rem 1rem;
  }
  .contact-icon {
    font-size: 2.2rem;
  }
  .contact-link {
    font-size: 1rem;
  }
}

</style>
@endpush

@push('scripts')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css">
@endpush
