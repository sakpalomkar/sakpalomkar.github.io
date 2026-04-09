<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Indusups - Lift UPS Inverter</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
</head>

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
        <h1>Lift UPS Inverter Manufacturer India</h1>
        <div class="indus-breadcrumb-nav">
            <a href="#">Home</a> 
            &nbsp;»&nbsp; 
            <a href="#">Products</a> 
            &nbsp;»&nbsp;
            <a href="#">Offline UPS</a> 
            &nbsp;»&nbsp; 
            <span>Lift UPS Inverter</span>
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
    gap: 30px;
    flex-wrap: wrap;
    margin-bottom:30px;
}

.indus-product-image{
    width:300px;
    cursor:pointer;
    border-radius:20px;
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
    margin-top: 30px;
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
        <img src="img/Lift UPS Inverter1.png" class="indus-product-image" alt="Lift UPS Inverter">
        <img src="img/Lift UPS Inverter2.png" class="indus-product-image" alt="Lift UPS Inverter">
        <img src="img/Lift UPS Inverter3.png" class="indus-product-image" alt="Lift UPS Inverter">
    </div>

    <div class="indus-button-group">
        <a href="#" class="indus-action-btn">DOWNLOAD BROCHURE</a>
        <a href="#" class="indus-action-btn" onclick="openEnquiry()">ENQUIRE NOW</a>
    </div>
</section>

<!-- Lightbox -->
<div class="indus-lightbox-modal" id="lightbox">
    <div class="indus-close-button" id="closeBtn">
        <span></span>
        <span></span>
    </div>
    <img src="" alt="Lift UPS Inverter" id="lightboxImg">
</div>

<script>
const images = document.querySelectorAll(".indus-product-image");
const lightbox = document.getElementById("lightbox");
const lightboxImg = document.getElementById("lightboxImg");
const closeBtn = document.getElementById("closeBtn");

images.forEach(img => {
    img.addEventListener("click", () => {
        lightbox.classList.add("active");
        lightboxImg.src = img.src;
    });
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


















<!-- Understanding Lift UPS Inverter Start -->
<style>
.indus-info-panel{
    padding:40px 5%;
    position:relative;
    overflow:hidden;
}

.indus-info-panel::before,
.indus-info-panel::after{
    content:"";
    position:absolute;
    border-radius:50%;
    opacity:0.1;
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

.indus-grid-container{
    display:grid;
    grid-template-columns: repeat(auto-fit,minmax(320px,1fr));
    gap:40px;
    position:relative;
    z-index:1;
}

.indus-main-heading{
    grid-column:1/-1;
    text-align:center;
    font-size:32px;
    font-weight:900;
    color:#212384;
    margin-bottom:20px;
    position:relative;
}

.indus-main-heading::after{
    content:"";
    display:block;
    width:60px;
    height:6px;
    background: linear-gradient(to right,#212384,#f37021);
    margin:15px auto 0;
    border-radius:3px;
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

@keyframes underline{
    from{ width: 0; }
    to{ width: 100%; }
}

.indus-content-card{
    background:#ffffff;
    padding:35px 30px;
    border-radius:25px;
    box-shadow:0 20px 60px rgba(33,35,132,0.08);
    position:relative;
    overflow:hidden;
    transition: transform 0.5s ease, box-shadow 0.5s ease;
    border: solid 2px #f37021;
}



.indus-content-card:hover{
    transform: translateY(-15px) scale(1.02);
    box-shadow:0 30px 70px rgba(33,35,132,0.15);
    border-color: #212384;
}

.indus-content-card p{
    font-size:17px;
    line-height:1.8;
    color:#000000;
    margin:0;
    position:relative;
    text-align: justify;
    z-index:1;
}

.indus-content-card strong{
    color:#212384;
    font-weight:600;
}

.indus-content-card:hover p{
    transform: translateY(-2px);
    color: #212384;
}

@keyframes floatShape{
    0%{transform: translateY(0);}
    100%{transform: translateY(20px);}
}

@keyframes overlayMove{
    0%{transform: rotate(25deg) translateX(0);}
    50%{transform: rotate(25deg) translateX(20px);}
    100%{transform: rotate(25deg) translateX(0);}
}

@media(max-width:992px){
    .indus-section-heading{
        font-size:28px;
    }
}
</style>

<section class="indus-info-panel">
    <h2 class="indus-section-heading">
        Advanced Power Backup Solution for Safe, Reliable & Uninterrupted <span>Elevator Operation</span>
    </h2>
    
    <div class="indus-grid-container">
        <div class="indus-content-card">
            <p>
                In today's rapidly urbanizing environment where high-rise residential towers, commercial complexes, hospitals, shopping malls, and industrial buildings rely heavily on vertical transportation, a <strong>Lift UPS Inverter</strong> has become an indispensable safety and power backup solution that ensures elevators continue to function smoothly and safely during power failures, voltage fluctuations, and grid instability.
            </p>
        </div>

        <div class="indus-content-card">
            <p>
                At <strong>Indus Power Industries Pvt. Ltd.</strong>, we design, manufacture, and deploy technologically advanced inverter systems that are specifically engineered to meet the demanding electrical and safety requirements of elevators, making our solutions suitable for residential buildings, commercial establishments, healthcare facilities, and industrial infrastructure across India.
            </p>
        </div>

        <div class="indus-content-card">
            <p>
                A <strong>Lift Inverter</strong> is a specialized power backup system designed to supply uninterrupted and stable electricity to elevator systems during mains power failure, sudden voltage drops, or electrical disturbances, ensuring that the lift completes its journey safely and opens at the nearest floor without trapping passengers inside.
            </p>
        </div>
    </div>
</section>
<!-- Understanding Lift UPS Inverter End -->














<!-- What is Lift UPS Section Start -->
<style>    
.indus-clean-section {
    padding: 30px 20px;
    color: #212384;
    position: relative;
    overflow: hidden;
    border-radius: 15px;
}

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
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

.indus-clean-section p {
    font-size: 1.1rem;
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
    text-align: center;
}

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
    font-size: 1.1rem;
    color: #000000;
    line-height: 1.6;
}

.indus-steps-list li:hover {
    transform: translateY(-15px) scale(1.02);
    box-shadow: 0 30px 50px rgba(243, 112, 33, 0.25);
    border: 2px solid #f37021;
    background: linear-gradient(145deg, #ffffff, #fff8f0);
}

.indus-steps-list li strong {
    display: block;
    margin-bottom: 12px;
    font-size: 1.2rem;
    color: #212384;
    font-weight: 700;
    transition: all 0.3s ease;
}

.indus-steps-list li:hover strong {
    color: #f37021;
    transform: translateX(5px);
}

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

@media(max-width:768px){
    .indus-clean-section {
        padding: 20px 15px;
    }
    
    .indus-clean-section h3 {
        font-size: 1.6rem;
    }
    
    .indus-steps-list li {
        flex: 1 1 100%;
        min-width: auto;
        padding: 20px;
    }
    
    .indus-section-heading {
        font-size: 32px;
    }
}
</style>

<section class="indus-clean-section">
    <div class="indus-clean-container">
        <h2 class="indus-section-heading">
            Understanding <span>Lift UPS Systems</span>
        </h2>
        
        <p>A sudden power outage without a dedicated <strong>Lift Power Backup</strong> system can immediately immobilize elevators, potentially trapping passengers inside cabins, creating panic, medical emergencies, and serious liability concerns for building owners and facility managers.</p>

        <p>By deploying a reliable <strong>Elevator Power Backup</strong> solution, buildings ensure that lifts continue operating long enough to safely evacuate passengers, thereby improving safety, accessibility, and overall confidence in the building's infrastructure.</p>

        <h3>How A Lift Inverter System Operates</h3>
        
        <ul class="indus-steps-list">
            <li>
                <strong>1. Power Monitoring</strong> - Continuously monitors incoming utility power and detects abnormalities
            </li>
            <li>
                <strong>2. Instant Switching</strong> - Seamlessly switches to backup power without noticeable interruption
            </li>
            <li>
                <strong>3. Battery Power</strong> - Draws energy from dedicated battery bank for smooth motor operation
            </li>
            <li>
                <strong>4. Safe Operation</strong> - Ensures lift completes journey and opens at nearest floor safely
            </li>
        </ul>

        <p>This operating principle makes the <strong>Lift UPS Inverter</strong> ideal for applications that require reliable backup and enhanced safety during power failures.</p>
    </div>
</section>
<!-- What is Lift UPS Section End -->

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
}

.indus-flip-card{
    perspective:1000px;
    width:380px;
    height:400px;
}

.indus-flip-inner{
    position:relative;
    width:100%;
    height:75%;
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
    font-weight: 600;
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
}

.indus-back-face h3{
    font-size: 20px;
    font-weight: 600;
    text-align: center;
    color:#212384;
    margin-bottom:10px;
    margin-top: 40px;
}

.indus-back-face p{
    font-size:16px;
    line-height:1.7;
    text-align: justify;
    color: #000000;
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

@media(max-width:992px){
    .indus-card-grid{
        grid-template-columns:repeat(2,1fr);
    }
}
@media(max-width:600px){
    .indus-card-grid{
        grid-template-columns:1fr;
    }
}
</style>

<section class="indus-applications-section">
    <div class="indus-container">
        <h2 class="indus-section-heading">
            Applications Of <span>Lift UPS Inverter</span>
        </h2>
        <div class="indus-card-grid">
            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>01</span>
                        <h3>Residential Buildings</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Residential Buildings</h3>
                        <p>A <strong>Lift Inverter For Apartment</strong> complexes is essential in multi-storey residential buildings where frequent power cuts can disrupt daily life and compromise safety.</p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>02</span>
                        <h3>Commercial Buildings</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Commercial Buildings</h3>
                        <p>A <strong>Lift Inverter For Commercial Building</strong> installations is critical in office complexes and business parks where elevator downtime can disrupt productivity.</p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>03</span>
                        <h3>Hospitals</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Hospitals</h3>
                        <p>A <strong>Lift Inverter For Hospital</strong> environments is essential because elevators play a critical role in patient movement, emergency response, and medical logistics.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="indus-card-grid" style="margin-top:20px;">
            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>04</span>
                        <h3>Hotels</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Hotels</h3>
                        <p>A <strong>Lift Inverter For Hotel</strong> operations enhances guest experience by maintaining continuous lift service during power outages.</p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>05</span>
                        <h3>Industrial Facilities</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Industrial Facilities</h3>
                        <p>An <strong>Industrial Lift Inverter</strong> is designed to handle continuous operation and high loads in factories and industrial plants.</p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>06</span>
                        <h3>Malls & Retail</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Malls & Retail</h3>
                        <p>A <strong>Lift Inverter For Mall</strong> ensures uninterrupted customer flow and safety during business hours.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Applications Section End -->

<!-- Features Section Start -->
<style>
.indus-features-section {
    padding: 30px 40px;
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

.indus-feature-item h3 {
    font-size: 20px;
    font-weight: 600;
    color: #212384;
    margin-bottom: 10px;
}

.indus-feature-item p, 
.indus-feature-item ul {
    font-size: 15px;
    color: #000000;
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

<section class="indus-features-section">
    <div class="indus-features-container">
        <h2 class="indus-section-heading">
            Features Of <span>INDUS Lift UPS</span>
        </h2>

        <div class="indus-feature-item">
            <h3>State-of-the-Art Microcontroller Technology</h3>
            <p>The system uses advanced microcontroller-based control for precise power regulation, intelligent monitoring, and improved system reliability.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Pure Sine Wave Output</h3>
            <p>A <strong>Pure Sine Wave Output</strong> ensures clean power for smooth motor operation and protects sensitive elevator electronics.</p>
        </div>

        <div class="indus-feature-item">
            <h3>High Inverter Efficiency</h3>
            <p>With efficiency greater than 93%, the system minimizes energy losses and reduces operating costs.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Excellent Overload Capacity</h3>
            <p>Handles 100% continuous load and 300% for 2 seconds, ideal for high inrush currents of elevator motors.</p>
        </div>

        <div class="indus-feature-item">
            <h3>LCD Display with Alarms</h3>
            <p>The LCD display provides real-time information including input/output voltage, battery status, load condition, and fault indications with audible alarms.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Comprehensive Protection</h3>
            <p>The Lift UPS offers complete protection against overload, short circuit, battery deep discharge, over-voltage, and under-voltage.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Multistage Charging</h3>
            <p>Advanced multistage/current controlled charging with adjustable charging current from 3AMP to 15AMP ensures optimal battery health.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Excellent Voltage Regulation</h3>
            <p>±1% voltage regulation for DC input variation and output load variation ensures stable power supply to elevator systems.</p>
        </div>
    </div>
</section>
<!-- Features Section End -->

<!-- Key Benefits Timeline Section Start (Exactly as per image) -->
<style>
.indus-benefits-section {
    padding: 30px 8%;
    position: relative;
}

.indus-benefits-container {
    max-width: 1100px;
    margin: auto;
}

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

.indus-timeline-description p {
    margin: 0;
    font-size: 17px;
    color: #000000;
    line-height: 1.6;
}

.indus-timeline-item:hover .indus-timeline-description {
    transform: translateX(8px);
    box-shadow: 0 15px 35px rgba(243,112,33,0.15);
}

.indus-timeline-item:hover .indus-timeline-marker {
    transform: scale(1.15);
    background: linear-gradient(135deg, #212384, #f37021);
}

@keyframes slideRight {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}
</style>

<section class="indus-benefits-section">
    <div class="indus-benefits-container">
        <h2 class="indus-section-heading">
            Why Choose <span>INDUS Lift UPS?</span>
        </h2>   

        <div class="indus-timeline-wrapper">
            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p>Cost-Effective Power Backup Solution</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p>High Efficiency With Minimal Power Loss</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p>Simple And Robust Design</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p>Low Maintenance Requirements</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p>Fast Changeover During Power Failure</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p>Compatible With Various Battery Types</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p>Ideal For Residential And Commercial Use</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Key Benefits Timeline Section End -->



















<style>
    .modern-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 30px;
    }
    .modern-table th, .modern-table td {
        border: 1px solid #ccc;
        padding: 10px 15px;
        text-align: center;
    }
    .modern-table th {
        background-color: #252f74;
        color: #fff;
        font-size: 16px;
    }
    .modern-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .modern-table tr:hover {
        background-color: #dbe1f1;
    }
    .modern-table td:hover {
        border: solid 2px #f37021;
    }
    .section-title {
        text-align: center;
        background-color: #252f74;
        color: #fff;
        font-size: 18px;
        padding: 10px 0;
        margin-bottom: 5px;
    }
</style>

<h2 class="indus-section-heading">
            Technical <span>Specifications</span>
        </h2> 

<table class="modern-table">
    <tr>
        <th>Specification</th>
        <th>Details</th>
    </tr>

    <tr>
        <td>AC Input</td>
        <td>345 VAC - 475 VAC ± 5 V 3 Phase Input</td>
    </tr>
    <tr>
        <td>Technology</td>
        <td>State of the art micro controller technology</td>
    </tr>
    <tr>
        <td>Output Waveform</td>
        <td>Pure sine wave</td>
    </tr>
    <tr>
        <td>Harmonic Distortion</td>
        <td>THD &lt; 2%</td>
    </tr>
    <tr>
        <td>Inverter Efficiency</td>
        <td>&gt; 93%</td>
    </tr>
    <tr>
        <td>Power Factor</td>
        <td>&gt; 0.89</td>
    </tr>
    <tr>
        <td>Overload</td>
        <td>100% Continuous | 300% for 2 sec</td>
    </tr>
    <tr>
        <td>Crest Factor</td>
        <td>3 : 1</td>
    </tr>
    <tr>
        <td>Charging Current</td>
        <td>3 AMP - 15 AMP (Adjustable)</td>
    </tr>
    <tr>
        <td>Charging Method</td>
        <td>Multistage / current controller</td>
    </tr>
    <tr>
        <td>Output Voltage</td>
        <td>400V / 415V AC, 3 Phase, Balanced</td>
    </tr>
    <tr>
        <td>Voltage Regulation</td>
        <td>± 1% for DC I/P Variation & O/P Load Variation</td>
    </tr>
    <tr>
        <td>Frequency</td>
        <td>50 Hz ± 0.5%</td>
    </tr>
    <tr>
        <td>Transient Response</td>
        <td>± 4% under Full Change & Corrected Within 5m Sec.</td>
    </tr>
    <tr>
        <td>Phase Displacement</td>
        <td>120° ± 1°</td>
    </tr>
</table>



























    <!-- Installation & Maintenance Section -->
    <h2 class="indus-section-heading" style="margin-top: 40px;">
        Installation, Maintenance, <span>And AMC Services</span>
    </h2>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; margin: 30px 0; padding: 0px 30px;">
        <div class="indus-content-card" style="padding: 25px;">
            <i class="fas fa-tools" style="font-size: 2.5rem; margin-left: 135px; color: #f37021; margin-bottom: 15px;"></i>
            <h3 style="color: #212384; margin-bottom: 10px; font-size: 23px;
    font-weight: 600; text-align: center;">Professional Installation</h3>
            <p>Professional lift inverter installation ensures safety and optimal performance. Correct wiring prevents failures.</p>
        </div>
        
        <div class="indus-content-card" style="padding: 25px;">
            <i class="fas fa-wrench" style="font-size: 2.5rem; margin-left: 135px; color: #f37021; margin-bottom: 15px;"></i>
            <h3 style="color: #212384; margin-bottom: 10px; font-size: 23px;
    font-weight: 600; text-align: center;">Regular Maintenance</h3>
            <p>Regular lift inverter maintenance enhances lifespan and ensures reliable operation during emergencies.</p>
        </div>
        
        <div class="indus-content-card" style="padding: 25px;">
            <i class="fas fa-file-contract" style="font-size: 2.5rem; margin-left: 135px; color: #f37021; margin-bottom: 15px;"></i>
            <h3 style="color: #212384; margin-bottom: 10px; font-size: 23px;
    font-weight: 600; text-align: center;">AMC Services</h3>
            <p>Comprehensive annual maintenance contracts and genuine spare parts support long-term performance.</p>
        </div>
    </div>

    <!-- Pricing & Availability -->
    <h2 class="indus-section-heading" style="margin-top: 40px;">
        Pricing, Availability, <span>And Support</span>
    </h2>

    <div style="display: flex; flex-wrap: wrap; gap: 15px; justify-content: center; margin: 30px 0;">
        <span style="background: white; padding: 0.9rem 2.4rem; border-radius: 60px 10px 60px 10px; border: 2px solid #f37021; font-weight: 600; color: #1e2a78;">
            <i class="fas fa-tag" style="color: #f37021; margin-right: 8px;"></i> Best Price
        </span>
        <span style="background: white; padding: 0.9rem 2.4rem; border-radius: 60px 10px 60px 10px; border: 2px solid #f37021; font-weight: 600; color: #1e2a78;">
            <i class="fas fa-map-marker-alt" style="color: #f37021; margin-right: 8px;"></i> Pan India
        </span>
        <span style="background: white; padding: 0.9rem 2.4rem; border-radius: 60px 10px 60px 10px; border: 2px solid #f37021; font-weight: 600; color: #1e2a78;">
            <i class="fas fa-truck" style="color: #f37021; margin-right: 8px;"></i> All India Delivery
        </span>
    </div>

    <p style="font-size: 1.1rem; line-height: 1.8; color: #444; text-align: center; max-width: 900px; margin: 0 auto;">
        As a leading <strong>Lift Inverter Manufacturer</strong> in India, we operate through a wide network of dealers and distributors across the country. Contact us for competitive pricing, technical specifications, and installation support.
    </p>

    <!-- Conclusion -->
    <h2 class="indus-section-heading" style="margin-top: 40px;">
        <span>Conclusion</span>
    </h2>

    <p style="font-size: 17px; line-height: 1.8; color: #444; text-align: justify;    padding: 0px 20px;
">
        A <strong>Lift UPS Inverter</strong> is a mission-critical safety system that protects lives, assets, and reputation by ensuring uninterrupted elevator operation during power failures. At Indus Power Industries Pvt. Ltd., we deliver engineered, reliable, and future-ready lift inverter solutions supported by expert service and nationwide reach.
        <br><br>
    </p>
</div>
<!-- Technical Specifications Section End -->

<?php include('footer.php'); ?>

</body>
</html>