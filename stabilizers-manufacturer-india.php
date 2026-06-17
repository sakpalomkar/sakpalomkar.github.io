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
    font-size: 42px;
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
        <h1>Voltage Stabilizer Manufacturer India</h1>
        <div class="premium-breadcrumb-trail">
            <a href="#">Home</a> 
            &nbsp;»&nbsp; 
            <a href="#">Products</a> 
            &nbsp;»&nbsp;
            <a href="#">Stabilizer</a> 
            &nbsp;»&nbsp;
            <span>Voltage Stabilizer</span>
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
    <img src="img/Voltage Stabilizer1.png" class="tech-display-image" alt="">
    <img src="img/Voltage Stabilizer2.png" class="tech-display-image" alt="">
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













<!--  Voltage Stabilizer Solutions Start -->

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap');

/* Panel Section */
.indus-section-panel{
    background:#ffffff;
    padding:50px 5%;
    font-family:'Montserrat';
}

/* Section Heading */
.indus-section-heading{
    text-align:center;
    font-size:32px;
    font-weight:900;
    color:#212384;
    margin-bottom:50px;
}

/* Orange Heading Text */
.indus-section-heading span{
    color:#f37021;
    position:relative;
}


/* Grid Container */
.indus-grid-container{
    display:grid;
    grid-template-columns: repeat(auto-fit,minmax(320px,1fr));
    gap:40px;
    max-width:1100px;
    margin:auto;
}

/* Content Card */
.indus-content-card{
    background:#ffffff;
    padding:35px 30px;
    border-radius:25px;
    box-shadow:0 20px 60px rgba(33,35,132,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    border:2px solid #f37021;
}

/* Card Text */
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
.indus-section-heading{
font-size:28px;
}
}

</style>


<section class="indus-section-panel">

<h2 class="indus-process-heading">
Voltage Stabilizer Solutions for <span>Homes, Offices, Shops & Industries</span>
</h2>

<div class="indus-grid-container">

<div class="indus-content-card">
<p>
A voltage stabilizer is one of the most important electrical safety devices used to
protect appliances and equipment from voltage fluctuations. It helps maintain a consistent
voltage level and ensures that electrical devices receive safe power. By regulating the voltage supply,
a stabilizer prevents damage and improves the overall reliability of electrical systems.
</p>
</div>

<div class="indus-content-card">
<p>
In many areas, unstable electricity supply causes frequent voltage ups and downs.
These fluctuations can damage sensitive electrical devices, reduce their performance,
and lead to higher maintenance and repair costs over time. Using a reliable power stabilizer
helps protect equipment and ensures smooth and uninterrupted operation.
</p>
</div>

<div class="indus-content-card">
<p>
Whether you are experiencing voltage fluctuation problems at home, in a shop, office,
or industrial facility, installing the right voltage stabilizer is the most effective solution.
It safeguards valuable appliances, improves equipment lifespan, and provides stable power
for efficient performance.
</p>
</div>

</div>

</section>


<!-- Voltage Stabilizer Solutions  End -->




<!-- Why Voltage Fluctuation starts -->

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<section class="indus-amc-section">

<h2 class="indus-process-heading">
Why Voltage Fluctuation Is a <span>Serious Problem</span>
</h2>

<div class="indus-wrapper">

<!-- CARD 1 -->

<div class="indus-card">

<div class="indus-card-icon">
<i class="fas fa-bolt"></i>
</div>

<h3>Voltage fluctuation occurs due to the :</h3>

<ul class="indus-list">

<li>Overloaded power grids</li>
<li>Long-distance power transmission</li>
<li>Preventive maintenance</li>
<li>Faulty wiring</li>
<li>Seasonal electricity demand</li>
<li>Industrial load variations</li>

</ul>

</div>


<!-- CARD 2 -->

<div class="indus-card">

<div class="indus-card-icon">
<i class="fas fa-triangle-exclamation"></i>
</div>

<h3>Without a stabilizer, voltage fluctuation can cause :</h3>

<ul class="indus-list">

<li>Appliance breakdown</li>
<li>Overheating of motors</li>
<li>Damage to electronic circuits</li>
<li>Data loss in computers and servers</li>
<li>Frequent repair expenses</li>

</ul>

</div>

</div>

</section>

<style>

.indus-amc-section{
padding:80px 20px;
background:#ffffff;
font-family:'Montserrat';
text-align:center;
}

/* WRAPPER */

.indus-wrapper{
max-width:1000px;
margin:auto;
display:flex;
gap:30px;
justify-content:center;
flex-wrap:wrap;
}

/* CARD */

.indus-card{
position:relative;
background:#ffffff;
border-radius:14px;
padding:50px 30px 30px;
width:460px;
text-align:left;
box-shadow:0 10px 30px rgba(0,0,0,0.08);
transition:0.4s;
overflow:hidden;
border:2px solid #f37021;   /* default border */
}

