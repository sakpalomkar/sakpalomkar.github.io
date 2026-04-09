<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Indusups</title>

<!-- Google Font & Font Awesome (exactly as in new design) -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">




</head>

<body>

<?php include('navbar.php'); ?>

<!-- HERO SECTION Slider Start-->

<style>
   *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Montserrat';
}



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
    font-size: 36px;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 15px;
    animation: slideDown 1s ease forwards;
}

.premium-breadcrumb-trail {
    font-size: 18px;
    font-weight: 400;
    animation: fadeUp 1.2s ease forwards;
    margin-left: -60px;
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
    from {
        opacity: 0;
        transform: translateY(-40px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes zoomEffect {
    from {
        transform: scale(1.1);
    }
    to {
        transform: scale(1);
    }
}

@media(max-width:768px){
    .premium-hero-wrapper h1{
        font-size: 36px;
    }
    .premium-breadcrumb-trail{
        font-size: 15px;
    }
}
</style>

<section class="premium-hero-display">
    <div class="premium-hero-wrapper">
        <h1>Short Tubular Inverter Battery Manufacturer India</h1>
        <div class="premium-breadcrumb-trail">
            <a href="#">Home</a> 
            &nbsp;»&nbsp; 
            <a href="#">Products</a> 
            &nbsp;»&nbsp;
            <a href="#">Inverter Battery</a> 
            &nbsp;»&nbsp;
            <span>Short Tubular Inverter Battery</span>
        </div>
    </div>
</section>
<!-- Slider End -->

































<!-- Img Section Start -->
<style>
.tech-product-gallery{
    width:100%;
    padding:40px 8%;
    text-align:center;
    position:relative;
    overflow:hidden;
    margin-bottom: -30px;
}

.tech-product-gallery::before{
    content:"";
    position:absolute;
    width:100%;
    height:100%;
    top:0;
    left:0;
    animation: gradientMove 12s ease infinite;
    z-index:0;
}

@keyframes gradientMove{
    0%{background-position:0% 50%;}
    50%{background-position:100% 50%;}
    100%{background-position:0% 50%;}
}

.tech-image-holder{
    position:relative;
    z-index:1;
    display:flex;
    justify-content:center;
    margin-bottom:30px;
}

.tech-display-image{
    width:340px;
    cursor:pointer;
    border-radius:20px;
    transform:translateY(60px);
    opacity:0;
    animation: fadeUp 1.2s ease forwards;
    transition:0.4s ease;
    column-gap: 30px;
}

.tech-display-image:hover{
    transform:translateY(0) scale(1.05) rotateX(5deg);
}

@keyframes fadeUp{
    to{
        transform:translateY(0);
        opacity:1;
    }
}

.tech-action-panel{
    position:relative;
    z-index:1;
    display:flex;
    justify-content:center;
    gap:40px;
    flex-wrap:wrap;
}

.tech-cta-button{
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

.tech-cta-button::before{
    content:"";
    position:absolute;
    inset:0;
    border-radius:50px;
    padding:2px;
    background: linear-gradient(90deg,#f37021,#212384,#f37021);
    -webkit-mask: 
        linear-gradient(#fff 0 0) content-box, 
        linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
            mask-composite: exclude;
    animation: borderMove 4s linear infinite;
}

@keyframes borderMove{
    0%{background-position:0%;}
    100%{background-position:200%;}
}

.tech-cta-button:hover{
    background:#f37021;
    color:#fff;
    box-shadow:0 15px 40px rgba(243,112,33,0.4);
    transform:translateY(-5px);
}

.tech-lightbox-popup{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.88);
    display:flex;
    align-items:center;
    justify-content:center;
    opacity:0;
    visibility:hidden;
    transition:0.4s ease;
    z-index:9999;
}

.tech-lightbox-popup.active{
    opacity:1;
    visibility:visible;
}

.tech-lightbox-popup img{
    max-width:90%;
    max-height:90%;
    border-radius:20px;
    box-shadow:0 30px 60px rgba(0,0,0,0.5);
    animation: zoomIn 0.4s ease;
}

@keyframes zoomIn{
    from{transform:scale(0.8);}
    to{transform:scale(1);}
}

.tech-close-icon{
    position:absolute;
    top:35px;
    right:45px;
    width:55px;
    height:55px;
    border-radius:50%;
    backdrop-filter:blur(12px);
    background:rgba(255,255,255,0.15);
    border:1px solid rgba(255,255,255,0.3);
    display:flex;
    align-items:center;
    justify-content:center;
    cursor:pointer;
    transition:all 0.4s ease;
    box-shadow:0 10px 30px rgba(0,0,0,0.3);
}

.tech-close-icon span{
    position:absolute;
    width:22px;
    height:2px;
    background:#fff;
    transition:0.4s ease;
}

.tech-close-icon span:nth-child(1){
    transform:rotate(45deg);
}

.tech-close-icon span:nth-child(2){
    transform:rotate(-45deg);
}

.tech-close-icon:hover{
    transform:scale(1.15) rotate(180deg);
    background:linear-gradient(135deg,#f37021,#212384);
}

@media(max-width:768px){
    .tech-display-image{
        width:260px;
    }
    .tech-cta-button{
        padding:14px 30px;
        font-size:14px;
    }
    .tech-close-icon{
        top:20px;
        right:20px;
        width:45px;
        height:45px;
    }
}
</style>

<section class="tech-product-gallery">
    <div class="tech-image-holder">
    <img src="img/Short Tubular1.png" class="tech-display-image" alt="">
    <img src="img/Short Tubular2.png" class="tech-display-image" alt="">
    </div>

    <div class="tech-action-panel">
        <a href="#" class="tech-cta-button">DOWNLOAD BROCHURE</a>
        <a href="#" class="tech-cta-button tech-secondary-action" onclick="openEnquiry()">ENQUIRE NOW</a>
    </div>
</section>

<!-- Lightbox -->
<div class="tech-lightbox-popup" id="imageLightbox">
    <div class="tech-close-icon" id="closeLightbox">
        <span></span>
        <span></span>
    </div>
    <img src="img/Offline UPS.png" alt="UPS Machine">
</div>

<script>
const images = document.querySelectorAll(".tech-display-image");
const imageLightbox = document.getElementById("imageLightbox");
const lightboxImg = imageLightbox.querySelector("img");
const closeLightbox = document.getElementById("closeLightbox");

images.forEach(img => {
    img.addEventListener("click", () => {
        imageLightbox.classList.add("active");
        lightboxImg.src = img.src;
    });
});

closeLightbox.addEventListener("click", (e) => {
    e.stopPropagation();
    imageLightbox.classList.remove("active");
});

imageLightbox.addEventListener("click", () => {
    imageLightbox.classList.remove("active");
});
</script>
<!-- Img Section End -->


















<!--  Compact, Reliable & Efficient Power Start -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap');

/* SECTION HEADING */
.indus-process-heading{
    text-align:center;
    font-size:32px;
    font-weight:900;
    color:#212384;
    margin-bottom:50px;
    position:relative; /* for span underline positioning */
}

/* ORANGE SPAN WITH UNDERLINE */
.indus-process-heading span{
    color:#f37021;
    position:relative; /* make span relative for ::after */
}

.indus-process-heading span::after{
    content:"";
    position:absolute;
    left:0;
    bottom:-8px; /* adjust distance below text */
    width:0%;
    height:4px;
    background:#f37021;
    border-radius:5px;
    animation:underlineMove 2s infinite alternate;
}

@keyframes underlineMove{
    from { width:0%; }
    to { width:100%; }
}

/* PANEL SECTION */
.indus-section-panel{
    background:#ffffff;
    padding:50px 5%;
    font-family:'Montserrat';
}

/* GRID */
.indus-grid-container{
    display:grid;
    grid-template-columns: repeat(auto-fit,minmax(320px,1fr));
    gap:40px;
    max-width:1206px;
    margin:auto;
}

/* CONTENT CARD */
.indus-content-card{
    background:#ffffff;
    padding:35px 30px;
    border-radius:25px;
    box-shadow:0 20px 60px rgba(33,35,132,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    border:2px solid #f37021;
}

.indus-content-card p{
    font-size:17px;
    line-height:1.8;
    color:#000000;
    margin:0;
    text-align:justify;
    transition: color 0.3s ease, transform 0.3s ease;
}

/* Hover Effect */
.indus-content-card:hover{
    transform: translateY(-10px);
    box-shadow:0 25px 70px rgba(33,35,132,0.12);
    border-color:#212384;
}

.indus-content-card:hover p{
    transform: translateY(-1px);
    color:#212384;
}

/* Responsive */
@media(max-width:992px){
    .indus-process-heading{
        font-size:28px;
    }
}
</style>

<section class="indus-section-panel">

<h2 class="indus-process-heading">
Compact, Reliable & Efficient Power Backup by Indus Power <span> Industries Pvt Ltd</span>
</h2>

<div class="indus-grid-container">

<div class="indus-content-card">
<p>In a country like India where power interruptions are frequent and often unpredictable, selecting the right inverter battery becomes essential for daily comfort, productivity, and safety. At Indus Power Industries Pvt Ltd, we manufacture and supply high-quality short tubular battery solutions that are engineered for compact spaces, moderate backup requirements, and dependable long-term performance.
</p>
</div>

<div class="indus-content-card">
<p>
A tubular inverter battery short type is specifically designed for users who want a balance between durability and compactness. This makes an inverter short tubular battery an ideal solution for apartments, offices, and shops, where space is limited but reliable power backup is required.
</p>
</div>

<div class="indus-content-card">
<p>
Customers looking for a short tubular battery for inverter often prioritize efficiency, quick charging, and reliable daily performance. These features are core design principles at Indus Power Industries, ensuring that every battery delivers consistent power while maintaining long-term durability.
</p>
</div>

</div>

</section>


<!-- Compact, Reliable & Efficient Power  End -->


<!-- Understanding  starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-battery-tech-section">

  <h2 class="indus-process-heading">
    Understanding Short Tubular <span>Battery Technology</span>
  </h2>

  <div class="indus-battery-tech-grid">

    <!-- CARD 1 -->
    <div class="indus-battery-tech-card">
      <div class="indus-battery-icon">
        <i class="fas fa-home"></i>
      </div>
      <h3>Compact Home Design</h3>
      <p>
        A tubular battery short type uses advanced tubular plate construction that improves
         battery life and discharge efficiency while maintaining a compact form factor. A
          short tubular battery for home is especially suitable for flats and apartments.
      </p>
    </div>

    <!-- CARD 2 -->
    <div class="indus-battery-tech-card">
      <div class="indus-battery-icon">
        <i class="fas fa-briefcase"></i>
      </div>
      <h3>Office & Commercial Backup</h3>
      <p>
        Similarly, a short tubular battery for office ensures uninterrupted work during short to medium power cuts without occupying excessive floor space, keeping professional environments productive.
      </p>
    </div>

    <!-- CARD 3 -->
    <div class="indus-battery-tech-card">
      <div class="indus-battery-icon">
        <i class="fas fa-store"></i>
      </div>
      <h3>Shop & Apartment Installations</h3>
      <p>
        Retailers frequently recommend a short tubular battery for shop installations because
         it offers dependable backup for billing systems, lights, and security equipment. A 
         short tubular battery for apartment living is also effective.
      </p>
    </div>

  </div>

</section>

<style>
* {
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Montserrat';
}

/* SECTION */
.indus-battery-tech-section {
  padding:70px 20px;
  background:#ffffff;
  text-align:center;
}

/* HEADING */
.indus-process-heading {
  font-size:34px;
  color:#212384;
  margin-bottom:50px;
}
.indus-process-heading span {
  color:#f37021;
}

/* GRID */
.indus-battery-tech-grid {
  display:grid;
  grid-template-columns:repeat(auto-fit, minmax(230px, 1fr)); /* smaller width */
  gap:25px;
  max-width:1046px; /* reduce section width */
  margin:auto;
}

/* CARD */
.indus-battery-tech-card {
  background:#fff;
  border-radius:12px;
  padding:18px 16px; /* reduced padding */
  box-shadow:0 8px 18px rgba(0,0,0,0.08);
  cursor:pointer;
  border:2px solid #f37021;
  transition: all 0.4s ease;
  text-align:center;
}

/* CARD HOVER */
.indus-battery-tech-card:hover {
  transform: translateY(-6px);
  border-color:#212384;
  box-shadow:0 14px 30px rgba(0,0,0,0.15);
}

/* ICON */
.indus-battery-icon {
  width:50px; /* smaller icon */
  height:50px;
  border-radius:50%;
  background:#f37021;
  color:#fff;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:20px;
  margin:0 auto 12px;
  animation: floatIcon 3s ease-in-out infinite;
  transition:0.4s;
}

.indus-battery-tech-card:hover .indus-battery-icon {
  background:#212384;
  transform:scale(1.15) rotate(8deg);
}

/* HEADING */
.indus-battery-tech-card h3 {
  font-size:22px; /* smaller heading */
  color:#f37021;
  margin-bottom:10px;
  transition:0.4s;
  font-weight: 600;
}

.indus-battery-tech-card:hover h3 {
  color:#212384;
}

/* PARAGRAPH */
.indus-battery-tech-card p {
  font-size:16px; /* smaller text */
  line-height:1.6;
  color:#000;
      text-align: justify;
}

/* ICON FLOAT */
@keyframes floatIcon{
  0%{transform:translateY(0);}
  50%{transform:translateY(-5px);}
  100%{transform:translateY(0);}
}

/* MOBILE */
@media(max-width:768px){
  .indus-battery-tech-grid {
    grid-template-columns:1fr;
  }
}
</style>
<!-- -   Understanding  ends -->




<!--  Residential Applications starts -->

<section class="indus-residential-section">

  <h2 class="indus-process-heading">
    Residential Applications & <span>Daily Use</span>
  </h2>

  <div class="indus-residential-grid">

    <!-- CARD 1 -->
    <div class="indus-residential-card">
      <div class="card-inner">
        <!-- FRONT -->
        <div class="card-front">
          <i class="fas fa-home"></i>
          <h3>Household Power</h3>
        </div>
        <!-- BACK -->
        <div class="card-back">
          <h4 class="back-subheading">Compact & Efficient</h4>
          <p>
            A short tubular battery for house provides consistent power for essential appliances,
             while a short tubular battery for bungalow supports moderate backup needs without 
             requiring.
          </p>
        </div>
      </div>
    </div>

    <!-- CARD 2 -->
    <div class="indus-residential-card">
      <div class="card-inner">
        <!-- FRONT -->
        <div class="card-front">
          <i class="fas fa-tv"></i>
          <h3>Whole House Backup</h3>
        </div>
        <!-- BACK -->
        <div class="card-back">
          <h4 class="back-subheading">Reliable Protection</h4>
          <p>
            Supports lights, fans, televisions, and basic electronics efficiently. Selected by users searching for the best short tubular battery or inverter battery for homes because of proven reliability and space-saving design.
          </p>
        </div>
      </div>
    </div>

    <!-- CARD 3 -->
    <div class="indus-residential-card">
      <div class="card-inner">
        <!-- FRONT -->
        <div class="card-front">
          <i class="fas fa-bolt"></i>
          <h3>High Performance</h3>
        </div>
        <!-- BACK -->
        <div class="card-back">
          <h4 class="back-subheading">Durable & Long-Lasting</h4>
          <p>
            A long life short tubular battery ensures fewer replacements, while a high backup short tubular battery delivers dependable performance during routine outages. Heavy duty short tubular batteries provide stability without excessive size.
          </p>
        </div>
      </div>
    </div>

  </div>

</section>

<style>
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Montserrat',sans-serif;
}

/* SECTION */
.indus-residential-section{
  padding:80px 20px;
  max-width:1200px;
  margin:auto;
}

.indus-process-heading{
  text-align:center;
  font-size:34px;
  font-weight:700;
  color:#212384;
  margin-bottom:60px;
}

.indus-process-heading span{
  color:#f37021;
  position:relative;
}

.indus-process-heading span::after{
  content:"";
  position:absolute;
  left:0;
  bottom:-6px;
  width:0%;
  height:4px;
  background:#f37021;
  border-radius:5px;
  animation:underlineMove 2s infinite alternate;
}

@keyframes underlineMove{
  from{width:0%;}
  to{width:100%;}
}

/* GRID */
.indus-residential-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
  gap:30px;
  perspective: 1200px;
}

/* CARD */
.indus-residential-card{
  width:100%;
  height:250px;
  perspective:1000px;
}

.card-inner{
  position:relative;
  width:100%;
  height:100%;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.indus-residential-card:hover .card-inner{
  transform: rotateY(180deg);
}

/* FRONT & BACK */
.card-front, .card-back{
  position:absolute;
  width:100%;
  height:100%;
  backface-visibility: hidden;
  border-radius:16px;
  padding:25px 20px;
  box-shadow:0 12px 30px rgba(0,0,0,0.08);
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  transition:0.4s;
  text-align:center;
}

/* FRONT */
.card-front{
  background:#fff;
  border:2px solid #f37021;
}

.indus-residential-card:hover .card-front{
  border-color:#212384;
}

.card-front i{
  font-size:40px;
  color:#f37021;
  margin-bottom:15px;
  transition: color 0.4s ease;
}

.indus-residential-card:hover .card-front i{
  color:#212384;
}

.card-front h3{
  font-size:20px;
  color:#f37021;
  transition:color 0.3s ease;
  font-weight: 600;
}

.indus-residential-card:hover .card-front h3{
  color:#212384;
}

/* BACK */
.card-back{
  background:#ffffff;
  color:#212384;
  transform: rotateY(180deg);
  border:2px solid #f37021;
}

.indus-residential-card:hover .card-back{
  border-color:#212384;
}

.back-subheading{
  font-size:18px;
  font-weight:600;
  margin-bottom:15px;
  color:#212384;
  text-align:center;
  font-weight: 600;
}

.card-back p{
  font-size:16px;
  line-height:1.6;
  text-align:justify;
  color:#000
}

/* RESPONSIVE */
@media(max-width:768px){
  .indus-process-heading{
    font-size:28px;
  }
  .indus-residential-card{
    height:280px;
  }
}
</style>


<!--  Residential Applications ends -->


<!-- Performance, Efficiency  starts -->

<section class="indus-timeline-section">

  <h2 class="indus-process-heading">
    Performance, Efficiency & <span>Charging Benefits</span>
  </h2>

  <div class="indus-timeline-container">

    <!-- ITEM 1 -->
    <div class="indus-timeline-item">
      <div class="indus-timeline-dot"></div>
      <div class="indus-timeline-content">
        <p>
          A deep cycle short tubular battery supports repeated charge-discharge cycles, making it ideal for daily use. Many users prefer a low maintenance short tubular battery because it reduces water topping and service visits.
        </p>
      </div>
    </div>

    <!-- ITEM 2 -->
    <div class="indus-timeline-item">
      <div class="indus-timeline-dot"></div>
      <div class="indus-timeline-content">
        <p>
          A fast charging short tubular battery is beneficial in cities where power returns quickly, while a short tubular battery with long backup ensures sufficient runtime during extended outages.
        </p>
      </div>
    </div>

    <!-- ITEM 3 -->
    <div class="indus-timeline-item">
      <div class="indus-timeline-dot"></div>
      <div class="indus-timeline-content">
        <p>
          A tubular battery for frequent power cuts is essential in regions with unstable grids, and a short tubular battery for city homes fits seamlessly into modern living spaces.
        </p>
      </div>
    </div>

  </div>

</section>

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Montserrat',sans-serif;
}

/* SECTION */
.indus-timeline-section{
  padding:80px 20px;
  max-width:1000px;
  margin:auto;
}

.indus-process-heading{
  text-align:center;
  font-size:32px;
  font-weight:700;
  color:#212384;
  margin-bottom:60px;
}

.indus-process-heading span{
  color:#f37021;
  position:relative;
}

.indus-process-heading span::after{
  content:"";
  position:absolute;
  left:0;
  bottom:-6px;
  width:0%;
  height:4px;
  background:#f37021;
  border-radius:5px;
  animation:underlineMove 2s infinite alternate;
}

@keyframes underlineMove{
  from{width:0%;}
  to{width:100%;}
}

/* TIMELINE CONTAINER */
.indus-timeline-container{
  position:relative;
  display:flex;
  flex-direction:column;
  gap:60px;
  padding-left:40px;
}

/* TIMELINE LINE */
.indus-timeline-container::before{
  content:"";
  position:absolute;
  top:0;
  left:0;
  width:4px;
  height:100%;
  background:#f37021;
  border-radius:2px;
}

/* TIMELINE ITEM */
.indus-timeline-item{
  position:relative;
  display:flex;
  align-items:flex-start;
  gap:20px;
}

/* DOT */
.indus-timeline-dot{
  width:20px;
  height:20px;
  margin-left:-36px;
  background:#fff;
  border:4px solid #f37021;
  border-radius:50%;
  position:absolute;
  left:-12px; /* dot centered on line */
  top:53px; /* adjust vertical */
  z-index:2;
  transition:0.3s;
}

.indus-timeline-item:hover .indus-timeline-dot{
  border-color:#212384;
}

/* CONTENT BOX */
.indus-timeline-content{
  background:#ffffff;
  padding:20px 25px;
  border-radius:10px;
  box-shadow:0 5px 15px rgba(0,0,0,0.05);
  border:2px solid #f37021;
  flex:1;
  transition: all 0.4s ease;
  transform: translateY(0);
  position:relative;
  z-index:1;
}

.indus-timeline-item:hover .indus-timeline-content{
  border-color:#212384;
  box-shadow:0 15px 35px rgba(0,0,0,0.15);
  transform: translateY(-10px); /* pop up effect */
}

/* TEXT */
.indus-timeline-content p{
  font-size:16px;
  line-height:1.7;
  color:#000000;
  text-align:justify;
}

/* RESPONSIVE */
@media(max-width:768px){
  .indus-process-heading{
    font-size:28px;
  }
  .indus-timeline-container{
    padding-left:25px;
  }
  .indus-timeline-dot{
    width:16px;
    height:16px;
    left:-10px;
  }
}
</style>
<!-- Performance, Efficiency ends -->



<!-- Home, Commercial starts-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-residential-section">

<h2 class="indus-process-heading">
Home, Commercial, & <span> Professional Use </span>
</h2>

<div class="indus-residential-timeline">

<!-- ITEM 1 -->
<div class="indus-residential-item">

<div class="indus-res-icon">
<i class="fas fa-house-user"></i>
</div>

<div class="indus-res-content">
<h3> Residential Use</h3>

<p>An inverter battery for home use provides daily convenience, while an inverter battery for residential use supports families during power interruptions. Small businesses benefit from an inverter battery for commercial use, and professionals depend on a short tubular battery for office backup to maintain productivity.
</p>
</div>

</div>


<!-- ITEM 2 -->
<div class="indus-residential-item">

<div class="indus-res-icon">
<i class="fas fa-store"></i>
</div>

<div class="indus-res-content">
<h3> Commercial Use</h3>
<p>  Entrepreneurs choose a short tubular battery for small business, while shop owners rely on a short tubular battery for retail shop operations. Medical professionals trust a short tubular battery for clinic installations, and healthcare facilities install a short tubular battery for hospital support systems.
</p>
</div>

</div>


<!-- ITEM 3 -->
<div class="indus-residential-item">

<div class="indus-res-icon">
<i class="fas fa-microchip"></i>
</div>

<div class="indus-res-content">
<h3>Professional & Sensitive Equipment</h3>

<p>For sensitive electronics, a short tubular battery for medical equipment ensures safety, while IT users depend on a short tubular battery for computer and a short tubular battery for server to prevent data loss. Security infrastructure relies on a short tubular battery for CCTV and short tubular battery for security systems to ensure uninterrupted monitoring.</p>
</div>

</div>

</div>

</section>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Montserrat';
}

/* SECTION */

.indus-residential-section{
padding:50px 20px;
background:#ffffff;
}

/* MAIN HEADING */

.indus-process-heading{
text-align:center;
font-size:36px;
color:#212384;
font-weight:700;
margin-bottom:60px;
}

.indus-process-heading span{
color:#f37021;
}

/* TIMELINE */

.indus-residential-timeline{
max-width:950px;
margin:auto;
border-left:4px solid #e5e7ff;
padding-left:40px;
}

/* ITEM */

.indus-residential-item{
display:flex;
gap:25px;
margin-bottom:45px;
position:relative;
transition:0.4s;
}

/* ICON */

.indus-res-icon{
width:60px;
margin-top: 70px;
height:60px;
min-width:60px;
background:#f37021;
color:#fff;
display:flex;
align-items:center;
justify-content:center;
font-size:24px;
border-radius:50%;
position:absolute;
left:-72px;
top:0;
transition:0.4s;
}

/* CONTENT */

.indus-res-content{
background:#ffffff;
padding:25px 30px;
border-radius:10px;
transition:0.4s;
}

/* SUB HEADING */

.indus-res-content h3{
font-size:21px;
color:#f37021;
margin-bottom:10px;
transition:0.3s;
font-weight: 600;
}

/* TEXT */

.indus-res-content p{
font-size:17px;
text-align: justify;
line-height:1.7;
color:#000000;
}

/* HOVER EFFECT */

.indus-residential-item:hover .indus-res-icon{
background:#212384;
transform:scale(1.1) rotate(10deg);
}

.indus-residential-item:hover h3{
color:#212384;
}

.indus-residential-item:hover .indus-res-content{
transform:translateX(8px);
box-shadow:0 10px 25px rgba(0,0,0,0.12);
}

/* RESPONSIVE */

@media(max-width:768px){

.indus-residential-timeline{
border-left:none;
padding-left:0;
}

.indus-residential-item{
flex-direction:column;
}

.indus-res-icon{
position:relative;
left:0;
margin-bottom:15px;
}

.indus-process-heading{
font-size:28px;
}

}

</style>

<!-- Home, Commercial ends -->


<!-- Compatibility with Inverters starts -->

<section class="indus-compatibility-section">

  <h2 class="indus-process-heading">
    Compatibility with Inverters & <span> Solar Systems</span>
  </h2>

  <div class="indus-compatibility-cards">

    <!-- CARD 1 -->
    <div class="indus-compatibility-card">
      <div class="indus-compatibility-icon"><i class="fas fa-bolt"></i></div>
      <h3>Inverter UPS</h3>
      <p>A short tubular battery for inverter UPS delivers stable power output, ensuring uninterrupted operation during outages.</p>
    </div>

    <!-- CARD 2 -->
    <div class="indus-compatibility-card">
      <div class="indus-compatibility-icon"><i class="fas fa-solar-panel"></i></div>
      <h3>Solar Inverter</h3>
      <p>A short tubular battery for solar inverter supports renewable energy setups and stores clean energy efficiently.</p>
    </div>

    <!-- CARD 3 -->
    <div class="indus-compatibility-card">
      <div class="indus-compatibility-icon"><i class="fas fa-exchange-alt"></i></div>
      <h3>Hybrid Inverter</h3>
      <p>Many users install a short tubular battery for hybrid systems, offering flexibility between grid and solar supply.</p>
    </div>

    <!-- CARD 4 -->
    <div class="indus-compatibility-card">
      <div class="indus-compatibility-icon"><i class="fas fa-network-wired"></i></div>
      <h3>Grid-Connected Solar</h3>
      <p>A short tubular battery for grid-connected solar applications supports energy savings without complex installations.</p>
    </div>

  </div>

</section>

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Montserrat',sans-serif;
}

/* SECTION */
.indus-compatibility-section{
  padding:50px 20px;
  max-width:1200px;
  margin:auto;
  background:#ffffff;
  text-align:center;
  margin-top: -50px;

}

/* HEADING */
.indus-process-heading{
  font-size:32px;
  font-weight:700;
  color:#212384;
  margin-bottom:60px;
}

.indus-process-heading span{
  color:#f37021;
  position:relative;
}

.indus-process-heading span::after{
  content:"";
  position:absolute;
  left:0;
  bottom:-6px;
  width:0%;
  height:4px;
  background:#f37021;
  border-radius:5px;
  animation:underlineMove 2s infinite alternate;
}

@keyframes underlineMove{
  from{width:0%;}
  to{width:100%;}
}

/* CARDS CONTAINER */
.indus-compatibility-cards{
  display:grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap:30px;
  max-width:1200px;
  margin:auto;
  
}

/* CARD */
.indus-compatibility-card{
  background:#fff;
  border-radius:14px;
  padding:25px 20px;
  text-align:center;
  box-shadow:0 8px 20px rgba(0,0,0,0.08);
  transition: all 0.4s ease;
  cursor:pointer;
  position:relative;
  border: 2px solid #f37021
}

/* HOVER EFFECT */
.indus-compatibility-card:hover{
  transform: translateY(-10px);
  box-shadow:0 15px 35px rgba(0,0,0,0.15);
  border:2px solid #212384;
}

/* ICON */
.indus-compatibility-icon{
  font-size:36px;
  color:#f37021;
  margin-bottom:15px;
  transition: all 0.3s ease;
}

.indus-compatibility-card:hover .indus-compatibility-icon{
  transform: scale(1.2) rotate(10deg);
  color:#212384;
}

/* CARD HEADING */
.indus-compatibility-card h3{
  font-size:20px;
  color:#f37021;
  margin-bottom:10px;
  transition:0.3s;
  font-weight: 600;
}

.indus-compatibility-card:hover h3{
  color:#212384;
}

/* CARD TEXT */
.indus-compatibility-card p{
  font-size:16px;
  line-height:1.7;
  color:#000000;
  text-align:justify;
}

/* RESPONSIVE */
@media(max-width:768px){
  .indus-process-heading{
    font-size:28px;
  }
}
</style>
<!-- Compatibility with Inverters ends -->


<!-- Capacity, Voltage starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Montserrat',sans-serif;
}

/* SECTION */
.battery-section{
    max-width:1000px;
    margin:50px auto;
    padding:0 20px;
}

/* HEADER */
.battery-section h2{
    text-align:center;
    font-size:2.5rem;
    color:#212384;
    margin-bottom:50px;
}

.battery-section h2 span{
    color:#f37021;
}

/* GRID CARDS */
.battery-timeline{
    display:flex;
    flex-direction:column;
    gap:25px;
    position: relative;
}

/* CARD ITEM */
.battery-item{
    display:flex;
    align-items:flex-start;
    gap:20px;
    padding:20px;
    border-radius:12px;
    background:#ffffff;
    box-shadow:0 6px 15px rgba(0,0,0,0.08);
    transition:transform 0.3s ease, box-shadow 0.3s ease, border-left 0.3s ease;
    border-left: 4px solid transparent; /* default no border */
}

.battery-item:hover{
    transform: translateY(-8px);
    box-shadow:0 12px 25px rgba(0,0,0,0.15);
    border-left: 4px solid #212384; /* blue border on hover */
}

/* ICON */
.battery-item-icon{
    font-size:36px;
    color:#f37021;
    min-width:60px;
    display:flex;
    align-items:center;
    justify-content:center;
    transition: all 0.4s ease;
}

/* SUB-HEADING */
.battery-item-content h3{
    font-size:1.3rem;
    color:#f37021;
    margin-bottom:8px;
    transition: color 0.4s ease;
    font-weight: 600;
}

/* CONTENT */
.battery-item-content p{
    font-size:1rem;
    color:#000000;
    line-height:1.6;
}

/* ICON + HEADING ON HOVER */
.battery-item:hover .battery-item-icon{
    color:#212384;
    transform: scale(1.2) rotate(10deg);
}

.battery-item:hover .battery-item-content h3{
    color:#212384;
}

/* RESPONSIVE */
@media(max-width:768px){
    .battery-item{
        flex-direction:column;
        align-items:flex-start;
    }
    .battery-item-icon{
        margin-bottom:10px;
    }
}
</style>
</head>
<body>

<section class="battery-section">

    <h2 class="indus-process-heading">
    Capacity, Voltage & <span> Design Options</span>
  </h2>

    <div class="battery-timeline">

        <!-- ITEM 1 -->
        <div class="battery-item">
            <div class="battery-item-icon"><i class="fas fa-layer-group"></i></div>
            <div class="battery-item-content">
                <h3>Battery Models</h3>
                <p>We offer short tubular battery 100Ah, 120Ah, 135Ah, 150Ah, and 160Ah models to suit varied load requirements.</p>
            </div>
        </div>

        <!-- ITEM 2 -->
        <div class="battery-item">
            <div class="battery-item-icon"><i class="fas fa-plug-circle-bolt"></i></div>
            <div class="battery-item-content">
                <h3>Voltage Options</h3>
                <p>A short tubular inverter battery 12V is commonly used in residential systems, while high capacity options support longer backup.</p>
            </div>
        </div>

        <!-- ITEM 3 -->
        <div class="battery-item">
            <div class="battery-item-icon"><i class="fas fa-bolt-lightning"></i></div>
            <div class="battery-item-content">
                <h3>High Efficiency</h3>
                <p>The high efficiency design reduces energy loss during charge/discharge cycles, ensuring optimal power delivery to your devices.</p>
            </div>
        </div>

        <!-- ITEM 4 -->
        <div class="battery-item">
            <div class="battery-item-icon"><i class="fas fa-box-open"></i></div>
            <div class="battery-item-content">
                <h3>Compact & Space-Saving</h3>
                <p>Compact size and space-saving construction make these batteries ideal for apartments and offices.</p>
            </div>
        </div>

    </div>
</section>


<!-- Capacity, Voltage ends -->


<!-- Build Quality starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<section class="indus-mini-accordion">

  <h2 class="indus-process-heading">
    Build Quality & <span>Durability</span>
  </h2>

  <div class="indus-mini-row">

    <!-- CARD 1 -->
    <div class="indus-mini-card">
      <div class="indus-mini-icon"><i class="fas fa-th-large"></i></div>
      <h3>Thick Plates</h3>
      <p>A short tubular battery with thick plates enhances durability and ensures reliable performance over time.</p>
    </div>

    <!-- CARD 2 -->
    <div class="indus-mini-card">
      <div class="indus-mini-icon"><i class="fas fa-cogs"></i></div>
      <h3>Robust Design</h3>
      <p>Engineered with a robust design to provide long-term performance, even under continuous heavy usage.</p>
    </div>

    <!-- CARD 3 -->
    <div class="indus-mini-card">
      <div class="indus-mini-icon"><i class="fas fa-shield-alt"></i></div>
      <h3>Corrosion Resistant</h3>
      <p>Corrosion-resistant finish ensures that the battery maintains efficiency and durability over the years.</p>
    </div>

    <!-- CARD 4 -->
    <div class="indus-mini-card">
      <div class="indus-mini-icon"><i class="fas fa-battery-full"></i></div>
      <h3>Long Life & Backup</h3>
      <p>Offers extended battery life and strong backup capability for continuous and reliable power supply.</p>
    </div>

  </div>

</section>

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Montserrat';
}

/* SECTION */
.indus-mini-accordion{
  padding:50px 20px;
  background:#ffffff;
  text-align:center;
}

.indus-process-heading{
  font-size:32px;
  font-weight:700;
  color:#212384;
  margin-bottom:60px;
}

.indus-process-heading span{
  color:#f37021;
  position:relative;
}

/* ROW OF CARDS */
.indus-mini-row{
  display:flex;
  gap:20px;
  max-width:1200px;
  margin:auto;
  flex-wrap:wrap;
}

/* CARD STYLES */
.indus-mini-card{
  background:#fff;
  border-radius:14px;
  padding:20px;
  flex:1; /* equal width initially */
  height:150px; /* closed height */
  text-align:center;
  box-shadow:0 8px 20px rgba(0,0,0,0.08);
  transition:all 0.5s ease;
  cursor:pointer;
  overflow:hidden;
  display:flex;
  flex-direction:column;
  align-items:center;
  border:2px solid #f37021;
}

/* ICON */
.indus-mini-icon{
  font-size:36px;
  color:#f37021;
  margin-bottom:10px;
  transition:all 0.4s ease;
}

/* SUBHEADING */
.indus-mini-card h3{
  font-size:20px;
  color:#f37021;
  margin-bottom:5px;
  transition:0.4s;
  font-weight: 600;
}

/* CONTENT */
.indus-mini-card p{
  opacity:0;
  max-height:0;
  overflow:hidden;
  font-size:16px;
  line-height:1.6;
  color:#000000;
  transition:all 0.5s ease;
  text-align:center;
  margin-top:0;
}

/* HOVER EFFECT: Expand downward */
.indus-mini-card:hover{
  height:280px; /* increase height downward */
  box-shadow:0 15px 35px rgba(0,0,0,0.15);
  border:2px solid #212384;
}

.indus-mini-card:hover .indus-mini-icon{
  transform: scale(1.2) rotate(10deg);
  color:#212384;
}

.indus-mini-card:hover h3{
  color:#212384;
}

.indus-mini-card:hover p{
  opacity:1;
  max-height:150px;
  margin-top:15px;
}

/* RESPONSIVE */
@media(max-width:992px){
  .indus-mini-row{
    flex-direction:column;
  }
  .indus-mini-card{
    width:100%;
    height:auto;
  }
}
</style>
<!-- Build Quality  ends  -->


<!-- Pricing, Availability  starts  -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<section class="indus-value-section">

<h2 class="indus-process-heading">
Pricing, Availability &  <span>Buying Factors</span>
</h2>

<div class="indus-value-timeline">

    <!-- ITEM 1 -->
    <div class="indus-value-item left">
        <div class="indus-value-icon">
            <i class="fas fa-money-bill-wave"></i> <!-- Pricing -->
        </div>
        <div class="indus-value-content">
            <h3>Transparent Pricing</h3>
            <p>
            Customers frequently search for short tubular battery price, short tubular battery price in India, and tubular inverter battery short price. We maintain transparency in inverter battery short tubular price, offering an affordable option without compromising quality.
            </p>
        </div>
    </div>

    <!-- ITEM 2 -->
    <div class="indus-value-item right">
        <div class="indus-value-icon">
            <i class="fas fa-map-marker-alt"></i> <!-- Availability -->
        </div>
        <div class="indus-value-content">
            <h3>Availability & Network</h3>
            <p>
            A clear short tubular battery cost structure and best price options help customers make informed decisions. Those searching for a short tubular battery near me can access our nationwide network, including a tubular battery dealer near me or inverter battery shop near me.
            </p>
        </div>
    </div>

    <!-- ITEM 3 -->
    <div class="indus-value-item left">
        <div class="indus-value-icon">
            <i class="fas fa-building"></i> <!-- Trusted Supplier -->
        </div>
        <div class="indus-value-content">
            <h3>Trusted Supplier</h3>
            <p>
            As a trusted short tubular battery supplier, manufacturer, and manufacturer India, Indus Power Industries is a recognized short tubular battery company and dependable brand.
            </p>
        </div>
    </div>

</div>
</section>

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Montserrat',sans-serif;
}

