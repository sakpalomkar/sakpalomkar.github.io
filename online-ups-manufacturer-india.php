<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Indusups · Online UPS (redesigned)</title>
<!-- Google Font & Font Awesome (exactly as in new design) -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat'
  }

  body {
    font-family: 'Montserrat'

  }

  /* ---------- hero banner (from new code) renamed but identical ---------- */
  .premium-hero-display {
    position: relative;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    overflow: hidden;
    color: #fff;
  }
  .premium-hero-display::before {
    content: "";
    position: absolute;
    inset: 0;
    background: url("img/about\ us.jpg") center/cover no-repeat;
    filter: brightness(0.55);
    transform: scale(1.1);
    animation: zoomEffect 10s ease-in-out infinite alternate;
  }
  .premium-hero-display::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.24));
  }
  .premium-hero-wrapper {
    position: relative;
    z-index: 2;
  }
  .premium-hero-wrapper h1 {
    font-size: 48px;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 15px;
    animation: slideDown 1s ease forwards;
  }
  .premium-breadcrumb-trail {
    font-size: 18px;
    font-weight: 400;
    animation: fadeUp 1.2s ease forwards;
  }
  .premium-breadcrumb-trail a {
    color: #fff;
    text-decoration: none;
    transition: 0.3s;
  }
  .premium-breadcrumb-trail a:hover {
    color: #ff5e00;
  }
  .premium-breadcrumb-trail span {
    color: #ff5e00;
    font-weight: 600;
    margin-left: 5px;
  }
  @keyframes slideDown {
    from { opacity:0; transform:translateY(-40px); }
    to { opacity:1; transform:translateY(0); }
  }
  @keyframes fadeUp {
    from { opacity:0; transform:translateY(30px); }
    to { opacity:1; transform:translateY(0); }
  }
  @keyframes zoomEffect {
    from { transform:scale(1.1); }
    to { transform:scale(1); }
  }
  @media(max-width:768px){
    .premium-hero-wrapper h1 { font-size:36px; }
    .premium-breadcrumb-trail { font-size:15px; }
  }

  /* ---------- product gallery (exactly from new design) ---------- */
  .tech-product-gallery {
    width:100%;
    padding:40px 8%;
    text-align:center;
    position:relative;
    overflow:hidden;
  }
  .tech-product-gallery::before {
    content:"";
    position:absolute;
    width:100%;
    height:100%;
    top:0; left:0;
    animation: gradientMove 12s ease infinite;
    z-index:0;
  }
  @keyframes gradientMove {
    0%{background-position:0% 50%;}
    50%{background-position:100% 50%;}
    100%{background-position:0% 50%;}
  }
  .tech-image-holder {
    position:relative;
    z-index:1;
    display:flex;
    justify-content:center;
    gap:30px;
    flex-wrap:wrap;
    margin-bottom:30px;
  }
  .tech-display-image {
    width:300px;
    cursor:pointer;
    border-radius:20px;
    transform:translateY(60px);
    opacity:0;
    animation: fadeUp 1.2s ease forwards;
    transition:0.4s ease;
  }
  .tech-display-image:hover {
    transform:translateY(0) scale(1.05) rotateX(5deg);
  }
  @keyframes fadeUp { to { transform:translateY(0); opacity:1; } }
  .tech-action-panel {
    position:relative;
    z-index:1;
    display:flex;
    justify-content:center;
    gap:40px;
    flex-wrap:wrap;
  }
  .tech-cta-button {
    position:relative;
    padding:16px 45px;
    font-size:16px;
    font-weight:600;
    text-decoration:none;
    color:#f37021;
    border-radius:50px;
    background:#fff;
    overflow:hidden;
    transition:0.4s ease;
    letter-spacing:1px;
  }
  .tech-cta-button::before {
    content:"";
    position:absolute;
    inset:0;
    border-radius:50px;
    padding:2px;
    background: linear-gradient(90deg,#f37021,#212384,#f37021);
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor; mask-composite: exclude;
    animation: borderMove 4s linear infinite;
  }
  @keyframes borderMove {
    0%{background-position:0%;}
    100%{background-position:200%;}
  }
  .tech-cta-button:hover {
    background:#f37021; color:#fff; box-shadow:0 15px 40px rgba(243,112,33,0.4); transform:translateY(-5px);
  }
  /* lightbox */
  .tech-lightbox-popup {
    position:fixed; inset:0; background:rgba(0,0,0,0.88); display:flex; align-items:center; justify-content:center;
    opacity:0; visibility:hidden; transition:0.4s ease; z-index:9999;
  }
  .tech-lightbox-popup.active { opacity:1; visibility:visible; }
  .tech-lightbox-popup img { max-width:90%; max-height:90%; border-radius:20px; box-shadow:0 30px 60px rgba(0,0,0,0.5); animation:zoomIn 0.4s ease; }
  @keyframes zoomIn { from{transform:scale(0.8);} to{transform:scale(1);} }
  .tech-close-icon {
    position:absolute; top:35px; right:45px; width:55px; height:55px; border-radius:50%;
    backdrop-filter:blur(12px); background:rgba(255,255,255,0.15); border:1px solid rgba(255,255,255,0.3);
    display:flex; align-items:center; justify-content:center; cursor:pointer; transition:all 0.4s ease;
    box-shadow:0 10px 30px rgba(0,0,0,0.3);
  }
  .tech-close-icon span { position:absolute; width:22px; height:2px; background:#fff; transition:0.4s ease; }
  .tech-close-icon span:nth-child(1) { transform:rotate(45deg); }
  .tech-close-icon span:nth-child(2) { transform:rotate(-45deg); }
  .tech-close-icon:hover { transform:scale(1.15) rotate(180deg); background:linear-gradient(135deg,#f37021,#212384); }

  /* ---------- key benefits timeline (exact from new design) ---------- */
  .indus-section-heading {
    text-align: center;
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 70px;
    color: #1e2a78;
    letter-spacing: 1px;
  }
  .indus-section-heading span {
    color: #f37021;
    position: relative;
    display: inline-block;
  }
  .indus-section-heading span::after {
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
  @keyframes underline { from { width: 0; } to { width: 100%; } }
  .indus-benefits-section {
    padding: 30px 8%;
    position: relative;
  }
  .indus-benefits-container { max-width:1100px; margin:auto; }
  .indus-timeline-wrapper {
    position: relative;
    margin-left: 30px;
  }
  .indus-timeline-wrapper::before {
    content: "";
    position: absolute;
    left: 0;
    top: -13px;
    width: 4px;
    height: 100%;
    background: linear-gradient(to bottom, #f37021, #212384);
    border-radius: 20px;
  }
  .indus-timeline-item {
    position: relative;
    padding-left: 60px;
    margin-bottom: 45px;
    opacity: 0;
    transform: translateX(-40px);
    animation: slideRight 0.8s ease forwards;
  }
  .indus-timeline-item:nth-child(1){animation-delay:0.2s;}
  .indus-timeline-item:nth-child(2){animation-delay:0.4s;}
  .indus-timeline-item:nth-child(3){animation-delay:0.6s;}
  .indus-timeline-item:nth-child(4){animation-delay:0.8s;}
  .indus-timeline-item:nth-child(5){animation-delay:1s;}
  .indus-timeline-item:nth-child(6){animation-delay:1.2s;}
  .indus-timeline-item:nth-child(7){animation-delay:1.4s;}
  .indus-timeline-marker {
    position: absolute;
    left: -12px;
    top: 5px;
    width: 28px;
    height: 28px;
    background: linear-gradient(135deg, #f37021, #ff9a50);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 14px;
    font-weight: bold;
    box-shadow: 0 6px 15px rgba(243,112,33,0.4);
    transition: 0.4s ease;
  }
  .indus-timeline-description {
    background: #ffffff;
    padding: 20px 25px;
    border-radius: 14px;
    border-left: 4px solid #212384;
    box-shadow: 0 10px 25px rgba(33,35,132,0.08);
    transition: all 0.4s ease;
  }
  .indus-timeline-description p { margin:0; font-size:17px; color:#333; line-height:1.6; }
  .indus-timeline-item:hover .indus-timeline-description { transform:translateX(8px); box-shadow:0 15px 35px rgba(243,112,33,0.15); }
  .indus-timeline-item:hover .indus-timeline-marker { transform:scale(1.15); background:linear-gradient(135deg,#212384,#f37021); }
  @keyframes slideRight { to { opacity:1; transform:translateX(0); } }

  /* ---------- master wrapper & section blocks (new design core) ---------- */
  .master-wrapper {
    max-width: 1300px;
    margin: 2rem auto;
    padding: 0 20px;
  }

  .section-block {
    margin-bottom: 3.5rem;
    border-radius: 2.5rem;
    background: white;
    box-shadow: 0 20px 35px -10px rgba(33, 35, 132, 0.15);
    transition: all 0.2s ease;
  }
  .section-inner {
    padding: 2.5rem 2.8rem;
    overflow: hidden;
    position: relative;
  }

  /* section type decorations (all 8 types used exactly as in new design) */
  .section-type-1 { border-left: 8px solid #f37021; border-radius: 3rem 3rem 3rem 0.5rem; animation: popFade 1s ease; }
  @keyframes popFade { 0% { opacity: 0; transform: scale(0.96) translateY(25px); } 100% { opacity: 1; transform: scale(1) translateY(0); } }
  .section-type-2 { border: 2px dashed #212384; border-radius: 5rem 0.5rem 5rem 0.5rem; background: linear-gradient(145deg, #ffffff, #fafbff); animation: slideRibbon 1s; }
  @keyframes slideRibbon { 0% { clip-path: inset(0 0 100% 0); opacity: 0; } 100% { clip-path: inset(0 0 0 0); opacity: 1; } }
  .section-type-3 { border-radius: 6rem 2rem 6rem 2rem; box-shadow: 0 25px 40px -15px #f3702166, 0 8px 15px -8px #21238433; animation: glowPulse 5s infinite alternate; }
  @keyframes glowPulse { 0% { box-shadow: 0 25px 40px -15px #f3702166, 0 8px 15px -8px #21238433; } 100% { box-shadow: 0 30px 55px -12px #f37021cc, 0 12px 28px -12px #21238499; } }
  .section-type-4 { background: white; border-top: 6px solid #212384; border-bottom: 6px solid #f37021; border-radius: 3rem 0.2rem 3rem 0.2rem; animation: slideUp 0.9s; }
  @keyframes slideUp { 0% { transform: translateY(50px); opacity: 0; } 100% { transform: translateY(0); opacity: 1; } }
  .section-type-5 { background-image: radial-gradient(circle at 10px 10px, #f3702110 3px, transparent 3px); background-size: 30px 30px; border-radius: 100px 10px 100px 10px; border: 3px dotted #212384; animation: backgroundMove 18s linear infinite; }
  @keyframes backgroundMove { 0% { background-position: 0 0; } 100% { background-position: 60px 60px; } }
  .section-type-6 { border-radius: 0 4rem 0 4rem; background: #ffffff; box-shadow: -20px 20px 0 #21238415, 20px -20px 0 #f3702115; animation: cornerReveal 1.1s; }
  @keyframes cornerReveal { 0% { box-shadow: -20px 20px 0 transparent, 20px -20px 0 transparent; opacity: 0.7; } 100% { box-shadow: -20px 20px 0 #21238415, 20px -20px 0 #f3702115; opacity: 1; } }
  .section-type-7 { background: linear-gradient(130deg, #ffffff 60%, #f9f3ff); border-radius: 2rem 2rem 2rem 2rem; position: relative; animation: wave 1.5s; }
  .section-type-7::after { content: ''; position: absolute; bottom: 0; right: 0; width: 180px; height: 180px; background: radial-gradient(circle at 100% 100%, #f3702130, transparent 70%); pointer-events: none; }
  @keyframes wave { 0% { clip-path: polygon(0 0, 100% 0, 100% 0, 0 0); } 100% { clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%); } }
  .section-type-8 { border: 4px double #212384; background: #ffffff; border-radius: 5rem 0 5rem 0; animation: gridAppear 1.2s; }
  @keyframes gridAppear { 0% { transform: rotateX(15deg) translateY(40px); opacity: 0; } 100% { transform: rotateX(0) translateY(0); opacity: 1; } }

  /* headings and inline styles from new design */
  h2.text2 {
    font-size: 2.8rem;
    font-weight: 800;
    background: linear-gradient(135deg, #212384, #f37021);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 1.5rem;
    letter-spacing: -0.02em;
  }
  h3.battery {
    font-size: 2.2rem;
    font-weight: 700;
    color: #212384;
    border-left: 10px solid #f37021;
    padding-left: 1.5rem;
    margin: 2rem 0 1.2rem;
    transition: 0.3s;
  }
  p.text {
    font-size: 1.35rem;
    font-weight: 600;
    background: #2123840c;
    display: inline-block;
    padding: 0.2rem 2rem 0.2rem 1.5rem;
    border-radius: 40px;
    border-left: 5px solid #f37021;
  }
  .icon-bullet {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 6px;
    width: 100%;
    font-size: 1.1rem;
  }
  .icon-bullet i {
    color: #f37021;
    font-size: 1.3rem;
    min-width: 28px;
    text-align: center;
  }
  .list-column { line-height: 2.2; }

  /* fancy table */
  .fancy-table {
    border-collapse: separate;
    border-spacing: 0 6px;
    width: 100%;
    margin: 2rem 0;
  }
  .fancy-table th {
    background: #212384;
    color: white;
    font-size: 1.3rem;
    font-weight: 600;
    padding: 1rem;
    border-radius: 30px 30px 10px 10px;
  }
  .fancy-table td {
    background: #f8f9ff;
    padding: 1rem 1.5rem;
    border-radius: 20px;
    box-shadow: 0 5px 10px -5px #21238420;
    font-weight: 500;
  }
  .fancy-table td:first-child {
    background: #21238410;
    color: #212384;
    font-weight: 700;
  }

  /* tech cards */
  .tech-card-1 { background: #fff4ea; border-radius: 30px 10px 30px 10px; padding: 1.8rem 1rem; border-bottom: 5px solid #f37021; transition: 0.3s; }
  .tech-card-2 { background: #eaedff; border-radius: 10px 30px 10px 30px; padding: 1.8rem 1rem; border-left: 6px solid #212384; }
  .tech-card-3 { background: white; border: 3px dotted #212384; border-radius: 40px 0 40px 0; padding: 1.8rem 1rem; box-shadow: 0 0 0 3px #f3702130; }

  .row { display: flex; flex-wrap: wrap; gap: 20px; }
  .col-md-4 { flex: 1 1 30%; min-width: 250px; }
  .col-md-6 { flex: 1 1 45%; min-width: 240px; }
  .col-6 { width: 50%; }

  @media (max-width:768px) {
    .section-inner { padding:1.8rem; }
    h2.text2 { font-size:2.2rem; }
  }
  /* force strong/orange */
  .section-inner b, .section-inner strong { color: #f37021; font-weight: 700; }
</style>
</head>
<body>

<?php include('navbar.php'); ?>

<!-- HERO (new design) -->
<section class="premium-hero-display">
  <div class="premium-hero-wrapper">
    <h1>Online UPS Manufacturer India</h1>
    <div class="premium-breadcrumb-trail">
      <a href="#">Home</a> &nbsp;»&nbsp; <a href="#">Products</a> &nbsp;»&nbsp; <span>Online UPS</span>
    </div>
  </div>
</section>

<!-- Product gallery (new design with 3 images) -->
<section class="tech-product-gallery">
  <div class="tech-image-holder">
    <img src="img/online1.png" class="tech-display-image" alt="">
    <img src="img/online2.png" class="tech-display-image" alt="">
    <img src="img/online3.png" class="tech-display-image" alt="">
  </div>
  <div class="tech-action-panel">
    <a href="#" class="tech-cta-button">DOWNLOAD BROCHURE</a>
    <a href="#" class="tech-cta-button">ENQUIRE NOW</a>
  </div>
</section>

<!-- Lightbox (same) -->
<div class="tech-lightbox-popup" id="imageLightbox">
  <div class="tech-close-icon" id="closeLightbox"><span></span><span></span></div>
  <img src="img/online1.png" alt="UPS">
</div>

<script>
  const images = document.querySelectorAll(".tech-display-image");
  const lb = document.getElementById("imageLightbox");
  const lbImg = lb.querySelector("img");
  const closeLb = document.getElementById("closeLightbox");
  images.forEach(img => {
    img.addEventListener("click", ()=>{
      lb.classList.add("active");
      lbImg.src = img.src;
    });
  });
  closeLb.addEventListener("click", (e)=>{ e.stopPropagation(); lb.classList.remove("active"); });
  lb.addEventListener("click", ()=>{ lb.classList.remove("active"); });
</script>











<!-- Online UPS Info Section Start -->
<style>
.indus-online-info{
    padding:40px 5%;
    position:relative;
    overflow:hidden;
}

.indus-online-info::before,
.indus-online-info::after{
    content:"";
    position:absolute;
    border-radius:50%;
    opacity:0.1;
    z-index:0;
}

.indus-online-info::before{
    width:400px;
    height:400px;
    background: linear-gradient(135deg,#212384,#f37021);
    top:-100px;
    right:-150px;
    animation: floatShape 8s ease-in-out infinite alternate;
}

.indus-online-info::after{
    width:300px;
    height:300px;
    background: linear-gradient(135deg,#f37021,#212384);
    bottom:-80px;
    left:-120px;
    animation: floatShape 10s ease-in-out infinite alternate-reverse;
}

.indus-online-grid{
    display:grid;
    grid-template-columns: repeat(auto-fit,minmax(320px,1fr));
    gap:40px;
    position:relative;
    z-index:1;
}

.indus-online-heading{
    text-align:center;
    font-size:42px;
    font-weight:700;
    margin-bottom:40px;
    color:#1e2a78;
    letter-spacing:1px;
}

.indus-online-heading span{
    color:#f37021;
    position:relative;
}

.indus-online-heading span::after{
    content:'';
    position:absolute;
    width:100%;
    height:4px;
    background:#f37021;
    bottom:-10px;
    left:0;
    border-radius:5px;
    animation: underline 2s infinite alternate;
}

@keyframes underline{
    from{ width:0; }
    to{ width:100%; }
}

.indus-online-card{
    background:#ffffff;
    padding:35px 30px;
    border-radius:25px;
    box-shadow:0 15px 35px rgba(0,0,0,0.08);
    position:relative;
    overflow:hidden;
    border:2px solid #f37021;
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}

.indus-online-card:hover{
    transform: translateY(-10px) scale(1.04);
    box-shadow:0 25px 50px rgba(0,0,0,0.15);
    border-color:#212384;
}

.indus-online-card p{
    font-size:17px;
    line-height:1.7;
    color:#000;
    margin:0;
    text-align:justify;
}

.indus-online-card strong{
    color:#212384;
}

@keyframes floatShape{
    0%{transform: translateY(0);}
    100%{transform: translateY(20px);}
}

@media(max-width:992px){
    .indus-online-heading{
        font-size:28px;
    }
}
</style>

<section class="indus-online-info">

<h2 class="indus-online-heading">
Reliable Power Backup with Online UPS for <span> Critical Applications</span>
</h2>

<div class="indus-online-grid">

<div class="indus-online-card">
<p>
In today's digital and industrial era, uninterrupted power is no longer optional—it is a necessity. From hospitals and data centers to manufacturing plants and research laboratories, businesses rely heavily on a stable and continuous power supply to ensure smooth operations.
</p>
</div>

<div class="indus-online-card">
<p>
Even a brief power interruption or voltage fluctuation can cause equipment damage, data loss, operational downtime, and significant financial losses. This makes reliable power backup systems essential for modern infrastructure.
</p>
</div>

<div class="indus-online-card">
<p>
An Online UPS system ensures continuous, clean, and regulated power to sensitive and mission-critical equipment. At Indus Power Industries Pvt. Ltd., we provide high-performance Online UPS power backup solutions designed for industrial, commercial, and institutional applications.
</p>
</div>

</div>
</section>
<!-- Online UPS Info Section End -->















<!-- Key Benefits Timeline (exact copy from new design, but with online ups text) -->
<section class="indus-benefits-section">
  <div class="indus-benefits-container">
    <h2 class="indus-section-heading">Key Benefits of <span>Online UPS</span></h2>
    <div class="indus-timeline-wrapper">
      <div class="indus-timeline-item"><div class="indus-timeline-marker">✓</div><div class="indus-timeline-description"><p>Cost-effective power backup solution</p></div></div>
      <div class="indus-timeline-item"><div class="indus-timeline-marker">✓</div><div class="indus-timeline-description"><p>High efficiency with minimal power loss</p></div></div>
      <div class="indus-timeline-item"><div class="indus-timeline-marker">✓</div><div class="indus-timeline-description"><p>Simple and robust design</p></div></div>
      <div class="indus-timeline-item"><div class="indus-timeline-marker">✓</div><div class="indus-timeline-description"><p>Low maintenance requirements</p></div></div>
      <div class="indus-timeline-item"><div class="indus-timeline-marker">✓</div><div class="indus-timeline-description"><p>Fast changeover during power failure</p></div></div>
      <div class="indus-timeline-item"><div class="indus-timeline-marker">✓</div><div class="indus-timeline-description"><p>Compatible with various battery types</p></div></div>
      <div class="indus-timeline-item"><div class="indus-timeline-marker">✓</div><div class="indus-timeline-description"><p>Ideal for residential and commercial use</p></div></div>
    </div>
  </div>
</section>




















<!-- what is an online ups start -->
 <style>    
        /* --- base style exactly matching the given .indus-clean-section --- */
        .indus-clean-section {
            padding: 30px 20px;
            color: #212384;
            position: relative;
            overflow: hidden;
            border-radius: 15px;
        }

        /* floating shapes (exact same) */
        .indus-clean-section::before,
        .indus-clean-section::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            z-index: 1;
            opacity: 0.08;
            animation: floatShapes 15s infinite ease-in-out;
        }

        .indus-clean-section::before {
            width: 300px;
            height: 300px;
            top: -100px;
            left: -100px;
            background: #f37021;
        }

        .indus-clean-section::after {
            width: 400px;
            height: 400px;
            bottom: -150px;
            right: -150px;
            background: #212384;
            animation-delay: 5s;
        }

        @keyframes floatShapes {
            0%, 100% { transform: translateY(0) translateX(0); }
            25% { transform: translateY(20px) translateX(-10px); }
            50% { transform: translateY(-20px) translateX(20px); }
            75% { transform: translateY(10px) translateX(-20px); }
        }

        .indus-clean-container {
            max-width: 1000px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .indus-section-heading {
            text-align: center;
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 70px;
            color: #1e2a78;
            letter-spacing: 1px;
        }

        .indus-section-heading span {
            color: #f37021;
            position: relative;
            display: inline-block;
        }

        .indus-section-heading span::after {
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

        .indus-clean-section p {
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 20px;
            color: #000000;
            text-align: justify;
        }

        .indus-clean-section h3 {
            font-size: 1.8rem;
            color: #212384;
            margin: 30px 0 20px;
            font-weight: 600;
        }

        /* STEPS LIST – same exact hover & popup animation + shine */
        .indus-steps-list {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            margin: 30px 0 40px;
            list-style: none;
            padding-left: 0;
            justify-content: center;
        }

        .indus-steps-list li {
            flex: 1 1 calc(50% - 25px);
            min-width: 280px;
            padding: 25px;
            border-radius: 18px;
            background: #ffffff;
            border: 2px solid #212384;
            box-shadow: 0 15px 35px rgba(33, 35, 132, 0.12);
            position: relative;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            cursor: pointer;
            overflow: hidden;
        }

        /* Hover Popup Animation */
        .indus-steps-list li:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 30px 50px rgba(243, 112, 33, 0.25);
            border-color: #212384;
            background: linear-gradient(145deg, #ffffff, #fff8f0);
            border: 2px solid #f37021;
        }

        /* Ripple effect on hover */
        .indus-steps-list li::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(243, 112, 33, 0.1);
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
            z-index: 0;
        }

        .indus-steps-list li:hover::before {
            width: 300px;
            height: 300px;
        }

        /* Glowing border effect */
        .indus-steps-list li::after {
            content: '';
            position: absolute;
            inset: -2px;
            border-radius: 20px;
            opacity: 0;
            transition: opacity 0.4s ease;
            z-index: -2;
        }

        .indus-steps-list li:hover::after {
            opacity: 1;
            animation: borderGlow 1.5s infinite linear;
        }

        @keyframes borderGlow {
            0% { filter: blur(5px); }
            50% { filter: blur(8px); }
            100% { filter: blur(5px); }
        }

        /* Step number highlight with animation */
        .indus-steps-list li strong {
            display: block;
            margin-bottom: 12px;
            font-size: 1.2rem;
            color: #212384;
            font-weight: 700;
            position: relative;
            z-index: 1;
            transition: all 0.3s ease;
        }

        .indus-steps-list li:hover strong {
            color: #f37021;
            transform: translateX(5px);
        }

        /* Step description text */
        .indus-steps-list li {
            font-size: 1.1rem;
            color: #000000;
            line-height: 1.6;
            position: relative;
            z-index: 1;
        }

        /* Pop animation for text on hover */
        .indus-steps-list li:hover {
            color: #212384;
        }

        /* shine effect */
        .indus-steps-list li {
            overflow: hidden;
        }

        .indus-steps-list li .shine-effect {
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent 30%,
                rgba(255, 255, 255, 0.1) 50%,
                transparent 70%
            );
            transform: rotate(45deg);
            animation: shine 3s infinite;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .indus-steps-list li:hover .shine-effect {
            opacity: 1;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) rotate(45deg); }
            20% { transform: translateX(100%) rotate(45deg); }
            100% { transform: translateX(100%) rotate(45deg); }
        }

        /* Pulse animation for icons (if you add icons later) */
        .indus-steps-list li i {
            transition: transform 0.3s ease;
        }

        .indus-steps-list li:hover i {
            transform: scale(1.2) rotate(5deg);
            color: #f37021;
        }

        /* Counter animation for step numbers */
        @keyframes counterPop {
            0% { transform: scale(1); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }

        .indus-steps-list li:hover strong {
            animation: counterPop 0.6s ease;
        }

        /* Responsive */
        @media(max-width:768px){
            .indus-clean-section {
                padding: 20px 15px;
            }
            
            .indus-clean-section h2 {
                font-size: 2rem;
            }
            
            .indus-clean-section h3 {
                font-size: 1.6rem;
                margin: 25px 0 15px;
            }
            
            .indus-steps-list {
                gap: 15px;
            }
            
            .indus-steps-list li {
                flex: 1 1 100%;
                min-width: auto;
                padding: 20px;
            }
            
            .indus-steps-list li:hover {
                transform: translateY(-10px) scale(1.01);
            }
            
            .indus-section-heading {
                font-size: 32px;
            }
        }

        @media(max-width:480px){
            .indus-clean-section h2 {
                font-size: 1.8rem;
            }
            
            .indus-clean-section h3 {
                font-size: 1.4rem;
            }
            
            .indus-section-heading {
                font-size: 28px;
            }
            
            .indus-steps-list li strong {
                font-size: 1.1rem;
            }
            
            .indus-steps-list li {
                font-size: 1rem;
                padding: 18px;
            }
            
            .indus-steps-list li:hover {
                transform: translateY(-8px) scale(1.01);
            }
        }
    </style>

    <!-- section built exactly with the same design, but content about ONLINE UPS (from image.png) -->
    <section class="indus-clean-section">
        <div class="indus-clean-container">
            <h2 class="indus-section-heading">
                What Is an <span>Online UPS?</span>
            </h2>
            
            <!-- first paragraph: double-conversion & isolation (image content) -->
            <p>An <strong>Online UPS (Uninterruptible Power Supply)</strong> operates on true double-conversion technology. In an Online UPS system, the connected load is continuously powered by the inverter, not directly from the mains supply. This means the output remains completely isolated from fluctuations, surges, noise, and interruptions in the input power.</p>

            <!-- second paragraph: zero transfer time (image content) -->
            <p>Unlike conventional power backup systems, an <strong>Online UPS provides zero transfer time</strong>, ensuring uninterrupted power even during sudden power failures.</p>

            <h3>How an Online UPS Works</h3>
            
            <!-- steps describing online ups operation – created to match the offline structure but technically accurate for online double-conversion -->
            <ul class="indus-steps-list">
                <li>
                    <strong>1. Normal mode – double conversion</strong> - AC mains → rectifier → DC → inverter → AC (load always powered by inverter)
                    <div class="shine-effect"></div>
                </li>
                <li>
                    <strong>2. Mains disturbance / failure</strong> - Rectifier stops, but battery immediately feeds inverter (no transfer time)
                    <div class="shine-effect"></div>
                </li>
                <li>
                    <strong>3. Battery backup mode</strong> - Battery supplies DC to inverter, output remains pure sine wave, zero break
                    <div class="shine-effect"></div>
                </li>
                <li>
                    <strong>4. Mains restored / bypass (if needed)</strong> - Rectifier recharges battery & powers inverter; static bypass can operate during overload
                    <div class="shine-effect"></div>
                </li>
            </ul>

            <p>This operating principle makes the <strong>online UPS system</strong> ideal for critical loads like servers, medical equipment, and industrial processes where even milliseconds of disruption are unacceptable. The double-conversion topology guarantees perfect isolation and stable output regardless of input quality.</p>
        </div>
    </section>
<!-- what is an online ups End -->
















<!-- why online ups Start -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

.zigzag-section{
padding:100px 20px;
font-family:'Montserrat',sans-serif;
}

.zigzag-container{
max-width:1100px;
margin:auto;
}

/* title */

.zigzag-title{
text-align:center;
margin-bottom:80px;
}

.zigzag-title h2{
font-size:42px;
font-weight:700;
color:#212384;
}

.zigzag-title span{
color:#f37021;
}

.zigzag-title p{
margin-top:15px;
color:#555;
font-size:17px;
max-width:700px;
margin-left:auto;
margin-right:auto;
}

/* timeline */

.zigzag-timeline{
position:relative;
}

/* center line */

.zigzag-timeline::before{
content:"";
position:absolute;
left:50%;
top:0;
height:100%;
width:4px;
background:linear-gradient(#212384,#f37021);
transform:translateX(-50%);
}

/* item */

.zigzag-item{
position:relative;
width:50%;
padding:40px 60px;
opacity:0;
transform:translateY(40px);
animation:fadeUp 1s forwards;
}

/* alternating sides */

.zigzag-item:nth-child(odd){
left:0;
text-align:right;
}

.zigzag-item:nth-child(even){
left:50%;
}

/* animation delay */

.zigzag-item:nth-child(1){animation-delay:.2s;}
.zigzag-item:nth-child(2){animation-delay:.4s;}
.zigzag-item:nth-child(3){animation-delay:.6s;}
.zigzag-item:nth-child(4){animation-delay:.8s;}
.zigzag-item:nth-child(5){animation-delay:1s;}
.zigzag-item:nth-child(6){animation-delay:1.2s;}

/* icon - FIXED CENTER POSITION */

.zigzag-icon{
position:absolute;
top:80px;
left:100%;
margin-left:-32px;
width:65px;
height:65px;
background:#f37021;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
color:#fff;
font-size:24px;
box-shadow:0 10px 25px rgba(243,112,33,.5);
z-index:2;
}

/* icon for right side */

.zigzag-item:nth-child(even) .zigzag-icon{
left:0;
margin-left:-32px;
}

/* card */

.zigzag-card{
background:#fff;
padding:26px;
border-radius:14px;
border:1px solid #eee;
box-shadow:0 12px 35px rgba(0,0,0,0.08);
transition:.4s;
}

/* hover */

.zigzag-card:hover{
transform:translateY(-8px);
border-color:#f37021;
box-shadow:0 20px 45px rgba(0,0,0,0.15);
}

/* text */

.zigzag-card h4{
font-size:19px;
color:#212384;
margin-bottom:8px;
}

.zigzag-card p{
color:#000000;
font-size:15px;
line-height:1.6;
}

/* animation */

@keyframes fadeUp{
to{
opacity:1;
transform:translateY(0);
}
}

/* responsive */

@media(max-width:900px){

.zigzag-timeline::before{
left:35px;
}

.zigzag-item{
width:100%;
padding-left:90px;
padding-right:20px;
text-align:left !important;
}

.zigzag-item:nth-child(even){
left:0;
}

.zigzag-icon{
left:35px;
margin-left:0;
}

}

</style>


<section class="zigzag-section">

<div class="zigzag-container">

<div class="zigzag-title">
<h2 class="indus-section-heading">
                Why Online UPS <span>Is Essential</span>
            </h2>

<p>Reliable power backup solutions for mission-critical applications.</p>
</div>


<div class="zigzag-timeline">

<div class="zigzag-item">

<div class="zigzag-icon">
<i class="fas fa-stopwatch"></i>
</div>

<div class="zigzag-card">
<h4>Zero Transfer Time</h4>
<p>The load never notices the transition during power failure due to true online double conversion.</p>
</div>

</div>


<div class="zigzag-item">

<div class="zigzag-icon">
<i class="fas fa-shield-alt"></i>
</div>

<div class="zigzag-card">
<h4>Complete Isolation</h4>
<p>Protects equipment from mains disturbances, frequency variations and electrical noise.</p>
</div>

</div>


<div class="zigzag-item">

<div class="zigzag-icon">
<i class="fas fa-bolt"></i>
</div>

<div class="zigzag-card">
<h4>Stable Voltage & Frequency</h4>
<p>Provides regulated pure sine wave output independent of incoming power quality.</p>
</div>

</div>


<div class="zigzag-item">

<div class="zigzag-icon">
<i class="fas fa-wave-square"></i>
</div>

<div class="zigzag-card">
<h4>Protection from Surges</h4>
<p>Complete power conditioning ensures spikes, harmonics and noise never reach the load.</p>
</div>

</div>


<div class="zigzag-item">

<div class="zigzag-icon">
<i class="fas fa-award"></i>
</div>

<div class="zigzag-card">
<h4>High Reliability</h4>
<p>Ideal for servers, hospitals, and industrial automation systems.</p>
</div>

</div>


<div class="zigzag-item">

<div class="zigzag-icon">
<i class="fas fa-infinity"></i>
</div>

<div class="zigzag-card">
<h4>Continuous Operation</h4>
<p>Designed for 24/7 operation with bypass systems and robust thermal management.</p>
</div>

</div>

</div>

</div>

</section>
<!-- why online ups End -->




















<style>
    /* main card – lavish, spacious, refined */
    .ups-card {
      width: 100%;
      padding: 2.8rem 3.2rem;
      transition: transform 0.3s ease, box-shadow 0.4s ease;
      position: relative;
      overflow: hidden;
    }

    /* subtle moving shine / border animation using the two brand colors */
    @keyframes cardGlow {
      0% {
        box-shadow: 
          0 30px 50px -20px rgba(37, 47, 116, 0.2),
          0 0 0 1px rgba(243, 112, 33, 0.1),
          inset 0 0 10px rgba(243, 112, 33, 0.02);
      }
      50% {
        box-shadow: 
          0 35px 58px -18px rgba(243, 112, 33, 0.25),
          0 0 0 2px rgba(37, 47, 116, 0.15),
          inset 0 0 18px rgba(37, 47, 116, 0.03);
      }
      100% {
        box-shadow: 
          0 30px 52px -16px #252f74,
          0 0 0 1px rgba(243, 112, 33, 0.25),
          inset 0 0 20px rgba(243, 112, 33, 0.05);
      }
    }

    

    /* two floating abstract circles (background animation) */
    .ups-card::before {
      content: "";
      position: absolute;
      width: 280px;
      height: 280px;
      background: radial-gradient(circle at 30% 30%, rgba(243, 112, 33, 0.08), transparent 70%);
      top: -120px;
      right: -80px;
      border-radius: 50%;
      z-index: 0;
      animation: floatOrange 12s infinite alternate;
    }

    .ups-card::after {
      content: "";
      position: absolute;
      width: 350px;
      height: 350px;
      background: radial-gradient(circle at 70% 20%, rgba(37, 47, 116, 0.06), transparent 70%);
      bottom: -140px;
      left: -100px;
      border-radius: 50%;
      z-index: 0;
      animation: floatBlue 14s infinite alternate-reverse;
    }

    @keyframes floatOrange {
      0% { transform: translate(0, 0) scale(1); opacity: 0.5; }
      100% { transform: translate(-30px, 30px) scale(1.15); opacity: 0.9; }
    }

    @keyframes floatBlue {
      0% { transform: translate(0, 0) scale(1); opacity: 0.4; }
      100% { transform: translate(40px, -30px) scale(1.2); opacity: 0.8; }
    }

    /* content should appear above the floating orbs */
    .card-content {
      position: relative;
      z-index: 3;
    }

    /* primary heading lavish style */
    .main-heading {
      font-size: 2.2rem;
      font-weight: 700;
      letter-spacing: -0.02em;
      background: linear-gradient(130deg, #252f74 30%, #f37021 80%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 0.6rem;
      display: flex;
      align-items: center;
      gap: 14px;
      border-bottom: 2px dashed rgba(243,112,33,0.3);
      padding-bottom: 0.4rem;
    }

    .main-heading i {
      background: white;
      font-size: 2.4rem;
      color: #f37021;
      text-shadow: 2px 2px 12px rgba(37,47,116,0.2);
      -webkit-text-fill-color: initial; /* override gradient for icon */
      background: none;
      filter: drop-shadow(0 4px 6px rgba(37,47,116,0.2));
    }

    /* sub-line / tagline */
    .trust-tagline {
      font-size: 1.1rem;
      font-weight: 400;
      color: #2c3a6b;
      margin-left: 0.3rem;
      margin-bottom: 2rem;
      display: flex;
      align-items: center;
      gap: 8px;
      flex-wrap: wrap;
    }

    .trust-tagline .badge {
      background: #f37021;
      color: white;
      padding: 0.2rem 1rem;
      border-radius: 40px;
      font-size: 0.85rem;
      font-weight: 600;
      letter-spacing: 0.02rem;
      text-transform: uppercase;
      box-shadow: 0 2px 8px rgba(243,112,33,0.5);
      animation: subtlePulse 3s infinite;
    }

    @keyframes subtlePulse {
      0% { box-shadow: 0 2px 8px rgba(243,112,33,0.3); }
      50% { box-shadow: 0 4px 16px rgba(243,112,33,0.7); }
      100% { box-shadow: 0 2px 8px rgba(243,112,33,0.3); }
    }

    /* introduction paragraph */
    .intro-text {
      font-size: 1.22rem;
      line-height: 1.6;
      color: #1f293d;
      margin-bottom: 2.2rem;
      font-weight: 400;
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(2px);
      padding: 1rem 1.6rem;
      border-radius: 60px 60px 60px 20px;
      border-left: 6px solid #f37021;
      box-shadow: 0 6px 14px rgba(37,47,116,0.08);
      transition: 0.2s;
    }

    .intro-text strong {
      color: #252f74;
      font-weight: 700;
      background: linear-gradient(145deg, #f37021 0%, #f37b3a 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    /* protection grid – lavish card-within-card style */
    .protection-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 1.2rem;
      margin: 2.5rem 0 2rem;
    }

    .grid-item {
      background: rgba(255,255,255,0.8);
      backdrop-filter: blur(6px);
      border-radius: 2rem 1rem 2rem 1rem;
      padding: 1.4rem 0.8rem;
      text-align: center;
      border: 1px solid rgba(243,112,33,0.3);
      box-shadow: 0 10px 18px -8px rgba(37,47,116,0.15);
      transition: all 0.25s ease;
      animation: itemFadeIn 0.6s backwards;
      animation-delay: calc(0.07s * var(--i, 0));
    }

    .grid-item:nth-child(1) { --i: 1; }
    .grid-item:nth-child(2) { --i: 2; }
    .grid-item:nth-child(3) { --i: 3; }
    .grid-item:nth-child(4) { --i: 4; }
    .grid-item:nth-child(5) { --i: 5; }
    .grid-item:nth-child(6) { --i: 6; }

    @keyframes itemFadeIn {
      0% { opacity: 0; transform: translateY(20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .grid-item:hover {
      transform: scale(1.05) translateY(-6px);
      background: white;
      border-color: #f37021;
      box-shadow: 0 20px 25px -12px #252f74;
    }

    /* icon inside grid */
    .grid-item i {
      font-size: 2.1rem;
      background: linear-gradient(145deg, #f37021, #f5924c);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 0.5rem;
      filter: drop-shadow(0 4px 6px rgba(37,47,116,0.2));
    }

    .grid-item span {
      display: block;
      font-weight: 600;
      color: #252f74;
      font-size: 16px;
      letter-spacing: 0.01rem;
    }

    /* bottom row with backup summary & CTA */
    .backup-highlight {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      margin-top: 2rem;
      padding: 1.3rem 1.8rem;
      background: linear-gradient(115deg, rgba(37,47,116,0.03), rgba(243,112,33,0.03));
      border-radius: 50px 20px 50px 20px;
      border: 1px solid rgba(243,112,33,0.25);
      transition: all 0.4s;
      animation: borderGlow 4s infinite alternate;
    }

    @keyframes borderGlow {
      0% { border-color: rgba(243,112,33,0.2); box-shadow: 0 0 0 0 rgba(243,112,33,0.1); }
      100% { border-color: rgba(37,47,116,0.5); box-shadow: 0 0 18px 2px rgba(37,47,116,0.08); }
    }

    .backup-highlight .text-section {
      display: flex;
      align-items: center;
      gap: 16px;
      flex-wrap: wrap;
    }

    .backup-highlight .text-section i {
      font-size: 2.6rem;
      color: #f37021;
      filter: drop-shadow(0 6px 10px #252f7433);
      transition: transform 0.2s;
    }

    .backup-highlight:hover i {
      transform: rotate(5deg) scale(1.05);
    }

    .backup-highlight .text-section p {
      font-size: 1.25rem;
      font-weight: 600;
      color: #252f74;
    }

    .backup-highlight .text-section p small {
      font-weight: 400;
      font-size: 0.95rem;
      color: #4a4f6b;
      display: block;
    }

    .shiny-button {
      background: linear-gradient(125deg, #f37021, #f58233);
      border: none;
      color: white;
      padding: 0.9rem 2rem;
      border-radius: 50px;
      font-weight: 600;
      font-size: 1.05rem;
      letter-spacing: 0.5px;
      box-shadow: 0 10px 20px -5px #f37021, 0 0 0 1px #252f74 inset;
      cursor: default;
      transition: all 0.3s;
      display: inline-flex;
      align-items: center;
      gap: 10px;
      border: 1px solid rgba(255,255,255,0.3);
    }

    .shiny-button i {
      font-size: 1.2rem;
      color: white;
      background: none;
      -webkit-text-fill-color: white;
    }

    .shiny-button:hover {
      background: linear-gradient(125deg, #252f74, #1f285e);
      box-shadow: 0 14px 24px -8px #252f74, 0 0 0 1px #f37021 inset;
      transform: scale(1.02);
    }

    /* equipment failures line */
    .reduction-text {
      margin-top: 2rem;
      font-size: 1.2rem;
      font-style: italic;
      color: #2c3659;
      text-align: right;
      display: flex;
      justify-content: flex-end;
      align-items: center;
      gap: 12px;
      border-top: 1px dashed rgba(243,112,33,0.4);
      padding-top: 1.5rem;
    }

    .reduction-text i {
      color: #f37021;
      font-size: 2rem;
      background: rgba(37,47,116,0.05);
      border-radius: 50%;
      padding: 0.5rem;
    }

    /* responsive touch */
    @media (max-width: 600px) {
      .ups-card { padding: 1.8rem; }
      .main-heading { font-size: 1.8rem; }
      .protection-grid { grid-template-columns: 1fr 1fr; }
      .backup-highlight { flex-direction: column; align-items: flex-start; gap: 1rem; }
    }

    /* extra spark: animated little border */
    .glint {
      position: absolute;
      top: 0;
      left: -100%;
      width: 60px;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(243,112,33,0.2), transparent);
      transform: skewX(-15deg);
      animation: shine 7s infinite;
      z-index: 2;
      pointer-events: none;
    }

    @keyframes shine {
      0% { left: -100%; }
      20% { left: 120%; }
      100% { left: 120%; }
    }
  </style>

  <div class="ups-card">
    <!-- delicate shine line (animation) -->
    <div class="glint"></div>

    <div class="card-content">
      <!-- main heading with icon (lavish) -->
      <h2 class="indus-section-heading">
                Continuous Power Supply <span>Advanced Protection</span>
            </h2>

      <!-- primary description (with bold "Online UPS") -->
      <div class="intro-text">
        <strong>Online UPS</strong> delivers continuous and reliable power under <strong>all</strong> operating conditions.  
        Equipped with advanced protection, it safeguards connected equipment from:
      </div>

      <!-- protection grid (six items with icons) -->
      <div class="protection-grid">
        <div class="grid-item"><i class="fas fa-chart-line"></i><span>Voltage fluctuations</span></div>
        <div class="grid-item"><i class="fas fa-plug"></i><span>Power surges</span></div>
        <div class="grid-item"><i class="fas fa-bolt"></i><span>Short circuits</span></div>
        <div class="grid-item"><i class="fas fa-weight-hanging"></i><span>Overloads</span></div>
        <div class="grid-item"><i class="fas fa-car-battery"></i><span>Battery failures</span></div>
        <div class="grid-item"><i class="fas fa-wave-square"></i><span>Harmonic distortions</span></div>
      </div>

      <!-- stable power / backup solutions section -->
      <div class="backup-highlight">
        <div class="text-section">
          <i class="fas fa-plug"></i>
          <p>
            <strong>Online UPS power backup solutions</strong><br>
            <small>stable, clean, uninterrupted</small>
          </p>
        </div>
        <div class="shiny-button">
          <i class="fas fa-circle-check"></i> zero downtime
        </div>
      </div>

    </div> 
    <!-- end card-content -->
  </div> 
  <!-- end ups-card -->




















  <!-- Font Awesome Icon Library start -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
font-family:'Montserrat',sans-serif;
}

/* section */

.ups-capacity-section{
max-width:1100px;
margin:auto;
padding:80px 20px;
}

/* heading */

.ups-capacity-title{
text-align:center;
font-size:42px;
font-weight:700;
color:#252f74;
margin-bottom:20px;
}

.ups-capacity-title span{
color:#f37021;
}

.ups-capacity-desc{
text-align:center;
max-width:750px;
margin:auto;
font-size:18px;
color:#555;
line-height:1.7;
margin-bottom:60px;
}

/* grid */

.capacity-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:35px;
}

/* card */

.capacity-card{
background:#fff;
padding:40px 30px;
border-radius:18px;
text-align:center;
border:1px solid #eee;
position:relative;
overflow:hidden;
transition:all .4s ease;
box-shadow:0 10px 25px rgba(0,0,0,0.05);
}

.capacity-card:hover{
transform:translateY(-10px);
box-shadow:0 20px 45px rgba(0,0,0,0.12);
border: solid 2px #f37021;
}

/* icon circle */

.capacity-icon{
width:70px;
height:70px;
background:#f37021;
display:flex;
align-items:center;
justify-content:center;
margin:auto;
border-radius:50%;
color:#ffffff;
font-size:28px;
margin-bottom:20px;
}

/* title */

.capacity-card h3{
font-size:22px;
color:#252f74;
margin-bottom:8px;
}

.capacity-card p{
font-size:15px;
color:#000000;
margin-bottom:15px;
}

/* kva badge */

.kva-badge{
display:inline-block;
padding:6px 18px;
background:#252f74;
color:#fff;
border-radius:30px;
font-size:14px;
font-weight:600;
}

/* application icons */

.applications{
margin-top:60px;
display:flex;
flex-wrap:wrap;
gap:20px;
justify-content:center;
}

.app-item{
display:flex;
align-items:center;
gap:8px;
padding:8px 18px;
border-radius:30px;
border:1px solid #ddd;
font-size:14px;
transition:.3s;
}

.app-item i{
color:#f37021;
}

.app-item:hover{
background:#f37021;
color:#fff;
border-color:#f37021;
}

.app-item:hover i{
color:#fff;
}

</style>


<section class="ups-capacity-section">
<h2 class="indus-section-heading">
                Online UPS <span>Capacity Range</span>
            </h2>


<div class="capacity-grid">

<div class="capacity-card">
<div class="capacity-icon">
<i class="fas fa-building"></i>
</div>
<h3>Small Capacity</h3>
<p>Ideal for offices, labs and small IT setups.</p>
<span class="kva-badge">1 – 20 kVA</span>
</div>

<div class="capacity-card">
<div class="capacity-icon">
<i class="fas fa-server"></i>
</div>
<h3>Medium Capacity</h3>
<p>Perfect for hospitals, data centers and commercial applications.</p>
<span class="kva-badge">20 – 100 kVA</span>
</div>

<div class="capacity-card">
<div class="capacity-icon">
<i class="fas fa-industry"></i>
</div>
<h3>Large Capacity</h3>
<p>Designed for industries and infrastructure projects.</p>
<span class="kva-badge">100 – 500+ kVA</span>
</div>

</div>


<div class="applications">

<div class="app-item"><i class="fas fa-laptop"></i> Offices</div>
<div class="app-item"><i class="fas fa-flask"></i> Laboratories</div>
<div class="app-item"><i class="fas fa-industry"></i> Industrial Plants</div>
<div class="app-item"><i class="fas fa-road"></i> Infrastructure</div>

</div>

</section>
  <!-- Font Awesome Icon Library End -->


























<!-- applications start -->
 <style>
    /* main container – matching the previous indus-applications-section style but content updated */
    .online-ups-section {
      padding: 30px 20px;
      width: 100%;
      margin-bottom: 65px;
    }

    .online-container {
      max-width: 1200px;
      margin: auto;
    }

    .online-section-heading {
      font-size: 2.2rem;
      font-weight: 700;
      text-align: center;
      margin-bottom: 15px;
      color: #1a1e3b;
    }

    .online-section-heading span {
      color: #f37021;         /* accent orange */
    }

    .online-section-subtitle {
      font-size: 1rem;
      color: #2b2d4a;
      text-align: center;
      max-width: 850px;
      margin: 0 auto 50px auto;
      line-height: 1.7;
      font-weight: 400;
      background: #f8f9ff;
      padding: 14px 28px;
      border-radius: 60px;
      border: 1px solid #e0e3f0;
    }

    /* same flip-card grid as original, kept 3 columns */
    .online-card-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px 10px;
      justify-items: center;
    }

    /* for the two-card centered row we keep the same negative margin logic */
    .online-card-grid-centered {
      grid-template-columns: repeat(2, 1fr);
      justify-content: center;
      margin-top: -20px;        /* reduced from -55 to keep harmony */
    }

    /* flip-card dimensions same as before */
    .online-flip-card {
      perspective: 1000px;
      width: 360px;              /* slightly adapted for better text fit */
      height: 400px;
    }

    .online-flip-inner {
      position: relative;
      width: 100%;
      height: 100%;
      transition: transform 0.7s cubic-bezier(0.23, 1, 0.32, 1);
      transform-style: preserve-3d;
    }

    .online-flip-card:hover .online-flip-inner {
      transform: rotateY(180deg);
    }

    .online-front-face,
    .online-back-face {
      position: absolute;
      width: 100%;
      height: 100%;              /* back face uses full 400px */
      backface-visibility: hidden;
      border-radius: 24px;
      padding: 28px 20px;
      box-shadow: 0 20px 35px rgba(33, 35, 132, 0.12);
      display: flex;
      flex-direction: column;
    }

    .online-front-face {
      background: white;
      border: 2px solid #212384;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .online-front-face span {
      font-size: 44px;
      font-weight: 700;
      color: #f37021;
      line-height: 1.2;
      margin-bottom: 10px;
    }

    .online-front-face h3 {
      font-size: 1.5rem;
      font-weight: 600;
      color: #212384;
      margin: 0;
    }

    /* back face */
    .online-back-face {
      background: #ffffff;
      border: 2px solid #f37021;
      transform: rotateY(180deg);
      overflow-y: auto;
      color: #1e1f2c;
    }

    .online-back-face h3 {
      font-size: 22px;
      color: #212384;
      margin-bottom: 12px;
      text-align: center;
      font-weight: 600;
      border-bottom: 2px dashed #f37021;
      margin-top: 50px;
    }

    .online-back-face p {
      font-size: 0.9rem;
      line-height: 1.6;
      color: #000000;
      margin-bottom: 8px;
    }

    .online-back-face ul {
      margin: 6px 0 8px 18px;
      color: #000000;
    }

    .online-back-face ul li {
      font-size: 0.88rem;
      margin-bottom: 6px;
      padding-left: 8px;
      color: #121212;
    }

    .online-back-face strong {
      color: #f37021;
      font-weight: 600;
    }

    .online-flip-card:hover .online-front-face h3 {
      color: #f37021;
      transition: 0.2s;
    }

    /* responsive */
    @media (max-width: 1050px) {
      .online-flip-card {
        width: 300px;
        height: 420px;
      }
    }

    @media (max-width: 950px) {
      .online-card-grid {
        grid-template-columns: repeat(2, 1fr);
      }
      .online-card-grid-centered {
        grid-template-columns: repeat(2, 1fr);
        margin-top: 0;
      }
    }

    @media (max-width: 650px) {
      .online-card-grid,
      .online-card-grid-centered {
        grid-template-columns: 1fr;
        justify-items: center;
      }
      .online-flip-card {
        width: 90%;
        max-width: 380px;
        height: 400px;
      }
      .online-section-heading {
        font-size: 1.8rem;
      }
    }
  </style>

<section class="online-ups-section">
  <div class="online-container">

    <!-- heading updated to ONLINE UPS (as per image) -->
    <h2 class="indus-section-heading">
                Key Applications Of <span>Online UPS</span>
            </h2>

    <!-- main grid with all 8 applications (first 3 + 5 below, arranged exactly as described in the image) -->
    <div class="online-card-grid">
      <!-- 1. Hospitals & Healthcare -->
      <div class="online-flip-card">
        <div class="online-flip-inner">
          <div class="online-front-face">
            <span>01</span>
            <h3>Hospitals & Healthcare</h3>
          </div>
          <div class="online-back-face">
            <h3>Hospitals & Healthcare</h3>
            <p><strong>Online UPS</strong> ensures uninterrupted power for life-saving equipment:</p>
            <ul>
              <li>Ventilators & ICU monitors</li>
              <li>MRI / CT scan machines</li>
              <li>Operation theater systems</li>
              <li>Diagnostic & imaging equipment</li>
            </ul>
            <p>Power interruptions risk lives — online UPS is mandatory.</p>
          </div>
        </div>
      </div>

      <!-- 2. Data Centers & IT Infrastructure -->
      <div class="online-flip-card">
        <div class="online-flip-inner">
          <div class="online-front-face">
            <span>02</span>
            <h3>Data Centers & IT</h3>
          </div>
          <div class="online-back-face">
            <h3>Data Centers & IT</h3>
            <p>Extremely sensitive to voltage fluctuations. Online UPS delivers:</p>
            <ul>
              <li>Stable voltage & clean power</li>
              <li>Zero downtime during outages</li>
              <li>Protection against electrical noise</li>
            </ul>
            <p>Backbone of server rooms & IT infrastructure.</p>
          </div>
        </div>
      </div>

      <!-- 3. CNC Machines & Manufacturing -->
      <div class="online-flip-card">
        <div class="online-flip-inner">
          <div class="online-front-face">
            <span>03</span>
            <h3>CNC & Manufacturing</h3>
          </div>
          <div class="online-back-face">
            <h3>CNC Machines & Manufacturing</h3>
            <p>Precision machinery like CNC, automation panels. Voltage dips cause:</p>
            <ul>
              <li>Machine errors & production defects</li>
              <li>Costly repairs & downtime</li>
            </ul>
            <p>Online UPS ensures consistent power, boosts efficiency.</p>
          </div>
        </div>
      </div>
    </div> <!-- end first row (3 cards) -->

    <!-- second row: originally had 2 cards but we need to include remaining 5 items (4,5,6,7,8) 
         using grid-centered + an extra row to keep all 8. 
         But original snippet used two rows: first 3, then "card-grid-centered" with 2 cards. 
         To include 5 more cards we add two rows: first centered row with two cards, then second row with three cards.
         That matches total 8 and respects the "centered" style for the 2-card groups.
    -->
    <div class="online-card-grid online-card-grid-centered" style="margin-top:10px;">
      <!-- 4. Scanning & Imaging Centres -->
      <div class="online-flip-card">
        <div class="online-flip-inner">
          <div class="online-front-face">
            <span>04</span>
            <h3>Scanning & Imaging</h3>
          </div>
          <div class="online-back-face">
            <h3>Scanning & Imaging Centres</h3>
            <p>Sensitive diagnostic equipment (MRI, CT, X-ray) requires stable power.</p>
            <p><strong>Online UPS</strong> prevents scan failures and equipment damage, ensuring uninterrupted functioning.</p>
          </div>
        </div>
      </div>

      <!-- 5. Laboratories & Research Facilities -->
      <div class="online-flip-card">
        <div class="online-flip-inner">
          <div class="online-front-face">
            <span>05</span>
            <h3>Laboratories & Research</h3>
          </div>
          <div class="online-back-face">
            <h3>Laboratories & Research</h3>
            <p>Instruments for experiments depend on stable power. Online UPS maintains:</p>
            <ul>
              <li>Accurate test results</li>
              <li>Equipment safety</li>
              <li>Uninterrupted operation</li>
            </ul>
          </div>
        </div>
      </div>
    </div> <!-- end 4 & 5 -->

    <!-- next row: items 6,7,8 – we can use regular grid (3 columns) but must keep numbering continuous -->
    <div class="online-card-grid" style="margin-top:10px;">
      <!-- 6. Industrial Automation -->
      <div class="online-flip-card">
        <div class="online-flip-inner">
          <div class="online-front-face">
            <span>06</span>
            <h3>Industrial Automation</h3>
          </div>
          <div class="online-back-face">
            <h3>Industrial Automation</h3>
            <p>PLCs, SCADA, control electronics are sensitive to disturbances.</p>
            <p><strong>Online UPS</strong> provides continuous power and system stability, preventing process losses.</p>
          </div>
        </div>
      </div>

      <!-- 7. Banking & Financial Institutions -->
      <div class="online-flip-card">
        <div class="online-flip-inner">
          <div class="online-front-face">
            <span>07</span>
            <h3>Banking & Finance</h3>
          </div>
          <div class="online-back-face">
            <h3>Banking & Financial Institutions</h3>
            <p>Protects servers, ATMs, transaction systems, and security infrastructure from power disruptions.</p>
          </div>
        </div>
      </div>

      <!-- 8. Telecom & Networking -->
      <div class="online-flip-card">
        <div class="online-flip-inner">
          <div class="online-front-face">
            <span>08</span>
            <h3>Telecom & Networking</h3>
          </div>
          <div class="online-back-face">
            <h3>Telecom & Networking</h3>
            <p>Telecom equipment requires clean uninterrupted power. <strong>Online UPS</strong> ensures network reliability and uninterrupted communication services.</p>
          </div>
        </div>
      </div>
    </div> <!-- end 6,7,8 -->
  </div>
</section>
<!-- applications End -->




















<!-- Advance Technology start -->
<style>
        :root {
            --primary-navy: #1a1e3b;
            --accent-orange: #f37021;
            --soft-blue: #212384;
            --bg-light: #f4f7fc;
            --card-white: #ffffff;
            --lcd-bg: #171c33;
        }
        .container {
            max-width: 1100px;
            width: 100%;
            animation: fadeIn 0.8s ease-out;
        }

        /* Header Styling */
        .header {
            text-align: center;
            margin-bottom: 60px;
        }

        .header h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .header h2 span {
            color: var(--accent-orange);
            padding: 2px 15px;
            border-radius: 50px;
        }

        .subhead {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #fff;
            padding: 10px 25px;
            border-radius: 50px;
            border: 1px solid #e1e4f0;
            box-shadow: 0 4px 6px rgba(0,0,0,0.02);
            font-weight: 500;
            color: #4a4e6b;
        }

        /* Grid & Cards */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .card {
            background: var(--card-white);
            border-radius: 32px;
            padding: 35px;
            border: 1px solid #212384;
            box-shadow: 0 15px 35px rgba(0,0,0,0.05);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-10px);
            border-color: var(--accent-orange);
            box-shadow: 0 25px 50px rgba(243, 112, 33, 0.12);
        }

        .card-icon {
            font-size: 3rem;
            background:var(--accent-orange);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: float 3s ease-in-out infinite;
            text-align: center;
        }

        .card h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            border-bottom: 2px solid #f0f2fa;
            padding-bottom: 10px;
            text-align: center;
        }

        /* Chips & Tags */
        .chip-container {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 20px;
        }

        .chip {
            background: #f0f3fe;
            color: var(--soft-blue);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            border: 1px solid #dfe3f2;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .chip i { color: var(--accent-orange); }

        .desc {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #000000;
            margin-bottom: 20px;
            flex-grow: 1;
            text-align: justify;
        }


        /* LCD Display Animation */
        .lcd-panel {
            background:white;
            border-radius: 15px;
            padding: 15px;
            border: 1px solid #212384;
            margin-bottom: 15px;
        }

        .lcd-line {
            display: flex;
            justify-content: space-between;
            color: #000000;
            font-size: 0.85rem;
            margin-bottom: 5px;
        }

        .lcd-line span:last-child { color: #000000; font-weight: bold; }

        .lcd-status {
            color: #f37021;
            font-size: 0.75rem;
            border-top: 1px solid #f3702140;
            padding-top: 8px;
            margin-top: 5px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .pulse {
            animation: pulse-orange 2s infinite;
        }

        @keyframes pulse-orange {
            0% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.1); opacity: 0.7; }
            100% { transform: scale(1); opacity: 1; }
        }

        /* Footer */
        .footer {
            margin-top: 50px;
            text-align: center;
        }

        .footer-btn {
            display: inline-flex;
            align-items: center;
            gap: 15px;
            background:#212384;
            color: white;
            padding: 15px 40px;
            border-radius: 100px;
            font-weight: 600;
            border: 2px solid var(--accent-orange);
            transition: 0.3s;
            cursor: pointer;
            text-decoration: none;
        }

        .footer-btn:hover {
            background: var(--accent-orange);
            transform: scale(1.05);
            border: 2px solid #212384;

        }

        /* Responsive */
        @media (max-width: 768px) {
            .header h2 { font-size: 1.8rem; }
            .card { padding: 25px; }
        }
    </style>

<div class="container">
    <div class="header">
            <h2 class="indus-section-heading">
               Advanced Technology In <span>Online UPS</span>
            </h2>
    </div>

    <div class="card-grid">
        <div class="card">
            <div class="card-icon"><i class="fas fa-microchip"></i></div>
            <h3>DSP Control</h3>
            <div class="chip-container">
                <span class="chip"><i class="fas fa-bolt"></i> Precise Regulation</span>
                <span class="chip"><i class="fas fa-microchip"></i> Digital Brain</span>
            </div>
            <p class="desc">
                Digital Signal Processing provides ultra-fast response times (< 2ms) and high-speed monitoring for mission-critical loads.
            </p>
            <div class="chip" style="align-self: flex-start; background: #fff4ed;">
                <i class="fas fa-bolt-lightning fa-spin"></i> Ultra-Fast Response
            </div>
        </div>

        <div class="card">
            <div class="card-icon"><i class="fas fa-bolt"></i></div>
            <h3>IGBT Inverter</h3>
            <div class="chip-container">
                <span class="chip"><i class="fas fa-leaf"></i> 96% Efficiency</span>
                <span class="chip"><i class="fas fa-wave-square"></i> Pure Sine</span>
            </div>
            <p class="desc">
                Equipped with Insulated Gate Bipolar Transistors for high-frequency switching, resulting in zero noise and minimal heat.
            </p>
            <div class="chip" style="align-self: flex-start; background: #f0f3fe;">
                <i class="fas fa-temperature-arrow-down"></i> Low Heat Tech
            </div>
        </div>

        <div class="card">
            <div class="card-icon"><i class="fas fa-desktop"></i></div>
            <h3>LCD & Alarm</h3>
            <div class="lcd-panel">
                <div class="lcd-line"><span>INPUT</span><span>230V</span></div>
                <div class="lcd-line"><span>LOAD</span><span>[||||  ] 45%</span></div>
                <div class="lcd-line"><span>BATT</span><span>[||||||] 98%</span></div>
                <div class="lcd-status">
                    <i class="fas fa-circle-check fa-fade" style="color: #00ff88;"></i> System Normal
                </div>
            </div>
            <p class="desc">
                Intelligent Monitoring via a high-contrast LCD panel. Real-time alerts and audible alarms for any fault condition.
            </p>
            <div class="chip" style="align-self: flex-start; background: #fff4ed;">
                <i class="fas fa-bell"></i> Instant Fault Alert
            </div>
        </div>
    </div>

    <div class="footer">
        <a href="#" class="footer-btn">
            <i class="fas fa-shield-halved"></i>
            EXPLORE ADVANCED RELIABILITY
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
</div>
 <!-- Advance Technology End -->





















 <!-- Protection Features Start -->
<style>
/* section */

.ups-protection{
padding:50px 20px;
}

.ups-container{
max-width:1000px;
margin:auto;
}

/* heading */

.ups-heading{
font-size:40px;
font-weight:700;
color:#212384;
margin-bottom:15px;
}

.ups-heading span{
color:#f37021;
}

.ups-text{
font-size:18px;
color:#555;
margin-bottom:70px;
max-width:850px;
line-height:1.7;
}

/* timeline */

.timeline{
position:relative;
padding-left:40px;
}

/* vertical line */

.timeline::before{
content:"";
position:absolute;
left:18px;
top:0;
width:3px;
height:100%;
background:linear-gradient(#212384,#f37021);
}

/* item */

.timeline-item{
position:relative;
margin-bottom:40px;
padding-left:35px;
animation:fadeUp 1s ease;
}

/* icon circle */

.timeline-icon{
position:absolute;
left: -42px;
top: 28px;
width:40px;
height:40px;
border-radius:50%;
background:#f37021;
display:flex;
align-items:center;
justify-content:center;
color:white;
font-size:16px;
box-shadow:0 6px 15px rgba(243,112,33,0.4);
transition:.4s;
}

/* card */

.timeline-content{
background:#fff;
padding:20px 25px;
border-radius:10px;
box-shadow:0 10px 30px rgba(0,0,0,0.08);
transition:.4s;
border-left:4px solid #212384;
}

.timeline-content h4{
font-size:18px;
color:#212384;
margin-bottom:6px;
font-weight:600;
}

.timeline-content p{
font-size:15px;
color:#000000;
}

/* hover */

.timeline-item:hover .timeline-content{
transform:translateX(8px);
box-shadow:0 18px 45px rgba(0,0,0,0.12);
}

.timeline-item:hover .timeline-icon{
background:#212384;
transform:scale(1.1);
}

/* bottom text */

.ups-bottom{
margin-top:40px;
font-size:17px;
color:#444;
font-weight:500;
}

/* animation */

@keyframes fadeUp{
from{
opacity:0;
transform:translateY(30px);
}
to{
opacity:1;
transform:translateY(0);
}
}

/* mobile */

@media(max-width:768px){

.ups-heading{
font-size:30px;
}

.timeline{
padding-left:30px;
}

.timeline-content{
padding:18px;
}

}

</style>


<section class="ups-protection">

<div class="ups-container">


 <h2 class="indus-section-heading">
               Protection Features In <span>Online UPS</span>
            </h2>

<div class="timeline">

<div class="timeline-item">
<div class="timeline-icon"><i class="fas fa-bolt"></i></div>
<div class="timeline-content">
<h4>Overload Protection</h4>
<p>Protects the UPS system when the load exceeds safe operating limits.</p>
</div>
</div>

<div class="timeline-item">
<div class="timeline-icon"><i class="fas fa-plug-circle-bolt"></i></div>
<div class="timeline-content">
<h4>Short Circuit Protection</h4>
<p>Prevents damage caused by sudden short circuit conditions.</p>
</div>
</div>

<div class="timeline-item">
<div class="timeline-icon"><i class="fas fa-gauge-high"></i></div>
<div class="timeline-content">
<h4>Over & Under Voltage Protection</h4>
<p>Maintains stable voltage levels to protect connected equipment.</p>
</div>
</div>

<div class="timeline-item">
<div class="timeline-icon"><i class="fas fa-battery-half"></i></div>
<div class="timeline-content">
<h4>Battery Deep Discharge Protection</h4>
<p>Stops the battery from excessive discharge to extend battery life.</p>
</div>
</div>

<div class="timeline-item">
<div class="timeline-icon"><i class="fas fa-temperature-high"></i></div>
<div class="timeline-content">
<h4>Over Temperature Protection</h4>
<p>Protects internal components from overheating and system failure.</p>
</div>
</div>

</div>

</div>
</section>
 <!-- Protection Features End -->





















 <!-- Rugged Design Start -->
<style>

body{
font-family:'Montserrat',sans-serif;
}

/* section */

.rugged-section{
padding:90px 20px;
}

.rugged-container{
max-width:1100px;
margin:auto;
text-align:center;
}

/* heading */

.rugged-title{
font-size:40px;
font-weight:700;
color:#212384;
margin-bottom:20px;
}

.rugged-title span{
color:#f37021;
}

.rugged-desc{
font-size:18px;
color:#555;
max-width:850px;
margin:auto;
line-height:1.7;
margin-bottom:60px;
}

/* cards */

.rugged-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(230px,1fr));
gap:30px;
padding: 0px 70px;
margin-bottom: 50px;
}

/* card */

.rugged-card{
background:#fff;
padding:35px 25px;
border-radius:18px;
box-shadow:0 20px 50px rgba(0,0,0,0.08);
transition:.4s;
position:relative;
overflow:hidden;
border: solid 2px #212384;

}

/* hover */

.rugged-card:hover{
transform:translateY(-10px);
box-shadow:0 30px 70px rgba(0,0,0,0.15);
border: solid 2px #f37021;
}

/* icon */

.rugged-icon{
width:70px;
height:70px;
border-radius:50%;
margin:auto;
margin-bottom:20px;
display:flex;
align-items:center;
justify-content:center;
font-size:28px;
color:#f37021;
/* background:linear-gradient(135deg,#f37021,#212384); */
border: solid 1px #212384;
box-shadow:0 10px 30px rgba(243,112,33,0.4);
animation:float 3s ease-in-out infinite;
}

/* text */

.rugged-card h3{
font-size:15px;
color:#212384;
margin-bottom:10px;
font-weight: 700;
text-align: center;
}


.rugged-card p{
font-size:15px;
color:#000000;
text-align: center;
}

/* floating animation */

@keyframes float{

0%{
transform:translateY(0px);
}

50%{
transform:translateY(-8px);
}

100%{
transform:translateY(0px);
}

}

/* bottom text */

.rugged-bottom{
margin-top:50px;
font-size:17px;
color:#444;
font-weight:500;
}

/* mobile */

@media(max-width:768px){

.rugged-title{
font-size:30px;
}

.rugged-desc{
font-size:16px;
}

}

</style>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<h2 class="indus-section-heading">
               Rugged Design For Indian <span>Operating Conditions</span>
            </h2>

<div class="rugged-grid">

<div class="rugged-card">

<div class="rugged-icon">
<i class="fa-solid fa-temperature-high"></i>
</div>

<h3>High Ambient Temperatures</h3>
<p>Designed to operate reliably even in extreme heat conditions.</p>

</div>


<div class="rugged-card">

<div class="rugged-icon">
<i class="fa-solid fa-wind"></i>
</div>

<h3>Dusty Industrial Environments</h3>
<p>Strong protection against dust and harsh industrial conditions.</p>

</div>


<div class="rugged-card">

<div class="rugged-icon">
<i class="fa-solid fa-bolt"></i>
</div>

<h3>Unstable Grid Power</h3>
<p>Ensures uninterrupted operation even with unstable grid supply.</p>

</div>


<div class="rugged-card">

<div class="rugged-icon">
<i class="fa-solid fa-chart-line"></i>
</div>

<h3>Frequent Voltage Fluctuations</h3>
<p>Maintains stable output voltage to protect sensitive equipment.</p>

</div>

</div>
 <!-- Rugged Design End -->




















 <!-- Table section Start -->
  <style>
.modern-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 30px;
    font-family: 'Montserrat', sans-serif;
}

.modern-table th, .modern-table td {
    border: 1px solid #ccc;
    padding: 12px 18px;
    text-align: center;
    font-size: 15px;
}

.modern-table th {
    background-color: #252f74;
    color: #fff;
    font-size: 16px;
    font-weight: 600;
}

.modern-table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.modern-table tr:hover {
    background-color: #dbe1f1;
    border: solid 2px #f37021;
}

.modern-table td:hover {
    border: solid 2px #f37021;
}

.indus-section-heading{
    text-align:center;
    font-size:36px;
    font-weight:700;
    margin-bottom:65px;
}
</style>

<h2 class="indus-section-heading">
                Online UPS vs <span>Other UPS Systems</span>
            </h2>

<table class="modern-table">

<tr>
<th>Feature</th>
<th>Online UPS</th>
<th>Other UPS Types</th>
</tr>

<tr>
<td>Transfer Time</td>
<td>Zero</td>
<td>Delay present</td>
</tr>

<tr>
<td>Power Quality</td>
<td>Excellent</td>
<td>Moderate</td>
</tr>

<tr>
<td>Protection Level</td>
<td>Highest</td>
<td>Limited</td>
</tr>

<tr>
<td>Application</td>
<td>Critical loads</td>
<td>General loads</td>
</tr>

<tr>
<td>Reliability</td>
<td>Very High</td>
<td>Medium</td>
</tr>

</table>
 <!-- Table section End -->























<!-- Industries That Rely Start -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>



.industries-section{
max-width:1200px;
margin:auto;
padding:60px 20px;
text-align:center;
}

/* Title */

.industries-title{
font-size:40px;
font-weight:700;
margin-bottom:10px;
color:#212384;
}

.industries-title span{
color:#f37021;
}

.industries-desc{
font-size:18px;
color:#000000;
margin-bottom:40px;
}

/* Grid */

.industries-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(230px,1fr));
gap:25px;
}

/* Card */

.industry-card{
background:#fff;
border-radius:14px;
padding:25px;
display:flex;
align-items:center;
gap:18px;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
transition:0.35s;
position:relative;
overflow:hidden;
}

/* hover animation */

.industry-card:hover{
transform:translateY(-8px);
box-shadow:0 18px 35px rgba(0,0,0,0.15);
}

/* icon */

.industry-icon{
width:55px;
height:55px;
border-radius:12px;
display:flex;
align-items:center;
justify-content:center;
font-size:22px;
color:#fff;
background:linear-gradient(135deg,#f37021,#212384);
transition:0.35s;
}

.industry-card:hover .industry-icon{
transform:rotate(10deg) scale(1.1);
}

/* text */

.industry-text{
font-size:18px;
font-weight:600;
color:#333;
}

/* bottom line animation */

.industry-card::after{
content:"";
position:absolute;
bottom:0;
left:0;
width:0;
height:4px;
background:linear-gradient(90deg,#f37021,#212384);
transition:0.4s;
}

.industry-card:hover::after{
width:100%;
}

</style>


<section class="industries-section">



<h2 class="indus-section-heading">
                Industries Reliant On <span> Online UPS</span>
            </h2>

<p class="industries-desc">
Critical industries require reliable backup power to ensure continuous operations.
</p>

<div class="industries-grid">

<div class="industry-card">
<div class="industry-icon"><i class="fas fa-hospital"></i></div>
<div class="industry-text">Healthcare</div>
</div>

<div class="industry-card">
<div class="industry-icon"><i class="fas fa-server"></i></div>
<div class="industry-text">Data Centers</div>
</div>

<div class="industry-card">
<div class="industry-icon"><i class="fas fa-industry"></i></div>
<div class="industry-text">Manufacturing</div>
</div>

<div class="industry-card">
<div class="industry-icon"><i class="fas fa-flask"></i></div>
<div class="industry-text">Research & Labs</div>
</div>

<div class="industry-card">
<div class="industry-icon"><i class="fas fa-building-columns"></i></div>
<div class="industry-text">Banking & Finance</div>
</div>

<div class="industry-card">
<div class="industry-icon"><i class="fas fa-tower-cell"></i></div>
<div class="industry-text">Telecom</div>
</div>

<div class="industry-card">
<div class="industry-icon"><i class="fas fa-landmark"></i></div>
<div class="industry-text">Government</div>
</div>

<div class="industry-card">
<div class="industry-icon"><i class="fas fa-graduation-cap"></i></div>
<div class="industry-text">Education</div>
</div>

<div class="industry-card">
<div class="industry-icon"><i class="fas fa-satellite-dish"></i></div>
<div class="industry-text">Broadcast & Media</div>
</div>

<div class="industry-card">
<div class="industry-icon"><i class="fas fa-shield-halved"></i></div>
<div class="industry-text">Defense & Aerospace</div>
</div>

</div>

</section>
<!-- Industries That Rely End -->
























<!-- Why Choose Start -->
<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

/* section background */
.why-card{
max-width:1280px;
width:100%;
padding:3rem 3rem;
position:relative;
overflow:hidden;
}

/* subtle pattern */
.why-card::before{
content:"";
position:absolute;
width:400px;
height:400px;
background:radial-gradient(circle,#f37021 0%,transparent 70%);
top:-120px;
right:-120px;
opacity:.06;
}

/* header */
.title-block{
margin-bottom:2.5rem;
}

.title-block h1{
font-size:2.5rem;
font-weight:700;
color:#1e2a78;
}

.title-block h1 i{
color:#f37021;
margin-right:10px;
}

.underline-accent{
width:130px;
height:5px;
background:linear-gradient(90deg,#1e2a78,#f37021);
border-radius:10px;
margin-top:10px;
}

.subhead{
margin-top:18px;
font-size:1.1rem;
color:#2c3a5a;
background:#f8faff;
padding:.7rem 1.4rem;
border-radius:40px;
display:inline-block;
border-left:5px solid #f37021;
}

/* GRID */
.strengths-grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:2rem;
margin-top:3rem;
}

/* cards */
.strength-item{
background:white;
border-radius:24px;
padding:2.1rem 1.4rem;
text-align:center;
transition:.35s;
box-shadow:0 18px 35px -15px rgba(30,42,120,.2);
position:relative;
overflow:hidden;
}

/* top animated bar */
.strength-item::before{
content:"";
position:absolute;
top:0;
left:0;
width:0%;
height:4px;
background:linear-gradient(90deg,#f37021,#ff9a3d);
transition:.4s;
}

.strength-item:hover::before{
width:100%;
}

/* hover */
.strength-item:hover{
transform:translateY(-12px);
box-shadow:0 35px 50px -15px rgba(30,42,120,.3);
}

/* icon circle */
.strength-icon{
width:75px;
height:75px;
background:#f3f6ff;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
margin:0 auto 1.5rem;
font-size:2rem;
color:#f37021;
transition:.4s;
}

/* icon animation */
.strength-item:hover .strength-icon{
background:#1e2a78;
color:white;
transform:scale(1.15);
animation:iconPulse 1s infinite alternate;
}

@keyframes iconPulse{
from{box-shadow:0 0 0 0 rgba(243,112,33,.4);}
to{box-shadow:0 0 20px 8px rgba(243,112,33,.1);}
}

/* text */
.strength-item p{
font-size:1.1rem;
font-weight:600;
color:#1e2a78;
}

.strength-item span{
display:block;
font-size:.9rem;
color:#000000;
margin-top:7px;
}

/* commitment section */
.commitment-box{
margin-top:3rem;
background:white;
border-radius:30px;
padding:2rem 2rem;
display:flex;
align-items:center;
gap:2rem;
box-shadow:0 20px 40px -15px rgba(30,42,120,.2);
border:1px solid rgba(243,112,33,.2);
transition:.4s;
}

.commitment-box:hover{
transform:translateY(-5px);
}

/* commitment icon */
.commitment-icon{
background:#1e2a78;
width:70px;
height:70px;
border-radius:24px;
display:flex;
align-items:center;
justify-content:center;
font-size:2rem;
color:white;
box-shadow:10px 10px 0 #f37021;
}

.commitment-text p{
font-size:1.35rem;
font-weight:600;
color:#1e2a78;
}

/* responsive */
@media(max-width:900px){

.strengths-grid{
grid-template-columns:repeat(2,1fr);
}

}

@media(max-width:600px){

.strengths-grid{
grid-template-columns:1fr;
}

.title-block h1{
font-size:2rem;
}

}

</style>

    <div class="why-card">

        <!-- HEADER with exact company name and both colors -->
        <div class="title-block">
            <h2 class="indus-section-heading">
                Why Choose Indus Power <span> Industries Pvt. Ltd.</span>
            </h2>
        </div>

        <!-- STRENGTHS GRID (exact 6 points, smart & simple) -->
        <div class="strengths-grid">
            <!-- 1 -->
            <div class="strength-item">
                <div class="strength-icon"><i class="fas fa-charging-station"></i></div>
                <p>Wide range of Online UPS capacities</p>
                <span>from small offices to large industries</span>
            </div>
            <!-- 2 -->
            <div class="strength-item">
                <div class="strength-icon"><i class="fas fa-puzzle-piece"></i></div>
                <p>Customized solutions for specific needs</p>
                <span>tailored exactly to your load</span>
            </div>
            <!-- 3 -->
            <div class="strength-item">
                <div class="strength-icon"><i class="fas fa-microchip"></i></div>
                <p>High-quality components</p>
                <span>industrial grade, long life</span>
            </div>
            <!-- 4 -->
            <div class="strength-item">
                <div class="strength-icon"><i class="fas fa-cogs"></i></div>
                <p>Advanced technology</p>
                <span>IGBT, DSP, pure sine wave</span>
            </div>
            <!-- 5 -->
            <div class="strength-item">
                <div class="strength-icon"><i class="fas fa-headset"></i></div>
                <p>Strong after-sales support</p>
                <span>dedicated service engineers</span>
            </div>
            <!-- 6 -->
            <div class="strength-item">
                <div class="strength-icon"><i class="fas fa-network-wired"></i></div>
                <p>Nationwide service network</p>
                <span>pan‑India reach, quick response</span>
            </div>
        </div>

    
    </div>
<!-- Why Choose End -->
















<!-- conclusion Start -->
<style>
.conclusion-category-section{
padding:50px 20px;
}

.conclusion-section-heading{
text-align:center;
font-size:36px;
margin-bottom:72px;
}

.conclusion-section-heading span{
color:#f37021;
}

.conclusion-clean-container{
max-width:1100px;
margin:auto;
}

.conclusion-clean-container p{
font-size:18px;
color:#000000;
line-height:1.4;
margin-bottom:18px;
text-align:justify;
}
</style>


<section class="conclusion-category-section">
    <div class="conclusion-clean-container">

        <h2 class="indus-section-heading"><span>Conclusion</span></h2>

        <p>An Online UPS is the most reliable power backup solution for applications where uninterrupted and clean power is critical. With zero transfer time, superior protection, advanced technology, and robust design, Online UPS systems ensure continuous operation of sensitive and mission-critical equipment.</p>

        <p>Whether it is a hospital, data center, manufacturing unit, or research facility, investing in an Online UPS power backup system safeguards your operations against power disturbances and ensures long-term reliability.</p>

        <p>Choose Indus Power Industries Pvt. Ltd. for high-performance Online UPS solutions designed to deliver uninterrupted power, maximum protection, and complete peace of mind.</p>
   
    </div>
</section>
<!-- conclusion End -->












<?php include('footer.php'); ?>
</body>
</html>