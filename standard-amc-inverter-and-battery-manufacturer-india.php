<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Indusups</title>

<!-- Google Font & Font Awesome -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Montserrat';
}

body {
    overflow-x: hidden;
}
</style>

<body>

<?php include('navbar.php'); ?>














<!-- HERO SECTION Slider Start-->
<style>
.indus-hero-banner {
    position: relative;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    overflow: hidden;
    color: #fff;
}

.indus-hero-banner::before {
    content: "";
    position: absolute;
    inset: 0;
    background: url("img/about\ us.jpg") center/cover no-repeat;
    filter: brightness(0.55);
    transform: scale(1.1);
    animation: zoomEffect 10s ease-in-out infinite alternate;
}

.indus-hero-banner::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.24));
}

.indus-hero-content {
    position: relative;
    z-index: 2;
}

.indus-hero-content h1 {
    font-size: 38px;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 15px;
    animation: slideDown 1s ease forwards;
}

.indus-breadcrumb-nav {
    font-size: 18px;
    font-weight: 400;
    animation: fadeUp 1.2s ease forwards;
    margin-left: 0px;
}

.indus-breadcrumb-nav a {
    color: #fff;
    text-decoration: none;
    transition: 0.3s;
}

.indus-breadcrumb-nav a:hover {
    color: #ff5e00;
}

.indus-breadcrumb-nav span {
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
    .indus-hero-content h1{
        font-size: 36px;
    }
    .indus-breadcrumb-nav{
        font-size: 15px;
    }
}
</style>

<section class="indus-hero-banner">
    <div class="indus-hero-content">
        <h1>Standard AMC Inverter and Battery Manufacturer India</h1>
        <div class="indus-breadcrumb-nav">
            <a href="#">Home</a> 
            &nbsp;»&nbsp; 
            <a href="#">Products</a> 
            &nbsp;»&nbsp;
            <a href="#">UPS And Inverter Battery AMC</a> 
            &nbsp;»&nbsp; 
            <span>Standard AMC Inverter And Battery
</span>
        </div>
    </div>
</section>
<!-- Slider End -->











<!-- Img Section Start -->
<style>
/* underline animation */

