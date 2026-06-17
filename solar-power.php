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
<style>
    *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Montserrat';
}

body {
    font-family: 'Montserrat'

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
    font-size: 48px;
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
        <h1>Solar Power</h1>
        <div class="indus-breadcrumb-nav">
            <a href="#">Home</a> 
            &nbsp;»&nbsp; 
            <a href="#">Products</a> 
            &nbsp;»&nbsp; 
            <span>Solar Power</span>
        </div>
    </div>
</section>
<!-- Slider End -->












<!-- Img Section Start -->
<style>
.indus-product-showcase{
    width:100%;
    padding:40px 8%;
    text-align:center;
    position:relative;
    overflow:hidden;
}

/* Images */

.indus-image-container{
    position:relative;
    z-index:1;
    display:flex;
    justify-content:center;
    margin-bottom:30px;
    gap:30px;
    flex-wrap:wrap;
}

.indus-product-image{
    width:350px;
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

/* Buttons */

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

/* animated gradient border */

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

/* Popup */

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

/* Close Button */

.indus-close-button{
    position:absolute;
    top:35px;
    right:45px;
    font-size:40px;
    color:#fff;
    cursor:pointer;
}

/* Responsive */

@media(max-width:768px){
    .indus-product-image{
        width:260px;
    }

    .indus-action-btn{
        padding:14px 30px;
        font-size:14px;
    }
}
</style>

<section class="indus-product-showcase">

<div class="indus-image-container">
<img src="img/solar1.png" class="indus-product-image" alt="solar">
<img src="img/solar2.png" class="indus-product-image" alt="solar">
</div>

<div class="indus-button-group">
<a href="navbar.php" class="indus-action-btn">DOWNLOAD BROCHURE</a>
<a href="#" class="indus-action-btn">ENQUIRE NOW</a>
</div>

</section>

<!-- Lightbox -->

<div class="indus-lightbox-modal" id="lightbox">

<span class="indus-close-button" id="closeBtn">&times;</span>

<img id="popupImage">

</div>

<script>

const images = document.querySelectorAll(".indus-product-image");
const lightbox = document.getElementById("lightbox");
const popupImage = document.getElementById("popupImage");
const closeBtn = document.getElementById("closeBtn");

images.forEach(img=>{
    img.addEventListener("click",function(){
        popupImage.src = this.src;
        lightbox.classList.add("active");
    });
});

closeBtn.onclick = function(){
    lightbox.classList.remove("active");
}

lightbox.onclick = function(){
    lightbox.classList.remove("active");
}

</script>
<!-- Img Section End -->














<!-- Understanding Offline UPS Start -->
<style>
/* Global reset */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Montserrat';
}

/* Info panel */
.indus-info-panel{
    padding:40px 5%;
    position:relative;
    overflow:hidden;
}

/* Optional background circles */
.indus-info-panel::before,
.indus-info-panel::after{
    content:"";
    position:absolute;
    border-radius:50%;
    opacity:0.08;
    z-index:0;
}

.indus-info-panel::before{
    width:400px;
    height:400px;
    background: linear-gradient(135deg,#212384,#f37021);
    top:-100px;
    right:-150px;
    animation: floatShape 8s ease-in-out infinite alternate;
}

.indus-info-panel::after{
    width:300px;
    height:300px;
    background: linear-gradient(135deg,#f37021,#212384);
    bottom:-80px;
    left:-120px;
    animation: floatShape 10s ease-in-out infinite alternate-reverse;
}

/* Grid container */
.indus-grid-container{
    display:grid;
    grid-template-columns: repeat(auto-fit,minmax(320px,1fr));
    gap:40px;
    position:relative;
    z-index:1;
}

/* Section heading */
.indus-section-heading{
    text-align:center;
    font-size:32px;
    font-weight:900;
    color:#212384;
    margin-bottom:40px;
}

.indus-section-heading span{
    color:#f37021;
}

/* Content card */
.indus-content-card{
    background:#fff;
    padding:30px 25px;
    border-radius:20px;
    border:2px solid #f37021;
    box-shadow:0 15px 40px rgba(33,35,132,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}

.indus-content-card p{
    font-size:16px;
    line-height:1.8;
    color:#444;
    margin:0;
    transition: color 0.3s ease, transform 0.3s ease;
    font-size:large;
}

.indus-content-card strong{
    color:#212384;
    font-weight:600;
}

/* Simplified hover effect */
.indus-content-card:hover{
    transform: translateY(-8px); /* slight lift */
    box-shadow:0 25px 60px rgba(33,35,132,0.12);
    border-color:#212384;
}

.indus-content-card:hover p{
    color:#212384;
    transform: translateY(-1px); /* subtle text lift */
}

/* Animations for floating circles */
@keyframes floatShape{
    0%{transform: translateY(0);}
    100%{transform: translateY(15px);}
}

/* Responsive */
@media(max-width:992px){
    .indus-section-heading{
        font-size:28px;
    }
}
</style>


<section class="indus-info-panel">

    <h2 class="indus-section-heading">
        Solar for Industrial and Residential Applications Powering a <span>Sustainable Future</span>
    </h2>

    <div class="indus-grid-container">
    
        <div class="indus-content-card">
            <p>
               Energy is the backbone of progress, but traditional power sources are expensive, polluting, and unreliable. In today’s world, where industries demand high-capacity, reliable power solutions and homeowners seek affordable and eco-friendly energy, solar power has become the preferred choice.
            </p>
        </div>

        <div class="indus-content-card">
            <p>
            Solar for industrial and residential applications is more than just an alternative – it is a long-term solution that ensures cost savings, sustainability, and energy independence.
            </p>
        </div>

        <div class="indus-content-card">
            <p>
            At <strong>Indus Power Industries Pvt</strong>, we specialize in delivering end-to-end solar solutions including industrial solar systems, residential solar panels, hybrid inverters, lithium and lead-acid solar batteries, and solar UPS systems. Whether you are a factory owner looking to reduce operational costs or a homeowner tired of power cuts, our solar technology is designed to meet your exact needs.
            </p>
        </div>

    </div>
</section>
<!-- Understanding Offline UPS End -->
















<!-- Clean Modern Offline UPS Section Start -->
<style>    
.indus-clean-section {
    padding: 30px 20px;
    color: #212384;
    position: relative;
    overflow: hidden;
    border-radius: 15px;
}

/* Keep Floating Shapes */
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
    margin-top: -28px;
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
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 20px;
    color: #444;
    text-align: justify;
}

.indus-clean-section h3 {
    font-size: -7.2rem;
    color: #212384;
    margin: 30px 0 20px;
    font-weight: 600;
}

/* STEPS DESIGN WITH HOVER POPUP ANIMATION */
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

/* Ripple Effect on Hover */
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

/* Glowing Border Effect */
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
    color: #444;
    line-height: 1.6;
    position: relative;
    z-index: 1;
}

/* Pop animation for text on hover */
.indus-steps-list li:hover {
    color: #212384;
}

/* Add shine effect */
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

/* Responsive - single media query */
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

/* Small mobile devices */
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
<!-- Clean Modern Offline UPS Section End -->














<!-- Why Choose Start -->
<style>
.indus-why-section {
    padding: 30px 40px;
}

.indus-why-section h1 {
    color: #f37021;
    font-size: 42px;
    font-weight: 700;
    margin-bottom: 15px;
}

.indus-why-section p {
    font-size: 20px;
    color: #000;
    line-height: 1.6;
    max-width: 1200px;
}

.indus-why-section p strong {
    font-weight: 700;
}
</style>

<section class="indus-why-section">
    <h2 class="indus-section-heading">
        Why Choose <span>Solar Energy?</span>
    </h2>
</section>

<section class="indus-benefits-section">

<div class="indus-benefits-container">

<div class="indus-timeline-wrapper">

<!-- Item 1 -->
<div class="indus-timeline-item">
<div class="indus-timeline-marker">1</div>
<div class="indus-timeline-description">
<p>Reduce electricity bills significantly with renewable solar power.</p>
</div>
</div>

<!-- Item 2 -->
<div class="indus-timeline-item">
<div class="indus-timeline-marker">2</div>
<div class="indus-timeline-description">
<p>Environment-friendly energy source that lowers carbon emissions.</p>
</div>
</div>

<!-- Item 3 -->
<div class="indus-timeline-item">
<div class="indus-timeline-marker">3</div>
<div class="indus-timeline-description">
<p>Government incentives and subsidies make solar investment affordable.</p>
</div>
</div>

<!-- Item 4 -->
<div class="indus-timeline-item">
<div class="indus-timeline-marker">4</div>
<div class="indus-timeline-description">
<p>Solar systems require very low maintenance and last for decades.</p>
</div>
</div>

<!-- Item 5 -->
<div class="indus-timeline-item">
<div class="indus-timeline-marker">5</div>
<div class="indus-timeline-description">
<p>Energy independence with reduced dependence on the electricity grid.</p>
</div>
</div>

</div>

</div>
</section>


<style>

.indus-section-heading{
text-align:center;
font-size:36px;
color:#212384;
margin-bottom:60px;
font-family:'Montserrat';
}

.indus-section-heading span{
color:#f37021;
}

.indus-benefits-section{
padding:20px 8%;
font-family:'Montserrat';
}

.indus-benefits-container{
max-width:1000px;
margin:auto;
}

/* timeline wrapper */

.indus-timeline-wrapper{
position:relative;
margin-left:92px;
}

.indus-timeline-wrapper::before{
content:"";
position:absolute;
left:0;
top:0;
width:4px;
height:100%;
background:linear-gradient(to bottom,#f37021,#212384);
border-radius:20px;
}

/* timeline item */

.indus-timeline-item{
position:relative;
padding-left:70px;
margin-bottom:35px;
display:flex;
align-items:stretch;
}

/* marker */

.indus-timeline-marker{
position:absolute;
left:-14px;
top:26px;
width:30px;
height:30px;
background:#f37021;
color:#fff;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
font-size:14px;
font-weight:bold;
box-shadow:0 6px 15px rgba(243,112,33,0.4);
}

/* box */

.indus-timeline-description{
background:#fff;
padding:20px 25px;
border-radius:12px;
border-left:4px solid #212384;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
width:100%;
max-width:700px;
min-height:80px;
display:flex;
align-items:center;
transition:0.3s;
}

.indus-timeline-description p{
margin:0;
font-size:20px;
color:#333;
line-height:1.6;
}

/* hover */

.indus-timeline-description:hover{
transform:translateX(6px);
box-shadow:0 15px 35px rgba(243,112,33,0.15);
}

/* responsive */

@media(max-width:768px){

.indus-section-heading{
font-size:28px;
}

.indus-timeline-item{
padding-left:60px;
}

}

</style>
<!-- Key Benifits End -->



















<!-- Applications Section start -->
<style>

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
    color:#555;
    text-align:center;
    max-width:900px;
    margin:0 auto 60px;
    line-height:1.8;
}

.indus-card-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:10px;
    justify-items:center;
    margin-bottom: -60px;
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
    font-size:20px;
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
    justify-content:center;
    align-items:center;
    text-align:center;
    display:flex;
    flex-direction:column;
}

.indus-back-face h3{
    font-size:22px;
    color:#212384;
    margin-bottom:10px;
    font-weight: 600;
}

.indus-back-face p{
    font-size:19px;
    line-height:1.7;
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
<!-- Applications Section End -->























<!-- Features Section Start -->
<style>

.indus-features-section {
    padding: 30px 0px;
    margin-top: -50px;
    position: relative;
    overflow: hidden;
}

.indus-features-section::before,
.indus-features-section::after {
    content:"";
    position:absolute;
    border-radius:50%;
    opacity:0.05;
    z-index:0;
}

.indus-features-section::before {
    width: 400px;
    height: 400px;
    background: #f37021;
    top: -50px;
    left: -50px;
}

.indus-features-section::after {
    width: 500px;
    height: 500px;
    background: #212384;
    bottom: -100px;
    right: -100px;
}

.indus-features-container {
    max-width: 1100px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
    margin-top: 30px;
}

.indus-features-subtext {
    font-size: 16px;
    color: #555;
    text-align: center;
    max-width: 900px;
    margin: 0 auto 50px;
    line-height: 1.8;
}

.indus-feature-item {
    background: #ffffff;
    border-left: 4px solid #f37021;
    padding: 25px 30px;
    margin-bottom: 25px;
    box-shadow: 0 10px 25px rgba(33,35,132,0.1);
    border-radius: 12px;
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 0.8s forwards;
}

.indus-feature-item:nth-child(1) { animation-delay: 0.1s; }
.indus-feature-item:nth-child(2) { animation-delay: 0.2s; }
.indus-feature-item:nth-child(3) { animation-delay: 0.3s; }
.indus-feature-item:nth-child(4) { animation-delay: 0.4s; }
.indus-feature-item:nth-child(5) { animation-delay: 0.5s; }
.indus-feature-item:nth-child(6) { animation-delay: 0.6s; }
.indus-feature-item:nth-child(7) { animation-delay: 0.7s; }
.indus-feature-item:nth-child(8) { animation-delay: 0.8s; }
.indus-feature-item:nth-child(9) { animation-delay: 0.9s; }
.indus-feature-item:nth-child(10) { animation-delay: 1s; }
.indus-feature-item:nth-child(11) { animation-delay: 1.1s; }

.indus-feature-item h3 {
    font-size: 20px;
    font-weight: 600;
    color: #212384;
    margin-bottom: 10px;
}

.indus-feature-item p, 
.indus-feature-item ul {
    font-size: 15px;
    color: #555;
    line-height: 1.7;
}

.indus-feature-item ul {
    margin: 8px 0 0 18px;
}

.indus-feature-item ul li {
    margin-bottom: 5px;
    position: relative;
    padding-left: 14px;
}

.indus-feature-item ul li::before {
    content:"●";
    position:absolute;
    left:0;
    color:#f37021;
    font-size:10px;
}

@keyframes fadeInUp {
    0% { opacity: 0; transform: translateY(30px); }
    100% { opacity: 1; transform: translateY(0); }
}

@media(max-width:768px){
    .indus-section-heading { font-size: 28px; }
    .indus-feature-item h3 { font-size: 18px; }
}
</style>

<section class="indus-benefit-section">

<div class="indus-benefit-container">

<h2 class="indus-section-heading">
Benefits of Industrial <span>Solar Systems</span>
</h2>

<div class="indus-benefit-grid">

<!-- Box 1 -->
<div class="indus-benefit-card">
<div class="indus-benefit-icon">
<i class="fas fa-chart-line"></i>
</div>
<h3>Reduced Operational Costs</h3>
<p>Solar reduces dependence on costly grid power.</p>
</div>

<!-- Box 2 -->
<div class="indus-benefit-card">
<div class="indus-benefit-icon">
<i class="fas fa-coins"></i>
</div>
<h3>Higher ROI</h3>
<p>Investment in solar pays back in just 3–5 years.</p>
</div>

<!-- Box 3 -->
<div class="indus-benefit-card">
<div class="indus-benefit-icon">
<i class="fas fa-expand-arrows-alt"></i>
</div>
<h3>Scalability</h3>
<p>Expand capacity as business grows.</p>
</div>

<!-- Box 4 -->
<div class="indus-benefit-card">
<div class="indus-benefit-icon">
<i class="fas fa-leaf"></i>
</div>
<h3>Green Image</h3>
<p>Attract clients by demonstrating eco-conscious operations.</p>
</div>

</div>

</div>

</section>


<style>

.indus-benefit-section{
padding:80px 20px;
background:#ffffff;
font-family:'Montserrat';
}

.indus-benefit-container{
max-width:1100px;
margin:auto;
}

/* heading */

.indus-section-heading{
text-align:center;
font-size:36px;
margin-bottom:70px;
color:#212384;
}

.indus-section-heading span{
color:#f37021;
}

/* grid */

.indus-benefit-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
gap:40px;
}

/* card */

.indus-benefit-card{
text-align:center;
padding:35px 25px;
border-radius:30px;
border:1px solid #e8e8e8;
position:relative;
transition:0.35s;
background:#fff;
}

/* bottom accent bar */

.indus-benefit-card::after{
content:"";
position:absolute;
left:50%;
bottom:0;
width:0;
height:4px;
background:#f37021;
transition:0.4s;
transform:translateX(-50%);
}

/* hover */

.indus-benefit-card:hover{
box-shadow:0 12px 30px rgba(0,0,0,0.1);
transform:translateY(-6px);
}

.indus-benefit-card:hover::after{
width:70%;
}

/* icon */

.indus-benefit-icon{
font-size:34px;
color:#f37021;
margin-bottom:18px;
}

/* heading */

.indus-benefit-card h3{
font-size:20px;
margin-bottom:10px;
color:#212384;
font-weight: 600;
}

/* text */

.indus-benefit-card p{
font-size:18px;
color:#333;
line-height:1.6;
}

/* responsive */

@media(max-width:768px){

.indus-section-heading{
font-size:28px;
}

}

</style>



<section class="indus-applications-section">
    <div class="indus-container">
        <h2 class="indus-section-heading">
            Applications in <span> Industries</span>
        </h2>



        <div class="indus-card-grid">
            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>01</span>
                        <h3>Manufacturing Plants</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Manufacturing Plants</h3>
                        <p>
                            Run heavy machinery and reduce high utility costs.
                        </p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>02</span>
                        <h3>Hospitals & Healthcare Facilities </h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Hospitals & Healthcare Facilities </h3>
                        <p>Ensure uninterrupted power for life-saving equipment.</p>
                    
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>03</span>
                        <h3>Warehouses & Logistics Hubs</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Warehouses & Logistics Hubs</h3>
                        <p>A Maintain lighting, cooling, and equipment efficiency.</p>
            
                    </div>
                </div>
            </div>
        </div>

        <div class="indus-card-grid indus-card-grid-centered" style="margin-top:-55px;">
            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>04</span>
                        <h3>Educational Institutions </h3>
                    </div>
                    <div class="indus-back-face">
                        <h3> Educational Institutions </h3>
                        <p>
                            Lower energy expenses while promoting sustainability.
                        </p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>05</span>
                        <h3>Commercial Buildings </h3>
                    </div>
                    <div class="indus-back-face">
                        <h3> Commercial Buildings  </h3>
                        <p> IT parks, malls, and offices benefit from stable, affordable power.</p>
                        <ul>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>












<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

.indus-category-section {
    padding: 50px 20px;
    font-family: 'Montserrat';
}

.indus-section-heading {
    text-align: center;
    font-size: 32px;
    margin-bottom: 50px;
    color: #212384;
}

.indus-section-heading span {
    color: #f37021;
}

/* container with side by side cards */
.indus-category-container {
    max-width: 1000px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(2,1fr);
    gap: 40px;
}

.indus-category-item {
    background: #ffffff;
    padding: 25px 30px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(33,35,132,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border:2px solid #f37021;
}

.indus-category-item:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 45px rgba(33,35,132,0.15);
}

.indus-icon-text {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    gap: 10px;
    color: #212384;
}

.indus-category-desc {
    line-height: 2rem;
}

.indus-list-item {
    font-family: 'Montserrat';
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 12px;
    padding: 8px 12px;
    border-radius: 8px;
    transition: all 0.3s ease;
    cursor: pointer;
    font-size: large;
}

.indus-list-item i {
    color: #f37021;
    transition: transform 0.3s ease, color 0.3s ease;
}

.indus-list-item:hover {
    border-color: #001a57;
    color: #000000;
    transform: translateX(6px);
}

.indus-list-item:hover i {
    color: #fff;
    transform: scale(1.3);
       border-color: #001a57;
}

/* Responsive */
@media(max-width:768px){

.indus-category-container{
    grid-template-columns:1fr;
}

.indus-section-heading {
    font-size: 28px;
}

.indus-category-item {
    padding: 20px;
}

}

</style>


<section class="indus-category-section">

<div class="indus-category-container">

<h2 class="indus-section-heading" style="grid-column:1/-1;">
Residential <span>Solar Solutions</span>
</h2>


<div class="indus-category-item">

<div class="indus-icon-text">
<i class="fas fa-home"></i> Benefits of Residential Solar Systems :
</div>

<p class="indus-category-desc" style="line-height:2.4rem;">

<span class="indus-list-item"><i class="fas fa-chevron-right"></i> Lower Electricity Bills - Save thousands every year.</span>

<span class="indus-list-item"><i class="fas fa-chevron-right"></i> Backup During Outages - No dependence on diesel gensets or inverters.</span>

<span class="indus-list-item"><i class="fas fa-chevron-right"></i> Eco-Friendly Lifestyle - Reduce your family’s carbon footprint.</span>

<span class="indus-list-item"><i class="fas fa-chevron-right"></i> Increased Property Value - Solar-equipped homes have higher resale demand.</span>

<span class="indus-list-item"><i class="fas fa-chevron-right"></i> Future-Proof Energy - Protection from rising grid tariffs.</span>

</p>

</div>


<div class="indus-category-item">

<div class="indus-icon-text">
<i class="fas fa-industry"></i> Applications in Residences :
</div>

<p class="indus-category-desc" style="line-height:2.4rem;">

<span class="indus-list-item"><i class="fas fa-chevron-right"></i> Independent Houses - Rooftop solar panels with lithium or lead-acid batteries.</span>

<span class="indus-list-item"><i class="fas fa-chevron-right"></i> Apartments & Flats - Shared solar power with hybrid backup solutions.</span>

<span class="indus-list-item"><i class="fas fa-chevron-right"></i> Rural Homes - Reliable off-grid solar systems in areas with limited grid access.</span>

<span class="indus-list-item"><i class="fas fa-chevron-right"></i> Urban Residences - Lower high city electricity costs with rooftop solar.</span>

</p>

</div>

</div>
</section>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
margin:0;
font-family:'Montserrat';
}

