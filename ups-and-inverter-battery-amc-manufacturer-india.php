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
        <h1>UPS and Inverter Battery AMC Manufacturer India</h1>
        <div class="indus-breadcrumb-nav">
            <a href="#">Home</a> 
            &nbsp;»&nbsp; 
            <a href="#">Products</a> 
            &nbsp;»&nbsp; 
            <span>UPS and Inverter Battery AMC</span>
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
    width: 776px;
    height: 336.75px;
    margin-left: 11rem;

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
    <div class="indus-image-container">
        <img src="img/UPS and Inverter.png" id="productImage" alt="UPS Machine">
    </div>

    <div class="indus-button-group">
        <a href="#" class="indus-action-btn">DOWNLOAD BROCHURE</a>
        <a href="#" class="indus-action-btn indus-secondary-btn" onclick="openEnquiry()">ENQUIRE NOW</a>
    </div>
</section>

<!-- Lightbox -->
<div class="indus-lightbox-modal" id="lightbox">
    <div class="indus-close-button" id="closeBtn">
        <span></span>
        <span></span>
    </div>
    <img src="https://www.indusups.com/assets/img/blog/blogs.jpg" alt="UPS Machine">
</div>

<script>
const productImage = document.getElementById("productImage");
const lightbox = document.getElementById("lightbox");
const closeBtn = document.getElementById("closeBtn");

productImage.addEventListener("click", () => {
    lightbox.classList.add("active");
});

closeBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    lightbox.classList.remove("active");
});

lightbox.addEventListener("click", () => {
    lightbox.classList.remove("active");
});
</script>
<!-- Img Section End -->



<!--  UPS and Inverter Battery AMC  Start -->
<style>

/* Main Section */
.indus-section-panel{
    background:#ffffff;
    padding:60px 5%;
    font-family:'Montserrat',sans-serif;
}

/* Section Heading */
.indus-section-heading{
    text-align:center;
    font-size:32px;
    font-weight:900;
    color:#212384;
    margin-bottom:50px;
}

/* Highlight Text */
.indus-section-heading span{
    color:#f37021;
    position:relative;
}

/* Animated Underline */
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

/* Grid Layout */
.indus-grid-container{
    display:grid;
    grid-template-columns: repeat(auto-fit,minmax(320px,1fr));
    gap:40px;
    max-width:1100px;
    margin:auto;
}

/* Content Cards */
.indus-content-card{
    background:#ffffff;
    padding:35px 30px;
    border-radius:25px;
    box-shadow:0 20px 60px rgba(33,35,132,0.08);
    border:2px solid #f37021;
    transition:transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}

/* Text inside card */
.indus-content-card p{
    font-size:17px;
    line-height:1.8;
    color:#444;
    margin:0;
    text-align:justify;
    transition:color 0.3s ease, transform 0.3s ease;
}

/* Hover Effect */
.indus-content-card:hover{
    transform:translateY(-10px);
    box-shadow:0 25px 70px rgba(33,35,132,0.12);
    border-color:#212384;
}

.indus-content-card:hover p{
    color:#212384;
    transform:translateY(-2px);
}

/* Responsive */
@media(max-width:992px){
.indus-section-heading{
font-size:28px;
}
}

</style>
</head>

<body>

<section class="indus-section-panel">

<h2 class="indus-section-heading">
UPS and Inverter Battery AMC for Industrial and Residential: Complete Guide to Reliable 
<span>Power Backup Maintenance</span>
</h2>

<div class="indus-grid-container">

<div class="indus-content-card">
<p>
In today's world, uninterrupted electricity is no longer a luxury—it's a necessity. 
Whether it's an industry running heavy machinery or a home relying on inverters for daily comfort, 
<strong>power backup systems</strong> play a crucial role in ensuring seamless operations.
</p>
</div>

<div class="indus-content-card">
<p>
However, simply installing a UPS or inverter battery is not enough. To maintain long-term 
reliability and efficiency, a dedicated 
<strong>UPS and Inverter Battery AMC (Annual Maintenance Contract)</strong> is essential.
</p>
</div>

<div class="indus-content-card">
<p>
This comprehensive guide explores the importance of AMC services for both 
<strong>industrial</strong> and <strong>residential</strong> needs, how it enhances performance, reduces 
downtime, and ensures safety. It also highlights why regular maintenance is important 
for extending the life of power backup systems and maintaining consistent performance.
</p>
</div>

</div>

</section>


<!--  UPS and Inverter Battery AMC  End -->




<!-- What Is an UPS & Inverter starts -->

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<section class="indus-amc-section">

<h2 class="indus-section-heading">
What Is an UPS & Inverter <span>Battery AMC?</span>
</h2>

<div class="indus-wrapper">

<!-- CARD 1 -->

<div class="indus-card">

<div class="indus-card-icon">
<i class="fas fa-tools"></i>
</div>

<h3>What It Includes</h3>

<ul class="indus-list">

<li>Regular inspections</li>
<li>Battery health analysis</li>
<li>Preventive maintenance</li>
<li>Load testing</li>
<li>Cleaning & corrosion control</li>
<li>Fault detection & troubleshooting</li>

</ul>

</div>


<!-- CARD 2 -->

<div class="indus-card">

<div class="indus-card-icon">
<i class="fas fa-users"></i>
</div>

