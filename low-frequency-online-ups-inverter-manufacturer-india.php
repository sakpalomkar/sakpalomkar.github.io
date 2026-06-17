<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indusups</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat';
    }
    body {
        overflow-x: hidden;
    }
    /* utility classes used across the page */
    .section-heading {
        text-align: center;
        font-size: 38px;
        font-weight: 700;
        margin-bottom: 50px;
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
    /* hero section */
    .hero-banner {
        position: relative;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        overflow: hidden;
        color: #fff;
    }
    .hero-banner::before {
        content: "";
        position: absolute;
        inset: 0;
        background: url("img/about\ us.jpg") center/cover no-repeat;
        filter: brightness(0.55);
        transform: scale(1.1);
        animation: zoomEffect 10s ease-in-out infinite alternate;
    }
    .hero-banner::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.24));
    }
    .hero-content {
        position: relative;
        z-index: 2;
    }
    .hero-content h1 {
        font-size: 37px;
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 15px;
        animation: slideDown 1s ease forwards;
    }
    .breadcrumb-nav {
        font-size: 18px;
        font-weight: 400;
        animation: fadeUp 1.2s ease forwards;
    }
    .breadcrumb-nav a {
        color: #fff;
        text-decoration: none;
        transition: 0.3s;
    }
    .breadcrumb-nav a:hover {
        color: #ff5e00;
    }
    .breadcrumb-nav span {
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
        .hero-content h1{ font-size: 36px; }
        .breadcrumb-nav{ font-size: 15px; }
    }

    /* product gallery */
    .product-gallery {
        width:100%;
        padding:40px 8%;
        text-align:center;
        position:relative;
        overflow:hidden;
    }
    .image-holder {
        position:relative;
        z-index:1;
        display:flex;
        justify-content:center;
        gap: 30px;
        flex-wrap: wrap;
        margin-bottom:30px;
    }
    .display-image {
        width:300px;
        cursor:pointer;
        border-radius:20px;
        transform:translateY(60px);
        opacity:0;
        animation: fadeUpImg 1.2s ease forwards;
        transition:0.4s ease;
    }
    .display-image:hover {
        transform:translateY(0) scale(1.05) rotateX(5deg);
    }
    @keyframes fadeUpImg {
        to { transform:translateY(0); opacity:1; }
    }
    .action-panel {
        position:relative;
        z-index:1;
        display:flex;
        justify-content:center;
        gap:40px;
        flex-wrap:wrap;
    }
    .cta-button {
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
        display: inline-block;
    }
    .cta-button::before {
        content:"";
        position:absolute;
        inset:0;
        border-radius:50px;
        padding:2px;
        background: linear-gradient(90deg,#f37021,#212384,#f37021);
        -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        animation: borderMove 4s linear infinite;
    }
    @keyframes borderMove {
        0%{ background-position:0%; }
        100%{ background-position:200%; }
    }
    .cta-button:hover {
        background:#f37021;
        color:#fff;
        box-shadow:0 15px 40px rgba(243,112,33,0.4);
        transform:translateY(-5px);
    }
    .lightbox-popup {
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
    .lightbox-popup.active {
        opacity:1;
        visibility:visible;
    }
    .lightbox-popup img {
        max-width:90%;
        max-height:90%;
        border-radius:20px;
        box-shadow:0 30px 60px rgba(0,0,0,0.5);
        animation: zoomIn 0.4s ease;
    }
    @keyframes zoomIn {
        from{ transform:scale(0.8); }
        to{ transform:scale(1); }
    }
    .close-icon {
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
    .close-icon span {
        position:absolute;
        width:22px;
        height:2px;
        background:#fff;
        transition:0.4s ease;
    }
    .close-icon span:nth-child(1){ transform:rotate(45deg); }
    .close-icon span:nth-child(2){ transform:rotate(-45deg); }
    .close-icon:hover {
        transform:scale(1.15) rotate(180deg);
        background:linear-gradient(135deg,#f37021,#212384);
    }
    @media(max-width:768px){
        .display-image{ width:260px; }
        .cta-button{ padding:14px 30px; font-size:14px; }
        .close-icon{ top:20px; right:20px; width:45px; height:45px; }
    }

    
    /* why choose / benefits section (timeline style) */
    .benefits-section {
        padding: 30px 8%;
        position: relative;
    }
    .benefits-container {
        max-width: 1100px;
        margin: auto;
    }
    .timeline-wrapper {
        position: relative;
        margin-left: 30px;
    }
    .timeline-wrapper::before {
        content: "";
        position: absolute;
        left: 0;
        top: -13px;
        width: 4px;
        height: 100%;
        background: linear-gradient(to bottom, #f37021, #212384);
        border-radius: 20px;
    }
    .timeline-item {
        position: relative;
        padding-left: 60px;
        margin-bottom: 45px;
        opacity: 0;
        transform: translateX(-40px);
        animation: slideRight 0.8s ease forwards;
    }
    .timeline-item:nth-child(1){ animation-delay:0.2s; }
    .timeline-item:nth-child(2){ animation-delay:0.4s; }
    .timeline-item:nth-child(3){ animation-delay:0.6s; }
    .timeline-item:nth-child(4){ animation-delay:0.8s; }
    .timeline-marker {
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
    .timeline-description {
        background: #ffffff;
        padding: 20px 25px;
        border-radius: 14px;
        border-left: 4px solid #212384;
        box-shadow: 0 10px 25px rgba(33,35,132,0.08);
        transition: all 0.4s ease;
    }
    .timeline-description p {
        margin: 0;
        font-size: 17px;
        color: #333;
        line-height: 1.6;
    }
    .timeline-item:hover .timeline-description {
        transform: translateX(8px);
        box-shadow: 0 15px 35px rgba(243,112,33,0.15);
    }
    .timeline-item:hover .timeline-marker {
        transform: scale(1.15);
        background: linear-gradient(135deg, #212384, #f37021);
    }
    @keyframes slideRight {
        to { opacity: 1; transform: translateX(0); }
    }

    /* applications flip cards */
    .applications-section {
        padding:30px 20px;
        background:#ffffff;
    }
    .container {
        max-width:1200px;
        margin:auto;
    }
    .card-grid {
        display:grid;
        grid-template-columns:repeat(3,1fr);
        gap:20px;
        justify-items:center;
    }
    .flip-card {
        perspective:1000px;
        width:350px;
        height:380px;
    }
    .flip-inner {
        position:relative;
        width:100%;
        height:100%;
        transition:transform 0.8s;
        transform-style:preserve-3d;
    }
    .flip-card:hover .flip-inner {
        transform:rotateY(180deg);
    }
    .front-face, .back-face {
        position:absolute;
        width:100%;
        height:100%;
        backface-visibility:hidden;
        border-radius:18px;
        padding:25px;
        box-shadow:0 15px 35px rgba(33,35,132,0.12);
    }
    .front-face {
        background: white;
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        text-align:center;
        border: solid 2px #212384;
    }
    .front-face h3 {
        font-size:20px;
        margin-bottom:10px;
        color: #212384;
    }
    .front-face span {
        font-size:40px;
        font-weight:700;
        color:#f37021;
    }
    .back-face {
        background:#ffffff;
        color:#444;
        transform:rotateY(180deg);
        border:2px solid #f37021;
        overflow-y:auto;
    }
    .back-face h3 {
        font-size: 20px;
    color: #212384;
    font-weight: 600;
    margin-top: 130px;
    text-align: center;
    }
    .back-face p, .back-face ul {
        font-size:14px;
        line-height:1.5;
        text-align: justify;
        color: #000000;
    }
    .back-face ul {
        margin:8px 0 8px 18px;
    }
    .back-face ul li::before {
        content:"●";
        color:#f37021;
        font-weight:bold;
        display:inline-block;
        width:1em;
        margin-left:-1em;
    }
    @media(max-width:992px){
        .card-grid{ grid-template-columns:repeat(2,1fr); }
    }
    @media(max-width:600px){
        .card-grid{ grid-template-columns:1fr; }
    }

    /* features section with fadeInUp */
    .features-section {
        padding: 30px 0px;
        position: relative;
        overflow: hidden;
    }
    .features-container {
        max-width: 1100px;
        margin: 0 auto;
        z-index: 1;
        position: relative;
    }
    .feature-item {
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
    .feature-item:nth-child(1) { animation-delay: 0.1s; }
    .feature-item:nth-child(2) { animation-delay: 0.2s; }
    .feature-item:nth-child(3) { animation-delay: 0.3s; }
    .feature-item h3 {
        font-size: 20px;
        font-weight: 600;
        color: #212384;
        margin-bottom: 10px;
    }
    .feature-item p, .feature-item ul {
        font-size: 15px;
        color: #555;
        line-height: 1.7;
    }
    @keyframes fadeInUp {
        0% { opacity: 0; transform: translateY(30px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    /* data table like offline page */
    .data-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 8px;
        margin: 2rem 0 2.2rem 0;
        font-size: 1rem;
    }
    .data-table-bordered {
        border-radius: 28px;
        overflow: hidden;
        box-shadow: 0 18px 35px -8px rgba(0,0,0,0.1);
    }
    .data-table td, .data-table th {
        padding: 1.1rem 0.8rem;
        background: white;
        transition: all 0.25s ease;
    }
    .data-table th {
        background: #212384 !important;
        color: white;
        font-weight: 600;
        text-align: center;
    }
    .data-table tbody tr:hover td {
        background: #fff7f0;
        transform: scale(1.01);
        box-shadow: 0 4px 12px rgba(241,90,36,0.12);
    }
    .data-table td:first-child {
        font-weight: 600;
        color: #212384;
        border-left: 3px solid #f37021;
    }

    /* TABS (from the second page but with design consistency) */
    .tab-navigation-wrap {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        margin: 40px 0 30px;
        justify-content: center;
    }
    .tab-item {
        padding: 1rem 2.8rem;
        font-size: 1.2rem;
        font-weight: 700;
        background: white;
        border: none;
        border-radius: 60px;
        box-shadow: 0 10px 20px -8px rgba(33,35,132,0.2);
        color: #212384;
        cursor: pointer;
        transition: all 0.4s;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border: 1px solid rgba(33,35,132,0.1);
    }
    .tab-item i { color: #f37021; }
    .tab-item.current {
        background: #212384;
        color: white;
        box-shadow: 0 25px 30px -10px #21238480;
    }
    .tab-item.current i { color: white; }
    .tab-item:hover:not(.current) {
        background: #f37021;
        color: white;
    }
    .tab-item:hover:not(.current) i { color: white; }
    .pane-content {
        display: none;
        animation: fadeGlide 0.7s ease forwards;
    }
    .pane-content.active { display: block; }
    @keyframes fadeGlide {
        0% { opacity: 0; transform: translateY(15px); }
        100% { opacity: 1; transform: translateY(0); }
    }
</style>
</head>
<body>

<?php include('navbar.php'); ?>

<!-- HERO SECTION -->
<section class="hero-banner">
    <div class="hero-content">
        <h1>Low Frequency Online UPS Inverter Manufacturer India</h1>
        <div class="breadcrumb-nav">
            <a href="#">Home</a> &nbsp;»&nbsp; <a href="#">Products</a> &nbsp;»&nbsp; <a href="#">Online UPS</a> &nbsp;»&nbsp; <span>Low Frequency Online UPS Inverter</span>
        </div>
    </div>
</section>

<!-- PRODUCT IMAGES + LIGHTBOX -->
<section class="product-gallery">
    <div class="image-holder">
        <img src="img/Low Frequency1.png" class="display-image" alt="LF UPS 1">
        <img src="img/Low Frequency2.png" class="display-image" alt="LF UPS 2">
        <img src="img/Low Frequency3.png" class="display-image" alt="LF UPS 3">
    </div>
    <div class="action-panel">
        <a href="#" class="cta-button">DOWNLOAD BROCHURE</a>
        <a href="#" class="cta-button" onclick="openEnquiry()">ENQUIRE NOW</a>
    </div>
</section>

<!-- Lightbox -->
<div class="lightbox-popup" id="imageLightbox">
    <div class="close-icon" id="closeLightbox">
        <span></span><span></span>
    </div>
    <img src="img/Low Frequency1.png" alt="Enlarged view">
</div>

<script>
    const images = document.querySelectorAll(".display-image");
    const lightbox = document.getElementById("imageLightbox");
    const lightboxImg = lightbox.querySelector("img");
    const closeBtn = document.getElementById("closeLightbox");

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

<!-- INFO PANEL (like Understanding Offline UPS) -->
<!-- INFO PANEL -->
<style>
.info-panel{
    padding:40px 5%;
    position:relative;
    overflow:hidden;
}

/* Background floating shapes */
.info-panel::before,
.info-panel::after{
    content:"";
    position:absolute;
    border-radius:50%;
    opacity:0.1;
    z-index:0;
}

.info-panel::before{
    width:400px;
    height:400px;
    background:linear-gradient(135deg,#212384,#f37021);
    top:-100px;
    right:-150px;
}

.info-panel::after{
    width:300px;
    height:300px;
    background:linear-gradient(135deg,#f37021,#212384);
    bottom:-80px;
    left:-120px;
}

/* Grid */
.grid-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(320px,1fr));
    gap:40px;
    position:relative;
    z-index:1;
}

/* Cards */
.content-card{
    background:#ffffff;
    padding:35px 30px;
    border-radius:25px;
    border:2px solid #f37021;
    transition:all 0.35s ease;
}

/* Text */
.content-card p{
    font-size:17px;
    line-height:1.6;
    color:#444;
    margin:0;
    text-align:justify;
}

.content-card strong{
    color:#212384;
}

/* Simple Popup Hover */
.content-card:hover{
    transform:scale(1.06);
    box-shadow:0 30px 70px rgba(0,0,0,0.15);
    border-color:#1e2a78;
}

/* Blue text on hover */
.content-card:hover p{
    color:#1e2a78;
}

.content-card:hover strong{
    color:#1e2a78;
}
</style>

<section class="info-panel">

<h2 class="section-heading">
Robust Power Protection for <span>Mission-Critical Applications</span>
</h2>

<div class="grid-container">

<div class="content-card">
<p>
In an environment where uninterrupted power is the backbone of operations, a low frequency online UPS stands as one of the most reliable and time-tested power protection solutions for industries, hospitals, data centers, and commercial establishments.
</p>
</div>

<div class="content-card">
<p>
A modern online UPS low frequency system is engineered to provide complete electrical isolation, superior surge handling capability, and long-term durability, making it ideal for heavy-duty and mission-critical environments.
</p>
</div>

<div class="content-card">
<p>
Unlike lightweight systems, a low frequency UPS system is built with a robust transformer-based design that ensures reliability during overloads, short circuits, and frequent power disturbances.
</p>
</div>

</div>
</section>














    <!-- Tab 2: Technical specs table -->
    <div class="pane-content" id="tab2">
        <h2 class="section-heading">Technical <span>Specifications</span></h2>
        <table class="data-table data-table-bordered">
            <tr><th>Specification</th><th>Details</th></tr>
            <tr><td>Frequency</td><td>50 Hz</td></tr>
            <tr><td>Power factor</td><td>0.8</td></tr>
            <tr><td>Voltage regulation</td><td>±1%</td></tr>
            <tr><td>Crest factor</td><td>3:1</td></tr>
            <tr><td>Waveform</td><td>Pure sine wave</td></tr>
            <tr><td>Harmonic distortion</td><td>THD < 3%</td></tr>
            <tr><td>Overload rating</td><td>150% for 30 seconds</td></tr>
            <tr><td>Transient response</td><td>5% for full load change</td></tr>
            <tr><td>DC bus volt ripple</td><td>< 2%</td></tr>
            <tr><td>Inverter Efficiency</td><td>> 95%</td></tr>
            <tr><td>Overall Efficiency</td><td>> 92%</td></tr>
            <tr><td>Protection</td><td>O/p over/under voltage, overload, short circuit, over temperature</td></tr>
            <tr><td>Audio alarm</td><td>Rectifier trip, overload, mains fail, battery low</td></tr>
        </table>
    </div>
</div>

<script>
    function switchTab(tabId) {
        const tab1 = document.getElementById('tab1');
        const tab2 = document.getElementById('tab2');
        const btn1 = document.getElementById('tab1Btn');
        const btn2 = document.getElementById('tab2Btn');
        if (tabId === 1) {
            tab1.classList.add('active');
            tab2.classList.remove('active');
            btn1.classList.add('current');
            btn2.classList.remove('current');
        } else {
            tab2.classList.add('active');
            tab1.classList.remove('active');
            btn2.classList.add('current');
            btn1.classList.remove('current');
        }
    }
</script>

<!-- Key Benefits (timeline style) -->
<section class="benefits-section">
    <div class="benefits-container">
        <h2 class="section-heading">Key Benefits of <span>Low Frequency Online UPS</span></h2>
        <div class="timeline-wrapper">
            <div class="timeline-item"><div class="timeline-marker">✓</div><div class="timeline-description"><p>Robust transformer-based isolation</p></div></div>
            <div class="timeline-item"><div class="timeline-marker">✓</div><div class="timeline-description"><p>High overload & short circuit capacity</p></div></div>
            <div class="timeline-item"><div class="timeline-marker">✓</div><div class="timeline-description"><p>Superior surge and noise protection</p></div></div>
            <div class="timeline-item"><div class="timeline-marker">✓</div><div class="timeline-description"><p>Ideal for industrial & medical loads</p></div></div>
            <div class="timeline-item"><div class="timeline-marker">✓</div><div class="timeline-description"><p>Long operational life & low maintenance</p></div></div>
            <div class="timeline-item"><div class="timeline-marker">✓</div><div class="timeline-description"><p>Zero transfer time (true online)</p></div></div>
        </div>
    </div>
</section>















<!-- Low Frequency Start -->
 <style>
    /* Section Heading */
    h2.section-heading {
      text-align: center;
      color: #212384;
      font-weight: 700;
      margin-bottom: 80px;
      font-size: 2rem;
      margin-top: 50px;
    }

    h2.section-heading span {
      font-weight: 700;
      color: #f37021;
    }

    /* Card Container */
    .card-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 45px;
    }

    /* Individual Card */
    .ups-card {
      background: linear-gradient(145deg, #ffffff, #f9f9f9);
      border-radius: 25px;
      padding: 30px;
      box-shadow: 0 15px 35px rgba(0,0,0,0.1);
      position: relative;
      overflow: hidden;
      border: 1px solid #e6e6e6;
      transition: transform 0.6s ease, box-shadow 0.6s ease;
    }

    /* Gradient overlay animation */
    .ups-card::before {
      content: "";
      position: absolute;
      top: 0;
      left: -120%;
      width: 100%;
      height: 100%;
      background: linear-gradient(120deg, rgba(243,112,33,0.1), rgba(243,112,33,0.25), rgba(243,112,33,0.1));
      transform: skewX(-20deg);
      transition: left 0.8s ease-in-out;
    }

    .ups-card:hover::before {
      left: 120%;
    }

    /* Hover effect */
    .ups-card:hover {
      transform: translateY(-20px) scale(1.05);
      box-shadow: 0 30px 60px rgba(0,0,0,0.15);
    }

    /* Card Title */
    .ups-card h3 {
      font-size: 20px;
      margin-bottom: 15px;
      color: #212384;
      font-weight: 700;
      text-align: center;
      transition: color 0.4s;
    }

    .ups-card:hover h3 {
      color: #f37021;
    }

    /* Card Paragraph */
    .ups-card p {
      font-size: 15px;
      line-height: 1.4;
      color: #333;
      text-align: center;
      transition: color 0.4s;
    }

    .ups-card:hover p {
      color: #212384;
    }

    /* Highlighted text */
    .ups-card span {
      font-weight: 700;
    }

    /* Responsive adjustments */
    @media (max-width: 600px) {
      h2.section-heading {
        font-size: 1.8rem;
        margin-bottom: 25px;
      }
    }
  </style>


  <div style="max-width:1200px; margin:0 auto; padding:0 20px;">

    <h2 class="section-heading">
      Low Frequency <span>Online UPS Solutions</span>
    </h2>

    <div class="card-container">
      <div class="ups-card">
        <h3>Understanding Low Frequency <span>Online UPS Technology</span></h3>
        <p>A low frequency online UPS operates on true double-conversion technology, converting AC → DC → AC continuously for zero transfer time, ideal for data center and server environments.</p>
      </div>

      <div class="ups-card">
        <h3>Critical Applications <span>Across Industries</span></h3>
        <p>Healthcare, manufacturing, and commercial sectors rely on online UPS for hospital, industrial, and commercial use to ensure uninterrupted operation of sensitive devices and machinery.</p>
      </div>

      <div class="ups-card">
        <h3>Single & Three Phase <span>LF Online UPS</span></h3>
        <p>We offer single and three-phase low frequency UPS solutions like 5kVA, 10kVA, 20kVA to handle heavy loads and high inrush currents efficiently.</p>
      </div>

      <div class="ups-card">
        <h3>Isolation Transformer Based <span>UPS</span></h3>
        <p>LF online UPS with isolation transformer protects sensitive equipment from surges, electrical noise, and grounding issues.</p>
      </div>

      <div class="ups-card">
        <h3>Technology, Performance, & <span>Design</span></h3>
        <p>Our DSP and IGBT-based UPS systems ensure precise monitoring, high efficiency, and superior durability for critical operations.</p>
      </div>

      <div class="ups-card">
        <h3>Installation, Service, & <span>AMC Support</span></h3>
        <p>We provide professional installation, service, maintenance, and comprehensive AMC programs to keep your UPS running smoothly.</p>
      </div>

    </div>
  </div>
<!-- Low Frequency End -->















<!-- Applications flip cards -->
<section class="applications-section">
    <div class="container">
        <h2 class="section-heading">Applications Of <span>Low Frequency Online UPS</span></h2>
        <div class="card-grid">
            <div class="flip-card"><div class="flip-inner"><div class="front-face"><span>01</span><h3>Hospitals & Medical</h3></div><div class="back-face"><h3>Hospitals & Medical</h3><p>Life-saving equipment, ventilators, diagnostic devices rely on clean, isolated power.</p></div></div></div>
            <div class="flip-card"><div class="flip-inner"><div class="front-face"><span>02</span><h3>Data Centers & IT</h3></div><div class="back-face"><h3>Data Centers & IT</h3><p>Servers, storage, network switches need zero downtime and pure sine wave.</p></div></div></div>
            <div class="flip-card"><div class="flip-inner"><div class="front-face"><span>03</span><h3>Industrial Automation</h3></div><div class="back-face"><h3>Industrial Automation</h3><p>PLCs, CNC machines, control panels benefit from high inrush handling.</p></div></div></div>
            <div class="flip-card"><div class="flip-inner"><div class="front-face"><span>04</span><h3>Telecom & Networking</h3></div><div class="back-face"><h3>Telecom & Networking</h3><p>BTS towers, routers, communication links stay online during outages.</p></div></div></div>
            <div class="flip-card"><div class="flip-inner"><div class="front-face"><span>05</span><h3>Commercial Buildings</h3></div><div class="back-face"><h3>Commercial Buildings</h3><p>Lifts, security systems, fire alarms, emergency lighting.</p></div></div></div>
        </div>
    </div>
</section>
















<!-- Features section (like offline page) start -->
<section class="features-section">
    <div class="features-container">
        <h2 class="section-heading">Features Of <span>INDUS Low Frequency Online UPS</span></h2>
        <div class="feature-item"><h3>DSP Based Control</h3><p>Advanced digital signal processor for precise regulation and fast response.</p></div>
        <div class="feature-item"><h3>IGBT Inverter Technology</h3><p>High efficiency, low heat generation, reliable performance.</p></div>
        <div class="feature-item"><h3>Galvanic Isolation</h3><p>Built-in isolation transformer protects against common mode noise and transients.</p></div>
        <div class="feature-item"><h3>Pure Sine Wave Output</h3><p>Clean power suitable for all types of loads including sensitive electronics.</p></div>
        <div class="feature-item"><h3>Comprehensive Protection</h3><p>Overload, short circuit, over temperature, battery deep discharge protection.</p></div>
        <div class="feature-item"><h3>LCD Display & Alarms</h3><p>Real-time status of input/output, battery, load, and fault indications.</p></div>
        <div class="feature-item"><h3>Auto / Manual Bypass</h3><p>Maintenance without power interruption.</p></div>
        <div class="feature-item"><h3>High Efficiency & Low Noise</h3><p>Energy saving design with quiet operation.</p></div>
    </div>
</section>
<!-- Features section (like offline page) End -->




















<!-- Why Low Frequency Start -->
<style>

.benefits-section{
    padding:30px 20px;
    position:relative;
    overflow:hidden;
}

/* subtle animated background */

.benefits-section::before{
    content:"";
    position:absolute;
    width:500px;
    height:500px;
    opacity:.05;
    border-radius:50%;
    top:-200px;
    left:-200px;
    filter:blur(90px);
    animation:floatBg 12s infinite alternate ease-in-out;
}

@keyframes floatBg{
    from{transform:translateY(0);}
    to{transform:translateY(50px);}
}

.benefits-container{
    max-width:1100px;
    margin:auto;
    position:relative;
    z-index:2;
}

/* heading */

.section-heading{
    text-align:center;
    font-size:42px;
    font-weight:700;
    margin-bottom:70px;
}

.section-heading span{
    color:#f37021;
}

/* grid layout */

.benefits-box{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:30px;
}

/* modern card */

.benefit-item{
    background:#fff;
    padding:35px 30px;
    border-radius:14px;
    display:flex;
    align-items:center;
    gap:18px;
    box-shadow:0 15px 40px rgba(0, 0, 0, 0.03);
    transition:.35s;
    position:relative;
    overflow:hidden;
}

/* orange top line animation */

.benefit-item::before{
    content:"";
    position:absolute;
    top:0;
    left:0;
    height:3px;
    width:0%;
    background:#f37021;
    transition:.4s;
}

.benefit-item:hover::before{
    width:100%;
}

/* hover lift */

.benefit-item:hover{
    transform:translateY(-10px);
    box-shadow:0 25px 60px rgba(0,0,0,0.12);
}

/* icon circle */

.benefit-item i{
    width:50px;
    height:50px;
    background:#fff3ec;
    color:#f37021;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:20px;
    transition:.35s;
}

/* icon animation */

.benefit-item:hover i{
    background:#f37021;
    color:#fff;
    transform:rotate(10deg) scale(1.1);
}

/* text */

.benefit-text{
    font-size:18px;
    font-weight:500;
    line-height:1.6;
}

/* entry animation */

.benefit-item{
    opacity:0;
    transform:translateY(30px);
    animation:fadeUp 1s forwards;
}

.benefit-item:nth-child(1){animation-delay:.2s;}
.benefit-item:nth-child(2){animation-delay:.4s;}
.benefit-item:nth-child(3){animation-delay:.6s;}
.benefit-item:nth-child(4){animation-delay:.8s;}

@keyframes fadeUp{
    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* responsive */

@media(max-width:768px){

.section-heading{
    font-size:30px;
}

.benefit-item{
    padding:25px;
}

.benefit-text{
    font-size:16px;
}

}

</style>


<section class="benefits-section">
<div class="benefits-container">

<h2 class="section-heading">
Why Low Frequency Online UPS <span>Is A Smart Investment</span>
</h2>

<div class="benefits-box">

<div class="benefit-item">
<i class="fas fa-check-circle"></i>
<div class="benefit-text">
Protection of sensitive equipment
</div>
</div>

<div class="benefit-item">
<i class="fas fa-check-circle"></i>
<div class="benefit-text">
Zero downtime for critical loads
</div>
</div>

<div class="benefit-item">
<i class="fas fa-check-circle"></i>
<div class="benefit-text">
Long equipment life and safety
</div>
</div>

<div class="benefit-item">
<i class="fas fa-check-circle"></i>
<div class="benefit-text">
High reliability under harsh conditions
</div>
</div>

</div>

</div>
</section>
<!-- Why Low Frequency Start -->






















<!-- Detailed technical table for LF UPS (3 phase I/P - 3 phase O/P) from original content -->
 <style>
       /* table container */
.table-wrapper{
    width: 100%;
    margin:auto;
    background:#ffffff;
    border-radius:18px;
    box-shadow:0 15px 35px rgba(0,0,0,0.1);
    font-family:'Montserrat';
}

/* table */
.spec-table{
    width:100%;
    border-collapse:collapse;
}

/* heading row */
.spec-table thead{
    background:#212384;
}

.spec-table thead th{
    color:#ffffff;
    padding:16px;
    font-size:18px;
    text-align:left;
    letter-spacing:0.5px;
}

/* rows */
.spec-table tbody tr{
    border-bottom:1px solid #eaeaea;
    transition:all 0.3s ease;
}

/* zebra effect */
.spec-table tbody tr:nth-child(even){
    background:#f7f7ff;
}

/* hover effect */
.spec-table tbody tr:hover{
    background:#fff3eb;
    transform:scale(1.01);
    border: solid 2px #f37021;
}

/* cells */
.spec-table td{
    padding:15px 16px;
    font-size:15px;
    color:#333;
}

/* first column style */
.spec-table td:first-child{
    font-weight:600;
    color:#212384;
    width:35%;
}

/* second column */
.spec-table td:last-child{
    color:#000000;
}

/* heading title */
h2{
    font-family:'Montserrat';
    font-size:34px;
    color:#f37021;
    margin-bottom:20px;
}

/* small caption */
.caption-note{
    font-size:12px;
    text-align:right;
    margin-top:10px;
    color:#777;
}

/* mobile responsive */
@media (max-width:768px){

.spec-table thead{
    display:none;
}

.spec-table,
.spec-table tbody,
.spec-table tr,
.spec-table td{
    display:block;
    width:100%;
}

.spec-table tr{
    margin-bottom:15px;
    border-radius:10px;
    box-shadow:0 5px 15px rgba(0,0,0,0.08);
    padding:10px;
}

.spec-table td{
    padding:10px;
}

.spec-table td:first-child{
    font-weight:700;
    color:#212384;
}

}
    </style>

<h2 class="section-heading">
Technical <span>Specifications</span>
</h2>

<div class="table-wrapper">
<table class="spec-table">
<thead>
<tr>
<th>Specification</th>
<th>Details</th>
</tr>
</thead>

<tbody>

<tr>
<td>Frequency</td>
<td>50 Hz</td>
</tr>

<tr>
<td>Power factor</td>
<td>Power factor</td>
</tr>

<tr>
<td>Voltage regulation</td>
<td>+ - 1 %</td>
</tr>

<tr>
<td>Crest factor</td>
<td>3 : 1</td>
</tr>

<tr>
<td>waveform</td>
<td>Pure sine wave</td>
</tr>

<tr>
<td>Harmonic distortion</td>
<td>THD &lt; 3 %</td>
</tr>

<tr>
<td>Overload rating</td>
<td>150 % for 30 second</td>
</tr>

<tr>
<td>Transient reponse</td>
<td>5 % for full load charge</td>
</tr>

<tr>
<td>DC bus volt ripple</td>
<td>&lt; 2 %</td>
</tr>

<tr>
<td>Inverter Efficiency</td>
<td>&gt; 95 %</td>
</tr>

<tr>
<td>Overall Efficiency</td>
<td>&gt; 92 %</td>
</tr>

<tr>
<td>Protection Inverter</td>
<td>
O/p over voltage / under voltage,  
O/p overload,  
Short circuit,  
Under voltage,  
Over temperature
</td>
</tr>

<tr>
<td>Audio alarm</td>
<td>
Rectifier trip,  
Overload,  
mains fall,  
Battery low with Pre alarm,  
system tip
</td>
</tr>

</tbody>
</table>

</div>











<!-- conclusion start -->
<style>
    .conclusion-text {
  font-size: 1.1rem;
  line-height: 1.7;
  color: #000000;
  text-align: center;
  font-weight: 500;
  max-width: 900px;
  margin: 20px auto 60px;
}
</style>

<h3><span></span></h3>
<h2 class="section-heading"><span>Conclusion</span></h2>
<p class="conclusion-text">
  Investing in a professionally engineered LF online UPS ensures continuous operation, safety, and long-term reliability for your business or facility.
</p>
<!-- conclusion end -->








<?php include('footer.php'); ?>

</body>
</html>