.indus-value-section{
  padding:90px 20px;
  background:#fff;
}

/* HEADING */
.indus-process-heading{
  text-align:center;
  font-size:36px;
  color:#212384;
  margin-bottom:70px;
}
.indus-process-heading span{
  color:#f37021;
}

/* TIMELINE */
.indus-value-timeline{
  position:relative;
  max-width:1100px;
  margin:auto;
}

/* CENTER LINE */
.indus-value-timeline::before{
  content:"";
  position:absolute;
  left:50%;
  top:0;
  bottom:0;
  width:4px;
  background:#dad9d9;
  transform:translateX(-50%);
}

/* ITEMS */
.indus-value-item{
  position:relative;
  width:50%;
  padding:20px 40px;
}

/* LEFT SIDE */
.indus-value-item.left{
  left:0;
  margin-left: -44px;
  text-align:right;
}

/* RIGHT SIDE */
.indus-value-item.right{
  margin-left: 44px;    
  left:50%;
}

/* CARD */
.indus-value-content{
  background:#fff;
  padding:25px;
  border-radius:12px;
  box-shadow:0 10px 25px rgba(0,0,0,0.08);
  border:2px solid #f37021; /* Default border */
  transition:0.4s;
}

.indus-value-content:hover{
  transform:translateY(-8px);
  box-shadow:0 18px 40px rgba(0,0,0,0.15);
  border-color:#212384; /* Blue border on hover */
}