<h3>Who Needs AMC Contracts</h3>

<ul class="indus-list">

<li>Industrial facilities</li>
<li>Manufacturing plants</li>
<li>Commercial buildings</li>
<li>IT offices & data centers</li>
<li>Hospitals & institutions</li>
<li>Residential homes</li>

</ul>

</div>

</div>

</section>
<style>
/* ARROW COLOR CHANGE ON HOVER */

.indus-card:hover .indus-list li::before{
color:#212384;
}


.indus-amc-section{
padding:80px 20px;
background:#f5f8ff;
font-family:'Montserrat';
text-align:center;
}

/* HEADING */

.indus-heading{
font-size:34px;
font-weight:700;
margin-bottom:60px;
color:#212384;
}

.indus-heading span{
color:#f37021;
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

border:2px solid transparent;   /* added */

}

/* CARD HOVER */

.indus-card:hover{

transform:translateY(-10px);

box-shadow:0 20px 45px rgba(0,0,0,0.15);

border:2px solid #212384;   /* blue border on hover */

}

/* TOP ICON */

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

box-shadow:0 10px 20px rgba(255, 255, 255, 0.4);

transition:0.4s;

}

/* ICON ANIMATION */

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

}

/* TITLE HOVER */

.indus-card:hover h3{
color:#212384;
}

/* LIST */

.indus-list{
list-style:none;
padding:0;
margin:0;
}

/* LIST ITEMS */

.indus-list li{

font-size:17px;

color:#000000;

margin-bottom:12px;

padding-left:20px;

position:relative;

}

/* CUSTOM BULLET */

.indus-list li::before{

content:"✔";

position:absolute;

left:0;

color:#f37021;

font-size:14px;

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

}</style>

<!-- What Is an UPS & Inverter  Ends -->




<!-- Why UPS & Inverter Battery Starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


<section class="indus-amc-benefits">

<h2 class="indus-section-heading">
Why UPS & Inverter Battery <span>AMC Is Essential</span>
</h2>

<div class="indus-benefit-list">

<div class="indus-benefit-item">
<div class="indus-benefit-icon">
<i class="fas fa-battery-full"></i>
</div>
<div class="indus-benefit-text">
<h3>Increased Equipment Life</h3>
<p>Regular checkups ensure UPS and batteries perform efficiently and last longer, reducing replacement expenses.</p>
</div>
</div>

<div class="indus-benefit-item">
<div class="indus-benefit-icon">
<i class="fas fa-plug"></i>
</div>
<div class="indus-benefit-text">
<h3>Zero Downtime</h3>
<p>Industries cannot afford power interruptions. AMC ensures continuous power flow with timely maintenance.</p>
</div>
</div>

<div class="indus-benefit-item">
<div class="indus-benefit-icon">
<i class="fas fa-coins"></i>
</div>
<div class="indus-benefit-text">
<h3>Cost Savings</h3>
<p>Planned preventive maintenance is cheaper than emergency repairs or replacing equipment.</p>
</div>
</div>

<div class="indus-benefit-item">
<div class="indus-benefit-icon">
<i class="fas fa-shield-alt"></i>
</div>
<div class="indus-benefit-text">
<h3>Maximum Safety</h3>
<p>Prevents risks like short circuits, overheating, and fire hazards through regular inspections.</p>
</div>
</div>

<div class="indus-benefit-item">
<div class="indus-benefit-icon">
<i class="fas fa-bolt"></i>
</div>
<div class="indus-benefit-text">
<h3>Enhanced Backup Performance</h3>
<p>Regular battery testing ensures consistent and reliable backup performance.</p>
</div>
</div>

<div class="indus-benefit-item">
<div class="indus-benefit-icon">
<i class="fas fa-user-cog"></i>
</div>
<div class="indus-benefit-text">
<h3>Professional Technical Support</h3>
<p>Trained engineers handle installation, troubleshooting, and part replacements.</p>
</div>
</div>

</div>

</section>

<style>

/* SECTION */

.indus-amc-benefits{
max-width:1100px;
margin:auto;
padding:70px 20px;
font-family:'Montserrat';
}

/* HEADING */

.indus-section-heading{
text-align:center;
font-size:36px;
margin-bottom:50px;
color:#212384;
font-weight:700;
}

.indus-section-heading span{
color:#f37021;
}

/* LIST */

.indus-benefit-list{
display:flex;
flex-direction:column;
gap:32px;
}

/* ITEM BOX */

.indus-benefit-item{
display:flex;
align-items:center;
gap:28px;
padding:20px 25px;
border-radius:12px;
border:2px solid transparent;
transition:0.35s;
}

/* ICON BOX */

.indus-benefit-icon{
width:90px;
height:90px;
display:flex;
align-items:center;
justify-content:center;
background:#ffffff;
border-radius:50%;
flex-shrink:0;
}

/* ICON */

.indus-benefit-icon i{
font-size:32px;
color:#f37021;
transition:0.3s;
}

/* TEXT */

.indus-benefit-text h3{
font-size:22px;
margin-bottom:6px;
color:#f37021;
transition:0.3s;
}

.indus-benefit-text p{
font-size:18px;
color:#000;
line-height:1.6;
}

/* HOVER */

.indus-benefit-item:hover{
border:2px solid #212384;
background:#ffffff;
transform:translateX(6px);
}