/* CARD HOVER */

.indus-card:hover{
transform:translateY(-10px);
box-shadow:0 20px 45px rgba(0,0,0,0.15);
border-color:#212384;      /* blue border on hover */
}

/* ICON */

.indus-card-icon{
position:absolute;
top:8px;
left:50%;
transform:translateX(-50%);
width:60px;
height:60px;
border-radius:50%;
background:#f37021;
display:flex;
align-items:center;
justify-content:center;
color:#fff;
font-size:26px;
box-shadow:0 10px 20px rgba(0,0,0,0.2);
transition:0.4s;
}

.indus-card:hover .indus-card-icon{
background:#212384;
transform:translateX(-50%) rotate(360deg) scale(1.1);
}

/* TITLE */

.indus-card h3{
text-align:center;
font-size:22px;
margin-bottom:21px;
color:#f37021;
transition:0.3s;
margin-top:40px;
font-weight: 600;
}

.indus-card:hover h3{
color:#212384;
}

/* LIST */

.indus-list{
list-style:none;
padding:0;
margin:0;
}

.indus-list li{
font-size:17px;
color:#000000;
margin-bottom:12px;
padding-left:20px;
position:relative;
}

.indus-list li::before{
content:"✔";
position:absolute;
left:0;
color:#f37021;
font-size:14px;
}

/* CHECK COLOR CHANGE */

.indus-card:hover .indus-list li::before{
color:#212384;
}

/* RESPONSIVE */

@media(max-width:900px){

.indus-wrapper{
flex-direction:column;
align-items:center;
}

.indus-card{
width:100%;
max-width:500px;
}

}

</style>

<!-- Why Voltage Fluctuation  Ends -->



<!-- What Is a Voltage  starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-process-section">

<h2 class="indus-process-heading">
What Is a Voltage Stabilizer and <span>How It Works</span>
</h2>

<p class="indus-process-text">
A <strong>voltage stabilizer</strong> continuously monitors the incoming voltage supply. If the voltage becomes too high or too low, the stabilizer automatically corrects it and supplies safe voltage to connected equipment.
</p>

<div class="indus-process-wrapper">

<!-- STEP 1 -->
<div class="indus-step">
<div class="indus-step-icon">
<i class="fas fa-plug"></i>
</div>
<h4>Input Voltage Detected</h4>
<p>The stabilizer detects incoming power supply.</p>
</div>

<div class="indus-arrow">
<i class="fas fa-arrow-right"></i>
</div>

<!-- STEP 2 -->
<div class="indus-step">
<div class="indus-step-icon">
<i class="fas fa-wave-square"></i>
</div>
<h4>Fluctuation Identified</h4>
<p>Voltage changes are quickly identified.</p>
</div>

<div class="indus-arrow">
<i class="fas fa-arrow-right"></i>
</div>

<!-- STEP 3 -->
<div class="indus-step">
<div class="indus-step-icon">
<i class="fas fa-cogs"></i>
</div>
<h4>Automatic Correction</h4>
<p>The stabilizer adjusts voltage automatically.</p>
</div>

<div class="indus-arrow">
<i class="fas fa-arrow-right"></i>
</div>

<!-- STEP 4 -->
<div class="indus-step">
<div class="indus-step-icon">
<i class="fas fa-bolt"></i>
</div>
<h4>Stable Output</h4>
<p>Safe voltage is delivered to equipment.</p>
</div>

</div>

</section>

<style>

.indus-process-section{
padding:50px 20px;
background:#ffffff;
font-family:'Montserrat';
text-align:center;
margin-top: -40px;
}

/* HEADING */

.indus-process-heading{
font-size:32px;
color:#212384;
margin-bottom:69px;
text-align:center;
font-weight: 700;
}

.indus-process-heading span{
color:#f37021;
position:relative;
}

/* UNDERLINE ANIMATION */