.indus-section-heading span::after{
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

.indus-product-showcase{
    width:100%;
    padding:40px 8%;
    text-align:center;
    position:relative;
    overflow:hidden;
}

.indus-product-showcase::before{
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

.indus-image-container{
    position:relative;
    z-index:1;
    display:flex;
    justify-content:center;
    margin-bottom:30px;
}

.indus-product-image{
    width:500px;
    cursor:pointer;
    background:rgba(255,255,255,0.6);
    backdrop-filter: blur(15px);
    border-radius:20px;
    box-shadow:0 20px 50px rgba(0,0,0,0.15);
    transform:translateY(60px);
    opacity:0;
    animation: fadeUp 1.2s ease forwards;
    transition:0.4s ease;
}

.indus-product-image:hover{
    transform:translateY(0) scale(1.05) rotateX(5deg);
}

@keyframes fadeUp{
    to{
        transform:translateY(0);
        opacity:1;
    }
}

.indus-button-group{
    position:relative;
    z-index:1;
    display:flex;
    justify-content:center;
    gap:40px;
    flex-wrap:wrap;
}

.indus-action-btn{
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

.indus-action-btn::before{
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

.indus-action-btn:hover{
    background:#f37021;
    color:#fff;
    box-shadow:0 15px 40px rgba(243,112,33,0.4);
    transform:translateY(-5px);
}

.indus-lightbox-modal{
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

.indus-lightbox-modal.active{
    opacity:1;
    visibility:visible;
}

.indus-lightbox-modal img{
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

.indus-close-button{
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

.indus-close-button span{
    position:absolute;
    width:22px;
    height:2px;
    background:#fff;
    transition:0.4s ease;
}

.indus-close-button span:nth-child(1){
    transform:rotate(45deg);
}

.indus-close-button span:nth-child(2){
    transform:rotate(-45deg);
}

.indus-close-button:hover{
    transform:scale(1.15) rotate(180deg);
    background:linear-gradient(135deg,#f37021,#212384);
}

@media(max-width:768px){
    .indus-product-image{
        width:260px;
    }
    .indus-action-btn{
        padding:14px 30px;
        font-size:14px;
    }
    .indus-close-button{
        top:20px;
        right:20px;
        width:45px;
        height:45px;
    }
}
</style>

<section class="indus-product-showcase">
    <div class="indus-button-group">
        <a href="#" class="indus-action-btn">DOWNLOAD BROCHURE</a>
        <a href="#" class="indus-action-btn indus-secondary-btn" onclick="openEnquiry()">ENQUIRE NOW</a>
    </div>
</section>
<!-- Img Section End -->



<!-- AMC Section Modern Design Start -->

<style>

.indus-info-panel{
    padding:50px 5%;
    position:relative;
    overflow:hidden;
}

/* floating shapes */
.indus-info-panel::before,
.indus-info-panel::after{
    content:"";
    position:absolute;
    border-radius:50%;
    opacity:0.08;
    z-index:0;
}

.indus-info-panel::before{
    width:420px;
    height:420px;
    background: linear-gradient(135deg,#212384,#f37021);
    top:-120px;
    right:-150px;
    animation: floatShape 8s ease-in-out infinite alternate;
}

.indus-info-panel::after{
    width:320px;
    height:320px;
    background: linear-gradient(135deg,#f37021,#212384);
    bottom:-100px;
    left:-120px;
    animation: floatShape 10s ease-in-out infinite alternate-reverse;
}

/* heading */
.indus-section-heading{
    text-align:center;
    font-size:36px;
    font-weight:700;
    margin-bottom:60px;
    color:#212384;
    letter-spacing:1px;
}

.indus-section-heading span{
    color:#f37021;
    position:relative;
}

.indus-section-heading span::after{
    content:"";
    position:absolute;
    width:100%;
    height:4px;
    background:#f37021;
    bottom:-10px;
    left:0;
    border-radius:5px;
    animation: underline 2s infinite alternate;
}

/* grid */
.indus-grid-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
    gap:40px;
    position:relative;
    z-index:1;
}

/* card */
.indus-content-card{
    background:#fff;
    padding:35px 30px;
    border-radius:25px;
    border:2px solid #f37021;
    box-shadow:0 20px 60px rgba(33,35,132,0.08);
    transition: transform .5s ease, box-shadow .5s ease;
}

.indus-content-card:hover{
    transform:translateY(-15px) scale(1.02);
    box-shadow:0 30px 70px rgba(33,35,132,0.15);
    border-color:#212384;
}

.indus-content-card p{
    font-size:16px;
    line-height:1.8;
    color:#444;
    text-align:justify;
}

.indus-content-card strong{
    color:#212384;
    font-size:20px;
    display:block;
    margin-bottom:10px;
    text-align: center;
}

.indus-content-card:hover p{
    color:#212384;
}

/* animation */
@keyframes floatShape{
    0%{transform:translateY(0)}
    100%{transform:translateY(20px)}
}

@keyframes underline{
    from{width:0}
    to{width:100%}
}

@media(max-width:992px){
    .indus-section-heading{
        font-size:28px;
    }
}

</style>


<section class="indus-info-panel">

<h2 class="indus-section-heading">
What Is Included in <span>(Annual Maintenance Contract)</span>
</h2>

<div class="indus-grid-container">

<div class="indus-content-card">
<p>
<strong>Regular Preventive Maintenance (PM) Visits</strong>
• Scheduled inspections (quarterly/half-yearly/annual)<br>
• System & battery health check<br>
• Connections cleaning & tightening<br>
• Load testing<br>
• UPS calibration & general servicing<br>
• Fan cleaning & dust removal
</p>
</div>

<div class="indus-content-card">
<p>
<strong>Performance Evaluation</strong>
• Battery backup analysis<br>
• Charging system evaluation<br>
• Report on overall system condition<br>
• Suggestions to improve power backup performance
</p>
</div>

<div class="indus-content-card">
<p>
<strong>Expert Guidance</strong>
• Advice on battery care, optimal loading, and safety<br>
• Recommendations on parts that require replacement
</p>
</div>

</div>
</section>

<!-- AMC Section Modern Design End -->





<!--What Is NOT Covered in Standard AMC?  starts -->


<section class="indus-amc-standard">

  <div class="indus-amc-container">

    <h2 class="indus-main-heading">
      What Is NOT Covered in <span>Standard AMC?</span>
    </h2>

    <div class="amc-card-wrapper">

      <div class="amc-card">
        <div class="amc-icon">
          <i class="fas fa-cogs"></i>
        </div>
        <h3>Spare Parts</h3>
        <p>PCB, fan, switches, connectors, cables, relays, etc.</p>
      </div>

      <div class="amc-card">
        <div class="amc-icon">
          <i class="fas fa-battery-half"></i>
        </div>
        <h3>Batteries</h3>
        <p>Lead-acid, tubular, SMF and lithium-ion batteries.</p>
      </div>

      <div class="amc-card">
        <div class="amc-icon">
          <i class="fas fa-tools"></i>
        </div>
        <h3>Consumables</h3>
        <p>Terminal connectors, fuses, distilled water and similar items.</p>
      </div>

      <div class="amc-card">
        <div class="amc-icon">
          <i class="fas fa-wrench"></i>
        </div>
        <h3>Breakdown Repairs</h3>
        <p>Customer pays for parts if replacement is needed.</p>
      </div>

    </div>

  </div>
</section>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

/* underline animation */

.indus-main-heading span::after{
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

.amc-exclude-section{
  padding:60px 20px;
  background:#ffffff;
  font-family:'Montserrat';
}

/* GRID */
.amc-card-wrapper{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(227px,1fr));
  gap:30px;
  max-width:1100px;
  margin:auto;
  align-items:start; /* keep all cards aligned at top */
}

/* CARD */
.amc-card{
  background:#fff;
  padding:35px 25px;
  border-radius:12px;
  box-shadow:0 12px 30px rgba(0,0,0,0.08);
  text-align:center;
  cursor:pointer;
  transition:all 0.4s ease;
  border:2px solid transparent;
  display:flex;
  flex-direction:column;
  min-height:220px; /* ensures all boxes same height */
}

/* ICON */
.amc-icon{
  font-size:35px;
  color:#f37021;
  margin-bottom:15px;
  transition:0.4s;
}

/* HEADING */
.amc-card h3{
  color:#f37021;
  margin-bottom:10px;
  font-size:22px;
  transition:0.3s;
}

/* CONTENT (HIDDEN) */
.amc-card p{
  opacity:0;
  max-height:0;
  overflow:hidden;
  transition: max-height 0.4s ease, opacity 0.4s ease;
  color:#000;
  font-size:15px;
  line-height:1.6;
}

/* SHOW CONTENT ONLY ON HOVERED CARD */
.amc-card:hover p{
  opacity:1;
  max-height:200px;
  margin-top:10px;
}

/* CARD HOVER EFFECT */
.amc-card:hover{
  transform:translateY(-10px);
  box-shadow:0 20px 40px rgba(0,0,0,0.15);
  border:2px solid #212384; /* border appears */
}

/* ICON ANIMATION */
.amc-card:hover .amc-icon{
  transform:scale(1.2) rotate(8deg);
  color:#212384;
}

/* HEADING COLOR CHANGE */
.amc-card:hover h3{
  color:#212384;
}
</style>


<!-- What Is NOT Covered in Standard AMC? End -->




<!--Standard AMC Start -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-amc-standard">

  <div class="indus-amc-container">

    <h2 class="indus-main-heading">
      Standard AMC <span>(Annual Maintenance Contract)</span>
    </h2>

    <div class="amc-plan-grid">

      <div class="amc-plan-box">
        <div class="amc-plan-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
        <p>Reliable maintenance for UPS and inverter systems.</p>
      </div>

      <div class="amc-plan-box">
        <div class="amc-plan-icon"><i class="fa-solid fa-gear"></i></div>
        <p>Routine servicing to keep your equipment working smoothly.</p>
      </div>

      <div class="amc-plan-box">
        <div class="amc-plan-icon"><i class="fa-solid fa-battery-full"></i></div>
        <p>Professional care for UPS batteries and backup units.</p>
      </div>

      <div class="amc-plan-box">
        <div class="amc-plan-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
        <p>Affordable plan without a fully comprehensive cost.</p>
      </div>

    </div>

  </div>
</section>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* SECTION */
.amc-plan-section{
  padding:80px 20px;
  background:#ffffff;
  font-family:'Montserrat';
}

/* CONTAINER */
.amc-plan-container{
  max-width:1200px;
  margin:auto;
  text-align:center;
}

/* HEADING */
.amc-plan-heading{
  font-size:38px;
  font-weight:700;
  color:#212384;
  margin-bottom:10px;
}

.amc-plan-heading span{
  color:#f37021;
  position:relative;
}

/* ORANGE UNDERLINE ANIMATION */


.indus-amc-container span::after{
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

.amc-plan-heading span::after{
  content:"";
  position:absolute;
  left:0;
  bottom:-8px;
  width:100%;
  height:4px;
  background:#f37021;
  border-radius:5px;
  animation:underlineSlide 2s infinite alternate;
}

@keyframes underlineSlide{
  from{width:0;}
  to{width:100%;}
}

/* GRID */
.amc-plan-grid{
  margin-top:60px;
  display:grid;
  grid-template-columns:repeat(1,1fr);
  gap:30px;
  margin-left: 118px;
  margin-right: 90px;
}

/* BOX */
.amc-plan-box{
  background:#ffffff;
  padding:25px 20px 20px 60px; /* left padding for icon outside */
  border-radius:12px;
  box-shadow:0 10px 25px rgba(0,0,0,0.06);
  display:flex;
  align-items:flex-start;
  gap:12px;
  text-align:left;
  font-size:18px;
  line-height:1.6;
  transition:0.4s;
  cursor:pointer;
  position:relative;
  border:2px solid transparent; /* Border hidden initially */
}

/* SHOW BORDER ON HOVER */
.amc-plan-box:hover{
  transform:translateY(-6px);
  box-shadow:0 18px 40px rgba(0,0,0,0.12);
  border:2px solid #212384; /* Blue border */
}

/* ICON */
.amc-plan-icon{
  margin-top: 25px;
  margin-left: -12px;
  width:50px;
  height:50px;
  background:#f37021;
  color:#fff;
  display:flex;
  align-items:center;
  justify-content:center;
  border-radius:50%;
  font-size:20px;
  transition:0.4s;
  position:absolute;
  top:-15px;
  left:-15px;
  box-shadow:0 4px 15px rgba(0,0,0,0.2);
}

/* ICON HOVER EFFECT */
.amc-plan-box:hover .amc-plan-icon{
  background:#212384;
  transform:rotate(360deg);
}

/* DESCRIPTION */
.amc-plan-box p{
  margin:0;
}

/* RESPONSIVE */
@media(max-width:900px){
  .amc-plan-grid{
    grid-template-columns:repeat(2,1fr);
  }
}

@media(max-width:500px){
  .amc-plan-grid{
    grid-template-columns:1fr;
  }
  .amc-plan-heading{
    font-size:30px;
  }
}
</style>

<!-- Stadard AMC End -->



<!-- Who Should Choose Start -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-amc-standard">

  <div class="indus-amc-container">

    <h2 class="indus-main-heading">
Who Should Choose the <span>Standard AMC</span>
</h2>

<div class="indus-steps-wrapper">

<div class="indus-step-card">
<div class="indus-step-icon">
<i class="fa-solid fa-house"></i>
</div>
<h7>Homes & Apartments</h7>
</div>

<div class="indus-step-card">
<div class="indus-step-icon">
<i class="fa-solid fa-building"></i>
</div>
<h7>Small Offices & Shops</h7>
</div>

<div class="indus-step-card">
<div class="indus-step-icon">
<i class="fa-solid fa-industry"></i>
</div>
<h7>Commercial Establishments</h7>
</div>

<div class="indus-step-card">
<div class="indus-step-icon">
<i class="fa-solid fa-briefcase"></i>
</div>
<h7>Businesses with Low-Cost Maintenance Needs</h7>
</div>

</div>

</div>

</section>

<style>
    .indus-benefits-section{
padding:80px 8%;
background:#ffffff;
font-family:'Montserrat';
}

.indus-benefits-container{
max-width:1200px;
margin:auto;
text-align:center;
}

/* HEADING */

.indus-main-heading{
font-size:38px;
font-weight:700;
color:#212384;
margin-bottom:70px;
}

.indus-main-heading span{
color:#f37021;
position:relative;
}

.indus-main-heading span::after{
content:"";
position:absolute;
bottom:-8px;
left:0;
width:100%;
height:4px;
background:#f37021;
border-radius:5px;
}

/* GRID */

.indus-steps-wrapper{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(207px,1fr));
gap:40px;
text-align: center;
}

/* CARD */

.indus-step-card{
background:#fff;
padding:30px 20px;
border-radius:16px;
box-shadow:0 12px 30px rgba(0,0,0,0.08);
transition:0.4s;
font-weight:500;
border:2px solid transparent; /* for hover border */
}

/* ICON */

.indus-step-icon{
width:70px;
height:70px;
background:#f37021;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
margin:0 auto 15px;
color:#fff;
font-size:26px;
overflow:hidden;
transition:0.4s;
}

/* HALF ICON */

.indus-step-icon i{
clip-path: inset(0 50% 0 0);
transition:0.4s;
}

/* TEXT */

.indus-step-card h4{
font-size:18px;
color:#000000;
margin:0;
line-height:1.4;
}

/* HOVER EFFECT */

.indus-step-card:hover{
transform:translateY(-8px);
box-shadow:0 20px 45px rgba(0,0,0,0.12);
border:2px solid #212384; /* blue border added */
}

.indus-step-card:hover .indus-step-icon{
background:#212384;
}

.indus-step-card:hover .indus-step-icon i{
clip-path: inset(0 0 0 0);
transform:scale(1.15);
}

/* RESPONSIVE */

@media(max-width:768px){

.indus-main-heading{
font-size:30px;
}

.indus-step-card{
padding:24px;
}

}
</style>


<!-- Who Should Choose End -->



<!-- Benefits  Section start -->

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

.indus-applications-section{
    padding:30px 20px;
    background:#ffffff;
}

.indus-container{
    max-width:1200px;
    margin:auto;
}

.indus-section-subtitle{
    font-size:15px;
    color:#000000;
    text-align:center;
    max-width:900px;
    margin:0 auto;
    line-height:1.8;
}

.indus-card-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:10px;
    justify-items:center;
    margin-left: 9px;
}

.indus-card-grid-centered{
    grid-template-columns:repeat(2,1fr);
}

.indus-flip-card{
    perspective:1000px;
    width:380px;
    height:400px;
}

.indus-flip-inner{
    position:relative;
    width:100%;
    height:100%;
    transition:transform 0.8s;
    transform-style:preserve-3d;
}

.indus-flip-card:hover .indus-flip-inner{
    transform:rotateY(180deg);
}

.indus-front-face,
.indus-back-face{
    position:absolute;
    width:100%;
    height:300px;
    backface-visibility:hidden;
    border-radius:18px;
    padding:25px;
    box-shadow:0 15px 35px rgba(33,35,132,0.12);
}

.indus-front-face{
    background: white;
    color:#fff;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    text-align:center;
    border: solid 2px #212384;
}

.indus-front-face h3{
    font-size:22px;
    margin-bottom:10px;
    color: #212384;
    font-weight: 700;
}

.indus-front-face span{
    font-size:40px;
    font-weight:700;
    color:#f37021;
}

.indus-back-face{
    background:#ffffff;
    color:#000000;
    transform:rotateY(180deg);
    border:2px solid #f37021;
    overflow-y:auto;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    text-align:center;
}
.indus-back-face h3{
    font-size:22px;
    color:#212384;
    margin-bottom:10px;
    font-weight: 600;
}

.indus-back-face p{
    font-size:18px;
    line-height:1.5;
}

.indus-back-face ul{
    margin:8px 0 8px 18px;
}

.indus-back-face ul li{
    font-size:14px;
    margin-bottom:5px;
    position:relative;
    padding-left:14px;
}

.indus-back-face ul li::before{
    content:"●";
    position:absolute;
    left:0;
    color:#f37021;
    font-size:10px;
}

.indus-flip-card:hover .indus-front-face h3{
    color:#f37021;
    transition:0.3s;
}

@media(max-width:992px){
    .indus-card-grid{
        grid-template-columns:repeat(2,1fr);
    }
    .indus-card-grid-centered{
        grid-template-columns:repeat(2,1fr);
    }
}
@media(max-width:600px){
    .indus-card-grid,
    .indus-card-grid-centered{
        grid-template-columns:1fr;
    }
}
</style>


<section class="indus-amc-standard">

<div class="indus-amc-container">

<h2 class="indus-main-heading">
            Benefits of <span> Standard AMC</span>
        </h2>
        </div>

        <div class="indus-card-grid">
            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>01</span>
                        <h3>Cost-effective maintenance</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Cost-effective maintenance</h3>
                        <p>
                            You pay a small yearly fee for expert service.

                        </p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>02</span>
                        <h3>Improved backup performance</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Improved backup performance</h3>
                        <p>Regular servicing enhances efficiency and extends system life.</p>
                    
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>03</span>
                        <h3>Reduced downtime</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Reduced downtime</h3>
                        <p>Early detection of issues prevents unexpected breakdowns.</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="indus-card-grid indus-card-grid-centered" style="margin-top:-55px;">
            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>04</span>
                        <h3>Professional care </h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Professional care </h3>
                        <p>
                            Your systems are maintained by trained and experienced engineers.
                        </p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>05.</span>
                        <h3>Transparency</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3> Transparency </h3>
                        <p>You only pay for parts when needed - no hidden charges.</p>
                  
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits  Section End -->



<!-- Why Customers Trust Us Start -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-amc-standard">

<div class="indus-amc-container">

<h2 class="indus-main-heading">
Why Customers Trust Us for <span>AMC Services</span>
</h2>

<div class="indus-feature-grid">

<!-- BOX 1 -->
<div class="indus-feature-box">
<div class="indus-icon-circle">
<i class="fas fa-user-cog"></i>
</div>
<h4>Expert Engineers</h4>
<p>Skilled and certified service engineers</p>
</div>

<!-- BOX 2 -->
<div class="indus-feature-box">
<div class="indus-icon-circle">
<i class="fas fa-clock"></i>
</div>
<h4>Fast Response</h4>
<p>Prompt response time</p>
</div>

<!-- BOX 3 -->
<div class="indus-feature-box">
<div class="indus-icon-circle">
<i class="fas fa-tools"></i>
</div>
<h4>Genuine Parts</h4>
<p>Genuine spare parts (billed separately)</p>
</div>

<!-- BOX 4 -->
<div class="indus-feature-box">
<div class="indus-icon-circle">
<i class="fas fa-file-alt"></i>
</div>
<h4>Service Reports</h4>
<p>Detailed service reports</p>
</div>

<!-- BOX 5 -->
<div class="indus-feature-box">
<div class="indus-icon-circle">
<i class="fas fa-headset"></i>
</div>
<h4>Customer Support</h4>
<p>Strong customer support</p>
</div>

</div>

</div>
</section>


<style>

.indus-amc-standard{
padding:80px 20px;
font-family:'Montserrat';
    /* margin-top: -80px; */
}

.indus-amc-container{
max-width:1000px;
margin:auto;
}

/* HEADING */

.indus-main-heading{
text-align:center;
font-size:36px;
color:#212384;
margin-bottom:60px;
}

.indus-main-heading span{
color:#f37021;
}

/* GRID */

.indus-feature-grid{
display:grid;
grid-template-columns:repeat(6,1fr);
gap:25px;
}

/* FIRST ROW */

.indus-feature-box:nth-child(1){
grid-column:1/3;
}

.indus-feature-box:nth-child(2){
grid-column:3/5;
}

.indus-feature-box:nth-child(3){
grid-column:5/7;
}

/* SECOND ROW (CENTERED) */

.indus-feature-box:nth-child(4){
grid-column:2/4;
}

.indus-feature-box:nth-child(5){
grid-column:4/6;
}

/* BOX */

.indus-feature-box{
background:#fff;
padding:30px 20px;
border-radius:14px;
text-align:center;

display:flex;
flex-direction:column;
align-items:center;

box-shadow:0 10px 30px rgba(0,0,0,0.08);
transition:all .35s ease;

border:2px solid transparent;
}

/* ICON */

.indus-icon-circle{
width:55px;
height:55px;
border-radius:50%;
background:#f37021;

display:flex;
align-items:center;
justify-content:center;

margin-bottom:15px;
transition:.35s;
}

.indus-icon-circle i{
color:#fff;
font-size:20px;
}

/* HEADING */

.indus-feature-box h4{
color:#f37021;
font-size:22px;
margin-bottom:10px;
transition:.35s;
}

/* TEXT */

.indus-feature-box p{
font-size:18px;
color:#000000;
line-height:1.5;
}

/* HOVER */

.indus-feature-box:hover{
transform:translateY(-8px);
box-shadow:0 25px 60px rgba(33,35,132,0.18);
border:2px solid #212384;
}

.indus-feature-box:hover h4{
color:#212384;
}

.indus-feature-box:hover .indus-icon-circle{
background:#212384;
}

/* RESPONSIVE */

@media(max-width:900px){

.indus-feature-grid{
grid-template-columns:repeat(2,1fr);
}

.indus-feature-box{
grid-column:auto !important;
}

}

@media(max-width:600px){

.indus-feature-grid{
grid-template-columns:1fr;
}

.indus-main-heading{
font-size:28px;
}

}

</style>

<!-- Why Customers Trust Us End -->



<!-- Pending All Section Start -->
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
.indus-main-wrapper {
    max-width: 1400px;
    width: 100%;
    padding: 30px 60px;
    animation: smoothRise 1s ease-out forwards;
    border: 1px solid rgba(255,255,255,0.7);
}

@keyframes smoothRise {
    0% { opacity: 0; transform: translateY(50px) scale(0.98); }
    100% { opacity: 1; transform: translateY(0) scale(1); }
}

.indus-title-block {
    font-size: 2.4rem;
    font-weight: 700;
    background: linear-gradient(135deg, #2a3791 0%, #2a3791 50%, #f15a24 80%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin: 2.2rem 0 1.2rem 0;
    display: inline-block;
    position: relative;
    letter-spacing: -0.02em;
    animation: titleGlow 0.8s ease-out;
}

@keyframes titleGlow {
    0% { opacity: 0; transform: translateX(-15px); text-shadow: 0 0 0 rgba(42,55,145,0); }
    100% { opacity: 1; transform: translateX(0); text-shadow: 2px 2px 10px rgba(42,55,145,0.2); }
}

.indus-title-block::before {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 80px;
    height: 5px;
    background: linear-gradient(90deg, #f15a24, #2a3791, #f15a24);
    border-radius: 8px;
    animation: underlineSlide 0.9s ease-out;
}

@keyframes underlineSlide {
    0% { width: 0; opacity: 0; }
    100% { width: 80px; opacity: 1; }
}

.indus-main-wrapper p {
    font-size: 1.18rem;
    line-height: 1.8;
    color: #1e293b;
    margin: 1.2rem 0;
    animation: fadeUp 0.7s ease-out;
}

.indus-icon-text {
    font-size: 1.5rem;
    font-weight: 600;
    color: #2a3791;
    margin-top: 1.8rem;
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    gap: 10px;
}

.indus-icon-text i {
    color: #f15a24;
    font-size: 2rem;
}

@keyframes fadeUp {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
}

.indus-main-wrapper p i.fa-chevron-right, 
.indus-main-wrapper p i.fa-circle {
    color: #f15a24;
    margin-right: 8px;
    font-size: 0.9rem;
}

.indus-data-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 8px;
    margin: 2rem 0 2.2rem 0;
    font-size: 1.1rem;
    animation: tableReveal 0.9s ease;
}

@keyframes tableReveal {
    0% { opacity: 0; transform: scale(0.97); }
    100% { opacity: 1; transform: scale(1); }
}

.indus-data-table-bordered {
    border-radius: 28px;
    overflow: hidden;
    box-shadow: 0 18px 35px -8px rgba(0,0,0,0.1);
}

.indus-data-table td, 
.indus-data-table th {
    padding: 1.1rem 0.8rem;
    background: white;
    transition: all 0.25s ease;
}

.indus-data-table td[style*="background: #2a3791"], 
.indus-data-table th[style*="background: #2a3791"],
.indus-data-table tr:first-child td[style*="background: #2a3791"] {
    background: #2a3791 !important;
    color: white;
    font-weight: 600;
    letter-spacing: 0.3px;
    border-bottom: 3px solid #f15a24;
}

.indus-data-table td div {
    font-weight: 500;
}

.indus-data-table tbody tr:hover td {
    background: #fff7f0;
    transform: scale(1.01);
    box-shadow: 0 4px 12px rgba(241,90,36,0.12);
}

.indus-data-table-bordered td:first-child {
    font-weight: 600;
    color: #2a3791;
    border-left: 3px solid #f15a24;
}

.indus-data-table td[colspan] {
    background: #fafcff;
}

.indus-data-table td i {
    color: #f15a24;
    margin-right: 10px;
}

.indus-data-table h4 {
    font-size: 1.6rem;
    font-weight: 600;
    margin: 0;
    color: white;
    letter-spacing: 0.5px;
}

.indus-data-table h4 i {
    color: rgba(255,255,255,0.9);
    margin-right: 12px;
}

.indus-list-item {
    display: flex;
    align-items: center;
    gap: 8px;
    margin: 0.4rem 0;
    font-size: 1.18rem;
}

.indus-list-item i {
    color: #f15a24;
    font-size: 1.2rem;
}

.indus-main-wrapper b, 
.indus-main-wrapper strong {
    color: #f15a24;
    font-weight: 600;
    background: #f15a24;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.indus-main-wrapper b:hover,
.indus-main-wrapper strong:hover {
    color: white;
}

.indus-data-table td div[align="center"] {
    width: 100%;
    text-align: center;
}

@media (max-width: 800px) {
    .indus-main-wrapper { padding: 1.8rem; }
    .indus-title-block { font-size: 2rem; }
    .indus-section-heading { font-size: 36px; }
}

.indus-data-table tbody tr {
    animation: rowPop 0.4s ease backwards;
}
.indus-data-table tbody tr:nth-child(1) { animation-delay: 0.1s; }
.indus-data-table tbody tr:nth-child(2) { animation-delay: 0.15s; }
.indus-data-table tbody tr:nth-child(3) { animation-delay: 0.2s; }
.indus-data-table tbody tr:nth-child(4) { animation-delay: 0.25s; }
.indus-data-table tbody tr:nth-child(5) { animation-delay: 0.3s; }
.indus-data-table tbody tr:nth-child(6) { animation-delay: 0.35s; }

@keyframes rowPop {
    0% { opacity: 0; transform: translateY(8px); }
    100% { opacity: 1; transform: translateY(0); }
}
</style>













<?php include('footer.php'); ?>

</body>
</html>