/* ICON TURNS BLUE */

.indus-benefit-item:hover .indus-benefit-icon i{
color:#212384;
}

/* TITLE TURNS BLUE */

.indus-benefit-item:hover .indus-benefit-text h3{
color:#212384;
}

/* MOBILE */

@media(max-width:600px){

.indus-section-heading{
font-size:28px;
}

.indus-benefit-text p{
font-size:16px;
}

.indus-benefit-icon{
width:70px;
height:70px;
}

.indus-benefit-icon i{
font-size:30px;
}

}

</style>

<!-- Why UPS & Inverter Battery  End -->



<!-- Residential UPS & Inverter Battery AMC start -->
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
}

.indus-front-face span{
    font-size:40px;
    font-weight:700;
    color:#f37021;
}

.indus-back-face{
    background:#ffffff;
    color:#444;
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
}

.indus-back-face p{
    font-size:18px;
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

<section class="indus-applications-section">
  
        <h2 class="indus-section-heading" style="font-size: 42px;">
            Residential UPS & Inverter Battery AMC Reliable <span>  Backup for Homes</span>
        </h2>
    

        <div class="indus-card-grid">
            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>01</span>
                        <h3> Annual or Semi-Annual Checkups</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3> Annual or Semi-Annual Checkups</h3>
                        <p>
                            Ensures your UPS and batteries are functioning well throughout the year.
                        </p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>02</span>
                        <h3> Battery Water Top-Up</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3> Battery Water Top-Up</h3>
                        <p>Important for tubular and lead-acid batteries.</p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>03</span>
                        <h3>Corrosion Cleaning & Terminal Protection</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3> Corrosion Cleaning & Terminal Protection</h3>
                        <p>Prevents poor connectivity and battery damage.</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="indus-card-grid indus-card-grid-centered" style="margin-top:-55px;">
            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>04</span>
                        <h3> Backup Time Testing</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3> Backup Time Testing</h3>
                        <p>
                          Ensures the system delivers optimum power backup during outages.
                        </p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>05</span>
                        <h3> Safety Inspection</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3> Safety Inspection</h3>
                    
                        <p>Identifies overheating, improper wiring, or voltage fluctuations.</p>

                    </ul>
                    </div>
                   
                </div>
            </div>
             <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>06</span>
                        <h3>  Priority Service</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>  Priority Service</h3>
                    
                        <p> Residents enjoy faster service response during breakdowns.</p>
                      <ul><p>Ideal for:</p>
                        <li>Homes</li>
                        <li>Apartments</li>
                        <li>Small offices</li>
                        <li>Shops</li>
                        <li>Clinics</li>
                        <li> Home-based businesses</li>
                    </div>
                   
                </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- Residential UPS & Inverter Battery AMC  End -->



<!-- Types of Batteries starts -->
<section class="indus-category-section">

<h2 class="indus-section-heading">
Types Of Batteries <span>Covered In AMC</span>
</h2>

<div class="indus-battery-timeline">

<div class="indus-battery-item">
<div class="indus-battery-icon"><i class="fa fa-battery-half"></i></div>
<div class="indus-battery-content">
<h3>Lead Acid Batteries</h3>
<p>Common for homes and small commercial applications.</p>
</div>
</div>

<div class="indus-battery-item">
<div class="indus-battery-icon"><i class="fa fa-bolt"></i></div>
<div class="indus-battery-content">
<h3>Tubular Batteries</h3>
<p>Longer life, reliable performance, ideal for frequent power cuts.</p>
</div>
</div>

<div class="indus-battery-item">
<div class="indus-battery-icon"><i class="fa fa-microchip"></i></div>
<div class="indus-battery-content">
<h3>Lithium-ion Batteries</h3>
<p>Modern, maintenance-free, highly efficient for industrial use.</p>
</div>
</div>

<div class="indus-battery-item">
<div class="indus-battery-icon"><i class="fa fa-server"></i></div>
<div class="indus-battery-content">
<h3>VRLA & SMF Batteries</h3>
<p>Often used in data centers, telecom, and industrial equipment.</p>
</div>
</div>

<div class="indus-battery-item">
<div class="indus-battery-icon"><i class="fa fa-sun"></i></div>
<div class="indus-battery-content">
<h3>Solar Batteries</h3>
<p>For hybrid solar UPS systems in homes and factories.</p>
<p>AMC ensures proper maintenance, extended battery life, and improved performance of all types.</p>
</div>
</div>

</div>
</section>

<style>

/* ICON ANIMATION */

.indus-battery-icon{
position:absolute;
top:35px;
left:100%;
transform:translate(-50%,0);
width:48px;
height:48px;
background:#f37021;
color:#fff;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
font-size:18px;
box-shadow:0 6px 18px rgba(0,0,0,0.2);
z-index:2;
transition:0.4s;
}

/* ICON HOVER ANIMATION */

.indus-battery-item:hover .indus-battery-icon{
background:#212384;
transform:translate(-50%,0) rotate(360deg) scale(1.15);
}

/* CONTINUOUS PULSE EFFECT */

.indus-battery-icon{
animation:iconPulse 2s infinite;
}

@keyframes iconPulse{

0%{
box-shadow:0 0 0 0 rgba(243,112,33,0.6);
}

70%{
box-shadow:0 0 0 12px rgba(243,112,33,0);
}

100%{
box-shadow:0 0 0 0 rgba(243,112,33,0);
}

}

    /* BATTERY TIMELINE */

.indus-battery-timeline{
position:relative;
max-width:900px;
margin:auto;
padding:20px 0;
}

/* CENTER LINE */

.indus-battery-timeline::before{
content:'';
position:absolute;
left:50%;
top:0;
width:4px;
height:100%;
background:#e5e5e5;
transform:translateX(-50%);
}

/* ITEM */

.indus-battery-item{
position:relative;
width:50%;
padding:30px 40px;
box-sizing:border-box;
}

/* LEFT */

.indus-battery-item:nth-child(odd){
left:0;
text-align:right;
}

/* RIGHT */

.indus-battery-item:nth-child(even){
left:50%;
}

/* ICON */

.indus-battery-icon{
position:absolute;
top:35px;
left:100%;
transform:translate(-50%,0);
width:48px;
height:48px;
background:#f37021;
color:#fff;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
font-size:18px;
box-shadow:0 6px 18px rgba(0,0,0,0.2);
z-index:2;
transition:0.3s;
}

.indus-battery-item:nth-child(even) .indus-battery-icon{
left:0;
}

/* CARD */

.indus-battery-content{
background:#fff;
padding:28px;
border-radius:12px;
box-shadow:0 10px 35px rgba(0,0,0,0.08);
transition:all 0.3s ease;
}

/* TITLE */

.indus-battery-content h3{
color:#f37021;
margin-bottom:10px;
font-size:22px;
transition:0.3s;
}

/* TEXT */

.indus-battery-content p{
color:#333;
line-height:1.6;
font-size:17px;
margin:0 0 8px;
}

/* HOVER */

.indus-battery-item:hover .indus-battery-icon{
background:#212384;
}

.indus-battery-item:hover .indus-battery-content{
border:2px solid #212384;
transform:translateY(-6px);
box-shadow:0 20px 45px rgba(33,35,132,0.15);
}

.indus-battery-item:hover h3{
color:#212384;
}

/* RESPONSIVE */

@media(max-width:768px){

.indus-battery-timeline::before{
left:24px;
}

.indus-battery-item{
width:100%;
padding-left:70px;
padding-right:20px;
text-align:left;
}

.indus-battery-item:nth-child(even){
left:0;
}

.indus-battery-icon{
left:24px !important;
transform:none;
}

}
</style>


<!--  Types of Batteries  End -->



<!-- Lightbox -->
<div class="indus-lightbox-modal" id="lightbox">
    <div class="indus-close-button" id="closeBtn">
        <span></span>
        <span></span>
    </div>
    <img src="https://www.indusups.com/assets/img/blog/blogs.jpg" alt="UPS Machine">
</div>

<script>
const productImage = document.getElementById("productImage");
const lightbox = document.getElementById("lightbox");
const closeBtn = document.getElementById("closeBtn");

productImage.addEventListener("click", () => {
    lightbox.classList.add("active");
});

closeBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    lightbox.classList.remove("active");
});

