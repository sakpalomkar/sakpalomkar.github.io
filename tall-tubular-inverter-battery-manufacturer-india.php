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
    font-size: 38px;
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
        <h1>Tall Tubular Inverter Battery Manufacturer India</h1>
        <div class="premium-breadcrumb-trail">
            <a href="#">Home</a> 
            &nbsp;»&nbsp; 
            <a href="#">Products</a> 
            &nbsp;»&nbsp;
            <a href="#">Inverter Battery</a> 
            &nbsp;»&nbsp;
            <span>Tall Tubular Inverter Battery</span>
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
    background:rgba(255,255,255,0.6);
    backdrop-filter: blur(15px);
    border-radius:20px;
    box-shadow:0 20px 50px rgba(0,0,0,0.15);
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
    <img src="img/Tall Tubular.png" class="tech-display-image" alt="">
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















<!-- all section start -->
<section class="feature-section">

<h2>
Residential Applications Of Tall
<span class="underline-animation"> Tubular Batteries</span>
</h2>

<div class="feature-grid">

<div class="feature-box">
<i class="fas fa-home"></i>
<h3>Home Backup</h3>
<p>Supports essential appliances during power cuts in houses and flats.</p>
</div>

<div class="feature-box">
<i class="fas fa-building"></i>
<h3>Apartment Living</h3>
<p>Compact yet powerful backup solution for modern apartments.</p>
</div>

<div class="feature-box">
<i class="fas fa-bolt"></i>
<h3>Whole House Backup</h3>
<p>High capacity batteries provide reliable long duration backup.</p>
</div>

</div>
</section>

<style>
  .feature-section{
padding:80px 20px;
text-align:center;
}

.feature-section h2{
font-size:36px;
color:#212384;
margin-bottom:50px;
font-weight: 700;
}

/* ORANGE TEXT */

.underline-animation{
color:#f37021;
position:relative;
display:inline-block;
}

/* UNDERLINE ANIMATION */

.underline-animation::after{
content:"";
position:absolute;
left:0;
bottom:-8px;
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

.feature-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:30px;
max-width:1000px;
margin:auto;
}

/* CARD */

.feature-box{
background:#fff;
padding:30px;
border-radius:12px;
border:2px solid #f37021;
transition:0.4s;
}

/* ICON */

.feature-box i{
font-size:34px;
color:#f37021;
margin-bottom:12px;
display:block;
transition:0.4s;
}

/* SUB HEADING */

.feature-box h3{
color:#f37021;
font-size:22px;
margin-bottom:10px;
transition:0.4s;
font-weight: 600;
}

/* CARD HOVER */

.feature-box:hover{
transform:translateY(-10px);
border-color:#212384;
}

/* ICON HOVER ANIMATION */

.feature-box:hover i{
color:#212384;
animation:iconBounce 0.6s ease;
}

/* ICON BOUNCE */

@keyframes iconBounce{
0%{transform:scale(1);}
50%{transform:scale(1.3);}
100%{transform:scale(1);}
}

/* HEADING COLOR */

.feature-box:hover h3{
color:#212384;
}
</style>
<!-- Residential Applications end  -->


<!-- Performance &  starts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="step-section">

  <h2 class="step-heading">
    Performance & <span class="underline-animation">Durability</span>
  </h2>

  <div class="steps">

    <!-- STEP 1 -->
    <div class="step" onclick="openPopup('popup1')">
      <div class="step-icon">
        <i class="fas fa-cogs"></i>
      </div>
      <div class="step-content">
        <h3>Heavy Duty Design</h3>
        <p>Heavy duty tall tubular batteries handle demanding loads.</p>
      </div>
    </div>

    <!-- STEP 2 -->
    <div class="step" onclick="openPopup('popup2')">
      <div class="step-icon">
        <i class="fas fa-sync"></i>
      </div>
      <div class="step-content">
        <h3>Deep Cycle Technology</h3>
        <p>Deep cycle technology supports frequent power cuts.</p>
      </div>
    </div>

    <!-- STEP 3 -->
    <div class="step" onclick="openPopup('popup3')">
      <div class="step-icon">
        <i class="fas fa-bolt"></i>
      </div>
      <div class="step-content">
        <h3>Fast Charging</h3>
        <p>Fast charging ensures quicker recharge after outages.</p>
      </div>
    </div>

  </div>

</section>

<!-- POPUPS -->
<div id="popup1" class="popup">
  <div class="popup-content">
    <span class="close" onclick="closePopup('popup1')">&times;</span>
    <h3>Heavy Duty Design</h3>
    <p>Tall tubular batteries are built with thick plates and durable construction to support demanding electrical loads.</p>
  </div>
</div>

<div id="popup2" class="popup">
  <div class="popup-content">
    <span class="close" onclick="closePopup('popup2')">&times;</span>
    <h3>Deep Cycle Technology</h3>
    <p>These batteries are designed to handle frequent discharge and recharge cycles without losing performance.</p>
  </div>
</div>

<div id="popup3" class="popup">
  <div class="popup-content">
    <span class="close" onclick="closePopup('popup3')">&times;</span>
    <h3>Fast Charging</h3>
    <p>Fast charging capability ensures the battery is ready again quickly after a power outage.</p>
  </div>
</div>

<style>
/* SECTION */
.step-section{
  padding:90px 20px;
  background:#ffffff;
  text-align:center;
  font-family:'Montserrat';
}

/* HEADING */
.step-heading{
  font-size:36px;
  margin-top: -47px;
  color:#212384;
  margin-bottom:60px;
  font-weight: 700;
}

.underline-animation{
  color:#f37021;
  position:relative;
  display:inline-block;
}