/* ICON */
.indus-value-icon{
  position:absolute;
  top:130px;
  width:50px;
  height:50px;
  border-radius:50%;
  background:#fff;
  border:3px solid #f37021;
  display:flex;
  align-items:center;
  justify-content:center;
  color:#f37021;
  font-size:20px;
  animation:floatIcon 3s ease-in-out infinite;
  transition:0.4s;
}

/* POSITION ICONS AWAY FROM LINE */
.indus-value-item.left .indus-value-icon{
  right:-70px;
}
.indus-value-item.right .indus-value-icon{
  left:-70px;
}

/* ICON HOVER */
.indus-value-item:hover .indus-value-icon{
  color:#212384;
  border-color:#212384;
  transform:rotate(180deg) scale(1.2); /* Half rotate */
}

/* TEXT */
.indus-value-content h3{
  color:#f37021;
  margin-bottom:8px;
  font-weight: 600;
  font-size: 24px;
}
.indus-value-content:hover h3{
  color:#212384;
}

.indus-value-content p{
  font-size:16px;
  line-height:1.6;
  color:#000000;
}

/* FLOAT ANIMATION */
@keyframes floatIcon{
  0%{transform:translateY(0);}
  50%{transform:translateY(-6px);}
  100%{transform:translateY(0);}
}