lightbox.addEventListener("click", () => {
    lightbox.classList.remove("active");
});
</script>
<!-- Img Section End -->




<!-- What's Included in an AMCStart -->

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>

/* SECTION */

.indus-amc-section{
padding:50px 20px;
background:#ffffff;
font-family:'Montserrat';
}

/* HEADING */

.indus-section-heading{
text-align:center;
font-size:36px;
margin-bottom:60px;
color:#212384;
font-weight:700;
}

.indus-section-heading span{
color:#f37021;
}

/* GRID */

.indus-amc-grid{
display:grid;
grid-template-columns:repeat(2,1fr);
gap:40px;
max-width:900px;
margin:auto;
}

/* CARD */

.indus-amc-card{
background:#fff;
border-radius:25px;
padding:40px 30px;
box-shadow:0 8px 25px rgba(0,0,0,0.08);
text-align:center;
transition:0.35s;
border:2px solid transparent;
}

/* HOVER EFFECT */

.indus-amc-card:hover{
border:2px solid #1e3f92;
transform:translateY(-8px);
box-shadow:0 18px 45px rgba(0,0,0,0.15);
}

/* ICON */

.card-icon{
width:65px;
height:65px;
border-radius:50%;
background:#f37021;
color:#fff;
display:flex;
align-items:center;
justify-content:center;
font-size:26px;
margin:0 auto 20px auto;
transition:0.35s;
}

/* ICON HOVER */

.indus-amc-card:hover .card-icon{
background:#1e3f92;
transform:rotate(360deg);
}

/* TITLE */

.indus-amc-card h3{
font-size:22px;
margin-bottom:20px;
color:#f37021;
transition:0.3s;
}

/* TITLE HOVER */

.indus-amc-card:hover h3{
color:#1e3f92;
}

/* LIST */

.indus-amc-card ul{
list-style:none;
padding:0;
margin:0;
text-align:left;
}

.indus-amc-card ul li{
position:relative;
padding-left:25px;
margin-bottom:12px;
font-size:17px;
color:#000;
}

/* ARROW */

.indus-amc-card ul li::before{
content:"➜";
position:absolute;
left:0;
color:#f37021;
transition:0.3s;
}

/* ARROW HOVER */