.underline-animation::after{
  content:"";
  position:absolute;
  left:0;
  bottom:-8px;
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

/* GRID LAYOUT */
.steps{
  display:grid;
  grid-template-columns:repeat(2,1fr);
  gap:25px;
  max-width:1071px;
  margin:auto;
}

.step:nth-child(3){
  grid-column:1 / span 2;
  justify-self:center;
  max-width:1132px;
}

/* CARD */
.step{
  background:#fff;
  padding:25px 30px;
  border-radius:12px;
  display:flex;
  align-items:center;
  gap:20px;
  border-left:4px solid #f37021;
  box-shadow:0 10px 25px rgba(0,0,0,0.08);
  cursor:pointer;
  transition:0.4s;
}

/* ICON - Equal size circles */
.step-icon{
  width:50px;
  height:50px;
  border-radius:50%;
  background:#f37021;
  display:flex;
  align-items:center;
  justify-content:center;
  transition:0.4s;
  flex-shrink:0;
}

.step-icon i{
  color:#fff;
  font-size:28px;
  line-height:1;
}

/* TEXT */
.step-content h3{
  color:#f37021;
  margin-bottom:6px;
  transition:0.4s;
  font-size:22px;
  font-weight: 600;
}

.step-content p{
  font-size:18px;
  color:#000000;
}

/* HOVER */
.step:hover{
  transform:translateY(-6px);
  border-left:4px solid #212384;
  box-shadow:0 15px 30px rgba(0,0,0,0.12);
}

.step:hover .step-icon{
  background:#212384;
  transform:scale(1.1);
}

.step:hover .step-content h3{
  color:#212384;
}

/* POPUP */
.popup{
  display:none;
  position:fixed;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background:rgba(0,0,0,0.6);
  justify-content:center;
  align-items:center;
}

.popup-content{
  background:#fff;
  padding:30px;
  border-radius:12px;
  width:350px;
  text-align:center;
  position:relative;
  animation:popupAnim 0.3s ease;
}

.close{
  position:absolute;
  right:15px;
  top:10px;
  font-size:24px;
  cursor:pointer;
}

@keyframes popupAnim{
  from{transform:scale(0.7);opacity:0}
  to{transform:scale(1);opacity:1}
}

/* MOBILE */
@media(max-width:768px){
  .steps{
    grid-template-columns:1fr;
  }
}
</style>

<script>
function openPopup(id){
  document.getElementById(id).style.display="flex";
}
function closePopup(id){
  document.getElementById(id).style.display="none";
}
</script>
<!-- Performance &  end -->



<!-- Suitable for start -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="condition-section">

<h2 class="condition-heading">
Suitable For Rural & <span class="underline-animation">Urban Conditions</span>
</h2>

<div class="condition-wrapper">

<!-- Rural -->
<div class="condition-box">
<div class="condition-icon">
<i class="fas fa-tree"></i>
</div>

<h3>Rural Areas</h3>

<ul>
<li>Tubular battery handles frequent power cuts.</li>
<li>Reliable inverter battery for long outages.</li>
<li>Ideal tall tubular battery for rural areas.</li>
</ul>

</div>

<!-- Urban -->
<div class="condition-box">
<div class="condition-icon">
<i class="fas fa-city"></i>
</div>

<h3>Urban Homes & Offices</h3>

<ul>
<li>Backup for flats and modern homes.</li>
<li>Reliable inverter battery for residential use.</li>
<li>Supports office and commercial operations.</li>
</ul>

</div>

</div>

</section>

<style>

.condition-section{
    padding:90px 20px;
    background:#ffffff;
    text-align:center;
}

.condition-heading{
    font-size:36px;
    font-weight: 700;
    color:#212384;
    margin-bottom:60px;
    /* Removed top margin line */
}

/* ORANGE TEXT */
.underline-animation{
    color:#f37021;
    position:relative;
    display:inline-block;
}

/* UNDERLINE ANIMATION */
.underline-animation::after{
    content:"";
    position:absolute;
    left:0;
    bottom:-8px;
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

/* Layout */
.condition-wrapper{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:40px;
    max-width:1000px;
    margin:auto;
}

/* Box */
.condition-box{
    background:#fff;
    padding:35px;
    border-radius:12px;
    border:2px solid #f37021; /* initial orange border */
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
    transition:0.4s;
}

/* Icon */
.condition-icon{
    width:70px;
    height:70px;
    border-radius:50%;
    background:#f37021; /* initial orange background */
    display:flex;
    align-items:center;
    justify-content:center;
    margin:auto;
    margin-bottom:15px;
    transition:0.4s;
}

.condition-icon i{
    color:#fff;
    font-size:28px;
}

/* Heading */
.condition-box h3{
    color:#f37021; /* initial orange text */
    margin-bottom:15px;
    transition:0.4s;
    font-size:22px;
    font-weight: 600;
}

/* List */
.condition-box ul{
    list-style:none;
    padding:0;
}

.condition-box li{
    margin-bottom:10px;
    color:#000000;
    font-size:17px;
}

/* Hover */
.condition-box:hover{
    transform:translateY(-10px);
    border:2px solid #212384; /* changes to blue on hover */
}

.condition-box:hover .condition-icon{
    background:#212384; /* icon turns blue */
}

.condition-box:hover h3{
    color:#212384; /* heading turns blue */
}

</style>
<!-- Suitable for  ends -->


<!-- Commercial starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-commercial-section">

  <h2 class="indus-process-heading">
    Commercial & <span class="underline-animation">Professional Applications</span>
  </h2>

  <div class="indus-commercial-container">

    <!-- ITEM 1 -->
    <div class="indus-commercial-item">
      <div class="indus-commercial-icon">
        <i class="fas fa-store"></i>
      </div>
      <div class="indus-commercial-text">
        <h3>Small Business & Retail</h3>
        <p>
          Small enterprises often choose a tall tubular battery for small business, while shop owners depend on a tall tubular battery for retail shop operations.
        </p>
      </div>
    </div>

    <!-- ITEM 2 -->
    <div class="indus-commercial-item">
      <div class="indus-commercial-icon">
        <i class="fas fa-hospital"></i>
      </div>
      <div class="indus-commercial-text">
        <h3>Healthcare & Medical Equipment</h3>
        <p>
          Healthcare facilities require a tall tubular battery for clinic environments and hospital support systems to ensure patient safety. For sensitive electronics, a tall tubular battery provides reliable backup.
        </p>
      </div>
    </div>

    <!-- ITEM 3 -->
    <div class="indus-commercial-item">
      <div class="indus-commercial-icon">
        <i class="fas fa-server"></i>
      </div>
      <div class="indus-commercial-text">
        <h3>IT, Servers & Security</h3>
        <p>
          IT setups use tall tubular batteries for computers and servers to prevent data loss. Security systems rely on tall tubular batteries for CCTV and surveillance equipment to ensure uninterrupted monitoring.
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
  font-family:'Montserrat', sans-serif;
}

/* SECTION */
.indus-commercial-section{
  padding:90px 20px;
  background:#ffffff;
}

/* MAIN HEADING */
.indus-process-heading{
  text-align:center;
  font-size:36px;
  font-weight:700;
  color:#212384;
  margin-bottom:60px;
  position:relative;
}

/* UNDERLINE ANIMATION */
.underline-animation{
  color:#f37021;
  position:relative;
  display:inline-block;
}

.underline-animation::after{
  content:"";
  position:absolute;
  left:0;
  bottom:-8px;
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

/* CONTAINER */
.indus-commercial-container{
  max-width:1000px;
  margin:auto;
  display:flex;
  flex-direction:column;
  gap:25px;
}

/* ITEM */
.indus-commercial-item{
  display:flex;
  gap:25px;
  align-items:flex-start;
  background:#ffffff;
  padding:25px 30px;
  border-radius:10px;
  border-left:6px solid #f37021;
  box-shadow:0 10px 25px rgba(0,0,0,0.08);
  transition:0.4s;
}

/* HOVER EFFECT */
.indus-commercial-item:hover{
  transform:translateY(-6px);
  border-left-color:#212384;
  box-shadow:0 15px 35px rgba(0,0,0,0.15);
}

/* ICON */
.indus-commercial-icon{
  font-size:32px;
  color:#f37021;
  transition:0.4s;
}

/* ICON HOVER */
.indus-commercial-item:hover .indus-commercial-icon{
  color:#212384;
  transform:scale(1.2);
}

/* TEXT */
.indus-commercial-text h3{
  font-size:22px;
  color:#f37021;
  margin-bottom:10px;
  transition:0.3s;
  font-weight: 600;
}

.indus-commercial-item:hover .indus-commercial-text h3{
  color:#212384;
}

.indus-commercial-text p{
  font-size:18px;
  line-height:1.7;
  color:#000000;
  text-align:justify;
}

/* RESPONSIVE */
@media(max-width:768px){
  .indus-commercial-item{
    flex-direction:column;
  }
  .indus-process-heading{
    font-size:28px;
  }
}
</style>
<!-- Commercial ends -->

<!-- Compatibility starts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="compat-section">

  <h2 class="compat-heading">
    Compatibility With Inverters & <span class="underline-animation"> Solar Systems</span>
  </h2>

  <div class="timeline">

    <!-- LEFT ITEM -->
    <div class="timeline-item left">
      <div class="timeline-icon left"><i class="fas fa-bolt"></i></div>
      <div class="timeline-content">
        <h3>Inverter & UPS Compatibility</h3>
        <p>A tall tubular battery for inverter UPS ensures stable output and reliable backup power for homes, offices, and commercial equipment.</p>
      </div>
    </div>

    <!-- RIGHT ITEM -->
    <div class="timeline-item right">
      <div class="timeline-icon right"><i class="fas fa-solar-panel"></i></div>
      <div class="timeline-content">
        <h3>Solar Inverter Integration</h3>
        <p>A tall tubular battery for solar inverter is widely used in renewable energy installations for efficient energy storage and utilization.</p>
      </div>
    </div>

    <!-- LEFT ITEM -->
    <div class="timeline-item left">
      <div class="timeline-icon left"><i class="fas fa-sun"></i></div>
      <div class="timeline-content">
        <h3>Solar Power Storage</h3>
        <p>A tall tubular battery for solar system provides dependable storage, while tubular batteries support better clean energy usage.</p>
      </div>
    </div>

    <!-- RIGHT ITEM -->
    <div class="timeline-item right">
      <div class="timeline-icon right"><i class="fas fa-network-wired"></i></div>
      <div class="timeline-content">
        <h3>Hybrid Inverter Systems</h3>
        <p>Hybrid setups often use a tall tubular battery for hybrid inverter to efficiently combine grid power and solar energy.</p>
      </div>
    </div>

    <!-- LEFT ITEM -->
    <div class="timeline-item left">
      <div class="timeline-icon left"><i class="fas fa-mountain"></i></div>
      <div class="timeline-content">
        <h3>Off-Grid Solar Applications</h3>
        <p>Remote locations benefit from tall tubular batteries for off-grid solar systems, ensuring continuous power supply.</p>
      </div>
    </div>

  </div>
</section>

<style>
.compat-section{
  padding:50px 20px;
  background:#fff;
}

.compat-heading{
  text-align:center;
  font-size:36px;
  color:#212384;
  margin-bottom:50px;
  font-weight: 700;
}

/* ORANGE TEXT + ANIMATION */
.underline-animation{
  color:#f37021;
  position:relative;
  display:inline-block;
}
.underline-animation::after{
  content:"";
  position:absolute;
  left:0;
  bottom:-8px;
  width:0%;
  height:4px;
  background:#f37021;
  border-radius:5px;
  animation:underlineMove 2s infinite alternate;
}
@keyframes underlineMove{
  from{width:0%;} to{width:100%;}
}

/* TIMELINE */
.timeline{
  position: relative;
  max-width:900px;
  margin:auto;
  padding:20px 0;
}

/* CENTRAL LINE */
.timeline::after{
  content:'';
  position:absolute;
  width:4px;
  background:#f37021;
  top:0;
  bottom:0;
  left:50%;
  transform:translateX(-50%);
  border-radius:2px;
}

/* TIMELINE ITEM */
.timeline-item{
  position: relative;
  width:50%;
  margin-bottom:60px;
}

/* LEFT & RIGHT CONTENT */
.timeline-item.left{
  left:0;
  text-align:right;
  padding-right:50px;
}
.timeline-item.right{
  left:50%;
  text-align:left;
  padding-left:50px;
}

/* ICON ON LINE */
.timeline-icon{
  position:absolute;
  top:110px;
  left:50%;
  transform:translate(-50%, -50%);
  width:50px;
  height:50px;
  background:#f37021;
  color:#fff;
  border-radius:50%;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:24px;
  z-index:2;
  transition:0.5s;
}

.timeline-icon.left{
  left:451px;
}
.timeline-icon.right{
  left:0px;
}

/* ICON ROTATE ANIMATION ON HOVER */
.timeline-icon i{
  display:block;
  transition: transform 0.5s ease;
}
.timeline-item:hover .timeline-icon i{
  transform: rotate(15deg);
}

/* CONTENT BOX */
.timeline-content{
  display:inline-block;
  background:#fff;
  padding:20px 25px;
  border-radius:8px;
  box-shadow:0 8px 18px rgba(0,0,0,0.06);
  width:90%;
  transition:0.35s, border-color 0.3s;
  position: relative;
  border:2px solid #f37021; /* default orange border */
}

/* TRIANGLE POINTER */
.timeline-item.left .timeline-content::after{
  content:''; position:absolute; top:20px; right:-10px;
  border-width:10px; border-style:solid;
  border-color: transparent transparent transparent #fff;
}
.timeline-item.right .timeline-content::after{
  content:''; position:absolute; top:20px; left:-10px;
  border-width:10px; border-style:solid;
  border-color: transparent #fff transparent transparent;
}

/* TEXT */
.timeline-content h3{
  color:#f37021;
  margin-bottom:6px;
  font-size:22px;
  transition:0.3s;
  font-weight: 600;
}
.timeline-content p{
  font-size:17px;
}

/* HOVER EFFECT */
.timeline-item:hover .timeline-content{
  transform:translateY(-5px);
  border-color:#212384; /* turns blue on hover */
}
.timeline-item:hover .timeline-icon{
  background:#212384;
}
.timeline-item:hover .timeline-content h3{
  color:#212384; /* subheading turns blue */
}

/* RESPONSIVE */
@media screen and (max-width:768px){
  .timeline-item, .timeline-item.right, .timeline-item.left{
    width:100%;
    left:0;
    text-align:left;
    padding-left:0;
    padding-right:0;
  }
  .timeline-item .timeline-content::after{
    display:none;
  }
  .timeline-icon{
    transform:translateX(-50%);
  }
}
</style>

<!-- Compatibility ends -->


<!-- Capacity starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="cap-section">

<h2 class="cap-heading">
Capacity & <span class="underline-animation">Voltage Options</span>
</h2>

<div class="cap-timeline">

<!-- STEP 1 -->
<div class="cap-step">

<div class="cap-icon">
<i class="fas fa-battery-three-quarters"></i>
</div>

<div class="cap-content">
<h3>Multiple Battery Capacities</h3>
<p>
Indus Power Industries offers tall tubular battery models in
150Ah, 180Ah, 200Ah, 220Ah, 230Ah, and 250Ah.
</p>
</div>

</div>

<!-- STEP 2 -->
<div class="cap-step">

<div class="cap-icon">
<i class="fas fa-home"></i>
</div>

<div class="cap-content">
<h3>12V Inverter Battery</h3>
<p>
A tall tubular inverter battery 12V is widely used in homes.
</p>
</div>

</div>

<!-- STEP 3 -->
<div class="cap-step">

<div class="cap-icon">
<i class="fas fa-bolt"></i>
</div>

<div class="cap-content">
<h3>24V Inverter Configuration</h3>
<p>
24V inverter configurations support higher power loads.
</p>
</div>

</div>

<!-- STEP 4 -->
<div class="cap-step">

<div class="cap-icon">
<i class="fas fa-chart-line"></i>
</div>

<div class="cap-content">
<h3>High Capacity & Efficiency</h3>
<p>
High capacity batteries provide longer backup and efficiency.
</p>
</div>

</div>

</div>

</section>

<style>

.cap-section{
padding:50px 20px;
background:#fff;
}

/* HEADING */

.cap-heading{
text-align:center;
font-size:36px;
color:#212384;
margin-bottom:70px;
font-weight: 700;
}

.underline-animation{
color:#f37021;
position:relative;
display:inline-block;
}

/* UNDERLINE ANIMATION */

.underline-animation::after{
content:"";
position:absolute;
left:0;
bottom:-8px;
width:0%;
height:4px;
background:#f37021;
animation:underlineMove 2s infinite alternate;
}

@keyframes underlineMove{
from{width:0%;}
to{width:100%;}
}

/* TIMELINE */

.cap-timeline{
max-width:900px;
margin:auto;
position:relative;
padding-left:50px;
    margin-left: 188px;
}

/* TIMELINE LINE */

.cap-timeline::before{
content:"";
position:absolute;
left:60px;
top:0;
width:3px;
height:100%;
background:#e3e3e3;
}

/* STEP */

.cap-step{
position:relative;
margin-bottom:60px;
    left: 32px;
}

/* ICON ON TIMELINE */

.cap-icon{
position:absolute;
left:-20px;
top:50%;
transform:translate(-50%,-50%);
width:55px;
height:55px;
background:#fff;
border:3px solid #f37021;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
font-size:22px;
color:#f37021;
animation:pulse 2s infinite;
transition:0.4s;
}

/* CONTENT BOX */

.cap-content{
background:#fff;
padding:22px 25px;
border-radius:8px;
box-shadow:0 8px 20px rgba(0,0,0,0.06);
margin-left:60px;
border:2px solid transparent;
transition:0.4s;
}

.cap-content h3{
color:#f37021;
margin-bottom:6px;
transition:0.3s;
font-size:20px;
font-weight: 600;
}

.cap-content p{
color:#050505;
line-height:1.6;
font-size:17px;
}

/* HOVER EFFECT */

.cap-step:hover .cap-content{
border-color:#212384;
}

.cap-step:hover .cap-icon{
border-color:#212384;
color:#212384;
transform:translate(-50%,-50%) scale(1.1);
}

.cap-step:hover h3{
color:#212384;
}

/* ICON PULSE */

@keyframes pulse{
0%{box-shadow:0 0 0 0 rgba(243,112,33,0.4);}
70%{box-shadow:0 0 0 12px rgba(243,112,33,0);}
100%{box-shadow:0 0 0 0 rgba(243,112,33,0);}
}

</style>

<!-- capacity ends -->


























<!-- Build Quality & starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="battery-tech-section">

<h2 class="battery-tech-heading">
Build Quality & <span class="underline-animate">Technical Strength</span>
</h2>

<div class="battery-tech-grid">

<!-- BOX 1 -->
<div class="battery-tech-box">
<i class="fas fa-layer-group"></i>
<h3>Thick Plate Design</h3>
<p>
A tall tubular battery with thick plates ensures durability and long-term structural strength for reliable performance.
</p>
</div>

<!-- BOX 2 -->
<div class="battery-tech-box">
<i class="fas fa-shield-alt"></i>
<h3>Robust Construction</h3>
<p>
A tall tubular battery with robust design performs efficiently even during heavy load and demanding conditions.
</p>
</div>

<!-- BOX 3 -->
<div class="battery-tech-box">
<i class="fas fa-bolt"></i>
<h3>Strong Backup</h3>
<p>
Customers trust a tall tubular battery with strong backup to keep homes and offices powered during outages.
</p>
</div>

<!-- BOX 4 -->
<div class="battery-tech-box">
<i class="fas fa-life-ring"></i>
<h3>Longer Life</h3>
<p>
A tall tubular battery with longer life offers dependable performance and reduces replacement frequency.
</p>
</div>

</div>
</section>

<style>

.battery-tech-section{
padding:50px 8%;
background:#ffffff;
font-family:'Montserrat';
}

/* HEADING */

.battery-tech-heading{
text-align:center;
font-size:34px;
margin-bottom:60px;
color:#212384;
font-weight:700;
}

.battery-tech-heading span{
color:#f37021;
position:relative;
display:inline-block;
}

/* UNDERLINE */

.underline-animate::after{
content:"";
position:absolute;
left:0;
bottom:-8px;
width:0%;
height:4px;
background:#f37021;
border-radius:4px;
animation:underlineMove 2s infinite alternate;
}

@keyframes underlineMove{
from{width:0%;}
to{width:100%;}
}

/* GRID */

.battery-tech-grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:25px;
max-width:1100px;
margin:auto;
}

/* CENTER 4TH CARD */

.battery-tech-box:nth-child(4){
grid-column:2/3;
}

/* BOX */

.battery-tech-box{
background:#fff;
padding:30px 25px;
border-radius:10px;
text-align:center;
box-shadow:0 6px 18px rgba(0,0,0,0.08);
transition:0.35s;
border:2px solid #f37021;
}

/* ICON */

.battery-tech-box i{
font-size:34px;
color:#f37021;
margin-bottom:15px;
animation:floatIcon 3s ease-in-out infinite;
transition:0.3s;
}

@keyframes floatIcon{
0%{transform:translateY(0);}
50%{transform:translateY(-6px);}
100%{transform:translateY(0);}
}

/* TITLE */

.battery-tech-box h3{
font-size:20px;
margin-bottom:10px;
color:#f37021;
transition:0.3s;
font-weight:600;
}

/* TEXT */

.battery-tech-box p{
font-size:17px;
color:#000;
line-height:1.6;
}

/* HOVER */

.battery-tech-box:hover{
transform:translateY(-8px);
border:2px solid #212384;
box-shadow:0 12px 28px rgba(0,0,0,0.12);
}

.battery-tech-box:hover i{
color:#212384;
transform:scale(1.15);
}

.battery-tech-box:hover h3{
color:#212384;
}

/* MOBILE */

@media(max-width:768px){

.battery-tech-grid{
grid-template-columns:1fr;
}

}

</style>

<!-- Build Quality & ends -->



























<!-- Pricing, Availability start -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="battery-price-section">

<h2 class="battery-price-heading">
Pricing, Availability &  <span> Buying Considerations</span>
</h2>

<div class="battery-price-wrapper">

  <!-- LEFT CARD -->
  <div class="battery-price-card">
    <div class="battery-price-card-content">
      <div class="battery-price-icon">
        <i class="fas fa-tags"></i>
      </div>
      <div class="battery-price-text">
        <h3>Pricing & Cost Comparison</h3>
        <p>
          Customers often inquire about tall tubular battery price, tall tubular battery price in India, 
          and tubular inverter battery price while comparing inverter battery tall tubular price across brands. 
          We focus on providing an affordable tall tubular battery with transparent tall tubular battery cost 
          and best price tall tubular battery options.
        </p>
      </div>
    </div>
  </div>

  <!-- RIGHT CARD -->
  <div class="battery-price-card">
    <div class="battery-price-card-content">
      <div class="battery-price-icon">
        <i class="fas fa-store"></i>
      </div>
      <div class="battery-price-text">
        <h3>Availability & Dealers</h3>
        <p>
          People searching for a tall tubular battery near me can connect with our nationwide network, 
          including a tubular battery dealer near me or inverter battery shop near me. As a trusted tall 
          tubular battery supplier, tall tubular battery manufacturer, and tubular inverter battery 
          manufacturer India, Indus Power Industries is a recognized tall tubular battery company and 
          tall tubular battery brand.
        </p>
      </div>
    </div>
  </div>

</div>
</section>

<style>
.battery-price-section{
  padding:50px 8%;
  background:#ffffff;
  font-family:'Montserrat';
}

.battery-price-heading{
  text-align:center;
  font-size:34px;
  margin-bottom:60px;
  color:#212384;
  position:relative;
  display:inline-block;
  font-weight: 700;
  left:50%;
  transform:translateX(-50%);
}

.battery-price-heading span{
  color:#f37021;
  position:relative;
}

/* UNDERLINE ANIMATION */
.battery-price-heading span::after{
  content:"";
  position:absolute;
  left:0;
  bottom:-8px;
  width:0%;
  height:4px;
  background:#f37021;
  border-radius:5px;
  animation:underlineMove 2s infinite alternate;
}

@keyframes underlineMove{
0%{ width:0%; }
100%{ width:100%; }
}

.battery-price-wrapper{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(350px,1fr));
  gap:40px;
}