.indus-process-heading span::after{
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

/* TEXT */

.indus-process-text{
max-width:1081px;
margin:auto;
font-size:18px;
line-height:1.7;
margin-bottom:60px;
margin-top:3rem;
}

/* PROCESS WRAPPER */

.indus-process-wrapper{
display:flex;
align-items:center;
justify-content:center;
flex-wrap:wrap;
gap:20px;
}

/* STEP CARD */

.indus-step{
background:#fff;
padding:30px 25px;
border-radius:14px;
width:220px;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
transition:0.4s;
position:relative;
overflow:hidden;
}

.indus-step:hover{
transform:translateY(-10px);
box-shadow:0 20px 40px rgba(0,0,0,0.15);
border-color: #212384;
}

/* ICON */

.indus-step-icon{
width:60px;
height:60px;
border-radius:50%;
background:#f37021;
color:#fff;
display:flex;
align-items:center;
justify-content:center;
font-size:24px;
margin:auto;
margin-bottom:15px;
transition:0.4s;
}

.indus-step:hover .indus-step-icon{
background:#212384;
transform:rotate(360deg) scale(1.1);
}

/* STEP TITLE */

.indus-step h4{
font-size:20px;
color:#212384;
margin-bottom:8px;
font-weight: 600;
}

.indus-step p{
font-size:17px;
color:#000000;
}

/* ARROW */

.indus-arrow{
font-size:28px;
color:#f37021;
animation:arrowMove 1.5s infinite;
}

@keyframes arrowMove{
0%{transform:translateX(0);}
50%{transform:translateX(8px);}
100%{transform:translateX(0);}
}

/* RESPONSIVE */

@media(max-width:900px){

.indus-process-wrapper{
flex-direction:column;
}

.indus-arrow{
transform:rotate(90deg);
}

}

</style>

<!-- What Is a Voltage  ends -->



<!-- Voltage Stabilizer for Residential Use starts -->

<section class="indus-applications-section">

<h2 class="indus-process-heading">
Voltage Stabilizer for <span>Residential Use</span>
</h2>


<div class="indus-card-grid">

<!-- 01 -->
<div class="indus-flip-card">
<div class="indus-flip-inner">

<div class="indus-front-face">
<span>01</span>
<h3>Voltage Stabilizer for Home</h3>
</div>

<div class="indus-back-face">
<h3>Voltage Stabilizer for Home</h3>
<p>
Protects household appliances like refrigerators, air conditioners,
washing machines, televisions, and inverters.
</p>
</div>

</div>
</div>

<!-- 02 -->
<div class="indus-flip-card">
<div class="indus-flip-inner">

<div class="indus-front-face">
<span>02</span>
<h3>Stabilizer for House</h3>
</div>

<div class="indus-back-face">
<h3>Stabilizer for House</h3>
<p>
Provides centralized protection for multiple appliances when installed
as a main voltage regulator for the entire home.
</p>
</div>

</div>
</div>

<!-- 03 -->
<div class="indus-flip-card">
<div class="indus-flip-inner">

<div class="indus-front-face">
<span>03</span>
<h3>Stabilizer for Flat / Apartment</h3>
</div>

<div class="indus-back-face">
<h3>Stabilizer for Flat / Apartment</h3>
<p>
Perfect for urban apartments where shared power loads
often cause voltage fluctuations and instability.
</p>
</div>

</div>
</div>

</div>


<div class="indus-card-grid indus-card-grid-centered" style="margin-top:-55px;">

<!-- 04 -->
<div class="indus-flip-card">
<div class="indus-flip-inner">

<div class="indus-front-face">
<span>04</span>
<h3>Stabilizer for Bungalow</h3>
</div>

<div class="indus-back-face">
<h3>Stabilizer for Bungalow</h3>
<p>
Higher-capacity stabilizers designed for larger homes,
protecting lighting systems, pumps, and heavy appliances.
</p>
</div>

</div>
</div>

<!-- 05 -->
<div class="indus-flip-card">
<div class="indus-flip-inner">

<div class="indus-front-face">
<span>05</span>
<h3>Stabilizer for Whole House</h3>
</div>

<div class="indus-back-face">
<h3>Stabilizer for Whole House</h3>
<p>
Installed at the main supply to protect the entire home,
eliminating the need for separate stabilizers for each appliance.
</p>
</div>

</div>
</div>

<!-- 06 -->
<div class="indus-flip-card">
<div class="indus-flip-inner">

<div class="indus-front-face">
<span>06</span>
<h3>Main Stabilizer for Home</h3>
</div>

<div class="indus-back-face">
<h3>Main Stabilizer for Home</h3>

<ul>
<p>Ideal for:</p>
<li>Homes</li>
<li>Apartments</li>
<li>Bungalows</li>
<li>Residential societies</li>
<li>Home offices</li>
<li>Luxury villas</li>
</ul>

</div>
</div>
</div>

</div>

</section>

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
    margin:0 auto 60px;
    line-height:1.8;
}

.indus-card-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:10px;
    justify-items:center;
}