/* MOBILE */
@media(max-width:768px){
  .indus-value-timeline::before{
    left:20px;
  }
  .indus-value-item{
    width:100%;
    padding-left:60px;
  }
  .indus-value-item.right{
    left:0;
  }
  .indus-value-icon{
    left:0;
  }
}
</style>

<!-- Pricing, Availability ends -->


<!-- Distribution, Installation starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="support-grid-section">

  <h2 class="indus-process-heading">
Distribution, Installation & <span>After-Sales Support</span>
</h2>

  <div class="support-grid-container">

    <!-- ITEM 1 -->
    <div class="support-grid-item">
      <div class="support-grid-icon"><i class="fas fa-truck"></i></div>
      <h3>Distribution & Wholesaling</h3>
      <p>We operate as a short tubular battery distributor and wholesaler, supporting every inverter battery dealer and supplier in our network.</p>
    </div>

    <!-- ITEM 2 -->
    <div class="support-grid-item">
      <div class="support-grid-icon"><i class="fas fa-toolbox"></i></div>
      <h3>Installation & Service</h3>
      <p>Our services include battery installation, maintenance, and AMC, ensuring your inverter systems run smoothly and reliably.</p>
    </div>

    <!-- ITEM 3 -->
    <div class="support-grid-item">
      <div class="support-grid-icon"><i class="fas fa-handshake"></i></div>
      <h3>Repair & Maintenance</h3>
      <p>Customers benefit from repair facilities and inverter battery servicing near me, backed by prompt, reliable support.</p>
    </div>

    <!-- ITEM 4 -->
    <div class="support-grid-item">
      <div class="support-grid-icon"><i class="fas fa-shield-alt"></i></div>
      <h3>Warranty Support</h3>
      <p>Each product includes a battery warranty, supported by an inverter battery long warranty policy for total peace of mind.</p>
    </div>

  </div>