.indus-role-section{
padding:70px 20px;
background:#ffffff;
}

.indus-role-container{
max-width:1100px;
margin:auto;
}

/* Heading */

.indus-section-heading{
text-align:center;
font-size:34px;
margin-bottom:50px;
color:#f37021;
}

.indus-section-heading span{
color:#212384;
}

/* Grid */

.indus-role-grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:35px;
}

/* Cards */

.indus-role-card{
background:#ffffff;
padding:35px 25px;
border-radius:14px;
text-align:center;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
border-top:4px solid #f37021;
}

/* Icon */

.indus-role-icon{
width:65px;
height:65px;
background:#f37021;
color:#fff;
display:flex;
align-items:center;
justify-content:center;
margin:auto;
border-radius:50%;
font-size:26px;
margin-bottom:18px;
}

/* Heading inside card */

.indus-role-card h3{
font-size:22px;
margin-bottom:12px;
color:#f37021;
transition:0.3s;
}

/* Hover effect ONLY for heading */

.indus-role-card:hover h3{
border-color:#000268;
}

/* Paragraph */

.indus-role-card p{
font-size:18px;
line-height:1.7rem;
color:#000000;
}

/* List */

.indus-role-list{
list-style:none;
padding:0;
margin-top:15px;
text-align:left;
}