.indus-flip-card{
    perspective:1000px;
    width:344px;
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
    font-weight: 600;
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
    text-align: center;
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
    font-size:16px;
    line-height:1.7;
    color: #000;
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

<!-- Voltage Stabilizer for Residential Use ends -->




<!-- Stabilizer for Inverter Systems starts -->

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-power-section">

<h2 class="indus-process-heading">
Stabilizer for <span>Inverter Systems</span>
</h2>

<p class="inv-power-desc">
An inverter is a critical backup system during power cuts. A stabilizer protects
the inverter and batteries from unstable voltage during charging, ensuring
longer battery life and better performance.
</p>

<div class="inv-power-steps">

<div class="power-step">
<div class="power-icon">
<i class="fa-solid fa-bolt"></i>
</div>
<h4>Unstable Voltage</h4>
</div>

<div class="power-line"></div>

<div class="power-step">
<div class="power-icon">
<i class="fa-solid fa-plug"></i>
</div>
<h4>Voltage Stabilizer</h4>
</div>

<div class="power-line"></div>

<div class="power-step">
<div class="power-icon">
<i class="fa-solid fa-car-battery"></i>
</div>
<h4>Inverter Protection</h4>
</div>

<div class="power-line"></div>

<div class="power-step">
<div class="power-icon">
<i class="fa-solid fa-shield-halved"></i>
</div>
<h4>Longer Battery Life</h4>
</div>

</div>

</section>
<style>
    body{
font-family:'Montserrat';
background:#ffffff;
}
.power-step:hover .power-icon{
background:#f37021;
color:#fff;
transition:0.3s;
}

.inv-power-section{
padding:80px 20px;
text-align:center;
}

.inv-power-heading{
font-size:34px;
margin-bottom:10px;
color:#212384;
}

.inv-power-heading span{
color:#f37021;
}

.inv-power-desc{
max-width:1066px;
margin:auto;
text-align:center;
line-height:1.7;
color:#000000;
margin-bottom:60px;
margin-top: 3rem;
font-size:19px;
}

/* STEPS */

.inv-power-steps{
display:flex;
flex-direction:column;
align-items:center;
gap:20px;
}

.power-step{
background:#fff;
padding:20px 40px;
border-radius:12px;
border:2px solid #212384;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
display:flex;
align-items:center;
gap:15px;
transition:0.3s;
}

.power-icon{
font-size:26px;
color:#f37021;
width:40px;
height:40px;
display:flex;
align-items:center;
justify-content:center;
background:#ffffff;
border-radius:50%;
}

.power-step h4{
font-size:16px;
color:#212384;
font-weight: 700;
}

/* HOVER */

.power-step:hover{
transform:translateX(10px);
border-color:#f37021;
}

/* CONNECTOR */

.power-line{
width:4px;
height:40px;
background:#f37021;
animation:powerPulse 1.6s infinite;
}

@keyframes powerPulse{

0%{
opacity:0.3;
transform:scaleY(0.6);
}

50%{
opacity:1;
transform:scaleY(1);
}

100%{
opacity:0.3;
transform:scaleY(0.6);
}

}

@media(max-width:600px){

.power-step{
padding:18px 25px;
}

.power-step h4{
font-size:14px;
}

}
</style>

<!-- Stabilizer for Inverter Systems Ends -->





<!-- Voltage Stabilizer for  starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
font-family: 'Montserrat';
background:#ffffff;
margin:0;
padding:0;
}

/* SECTION */

.commercial-stab-section{
padding:80px 20px;
max-width:1100px;
margin:auto;
}

.commercial-heading{
text-align:center;
font-size:34px;
margin-bottom:69px;
color:#212384
}

.commercial-heading span{
color:#f37021;
}

.commercial-desc{
text-align:center;
max-width:750px;
margin:auto;
margin-top:3rem;
margin-bottom:60px;
color:#000000;
line-height:1.7;
}

/* TIMELINE */



/* ITEMS */

.timeline-item{
display:flex;
align-items:center;
margin-bottom:40px;
position:relative;
}

/* ICON ON LINE */

.timeline-icon{
position:absolute;
left:-3px;
width:64px;
height:64px;
background:#ffffff;
border:3px solid #f37021;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
font-size:20px;
color:#f37021;
transition:0.3s;
}

/* BOX */

.timeline-content{
background:#fff;
padding:22px 25px;
border-radius:10px;
margin-left:5rem;
border:2px solid #ffffff;
box-shadow:0 8px 20px rgba(0,0,0,0.08);
transition:0.3s;
width:100%;
min-height:100px;
display:flex;
flex-direction:column;
justify-content:center;
}

/* SUBHEADING */

.timeline-content h3{
color:#f37021;
margin-bottom:6px;
font-size:20px;
transition:0.3s;
font-weight: 700;
}

.timeline-content p{
font-size:18px;
color:#000000;
line-height:1.6;
}

/* HOVER EFFECT */

.timeline-item:hover .timeline-content{
border-color:#212384;
transform:translateX(6px);
}

.timeline-item:hover .timeline-content h3{
color:#212384;
}

.timeline-item:hover .timeline-icon{
background:#212384;
border-color:#212384;
color:#fff;
transform:scale(1.1);
}

/* LINE ANIMATION */

@keyframes lineFlow{

0%{opacity:0.3;}
50%{opacity:1;}
100%{opacity:0.3;}

}