</section>

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Montserrat',sans-serif;
}

/* SECTION */
.support-grid-section{
  max-width:1200px;
  margin:10px auto;
  padding:0 20px;
  background:#ffffff;
  text-align:center;
}

/* HEADING */
.support-grid-heading{
  font-size:36px;
  color:#212384;
  margin-bottom:60px;
}
.support-grid-heading span{
  color:#f37021;
}

/* GRID CONTAINER */
.support-grid-container{
  display:grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap:40px;
}

/* GRID ITEM */
.support-grid-item{
  background:#fff;
  padding:30px 20px;
  border-radius:15px;
  box-shadow:0 6px 20px rgba(0,0,0,0.08);
  transition: all 0.4s ease;
  position:relative;
}

.support-grid-item:hover{
  transform:translateY(-10px);
  box-shadow:0 15px 35px rgba(0,0,0,0.15);
}

/* ICON */
.support-grid-icon{
  font-size:36px;
  width:70px;
  height:70px;
  background:#f37021;
  border-radius:50%;
  color:#fff;
  display:flex;
  align-items:center;
  justify-content:center;
  margin:0 auto 20px;
  transition: all 0.4s ease;
}

.support-grid-item:hover .support-grid-icon{
  background:#212384;
  transform: scale(1.2) rotate(15deg);
}