/* CARD */
.battery-price-card{
  background:#fff;
  padding:30px 25px;
  border-radius:12px;
  box-shadow:0 10px 25px rgba(0,0,0,0.08);
  position:relative;
  transition:0.35s;
  border-left:5px solid #f37021;
}

/* FLEX CONTENT: ICON + TEXT */
.battery-price-card-content{
  display:flex;
  align-items:flex-start;
  gap:20px; /* space between icon and text */
}

.battery-price-icon{
  font-size:36px;
  color:#f37021;
  transition:0.3s;
  flex-shrink:0;
}

.battery-price-text h3{
  font-size:22px;
  margin-bottom:8px;
  color:#f37021;
  transition:0.3s;
  font-weight: 600;
}

.battery-price-text p{
  font-size:17px;
  line-height:1.7;
  color:#000000;
      text-align: justify;
}

/* HOVER EFFECT */
.battery-price-card:hover{
  transform:translateY(-8px);
  border-left:5px solid #212384;
  box-shadow:0 15px 35px rgba(0,0,0,0.12);
}

.battery-price-card:hover .battery-price-icon{
  color:#212384;
}

.battery-price-card:hover .battery-price-text h3{
  color:#212384;
}

/* RESPONSIVE */
@media screen and (max-width:768px){
  .battery-price-card-content{
    flex-direction:column;
    gap:15px;
  }
}
</style>
<!-- Pricing, Availability ends -->