.indus-amc-card:hover ul li::before{
color:#1e3f92;
}

/* RESPONSIVE */

@media(max-width:768px){

.indus-amc-grid{
grid-template-columns:1fr;
}

.indus-section-heading{
font-size:28px;
}

}

</style>


<section class="indus-amc-section">

<h2 class="indus-section-heading">
What's Included In An AMC For <span>UPS & Batteries?</span>
</h2>

<div class="indus-amc-grid">

<!-- CARD 1 -->

<div class="indus-amc-card">

<div class="card-icon">
<i class="fas fa-tools"></i>
</div>

<h3>Preventive Maintenance</h3>

<ul>
<li>Visual inspection</li>
<li>Battery health testing</li>
<li>Voltage checks</li>
<li>Load testing</li>
<li>Temperature monitoring</li>
<li>Cleaning & dusting</li>
<li>Terminal tightening</li>
<li>Software & firmware updates</li>
<li>Electrolyte level checks</li>
</ul>

</div>

<!-- CARD 2 -->

<div class="indus-amc-card">

<div class="card-icon">
<i class="fas fa-bolt"></i>
</div>

<h3>Corrective Maintenance</h3>

<ul>
<li>Breakdown repair</li>
<li>Fault detection</li>
<li>Component replacement</li>
<li>Battery replacement services</li>
<li>Overload issue resolution</li>
<li>Wiring & connection repairs</li>
</ul>

</div>

</div>

</section>

<!--  What's Included in an AMC End -->


<!-- Benefits section starts -->
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<section class="indus-category-section">
<div class="indus-category-container">

<h2 class="indus-section-heading">
Benefits Of Choosing A Professional <span>AMC Provider</span>
</h2>

<div class="indus-category-item">
<div class="indus-icon-text">
<i class="fas fa-tools"></i>
Expert Engineers
</div>
<p class="indus-category-desc">
Certified and trained technicians with hands-on experience.
</p>
</div>

<div class="indus-category-item">
<div class="indus-icon-text">
<i class="fas fa-file-lines"></i>
Transparent Reporting
</div>
<p class="indus-category-desc">
Detailed reports after every maintenance visit.
</p>
</div>

<div class="indus-category-item">
<div class="indus-icon-text">
<i class="fas fa-clock"></i>
Quick Response Time
</div>
<p class="indus-category-desc">
So you never miss a maintenance cycle.
</p>
</div>

<div class="indus-category-item">
<div class="indus-icon-text">
<i class="fas fa-gears"></i>
Genuine Spare Parts
</div>
<p class="indus-category-desc">
Essential for both industrial and residential customers.
</p>
</div>

<div class="indus-category-item">
<div class="indus-icon-text">
<i class="fas fa-shield-halved"></i>
Safety & Equipment Life
</div>
<p class="indus-category-desc">
Ensures safety and long equipment life.
</p>
</div>

<div class="indus-category-item">
<div class="indus-icon-text">
<i class="fas fa-industry"></i>
Custom AMC Packages
</div>

<div class="indus-category-desc">
<strong>Different plans for different needs:</strong><br><br>

<span class="indus-list-item"><i class="fas fa-check"></i> Comprehensive AMC</span><br>
<span class="indus-list-item"><i class="fas fa-check"></i> Non-comprehensive AMC</span><br>
<span class="indus-list-item"><i class="fas fa-check"></i> Battery-only AMC</span><br>
<span class="indus-list-item"><i class="fas fa-check"></i> UPS-only AMC</span><br>
<span class="indus-list-item"><i class="fas fa-check"></i> On-demand service</span>
</div>
</div>

</div>
</section>

<style>

.indus-category-section{
padding:50px 20px;
font-family:'Montserrat';
background:#ffffff;
}