/* HEADING */
.support-grid-item h3{
  font-size:1.3rem;
  color:#f37021;
  margin-bottom:15px;
  transition: color 0.4s ease;
  font-weight: 600;
}

.support-grid-item:hover h3{
  color:#212384;
}

/* PARAGRAPH */
.support-grid-item p{
  font-size:1rem;
  line-height:1.6;
  color:#000;
}

/* RESPONSIVE */
@media(max-width:768px){
  .support-grid-container{
    grid-template-columns:1fr;
  }
}
</style>


<!-- Distribution, Installation ends -->



<!--Reliability in starts -->
<section class="indus-installation-column">

  <h2 class="indus-process-heading">
    Reliability in <span> Indian Conditions</span>
  </h2>

  <div class="indus-installation-grid">

    <!-- BOX 1 -->
    <div class="indus-installation-box">
      <div class="indus-box-header">
        <i class="fas fa-tools"></i>
        <h3>Durable & Efficient</h3>
      </div>
     <p>
      A reliable short tubular battery must withstand heat, humidity, and voltage variations. Our batteries are high performance and energy-efficient, qualifying as eco-friendly inverter batteries.
     </p>
    </div>

    <!-- BOX 2 -->
    <div class="indus-installation-box">
      <div class="indus-box-header">
        <i class="fas fa-wrench"></i>
        <h3>Built for Indian Climate </h3>
      </div>
      <p>
        Designed for Indian conditions, our batteries perform well in high temperature environments and harsh conditions, ensuring consistent backup and reliability.
      </p>
    </div>

  </div>