/* MOBILE */

@media(max-width:600px){

.commercial-timeline{
padding-left:60px;
}

.timeline-icon{
left:-42px;
}

.timeline-content{
padding:18px;
}

.timeline-content h3{
font-size:16px;
}

}

</style>

<section class="commercial-stab-section">


<h2 class="indus-process-heading">
Voltage Stabilizer for <span>Commercial Use</span>
</h2>
<div class="commercial-timeline">

<!-- ITEM 1 -->
<div class="timeline-item">
<div class="timeline-icon">
<i class="fa-solid fa-store"></i>
</div>
<div class="timeline-content">
<h3>Stabilizer for Shop</h3>
<p>Protects billing systems, refrigerators, lighting and electronic devices to keep business operations running smoothly.</p>
</div>
</div>

<!-- ITEM 2 -->
<div class="timeline-item">
<div class="timeline-icon">
<i class="fa-solid fa-building"></i>
</div>
<div class="timeline-content">
<h3>Stabilizer for Office</h3>
<p>Safeguards computers, printers, networking devices and communication systems from voltage fluctuations.</p>
</div>
</div>

<!-- ITEM 3 -->
<div class="timeline-item">
<div class="timeline-icon">
<i class="fa-solid fa-desktop"></i>
</div>
<div class="timeline-content">
<h3>Stabilizer for Computer</h3>
<p>Prevents sudden shutdowns, hardware damage and data loss for important office systems.</p>
</div>
</div>

<!-- ITEM 4 -->
<div class="timeline-item">
<div class="timeline-icon">
<i class="fa-solid fa-server"></i>
</div>
<div class="timeline-content">
<h3>Stabilizer for Server</h3>
<p>Essential for data protection and uninterrupted IT operations in server rooms and data centers.</p>
</div>
</div>

<!-- ITEM 5 -->
<div class="timeline-item">
<div class="timeline-icon">
<i class="fa-solid fa-video"></i>
</div>
<div class="timeline-content">
<h3>Stabilizer for CCTV</h3>
<p>Ensures continuous surveillance by protecting cameras, DVRs and monitoring systems from voltage changes.</p>
</div>
</div>

<!-- ITEM 6 -->
<div class="timeline-item">
<div class="timeline-icon">
<i class="fa-solid fa-elevator"></i>
</div>
<div class="timeline-content">
<h3>Stabilizer for Lift</h3>
<p>A stabilizer for lift is critical for elevator safety. It protects lift motors, control panels, and electronics, preventing sudden stoppages and ensuring smooth operation.</p>
</div>
</div>

</div>

</section>


<!-- Voltage Stabilizer for  ends -->



<!--Single Phase Stabilizer starts  -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="phase-section">


<h2 class="indus-process-heading">
Single Phase Stabilizer <span>vs</span> Three Phase Stabilizer
</h2>

<div class="phase-grid">

<!-- SINGLE PHASE -->
<div class="phase-card">

<div class="phase-icon">
<i class="fa-solid fa-house"></i>
</div>

<h3>Single Phase Stabilizer</h3>

<p class="phase-text">
A single phase stabilizer is commonly used in homes, shops,
small offices, and residential buildings with single-phase
electricity supply.
</p>

</div>

<!-- THREE PHASE -->
<div class="phase-card">

<div class="phase-icon">
<i class="fa-solid fa-industry"></i>
</div>

<h3>Three Phase Stabilizer</h3>

<p class="phase-text">
A three phase stabilizer is used in factories, hospitals,
commercial complexes, data centers, and large buildings
where three-phase power is required.
</p>

</div>

</div>

</section>

<style>
    body{
font-family: 'Montserrat';
background:#ffffff;
margin:0;
}

/* SECTION */

.phase-section{
padding:40px 20px;
max-width:1000px;
margin:auto;
text-align:center;
margin-top: -70px;
}

.phase-heading{
font-size:32px;
margin-bottom:101px;
color:#212384;
}

.phase-heading span{
color:#f37021;
}

/* GRID */

.phase-grid{
display:grid;
grid-template-columns:1fr 1fr;
gap:30px;
}

/* CARD */

.phase-card{
background:#fff;
padding:25px 25px;
border-radius:14px;
box-shadow:0 8px 25px rgba(0,0,0,0.08);
transition:0.35s;
cursor:pointer;
position:relative;
overflow:hidden;
height:150px;
border:2px solid transparent;
}

/* ICON */

.phase-icon{
width:55px;
height:55px;
margin:auto;
margin-bottom:10px;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
font-size:22px;
background:#fff3ea;
color:#f37021;
transition:0.3s;
}

/* SUBHEADING */

.phase-card h3{
font-size:20px;
color:#f37021;
margin:0;
transition:0.3s;
font-weight:600;
}