.indus-role-list li{
display:flex;
gap:8px;
margin-bottom:8px;
font-size:15px;
align-items:center;
}

.indus-role-list i{
color:#f37021;
}

/* Responsive */

@media(max-width:900px){

.indus-role-grid{
grid-template-columns:1fr 1fr;
}

}

@media(max-width:600px){

.indus-role-grid{
grid-template-columns:1fr;
}

.indus-section-heading{
font-size:28px;
}

}

</style>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


<section class="indus-role-section">

<div class="indus-role-container">

<h2 class="indus-section-heading">
The Role of <span>Solar Batteries</span>
</h2>

<div class="indus-role-grid">

<!-- Card 1 -->
<div class="indus-role-card">

<div class="indus-role-icon">
<i class="fas fa-battery-half"></i>
</div>

<h3>Lead Acid Solar Batteries</h3>

<p>
Affordable and reliable batteries widely used for residential solar power systems.
</p>

</div>

<!-- Card 2 -->
<div class="indus-role-card">

<div class="indus-role-icon">
<i class="fas fa-bolt"></i>
</div>

<h3>Lithium Solar Batteries</h3>

<p>
Longer lifespan with faster charging, ideal for industries and heavy-load systems.
</p>

</div>

<!-- Card 3 -->
<div class="indus-role-card">