</section>

<style>
    *{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Montserrat',sans-serif;
}

/* SECTION */
.indus-installation-column{
  padding:50px 20px;
  background:#ffffff;
  text-align:center;
}

/* HEADING */
.indus-process-heading{
  font-size:36px;
  color:#212384;
  font-weight:700;
  margin-bottom:60px;
}

.indus-process-heading span{
  color:#f37021;
}

/* GRID */
.indus-installation-grid{
  display:grid;
  gap:30px;
   width: 788px;
  margin:auto;
  text-align: center;
}

/* BOX */
.indus-installation-box{
  background:#fff;
  border-radius:12px;
  box-shadow:0 10px 25px rgba(0,0,0,0.08);
  padding:30px 20px;
  overflow:hidden;
  cursor:pointer;
  border:2px solid #f37021;
  transition:0.5s;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:flex-start;
  min-height:180px;
  text-align: center;
}

/* HEADER (ICON + HEADING) */
.indus-box-header{
  display:flex;
  flex-direction:column;
  align-items:center;
  margin-bottom:15px;
  text-align: center;

}

.indus-box-header i{
  font-size:32px;
  color:#f37021;  /* orange first */
  margin-bottom:10px;
  transition:0.4s;
  animation:floatIcon 3s ease-in-out infinite;
}

.indus-box-header h3{
  font-size:20px;
  color:#f37021;   /* orange first */
  transition:0.4s;
  text-align: center;
  font-weight: 600;
}

/* PARAGRAPH */
.indus-installation-box p{
  opacity:0;
  transform:translateY(20px);
  font-size:16px;
  line-height:1.7;
  color:#000000;
  transition:0.5s;
  text-align:center;
}

/* HOVER EFFECT */
.indus-installation-box:hover{
  transform:translateY(-8px);
  border-color:#212384;  /* blue border on hover */
  box-shadow:0 18px 40px rgba(0,0,0,0.15);
}

.indus-installation-box:hover i{
  color:#212384;   /* icon turns blue */
}

.indus-installation-box:hover h3{
  color:#212384;  /* heading turns blue */
}

.indus-installation-box:hover p{
  opacity:1;
  transform:translateY(0);
}

/* FLOAT ICON ANIMATION */
@keyframes floatIcon{
  0%{transform:translateY(0);}
 50%{transform:translateY(-6px);}
 100%{transform:translateY(0);}
}

/* RESPONSIVE */
@media(max-width:992px){
  .indus-installation-grid{
    grid-template-columns:repeat(2,1fr);
  }
}

@media(max-width:600px){
  .indus-installation-grid{
    grid-template-columns:1fr;
  }

  .indus-process-heading{
    font-size:28px;
  }
}
</style>


<!--  Reliability in ends  -->


<!-- Everyday Usage starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-installation-column">

  <h2 class="indus-process-heading">
    Everyday Usage & <span>Appliance Support</span></h2>

  <div class="usage-grid">

    <!-- ROW 1 -->
    <div class="usage-item">
      <div class="usage-icon"><i class="fas fa-plug"></i></div>
      <div class="usage-content">
        <h3>Continuous & Uninterrupted Power</h3>
        <p>A short tubular battery for continuous power ensures smooth daily operation, while an inverter battery for uninterrupted power prevents sudden shutdowns.</p>
      </div>
    </div>

    <!-- ROW 2 -->
    <div class="usage-item">
      <div class="usage-icon"><i class="fas fa-bolt"></i></div>
      <div class="usage-content">
        <h3>Backup & Frequent Discharge</h3>
        <p>A short tubular battery for backup power supports regular needs, and an inverter battery for daily use fits household routines. Supports repeated cycles efficiently for frequent discharge.</p>
      </div>
    </div>

    <!-- ROW 3 -->
    <div class="usage-item">
      <div class="usage-icon"><i class="fas fa-lightbulb"></i></div>
      <div class="usage-content">
        <h3>Appliance Compatibility</h3>
        <p>Ideal for lights, fans, TVs, computers, and other medium or light load appliances. Ensures smooth operation for essential loads 24x7.</p>
      </div>
    </div>

  </div>
</section>

<style>
* {
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Montserrat',sans-serif;
}

/* SECTION */
.usage-section{
  max-width:900px;
  margin:50px auto;
  padding:0 20px;
  text-align:center;
  background:#ffffff;
}

/* HEADING */
.section-heading{
  font-size:36px;
  color:#212384;
  margin-bottom:50px;
}
.section-heading span{
  color:#f37021;
}

/* GRID */
.usage-grid{
  display:flex;
  flex-direction:column;
  gap:40px;
  margin-left:123px;
  margin-right:123px;
}