/* TEXT HIDDEN */

.phase-text{
opacity:0;
max-height:0;
overflow:hidden;
transition:0.4s;
font-size:18px;
color:#000000;
line-height:1.6;
margin-top:8px;
}

/* HOVER EXPAND */

.phase-card:hover{
height:250px;
transform:translateY(-6px);
border:2px solid #212384;
}

/* SHOW TEXT */

.phase-card:hover .phase-text{
opacity:1;
max-height:200px;
}

/* SUBHEADING COLOR CHANGE */

.phase-card:hover h3{
color:#212384;
}

/* ICON HOVER */

.phase-card:hover .phase-icon{
background:#212384;
color:#fff;
}

/* MOBILE */

@media(max-width:768px){

.phase-grid{
grid-template-columns:1fr;
}

.phase-card{
height:auto;
}

.phase-text{
opacity:1;
max-height:500px;
}

}
</style>

<!--Single Phase Stabilizer ends  -->


<!--  Choosing the starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
font-family:'Montserrat';
background:#ffffff;
margin:0;
}

/* SECTION */

.stab-choice-section{
padding:50px 20px;
max-width:1100px;
margin:auto;
text-align:center;
}

/* HEADING */

.stab-choice-heading{
font-size:34px;
margin-bottom:60px;
color:#212384;
}

.stab-choice-heading span{
color:#f37021;
}

/* GRID */

.stab-choice-grid{
display:grid;
grid-template-columns:1fr 1fr;
gap:40px;
}

/* CARD */

.choice-card{
background:#fff;
padding:35px 30px;
border-radius:14px;
box-shadow:0 10px 30px rgba(0,0,0,0.08);
transition:0.35s;
position:relative;
overflow:hidden;
border:2px solid transparent;
}

/* SUB HEADING */

.choice-card h3{
font-size:22px;
margin-bottom:20px;
color:#f37021;   /* ORANGE DEFAULT */
display:flex;
align-items:center;
gap:10px;
justify-content:center;
transition:0.3s;
font-weight: 600;
}

/* SUB HEADING ICON */

.choice-card h3 i{
color:#f37021;
font-size:18px;
transition:0.4s;
}

/* LIST */

.choice-card ul{
list-style:none;
padding:0;
margin:0;
text-align:left;
}

.choice-card li{
padding:10px 0;
font-size:19px;
color:#000000;
display:flex;
align-items:center;
gap:10px;
transition:0.3s;
cursor:pointer;
}

/* LIST ICON */

.choice-card li i{
color:#f37021;
font-size:23px;
transition:0.3s;
}

/* CARD HOVER */

.choice-card:hover{
transform:translateY(-8px);
box-shadow:0 18px 40px rgba(0,0,0,0.15);
border:2px solid #212384;
}

/* SUB HEADING TURN BLUE */

.choice-card:hover h3{
color:#212384;
}

/* HEADING ICON ANIMATION */

.choice-card:hover h3 i{
animation:iconBounce 0.6s ease;
color:#212384;
}

/* ICON BOUNCE */

@keyframes iconBounce{
0%{transform:scale(1) rotate(0deg);}
50%{transform:scale(1.3) rotate(15deg);}
100%{transform:scale(1) rotate(0deg);}
}

/* LINE HOVER EFFECT */

.choice-card li:hover{
color:#212384;
transform:translateX(6px);
}

/* ICON TURN BLUE WHEN LINE HOVER */

.choice-card li:hover i{
color:#212384;
}

/* MOBILE */

@media(max-width:768px){

.stab-choice-grid{
grid-template-columns:1fr;
}

}

</style>


<section class="stab-choice-section">


<h2 class="indus-process-heading">
Choosing the <span>Best Voltage Stabilizer</span>
</h2>

<div class="stab-choice-grid">

<!-- SEARCH PANEL -->

<div class="choice-card">

<h3><i class="fa-solid fa-magnifying-glass"></i> What Users Search</h3>

<ul>
<li><i class="fa-solid fa-tag"></i> best stabilizer price</li>
<li><i class="fa-solid fa-location-dot"></i> stabilizer price near me</li>
<li><i class="fa-solid fa-wallet"></i> affordable voltage stabilizer</li>
</ul>

</div>

<!-- FACTORS PANEL -->

<div class="choice-card">

<h3><i class="fa-solid fa-gear"></i> How to Choose</h3>

<ul>
<li><i class="fa-solid fa-bolt"></i> Load capacity</li>
<li><i class="fa-solid fa-wave-square"></i> Voltage fluctuation range</li>
<li><i class="fa-solid fa-plug"></i> Single phase or three phase requirement</li>
<li><i class="fa-solid fa-house"></i> Indoor or outdoor installation</li>
</ul>

</div>

</div>

</section>

<!--  Choosing the ends -->