.indus-category-container{
max-width:1100px;
margin:auto;
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

/* CARD */

.indus-category-item{
margin-bottom:30px;
padding:26px;
border-radius:12px;
background:#ffffff;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
transition:0.4s;
border:2px solid transparent;
}

.indus-category-item:hover{
transform:translateY(-6px);
box-shadow:0 18px 35px rgba(0,0,0,0.15);
border:2px solid #1e3f92;
}

/* ICON + HEADING */

.indus-icon-text{
display:flex;
align-items:center;
gap:12px;
font-size:22px;
font-weight:600;
color:#f37021;
margin-bottom:10px;
}

/* ICON */

.indus-icon-text i{
font-size:22px;
color:#f37021;
transition:0.4s;
}

/* HOVER COLOR CHANGE */

.indus-category-item:hover .indus-icon-text{
color:#1e3f92;
}

.indus-category-item:hover .indus-icon-text i{
color:#1e3f92;
transform:scale(1.2);
}

/* DESCRIPTION */

.indus-category-desc{
font-size:17px;
color:#000;
line-height:1.6;
margin-left:34px;
}

/* LIST */

.indus-list-item{
display:inline-block;
margin-bottom:6px;
}

.indus-list-item i{
color:#f37021;
margin-right:6px;
transition:0.4s;
}

/* CHECK ICON HOVER */

.indus-category-item:hover .indus-list-item i{
color:#1e3f92;
}

/* MOBILE */

@media(max-width:768px){

.indus-section-heading{
font-size:28px;
}

.indus-icon-text{
font-size:20px;
}

}

</style>
<!-- Benefits section Ends -->


<!-- Longer battery backup time starts -->
<section class="indus-efficiency-mini">

<h2 class="indus-section-heading">
How AMC Improves <span> Power Efficiency</span>
</h2>

<div class="indus-mini-card-grid">

<div class="indus-mini-card">
<div class="indus-mini-icon">
<i class="fas fa-battery-full"></i>
</div>
<p>Longer battery backup time</p>
</div>

<div class="indus-mini-card">
<div class="indus-mini-icon">
<i class="fas fa-bolt"></i>
</div>
<p>Lower power consumption</p>
</div>

<div class="indus-mini-card">
<div class="indus-mini-icon">
<i class="fas fa-temperature-low"></i>
</div>
<p>Reduced heat generation</p>
</div>

<div class="indus-mini-card">
<div class="indus-mini-icon">
<i class="fas fa-sync-alt"></i>
</div>
<p>Optimized charging cycles</p>
</div>

<div class="indus-mini-card">
<div class="indus-mini-icon">
<i class="fas fa-plug"></i>
</div>
<p>Improved inverter efficiency</p>
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
<!--  Longer battery backup time End -->


<!-- AMC Plans for Different Customer Needs -->

<section class="indus-amc-plan-section">

<h2 class="indus-section-heading">
AMC Plans For Different <span>Customer Needs</span>
</h2>

<div class="indus-plan-wrapper">

<!-- BASIC PLAN -->
<div class="indus-plan-card">
<div class="indus-plan-title">Basic AMC Plan</div>

<ul>
<li>1–2 preventive visits per year</li>
<li>General inspection</li>
<li>Battery water top-up</li>
<li>System cleaning</li>
</ul>

</div>

<!-- STANDARD PLAN -->
<div class="indus-plan-card ">

<div class="indus-plan-title">Standard AMC Plan</div>

<ul>
<li>3–4 annual visits</li>
<li>Battery testing</li>
<li>Terminal protection</li>
<li>Load & capacity check</li>
<li>Basic breakdown support</li>
</ul>

</div>

<!-- COMPREHENSIVE PLAN -->
<div class="indus-plan-card">

<div class="indus-plan-title">Comprehensive AMC Plan</div>

<ul>
<li>Unlimited breakdown visits</li>
<li>Parts replacement</li>
<li>24/7 support</li>
<li>Detailed performance report</li>
<li>High-priority service</li>
</ul>

</div>

</div>

</section>

<style>
    .indus-amc-plan-section{
padding:50px 20px;
font-family:'Montserrat';
background:#ffffff;
}

/* HEADING */

.indus-section-heading{
text-align:center;
font-size:38px;
font-weight:700;
color:#212384;
margin-bottom:70px;
}

.indus-section-heading span{
color:#f37021;
}

/* PLAN WRAPPER */

.indus-plan-wrapper{
max-width:1200px;
margin:auto;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
gap:35px;
}

/* CARD */

.indus-plan-card{
background:#ffffff;
padding:40px 35px;
border-radius:14px;
box-shadow:0 12px 35px rgba(0,0,0,0.08);
position:relative;
transition:0.4s;
overflow:hidden;
animation:fadeUp 0.8s ease forwards;
}

/* HOVER */

.indus-plan-card:hover{
transform:translateY(-12px);
box-shadow:0 20px 50px rgba(0,0,0,0.15);
}

/* TOP LINE ANIMATION */

.indus-plan-card::before{
content:"";
position:absolute;
top:0;
left:0;
height:5px;
width:0%;
background:#212384;
transition:0.4s;
}

.indus-plan-card:hover::before{
width:100%;
}

/* TITLE */

.indus-plan-title{
font-size:24px;
font-weight:600;
color:#212384;
margin-bottom:25px;
}

/* LIST */

.indus-plan-card ul{
list-style:none;
padding:0;
margin:0;
}

.indus-plan-card li{
padding:10px 0;
font-size:19px;
color:#444;
border-bottom:1px solid #eee;
position:relative;
padding-left:25px;
}

/* LIST ICON */

.indus-plan-card li::before{
content:"✔";
position:absolute;
left:0;
color:#f37021;
font-weight:bold;
}

/* HIGHLIGHT CARD */

.highlight{
background:#212384;
color:#fff;
transform:scale(1.05);
}

.highlight .indus-plan-title{
color:#fff;
}

.highlight li{
border-color:rgba(255,255,255,0.2);
color:#f1f1f1;
}

.highlight li::before{
color:#f37021;
}

/* ANIMATION */

@keyframes fadeUp{
from{
opacity:0;
transform:translateY(40px);
}
to{
opacity:1;
transform:translateY(0);
}
}

/* RESPONSIVE */

@media(max-width:768px){

.indus-section-heading{
font-size:30px;
}

.highlight{
transform:scale(1);
}

}
</style>
<!-- AMC Plans for Different Customer End -->



<!-- Choosing the Best AMC Provider Key Factors -->
<section class="indus-tile-section"> 

<h2 class="indus-section-heading">
Choosing The Best AMC Provider <span>Key Factors</span>
</h2>

<div class="indus-timeline">

<div class="indus-tile">
<div class="indus-tile-number">01</div>
<p>Experience with multi-brand UPS & batteries</p>
</div>

<div class="indus-tile">
<div class="indus-tile-number">02</div>
<p>Qualified and certified engineers</p>
</div>

<div class="indus-tile">
<div class="indus-tile-number">03</div>
<p>Affordable annual AMC packages</p>
</div>

<div class="indus-tile">
<div class="indus-tile-number">04</div>
<p>Quick emergency & breakdown support</p>
</div>

<div class="indus-tile">
<div class="indus-tile-number">05</div>
<p>Use of genuine spare parts</p>
</div>

<div class="indus-tile">
<div class="indus-tile-number">06</div>
<p>Transparent service reports</p>
</div>

</div>
</section>

<style>

.indus-tile-section{
padding:50px 20px;
background:#ffffff;
font-family:'Montserrat';
}

.indus-section-heading{
text-align:center;
font-size:34px;
margin-bottom:80px;
color:#212384;
font-weight:700;
}

.indus-section-heading span{
color:#f37021;
}

/* TIMELINE */

.indus-timeline{
position:relative;
max-width:1100px;
margin:auto;
display:flex;
justify-content:space-between;
}

/* CENTER LINE */

.indus-timeline::before{
content:"";
position:absolute;
top:50%;
left:0;
width:100%;
height:3px;
background:#e5e7eb;
transform:translateY(-50%);
}

/* TILE CARD */

.indus-tile{
position:relative;
width:16%;
padding:28px 20px;
background:#ffffff;
border-radius:14px;
border:2px solid #e5e7eb;
box-shadow:0 8px 20px rgba(0,0,0,0.05);
text-align:center;
transition:0.3s;
}

/* BELOW LINE */

.indus-tile:nth-child(odd){
margin-top:262px;
}

/* ABOVE LINE */

.indus-tile:nth-child(even){
margin-bottom:264px;
}

/* NUMBER BADGE */

.indus-tile-number{
position:absolute;
left:50%;
transform:translateX(-50%);
background:#212384;
color:#fff;
font-size:14px;
font-weight:700;
padding:6px 14px;
border-radius:20px;
}

/* NUMBER POSITION */

.indus-tile:nth-child(odd) .indus-tile-number{
top:-64px;
}

.indus-tile:nth-child(even) .indus-tile-number{
bottom:-65px;
}

/* TEXT */

.indus-tile p{
margin:0;
font-size:16px;
font-weight:600;
color:#1f2937;
line-height:1.6;
}

/* CONNECTOR LINE */

.indus-tile::after{
content:"";
position:absolute;
left:50%;
width:2px;
height:35px;
background:#e5e7eb;
transform:translateX(-50%);
}

.indus-tile:nth-child(odd)::after{
top:-35px;
}

.indus-tile:nth-child(even)::after{
bottom:-35px;
}

/* HOVER */

.indus-tile:hover{
transform:translateY(-6px);
border-color:#f37021;
box-shadow:0 20px 40px rgba(0,0,0,0.12);
}

/* MOBILE */

@media(max-width:900px){

.indus-timeline{
flex-direction:column;
gap:40px;
}

.indus-timeline::before{
display:none;
}

.indus-tile{
width:100%;
margin:0;
}

.indus-tile::after{
display:none;
}

.indus-tile-number{
top:-18px !important;
bottom:auto !important;
}

}

</style>
<!--  Choosing the Best AMC Provider Key End -->



<!-- Industries & Homes That Benefit the Most from AMC -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<section class="indus-benefit-section">

  <h2 class="indus-section-heading">
    Industries & Homes That Benefit <span> The Most From AMC</span>
  </h2>

  <div class="indus-benefit-grid">

    <div class="indus-benefit-item">
      <div class="indus-icon-wrap"><i class="fas fa-industry"></i></div>
      <p>Manufacturing</p>
    </div>

    <div class="indus-benefit-item">
      <div class="indus-icon-wrap"><i class="fas fa-flask"></i></div>
      <p>Pharma</p>
    </div>

    <div class="indus-benefit-item">
      <div class="indus-icon-wrap"><i class="fas fa-server"></i></div>
      <p>IT & Data Centers</p>
    </div>

    <div class="indus-benefit-item">
      <div class="indus-icon-wrap"><i class="fas fa-store"></i></div>
      <p>Retail Chains</p>
    </div>

    <div class="indus-benefit-item">
      <div class="indus-icon-wrap"><i class="fas fa-road"></i></div>
      <p>Public Infrastructure</p>
    </div>

    <div class="indus-benefit-item">
      <div class="indus-icon-wrap"><i class="fas fa-school"></i></div>
      <p>Educational Institutes</p>
    </div>

    <div class="indus-benefit-item">
      <div class="indus-icon-wrap"><i class="fas fa-building"></i></div>
      <p>Apartments</p>
    </div>

    <div class="indus-benefit-item">
      <div class="indus-icon-wrap"><i class="fas fa-house"></i></div>
      <p>Independent Homes</p>
    </div>

    <div class="indus-benefit-item">
      <div class="indus-icon-wrap"><i class="fas fa-users"></i></div>
      <p>Co-living Spaces</p>
    </div>

    <div class="indus-benefit-item">
      <div class="indus-icon-wrap"><i class="fas fa-briefcase"></i></div>
      <p>Small Offices</p>
    </div>

  </div>

</section>

<style>
/* SECTION */
.indus-benefit-section{
  padding:50px 20px;
  background:#ffffff;
  font-family:'Montserrat';
}

.indus-section-heading{
  text-align:center;
  font-size:34px;
  margin-bottom:60px;
  color:#212384;
  font-weight:700;
}

.indus-section-heading span{
  color:#f37021;
}

/* GRID */
.indus-benefit-grid{
  max-width:1100px;
  margin:auto;
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:25px;
}

/* ITEM CARD */
.indus-benefit-item{
  display:flex;
  align-items:center;
  gap:15px;
  padding:18px;
  border-radius:12px;
  background:#ffffff;
  border:1px solid #e5e7eb;
  transition:0.3s;
  cursor:pointer;
}

/* ICON */
.indus-icon-wrap{
  width:42px;
  height:42px;
  display:flex;
  align-items:center;
  justify-content:center;
  border-radius:8px;
  background:#f37021; /* ORANGE */
  color:#fff;
  font-size:18px;
  transition:0.3s;
}

/* TEXT */
.indus-benefit-item p{
  margin:0;
  font-size:16px;
  font-weight:600;
  color:#000000; /* ORANGE TEXT */
  transition:0.3s;
}

/* HOVER EFFECTS */
.indus-benefit-item:hover{
  transform:translateY(-5px);
  box-shadow:0 10px 25px rgba(0,0,0,0.12);
  border-color:#212384;
}

.indus-benefit-item:hover p{
  color:#212384; /* TEXT BLUE */
}

.indus-benefit-item:hover .indus-icon-wrap{
  background:#212384; /* ICON BLUE */
}

/* MOBILE */
@media(max-width:900px){
  .indus-benefit-grid{
    grid-template-columns:repeat(2,1fr);
  }
}

@media(max-width:500px){
  .indus-benefit-grid{
    grid-template-columns:1fr;
  }
}
</style>
<!-- Industries & Homes That Benefit the Most End -->



<!-- conclusion starts -->

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<section class="indus-conclusion-new">

<h2 class="indus-section-heading">
<span>Conclusion</span>
</h2>

<p class="indus-conclusion-text">
Investing in a UPS or inverter battery is not just about backup power — it is about
protecting productivity, safety, and long-term cost efficiency. A professional AMC ensures:
</p>

<div class="indus-benefits-strip">

<div class="indus-benefit-box">
<i class="fas fa-plug"></i>
<h4>Zero Downtime</h4>
<p>Continuous power availability</p>
</div>

<div class="indus-benefit-box">
<i class="fas fa-battery-full"></i>
<h4>Battery Longevity</h4>
<p>Extended service life</p>
</div>

<div class="indus-benefit-box">
<i class="fas fa-shield-alt"></i>
<h4>System Safety</h4>
<p>Reliable & secure operation</p>
</div>

<div class="indus-benefit-box">
<i class="fas fa-coins"></i>
<h4>Cost Control</h4>
<p>Lower repair expenses</p>
</div>

<div class="indus-benefit-box">
<i class="fas fa-tools"></i>
<h4>Expert Support</h4>
<p>Priority technical assistance</p>
</div>

</div>

</section>

<style>

/* SECTION */

.indus-conclusion-new{
padding:50px 20px;
background:linear-gradient(180deg,#ffffff 0%, #ffffff 100%);
font-family:'Montserrat';
text-align:center;
}

/* HEADING */

.indus-section-heading{
font-size:36px;
font-weight:700;
color:#212384;
}

.indus-section-heading span{
color:#f37021;
}

/* TEXT */

.indus-conclusion-text{
font-size:20px;
color:#000;
max-width:900px;
margin:25px auto 60px;
line-height:1.7;
}

/* STRIP */

.indus-benefits-strip{
max-width:1180px;
margin:auto;
display:flex;
gap:22px;
justify-content:center;
flex-wrap:wrap;
}

/* CARD */

.indus-benefit-box{
flex:1;
min-width:200px;
padding:32px 22px;
border-radius:16px;
background:#ffffff;
border:2px solid transparent;
box-shadow:0 12px 30px rgba(0,0,0,0.08);
transition:all 0.35s ease;
}

/* HOVER EFFECT */

.indus-benefit-box:hover{
transform:translateY(-10px);
border:2px solid #212384;
box-shadow:0 22px 45px rgba(33,35,132,0.2);
}

/* ICON */

.indus-benefit-box i{
font-size:32px;
color:#f37021;
margin-bottom:14px;
transition:0.35s;
display:block;
}

/* SUB HEADING */

.indus-benefit-box h4{
font-size:21px;
font-weight:700;
color:#f37021;
margin-bottom:6px;
transition:0.35s;
}

/* TEXT */

.indus-benefit-box p{
font-size:18px;
color:#000;
margin:0;
}

/* HOVER COLOR CHANGE */

.indus-benefit-box:hover i{
color:#212384;
transform:scale(1.2);
}

.indus-benefit-box:hover h4{
color:#212384;
}

/* RESPONSIVE */

@media(max-width:900px){

.indus-benefit-box{
flex:1 1 45%;
}

}

@media(max-width:600px){

.indus-benefit-box{
flex:1 1 100%;
}

.indus-section-heading{
font-size:28px;
}

}

</style>
<!-- Conclusion Section End -->







<?php include ('footer.php'); ?>

</body>
</html>