<div class="indus-role-icon">
<i class="fas fa-cogs"></i>
</div>

<h3>Choosing the Right Battery Depends On</h3>

<ul class="indus-role-list">

<li><i class="fas fa-chevron-right"></i> Required backup duration</li>
<li><i class="fas fa-chevron-right"></i> Budget</li>
<li><i class="fas fa-chevron-right"></i> Space availability</li>
<li><i class="fas fa-chevron-right"></i> Energy usage patterns</li>

</ul>

</div>

</div>
</div>

</section>


<style>

.indus-role-section{
padding:70px 20px;
background:#ffffff;
font-family:'Montserrat', sans-serif;
}

.indus-role-container{
max-width:1100px;
margin:auto;
}

/* Heading */

.indus-section-heading{
text-align:center;
font-size:34px;
margin-bottom:50px;
color:#212384;
}

.indus-section-heading span{
color:#f37021;
}

/* Grid */

.indus-role-grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:35px;
}

/* Cards */

.indus-role-card{
background:#ffffff;
padding:35px 25px;
border-radius:14px;
text-align:center;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
border-top:4px solid #212384;
transition:0.3s;
}

/* Top line change on hover */

.indus-role-card:hover{
border-top:4px solid #f37021;
}

/* Icon */

.indus-role-icon{
width:65px;
height:65px;
background:#212384;
color:#fff;
display:flex;
align-items:center;
justify-content:center;
margin:auto;
border-radius:50%;
font-size:26px;
margin-bottom:18px;
transition:0.3s;
}