<!-- Distribution, Service starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="service-support-section">

<h2 class="service-support-heading">
Distribution, Service & <span class="underline-animation">Support</span>
</h2>

<div class="service-grid">

  <!-- CARD 1 -->
  <div class="service-card">
    <div class="service-card-inner">
      <div class="service-card-front">
        <i class="fas fa-truck"></i>
        <h3>Distribution Network</h3>
      </div>
      <div class="service-card-back">
        <p>
          We operate as a tall tubular battery distributor and wholesaler supporting inverter battery dealers and suppliers across our network.
        </p>
      </div>
    </div>
  </div>

  <!-- CARD 2 -->
  <div class="service-card">
    <div class="service-card-inner">
      <div class="service-card-front">
        <i class="fas fa-tools"></i>
        <h3>Installation & Maintenance</h3>
      </div>
      <div class="service-card-back">
        <p>
          Our services include tall tubular battery installation, service, maintenance and AMC support.
        </p>
      </div>
    </div>
  </div>

  <!-- CARD 3 -->
  <div class="service-card">
    <div class="service-card-inner">
      <div class="service-card-front">
        <i class="fas fa-wrench"></i>
        <h3>Repair & Servicing</h3>
      </div>
      <div class="service-card-back">
        <p>
          We provide tall tubular battery repair and inverter battery servicing through our nationwide service partners.
        </p>
      </div>
    </div>
  </div>

  <!-- CARD 4 -->
  <div class="service-card">
    <div class="service-card-inner">
      <div class="service-card-front">
        <i class="fas fa-shield-alt"></i>
        <h3>Warranty Support</h3>
      </div>
      <div class="service-card-back">
        <p>
          Every product includes a tall tubular battery warranty and long inverter battery warranty policy.
        </p>
      </div>
    </div>
  </div>