<!-- Voltage Stabilizer starts-->

<section class="price-section">


<h2 class="indus-process-heading">
Voltage Stabilizer <span>Price & Affordability</span>
</h2>

<div class="price-grid">

<!-- CARD 1 -->
<div class="price-card">

<div class="price-icon">
<i class="fa-solid fa-indian-rupee-sign"></i>
</div>

<h3>Stabilizer Price</h3>

<p>
The voltage stabilizer price varies depending on capacity,
application, and stabilizer type.
</p>

</div>

<!-- CARD 2 -->
<div class="price-card">

<div class="price-icon">
<i class="fa-solid fa-wallet"></i>
</div>

<h3>Affordable Stabilizer</h3>

<p>
Customers looking for an affordable voltage stabilizer
should focus on quality, reliability, and after-sales support.
</p>

</div>

<!-- CARD 3 -->
<div class="price-card">

<div class="price-icon">
<i class="fa-solid fa-location-dot"></i>
</div>

<h3>Price Near Me</h3>

<p>
Searching for stabilizer price near me helps users find
local suppliers with faster installation and service support.
</p>

</div>

</div>

</section>

<style>
    body{
font-family:'Montserrat';
background:#ffffff;
margin:0;
}

/* SECTION */

.price-section{
padding:50px 20px;
max-width:1100px;
margin:auto;
text-align:center;
}

.price-heading{
font-size:34px;
color:#212384;
margin-bottom:60px;
}

.price-heading span{
color:#f37021;
}

/* GRID */

.price-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
gap:35px;
}

/* CARD */

.price-card{
background:#fff;
padding:35px 25px;
border-radius:14px;
box-shadow:0 10px 30px rgba(0,0,0,0.08);
transition:0.4s;
border:2px solid transparent;
}

/* ICON */

.price-icon{
width:70px;
height:70px;
margin:auto;
margin-bottom:18px;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
font-size:26px;
background:#ffffff;
color:#f37021;
transition:0.4s;
}

/* SUB HEADING */

.price-card h3{
font-size:22px;
color:#f37021;   /* ORANGE initially */
margin-bottom:10px;
transition:0.3s;
font-weight: 600;
}

/* TEXT */

.price-card p{
font-size:18px;
line-height:1.6;
color:#000000;
}

/* HOVER EFFECT */

.price-card:hover{
transform:translateY(-8px);
box-shadow:0 18px 40px rgba(0,0,0,0.15);
border:2px solid #212384;
}

/* CHANGE HEADING COLOR ON HOVER */

.price-card:hover h3{
color:#212384;
}

/* ICON ANIMATION */

.price-card:hover .price-icon{
background:#212384;
color:#fff;
animation:iconPulse 0.6s ease;
}

@keyframes iconPulse{
0%{transform:scale(1);}
50%{transform:scale(1.2);}
100%{transform:scale(1);}
}

/* MOBILE */

@media(max-width:768px){

.price-heading{
font-size:28px;
}

.price-section{
padding:60px 20px;
}

}
</style>

<!--  Voltage Stabilizer ends-->



<!-- Stabilizer starts  -->

<section class="stab-service-section">


<h2 class="indus-process-heading">
Stabilizer <span>Service & Maintenance</span>
</h2>

<div class="stab-timeline">

<!-- SERVICE -->

<div class="stab-item">
<div class="stab-icon">
<i class="fa-solid fa-screwdriver-wrench"></i>
</div>

<div class="stab-content">
<h3>Stabilizer Service Near Me</h3>
<p>
Searching for stabilizer service near me ensures fast assistance
in case of faults or performance issues.
</p>
</div>
</div>


<!-- MAINTENANCE -->

<div class="stab-item">
<div class="stab-icon">
<i class="fa-solid fa-gear"></i>
</div>

<div class="stab-content">
<h3>Stabilizer Maintenance</h3>

<ul>
<li>Voltage calibration</li>
<li>Cleaning and inspection</li>
<li>Checking connections</li>
<li>Performance testing</li>
</ul>

</div>
</div>

</div>

</section>
<style>
    body{
font-family:'Montserrat';
background:#ffffff;
margin:0;
}

/* SECTION */

.stab-service-section{
max-width:1000px;
margin:auto;
padding:80px 20px;
}

.stab-service-heading{
text-align:center;
font-size:34px;
margin-bottom:60px;
color:#212384;
}

.stab-service-heading span{
color:#f37021;
}

/* TIMELINE */

.stab-timeline{
position:relative;
padding-left:40px;
}

.stab-timeline::before{
content:"";
position:absolute;
left:15px;
top:0;
width:4px;
height:100%;
background:#ffffff;
}

/* ITEM */

.stab-item{
display:flex;
align-items:flex-start;
margin-bottom:40px;
position:relative;
}

/* ICON */