/* Card Heading */

.indus-role-card h3{
font-size:24px;
margin-bottom:12px;
color:#212384;
transition:0.3s;
}

/* Paragraph */

.indus-role-card p{
font-size:19px;
line-height:1.7rem;
color:#333;
}

/* List */

.indus-role-list{
list-style:none;
padding:0;
margin-top:15px;
text-align:left;
}

.indus-role-list li{
display:flex;
gap:8px;
margin-bottom:8px;
font-size:15px;
align-items:center;
}

/* Arrow Default */

.indus-role-list i{
color:#212384;
transition:0.3s;
}

/* Hover Effects */

.indus-role-card:hover h3{
color:#f37021;
}

.indus-role-card:hover .indus-role-list i{
color:#f37021;
}

.indus-role-card:hover .indus-role-icon{
background:#f37021;
}

/* Responsive */

@media(max-width:900px){

.indus-role-grid{
grid-template-columns:1fr 1fr;
}

}

@media(max-width:600px){

.indus-role-grid{
grid-template-columns:1fr;
}

.indus-section-heading{
font-size:28px;
}

}

</style>
<!-- Features Section End -->

<!-- Pending All Section Start -->



<section class="indus-solar-section">

<div class="indus-solar-container">

<h2 class="indus-section-heading">
Hybrid and Grid-Tied <span>Solar System</span>
</h2>

