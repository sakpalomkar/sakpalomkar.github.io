<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Indusups – High Frequency Online UPS</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
  /* base reset – same as offline page */
  *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Montserrat', sans-serif;
  }
  body { overflow-x: hidden; }

  /* global section heading style – exactly as used in offline page (.indus-section-heading) */
  .section-heading {
    text-align: center;
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 70px;
    color: #1e2a78;
    letter-spacing: 1px;
  }
  .section-heading span {
    color: #f37021;
    position: relative;
    display: inline-block;
  }
  .section-heading span::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 4px;
    background: #f37021;
    bottom: -10px;
    left: 0;
    border-radius: 5px;
    animation: underline 2s infinite alternate;
  }
  @keyframes underline {
    from { width: 0; }
    to { width: 100%; }
  }

  /* fallback for any old h3 that might appear – but we will replace all headings with .section-heading */
  .battery, h3, h2 {
    /* ensure they don't break, but we'll override explicitly */
  }
</style>

</head>
<body>

<?php include('navbar.php'); ?>

<!-- ========== HERO SECTION (exact copy of offline .indus-hero-banner) ========== -->
<style>
.hf-hero-banner {
    position: relative;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    overflow: hidden;
    color: #fff;
}
.hf-hero-banner::before {
    content: "";
    position: absolute;
    inset: 0;
    background: url("img/about\ us.jpg") center/cover no-repeat;
    filter: brightness(0.55);
    transform: scale(1.1);
    animation: zoomEffect 10s ease-in-out infinite alternate;
}
.hf-hero-banner::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.24));
}
.hf-hero-content {
    position: relative;
    z-index: 2;
}
.hf-hero-content h1 {
    font-size: 40px;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 15px;
    animation: slideDown 1s ease forwards;
}
.hf-breadcrumb-nav {
    font-size: 18px;
    font-weight: 400;
    animation: fadeUp 1.2s ease forwards;
    margin-left: 0px;
}
.hf-breadcrumb-nav a {
    color: #fff;
    text-decoration: none;
    transition: 0.3s;
}
.hf-breadcrumb-nav a:hover { color: #ff5e00; }
.hf-breadcrumb-nav span {
    color: #ff5e00;
    font-weight: 600;
    margin-left: 5px;
}
@keyframes slideDown {
    from { opacity: 0; transform: translateY(-40px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes fadeUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes zoomEffect {
    from { transform: scale(1.1); }
    to { transform: scale(1); }
}
@media(max-width:768px){
    .hf-hero-content h1{ font-size: 36px; }
    .hf-breadcrumb-nav{ font-size: 15px; }
}
</style>
<section class="hf-hero-banner">
    <div class="hf-hero-content">
        <h1>High-Frequency Online UPS Manufacturer India</h1>
        <div class="hf-breadcrumb-nav">
            <a href="#">Home</a> &nbsp;»&nbsp; <a href="#">Products</a> &nbsp;»&nbsp; <span>High-Frequency Online UPS</span>
        </div>
    </div>
</section>
<!-- HERO END -->

<!-- ========== IMAGE SECTION ========== -->
<style>
.hf-product-showcase{
    width:100%; padding:40px 8%; text-align:center; position:relative; overflow:hidden;
}
.hf-product-showcase::before{
    content:""; position:absolute; width:100%; height:100%; top:0; left:0;
    animation: gradientMove 12s ease infinite; z-index:0;
}
@keyframes gradientMove{
    0%{background-position:0% 50%;} 50%{background-position:100% 50%;} 100%{background-position:0% 50%;}
}
.hf-image-container{
    position:relative; z-index:1; display:flex; justify-content:center; gap:30px; flex-wrap:wrap; margin-bottom:30px;
}
.hf-product-image{
    width:340px; cursor:pointer; border-radius:20px;
     transform:translateY(60px); opacity:0;
    animation: fadeUp 1.2s ease forwards; transition:0.4s ease;
}
.hf-product-image:hover{ transform:translateY(0) scale(1.05) rotateX(5deg); }
@keyframes fadeUp{ to{ transform:translateY(0); opacity:1; } }
.hf-button-group{
    position:relative; z-index:1; display:flex; justify-content:center; gap:40px; flex-wrap:wrap;
}
.hf-action-btn{
    position:relative; padding:16px 45px; font-size:16px; font-weight:600; text-decoration:none; color:#f37021;
    border-radius:50px; background:#fff; overflow:hidden; transition:0.4s ease; letter-spacing:1px;
}
.hf-action-btn::before{
    content:""; position:absolute; inset:0; border-radius:50px; padding:2px;
    background: linear-gradient(90deg,#f37021,#212384,#f37021);
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor; mask-composite: exclude;
    animation: borderMove 4s linear infinite;
}
@keyframes borderMove{ 0%{background-position:0%;} 100%{background-position:200%;} }
.hf-action-btn:hover{
    background:#f37021; color:#fff; box-shadow:0 15px 40px rgba(243,112,33,0.4); transform:translateY(-5px);
}
.hf-lightbox-modal{
    position:fixed; inset:0; background:rgba(0,0,0,0.88); display:flex; align-items:center; justify-content:center;
    opacity:0; visibility:hidden; transition:0.4s ease; z-index:9999;
}
.hf-lightbox-modal.active{ opacity:1; visibility:visible; }
.hf-lightbox-modal img{
    max-width:90%; max-height:90%; border-radius:20px; box-shadow:0 30px 60px rgba(0,0,0,0.5); animation:zoomIn 0.4s ease;
}
@keyframes zoomIn{ from{transform:scale(0.8);} to{transform:scale(1);} }
.hf-close-button{
    position:absolute; top:35px; right:45px; width:55px; height:55px; border-radius:50%;
    backdrop-filter:blur(12px); background:rgba(255,255,255,0.15); border:1px solid rgba(255,255,255,0.3);
    display:flex; align-items:center; justify-content:center; cursor:pointer; transition:all 0.4s ease;
    box-shadow:0 10px 30px rgba(0,0,0,0.3);
}
.hf-close-button span{ position:absolute; width:22px; height:2px; background:#fff; transition:0.4s ease; }
.hf-close-button span:nth-child(1){ transform:rotate(45deg); }
.hf-close-button span:nth-child(2){ transform:rotate(-45deg); }
.hf-close-button:hover{ transform:scale(1.15) rotate(180deg); background:linear-gradient(135deg,#f37021,#212384); }
@media(max-width:768px){
    .hf-product-image{ width:260px; }
    .hf-action-btn{ padding:14px 30px; font-size:14px; }
    .hf-close-button{ top:20px; right:20px; width:45px; height:45px; }
}
</style>
<section class="hf-product-showcase">
    <div class="hf-image-container">
        <img src="img/High-Frequency1.png" class="hf-product-image" alt="HF Online UPS">
        <img src="img/High-Frequency2.png" class="hf-product-image" alt="HF Online UPS side">
    </div>
    <div class="hf-button-group">
        <a href="#" class="hf-action-btn">DOWNLOAD BROCHURE</a>
        <a href="#" class="hf-action-btn" onclick="openEnquiry()">ENQUIRE NOW</a>
    </div>
</section>
<!-- Lightbox -->
<div class="hf-lightbox-modal" id="hfLightbox">
    <div class="hf-close-button" id="closeHfBtn"><span></span><span></span></div>
    <img src="img/High-Frequency1.png" alt="HF Online UPS">
</div>
<script>
const hfImages = document.querySelectorAll(".hf-product-image");
const hfLightbox = document.getElementById("hfLightbox");
const hfClose = document.getElementById("closeHfBtn");
const hfLightboxImg = hfLightbox.querySelector("img");
hfImages.forEach(img => {
    img.addEventListener("click", () => { hfLightbox.classList.add("active"); hfLightboxImg.src = img.src; });
});
hfClose.addEventListener("click", (e) => { e.stopPropagation(); hfLightbox.classList.remove("active"); });
hfLightbox.addEventListener("click", () => { hfLightbox.classList.remove("active"); });
</script>
<!-- IMAGE SECTION END -->

<!-- ========== UNDERSTANDING PANEL ========== -->
<style>
.hf-info-panel{ padding:40px 5%; position:relative; overflow:hidden; }
.hf-info-panel::before, .hf-info-panel::after{
    content:""; position:absolute; border-radius:50%; opacity:0.1; z-index:0;
}
.hf-info-panel::before{
    width:400px; height:400px; background:linear-gradient(135deg,#212384,#f37021);
    top:-100px; right:-150px; animation:floatShape 8s ease-in-out infinite alternate;
}
.hf-info-panel::after{
    width:300px; height:300px; background:linear-gradient(135deg,#f37021,#212384);
    bottom:-80px; left:-120px; animation:floatShape 10s ease-in-out infinite alternate-reverse;
}
@keyframes floatShape{ 0%{transform:translateY(0);} 100%{transform:translateY(20px);} }
.hf-grid-container{
    display:grid; grid-template-columns:repeat(auto-fit,minmax(320px,1fr)); gap:40px; position:relative; z-index:1;
}
.hf-content-card{
    background:#fff; padding:35px 30px; border-radius:25px; box-shadow:0 20px 60px rgba(33,35,132,0.08);
    position:relative; overflow:hidden; transition:0.5s; border:2px solid #f37021;
}
.hf-content-card::before{
    content:""; position:absolute; top:-50%; left:-50%; width:200%; height:200%;
    background:linear-gradient(45deg, rgba(33,35,132,0.05), rgba(243,112,33,0.05));
    transform:rotate(25deg); animation:overlayMove 6s linear infinite; z-index:0;
}
@keyframes overlayMove{ 0%{transform:rotate(25deg) translateX(0);} 50%{transform:rotate(25deg) translateX(20px);} }
.hf-content-card:hover{ transform:translateY(-15px) scale(1.02); box-shadow:0 30px 70px rgba(33,35,132,0.15); }
.hf-content-card p{ font-size:17px; line-height:1.8; color:#444; position:relative; z-index:1; text-align:justify; }
.hf-content-card strong{ color:#212384; }
</style>
<section class="hf-info-panel">
    <h2 class="section-heading">Understanding High Frequency <span>Online UPS</span></h2>
    <div class="hf-grid-container">
        <div class="hf-content-card"><p>In critical applications like data centers, hospitals, and industries, a <strong>high frequency online UPS</strong> provides continuous double-conversion power, ensuring zero transfer time and absolute protection against mains disturbances.</p></div>
        <div class="hf-content-card"><p>Unlike offline or line-interactive systems, the <strong>HF online UPS</strong> continuously powers the load via inverter, isolating it from raw mains. This design delivers pure sine wave output with precise voltage and frequency regulation.</p></div>
        <div class="hf-content-card"><p>Thanks to <strong>DSP and IGBT technology</strong>, high frequency UPS units are compact, energy-efficient, and ideal for modern IT, medical, and industrial equipment.</p></div>
    </div>
</section>

<!-- ========== CLEAN MODERN (What is) ========== -->
<style>
.hf-clean-section{ padding:30px 20px; color:#212384; position:relative; overflow:hidden; border-radius:15px; }
.hf-clean-section::before, .hf-clean-section::after{
    content:""; position:absolute; border-radius:50%; z-index:1; opacity:0.08;
    animation:floatShapes 15s infinite ease-in-out;
}
.hf-clean-section::before{ width:300px; height:300px; top:-100px; left:-100px; background:#f37021; }
.hf-clean-section::after{ width:400px; height:400px; bottom:-150px; right:-150px; background:#212384; animation-delay:5s; }
@keyframes floatShapes{
    0%,100%{ transform:translateY(0) translateX(0); }
    25%{ transform:translateY(20px) translateX(-10px); }
    50%{ transform:translateY(-20px) translateX(20px); }
    75%{ transform:translateY(10px) translateX(-20px); }
}
.hf-clean-container{ max-width:1000px; margin:0 auto; position:relative; z-index:2; }
.hf-clean-section p{ font-size:1.1rem; line-height:1.8; margin-bottom:20px; color:#444; text-align:justify; }
.hf-clean-section h3{ font-size:1.8rem; color:#212384; margin:30px 0 20px; font-weight:600; }
.hf-steps-list{
    display:flex; flex-wrap:wrap; gap:25px; margin:30px 0 40px; list-style:none; padding-left:0; justify-content:center;
}
.hf-steps-list li{
    flex:1 1 calc(50% - 25px); min-width:280px; padding:25px; border-radius:18px; background:#fff;
    border:2px solid #212384; box-shadow:0 15px 35px rgba(33,35,132,0.12); position:relative;
    transition:all 0.4s cubic-bezier(0.175,0.885,0.32,1.275); cursor:pointer; overflow:hidden;
}
.hf-steps-list li:hover{
    transform:translateY(-15px) scale(1.02); box-shadow:0 30px 50px rgba(243,112,33,0.25);
    border-color:#f37021; background:linear-gradient(145deg,#ffffff,#fff8f0);
}
.hf-steps-list li::before{
    content:''; position:absolute; top:50%; left:50%; width:0; height:0; border-radius:50%;
    background:rgba(243,112,33,0.1); transform:translate(-50%,-50%); transition:width 0.6s,height 0.6s; z-index:0;
}
.hf-steps-list li:hover::before{ width:300px; height:300px; }
.hf-steps-list li strong{ display:block; margin-bottom:12px; font-size:1.2rem; color:#212384; font-weight:700; z-index:1; transition:0.3s; }
.hf-steps-list li:hover strong{ color:#f37021; transform:translateX(5px); }
.hf-steps-list li{ font-size:1.1rem; color:#444; line-height:1.6; z-index:1; }
.shine{
    position:absolute; top:-50%; left:-50%; width:200%; height:200%;
    background:linear-gradient(45deg,transparent 30%,rgba(255,255,255,0.1) 50%,transparent 70%);
    transform:rotate(45deg); animation:shine 3s infinite; pointer-events:none; opacity:0; transition:opacity 0.3s;
}
.hf-steps-list li:hover .shine{ opacity:1; }
@keyframes shine{
    0%{ transform:translateX(-100%) rotate(45deg); }
    20%{ transform:translateX(100%) rotate(45deg); }
    100%{ transform:translateX(100%) rotate(45deg); }
}
</style>
<section class="hf-clean-section">
    <div class="hf-clean-container">
        <h2 class="section-heading">What Is a <span>High Frequency Online UPS?</span></h2>
        <p>A <strong>high frequency online UPS</strong> uses double-conversion topology: incoming AC is rectified to DC, then inverted back to clean AC. This isolates the load from all mains disturbances. The high-frequency transformer (or transformerless design) allows compact size and high efficiency.</p>
        <p>It delivers <strong>pure sine wave output</strong> with tight voltage and frequency regulation, making it ideal for servers, medical equipment, and industrial automation.</p>
        <h3>How It Works</h3>
        <ul class="hf-steps-list">
            <li><strong>1. Normal mode</strong> – Double conversion: AC → DC → AC, load always on inverter.<div class="shine"></div></li>
            <li><strong>2. Battery mode</strong> – If mains fails, battery supplies DC, inverter continues seamlessly.<div class="shine"></div></li>
            <li><strong>3. Bypass mode</strong> – During overload or fault, static switch transfers load to mains (optional).<div class="shine"></div></li>
            <li><strong>4. Restoration</strong> – When mains returns, it recharges battery and returns to double conversion.<div class="shine"></div></li>
        </ul>
        <p>This design ensures <strong>zero transfer time</strong> and the highest level of power protection.</p>
    </div>
</section>

<!-- ========== WHY CHOOSE ========== -->
<style>.hf-why-section{ padding:30px 40px; } .hf-why-section p{ font-size:20px; color:#000; line-height:1.6; }</style>
<section class="hf-why-section">
    <h2 class="section-heading">Why Choose a <span>High Frequency Online UPS?</span></h2>
    <p><strong>High frequency online UPS systems</strong> are preferred for critical loads due to their isolation from mains, superior voltage regulation, compact size, and energy efficiency. They provide the cleanest power, protect sensitive electronics, and ensure business continuity.</p>
</section>

<!-- ========== KEY BENEFITS (timeline) ========== -->
<style>
.hf-benefits-section{ padding:30px 8%; position:relative; }
.hf-benefits-container{ max-width:1100px; margin:auto; }
.hf-timeline-wrapper{ position:relative; margin-left:30px; }
.hf-timeline-wrapper::before{
    content:""; position:absolute; left:0; top:-13px; width:4px; height:100%;
    background:linear-gradient(to bottom, #f37021, #212384); border-radius:20px;
}
.hf-timeline-item{
    position:relative; padding-left:60px; margin-bottom:45px; opacity:0; transform:translateX(-40px);
    animation:slideRight 0.8s ease forwards;
}
.hf-timeline-item:nth-child(1){animation-delay:0.2s;}
.hf-timeline-item:nth-child(2){animation-delay:0.4s;}
.hf-timeline-item:nth-child(3){animation-delay:0.6s;}
.hf-timeline-item:nth-child(4){animation-delay:0.8s;}
.hf-timeline-item:nth-child(5){animation-delay:1.0s;}
.hf-timeline-item:nth-child(6){animation-delay:1.2s;}
.hf-timeline-item:nth-child(7){animation-delay:1.4s;}
@keyframes slideRight{ to{ opacity:1; transform:translateX(0); } }
.hf-timeline-marker{
    position:absolute; left:-12px; top:5px; width:28px; height:28px;
    background:linear-gradient(135deg,#f37021,#ff9a50); border-radius:50%;
    display:flex; align-items:center; justify-content:center; color:#fff; font-size:14px; font-weight:bold;
    box-shadow:0 6px 15px rgba(243,112,33,0.4); transition:0.4s;
}
.hf-timeline-description{
    background:#fff; padding:20px 25px; border-radius:14px; border-left:4px solid #212384;
    box-shadow:0 10px 25px rgba(33,35,132,0.08); transition:0.4s;
}
.hf-timeline-description p{ margin:0; font-size:17px; color:#333; line-height:1.6; }
.hf-timeline-item:hover .hf-timeline-description{ transform:translateX(8px); box-shadow:0 15px 35px rgba(243,112,33,0.15); }
.hf-timeline-item:hover .hf-timeline-marker{ transform:scale(1.15); background:linear-gradient(135deg,#212384,#f37021); }
</style>
<section class="hf-benefits-section">
    <div class="hf-benefits-container">
        <h2 class="section-heading">Key Benefits of <span>High Frequency Online UPS</span></h2>
        <div class="hf-timeline-wrapper">
            <div class="hf-timeline-item"><div class="hf-timeline-marker">✓</div><div class="hf-timeline-description"><p>Zero transfer time – true online protection</p></div></div>
            <div class="hf-timeline-item"><div class="hf-timeline-marker">✓</div><div class="hf-timeline-description"><p>Compact & lightweight (transformerless designs)</p></div></div>
            <div class="hf-timeline-item"><div class="hf-timeline-marker">✓</div><div class="hf-timeline-description"><p>High efficiency (up to 94%)</p></div></div>
            <div class="hf-timeline-item"><div class="hf-timeline-marker">✓</div><div class="hf-timeline-description"><p>Pure sine wave, low THD</p></div></div>
            <div class="hf-timeline-item"><div class="hf-timeline-marker">✓</div><div class="hf-timeline-description"><p>Wide input voltage window</p></div></div>
            <div class="hf-timeline-item"><div class="hf-timeline-marker">✓</div><div class="hf-timeline-description"><p>Advanced DSP & IGBT technology</p></div></div>
            <div class="hf-timeline-item"><div class="hf-timeline-marker">✓</div><div class="hf-timeline-description"><p>Suitable for critical IT, medical, industrial loads</p></div></div>
        </div>
    </div>
</section>

<!-- ========== APPLICATIONS (flip cards) ========== -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
.hf-applications-section{ padding:30px 20px; background:#fff; }
.hf-container{ max-width:1200px; margin:auto; }
.hf-section-subtitle{ font-size:15px; color:#555; text-align:center; max-width:900px; margin:0 auto 60px; line-height:1.8; }
.hf-card-grid{ display:grid; grid-template-columns:repeat(3,1fr); gap:10px; justify-items:center; }
.hf-card-grid-centered{ grid-template-columns:repeat(2,1fr); }
.hf-flip-card{ perspective:1000px; width:380px; height:400px; }
.hf-flip-inner{ position:relative; width:100%; height:100%; transition:transform 0.8s; transform-style:preserve-3d; }
.hf-flip-card:hover .hf-flip-inner{ transform:rotateY(180deg); }
.hf-front-face, .hf-back-face{
    position:absolute; width:100%; height:300px; backface-visibility:hidden; border-radius:18px; padding:25px;
    box-shadow:0 15px 35px rgba(33,35,132,0.12);
}
.hf-front-face{
    background:white; display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center;
    border:2px solid #212384;
}
.hf-front-face h3{ font-size:20px; margin-bottom:10px; color:#212384; }
.hf-front-face span{ font-size:40px; font-weight:700; color:#f37021; }
.hf-back-face{
    background:#fff; color:#444; transform:rotateY(180deg); border:2px solid #f37021; overflow-y:auto;
}
.hf-back-face h3{ font-size:20px; color:#212384;font-weight: 700;
    text-align: center;
    margin-top: 85px; }
.hf-back-face p{     font-size: 16px;
    line-height: 1.5;
    text-align: justify; }
.hf-back-face ul{ margin:8px 0 8px 18px; }
.hf-back-face ul li{ font-size:14px; margin-bottom:5px; position:relative; padding-left:14px; }
.hf-back-face ul li::before{ content:"●"; position:absolute; left:0; color:#f37021; font-size:10px; }
@media(max-width:992px){ .hf-card-grid{ grid-template-columns:repeat(2,1fr); } }
@media(max-width:600px){ .hf-card-grid, .hf-card-grid-centered{ grid-template-columns:1fr; } }
</style>
<section class="hf-applications-section">
    <div class="hf-container">
        <h2 class="section-heading">Applications Of <span>High Frequency Online UPS</span></h2>
        <p class="hf-section-subtitle">Ideal for mission-critical environments where power quality cannot be compromised.</p>
        <div class="hf-card-grid">
            <div class="hf-flip-card"><div class="hf-flip-inner"><div class="hf-front-face"><span>01</span><h3>Data Centers</h3></div><div class="hf-back-face"><h3>Data Centers</h3><p>Protects servers, storage, and network equipment with zero downtime.</p></div></div></div>
            <div class="hf-flip-card"><div class="hf-flip-inner"><div class="hf-front-face"><span>02</span><h3>Hospitals</h3></div><div class="hf-back-face"><h3>Hospitals</h3><p>For life-support systems, MRI, CT scanners, and critical care.</p></div></div></div>
            <div class="hf-flip-card"><div class="hf-flip-inner"><div class="hf-front-face"><span>03</span><h3>Industrial Automation</h3></div><div class="hf-back-face"><h3>Industrial Automation</h3><p>CNC machines, PLCs, robotics, and control systems.</p></div></div></div>
        </div>
        <div class="hf-card-grid hf-card-grid-centered" style="margin-top:-55px;">
            <div class="hf-flip-card"><div class="hf-flip-inner"><div class="hf-front-face"><span>04</span><h3>Telecom</h3></div><div class="hf-back-face"><h3>Telecom</h3><p>Base stations, communication hubs, network closets.</p></div></div></div>
            <div class="hf-flip-card"><div class="hf-flip-inner"><div class="hf-front-face"><span>05</span><h3>Banking & Finance</h3></div><div class="hf-back-face"><h3>Banking & Finance</h3><p>ATMs, servers, trading workstations.</p></div></div></div>
        </div>
    </div>
</section>

<!-- ========== FEATURES ========== -->
<style>
.hf-features-section{ padding:30px 0; margin-top:-50px; position:relative; overflow:hidden; }
.hf-features-section::before, .hf-features-section::after{
    content:""; position:absolute; border-radius:50%; opacity:0.05; z-index:0;
}
.hf-features-section::before{ width:400px; height:400px; background:#f37021; top:-50px; left:-50px; }
.hf-features-section::after{ width:500px; height:500px; background:#212384; bottom:-100px; right:-100px; }
.hf-features-container{ max-width:1100px; margin:0 auto; position:relative; z-index:1; }
.hf-features-subtext{ font-size:16px; color:#555; text-align:center; max-width:900px; margin:0 auto 50px; line-height:1.8; }
.hf-feature-item{
    background:#fff; border-left:4px solid #f37021; padding:25px 30px; margin-bottom:25px;
    box-shadow:0 10px 25px rgba(33,35,132,0.1); border-radius:12px; opacity:0; transform:translateY(30px);
    animation:fadeInUp 0.8s forwards;
}
.hf-feature-item:nth-child(1){animation-delay:0.1s;}
.hf-feature-item:nth-child(2){animation-delay:0.2s;}
.hf-feature-item:nth-child(3){animation-delay:0.3s;}
.hf-feature-item:nth-child(4){animation-delay:0.4s;}
.hf-feature-item:nth-child(5){animation-delay:0.5s;}
.hf-feature-item:nth-child(6){animation-delay:0.6s;}
.hf-feature-item:nth-child(7){animation-delay:0.7s;}
.hf-feature-item:nth-child(8){animation-delay:0.8s;}
.hf-feature-item:nth-child(9){animation-delay:0.9s;}
.hf-feature-item h3{ font-size:20px; font-weight:600; color:#212384; margin-bottom:10px; }
.hf-feature-item p{ font-size:15px; color:#555; line-height:1.7; }
@keyframes fadeInUp{ to{ opacity:1; transform:translateY(0); } }
</style>
<section class="hf-features-section">
    <div class="hf-features-container">
        <h2 class="section-heading">Features Of <span>INDUS High Frequency Online UPS</span></h2>
        <p class="hf-features-subtext">Engineered with advanced technology for critical power protection.</p>
        <div class="hf-feature-item"><h3>DSP Based Control</h3><p>Precise digital signal processing for fast response and reliability.</p></div>
        <div class="hf-feature-item"><h3>IGBT Inverter Technology</h3><p>High efficiency and rugged performance.</p></div>
        <div class="hf-feature-item"><h3>Pure Sine Wave Output</h3><p>THD < 3% for sensitive loads.</p></div>
        <div class="hf-feature-item"><h3>Wide Input Voltage Window</h3><p>Reduces battery usage.</p></div>
        <div class="hf-feature-item"><h3>Intelligent Battery Management</h3><p>Extends battery life with temperature compensation.</p></div>
        <div class="hf-feature-item"><h3>LCD Display</h3><p>Real-time status: voltage, frequency, load, battery.</p></div>
        <div class="hf-feature-item"><h3>Complete Protection</h3><p>Overload, short circuit, overtemp, deep discharge.</p></div>
        <div class="hf-feature-item"><h3>Optional Isolation Transformer</h3><p>Galvanic isolation for harsh environments.</p></div>
    </div>
</section>

<!-- ========== REDESIGNED SECTIONS START HERE ========== -->
<!-- All sections after Features have been redesigned with unique, attractive styles -->

























<!-- ========== RELIABLE POWER SOLUTIONS - CARD SECTION ========== -->
<style>
.hf-reliable-power-section {
    padding: 60px 20px;
    position: relative;
    overflow: hidden;
}
.hf-reliable-power-section::before {
    content: '';
    position: absolute;
    top: -50px;
    right: -50px;
    width: 200px;
    height: 200px;
    background: rgba(33, 35, 132, 0.03);
    border-radius: 50%;
}
.hf-reliable-power-section::after {
    content: '';
    position: absolute;
    bottom: -50px;
    left: -50px;
    width: 250px;
    height: 250px;
    background: rgba(243, 112, 33, 0.03);
    border-radius: 50%;
}
.hf-reliable-container {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}
.hf-reliable-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin: 40px 0;
}
.hf-reliable-card {
    background: white;
    padding: 35px 25px;
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(33, 35, 132, 0.1);
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
    border: 1px solid rgba(243, 112, 33, 0.1);
}
.hf-reliable-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 5px;
    height: 0;
    background: linear-gradient(to bottom, #f37021, #212384);
    transition: height 0.4s ease;
}
.hf-reliable-card:hover::before {
    height: 100%;
}
.hf-reliable-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 45px rgba(33, 35, 132, 0.2);
}
.hf-reliable-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, rgba(243, 112, 33, 0.1), rgba(33, 35, 132, 0.1));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 25px;
}
.hf-reliable-icon i {
    font-size: 30px;
    color: #f37021;
}
.hf-reliable-card h3 {
    font-size: 22px;
    color: #212384;
    margin-bottom: 15px;
    font-weight: 600;
}
.hf-reliable-card p {
    color: #666;
    line-height: 1.7;
    font-size: 15px;
}
.hf-reliable-stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin: 40px 0;
}
.hf-stat-item {
    text-align: center;
    padding: 20px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.05);
    border: solid 2px #f37021;
}
.hf-stat-number {
    font-size: 36px;
    font-weight: 700;
    color: #f37021;
    margin-bottom: 5px;
}
.hf-stat-label {
    color: #212384;
    font-weight: 700;
}
@media(max-width:992px){
    .hf-reliable-grid { grid-template-columns: repeat(2, 1fr); }
}
@media(max-width:768px){
    .hf-reliable-grid { grid-template-columns: 1fr; }
}
</style>

<section class="hf-reliable-power-section">
    <div class="hf-reliable-container">
        <h2 class="section-heading">Reliable Power <span>Backup Solutions</span></h2>
        <div class="hf-reliable-grid">
            <div class="hf-reliable-card">
                <div class="hf-reliable-icon"><i class="fas fa-bolt"></i></div>
                <h3>Continuous Protection</h3>
                <p>24/7 uninterrupted power supply with zero transfer time for critical applications across all industries.</p>
            </div>
            <div class="hf-reliable-card">
                <div class="hf-reliable-icon"><i class="fas fa-microchip"></i></div>
                <h3>Advanced Technology</h3>
                <p>DSP based control and IGBT technology ensuring precise voltage regulation and high efficiency.</p>
            </div>
            <div class="hf-reliable-card">
                <div class="hf-reliable-icon"><i class="fas fa-shield-alt"></i></div>
                <h3>Complete Isolation</h3>
                <p>Double-conversion technology providing complete isolation from mains disturbances and power anomalies.</p>
            </div>
        </div>
        <div class="hf-reliable-stats">
            <div class="hf-stat-item">
                <div class="hf-stat-number">1000+</div>
                <div class="hf-stat-label">Installations</div>
            </div>
            <div class="hf-stat-item">
                <div class="hf-stat-number">24/7</div>
                <div class="hf-stat-label">Support</div>
            </div>
            <div class="hf-stat-item">
                <div class="hf-stat-number">94%</div>
                <div class="hf-stat-label">Efficiency</div>
            </div>
            <div class="hf-stat-item">
                <div class="hf-stat-number">10+</div>
                <div class="hf-stat-label">Years Experience</div>
            </div>
        </div>
    </div>
</section>
































<!-- ========== WHAT IS HIGH FREQUENCY - GLASS MORPHISM SECTION ========== -->
<style>
.hf-what-is-section {
    padding: 0px 20px;
    position: relative;
}
.hf-what-is-container {
    max-width: 1100px;
    margin: 0 auto;
}
.hf-what-is-glass-card {
    background: rgba(255, 255, 255, 0.7);
    backdrop-filter: blur(10px);
    border-radius: 30px;
    padding: 40px;
    box-shadow: 0 25px 50px -12px rgba(33, 35, 132, 0.25);
    border: 1px solid rgba(243, 112, 33, 0.2);
    margin-bottom: 40px;
}
.hf-what-is-glass-card p {
    font-size: 18px;
    line-height: 1.9;
    color: #333;
    margin-bottom: 20px;
}
.hf-what-is-highlight {
    background: linear-gradient(135deg, #212384, #f37021);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    font-weight: 700;
}
.hf-what-is-features {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin: 50px 0;
}
.hf-what-is-feature-item {
    text-align: center;
    padding: 25px 15px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    transition: 0.3s;
    border-bottom: 3px solid transparent;
}
.hf-what-is-feature-item:hover {
    border-bottom-color: #f37021;
    transform: translateY(-5px);
}
.hf-what-is-feature-item i {
    font-size: 40px;
    color: #212384;
    margin-bottom: 15px;
}
.hf-what-is-feature-item h4 {
    font-size: 18px;
    color: #333;
    font-weight: 600;
}
@media(max-width:992px){
    .hf-what-is-features { grid-template-columns: repeat(2, 1fr); }
}
@media(max-width:576px){
    .hf-what-is-features { grid-template-columns: 1fr; }
}
</style>

<section class="hf-what-is-section">
    <div class="hf-what-is-container">
        <h2 class="section-heading">What Is A High Frequency <span>Online UPS?</span></h2>
        <div class="hf-what-is-glass-card">
            <p>A <span class="hf-what-is-highlight">high frequency UPS system</span> is an advanced power backup solution that converts incoming AC power to DC and then back to AC using high-frequency inverters. This process eliminates disturbances from the mains supply, providing a pure and stable output.</p>
            <p>The <span class="hf-what-is-highlight">HF UPS for data center</span> and <span class="hf-what-is-highlight">HF UPS for server</span> applications are designed to maintain critical operations without interruption, even during severe power anomalies.</p>
            <p>Our <span class="hf-what-is-highlight">online UPS for office, online UPS for computer,</span> and <span class="hf-what-is-highlight">online UPS for IT equipment</span> ensure that workstations, servers, and networking devices run continuously without downtime.</p>
        </div>
        
        <div class="hf-what-is-features">
            <div class="hf-what-is-feature-item">
                <i class="fas fa-server"></i>
                <h4>Data Center Ready</h4>
            </div>
            <div class="hf-what-is-feature-item">
                <i class="fas fa-desktop"></i>
                <h4>Office Solutions</h4>
            </div>
            <div class="hf-what-is-feature-item">
                <i class="fas fa-network-wired"></i>
                <h4>Network Protection</h4>
            </div>
            <div class="hf-what-is-feature-item">
                <i class="fas fa-chart-line"></i>
                <h4>Continuous Power</h4>
            </div>
        </div>
    </div>
</section>






















<!-- ========== APPLICATIONS DETAIL - ACCORDION STYLE ========== -->
<style>
.hf-applications-detail-section {
    padding: 30px 20px;
    position: relative;
    overflow: hidden;
}

/* Background floating shapes */
.hf-applications-detail-section::before,
.hf-applications-detail-section::after {
    content: '';
    position: absolute;
    border-radius: 50%;
    z-index: 1;
}

.hf-applications-detail-section::before {
    width: 300px;
    height: 300px;
    background: rgba(243, 112, 33, 0.04);
    top: -100px;
    right: -100px;
}

.hf-applications-detail-section::after {
    width: 400px;
    height: 400px;
    background: rgba(33, 35, 132, 0.04);
    bottom: -150px;
    left: -150px;
}

.hf-app-detail-container {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

/* ================= ACCORDION GRID ================= */

.hf-app-accordion {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin: 50px 0;
    align-items: start; /* IMPORTANT FIX */
}

.hf-app-accordion-item {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 35px rgba(33, 35, 132, 0.1);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    border: 2px solid transparent;
}

/* Hover lift effect */
.hf-app-accordion-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 50px rgba(243, 112, 33, 0.25);
    border-color: #f37021;
}

/* Header */
.hf-app-header {
    padding: 25px 30px;
    background: linear-gradient(135deg, #212384, #1a1c6e);
    color: white;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: 0.3s ease;
}

.hf-app-header:hover {
    background: linear-gradient(135deg, #f37021, #ff9a50);
}

.hf-app-header h3 {
    margin: 0;
    font-size: 20px;
}

.hf-app-header i {
    transition: 0.4s ease;
}

/* Default closed */
.hf-app-content {
    padding: 0 30px;
    max-height: 0;
    opacity: 0;
    overflow: hidden;
    transition: all 0.5s ease;
}

/* ONLY hovered card opens */
.hf-app-accordion-item:hover .hf-app-content {
    padding: 25px 30px 30px;
    max-height: 300px;
    opacity: 1;
}

/* Rotate icon only for hovered */
.hf-app-accordion-item:hover .hf-app-header i {
    transform: rotate(180deg);
    color: #f37021;
}

/* ================= INDUSTRY GRID ================= */

.hf-app-industry-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin-top: 60px;
}

.hf-app-industry-item {
    text-align: center;
    padding: 30px 20px;
    background: white;
    border-radius: 20px;
    border: 2px dashed #e0e0e0;
    transition: all 0.4s ease;
}

.hf-app-industry-item:hover {
    border-color: #f37021;
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(243, 112, 33, 0.25);
    background: #fff8f0;
}

.hf-app-industry-item i {
    font-size: 40px;
    color: #212384;
    margin-bottom: 15px;
    transition: 0.4s ease;
}

.hf-app-industry-item:hover i {
    color: #f37021;
    transform: rotate(360deg);
}

.hf-app-industry-item span {
    font-weight: 600;
    font-size: 17px;
}

/* ================= RESPONSIVE ================= */

@media(max-width: 992px) {
    .hf-app-accordion {
        grid-template-columns: 1fr;
    }

    .hf-app-industry-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media(max-width: 576px) {
    .hf-app-industry-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<section class="hf-applications-detail-section">
    <div class="hf-app-detail-container">
        <h2 class="section-heading">Applications Of High Frequency <span>Online UPS</span></h2>
        
        <div class="hf-app-accordion">
            
            <div class="hf-app-accordion-item">
                <div class="hf-app-header">
                    <h3>Healthcare & Medical</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="hf-app-content">
                    <p>Online UPS for hospital and medical equipment ensures life-saving devices such as ventilators, MRI machines, and CT scanners remain operational 24x7.</p>
                </div>
            </div>

            <div class="hf-app-accordion-item">
                <div class="hf-app-header">
                    <h3>Industrial Automation</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="hf-app-content">
                    <p>Industries depend on online UPS to protect CNC machines, control panels, and automation systems from voltage fluctuations.</p>
                </div>
            </div>

            <div class="hf-app-accordion-item">
                <div class="hf-app-header">
                    <h3>Banking & Finance</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="hf-app-content">
                    <p>Banks, ATMs, and commercial setups use online UPS systems for uninterrupted and secure operations.</p>
                </div>
            </div>

            <div class="hf-app-accordion-item">
                <div class="hf-app-header">
                    <h3>Telecom & IT</h3>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="hf-app-content">
                    <p>Telecom providers and IT server rooms rely on online UPS systems for continuous uptime and data protection.</p>
                </div>
            </div>

        </div>

        <div class="hf-app-industry-grid">
            <div class="hf-app-industry-item">
                <i class="fas fa-flask"></i>
                <span>Laboratory</span>
            </div>
            <div class="hf-app-industry-item">
                <i class="fas fa-microscope"></i>
                <span>R&D Labs</span>
            </div>
            <div class="hf-app-industry-item">
                <i class="fas fa-cogs"></i>
                <span>Control Panels</span>
            </div>
            <div class="hf-app-industry-item">
                <i class="fas fa-industry"></i>
                <span>CNC Machines</span>
            </div>
            <div class="hf-app-industry-item">
                <i class="fas fa-video"></i>
                <span>CCTV Systems</span>
            </div>
            <div class="hf-app-industry-item">
                <i class="fas fa-lock"></i>
                <span>Access Control</span>
            </div>
        </div>

    </div>
</section>


















<!-- ========== SINGLE & THREE PHASE - COMPARISON TABLE ========== -->
<style>
.hf-phase-section {
    padding: 60px 20px;
}
.hf-phase-container {
    max-width: 1100px;
    margin: 0 auto;
}
.hf-phase-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin: 50px 0;
}
.hf-phase-card {
    padding: 40px 30px;
    border-radius: 25px;
    position: relative;
    overflow: hidden;
    transition: all 0.4s ease;
    cursor: pointer;
}
.hf-phase-card.single {
    background: linear-gradient(145deg, #f8f9ff, #ffffff);
    border: 2px solid #212384;
}
.hf-phase-card.three {
    background: linear-gradient(145deg, #fff8f0, #ffffff);
    border: 2px solid #f37021;
}
.hf-phase-card::before {
    content: '';
    position: absolute;
    width: 150px;
    height: 150px;
    background: rgba(33, 35, 132, 0.04);
    border-radius: 50%;
    top: -50px;
    right: -50px;
    transition: 0.5s ease;
}

/* 🔥 Hover Main Animation */
.hf-phase-card:hover {
    transform: translateY(-12px) scale(1.02);
    box-shadow: 0 25px 50px rgba(0,0,0,0.15);
}
.hf-phase-card:hover::before {
    transform: scale(1.4);
}

/* Badge */
.hf-phase-badge {
    position: absolute;
    top: 20px;
    right: 20px;
    padding: 8px 20px;
    border-radius: 30px;
    font-weight: 600;
    font-size: 14px;
    transition: 0.3s ease;
}
.hf-phase-card.single .hf-phase-badge {
    background: #212384;
    color: white;
}
.hf-phase-card.three .hf-phase-badge {
    background: #f37021;
    color: white;
}
.hf-phase-card:hover .hf-phase-badge {
    transform: scale(1.08);
}

/* Icon */
.hf-phase-icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 25px;
    font-size: 35px;
    font-weight: 700;
    transition: 0.4s ease;
}
.hf-phase-card.single .hf-phase-icon {
    background: rgba(33, 35, 132, 0.1);
    color: #212384;
}
.hf-phase-card.three .hf-phase-icon {
    background: rgba(243, 112, 33, 0.1);
    color: #f37021;
}
.hf-phase-card:hover .hf-phase-icon {
    transform: scale(1.15) rotate(8deg);
}

/* Heading */
.hf-phase-card h3 {
    font-size: 24px;
    margin-bottom: 15px;
}
.hf-phase-card.single h3 { color: #212384; }
.hf-phase-card.three h3 { color: #f37021; }

/* Specs */
.hf-phase-specs {
    list-style: none;
    padding: 0;
    margin: 25px 0 0;
}
.hf-phase-specs li {
    padding: 12px 0;
    border-bottom: 1px dashed #e0e0e0;
    display: flex;
    align-items: center;
    gap: 10px;
    color: #666;
    transition: 0.3s ease;
}
.hf-phase-specs li:hover {
    color: #000;
    transform: translateX(5px);
}
.hf-phase-specs li i {
    color: #28a745;
    font-size: 16px;
}

/* Range Tags */
.hf-phase-range {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 30px;
}
.hf-phase-range span {
    padding: 6px 16px;
    background: #f5f5f5;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 600;
    transition: 0.3s ease;
}
.hf-phase-card.single .hf-phase-range span { color: #212384; }
.hf-phase-card.three .hf-phase-range span { color: #f37021; }

.hf-phase-range span:hover {
    background: linear-gradient(45deg, #212384, #f37021);
    color: #fff !important;
    transform: scale(1.08);
}

/* Responsive */
@media(max-width: 768px){
    .hf-phase-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<section class="hf-phase-section">
    <div class="hf-phase-container">
        <h2 class="section-heading">Single Phase And Three Phase High Frequency <span>Online UPS</span></h2>
        
        <div class="hf-phase-grid">
            <div class="hf-phase-card single">
                <div class="hf-phase-badge">1 Phase</div>
                <div class="hf-phase-icon">1Φ</div>
                <h3>Single Phase HF Online UPS</h3>
                <p>Ideal for smaller loads, offices, and commercial applications. Compact, efficient, and easy to install.</p>
                <ul class="hf-phase-specs">
                    <li><i class="fas fa-check-circle"></i> Power Range: 1kVA to 20kVA</li>
                    <li><i class="fas fa-check-circle"></i> Ideal for: Offices, Shops, Small IT</li>
                    <li><i class="fas fa-check-circle"></i> Input: 230V AC, Output: 230V AC</li>
                    <li><i class="fas fa-check-circle"></i> Efficiency: Up to 94%</li>
                </ul>
                <div class="hf-phase-range">
                    <span>1kVA</span> <span>2kVA</span> <span>3kVA</span> 
                    <span>5kVA</span> <span>10kVA</span> <span>20kVA</span>
                </div>
            </div>
            
            <div class="hf-phase-card three">
                <div class="hf-phase-badge">3 Phase</div>
                <div class="hf-phase-icon">3Φ</div>
                <h3>Three Phase HF Online UPS</h3>
                <p>Designed for industrial operations, data centers, and heavy loads requiring high power capacity.</p>
                <ul class="hf-phase-specs">
                    <li><i class="fas fa-check-circle"></i> Power Range: 10kVA to 100kVA+</li>
                    <li><i class="fas fa-check-circle"></i> Ideal for: Industries, Data Centers</li>
                    <li><i class="fas fa-check-circle"></i> Input: 415V AC, Output: 415V AC</li>
                    <li><i class="fas fa-check-circle"></i> Parallel operation for redundancy</li>
                </ul>
                <div class="hf-phase-range">
                    <span>10kVA</span> <span>20kVA</span> <span>30kVA</span> 
                    <span>50kVA</span> <span>75kVA</span> <span>100kVA</span>
                </div>
            </div>
        </div>
    </div>
</section>

























<!-- ========== BATTERY & ENERGY STORAGE - GRADIENT SECTION ========== -->
<style>
.hf-battery-section {
    padding: 70px 20px;
    position: relative;
    overflow: hidden;
    background: url('img/about us.jpg') center center / cover no-repeat fixed;
}

/* Black Overlay */
.hf-battery-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.77); /* Change opacity if needed */
    z-index: 1;
}

/* Content above overlay */
.hf-battery-container {
    max-width: 1100px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

.hf-battery-container .section-heading {
    color: white;
}
.hf-battery-container .section-heading span {
    color: #ff9a50;
}
.hf-battery-container .section-heading span::after {
    background: #ff9a50;
}

.hf-battery-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    margin: 50px 0;
}

.hf-battery-item {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 30px 20px;
    text-align: center;
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: 0.3s;
    color: white;
}

.hf-battery-item:hover {
    transform: translateY(-10px);
    background: rgba(255, 255, 255, 0.15);
    border-color: #f37021;
}

.hf-battery-icon {
    width: 70px;
    height: 70px;
    margin: 0 auto 20px;
    background: rgba(243, 112, 33, 0.3);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
}

.hf-battery-item h4 {
    font-size: 20px;
    margin-bottom: 10px;
    font-weight: 600;
}

.hf-battery-item p {
    font-size: 14px;
    opacity: 0.9;
    line-height: 1.6;
}

.hf-battery-features {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    margin-top: 40px;
}

.hf-battery-feature-tag {
    padding: 10px 25px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50px;
    color: white;
    font-size: 15px;
    border: 1px solid #f37021;

}

.hf-battery-feature-tag i {
    color: #f37021;
    margin-right: 8px;
}

/* Responsive */
@media(max-width:992px){
    .hf-battery-grid { 
        grid-template-columns: repeat(2, 1fr); 
    }
}

@media(max-width:768px){
    .hf-battery-section {
        background-attachment: scroll; /* Fix for mobile */
    }
}

@media(max-width:576px){
    .hf-battery-grid { 
        grid-template-columns: 1fr; 
    }
}
</style>

<section class="hf-battery-section">
    <div class="hf-battery-container">
        <h2 class="section-heading">Battery Backup And <span>Energy Storage</span></h2>
        
        <div class="hf-battery-grid">
            <div class="hf-battery-item">
                <div class="hf-battery-icon"><i class="fas fa-battery-full"></i></div>
                <h4>External Battery</h4>
                <p>Online UPS with external battery for extended runtime and flexible configuration.</p>
            </div>
            <div class="hf-battery-item">
                <div class="hf-battery-icon"><i class="fas fa-clock"></i></div>
                <h4>Long Backup</h4>
                <p>Online UPS long backup solutions for critical applications requiring hours of runtime.</p>
            </div>
            <div class="hf-battery-item">
                <div class="hf-battery-icon"><i class="fas fa-bolt"></i></div>
                <h4>Fast Charging</h4>
                <p>Line UPS fast charging technology reduces battery recharge time significantly.</p>
            </div>
            <div class="hf-battery-item">
                <div class="hf-battery-icon"><i class="fas fa-chart-bar"></i></div>
                <h4>LCD Display</h4>
                <p>Online UPS with LCD display showing real-time system status and battery condition.</p>
            </div>
        </div>
        
        <div class="hf-battery-features">
            <span class="hf-battery-feature-tag"><i class="fas fa-check"></i> Smart Battery Management</span>
            <span class="hf-battery-feature-tag"><i class="fas fa-check"></i> Temperature Compensation</span>
            <span class="hf-battery-feature-tag"><i class="fas fa-check"></i> Battery Health Monitoring</span>
            <span class="hf-battery-feature-tag"><i class="fas fa-check"></i> Automatic Bypass</span>
        </div>
    </div>
</section>
































<!-- ========== ISOLATION TRANSFORMER - FEATURE SHOWCASE ========== -->
<style>
/* SECTION STYLING */
.hf-isolation-section {
    padding: 30px 20px;
}
.hf-isolation-container {
    max-width: 1200px;
    margin: 0 auto;
}

/* SHOWCASE CARD */
.hf-isolation-showcase {
    display: flex;
    align-items: center;
    gap: 60px;
    margin: 60px 0;
    background: #ffffff;
    padding: 50px;
    border-radius: 40px;
    box-shadow: 0 30px 60px rgba(0,0,0,0.1);
    transition: transform 0.5s ease, box-shadow 0.5s ease;
}
.hf-isolation-showcase:hover {
    transform: translateY(-10px);
    box-shadow: 0 50px 100px rgba(0,0,0,0.15);
}

/* CONTENT */
.hf-isolation-content {
    flex: 1;
}
.hf-isolation-content h3 {
    font-size: 32px;
    color: #212384;
    margin-bottom: 20px;
    font-weight: 700;
}
.hf-isolation-content p {
    color: #555;
    line-height: 1.8;
    margin-bottom: 30px;
    font-size: 17px;
}
.hf-isolation-badge {
    display: inline-block;
    padding: 10px 25px;
    background: linear-gradient(90deg, #f37021, #ff6b00);
    color: white;
    border-radius: 50px;
    font-weight: 700;
    margin-bottom: 25px;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
}
.hf-isolation-badge:hover {
    background: linear-gradient(90deg, #ff6b00, #f37021);
    transform: scale(1.1);
}

/* LIST ITEMS */
.hf-isolation-list {
    list-style: none;
    padding: 0;
}
.hf-isolation-list li {
    padding: 15px 0;
    display: flex;
    align-items: center;
    gap: 20px;
    border-bottom: 1px solid #eee;
    font-size: 16px;
    transition: transform 0.3s ease, color 0.3s ease;
}
.hf-isolation-list li i {
    color: #28a745;
    font-size: 22px;
}
.hf-isolation-list li:hover {
    color: #212384;
    transform: translateX(5px);
}

/* DIAGRAM */
.hf-isolation-diagram {
    flex: 1;
    background: #fdfdff;
    padding: 40px;
    border-radius: 30px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.1);
    position: relative;
    transition: transform 0.5s ease, box-shadow 0.5s ease;
}
.hf-isolation-diagram:hover {
    transform: translateY(-8px);
    box-shadow: 0 35px 70px rgba(0,0,0,0.15);
}
.hf-diagram-item {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 25px;
    margin: 25px 0;
}
.hf-diagram-box {
    width: 90px;
    height: 90px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 16px;
    transition: transform 0.4s ease, box-shadow 0.4s ease, background 0.4s ease;
}
.hf-diagram-box.ac { 
    background: linear-gradient(135deg, #212384, #4d4dc4); 
    color: #fff; 
}
.hf-diagram-box.dc { 
    background: linear-gradient(135deg, #f37021, #ff914d); 
    color: #fff; 
}
.hf-diagram-box.transformer { 
    background: #e0e0e0; 
    color: #333; 
}
.hf-diagram-box:hover {
    transform: scale(1.15) rotate(3deg);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
}
.hf-diagram-arrow { 
    color: #999; 
    font-size: 28px; 
    animation: pulseArrow 1.2s infinite alternate;
}
@keyframes pulseArrow {
    0% { transform: translateX(0); opacity: 0.7; }
    100% { transform: translateX(5px); opacity: 1; }
}

/* GRID CARDS */
.hf-isolation-container > div[style*="display:grid"] > div {
    text-align: center;
    padding: 20px;
    background: linear-gradient(135deg, #f5f5f5, #e8ebf8);
    border-radius: 15px;
    font-weight: 600;
    border: solid 2px #212384;
    transition: transform 0.4s ease, box-shadow 0.4s ease, background 0.4s ease;
}
.hf-isolation-container > div[style*="display:grid"] > div:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
    background: linear-gradient(135deg, #212384, #4d4dc4);
    color: #fff;
}

/* RESPONSIVE */
@media(max-width:992px){
    .hf-isolation-showcase { flex-direction: column; }
    .hf-diagram-box { width: 80px; height: 80px; }
}
</style>

<section class="hf-isolation-section">
    <div class="hf-isolation-container">
        <h2 class="section-heading">High Frequency Online UPS With <span>Isolation Transformer</span></h2>
        
        <div class="hf-isolation-showcase">
            <div class="hf-isolation-content">
                <span class="hf-isolation-badge">Galvanic Isolation</span>
                <h3>Superior Protection with Isolation Transformer</h3>
                <p>For critical environments, an online UPS with isolation transformer provides galvanic isolation, protecting sensitive equipment from electrical noise, surges, and ground loops.</p>
                
                <ul class="hf-isolation-list">
                    <li><i class="fas fa-check-circle"></i> <strong>Inbuilt Isolation Transformer:</strong> Compact, all-in-one solution</li>
                    <li><i class="fas fa-check-circle"></i> <strong>External Isolation Transformer:</strong> Flexible installation options</li>
                    <li><i class="fas fa-check-circle"></i> <strong>Hospitals & Data Centers:</strong> Ensures safety for critical equipment</li>
                    <li><i class="fas fa-check-circle"></i> <strong>Industrial Use:</strong> Guards against ground loops and electrical noise</li>
                </ul>
            </div>
            
            <div class="hf-isolation-diagram">
                <div class="hf-diagram-item">
                    <div class="hf-diagram-box ac">AC In</div>
                    <div class="hf-diagram-arrow"><i class="fas fa-arrow-right"></i></div>
                    <div class="hf-diagram-box dc">Rectifier</div>
                </div>
                <div class="hf-diagram-item">
                    <div class="hf-diagram-box dc">DC</div>
                    <div class="hf-diagram-arrow"><i class="fas fa-arrow-right"></i></div>
                    <div class="hf-diagram-box dc">Inverter</div>
                </div>
                <div class="hf-diagram-item">
                    <div class="hf-diagram-box transformer">Isolation</div>
                    <div class="hf-diagram-arrow"><i class="fas fa-arrow-right"></i></div>
                    <div class="hf-diagram-box ac">AC Out</div>
                </div>
                <p style="text-align:center; margin-top:25px; color:#666;">Complete galvanic isolation path</p>
            </div>
        </div>
        
        <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:20px; margin-top:40px;">
            <div>Hospital Grade</div>
            <div>Data Center</div>
            <div>CNC Machines</div>
            <div>Laboratory</div>
        </div>
    </div>
</section>


































<!-- ========== TECHNOLOGY FEATURES - HEX GRID ========== -->
<style>
.hf-tech-section {
    padding: 30px 20px;
}
.hf-tech-container {
    max-width: 1200px;
    margin: 0 auto;
}
.hf-tech-hex-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin: 50px 0;
}
.hf-tech-hex-item {
    background: white;
    padding: 35px 25px;
    border-radius: 30px 10px 30px 10px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.08);
    transition: 0.3s;
    position: relative;
    overflow: hidden;
    border: 1px solid #f0f0f0;
}
.hf-tech-hex-item:hover {
    transform: scale(1.03);
    box-shadow: 0 25px 50px rgba(243, 112, 33, 0.15);
    border-color: #f37021;
}
.hf-tech-hex-item::before {
    content: '';
    position: absolute;
    bottom: 0;
    right: 0;
    width: 100px;
    height: 100px;
    background: linear-gradient(135deg, transparent 50%, rgba(33, 35, 132, 0.03) 50%);
    border-radius: 50%;
}
.hf-tech-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #212384, #1e2a6a);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 25px;
    color: white;
    font-size: 25px;
        margin-left: 135px;
}
.hf-tech-hex-item h3 {
    font-size: 20px;
    color: #212384;
    margin-bottom: 10px;
    font-weight: 700;
    text-align: center;
}
.hf-tech-hex-item p {
    color: #666;
    line-height: 1.5;
    font-size: 16px;
    text-align: center;
}
@media(max-width:992px){
    .hf-tech-hex-grid { grid-template-columns: repeat(2, 1fr); }
}
@media(max-width:576px){
    .hf-tech-hex-grid { grid-template-columns: 1fr; }
}
</style>

<section class="hf-tech-section">
    <div class="hf-tech-container">
        <h2 class="section-heading">Technology & <span>Features</span></h2>
        
        <div class="hf-tech-hex-grid">
            <div class="hf-tech-hex-item">
                <div class="hf-tech-icon"><i class="fas fa-microchip"></i></div>
                <h3>DSP Based Control</h3>
                <p>Digital Signal Processing for fast response, precise regulation, and high reliability.</p>
            </div>
            <div class="hf-tech-hex-item">
                <div class="hf-tech-icon"><i class="fas fa-bolt"></i></div>
                <h3>IGBT Technology</h3>
                <p>High efficiency IGBT based inverter for rugged performance and energy savings.</p>
            </div>
            <div class="hf-tech-hex-item">
                <div class="hf-tech-icon"><i class="fas fa-wave-square"></i></div>
                <h3>Pure Sine Wave</h3>
                <p>Clean, stable output with <3% THD for sensitive electronic equipment.</p>
            </div>
            <div class="hf-tech-hex-item">
                <div class="hf-tech-icon"><i class="fas fa-box"></i></div>
                <h3>Transformerless</h3>
                <p>Compact, lightweight design with high power density and efficiency.</p>
            </div>
            <div class="hf-tech-hex-item">
                <div class="hf-tech-icon"><i class="fas fa-volume-down"></i></div>
                <h3>Low Noise</h3>
                <p>Quiet operation suitable for office and hospital environments.</p>
            </div>
            <div class="hf-tech-hex-item">
                <div class="hf-tech-icon"><i class="fas fa-chart-pie"></i></div>
                <h3>Energy Efficient</h3>
                <p>Up to 94% efficiency reducing operational costs and heat generation.</p>
            </div>
        </div>
    </div>
</section>



























<!-- ========== COMMERCIAL BENEFITS - METRICS SECTION ========== -->
<style>
.hf-commercial-section {
    padding: 30px 20px;
}
.hf-commercial-container {
    max-width: 1100px;
    margin: 0 auto;
}
.hf-commercial-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    margin: 50px 0;
}
.hf-commercial-card {
    text-align: center;
    padding: 35px 20px;
    background: linear-gradient(145deg, #ffffff, #f8f9ff);
    border-radius: 20px;
    box-shadow: 0 15px 35px rgba(33, 35, 132, 0.08);
    transition: 0.3s;
    border: 1px solid transparent;
}
.hf-commercial-card:hover {
    border-color: #f37021;
    transform: translateY(-10px);
}
.hf-commercial-value {
    font-size: 25px;
    font-weight: 700;
    color: #212384;
    margin-bottom: 10px;
}
.hf-commercial-label {
    font-size: 20px;
    color: #f37021;
    font-weight: 700;
    margin-bottom: 15px;
}
.hf-commercial-desc {
    color: #666;
    font-size: 16px;
    line-height: 1.4;
}
@media(max-width:992px){
    .hf-commercial-grid { grid-template-columns: repeat(2, 1fr); }
}
@media(max-width:576px){
    .hf-commercial-grid { grid-template-columns: 1fr; }
}
</style>

<section class="hf-commercial-section">
    <div class="hf-commercial-container">
        <h2 class="section-heading">Commercial & <span>Industrial Benefits</span></h2>
        
        <div class="hf-commercial-grid">
            <div class="hf-commercial-card">
                <div class="hf-commercial-value">24/7</div>
                <div class="hf-commercial-label">Continuous Power</div>
                <div class="hf-commercial-desc">Uninterrupted operation for mission-critical applications</div>
            </div>
            <div class="hf-commercial-card">
                <div class="hf-commercial-value">0ms</div>
                <div class="hf-commercial-label">Transfer Time</div>
                <div class="hf-commercial-desc">True online double-conversion with zero break</div>
            </div>
            <div class="hf-commercial-card">
                <div class="hf-commercial-value">±1%</div>
                <div class="hf-commercial-label">Voltage Regulation</div>
                <div class="hf-commercial-desc">Precise output for sensitive equipment</div>
            </div>
            <div class="hf-commercial-card">
                <div class="hf-commercial-value">50+</div>
                <div class="hf-commercial-label">Industries Served</div>
                <div class="hf-commercial-desc">Trusted across healthcare, IT, industrial sectors</div>
            </div>
        </div>
    </div>
</section>





























<!-- ========== SECURITY & IT - ICON GRID ========== -->
<style>
.hf-security-section {
    padding: 60px 20px;
    position: relative;
    color: white;
    background-image: url('img/about us.jpg'); /* Parallax image */
    background-attachment: fixed;  /* Parallax effect */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    overflow: hidden;
}

/* Black overlay */
.hf-security-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.78); /* Overlay opacity */
    z-index: 1;
}

.hf-security-container {
    max-width: 1100px;
    margin: 0 auto;
    position: relative;
    z-index: 2; /* Keep content above overlay */
}

.hf-security-section .section-heading,
.hf-security-section .section-heading span {
    color: white;
}

.hf-security-section .section-heading span::after {
    background: #f37021;
}

.hf-security-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin: 50px 0;
}

.hf-security-item {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 30px;
    text-align: center;
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: 0.3s;
}

.hf-security-item:hover {
    background: rgba(243, 112, 33, 0.2);
    transform: translateY(-10px);
    border-color: #f37021;
}

.hf-security-item i {
    font-size: 45px;
    color: #f37021;
    margin-bottom: 20px;
}

.hf-security-item h4 {
    font-size: 20px;
    margin-bottom: 10px;
    font-weight: 600;
}

.hf-security-item p {
    font-size: 14px;
    opacity: 0.9;
    line-height: 1.6;
}

@media(max-width:992px){
    .hf-security-grid { grid-template-columns: repeat(2, 1fr); }
}
@media(max-width:576px){
    .hf-security-grid { grid-template-columns: 1fr; }
}
</style>

<section class="hf-security-section">
    <div class="hf-security-container">
        <h2 class="section-heading">Security & <span>IT Applications</span></h2>
        
        <div class="hf-security-grid">
            <div class="hf-security-item">
                <i class="fas fa-shield-alt"></i>
                <h4>Security Systems</h4>
                <p>Online UPS for security systems ensuring continuous surveillance and access control.</p>
            </div>
            <div class="hf-security-item">
                <i class="fas fa-video"></i>
                <h4>CCTV Systems</h4>
                <p>Uninterrupted power for CCTV cameras and recording equipment 24/7.</p>
            </div>
            <div class="hf-security-item">
                <i class="fas fa-lock"></i>
                <h4>Access Control</h4>
                <p>Reliable power for biometric systems, door locks, and security gates.</p>
            </div>
            <div class="hf-security-item">
                <i class="fas fa-robot"></i>
                <h4>Automation</h4>
                <p>Power protection for industrial automation and control systems.</p>
            </div>
            <div class="hf-security-item">
                <i class="fas fa-flask"></i>
                <h4>R&D Labs</h4>
                <p>Stable power for testing equipment and research facilities.</p>
            </div>
            <div class="hf-security-item">
                <i class="fas fa-code"></i>
                <h4>Software Companies</h4>
                <p>Protect servers and workstations in software development environments.</p>
            </div>
        </div>
    </div>
</section>






























<!-- ========== CHOOSING RIGHT UPS - STEP PROCESS ========== -->
<style>
.hf-choosing-section {
    padding: 30px 20px;
}
.hf-choosing-container {
    max-width: 1100px;
    margin: 0 auto;
}
.hf-steps-process {
    display: flex;
    justify-content: space-between;
    margin: 60px 0;
    position: relative;
}
.hf-steps-process::before {
    content: '';
    position: absolute;
    top: 30px;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, #f37021, #212384, #f37021);
    z-index: 1;
}
.hf-step-item {
    text-align: center;
    position: relative;
    z-index: 2;
    flex: 1;
}
.hf-step-number {
    width: 60px;
    height: 60px;
    background: white;
    border: 3px solid #f37021;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 28px;
    font-weight: 700;
    color: #212384;
    background: white;
    transition: 0.3s;
}
.hf-step-item:hover .hf-step-number {
    background: #f37021;
    color: white;
    border-color: #212384;
}
.hf-step-title {
    font-size: 20px;
    font-weight: 700;
    color: #212384;
    margin-bottom: 10px;
}
.hf-step-desc {
    color: #000000;
    font-size: 16px;
    line-height: 1.4;
    max-width: 200px;
    margin: 0 auto;
}
.hf-brand-section {
    text-align: center;
    padding: 40px;
    background: linear-gradient(135deg, #f8f9ff, #ffffff);
    border-radius: 30px;
    margin-top: 50px;
}
.hf-brand-section h4 {
    font-size: 24px;
    color: #212384;
    margin-bottom: 15px;
}
.hf-brand-section p {
    max-width: 700px;
    margin: 0 auto 25px;
    color: #555;
}
.hf-trusted-badge {
    display: inline-block;
    padding: 10px 30px;
    background: linear-gradient(135deg, #f37021, #ff9a50);
    color: white;
    border-radius: 50px;
    font-weight: 600;
}
@media(max-width:768px){
    .hf-steps-process { flex-direction: column; gap: 30px; }
    .hf-steps-process::before { display: none; }
}
</style>

<section class="hf-choosing-section">
    <div class="hf-choosing-container">
        <h2 class="section-heading">Choosing The Right High Frequency <span>Online UPS</span></h2>
        
        <div class="hf-steps-process">
            <div class="hf-step-item">
                <div class="hf-step-number">1</div>
                <div class="hf-step-title">Load Calculation</div>
                <div class="hf-step-desc">Calculate total load in VA/Watts</div>
            </div>
            <div class="hf-step-item">
                <div class="hf-step-number">2</div>
                <div class="hf-step-title">Backup Time</div>
                <div class="hf-step-desc">Determine required battery runtime</div>
            </div>
            <div class="hf-step-item">
                <div class="hf-step-number">3</div>
                <div class="hf-step-title">Phase Selection</div>
                <div class="hf-step-desc">Choose single or three phase</div>
            </div>
            <div class="hf-step-item">
                <div class="hf-step-number">4</div>
                <div class="hf-step-title">Features</div>
                <div class="hf-step-desc">Isolation, bypass, communication</div>
            </div>
        </div>
        
        
    </div>
</section>



























<!-- ========== MAINTENANCE & SUPPORT - SERVICE CARDS ========== -->
<style>
.hf-support-section {
    padding: 30px 20px;
}
.hf-support-container {
    max-width: 1100px;
    margin: 0 auto;
}
.hf-support-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    margin: 50px 0;
}
.hf-support-card {
    background: white;
    padding: 30px 20px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 15px 35px rgba(33, 35, 132, 0.1);
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
    border: 2px solid transparent;
}
.hf-support-card:hover {
    transform: translateY(-12px) scale(1.03);
    box-shadow: 0 25px 50px rgba(243, 112, 33, 0.25);
    border: 2px solid #f37021;
}
.hf-support-icon {
    position: relative;
    width: 70px;
    height: 70px;
    background: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    font-size: 28px;
    color: #f37021;
    transition: 0.4s;
}
.hf-support-icon::before {
    content: "";
    position: absolute;
    width: 85px;
    height: 85px;
    border-radius: 50%;
    border: 2px dashed #f37021;
    transition: 0.6s linear;
}
.hf-support-card:hover .hf-support-icon {
    background: linear-gradient(135deg, #f37021, #212384);
    color: #fff;
    transform: rotate(10deg) scale(1.15);
}
.hf-support-card h4 {
    font-size: 20px;
    font-weight: 700;
    text-align: center;
    color: #212384;
    margin-bottom: 10px;
    transition: 0.3s;
}
.hf-support-card:hover h4 {
    color: #f37021;
}
.hf-support-card p {
    color: #666;
    font-size: 15px;
    line-height: 1.4;
    text-align: center;
}
.hf-support-footer {
    text-align: center;
    padding: 30px;
    background: #212384;
    border-radius: 50px;
    color: white;
    margin-top: 30px;
}
.hf-support-footer a {
    color: #f37021;
    text-decoration: none;
    font-weight: 600;
    margin: 0 10px;
}
@media(max-width:992px){
    .hf-support-grid { grid-template-columns: repeat(2, 1fr); }
}
@media(max-width:576px){
    .hf-support-grid { grid-template-columns: 1fr; }
}
</style>

<section class="hf-support-section">
    <div class="hf-support-container">
        <h2 class="section-heading">Maintenance & <span>Support</span></h2>
        
        <div class="hf-support-grid">
            <div class="hf-support-card">
                <div class="hf-support-icon"><i class="fas fa-tools"></i></div>
                <h4>Installation</h4>
                <p>Professional online UPS installation by certified technicians</p>
            </div>
            <div class="hf-support-card">
                <div class="hf-support-icon"><i class="fas fa-wrench"></i></div>
                <h4>Maintenance</h4>
                <p>Regular online UPS maintenance and AMC services</p>
            </div>
            <div class="hf-support-card">
                <div class="hf-support-icon"><i class="fas fa-headset"></i></div>
                <h4>Technical Support</h4>
                <p>24/7 online UPS technical support and troubleshooting</p>
            </div>
            <div class="hf-support-card">
                <div class="hf-support-icon"><i class="fas fa-box-open"></i></div>
                <h4>Spare Parts</h4>
                <p>Genuine online UPS spare parts and repairs</p>
            </div>
        </div>
    </div>
</section>























<!-- ========== INDUSTRY SOLUTIONS - ZIGZAG SECTION ========== -->
<style>
.hf-industry-solutions-section {
    padding: 30px 20px;
}
.hf-industry-container {
    max-width: 1100px;
    margin: 0 auto;
}
.hf-industry-zigzag {
    margin: 60px 0;
}
.hf-industry-row {
    display: flex;
    align-items: center;
    gap: 40px;
    margin-bottom: 50px;
}
.hf-industry-row.reverse {
    flex-direction: row-reverse;
}
.hf-industry-content {
    flex: 1;
}
.hf-industry-tag {
    display: inline-block;
    padding: 5px 20px;
    background: #f37021;
    color: white;
    border-radius: 50px;
    font-size: 14px;
    margin-bottom: 15px;
}
.hf-industry-content h3 {
    font-size: 28px;
    color: #212384;
    margin-bottom: 15px;
    font-weight: 700;
}
.hf-industry-content p {
    color: #555;
    line-height: 1.8;
    margin-bottom: 20px;
}
.hf-industry-icon {
    flex: 1;
    text-align: center;
}
.hf-industry-icon i {
    font-size: 150px;
    color: #f0f0f0;
    transition: 0.3s;
}
.hf-industry-row:hover .hf-industry-icon i {
    color: #f37021;
    transform: scale(1.05);
}
@media(max-width:992px){
    .hf-industry-row { flex-direction: column !important; }
}
</style>

<section class="hf-industry-solutions-section">
    <div class="hf-industry-container">
        <h2 class="section-heading">Industry-Specific Solutions With <span>Isolation Transformer</span></h2>
        
        <div class="hf-industry-zigzag">
            <div class="hf-industry-row">
                <div class="hf-industry-content">
                    <span class="hf-industry-tag">Healthcare</span>
                    <h3>Online UPS with Isolation Transformer for Hospital</h3>
                    <p>Ensures uninterrupted and safe power for life-support systems, MRI, CT scanners, and critical care equipment with complete galvanic isolation.</p>
                </div>
                <div class="hf-industry-icon">
                    <i class="fas fa-hospital"></i>
                </div>
            </div>
            
            <div class="hf-industry-row reverse">
                <div class="hf-industry-content">
                    <span class="hf-industry-tag">Data Center</span>
                    <h3>Online UPS with Isolation Transformer for Data Center</h3>
                    <p>Protects servers, storage, and network infrastructure from electrical noise, surges, and ground loops with isolation transformer technology.</p>
                </div>
                <div class="hf-industry-icon">
                    <i class="fas fa-database"></i>
                </div>
            </div>
            
            <div class="hf-industry-row">
                <div class="hf-industry-content">
                    <span class="hf-industry-tag">Industrial</span>
                    <h3>Online UPS with Isolation Transformer for CNC Machine</h3>
                    <p>Provides clean, isolated power for precision CNC machines, industrial automation, and control systems.</p>
                </div>
                <div class="hf-industry-icon">
                    <i class="fas fa-industry"></i>
                </div>
            </div>
        </div>
    </div>
</section>






















<!-- ========== CONCLUSION - UPDATED HTML & CSS ========== -->
<style>
.hf-conclusion-section {
    color: #333;
    line-height: 1.5;
    padding: 0 60px;
    text-align: left;
    font-size: 20px;
}
.hf-conclusion-section h2 {
    font-size: 28px;
    font-weight: bold;
    color: #f37021;
    margin-bottom: 20px;
    text-align: center;
}
.hf-conclusion-section p {
    font-size: 16px;
    margin-bottom: 18px;
}
.hf-conclusion-section strong {
    color: #f37021;
    font-weight: bold;
}
</style>

<section class="hf-conclusion-section">
    <h2>Conclusion</h2>
    <p>
        An <strong>Offline UPS</strong> is a dependable, efficient, and economical power backup solution for a wide range of applications. From homes and offices to lifts, petrol pumps, and commercial establishments, an <strong>Offline UPS</strong> system ensures uninterrupted power during outages while maintaining battery readiness through automatic charging.
    </p>
    <p>
        With advanced DSP control, pure sine wave output, comprehensive protection features, and customizable specifications, <strong>INDUS Offline UPS</strong> stands out as a reliable choice for both residential and commercial power backup needs.
    </p>
    <p>
        If you are looking for a <strong>high-efficiency Offline UPS power backup solution</strong>, INDUS Offline UPS delivers performance, safety, and peace of mind—power you can trust when it matters most.
    </p>
</section>
<!-- Original text content is preserved but redesigned in the sections above -->
<!-- All headings use .section-heading class as required -->

<?php include('footer.php'); ?>

</body>
</html>