/* ITEM */
.usage-item{
  display:flex;
  align-items:center;
  gap:20px;
  background:#fff;
  border-radius:15px;
  padding:20px 25px;
  box-shadow:0 6px 20px rgba(0,0,0,0.08);
  transition: transform 0.4s ease, box-shadow 0.4s ease, border 0.4s ease;
  border:2px solid #f37021; /* Default border */
  cursor:pointer;
}

.usage-item:hover{
  transform: translateY(-8px);
  box-shadow:0 12px 30px rgba(0,0,0,0.15);
  border-color:#212384; /* Blue border on hover */
}

/* ICON */
.usage-icon{
  width:60px;
  height:60px;
  border-radius:50%;
  background:#f37021;
  color:#fff;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:24px;
  flex-shrink:0;
  animation: floatIcon 3s ease-in-out infinite;
  transition: all 0.4s ease;
}

.usage-item:hover .usage-icon{
  background:#212384;
  transform:scale(1.2) rotate(15deg);
}

/* CONTENT */
.usage-content h3{
  font-size:1.3rem;
  color:#f37021;
  margin-bottom:8px;
      text-align: left;
  transition: color 0.4s ease;
  font-weight: 600;
}

.usage-item:hover .usage-content h3{
  color:#212384;
}

.usage-content p{
  font-size:1rem;
  line-height:1.6;
  color:#000;
  text-align:left;
}

/* FLOAT ICON ANIMATION */
@keyframes floatIcon{
  0%{transform:translateY(0);}
  50%{transform:translateY(-6px);}
  100%{transform:translateY(0);}
}

/* RESPONSIVE */
@media(max-width:768px){
  .usage-item{
    flex-direction:column;
    text-align:center;
    gap:15px;
  }
  .usage-content p{
    text-align:center;
  }
}
</style>
<!-- Everyday Usage ends -->

<!--  Inverter Compatibility strts -->

<section class="indus-installation-column">

  <h2 class="indus-process-heading">
    Inverter Compatibility & <span>Long-Term Value</span></h2>

  <div class="inverter-grid">

    <!-- SQUARE 1 -->
    <div class="inverter-square">
      <div class="square-icon"><i class="fas fa-plug-circle-bolt"></i></div>
      <h3>Seamless Compatibility</h3>
      <p>Works seamlessly with tubular inverters and pure sine wave inverters, ensuring smooth power output.</p>
    </div>

    <!-- SQUARE 2 -->
    <div class="inverter-square">
      <div class="square-icon"><i class="fas fa-tachometer-alt"></i></div>
      <h3>Efficiency & Low Water Loss</h3>
      <p>Short tubular plates with low water loss maintain efficiency and reduce maintenance for long-term use.</p>
    </div>

    <!-- SQUARE 3 -->
    <div class="inverter-square">
      <div class="square-icon"><i class="fas fa-shield-alt"></i></div>
      <h3>Long-Term Reliability</h3>
      <p>High reliability and consistent performance make it one of the best short tubular inverter batteries in India.</p>
    </div>

  </div>
</section>

<style>
/* SQUARE CARD */
.inverter-square {
  background:#fff;
  border-radius:12px;
  padding:25px 20px;
  box-shadow:0 6px 20px rgba(0,0,0,0.08);
  transition:all 0.4s ease;
  cursor:pointer;
  position:relative;
  border:2px solid #f37021; /* ORANGE BORDER BEFORE HOVER */
}

.inverter-square:hover {
  transform:translateY(-8px);
  box-shadow:0 12px 35px rgba(0,0,0,0.15);
  border:2px solid #212384; /* BLUE BORDER AFTER HOVER */
}

* {
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Montserrat',sans-serif;
}

/* SECTION */
.inverter-section {
  max-width:1000px;
  margin:60px auto;
  padding:0 20px;
  text-align:center;
  background:#ffffff;
  border:/* SQUARE CARD */
}

.inverter-square {
  background:#fff;
  border-radius:12px;
  padding:25px 20px;
  box-shadow:0 6px 20px rgba(0,0,0,0.08);
  transition:all 0.4s ease;
  cursor:pointer;
  position:relative;
  border:2px solid #f37021; /* ORANGE BORDER BEFORE HOVER */
}

.inverter-square:hover {
  transform:translateY(-8px);
  box-shadow:0 12px 35px rgba(0,0,0,0.15);
  border:2px solid #212384; /* BLUE BORDER AFTER HOVER */
}


/* HEADING */
.section-heading {
  font-size:36px;
  color:#212384;
  margin-bottom:50px;
}
.section-heading span {
  color:#f37021;
}

/* GRID */
.inverter-grid {
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
  gap:30px;
      margin-left: 55px;
    margin-right: 55px;

}

/* SQUARE CARD */
.inverter-square {
  background:#fff;
  border-radius:12px;
  padding:25px 20px;
  box-shadow:0 6px 20px rgba(0,0,0,0.08);
  transition:all 0.4s ease;
  cursor:pointer;
  position:relative;
}

.inverter-square:hover {
  transform:translateY(-8px);
  box-shadow:0 12px 35px rgba(0,0,0,0.15);
  border:2px solid #212384; /* blue border on hover */
}

/* ICON */
.square-icon {
  width:60px;
  height:60px;
  border-radius:50%;
  background:#f37021;
  color:#fff;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:24px;
  margin:0 auto 15px;
  transition: all 0.4s ease;
  animation: floatRotate 3s ease-in-out infinite;
}

.inverter-square:hover .square-icon {
  background:#212384;
  transform:scale(1.3) rotate(15deg);
}

/* HEADING */
.inverter-square h3 {
  font-size:1.2rem;
  color:#f37021;
  margin-bottom:10px;
  transition:color 0.4s ease;
  font-weight: 600;
}

.inverter-square:hover h3 {
  color:#212384;
}

/* TEXT */
.inverter-square p {
  font-size:1rem;
  line-height:1.6;
  color:#000;
}

/* FLOAT + ROTATE ICON ANIMATION */
@keyframes floatRotate {
  0%   {transform: translateY(0) rotate(0deg);}
  25%  {transform: translateY(-4px) rotate(3deg);}
  50%  {transform: translateY(0) rotate(0deg);}
  75%  {transform: translateY(-4px) rotate(-3deg);}
  100% {transform: translateY(0) rotate(0deg);}
}

/* RESPONSIVE */
@media(max-width:768px){
  .inverter-grid {
    grid-template-columns:1fr;
  }
}
</style>


<!--  -->



<!-- conclusion starts -->

<section>

    <!-- CONCLUSION TOP -->
<section class="indus-conclusion-new">

<h2 class="indus-process-heading">
<span>Conclusion</span>
</h2>

<p class="indus-conclusion-text">
If you are looking for a compact, efficient, and durable inverter battery solution, the short tubular inverter batteries from Indus Power Industries Pvt Ltd provide the perfect balance of performance, affordability, and reliability for Indian power conditions.
</p>

</section>

<style>

/* SECTION */

.indus-conclusion-new{
padding:50px 20px;
font-family:'Montserrat';
text-align:center;
}


/* PARAGRAPH */

.indus-conclusion-text{
font-size:18px;
color:#000000;
max-width:1000px;
margin:25px auto;
line-height:1.8;
text-align:justify;   /* justified text */
font-weight:400;      /* not bold */
}



</style>

<!-- Conclusion Section End -->







<?php include ('footer.php'); ?>

</body>
</html>