<div class="indus-solar-layout">

<!-- Item 1 -->
<div class="indus-solar-item">

<div class="indus-solar-badge">
<i class="fas fa-bolt"></i>
</div>

<div class="indus-solar-content">
<h3>Grid-Tied Solar Systems</h3>
<p>
Connected to the electricity grid, perfect for saving on electricity bills.
</p>
</div>

</div>

<!-- Item 2 -->
<div class="indus-solar-item">

<div class="indus-solar-badge">
<i class="fas fa-solar-panel"></i>
</div>

<div class="indus-solar-content">
<h3>Hybrid Solar Systems</h3>
<p>
Combination of grid + solar + batteries providing flexibility and backup power.
</p>
</div>

</div>

<!-- Item 3 -->
<div class="indus-solar-item">

<div class="indus-solar-badge">
<i class="fas fa-sun"></i>
</div>

<div class="indus-solar-content">
<h3>Off-Grid Solar Systems</h3>
<p>
Completely independent systems, ideal for remote locations without grid access.
</p>
</div>

</div>

</div>

</div>

</section>








<style>

.indus-solar-section{
padding:50px 20px;
font-family:'Montserrat';
}

.indus-solar-container{
max-width:1050px;
margin:auto;
}

.indus-section-heading{
text-align:center;
font-size:34px;
margin-bottom:50px;
color:#212384;
}