</div>
</section>

<style>

.service-support-section{
  padding:50px 8%;
  background:#ffffff;
  text-align:center;
  font-family:'Montserrat';
}

.service-support-heading{
  font-size:34px;
  margin-bottom:60px;
  font-weight:700;
  color:#212384;
}

.service-support-heading span{
  color:#f37021;
}

/* GRID */

.service-grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:25px;
  max-width:1100px;
  margin:auto;
  perspective:1000px;
}

/* CENTER THE 4TH CARD */

.service-card:nth-child(4){
  grid-column:2/3;
}

/* CARD */

.service-card{
  width:100%;
  height:200px;
  cursor:pointer;
  perspective:1000px;
}

.service-card-inner{
  position:relative;
  width:100%;
  height:100%;
  text-align:center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
}

.service-card:hover .service-card-inner{
  transform: rotateY(180deg);
}

/* FRONT & BACK */

.service-card-front,
.service-card-back{
  position:absolute;
  width:100%;
  height:100%;
  backface-visibility:hidden;
  border-radius:10px;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
  padding:20px;
  box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

.service-card-front{
  background:#fff;
  border:2px solid #f37021;
}

.service-card-front i{
  font-size:36px;
  color:#f37021;
  margin-bottom:10px;
}

.service-card-front h3{
  font-size:22px;
  font-weight:600;
  color:#f37021;
  margin:0;
}

/* BACK */

.service-card-back{
  color:#000;
  transform:rotateY(180deg);
  border:2px solid #212384;
  font-size:16px;
  line-height:1.5;
}

/* HOVER EFFECT */

.service-card:hover .service-card-front i,
.service-card:hover .service-card-front h3{
  color:#212384;
}

/* MOBILE */

@media(max-width:768px){

.service-grid{
  grid-template-columns:1fr;
}

.service-card{
  height:220px;
}

}

</style>

<!-- Distribution, Service ends -->






















<!-- Reliability Under starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="reliability-section">

  <h2 class="reliability-heading">
    Reliability Under <span class="underline-animation">Indian Conditions</span>
  </h2>

  <div class="reliability-container">

    <!-- STEP 1 -->
    <div class="reliability-box">
      <div class="reliability-flex">
        <div class="reliability-icon">
          <i class="fas fa-temperature-high"></i>
        </div>
        <div class="reliability-text">
          <h3>High Temperature Resistance</h3>
          <p>
            A reliable tall tubular battery must withstand high temperatures, making it suitable 
            for demanding Indian weather.
          </p>
        </div>
      </div>
    </div>

    <!-- STEP 2 -->
    <div class="reliability-box">
      <div class="reliability-flex">
        <div class="reliability-icon">
          <i class="fas fa-bolt"></i>
        </div>
        <div class="reliability-text">
          <h3>High Performance Power</h3>
          <p>
            Our batteries function as a high performance tall tubular battery designed to deliver consistent power backup for homes and businesses.
          </p>
        </div>
      </div>
    </div>

    <!-- STEP 3 -->
    <div class="reliability-box">
      <div class="reliability-flex">
        <div class="reliability-icon">
          <i class="fas fa-leaf"></i>
        </div>
        <div class="reliability-text">
          <h3 style="margin-top: 20px;">Energy Efficient Design</h3>
          <p>
            Engineered as an energy efficient tall tubular battery and eco friendly inverter battery for sustainable performance.
          </p>
        </div>
      </div>
    </div>

    <!-- STEP 4 -->
    <div class="reliability-box">
      <div class="reliability-flex">
        <div class="reliability-icon">
          <i class="fas fa-shield-alt"></i>
        </div>
        <div class="reliability-text">
          <h3>Durability in Harsh Conditions</h3>
          <p>
            A tall tubular battery for high temperature environments and harsh conditions ensures dependable operation even during extreme summers.
          </p>
        </div>
      </div>
    </div>

  </div>
</section>

<style>
.reliability-section{
  padding:50px 8%;
  background:#ffffff;
  font-family:'Montserrat';
}

.reliability-heading{
  font-size:34px;
  color:#212384;
  margin-bottom:60px;
  font-weight: 700;
  text-align:center;
}

.reliability-heading span{
  color:#f37021;
}

/* GRID */
.reliability-container{
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:30px;
  max-width:1100px;
  margin:auto;
}

/* BOX */
.reliability-box{
  background:#fff;
  padding:25px;
  border-radius:10px;
  box-shadow:0 8px 22px rgba(0,0,0,0.08);
  border-top:4px solid #f37021;
  transition:0.3s;
}

/* FLEX FOR ICON + TEXT */
.reliability-flex{
  display:grid;
  align-items:flex-start;
  gap:20px;
}

/* ICON */
.reliability-icon{
  font-size:36px;
  color:#f37021;
  flex-shrink:0;
  transition:0.3s;
  text-align: center;
}

/* TEXT */
.reliability-text h3{
  font-size:22px;
  color:#f37021;
  margin-bottom:8px;
  font-weight: 600;
  text-align: center;
}

.reliability-text p{
  font-size:17px;
  line-height:1.5;
  color:#000;
  margin:0;
  text-align:justify;
}

/* HOVER */
.reliability-box:hover{
  transform:translateY(-8px);
  border-top:4px solid #212384;
  box-shadow:0 12px 30px rgba(0,0,0,0.12);
}

.reliability-box:hover .reliability-icon,
.reliability-box:hover h3{
  color:#212384;
}

/* MOBILE */
@media(max-width:768px){
  .reliability-container{
    grid-template-columns:1fr;
  }
  .reliability-flex{
    flex-direction:row;
  }
}
</style>

<!-- Reliability Under ends -->


<!-- Daily Usage  starts -->
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="usage-section">

<h2 class="usage-heading">
Daily Usage & <span class="underline-animation">Appliance Support</span>
</h2>

<div class="usage-container">

<!-- BOX 1 -->
<div class="usage-box">
<div class="usage-icon">
<i class="fas fa-bolt"></i>
</div>

<h3>Continuous Power Backup</h3>

<ul>
<li>Tall tubular battery for continuous power</li>
<li>Inverter battery for uninterrupted power</li>
<li>Tall tubular battery for backup power</li>
<li>Inverter battery for daily use</li>
<li>Tall tubular battery for 24x7 usage</li>
</ul>

</div>

<!-- BOX 2 -->
<div class="usage-box">
<div class="usage-icon">
<i class="fas fa-plug"></i>
</div>

<h3>Heavy Load Performance</h3>

<ul>
<li>Inverter battery for frequent discharge</li>
<li>Tall tubular battery for heavy load</li>
<li>Reliable power for demanding appliances</li>
<li>Inverter battery for high load appliances</li>
</ul>

</div>

<!-- BOX 3 -->
<div class="usage-box">
<div class="usage-icon">
<i class="fas fa-home"></i>
</div>

<h3>Common Household Appliances</h3>

<ul>
<li>Tall tubular battery for refrigerator</li>
<li>Tall tubular battery for lights & fans</li>
<li>Tall tubular battery for TV</li>
<li>Tall tubular battery for washing machine</li>
</ul>

</div>

</div>
</section>

<style>
  .usage-section{
padding:50px 8%;
background:#ffffff;
text-align:center;
font-family:'Montserrat';
}

.usage-heading{
font-size:34px;
color:#212384;
margin-bottom:60px;
font-weight: 700;
}

.usage-heading span{
color:#f37021;
}

/* GRID */

.usage-container{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:30px;
max-width:1100px;
margin:auto;
}
  

/* BOX */

.usage-box{
background:#fff;
padding:35px 30px;
border-radius:10px;
box-shadow:0 8px 22px rgba(0,0,0,0.08);
border:2px solid #f37021;
transition:0.3s;
}

/* ICON */

.usage-icon{
font-size:36px;
color:#f37021;
margin-bottom:15px;
}

/* TITLE */

.usage-box h3{
font-size:22px;
color:#f37021;
font-weight: 600;
margin-bottom:15px;
}

/* LIST */

.usage-box ul{
text-align:left;
padding-left:20px;
}

.usage-box ul li{
margin-bottom:8px;
font-size:18px;
color:#000000;
}

/* HOVER */

.usage-box:hover{
transform:translateY(-8px);
border:2px solid #212384;
box-shadow:0 12px 28px rgba(0,0,0,0.12);
}

.usage-box:hover h3,
.usage-box:hover .usage-icon{
color:#212384;
}

/* MOBILE */

@media(max-width:768px){
.usage-container{
grid-template-columns:1fr;
}
}
</style>

<!-- Daily Usage  ends -->












<!-- Compatibility start -->

<section class="sine-section">

<h2 class="sine-heading">
Compatibility With Sine <span class="underline-animation">Wave Inverters</span>
</h2>

<div class="sine-grid">

  <!-- CARD 1 -->
  <div class="sine-card">
    <div class="sine-card-inner">
      <div class="sine-card-front">
        <i class="fas fa-wave-square"></i>
        <h3>Sine Wave Compatibility</h3>
      </div>
      <div class="sine-card-back">
        <p>
          A tall tubular battery for inverter system works seamlessly as a tubular battery for sine wave inverter, ensuring smooth and efficient power supply.
        </p>
      </div>
    </div>
  </div>

  <!-- CARD 2 -->
  <div class="sine-card">
    <div class="sine-card-inner">
      <div class="sine-card-front">
        <i class="fas fa-bolt"></i>
        <h3>Clean Power Output</h3>
      </div>
      <div class="sine-card-back">
        <p>
          A tall tubular battery for pure sine inverter delivers clean and stable output power, protecting sensitive appliances and electronics.
        </p>
      </div>
    </div>
  </div>

  <!-- CARD 3 -->
  <div class="sine-card">
    <div class="sine-card-inner">
      <div class="sine-card-front">
        <i class="fas fa-water"></i>
        <h3>Low Water Loss</h3>
      </div>
      <div class="sine-card-back">
        <p>
          An inverter battery with tall tubular plates and low water loss offers long-lasting performance with reduced maintenance needs.
        </p>
      </div>
    </div>
  </div>

  <!-- CARD 4 -->
  <div class="sine-card">
    <div class="sine-card-inner">
      <div class="sine-card-front">
        <i class="fas fa-shield-alt"></i>
        <h3>Long-Term Reliability</h3>
      </div>
      <div class="sine-card-back">
        <p>
          Customers looking for long-term performance trust Indus Power Industries for the best tall tubular inverter battery in India.
        </p>
      </div>
    </div>
  </div>

</div>
</section>

<style>
.sine-section{
  padding:50px 8%;
  background:#fff;
  text-align:center;
  font-family:'Montserrat';
}

.sine-heading{
  font-size:34px;
  color:#212384;
  margin-bottom:60px;
  font-weight:700;
  text-align: center;
}

.sine-heading span{
  color:#f37021;
}

/* GRID */

.sine-grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:30px;
  max-width:1150px;
  margin:auto;
  perspective:1000px;
}