.stab-icon{
margin-left:-3rem;
width:60px;
height:60px;
background:#f37021;
color:#fff;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
font-size:16px;
position:absolute;
left:-5px;
top:0;
transition:0.4s;
}

/* CONTENT */

.stab-content{
background:#fff;
padding:25px;
border-radius:10px;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
margin-left:30px;
flex:1;
transition:0.4s;
border-left:4px solid transparent;
}

/* TITLE */

.stab-content h3{
margin-top:0;
font-size:20px;
color:#f37021;
transition:0.3s;
font-weight: 600;
}

/* TEXT */

.stab-content p{
font-size:15px;
line-height:1.6;
color:#000000;
}

/* LIST */

.stab-content ul{
padding-left:18px;
margin:10px 0 0 0;
}

.stab-content li{
font-size:15px;
margin-bottom:6px;
}

/* HOVER EFFECT */

.stab-item:hover .stab-content{
border-left:4px solid #212384;
transform:translateX(8px);
}

.stab-item:hover .stab-content h3{
color:#212384;
}

.stab-item:hover .stab-icon{
background:#212384;
transform:scale(1.2);
}

/* MOBILE */

@media(max-width:768px){

.stab-service-heading{
font-size:28px;
}

.stab-timeline{
padding-left:30px;
}

}
</style>

<!-- Stabilizer  ends  -->




<!-- Why Invest in a Quality starts -->

<section class="indus-efficiency-mini">


<h2 class="indus-process-heading">
Why Invest in a Quality <span>Voltage Stabilizer</span>
</h2>

<div class="indus-mini-card-grid">

<div class="indus-mini-card">
<div class="indus-mini-icon">
<i class="fas fa-shield-halved"></i>
</div>
<p>Prevents equipment damage</p>
</div>

<div class="indus-mini-card">
<div class="indus-mini-icon">
<i class="fas fa-bolt"></i>
</div>
<p>Reduces electricity losses</p>
</div>

<div class="indus-mini-card">
<div class="indus-mini-icon">
<i class="fas fa-temperature-low"></i>
</div>
<p>Reduced heat generation</p>
</div>

<div class="indus-mini-card">
<div class="indus-mini-icon">
<i class="fas fa-gauge-high"></i>
</div>
<p>Improves appliance efficiency</p>
</div>

<div class="indus-mini-card">
<div class="indus-mini-icon">
<i class="fas fa-screwdriver-wrench"></i>
</div>
<p>Lowers repair costs</p>
</div>
</div>

</section>
<style>
.indus-efficiency-mini{
max-width:1100px;
margin:auto;
padding:50px 20px;
font-family:'Montserrat';
margin-top:0rem;
}

/* HEADING */
.indus-section-heading{
text-align:center;
font-size:36px;
font-weight:700;
color:#212384;
margin-bottom:50px;
}

.indus-section-heading span{
color:#f37021;
}

/* GRID */
.indus-mini-card-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
gap:22px;
}

/* CARD */
.indus-mini-card{
background:#ffffff;
padding:26px 20px;
border-radius:14px;
text-align:center;
border:2px solid #e6e6e6;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
transition:0.3s;
}

.indus-mini-card:hover{
transform:translateY(-8px);
box-shadow:0 18px 40px rgba(33,35,132,0.18);
border-color:#f37021;
}

/* ICON WITHOUT CIRCLE */
.indus-mini-icon{
margin-bottom:12px;
}

.indus-mini-icon i{
font-size:32px;
color:#f37021;
transition:0.3s;
}

/* ICON HOVER */
.indus-mini-card:hover .indus-mini-icon i{
color:#212384;
transform:scale(1.2);
}

/* TEXT */
.indus-mini-card p{
font-size:18px;
font-weight:500;
color:#0d213d;
margin:0;
}

/* RESPONSIVE */
@media(max-width:600px){
.indus-mini-card{
padding:22px 16px;
}

.indus-mini-card p{
font-size:15px;
}
}
</style>


<!-- conclusion starts -->

<section>

    <!-- CONCLUSION TOP -->
<section class="indus-conclusion-new">

<h2 class="indus-process-heading">
<span>Conclusion</span>
</h2>

<p class="indus-conclusion-text">
From solving a voltage fluctuation problem at home to protecting critical equipment in offices, 
shops, and large buildings, a voltage stabilizer is an essential power protection solution.
Whether you need a power stabilizer, a main line stabilizer, a single phase stabilizer,
or a three phase stabilizer, choosing the right product ensures safety, efficiency,
and peace of mind.
</p>

<p class="indus-conclusion-text">
If you are searching for the best stabilizer price, an affordable voltage stabilizer,
reliable stabilizer service near me, and dependable stabilizer maintenance,
investing in the right voltage stabilizer will protect your equipment for years to come.
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