.indus-section-heading span{
color:#f37021;
}

/* layout */

.indus-solar-layout{
display:flex;
flex-direction:column;
gap:30px;
}

/* item */

.indus-solar-item{
display:flex;
align-items:center;
gap:25px;
padding:28px;
background:#f8fafc;
border-radius:10px;
border-left:6px solid #f37021;
transition:0.35s;
}

/* hover */

.indus-solar-item:hover{
background:#eef2ff;
transform:translateX(8px);
box-shadow:0 10px 30px rgba(0,0,0,0.08);
}

/* badge */

.indus-solar-badge{
width:60px;
height:60px;
background:#f37021;
color:#fff;
display:flex;
align-items:center;
justify-content:center;
border-radius:50%;
font-size:26px;
flex-shrink:0;
transition:0.35s;
}

/* hover icon */

.indus-solar-item:hover .indus-solar-badge{
background:#f37021;
transform:scale(1.1);
}

/* text */

.indus-solar-content h3{
font-size:22px;
margin-bottom:6px;
color:#f37021;
transition:0.3s;
}

.indus-solar-content p{
font-size:18px;
line-height:1.6;
color:#000000;
}

/* HEADING COLOR CHANGE ON HOVER */

.indus-solar-item:hover .indus-solar-content h3{
color:#212384;
}

/* responsive */

@media(max-width:768px){

.indus-solar-item{
flex-direction:column;
text-align:center;
}

}</style>





    <!-- Industrial & Residential Offline UPS Section -->

 <style>

.indus-solar-section{
    padding:60px 20px;
    background:#ffffff;
    font-family:'Montserrat';
}

.indus-solar-container{
    max-width:1100px;
    margin:auto;
}

.indus-solar-heading{
    text-align:center;
    font-size:34px;
    font-weight:700;
    color:#212384;
    margin-bottom:35px;
}

.indus-solar-heading span{
    color:#f37021;
}

.indus-solar-intro{
    font-size:17px;
    line-height:2rem;
    color:#333;
    text-align:center;
    margin-bottom:40px;
}

/* feature cards layout */

.indus-feature-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(,1fr));
    gap: 25px;
}

/* card */

.indus-feature-card{
    display:flex;
    align-items:flex-start;
    gap:18px;
    background:#fff;
    padding:25px;
    border-radius:12px;
    border-left:5px solid #f37021;
    box-shadow:0 10px 30px rgba(0,0,0,0.07);
    transition:all .35s ease;
}

.indus-feature-card:hover{
    transform:translateY(-6px);
    box-shadow:0 20px 40px rgba(33,35,132,0.15);
}

/* icon box */

.indus-feature-icon{
    width:55px;
    height:55px;
    color:#f37021;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:10px;
    color:#f37021;
    font-size:22px;
    flex-shrink:0;
}

/* text */

.indus-feature-text h4{
    font-size:22px;
    font-weight:600;
    color:#212384;
    margin-bottom:6px;
}

.indus-feature-text p{
    font-size:18px;
    color:#444;
    line-height:1.7rem;
}

.indus-solar-note{
    margin-top:35px;
    text-align:center;
    font-size:17px;
    line-height:2rem;
    color:#333;
}

/* responsive */

@media(max-width:768px){

.indus-solar-heading{
    font-size:28px;
}

.indus-feature-card{
    flex-direction:column;
}

.indus-feature-icon{
    margin-bottom:5px;
}

}
</style>


<section class="indus-solar-section">

<div class="indus-solar-container">

<h2 class="indus-section-heading">
Solar UPS And <span>Inverters</span>
</h2>

<div class="indus-timeline">

<!-- Item 1 -->
<div class="indus-timeline-item left">

<div class="indus-content">
<h3>Solar UPS for Industries</h3>

<p>
Heavy-duty backup solutions designed to support industrial machinery,
production systems, and high-power equipment with reliable performance.
</p>
</div>

<span class="indus-circle">01</span>

</div>


<!-- Item 2 -->
<div class="indus-timeline-item right">

<span class="indus-circle">02</span>

<div class="indus-content">
<h3>Solar Inverters for Homes</h3>

<p>
Compact and energy-efficient solar inverters designed for residential
applications, ensuring stable and uninterrupted power for daily use.
</p>
</div>

</div>

</div>

</div>

</section>














<!-- Why Indus Power start -->
<style>

.indus-solar-section{
padding:50px 20px;
font-family:'Montserrat';
}

.indus-solar-container{
max-width:1100px;
margin:auto;
}

/* Heading */

.indus-section-heading{
text-align:center;
font-size:36px;
margin-bottom:70px;
color:#212384;
}