/* CENTER 4TH CARD */

.sine-card:nth-child(4){
  grid-column:2;
}

/* CARD */

.sine-card{
  width:100%;
  height:260px;
  cursor:pointer;
  perspective:1000px;
}

.sine-card-inner{
  position:relative;
  width:100%;
  height:100%;
  transition:transform 0.6s;
  transform-style:preserve-3d;
}

.sine-card:hover .sine-card-inner{
  transform:rotateY(180deg);
}

/* FRONT & BACK */

.sine-card-front,
.sine-card-back{
  position:absolute;
  width:100%;
  height:100%;
  backface-visibility:hidden;
  border-radius:10px;
  border:2px solid #f37021;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:center;
  padding:20px;
  transition:0.3s;
  box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

/* FRONT */

.sine-card-front{
  background:#fff;
}

.sine-card-front i{
  font-size:36px;
  color:#f37021;
  margin-bottom:10px;
}

.sine-card-front h3{
  font-size:22px;
  color:#f37021;
  margin:0;
  font-weight:600;
}

/* BACK */

.sine-card-back{
  color:#000;
  transform:rotateY(180deg);
  font-size:18px;
  line-height:1.5;
  text-align:center;
  border-color:#212384;
}

/* HOVER */

.sine-card:hover .sine-card-front i,
.sine-card:hover .sine-card-front h3{
  color:#212384;
}

/* RESPONSIVE */

@media(max-width:768px){

.sine-grid{
  grid-template-columns:1fr;
}

.sine-card{
  height:280px;
}

}

</style>

<!-- Compatibility ends -->










<style>
.battery-conclusion-section{
  padding:60px 8%;
  background:#ffffff;
  text-align: center; /* centers the heading inline-block */
}

.battery-conclusion-heading{
  font-size:40px;
  color:#f37021;
  font-weight: 700;
  margin-bottom:30px;
  position:relative; /* needed for pseudo-element */
  display:inline-block; /* shrink to heading width */
}

/* UNDERLINE ANIMATION BELOW THE HEADING */
.battery-conclusion-heading::after{
  content:"";
  position:absolute;
  left:0;           /* start from left of heading */
  bottom:-5px;      /* just below text */
  width:0%;
  height:4px;
  background:#f37021;
  border-radius:5px;
  animation:conclusionUnderline 2s infinite alternate;
}

@keyframes conclusionUnderline{
  0%{ width:0%; }
  100%{ width:100%; } /* expands to full heading width */
}

.battery-conclusion-text{
  font-size:17px;
  line-height:1.7;
  color:#030303;
  max-width:1116px;
  margin:0 auto;
  text-align:justify;
}
</style>
<!-- end -->


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

<h2 class="sine-heading">
Technical <span class="underline-animation">Specifications</span>
</h2>

<table class="modern-table">

<tr>
<th>Parameter</th>
<th>Details</th>
</tr>

<tr>
<td>Model</td>
<td>VECTOR VT Series</td>
</tr>

<tr>
<td>Battery Type</td>
<td>Lead-Acid Tall Tubular Battery</td>
</tr>

<tr>
<td>Voltage</td>
<td>12V</td>
</tr>

<tr>
<td>Capacity Range</td>
<td>100Ah – 250Ah</td>
</tr>

<tr>
<td>Cycle Life</td>
<td>Up to 2000 cycles @ 80% DOD</td>
</tr>

<tr>
<td>Maintenance</td>
<td>Low Maintenance</td>
</tr>

<tr>
<td>Warranty</td>
<td>Up to 3 Years</td>
</tr>

<tr>
<td>Customization</td>
<td>Available upon request</td>
</tr>

<tr>
<td>Recyclability</td>
<td>Up to 99%</td>
</tr>

</table>
<!-- Table section End -->










<!-- concluion -->
<div class="battery-conclusion-section">

  <h2 class="battery-conclusion-heading">
    Conclusion
  </h2>

  <p class="battery-conclusion-text">
    If you are looking for a durable, high-backup, and cost-effective inverter battery solution, 
    the tall tubular inverter batteries from Indus Power Industries Pvt Ltd provide unmatched 
    reliability, nationwide service support, and proven performance for Indian power conditions.
  </p>

</div>




 <!-- all section 2 end -->







<?php include ('footer.php'); ?>

</body>
</html>