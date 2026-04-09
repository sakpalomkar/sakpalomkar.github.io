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
        <h1>Static UPS Inverter Manufacturer India
</h1>
        <div class="premium-breadcrumb-trail">
            <a href="#">Home</a> 
            &nbsp;»&nbsp; 
            <a href="#">Products</a> 
            &nbsp;»&nbsp;
            <a href="#">Offline UPS</a> 
            &nbsp;»&nbsp; 
            <span>Static UPS Inverter</span>
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
    width:500px;
    cursor:pointer;
    border-radius:20px;
    transform:translateY(60px);
    opacity:0;
    animation: fadeUp 1.2s ease forwards;
    transition:0.4s ease;
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
        <img src="img/Static UPS.png" class="tech-display-image" id="galleryImage" alt="UPS Machine">
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
    <img src="img/Static UPS.png" alt="UPS Machine">
</div>

<script>
const galleryImage = document.getElementById("galleryImage");
const imageLightbox = document.getElementById("imageLightbox");
const closeLightbox = document.getElementById("closeLightbox");

galleryImage.addEventListener("click", () => {
    imageLightbox.classList.add("active");
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












<!-- Main text--> 

<style>
    /* Desktop Styles */
    .power-backup {
        line-height: 1.6;
        color: #333333;
        max-width: 1100px;
        margin: 0 auto;
        padding: 60px 20px;
        background-color: #ffffff;
    }

    .power-backup-heading {
        text-align: center;
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 40px;
        color: #212384;
        letter-spacing: 1px;
    }

    /* Updated Card Layout */
    .power-backup-container {
        display: flex;
        gap: 25px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .power-backup-card {
        flex: 1;
        min-width: 300px;
        padding: 40px 20px; 
        border: 2px solid #f37021;
        border-radius: 25px;
        background: #ffffff;
        box-shadow: 0 6px 12px rgba(0,0,0,0.08);
        display: flex;
        flex-direction: column;
        justify-content: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* 3D Hover Effect */
    .power-backup-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 25px rgba(0,0,0,0.2);
        border-color: #212384 ;
    }

    .power-backup-text {
        color: black;
        text-align: justify;
        font-size: 17px;
        line-height: 1.6;
        margin: 0;
    }

    .power-backup-brand { font-weight: bold; color: #1e2a78; }
    .power-backup-bold { color: #212384; font-weight: bold; }

    /* Mobile View */
    @media only screen and (max-width: 768px) {
        .power-backup { padding: 30px 20px; }
        .power-backup-card { 
            min-width: 100%; 
            padding: 40px 20px; 
        }
    }
</style>

<div class="power-backup">

    <h2 class="static-ups-heading">
            Reliable Power Backup For <span>Critical Applications</span>
        </h2>

    <div class="power-backup-container">
        <div class="power-backup-card">
            <p class="power-backup-text">
                In today's power-dependent world, uninterrupted electricity is not a luxury—it is a necessity. From factories and hospitals to offices, lifts, and data centers, even a few seconds of power failure can result in financial loss, safety risks, and operational downtime.
            </p>
        </div>
        <div class="power-backup-card">
            <p class="power-backup-text">
                A static UPS inverter is designed to eliminate these risks by providing instant, clean, and reliable power backup for sensitive and mission-critical loads, ensuring your operations never miss a beat.
            </p>
        </div>
        <div class="power-backup-card">
            <p class="power-backup-text">
                At Indus Power Industries Pvt. Ltd., we manufacture and supply advanced static UPS and static inverter solutions engineered to meet Indian power conditions with world-class performance, durability, and efficiency.
            </p>
        </div>
    </div>
</div>






    <!-- section 1 starts-->  

<style>    
.static-ups-inverter {
    padding: 30px 20px;
    color: #212384;
    position: relative;
    overflow: hidden;
    border-radius: 15px;
}

/* Floating Shapes */
.static-ups-inverter::before,
.static-ups-inverter::after {
    content: "";
    position: absolute;
    border-radius: 50%;
    z-index: 1;
    opacity: 0.08;
    animation: floatShapes 15s infinite ease-in-out;
}

.static-ups-inverter::before {
    width: 300px;
    height: 300px;
    top: -100px;
    left: -100px;
    background: #f37021;
}

.static-ups-inverter::after {
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

.static-ups-container {
    max-width: 1000px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

.static-ups-heading {
    text-align: center;
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 70px;
    color: #1e2a78;
    letter-spacing: 1px;
}

.static-ups-heading span {
    color: #f37021;
    position: relative;
    display: inline-block;
}

.static-ups-heading span::after {
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

.static-ups-inverter p {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 20px;
    color: #444;
    text-align: justify;
}

.static-ups-inverter h3 {
    text-align : center;
    font-size: 1.8rem;
    color: #212384;
    margin: 30px 0 20px;
    font-weight: 600;
}

.static-steps-list {
    display: flex;
    flex-wrap: wrap;
    gap: 25px;
    margin: 30px 0 40px;
    list-style: none;
    padding-left: 0;
    justify-content: center;
}

/* Updated card dimensions for consistency */
.static-steps-list li {
    flex: 1 1 calc(50% - 25px);
    min-width: 280px;
    min-height: 150px; /* Ensures consistent vertical sizing */
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

.static-steps-list li strong {
    display: block;
    margin-bottom: 12px;
    font-size: 1.2rem;
    color: #212384; 
    font-weight: 700;
}

.static-steps-list li {
    font-size: 1.1rem;
    color: #000000;
    line-height: 1.6;
}

.static-steps-list li:hover {
    transform: translateY(-15px) scale(1.02);
    box-shadow: 0 30px 50px rgba(243, 112, 33, 0.25);
    border-color: #f37021;
    background: linear-gradient(145deg, #ffffff, #fff8f0);
}

.static-steps-list li .shine-effect {
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.1) 50%, transparent 70%);
    transform: rotate(45deg);
    animation: shine 3s infinite;
    pointer-events: none;
    opacity: 0;
}

.static-steps-list li:hover .shine-effect { opacity: 1; }

@keyframes shine {
    0% { transform: translateX(-100%) rotate(45deg); }
    100% { transform: translateX(100%) rotate(45deg); }
}
</style>

<section class="static-ups-inverter">
    <div class="static-ups-container">
        <h2 class="static-ups-heading">
            What Is A Static <span> UPS Inverter?</span>
        </h2>
        
        <p>A <strong>static UPS system</strong> is an electronic power backup solution that provides uninterrupted power using solid-state components instead of mechanical parts. Unlike conventional backup systems, a static UPS inverter delivers instantaneous changeover during power failure, ensuring zero or near-zero interruption to connected equipment.</p>

        
        
        <p>A <strong>static inverter system</strong> converts DC battery power into clean AC output with precise voltage and frequency control, making it suitable for highly sensitive and critical electrical loads.</p>

        <h3>Key Characteristics</h3>
        <ul class="static-steps-list">
            <li>
                <strong>Solid-State Design</strong>
                Uses electronic components for highly reliable performance.
                <div class="shine-effect"></div>
            </li>
            <li>
                <strong>Zero Transfer Time</strong>
                Ensures instantaneous switching during power failures.
                <div class="shine-effect"></div>
            </li>
            <li>
                <strong>Precision Output</strong>
                Provides stable voltage and frequency control.
                <div class="shine-effect"></div>
            </li>
            <li>
                <strong>Industrial Grade</strong>
                Built specifically for sensitive, critical loads.
                <div class="shine-effect"></div>
            </li>
        </ul>

        <p>Because of its fast response time and stable output, a static UPS power backup solution is widely preferred in industries where even microsecond-level interruptions are unacceptable.</p>
    </div>
</section>
 <!-- section 1 ends-->  














  <!-- section 2 starts-->  

 <style>
    /* Section and Container */
    .ups-essential {
        padding: 60px 20px;
        color: #212384;
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        background: #fdfdfd;
    }

    /* Floating shapes */
    .ups-essential::before, .ups-essential::after {
        content: ""; position: absolute; border-radius: 50%; z-index: 1; opacity: 0.05;
        animation: floatShapes 15s infinite ease-in-out;
    }
    .ups-essential::before { width: 300px; height: 300px; top: -100px; left: -100px; background: #f37021; }
    .ups-essential::after { width: 400px; height: 400px; bottom: -150px; right: -150px; background: #212384; animation-delay: 5s; }

    @keyframes floatShapes {
        0%, 100% { transform: translateY(0) translateX(0); }
        50% { transform: translateY(-20px) translateX(20px); }
    }

    .ups-essential-container { max-width: 900px; margin: 0 auto; position: relative; z-index: 2; }

    .ups-essential-heading { text-align: center; font-size: 32px; font-weight: 700; margin-bottom: 60px; color: #212384; }
    .ups-essential-heading span { color: #f37021; }

    /* Vertical Timeline Design */
    .ups-essential-timeline {
        list-style: none;
        padding: 0;
        position: relative;
    }

    /* The central line */
    .ups-essential-timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 2px;
        background: #212384;
        transform: translateX(-50%);
    }

    .ups-essential-item {
        position: relative;
        margin-bottom: 50px;
        width: 100%;
        display: flex;
        justify-content: center;
    }

    /* The bullet point */
    .ups-essential-item::after {
        content: '';
        position: absolute;
        left: 50%;
        top: 65px;
        width: 22px;
        height: 22px;
        background: #f37021;
        border: 4px solid #fff;
        border-radius: 50%;
        transform: translateX(-50%);
        box-shadow: 0 0 10px #f37021;
        transition: 0.3s;
    }

    .ups-essential-content {
        width: 48%; /* Slightly wider */
        min-height: 130px; /* Slightly taller */
        padding: 30px; /* More internal breathing room */
        background: white;
        border-radius: 12px;
        border-left: 5px solid #f37021;
        box-shadow: 0 8px 20px rgba(0,0,0,0.06);
        transition: 0.3s;
        color: black;
    }

    /* Alternating sides */
    .ups-essential-item:nth-child(odd) .ups-essential-content { margin-right: 52%; text-align: right; border-left: none; border-right: 5px solid #f37021; }
    .ups-essential-item:nth-child(even) .ups-essential-content { margin-left: 52%; text-align: left; }

    .ups-essential-item:hover .ups-essential-content {
        transform: scale(1.03);
        box-shadow: 0 12px 30px rgba(33, 35, 132, 0.18);
    }

    /* Heading color inside card set to blue */
    .ups-essential-content strong { display: block; font-size: 1.3rem; color: #212384; margin-bottom: 12px; }
</style>

<section class="ups-essential">
    <div class="ups-essential-container">
        
        <h2 class="static-ups-heading">
            Why Static UPS Is <span>Essential Today ?</span>
        </h2>

        <ul class="ups-essential-timeline">
            <li class="ups-essential-item">
                <div class="ups-essential-content">
                    <strong>Power Stability</strong>
                    Power fluctuations, voltage dips, and sudden outages are common. A reliable static UPS ensures that your operations continue smoothly.
                </div>
            </li>
            <li class="ups-essential-item">
                <div class="ups-essential-content">
                    <strong>Critical Load Protection</strong>
                    Essential for environments with heavy machinery or safety-critical operations to prevent costly downtime and equipment failure.
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- section 2 ends --> 














<!-- section 3 starts --> 
<style>
/* --- Desktop View (Untouched) --- */
.indus-applications-section {
    padding: 30px 20px;
    background: #ffffff;
  
    
}

.indus-container {
    max-width: 1200px;
    margin: auto;
}

.indus-section-heading {
    text-align: center;
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 80px;
    color: #212384 ;
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

.indus-flip-card, .indus-front-face, .indus-back-face {
    box-sizing: border-box;
}

.indus-section-subtitle {
    font-size: 20px;
    color: #1e2a78;
    text-align: center;
    max-width: 900px;
    margin: -60px auto 60px; 
    line-height: 1.8;
}

.indus-card-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    justify-items: center;
}

.indus-flip-card {
    perspective: 1000px;
    width: 100%;
    max-width: 380px;
    height: 320px;
    margin-bottom: 20px;
}

.indus-flip-inner {
    position: relative;
    width: 100%;
    height: 100%;
    transition: transform 0.8s;
    transform-style: preserve-3d;
}

.indus-flip-card:hover .indus-flip-inner {
    transform: rotateY(180deg);
}

.indus-front-face,
.indus-back-face {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    border-radius: 18px;
    padding: 25px;
    box-shadow: 0 15px 35px rgba(33, 35, 132, 0.12);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.indus-front-face {
    background: white;
    border: solid 2px #212384;
}

.indus-front-face h3 {
    font-size: 20px;
    margin: 10px 0 0 0;
    color: #212384;
    font-weight: 600;
}

.indus-front-face span {
    font-size: 40px;
    font-weight: 700;
    color: #f37021;
}

.indus-back-face {
    background: #ffffff;
    color: #444;
    transform: rotateY(180deg);
    border: 2px solid #f37021;
    overflow-y: auto;
}

.indus-back-face h3 {
    font-size: 18px;
    color: #212384;
    margin-bottom: 12px;
    font-weight: 600;

}

.indus-back-face p {
    color : black;
    text-align : justify;
    font-size: 16px;
    line-height: 1.6;
    margin: 0;
}

/* --- Mobile View Updates (Targeting 768px and below) --- */
@media (max-width: 768px) {
    .indus-section-heading {
        font-size: 15px;
        margin-bottom: 40px; /* Reduced space for mobile */
    }

    .indus-section-subtitle {
        font-size: 16px;
        margin: 0 auto 30px; /* Reset negative margin to prevent overlap */
        padding: 0 10px;
    }

    .indus-card-grid {
        grid-template-columns: 1fr; /* Single column for better tap targets */
        gap: 15px;
    }

    .indus-flip-card {
        height: 280px; /* Slightly shorter cards for mobile screens */
        max-width: 100%; /* Stretch to container width */
    }

    .indus-front-face h3 {
        font-size: 18px;
    }
    
    .indus-back-face p {
        font-size: 14px; /* Easier to read on small screens */
    }
}
</style>

<section class="indus-applications-section">
    <div class="indus-container">
        <h2 class="indus-section-heading">
            Applications Of Static UPS And <span> Static Inverter Systems</span>
        </h2>

        <p class="indus-section-subtitle">
           Industrial Application
        </p>

        <div class="indus-card-grid">
            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>01</span>
                        <h3>Factory Production & Machinery</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Factory Production & Machinery</h3>
                        <p>
                            A <strong>static UPS for factory</strong> environments is critical for maintaining continuous production and protecting expensive machinery. Many manufacturers depend on a static UPS for machines to prevent breakdowns caused by unstable voltage.
                        </p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>02</span>
                        <h3>Precision CNC Machining</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Precision CNC Machining</h3>
                        <p>For precision-based manufacturing, a <strong>static UPS for CNC machines</strong> ensures accuracy, consistency, and protection against voltage fluctuations that could damage tools and workpieces.</p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>03</span>
                        <h3>PLC & Automation Systems</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>PLC & Automation Systems</h3>
                        <p>An <strong>industrial static UPS</strong> also safeguards PLCs, automation panels, and control systems used in modern manufacturing units.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- section 3 ends --> 




<!-- section 4 starts --> 

<style>
 /* --- Full Width Healthcare Section --- */
.healthcare-section {
  width: 100%;
  margin: 0;
  line-height: 1.6;
  padding: 60px 30px;
  position: relative;
  overflow: hidden;

  /* Background Image */
  background-image: url('img/about us.jpg'); /* check your path */
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;

  /* Parallax / Fixed effect */
  background-attachment: fixed;
}

/* Darker black overlay for more faint background */
.healthcare-section::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.65);
  z-index: 0;
}

/* Content above overlay */
.healthcare-content,
.healthcare-heading {
  position: relative;
  z-index: 1;
  max-width: 900px;
  margin: 0 auto;
  color: #fff; /* text visible */
}
  /* Heading (keep span & animation) */
  .healthcare-heading {
    text-align: center;
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 40px;
    letter-spacing: 1px;
    color: #ffffff; /* heading text */
  }

  .healthcare-heading span {
    color: #f37021;
    position: relative;
    display: inline-block;
  }

  .healthcare-heading span::after {
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

  /* Paragraphs (spans removed) */
  .healthcare-body-text {
    font-size: 17px;
    margin-bottom: 20px;
    text-align: justify;
    color: #ffffff; /* visible on overlay */
  }

  .healthcare-body-text strong {
    color: #ffd966; /* highlight strong text */
    font-weight: 600;
  }

  /* Note Text */
  .healthcare-note {
    font-size: 1.1rem;
    text-align: justify;
    color: #ffffff;
  }

  /* Mobile View */
  @media (max-width: 768px) {
    .healthcare-section {
      padding: 20px 15px;
    }

    .healthcare-heading {
      font-size: 18px;
      margin-bottom: 30px;
    }

    .healthcare-body-text {
      font-size: 1rem;
    }

    .healthcare-note {
      font-size: 0.95rem;
      margin-top: 20px;
    }
    @media (max-width: 768px) {
  .healthcare-section {
    background-attachment: scroll;
  }
}
  }
</style>

<section class="healthcare-section">
    <h2 class="healthcare-heading">
        Healthcare And <span>Medical Facilities</span>
    </h2>
    
    <div class="healthcare-content">
        <p class="healthcare-body-text">
            A static UPS for hospital environments is essential because medical equipment must operate without interruption. Life-support systems, diagnostic machines, and monitoring equipment rely on continuous power supplied by a static UPS with battery backup.
        </p>
        
        <p class="healthcare-note">
            Hospitals trust static UPS systems because they provide clean, distortion-free power that protects sensitive medical electronics.
        </p>
    </div>
</section>
<!-- section 4 ends --> 








 
 <!-- section 5 starts --> 
<style>
.it-data-section {
    padding: 30px 8%;
    position: relative;
}

.it-data-container {
    max-width: 1100px;
    margin: auto;
}

.it-data-title{
    text-align:center;
    font-size:32px;
    font-weight:700;
    margin-bottom:80px;
    color:#1e2a78;
    letter-spacing:1px;
}

.it-data-title span{
    color:#f37021;
    position:relative;
}

.it-data-title span::after{
    content: '';
    position: absolute;
    width: 100%;
    height: 4px;
    background: #f37021;
    bottom: -10px;
    left: 0;
    border-radius: 5px;
    animation: itDataUnderline 2s infinite alternate;
}

.it-data-timeline-wrapper {
    position: relative;
    margin-left: 30px;
}

.it-data-timeline-wrapper::before {
    content: "";
    position: absolute;
    left: 0;
    top: -13px;
    width: 4px;
    height: 100%;
    background: linear-gradient(to bottom, #f37021, #212384);
    border-radius: 20px;
}

.it-data-timeline-item {
    position: relative;
    padding-left: 60px;
    margin-bottom: 45px;
    opacity: 0;
    transform: translateX(-40px);
    animation: itDataSlideRight 0.8s ease forwards;
}

.it-data-timeline-item:nth-child(1){animation-delay:0.2s;}
.it-data-timeline-item:nth-child(2){animation-delay:0.4s;}
.it-data-timeline-item:nth-child(3){animation-delay:0.6s;}
.it-data-timeline-item:nth-child(4){animation-delay:0.8s;}
.it-data-timeline-item:nth-child(5){animation-delay:1s;}

.it-data-timeline-marker {
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

.it-data-timeline-description {
    background: #ffffff;
    padding: 20px 25px;
    border-radius: 14px;
    border-left: 4px solid #212384;
    box-shadow: 0 10px 25px rgba(33,35,132,0.08);
    transition: all 0.4s ease;
}

.it-data-timeline-description p {
    margin: 0;
    font-size: 17px;
    color: #333;
    line-height: 1.6;
}

.it-data-timeline-item:hover .it-data-timeline-description {
    transform: translateX(8px);
    box-shadow: 0 15px 35px rgba(243,112,33,0.15);
}

.it-data-timeline-item:hover .it-data-timeline-marker {
    transform: scale(1.15);
    background: linear-gradient(135deg, #212384, #f37021);
}

@keyframes itDataSlideRight {
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes itDataUnderline{
    from{ width: 0; }
    to{ width: 100%; }
}

@media (max-width: 768px) {
    .it-data-section {
        padding: 40px 20px;
    }

    .it-data-title {
        font-size: 22px;
        margin-bottom: 50px;
    }

    .it-data-timeline-wrapper {
        margin-left: 15px;
    }

    .it-data-timeline-wrapper::before {
        left: 6px;
        width: 3px;
    }

    .it-data-timeline-item {
        padding-left: 45px;
        margin-bottom: 35px;
        transform: translateX(-20px);
    }

    .it-data-timeline-marker {
        width: 22px;
        height: 22px;
        font-size: 12px;
        left: -5px;
        top: 3px;
    }

    .it-data-timeline-description {
        padding: 15px 18px;
        border-radius: 10px;
    }

    .it-data-timeline-description p {
        font-size: 15px;
        line-height: 1.5;
    }
}
</style>

<section class="it-data-section">
    <div class="it-data-container">
        <h2 class="it-data-title">
            IT, Data Centers, <span>And Servers</span>
        </h2>   
        
        <div class="it-data-timeline-wrapper">

            <div class="it-data-timeline-item">
                <div class="it-data-timeline-marker">✓</div>
                <div class="it-data-timeline-description">
                    <p>A static UPS for data center installations ensures data integrity, prevents server crashes, and avoids costly downtime. Data centers also require a static UPS for server applications to maintain stable voltage and frequency at all times.</p>
                </div>
            </div>

            <div class="it-data-timeline-item">
                <div class="it-data-timeline-marker">✓</div>
                <div class="it-data-timeline-description">
                    <p>In offices and IT environments, a static UPS for office use helps protect computers, routers, and networking devices from sudden shutdowns.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- section 5 ends --> 

























<!-- SECTION START -->

<style>

/* SECTION */
.lux-section{
    max-width:1200px;
    margin:50px auto;
    padding:0 20px;
    background:#fff;
}

/* HEADING */
.lux-heading{
    text-align:center;
    font-size:36px;
    font-weight:700;
    color:#212384;
    margin-bottom:60px;
}

.lux-heading span{
    color:#f37021;
}

/* GRID */
.lux-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:35px;
}

/* CARD */
.lux-card{
    padding:40px 30px;
    text-align:center;
    border-radius:14px;
    position:relative;
    border:1px solid #f37021;

    box-shadow:
    0 10px 25px rgba(0,0,0,0.08),
    0 20px 45px rgba(0,0,0,0.06);

    transition:all .4s ease;

    opacity:0;
    transform:translateY(40px);
    animation:cardReveal 1s forwards;
}

/* animation delay */
.lux-card:nth-child(1){animation-delay:.2s;}
.lux-card:nth-child(2){animation-delay:.4s;}
.lux-card:nth-child(3){animation-delay:.6s;}

/* reveal animation */
@keyframes cardReveal{
    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* ICON */
.lux-icon{
    width:70px;
    height:70px;
    margin:0 auto 20px;
    background:#212384;
    color:#fff;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:28px;

    transition:all .4s ease;
}

/* TITLE */
.lux-title{
    font-size:20px;
    font-weight:600;
    color:#212384;
    margin-bottom:12px;
}

/* TEXT */
.lux-text{
    font-size:16px;
    color:#555;
    line-height:1.7;
}

/* HOVER EFFECT */
.lux-card:hover{
    transform:translateY(-12px);
    box-shadow:
    0 20px 50px rgba(0,0,0,0.18),
    0 30px 70px rgba(0,0,0,0.12);
}

/* ICON HOVER */
.lux-card:hover .lux-icon{
    background:#f37021;
    transform:scale(1.15) rotate(5deg);
}

/* MOBILE */
@media(max-width:768px){

.lux-heading{
    font-size:28px;
}

}

</style>


<section class="lux-section">

<h2 class="it-data-title">
            Commercial And <span>Institutional Use</span>
        </h2> 

<div class="lux-grid">

<!-- CARD 1 -->
<div class="lux-card">

<div class="lux-icon">
<i class="fas fa-building"></i>
</div>

<div class="lux-title">Commercial Buildings</div>

<div class="lux-text">
A static UPS for commercial use is essential for malls, banks, corporate offices, and business complexes to ensure uninterrupted operations.
</div>

</div>


<!-- CARD 2 -->
<div class="lux-card">

<div class="lux-icon">
<i class="fas fa-school"></i>
</div>

<div class="lux-title">Educational Institutions</div>

<div class="lux-text">
Educational institutions require reliable UPS systems to maintain continuous power for classrooms, labs, servers, and essential equipment.
</div>

</div>


<!-- CARD 3 -->
<div class="lux-card">

<div class="lux-icon">
<i class="fas fa-elevator"></i>
</div>

<div class="lux-title">Lift & Elevator Systems</div>

<div class="lux-text">
In multi-storey buildings, static UPS systems ensure safe lift and elevator operation during power failures and prevent passenger entrapment.
</div>

</div>

</div>

</section>

<!-- SECTION END -->











<!-- section 7 starts --> 
<style>
/* Base Reset */
.ups-premium-section {
    padding: 50px 20px;
}

.ups-premium-container { max-width: 1000px; margin: 0 auto; }

/* Heading */
.ups-header-block { text-align: center; margin-bottom: 60px; }
.ups-header-block h2 { font-size: 30px; text-transform: uppercase; color: #1e2570; }
.ups-header-block span { color: #f37021; position: relative; display: inline-block; }
.ups-header-block span::after {
    content: ''; position: absolute; width: 100%; height: 3px; background: #f37021;
    bottom: -6px; left: 0; animation: underline 2s infinite alternate;
}
@keyframes underline { from { width: 0; } to { width: 100%; } }

/* SIDE-BY-SIDE GRID */
.ups-content-stack {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 35px;
}

/* BALANCED 3D CARDS */
.ups-block {
    background: #ffffff;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.07), 0 4px 6px rgba(0,0,0,0.05);
    border: 1px solid #eef0f7;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    transition: transform 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.ups-block:hover {
    transform: translateY(-10px);
    box-shadow: 0 16px 24px rgba(0,0,0,0.1), 0 8px 8px rgba(0,0,0,0.07);
    border-color: #f37021;
}

/* ICON DESIGN */
.ups-big-icon {
    width: 52px; height: 52px;
    fill: #f37021;
    margin-bottom: 20px;
    transition: transform 0.35s ease, fill 0.3s ease;
}

.ups-block:hover .ups-big-icon {
    transform: rotate(10deg) scale(1.12);
    fill: #1e2570;
}

.ups-block h3 { color: #1e2570; margin: 8px 0; font-size: 22px; font-weight: 600; }
.ups-block p { color: #2a2a4a; line-height: 1.75; font-size: 15px; margin-top: 12px; }

@media (max-width: 768px) { .ups-content-stack { grid-template-columns: 1fr; } }
</style>

<section class="ups-premium-section">
    <div class="ups-premium-container">

        <h2 class="it-data-title">
            Static UPS & <span>Inverter Solutions</span>
        </h2> 

        <div class="ups-content-stack">
            <div class="ups-block">
                <svg class="ups-big-icon" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-4.08 3.05-7.44 7-7.93v15.86z"/></svg>
                <h3>Single-Phase Systems</h3>
                <p>A single phase static UPS is suitable for smaller loads such as offices, clinics, and control rooms. On the other hand, a three phase static UPS is designed for high-capacity industrial and commercial applications where load balancing and efficiency are critical.</p>
            </div>

            <div class="ups-block">
                <svg class="ups-big-icon" viewBox="0 0 24 24"><path d="M12 2L4.5 20.29l.71.71L12 18l6.79 3 .71-.71L12 2zm0 4.14l4.28 10.09-4.28-1.89-4.28 1.89L12 6.14z"/></svg>
                <h3>Three-Phase Systems</h3>
                <p>Our static UPS inverter solutions are available in both single-phase and three-phase configurations to match your exact requirements.</p>
            </div>
        </div>
    </div>
</section>

<!-- section 7 ends --> 



















<!--  Section 8 Starts -->
<style>
/* --- DESKTOP VIEW (UNCHANGED) --- */
.key-features-section {
    padding: 30px 0px;
    margin-top: 0px;
    position: relative; 
    overflow: hidden;
}

.key-features-section::before,
.key-features-section::after {
    content:"";
    position:absolute;
    border-radius:50%;
    opacity:0.05;
    z-index:0;
}

.key-features-section::before {
    width: 400px;
    height: 400px;
    top: -50px;
    left: -50px;
}

.key-features-section::after {
    width: 500px;
    height: 500px;
    bottom: -100px;
    right: -100px;
}

.key-features-container {
    max-width: 1100px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
}

.key-section-heading {
    text-align: center;
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 45px;
    color: #212384;
    letter-spacing: 1px;
}

.key-section-heading span {
    color: #f37021;
    position: relative;
    display: inline-block;
}

.key-section-heading span::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 4px;
    background: #f37021;
    bottom: -10px;
    left: 0;
    border-radius: 5px;
    animation: underline-grow 2s infinite alternate;
}

@keyframes underline-grow {
    from { width: 0; }
    to { width: 100%; }
}

.key-features-subtext {
    font-size: 16px;
    color: #555;
    text-align: center;
    max-width: 900px;
    margin: 0 auto 50px;
    line-height: 1.8;
}

.key-feature-item {
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

.key-feature-item:nth-child(1) { animation-delay: 0.1s; }
.key-feature-item:nth-child(2) { animation-delay: 0.2s; }
.key-feature-item:nth-child(3) { animation-delay: 0.3s; }

.key-feature-item h3 {
    font-size: 20px;
    font-weight: 600;
    color: #212384;
    margin-bottom: 10px;
}

.key-feature-item p, 
.key-feature-item ul {
    font-size: 17px;
    color: black;
    line-height: 1.7;
}

@keyframes fadeInUp {
    0% { opacity: 0; transform: translateY(30px); }
    100% { opacity: 1; transform: translateY(0); }
}

/* --- UPDATED MOBILE VIEW (768px) --- */
@media (max-width: 768px) {
    .key-features-section {
        padding: 40px 15px; /* Added side padding so content doesn't touch screen edges */
        margin-top: 0;      /* Reset negative margin for better spacing on mobile */
    }

    .key-section-heading {
        font-size: 16px;    /* Slightly smaller for small screens */
        margin-bottom: 35px;
        line-height: 1.3;
    }

    .key-features-subtext {
        font-size: 15px;
        margin-bottom: 30px;
        padding: 0 10px;
    }

    .key-feature-item {
        padding: 20px;      /* Reduced internal padding */
        margin-bottom: 20px;
        border-left-width: 5px; /* Thicker border for better visual accent */
    }

    .key-feature-item h3 {
        font-size: 19px;
    }

    .key-feature-item p, 
    .key-feature-item ul {
        text-align : justify;
        font-size: 15px;    /* Better readability on mobile */
    }
    
    /* Optional: Hide decorative background circles if they cause horizontal scroll */
    .key-features-section::before,
    .key-features-section::after {
        display: none; 
    }
}
</style>

<section class="key-features-section">
    <div class="key-features-container">
        <h2 class="key-section-heading">
           Key Features Of Static UPS <span> Inverter Systems</span>
        </h2>

        <p class="key-features-subtext">
          High Reliability and Performance
        </p>

        <div class="key-feature-item">
            <p>A <strong>static inverter power backup</strong> system delivers uninterrupted power with minimal harmonic distortion, ensuring maximum equipment protection.</p>
        </div>

        <div class="key-feature-item">
            <p>A <strong>static UPS system</strong> uses advanced DSP and microcontroller-based technology to maintain precise voltage regulation even under fluctuating input conditions.</p>
        </div>
    </div>
</section>
<!--  Section 8 ends -->













<!-- Section 9 Start -->
<style>

.battery-section{
    padding:70px 20px;
}

/* layout */
.battery-layout{
    max-width:900px;
    margin:auto;
}

/* heading */
.battery-header{
    text-align:center;
    margin-bottom:60px;
}

.battery-title{
    font-size:34px;
    font-weight:800;
    color:#212384;
    margin-bottom: 50px;
}

.battery-title span{
    color:#f37021;
    position:relative;
}

.battery-title span::after{
    content:'';
    position:absolute;
    left:0;
    bottom:-8px;
    width:100%;
    height:4px;
    background:#f37021;
    border-radius:10px;
    animation:underlineMove 2s infinite alternate;
}

@keyframes underlineMove{
    from{width:0}
    to{width:100%}
}

/* card */
.battery-card{
    display:flex;
    align-items:center;
    gap:30px;
    padding:40px;
    border-radius:16px;
    background:#ffffff;
    border:1px solid #eee;
    box-shadow:0 10px 25px rgba(0,0,0,0.05);

    animation:cardFade 1s ease;
    transition:0.4s;
}

@keyframes cardFade{
    from{
        opacity:0;
        transform:translateY(40px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* hover */
.battery-card:hover{
    transform:translateY(-10px);
    box-shadow:0 18px 40px rgba(243,112,33,0.2);
    border-color:#f37021;
}

/* icon */
.battery-icon{
    min-width:80px;
    height:80px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:34px;
    color:#212384;
    background:#f4f6ff;

    animation:iconFloat 4s ease-in-out infinite;
}

@keyframes iconFloat{
    0%,100%{transform:translateY(0)}
    50%{transform:translateY(-8px)}
}

/* text */
.battery-description{
    font-size:17px;
    line-height:1.8;
    color:#333;
}

/* responsive */
@media(max-width:768px){

.battery-card{
flex-direction:column;
text-align:center;
padding:30px;
}

}

</style>

<section class="battery-section">

<div class="battery-layout">

<header class="battery-header">
<h2 class="key-section-heading">
           Battery Integration <span> And Backup</span>
        </h2>

</header>

<div class="battery-card">

<div class="battery-icon">
<i class="fas fa-car-battery"></i>
</div>

<p class="battery-description">
A static UPS with battery ensures extended backup time during prolonged outages. 
Our systems are compatible with lead-acid and lithium battery banks, allowing flexibility 
based on backup duration and budget.
</p>

</div>

</div>

</section>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Section 9 End -->








<!-- section 10 starts -->
<style>

.efficiency-cost{
    width:100%;
    padding:50px 8%;
}

/* section container */
.efficiency-wrapper{
    max-width:1100px;
    margin:auto;
    text-align:center;
}

/* heading */
.efficiency-cost-section-title{
    font-size:3rem;
    font-weight:800;
    margin-bottom:25px;
    color:#0b1c34;
}

.efficiency-cost-section-title span{
    color:#f37021;
    position:relative;
}

/* underline animation */
.efficiency-cost-section-title span::after{
    content:"";
    position:absolute;
    left:0;
    bottom:-6px;
    width:100%;
    height:3px;
    background:#f37021;
    border-radius:6px;
    animation:underlineMove 2s infinite alternate;
}

@keyframes underlineMove{
    from{transform:scaleX(.3);}
    to{transform:scaleX(1);}
}


/* content */
.content-body{
    max-width:750px;
    margin:0 auto 50px auto;
    animation:fadeUp 1.2s ease;
}

.efficiency-cost p{
    font-size:18px;
    line-height:1.8;
    color:#555;
}

.efficiency-cost p strong{
    color:#0b1c34;
    font-weight:700;
}


/* feature cards */
.efficiency-features{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:25px;
    margin-top:20px;
}

/* card */
.feature-card{
    background:#ffffff;
    padding:30px 20px;
    border-radius:16px;
    text-align:center;
    border:1px solid #ff5e00;
    transition:all .35s ease;
    animation:cardFloat 5s ease-in-out infinite;
}

.feature-card:nth-child(2){animation-delay:1s;}
.feature-card:nth-child(3){animation-delay:2s;}
.feature-card:nth-child(4){animation-delay:3s;}

/* hover */
.feature-card:hover{
    transform:translateY(-10px);
    box-shadow:0 15px 35px rgba(0,0,0,0.1);
    border-color:#f37021;
}

/* icon */
.feature-icon{
    font-size:36px;
    margin-bottom:12px;
    color:#0b1c34;
    transition:.3s;
}

.feature-card:hover .feature-icon{
    color:#f37021;
    transform:scale(1.2);
}

/* title */
.feature-card h4{
    font-size:18px;
    margin-bottom:8px;
    color:#ff5e00;
    font-weight: 600;
}

/* text */
.feature-card p{
    font-size:14px;
    color:#000000;
}


/* animations */

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

@keyframes cardFloat{
0%{transform:translateY(0)}
50%{transform:translateY(-6px)}
100%{transform:translateY(0)}
}


/* tablet */
@media(max-width:1000px){

.efficiency-features{
grid-template-columns:repeat(2,1fr);
}

}


/* mobile */
@media(max-width:600px){

.efficiency-cost-section-title{
font-size:2.2rem;
}

.efficiency-features{
grid-template-columns:1fr;
}

}

</style>


<section class="efficiency-cost">

<div class="efficiency-wrapper">

<h2 class="key-section-heading">
           Efficiency And <span> Cost Savings</span>
        </h2>

<div class="efficiency-features">

<div class="feature-card">
<div class="feature-icon">⚡</div>
<h4>High Efficiency</h4>
<p>Advanced inverter technology ensures optimal energy performance.</p>
</div>

<div class="feature-card">
<div class="feature-icon">💰</div>
<h4>Cost Saving</h4>
<p>Reduces electricity waste and long-term operational expenses.</p>
</div>

<div class="feature-card">
<div class="feature-icon">🔋</div>
<h4>Reliable Power</h4>
<p>Ensures consistent and uninterrupted power supply.</p>
</div>

<div class="feature-card">
<div class="feature-icon">🌱</div>
<h4>Eco Friendly</h4>
<p>Energy-efficient systems reduce environmental impact.</p>
</div>

</div>

</div>

</section>

<!-- section 10 ends -->







<!-- section 11 starts -->
<style>

/* ===== Premium Lavish Installation Section ===== */
.lavish-installation{
    padding:50px 20px;
    position:relative;
    overflow:hidden;
}

/* decorative background shapes */
.lavish-installation::before{
    content:"";
    position:absolute;
    width:300px;
    height:300px;
    background:linear-gradient(45deg,#2563eb10,#f3702115);
    top:-120px;
    right:-120px;
    border-radius:50%;
    animation:floatShape 8s ease-in-out infinite;
}

.lavish-installation::after{
    content:"";
    position:absolute;
    width:260px;
    height:260px;
    background:linear-gradient(45deg,#f3702115,#2563eb10);
    bottom:-120px;
    left:-120px;
    border-radius:50%;
    animation:floatShape 10s ease-in-out infinite;
}

@keyframes floatShape{
    0%{transform:translateY(0px)}
    50%{transform:translateY(20px)}
    100%{transform:translateY(0px)}
}

/* container */
.lavish-container{
    max-width:1000px;
    margin:auto;
    position:relative;
    z-index:2;
}

/* ===== Header ===== */

.lavish-header{
    text-align:center;
    margin-bottom:70px;
}

.lavish-title{
    font-size:38px;
    font-weight:800;
    color:#1e2a78;
    letter-spacing:.5px;
    position:relative;
}

.lavish-title span{
    color:#f37021;
}

/* animated underline */
.lavish-title::after{
    content:"";
    width:120px;
    height:4px;
    background:linear-gradient(90deg,#2563eb,#f37021);
    display:block;
    margin:15px auto 0;
    border-radius:10px;
    animation:lineGrow 3s infinite alternate;
}

@keyframes lineGrow{
    from{width:60px;}
    to{width:150px;}
}

/* ===== Card Wrapper ===== */

.lavish-card-wrapper{
    display:flex;
    flex-direction:column;
    gap:40px;
}

/* ===== Card Design ===== */

.lavish-card{
    display:flex;
    gap:25px;
    align-items:flex-start;
    padding:35px 30px;
    border-radius:18px;
    background:#ffffff;
    box-shadow:0 15px 40px rgba(0,0,0,0.08);
    position:relative;
    transition:all .4s ease;
    overflow:hidden;
}

/* glowing border animation */
.lavish-card::before{
    content:"";
    position:absolute;
    inset:0;
    border-radius:18px;
    padding:2px;
    background:linear-gradient(120deg,#2563eb,#f37021,#2563eb);
    -webkit-mask:
       linear-gradient(#fff 0 0) content-box,
       linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
            mask-composite: exclude;
    opacity:0;
    transition:0.4s;
}

.lavish-card:hover::before{
    opacity:1;
}

.lavish-card:hover{
    transform:translateY(-8px);
    box-shadow:0 20px 45px rgba(0,0,0,0.15);
}

/* ===== Icon ===== */

.lavish-icon{
    min-width:65px;
    height:65px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    background:linear-gradient(135deg,#2563eb,#1e2a78);
    color:#fff;
    font-size:26px;
    position:relative;
}

.lavish-icon::after{
    content:"";
    position:absolute;
    width:80px;
    height:80px;
    border-radius:50%;
    border:2px dashed #2563eb30;
    animation:rotateCircle 12s linear infinite;
}

@keyframes rotateCircle{
    from{transform:rotate(0deg)}
    to{transform:rotate(360deg)}
}

/* ===== Content ===== */

.lavish-content h3{
    font-size:1.6rem;
    font-weight:700;
    color:#212384;
    margin-bottom:12px;
}

.lavish-content p{
    font-size:1.05rem;
    line-height:1.8;
    color:#000000;
    margin:0;
}

.lavish-content strong{
    color:#212384;
}

/* ===== Responsive ===== */

@media(max-width:768px){

.lavish-title{
    font-size:26px;
}

.lavish-card{
    flex-direction:column;
    text-align:center;
}

.lavish-icon{
    margin:auto;
}

}

</style>

<section class="lavish-installation">

<div class="lavish-container">

<div class="lavish-header">

<h2 class="key-section-heading">
           Installation, Service <span> & Maintenance</span>
        </h2>
</div>

<div class="lavish-card-wrapper">

<div class="lavish-card">

<div class="lavish-icon">
<i class="fas fa-tools"></i>
</div>

<div class="lavish-content">
<h3>Professional Installation</h3>
<p>
Proper <strong>static UPS installation</strong> is crucial for system performance and safety.
Our expert engineers ensure correct sizing, wiring, grounding,
and commissioning to deliver reliable and efficient power backup
solutions for your facility.
</p>
</div>

</div>



<div class="lavish-card">

<div class="lavish-icon">
<i class="fas fa-tools"></i>
</div>

<div class="lavish-content">
<h3>Maintenance & AMC Support</h3>
<p>
Regular servicing ensures long life and reliability. We offer static UPS maintenance services and comprehensive static UPS AMC plans to keep your system operating at peak performance.
</p>
</div>

</div>

</div>

</div>
</section>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- section 11 ends -->













<!-- section 13 starts --> 
<style>
    /* --- Desktop Styles (Unchanged) --- */
    .local-support-section {
        padding: 50px 20px;
      
        display: flex;
        justify-content: center;
    }

    .local-support-section .support-container {
        max-width: 850px;
        width: 100%;
        padding: 45px;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        text-align: left;
        border: solid 2px #f37021;
    }

    .local-support-section .section-title {
        text-align: center; 
        font-size: 32px; 
        font-weight: 700;
        margin-bottom: 30px;
        margin-top: 0;
        color: #212384 ;
        letter-spacing: 1px;
    }

    .local-support-section .section-title span {
        color: #f37021;
        position: relative;
        display: inline-block;
    }

    .local-support-section .section-title span::after {
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

    .local-support-section .support-content p {
        color: black;
        line-height: 1.5;
        font-size: 17px;
        margin-bottom: 0;
    }

    .local-support-section .support-content strong {
        color: #212384 ;
        font-weight: 600;
    }

    .local-support-section .support-content em {
        font-style: italic;
        color: #1e2a78;
    }

    /* --- Updated Mobile View (768px and below) --- */
    @media (max-width: 768px) {
        .local-support-section {
            padding: 40px 15px; /* Reduced outer spacing */
        }

        .local-support-section .support-container {
            padding: 30px 20px; /* Tighter internal padding */
            border-left: none; /* Removing side border for more width */
            border-top: 5px solid #1e2a78; /* Moving accent to the top */
        }

        .local-support-section .section-title {
            font-size: 19px; /* Slightly smaller for mobile screens */
            margin-bottom: 25px;
            line-height: 1.3;
        }

        .local-support-section .support-content p {
            text-align : justify;
            font-size: 1rem; /* Better readability on small devices */
            line-height: 1.6;
        }
    }
</style>

<section class="local-support-section">
    <div class="support-container">
        <div class="support-content">
            <h2 class="section-title">
                Local Support & <span>Availability</span>
            </h2>
            <p>
                As a trusted <strong>Static UPS Supplier</strong>, we provide prompt service and technical support across India. 
                Customers searching for Static UPS near me can rely on our extensive service network for quick response.
            </p>
        </div>
    </div>
</section>
<!-- section 13 ends --> 




























<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

/* ===== Section ===== */

.ups-value-wrapper{
    padding:80px 20px;
    background:#ffffff;
}

/* ===== Your Heading Style ===== */

.section-title{
    text-align:center;
    font-size:36px;
    font-weight:700;
    margin-bottom:80px;
    color:#1e2a78;
    letter-spacing:1px;
}

.section-title span{
    color:#f37021;
    position:relative;
}

.section-title span::after{
    content:'';
    position:absolute;
    width:100%;
    height:4px;
    background:#f37021;
    bottom:-10px;
    left:0;
    border-radius:5px;
    animation:underline 2s infinite alternate;
}

@keyframes underline{
    from{width:0;}
    to{width:100%;}
}

/* ===== Cards Grid ===== */

.ups-grid{
    max-width:1100px;
    margin:auto;
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;
}

/* ===== Card ===== */

.ups-card{
    background:#ffffff;
    padding:40px 30px;
    border-radius:12px;
    text-align:center;
    box-shadow:0 12px 35px rgba(0,0,0,0.08);
    position:relative;
    animation:floatCard 4s ease-in-out infinite;
}

/* animated border */

.ups-card::before{
    content:"";
    position:absolute;
    inset:0;
    border-radius:12px;
    padding:2px;
    background:linear-gradient(120deg,#003366,#f37021,#003366);
    background-size:300% 300%;
    animation:borderMove 6s linear infinite;

    -webkit-mask:
        linear-gradient(#fff 0 0) content-box,
        linear-gradient(#fff 0 0);
    -webkit-mask-composite:xor;
            mask-composite:exclude;
}

/* ===== Icon ===== */

.ups-icon{
    font-size:42px;
    color:#003366;
    margin-bottom:20px;
    animation:pulseIcon 2s infinite;
}

/* ===== Title ===== */

.ups-card h3{
    font-size:22px;
    margin-bottom:15px;
    color:#1e2a78;
    font-weight: 600;
}

/* ===== Text ===== */

.ups-card p{
    font-size:16px;
    line-height:1.7;
    color:#000000;
}

/* ===== Animations ===== */

@keyframes borderMove{
    0%{background-position:0% 50%;}
    100%{background-position:300% 50%;}
}

@keyframes pulseIcon{
    0%{transform:scale(1);}
    50%{transform:scale(1.15);}
    100%{transform:scale(1);}
}

@keyframes floatCard{
    0%{transform:translateY(0px);}
    50%{transform:translateY(-10px);}
    100%{transform:translateY(0px);}
}

/* ===== Responsive ===== */

@media(max-width:900px){

.section-title{
    font-size:32px;
}

.ups-grid{
    grid-template-columns:1fr;
}

}

</style>


<section class="ups-value-wrapper">

<h2 class="section-title">
    Static UPS <span>Pricing & Value</span>
</h2>

<div class="ups-grid">

<div class="ups-card">
<div class="ups-icon">
<i class="fas fa-coins"></i>
</div>
<h3>Competitive Pricing</h3>
<p>
Static UPS price depends on system capacity and configuration,
but our solutions are designed to provide the best value without
compromising quality.
</p>
</div>

<div class="ups-card">
<div class="ups-icon">
<i class="fas fa-bolt"></i>
</div>
<h3>Reliable Performance</h3>
<p>
Our UPS systems ensure stable power backup and protect
critical equipment from power interruptions and voltage issues.
</p>
</div>

<div class="ups-card">
<div class="ups-icon">
<i class="fas fa-headset"></i>
</div>
<h3>Strong Support</h3>
<p>
We provide professional installation, maintenance,
and after-sales support to guarantee long-term performance.
</p>
</div>

</div>

</section>

















<!-- SECTION 15 : ANIMATED TIMELINE -->

<style>

.timeline-section{
    padding:50px 20px;
}

/* Heading */
.timeline-title{
    text-align:center;
    font-size:38px;
    font-weight:700;
    color:#212384;
    margin-bottom:70px;
}

.timeline-title span{
    color:#f37021;
}

/* Timeline container */

.timeline-container{
    max-width:1100px;
    margin:auto;
    position:relative;
}

/* vertical line */

.timeline-container::before{
    content:"";
    position:absolute;
    left:50%;
    transform:translateX(-50%);
    width:4px;
    height:100%;
    background:#f37021;
}

/* timeline item */

.timeline-item{
    width:50%;
    padding:30px 40px;
    position:relative;
    opacity:0;
    transform:translateY(60px);
    animation:fadeUp 1s forwards;
}

.timeline-item:nth-child(1){animation-delay:0.3s;}
.timeline-item:nth-child(2){animation-delay:0.6s;}
.timeline-item:nth-child(3){animation-delay:0.9s;}
.timeline-item:nth-child(4){animation-delay:1.2s;}

/* left side */

.timeline-item.left{
    left:0;
    text-align:right;
}

/* right side */

.timeline-item.right{
    left:50%;
}

/* timeline dot */

.timeline-item::before{
    content:"";
    position:absolute;
    top:105px;
    width:18px;
    height:18px;
    background:#f37021;
    border-radius:50%;
    box-shadow:0 0 0 5px #fff;
}

.timeline-item.left::before{
    right:-9px;
}

.timeline-item.right::before{
    left:-9px;
}

/* card */

.timeline-card{
    background:#ffffff;
    padding:25px;
    border-radius:10px;
    box-shadow:0 8px 25px rgba(0,0,0,0.08);
    transition:0.4s;
}

.timeline-card:hover{
    transform:translateY(-10px);
    box-shadow:0 15px 40px rgba(0,0,0,0.12);
    border:  solid 2px #ff5e00;
}

/* card title */

.timeline-card h3{
    color:#212384;
    font-size:20px;
    margin-bottom:10px;
    font-weight: 600;
}

/* card text */

.timeline-card p{
    font-size:16px;
    color:#000000;
    line-height:1.7;
}

/* animation */

@keyframes fadeUp{
    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* mobile */

@media(max-width:768px){

.timeline-container::before{
    left:20px;
}

.timeline-item{
    width:100%;
    padding-left:60px;
    padding-right:20px;
}

.timeline-item.left,
.timeline-item.right{
    left:0;
    text-align:left;
}

.timeline-item::before{
    left:12px;
}

}

</style>


<section class="timeline-section">

<h2 class="section-title">
Why Choose Indus Power <span>Industries Pvt. Ltd.</span>
</h2>

<div class="timeline-container">

<div class="timeline-item left">
<div class="timeline-card">
<h3>Engineering Excellence</h3>
<p>
Our static UPS systems are engineered using advanced power electronics
technology ensuring superior performance and long-term reliability.
</p>
</div>
</div>


<div class="timeline-item right">
<div class="timeline-card">
<h3>Industry Trusted</h3>
<p>
We supply high-quality static UPS solutions for industries, hospitals,
commercial buildings, and infrastructure projects across India.
</p>
</div>
</div>


<div class="timeline-item left">
<div class="timeline-card">
<h3>Reliable Performance</h3>
<p>
Our systems operate smoothly even in harsh electrical and environmental
conditions ensuring uninterrupted power supply.
</p>
</div>
</div>


<div class="timeline-item right">
<div class="timeline-card">
<h3>Customer Satisfaction</h3>
<p>
We focus on delivering dependable power backup solutions with excellent
service support and long-term customer relationships.
</p>
</div>
</div>


</div>
</section>

<!-- END TIMELINE -->


















<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- section 16 starts -->

<style>

/* ===== SECTION ===== */
.usecases-section{
    padding:50px 20px;
    background:#ffffff;
    position:relative;
    overflow:hidden;
}

/* background shapes */
.usecases-section::before{
    content:"";
    position:absolute;
    width:350px;
    height:350px;
    background:linear-gradient(135deg,#f37021,#ff9f5a);
    opacity:0.07;
    border-radius:50%;
    top:-120px;
    left:-120px;
}

.usecases-section::after{
    content:"";
    position:absolute;
    width:300px;
    height:300px;
    background:#212384;
    opacity:0.05;
    border-radius:50%;
    bottom:-100px;
    right:-100px;
}

/* ===== CONTAINER ===== */
.usecases-container{
    max-width:1200px;
    margin:auto;
    position:relative;
    z-index:2;
}

/* ===== TITLE ===== */
.usecases-section-title{
    text-align:center;
    font-size:36px;
    font-weight:700;
    margin-bottom:70px;
    color:#212384;
}

.usecases-section-title span{
    color:#f37021;
    position:relative;
}

.usecases-section-title span::after{
    content:"";
    position:absolute;
    left:0;
    bottom:-5px;
    height:4px;
    width:100%;
    background:#f37021;
    border-radius:4px;
    animation:underlineMove 2s infinite alternate;
}

@keyframes underlineMove{
    from{transform:scaleX(0.4);}
    to{transform:scaleX(1);}
}

/* ===== GRID ===== */
.usecases-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:30px;
}

/* ===== CARD ===== */
.usecase-card{
    background:#ffffff;
    border-radius:16px;
    padding:10px 20px;
    box-shadow:0 15px 40px rgba(0,0,0,0.08);
    transition:all .45s ease;
    position:relative;
    overflow:hidden;
    animation:fadeUp 1s ease forwards;
    border: solid 1px #ff5e00;
}

.usecase-card:hover{
    transform:translateY(-12px);
    box-shadow:0 20px 50px rgba(0,0,0,0.15);
}

/* animated top border */
.usecase-card::before{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:0%;
    height:4px;
    background:linear-gradient(90deg,#212384,#f37021);
    transition:0.5s;
}

.usecase-card:hover::before{
    width:100%;
}

/* ===== ICON ===== */
.usecase-card .icon{
    font-size:48px;
    margin-bottom:20px;
    color:#f37021;  /* ORANGE ICON */
    animation:floatIcon 4s ease-in-out infinite;
        margin-left: 135px;
}

/* ===== TEXT ===== */
.usecase-card h3{
    font-size:22px;
    color:#212384;
    margin-bottom:12px;
    font-weight: 600;
    text-align: center;
}

.usecase-card p{
    font-size:16px;
    color:#000000;
    line-height:1.7;
    text-align:justify;
}

/* ===== ANIMATIONS ===== */

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

@keyframes floatIcon{
    0%{transform:translateY(0);}
    50%{transform:translateY(-8px);}
    100%{transform:translateY(0);}
}

/* ===== MOBILE ===== */

@media(max-width:768px){

.usecases-section{
    padding:60px 15px;
}

.usecases-section-title{
    font-size:26px;
    margin-bottom:50px;
}

.usecase-card{
    padding:30px 22px;
}

}

</style>

<section class="usecases-section">

<div class="usecases-container">

<h2 class="usecases-section-title">
Use Cases Across <span>Industries</span>
</h2>

<div class="usecases-grid">

<div class="usecase-card">
<div class="icon"><i class="fas fa-industry"></i></div>
<h3>Industrial Applications</h3>
<p>
A static UPS for industrial use is essential in sectors like manufacturing,
pharmaceuticals, textiles, printing and packaging.
</p>
</div>

<div class="usecase-card">
<div class="icon"><i class="fas fa-gears"></i></div>
<h3>Factory Protection</h3>
<p>
A static UPS for factory setups prevents production losses and equipment
damage caused by power interruptions.
</p>
</div>

<div class="usecase-card">
<div class="icon"><i class="fas fa-building"></i></div>
<h3>Infrastructure & Elevators</h3>
<p>
For infrastructure projects, a static UPS for elevator and lift control
systems ensures safety and compliance with building standards.
</p>
</div>

</div>

</div>
</section>

<!-- section 16 ends -->
























<!-- section 17 starts -->

<style>

.future-ready-section{
    padding:50px 20px;
}

/* Container */
.future-ready-container{
    max-width:1100px;
    margin:auto;
}

/* Heading */
.future-ready-title{
    text-align:center;
    font-size:34px;
    font-weight:700;
    margin-bottom:60px;
    color:#212384;
}

.future-ready-title span{
    color:#f37021;
    position:relative;
}

.future-ready-title span::after{
    content:"";
    position:absolute;
    width:60%;
    height:3px;
    background:#f37021;
    left:20%;
    bottom:-8px;
    border-radius:10px;
}

/* Cards Layout */
.future-ready-wrapper{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:30px;
}

/* Card */
.future-card{
    background:#fff;
    padding:35px 30px;
    border-radius:12px;
    box-shadow:0 10px 25px rgba(0,0,0,0.07);
    transition:all .4s ease;
    position:relative;
    overflow:hidden;
}

/* Top Accent Line */
.future-card::before{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:0%;
    height:4px;
    background:linear-gradient(90deg,#212384,#f37021);
    transition:0.4s;
}

/* Hover */
.future-card:hover{
    transform:translateY(-8px);
    box-shadow:0 15px 35px rgba(0,0,0,0.12);
}

.future-card:hover::before{
    width:100%;
}

/* Icon */
.future-icon{
    font-size:32px;
    color:#f37021;
    margin-bottom:15px;
    animation:floatIcon 3s ease-in-out infinite;
        margin-left: 230px;
}

@keyframes floatIcon{
    0%{transform:translateY(0);}
    50%{transform:translateY(-6px);}
    100%{transform:translateY(0);}
}

/* Text */
.future-card p{
    font-size:16.5px;
    line-height:1.7;
    color:#000000;
    text-align:justify;
}

/* Responsive */
@media(max-width:768px){

.future-ready-title{
font-size:28px;
margin-bottom:40px;
}

.future-card{
padding:28px 22px;
}

}

</style>


<section class="future-ready-section">

<div class="future-ready-container">

<h2 class="future-ready-title">
Future-Ready Power <span>Backup Solutions</span>
</h2>

<div class="future-ready-wrapper">

<div class="future-card">

<div class="future-icon">
<i class="fas fa-bolt"></i>
</div>

<p>
With increasing automation and digitalization, the need for high-quality power backup continues to grow. A static inverter combined with intelligent monitoring ensures future-ready protection for evolving electrical loads.
</p>

</div>


<div class="future-card">

<div class="future-icon">
<i class="fas fa-microchip"></i>
</div>

<p>
Our heavy duty static UPS systems are scalable and customizable, making them suitable for both current and future expansion needs.
</p>

</div>


</div>
</div>

</section>

<!-- section 17 ends -->








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

        <p>Invest in Reliable Static UPS Power Backup. 
                A static UPS inverter is not just a backup device—it is a critical investment in safety, productivity, and operational continuity. 
                Whether you need a static UPS for machines, a static UPS for hospital, or a static UPS for data center, choosing the right system makes all the difference.</p>

        <p>At Indus Power Industries Pvt. Ltd., we design and deliver robust, efficient, and dependable static UPS solutions tailored to your specific requirements. From design and installation to maintenance and AMC, we are your complete power backup partner.</p>

        <p>If you are looking for a static UPS near me, competitive static UPS price, professional static UPS installation, or long-term static UPS maintenance, our team is ready to assist you.</p>

        <p>
                Power continuity is business continuity—choose a static UPS system you can trust.
            </p>
   
    </div>
</section>
<!-- conclusion End -->



<?php include ('footer.php'); ?>

</body>
</html>