.indus-section-heading span{
color:#f37021;
}

/* Timeline */

.indus-timeline{
position:relative;
}

/* Center line */

.indus-timeline::before{
content:"";
position:absolute;
left:50%;
top:0;
width:3px;
height:100%;
background:#f37021;
transform:translateX(-50%);
}

/* Timeline item */

.indus-timeline-item{
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:50px;
position:relative;
}

/* Left side */

.indus-timeline-item.left .indus-content{
width:45%;
text-align:right;
}

/* Right side */

.indus-timeline-item.right .indus-content{
width:45%;
text-align:left;
margin-left:31rem;
}

/* Circle */

.indus-circle{
width:36px;
height:36px;
background:#212384;
color:#fff;
display:flex;
align-items:center;
justify-content:center;
border-radius:50%;
font-size:14px;
font-weight:600;
position:absolute;
left:50%;
transform:translateX(-50%);
z-index:2;
}

/* Content */

.indus-content{
background:#ffffff;
padding:25px;
border-radius:10px;
box-shadow:0 8px 20px rgba(0,0,0,0.08);
transition:0.3s;
}

.indus-content:hover{
transform:translateY(-5px);
box-shadow:0 15px 30px rgba(0,0,0,0.15);
}

/* Heading */

.indus-content h3{
font-size:22px;
color:#f37021;
margin-bottom:8px;
transition:0.3s;
}

/* Hover heading blue */

.indus-content:hover h3{
color:#212384;
}

/* Text */

.indus-content p{
font-size:18px;
line-height:1.6;
color:#000;
}

/* Responsive */

@media(max-width:768px){

.indus-timeline::before{
left:20px;
}

.indus-timeline-item{
flex-direction:column;
align-items:flex-start;
}

.indus-circle{
left:20px;
transform:none;
}

.indus-content{
width:100%;
margin-left:40px;
text-align:left;
}

}
</style>




<section class="indus-category-section">
<div class="indus-clean-container">

<h2 class="indus-section-heading">
Why Indus Power  <span>Industries Pvt. Ltd.?</span>
</h2>

<div class="indus-advantage-wrapper">

<div class="indus-adv-card">
<i class="fas fa-solar-panel"></i>
<p>Customized solar solutions for industries and homes.</p>
</div>

<div class="indus-adv-card">
<i class="fas fa-battery-full"></i>
<p>Complete product range - from UPS and inverters to lithium and lead-acid batteries.</p>
</div>

<div class="indus-adv-card">
<i class="fas fa-map-marker-alt"></i>
<p>Nationwide installation and service support.</p>
</div>

<div class="indus-adv-card">
<i class="fas fa-bolt"></i>
<p>High-quality, energy-efficient products with long life.</p>
</div>

<div class="indus-adv-card">
<i class="fas fa-tools"></i>
<p>End-to-end solutions - design, supply, installation, and maintenance.</p>
</div>

<div class="indus-adv-card">
<i class="fas fa-check-circle"></i>
<p>Provided for above 10KVA systems.</p>
</div>

</div>

</div>
</section>
















<!-- conclusion start -->
<style>
    .indus-category-section{
padding:50px 20px;
}

.indus-section-heading{
text-align:center;
font-size:36px;
margin-bottom:72px;
margin-top:-1rem;
}

.indus-section-heading span{
color:#f37021;
}

.indus-advantage-wrapper{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
gap:25px;
max-width:1100px;
margin:auto;
}

.indus-adv-card{
display:flex;
align-items:center;
gap:18px;
background:#ffffff;
padding:22px;
border-radius:10px;
box-shadow:0 5px 15px rgba(0,0,0,0.08);
transition:0.3s;
border-left:5px solid #252f74;
}

.indus-adv-card i{
font-size:26px;
color:#f37021;
min-width:30px;
}

.indus-adv-card p{
margin:0;
font-size:18px;
color:#333;
line-height:1.5;
}

.indus-adv-card:hover{
background:#eaf3ff;
transform:translateY(-5px);
border-left:5px solid #271b92;
}

.indus-adv-card:hover i{
color:#102569;
}
</style>



<section class="indus-clean-section">
    <div class="indus-clean-container">
    <h2 class="indus-section-heading"><span>Conclusion</span></h2>

    <p>Whether you are an industry owner seeking to cut operational costs or a
         homeowner looking for reliable power, solar is the future. With its cost 
         efficiency, sustainability, and reliability, solar power is a smart
          investment for both industrial and residential users. </p>
    <p>At Indus Power Industries Pvt. Ltd., we provide customized solar solutions including industrial solar plants, residential rooftop systems, hybrid solar setups, solar UPS, and advanced lithium & lead-acid batteries. Our expertise ensures you get the most 
        efficient and durable solar power system tailored to your needs.</p>
   
</div>
</section>







<?php include ('footer.php'); ?>

</body>
</html>