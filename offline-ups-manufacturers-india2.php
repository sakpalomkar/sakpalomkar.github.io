<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Indusups</title>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
        <h1>Offline UPS Manufacturer India</h1>
        <div class="indus-breadcrumb-nav">
            <a href="#">Home</a> 
            &nbsp;»&nbsp; 
            <a href="#">Products</a> 
            &nbsp;»&nbsp; 
            <span>Offline UPS</span>
        </div>
    </div>
</section>
<!-- Slider End -->




























<style>
.indus-product-wrapper{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:50px;
    padding:60px 8%;
    flex-wrap:wrap;
}

/* IMAGE */
.indus-product-left img{
    height:320px;
    width:auto;
    object-fit:contain;
    border-radius:12px;
    cursor:pointer;
    transition:0.3s;
}

.indus-product-left img:hover{
    transform:scale(1.05);
}

/* RIGHT SIDE */
.indus-product-right{
    flex:1;
}

.indus-product-right h2{
    font-size:26px;
    margin-bottom:15px;
    color:#212384;
    font-weight: 600;
}

/* TABLE */
.indus-spec-table{
    width:100%;
    border-collapse:collapse;
    background:#fff;
    border-radius:10px;
    overflow:hidden;
}

.indus-spec-table td{
    padding:12px 15px;
    border-bottom:1px solid #eee;
    font-size:14px;
}

.indus-spec-table td:first-child{
    font-weight:600;
    width:45%;
}

/* LIGHTBOX */
.indus-lightbox{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.9);
    display:flex;
    align-items:center;
    justify-content:center;
    opacity:0;
    visibility:hidden;
    transition:0.3s;
    z-index:9999;
}

.indus-lightbox.active{
    opacity:1;
    visibility:visible;
}

.indus-lightbox img{
    max-width:90%;
    max-height:90%;
    border-radius:12px;
}

/* CLOSE BUTTON */
.indus-close{
    position:absolute;
    top:30px;
    right:40px;
    font-size:30px;
    color:#fff;
    cursor:pointer;
}

/* RESPONSIVE */
@media(max-width:768px){
    .indus-product-wrapper{
        flex-direction:column;
    }

    .indus-product-left img{
        height:220px;
    }
}
</style>

<section class="indus-product-wrapper">

    <!-- IMAGE -->
    <div class="indus-product-left">
        <img src="img/Offline UPS.png" id="productImg" alt="Offline UPS">
    </div>

    <!-- SHORT SPEC -->
    <div class="indus-product-right">
        <h2>Offline UPS</h2>

        <table class="indus-spec-table">
            <tr><td>Capacity</td><td>600VA – 3KVA</td></tr>
            <tr><td>Phase</td><td>Single Phase</td></tr>
            <tr><td>Efficiency</td><td>Up to 98%</td></tr>
            <tr><td>Transfer Time</td><td>2–10 ms</td></tr>
            <tr><td>Battery</td><td>SMF / Lead Acid</td></tr>
            <tr><td>Backup</td><td>10–30 Min</td></tr>
        </table>
    </div>

</section>

<!-- LIGHTBOX -->
<div class="indus-lightbox" id="lightbox">
    <span class="indus-close" id="closeBtn">&times;</span>
    <img src="img/Offline UPS.png" alt="">
</div>

<script>
const img = document.getElementById("productImg");
const lightbox = document.getElementById("lightbox");
const closeBtn = document.getElementById("closeBtn");

img.onclick = () => {
    lightbox.classList.add("active");
}

closeBtn.onclick = () => {
    lightbox.classList.remove("active");
}

lightbox.onclick = (e) => {
    if(e.target !== img){
        lightbox.classList.remove("active");
    }
}
</script>
<!-- Img Section End -->


















<!-- CENTERED PROFESSIONAL SECTION START -->
<style>

/* SECTION */
.ups-section{
    max-width:1200px;
    margin:auto;
    padding:20px 20px;
    background:#ffffff;
}

/* HEADER */
.ups-header{
    text-align:center;
    margin-bottom:50px;
    animation:fadeDown 0.8s ease;
}

.ups-header h1{
    font-size:36px;
    font-weight:800;
    color:#1e2a78;
    margin-bottom:10px;
}

.ups-header p{
    color:#666;
    max-width:700px;
    margin:auto;
}

/* GRID */
.ups-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:25px;
}

/* CARD */
.ups-card{
    background:#fff;
    border-radius:16px;
    padding:30px 25px;
    text-align:center;
    border:1px solid #eee;
    position:relative;
    
    opacity:0;
    transform:translateY(40px);
    animation:fadeUp 0.8s ease forwards;
}

/* DELAY FOR EACH CARD */
.ups-card:nth-child(1){animation-delay:0.1s;}
.ups-card:nth-child(2){animation-delay:0.2s;}
.ups-card:nth-child(3){animation-delay:0.3s;}
.ups-card:nth-child(4){animation-delay:0.4s;}

/* TOP BAR */
.ups-card::before{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:4px;
    background:#1e2a78;
}

/* HOVER */
.ups-card:hover{
    transform:translateY(-12px) scale(1.03);
    box-shadow:0 20px 40px rgba(0,0,0,0.15);
}

/* ICON */
.ups-icon{
    width:60px;
    height:60px;
    margin:0 auto 15px;
    border-radius:12px;
    background:#1e2a78;
    color:#ffffff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:26px;
    transition:0.4s;
}

/* ICON HOVER */
.ups-card:hover .ups-icon{
    transform:rotate(10deg) scale(1.1);
}

/* TITLE */
.ups-card h3{
    font-size:17px;
    font-weight:700;
    color:#1e2a78;
    margin-bottom:10px;
}

/* TEXT */
.ups-card p{
    font-size:14px;
    color:#000000;
    line-height:1.6;
}

/* TAG */
.ups-tag{
    display:inline-block;
    margin-top:15px;
    padding:6px 14px;
    border-radius:20px;
    font-size:12px;
    font-weight:600;
    background:#f37021;
    color:#fff;
}

/* ANIMATIONS */
@keyframes fadeUp{
    to{
        opacity:1;
        transform:translateY(0);
    }
}

@keyframes fadeDown{
    from{
        opacity:0;
        transform:translateY(-20px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

</style>

<div class="ups-section">

    <!-- HEADER -->
    <h2 class="indus-section-heading">
        Offline <span>UPS Systems</span>
    </h2>

    <!-- GRID -->
    <div class="ups-grid">

        <div class="ups-card">
            <div class="ups-icon">🛡️</div>
            <h3>Overload Protection</h3>
            <p>Automatically prevents overload and protects your equipment.</p>
            <span class="ups-tag">Auto Safe</span>
        </div>

        <div class="ups-card">
            <div class="ups-icon">⚡</div>
            <h3>Short Circuit Protection</h3>
            <p>Instant detection system ensures protection against faults.</p>
            <span class="ups-tag">Instant Safety</span>
        </div>

        <div class="ups-card">
            <div class="ups-icon">📈</div>
            <h3>94% Efficiency</h3>
            <p>High efficiency design reduces power loss and improves performance.</p>
            <span class="ups-tag">Energy Saving</span>
        </div>

        <div class="ups-card">
            <div class="ups-icon">📦</div>
            <h3>Wide Range</h3>
            <p>Supports 40kVA to 250kVA for industrial applications.</p>
            <span class="ups-tag">Industrial</span>
        </div>

    </div>

</div>
<!-- SECTION END -->





















<!-- Understanding Offline UPS Start -->
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

.indus-section-heading{
    text-align:center;
    font-size:36px;
    font-weight:700;
    margin-bottom:40px;
    color:#1e2a78;
    letter-spacing:1px;
        margin-top: 50px;
}

.indus-section-heading span{
    color:#f37021;
    position:relative;
}

.indus-section-heading span::after{
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

/* ✅ Simple Popup Card Animation */
.indus-content-card{
    background:#ffffff;
    padding:35px 30px;
    border-radius:25px;
    box-shadow:0 15px 35px rgba(0,0,0,0.08);
    position:relative;
    overflow:hidden;
    border:2px solid #f37021;
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
}

.indus-content-card:hover{
    transform: translateY(-10px) scale(1.04);
    box-shadow:0 25px 50px rgba(0,0,0,0.15);
    border-color:#212384;
}

.indus-content-card p{
    font-size:17px;
    line-height:1.6;
    color:#000;
    margin:0;
    text-align:justify;
}

.indus-content-card strong{
    color:#212384;
    font-weight:600;
}

@keyframes floatShape{
    0%{transform: translateY(0);}
    100%{transform: translateY(20px);}
}

@media(max-width:992px){
    .indus-section-heading{
        font-size:28px;
    }
}
</style>

<section class="indus-info-panel">

    <h2 class="indus-section-heading">
        Understanding Offline UPS: Reliable Power Backup 
        <span>for Various Applications?</span>
    </h2>

    <div class="indus-grid-container">
        
        <div class="indus-content-card">
            <p>
            In an era where uninterrupted power is essential for daily operations, an 
            Offline UPS plays a vital role in providing dependable and cost-effective power backup. 
            Whether for homes, offices, lifts, petrol pumps, or commercial establishments, 
            an Offline UPS System ensures smooth functioning during power failures.
            </p>
        </div>

        <div class="indus-content-card">
            <p>
            An Offline UPS (Uninterruptible Power Supply) operates within a defined mains voltage range and automatically switches to battery power when the input supply fails. Once restored, it shifts back to mains and charges batteries for the next outage.
            </p>
        </div>

        <div class="indus-content-card">
            <p>
            Due to its simple design, high efficiency, and affordability, the 
            Offline UPS Power Backup Solution is widely used across residential, commercial, and light industrial applications.
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

<section class="indus-clean-section">
    <div class="indus-clean-container">
        <h2 class="indus-section-heading">
            What Is an <span>Offline UPS?</span>
        </h2>
        
        <p>An <strong>offline UPS</strong> is a power backup system that normally supplies power directly from the utility mains. The inverter and battery remain on standby mode until a power failure or voltage fluctuation occurs. When the mains supply goes out of the acceptable range or fails completely, the offline UPS instantly switches to inverter mode, drawing power from the battery.</p>

        <p>This fast changeover ensures that connected equipment continues operating without interruption. Once stable power returns, the system switches back to mains supply and automatically recharges the battery.</p>

        <h3>How an Offline UPS Works</h3>
        
        <ul class="indus-steps-list">
            <li>
                <strong>1. Normal Condition</strong> - Load runs directly on mains power
                <div class="shine-effect"></div>
            </li>
            <li>
                <strong>2. Power Failure</strong> - Offline UPS switches to battery mode
                <div class="shine-effect"></div>
            </li>
            <li>
                <strong>3. Backup Mode</strong> - Battery supplies power through inverter
                <div class="shine-effect"></div>
            </li>
            <li>
                <strong>4. Power Restored</strong> - UPS switches back to mains and starts charging
                <div class="shine-effect"></div>
            </li>
        </ul>

        <p>This operating principle makes the <strong>offline UPS system</strong> ideal for applications that require reliable backup but do not need continuous double-conversion power.</p>
    </div>
</section>
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
    color: #000000;
    line-height: 1.6;
    max-width: 1200px;
}

.indus-why-section p strong {
    font-weight: 700;
}
</style>

<section class="indus-why-section">
    <h2 class="indus-section-heading">
         Why Choose an <span>Offline UPS?</span>
    </h2>
    <p>
        An <strong>offline UPS power backup system</strong> is preferred due to its simplicity, efficiency, and cost- effectiveness. 
        It provides sufficient protection for most electrical and electronic devices while keeping operational costs low.
    </p>
</section>
<!-- Why Choose End -->

<!-- Key Benifits Start -->
<style>
.indus-benefits-section {
    padding: 30px 8%;
    position: relative;
}

.indus-benefits-container {
    max-width: 1100px;
    margin: auto;
}

.indus-benefits-title {
    text-align: center;
    font-size: 42px;
    font-weight: 700;
    color: #212384;
    margin-bottom: 80px;
    position: relative;
}

.indus-benefits-title span {
    color: #f37021;
}

.indus-benefits-title::after {
    content: "";
    width: 110px;
    height: 4px;
    background: linear-gradient(90deg, #f37021, #212384);
    display: block;
    margin: 15px auto 0;
    border-radius: 20px;
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

.indus-footer-note {
    text-align: center;
    margin-top: 60px;
    font-size: 19px;
    color: #444;
    max-width: 850px;
    margin-left: auto;
    margin-right: auto;
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
         Key Benefits of <span>Offline UPS</span>
        </h2>   

        <div class="indus-timeline-wrapper">
            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p>Cost-effective power backup solution</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p>High efficiency with minimal power loss</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p>Simple and robust design</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p>Low maintenance requirements</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p>Fast changeover during power failure</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p>Compatible with various battery types</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p>Ideal for residential and commercial use</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Key Benifits End -->




























<!-- Applications Section start -->
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
    font-size:18px;
    color:#212384;
    margin-bottom:10px;
    text-align: center;
    font-weight: 600;
}

.indus-back-face p{
    font-size:14px;
    line-height:1.5;
    color: #000000;

}

.indus-back-face ul{
    margin:8px 0 8px 18px;
    color: #000000;
}

.indus-back-face ul li{
    font-size:14px;
    margin-bottom:5px;
    position:relative;
    padding-left:14px;
    color: #000000;
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
    <div class="indus-container">
        <h2 class="indus-section-heading">
            Applications Of <span>Offline UPS</span>
        </h2>

       

        <div class="indus-card-grid">
            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>01</span>
                        <h3>Lift Power Backup</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Lift Power Backup</h3>
                        <p>
                            An <strong>offline UPS for lifts</strong> ensures smooth elevator operation during power outages.
                            It prevents sudden stoppages, ensuring passenger safety and controlled movement during emergencies.
                        </p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>02</span>
                        <h3>Small Offices & Corporate Workspaces</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Small Offices & Corporate Workspaces</h3>
                        <p>In offices, an <strong>offline UPS system</strong> protects :</p>
                        <ul>
                            <li>Desktop computers</li>
                            <li>Networking devices</li>
                            <li>Routers and switches</li>
                            <li>Workstations</li>
                        </ul>
                        <p>This prevents data loss, system crashes, and work disruption.</p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>03</span>
                        <h3>Homes & Bungalows</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Homes & Bungalows</h3>
                        <p>A <strong>residential offline UPS</strong> provides uninterrupted power for:</p>
                        <ul>
                            <li>Lights and fans</li>
                            <li>Televisions</li>
                            <li>Wi-Fi routers</li>
                            <li>Home appliances</li>
                        </ul>
                        <p>It is ideal for homes facing frequent power cuts.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="indus-card-grid indus-card-grid-centered" style="margin-top:-55px;">
            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>04</span>
                        <h3>Petrol Pumps</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Petrol Pumps</h3>
                        <p>
                            An <strong>offline UPS for petrol pumps</strong> ensures uninterrupted operation of fuel dispensing units,
                            billing systems, and safety controls during outages.
                        </p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>05</span>
                        <h3>Restaurants & Hotels</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Restaurants & Hotels</h3>
                        <p>Hotels and restaurants rely on <strong>offline UPS power backup</strong> for :</p>
                        <ul>
                            <li>Kitchen equipment</li>
                            <li>POS billing systems</li>
                            <li>Lighting and ventilation</li>
                            <li>Refrigeration units</li>
                        </ul>
                        <p>This ensures smooth service and customer satisfaction even during power failures.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Applications Section End -->























<!-- Features Section Start -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

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
}

.indus-features-subtext {
    font-size: 16px;
    color: #000000;
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
    color: #000000;

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
            Features Of <span>INDUS Offline UPS</span>
        </h2>

        <p class="indus-features-subtext">
            The <strong>INDUS Offline UPS</strong> is engineered with advanced technology to deliver consistent, reliable, and efficient power backup across applications.
        </p>

        <div class="indus-feature-item">
            <h3>Advanced DSP-Based Technology</h3>
            <p>The offline UPS uses <strong>DSP (Digital Signal Processing)</strong> based control for precise power regulation, intelligent monitoring, and improved system reliability.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Excellent Voltage Regulation</h3>
            <p>The system provides excellent voltage regulation and transient response, ensuring safe operation of sensitive electronic equipment.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Pure Sine Wave Output</h3>
            <p>A <strong>pure sine wave offline UPS</strong> ensures clean power output, making it safe for computers, medical devices, and other sensitive electronics.</p>
        </div>

        <div class="indus-feature-item">
            <h3>IGBT Inverter Technology</h3>
            <p>The use of <strong>IGBT inverter technology</strong> enhances reliability, improves efficiency, and reduces heat generation.</p>
        </div>

        <div class="indus-feature-item">
            <h3>LCD Display with Alarm Function</h3>
            <p>The LCD display provides real-time information such as :</p>
            <ul>
                <li>Input/output voltage</li>
                <li>Battery status</li>
                <li>Load condition</li>
                <li>Fault indications</li>
                <li>Audible alarms alert users to faults or abnormal conditions</li>
            </ul>
        </div>

        <div class="indus-feature-item">
            <h3>Complete Fault Protection</h3>
            <p>The offline UPS offers protection against :</p>
            <ul>
                <li>Overload</li>
                <li>Short circuit</li>
                <li>Battery deep discharge</li>
                <li>Over-voltage and under-voltage</li>
            </ul>
        </div>

        <div class="indus-feature-item">
            <h3>Auto / Manual Bypass Mode</h3>
            <p>The auto and manual bypass mode ensures continuous power supply during maintenance or emergencies.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Engineered for Easy Maintenance</h3>
            <p>The robust and engineered design reduces downtime and minimizes <strong>MTTR (Mean Time to Repair)</strong>.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Fully Automatic Operation</h3>
            <p>The offline UPS operates automatically without manual intervention, ensuring user convenience.</p>
        </div>

        <div class="indus-feature-item">
            <h3>High Efficiency</h3>
            <p>The system is designed for high efficiency, reducing energy losses and operating costs.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Customizable Specifications</h3>
            <p>Offline UPS specifications can be customized based on :</p>
            <ul>
                <li>Load requirements</li>
                <li>Application type</li>
                <li>Battery capacity</li>
                <li>Backup duration</li>
            </ul>
        </div>
    </div>
</section>
<!-- Features Section End -->

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
    color: #000000;
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
    color: #000000;
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

<div class="indus-main-wrapper">

   
    <!-- Industrial & Residential Offline UPS Section -->
    <section class="indus-category-section">
        <div class="indus-category-container">
            <h2 class="indus-section-heading">
                Industrial & Residential <span>Offline UPS</span>
            </h2>

            <div class="indus-category-item">
                <div class="indus-icon-text"><i class="fas fa-home"></i> Residential Offline UPS</div>
                <p class="indus-category-desc">
                    A residential offline UPS is ideal for homes and apartments where power backup is required for essential appliances. It ensures comfort, safety, and uninterrupted daily life.
                </p>
            </div>

            <div class="indus-category-item">
                <div class="indus-icon-text"><i class="fas fa-store"></i> Commercial Offline UPS</div>
                <p class="indus-category-desc">
                    Offices, shops, restaurants, and hotels benefit from <b>commercial offline UPS systems</b> that protect business continuity and equipment.
                </p>
            </div>

            <div class="indus-category-item">
                <div class="indus-icon-text"><i class="fas fa-industry"></i> Light Industrial Offline UPS</div>
                <p class="indus-category-desc" style="line-height: 2.4rem;">
                    <span class="indus-list-item"><i class="fas fa-chevron-right"></i> Control panels</span>
                    <span class="indus-list-item"><i class="fas fa-chevron-right"></i> Office equipment</span>
                    <span class="indus-list-item"><i class="fas fa-chevron-right"></i> Small machinery</span>
                </p>
            </div>
        </div>
    </section>























<!-- Why Offline UPS Start -->
<style>
/* Section */


/* Heading */
.indus-split-heading {
    text-align: center;
    font-size: 38px;
    font-weight: 700;
    color: #212384;
    margin-bottom: 60px;
}

.indus-split-heading span {
    color: #f37021;
    position: relative;
}

.indus-split-heading span::after {
    content: "";
    width: 50%;
    height: 4px;
    background: #f37021;
    display: block;
    margin: 4px auto 0 auto;
    border-radius: 2px;
}

/* Grid Layout */
.indus-split-grid {
    max-width: 1200px;
    margin: auto;
    display: grid;
    gap: 30px;
}

/* First Row: 3 cards */
.indus-split-grid.first-row {
    grid-template-columns: repeat(3, 1fr);
}

/* Second Row: 2 cards centered */
.indus-split-grid.second-row {
    grid-template-columns: repeat(2, 1fr);
    justify-content: center;
}

/* Card */
.indus-split-card {
    background: #ffffff;
    border-radius: 15px;
    padding: 25px 20px 20px 20px;
    box-shadow: 0 15px 35px rgba(33,35,132,0.08);
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
    text-align: center;
}

/* Top Accent Bar */
.indus-split-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 6px;
    width: 100%;
    background: linear-gradient(90deg, #212384, #f37021);
    border-radius: 3px 3px 0 0;
}

/* Icon */
.indus-split-icon {
    font-size: 32px;
    margin: 20px 0;
    background: #f37021;
    color: #fff;
    width: 60px;
    height: 60px;
    line-height: 60px;
    display: inline-block;
    border-radius: 50%;
    transition: transform 0.3s ease;
}

.indus-split-card:hover .indus-split-icon {
    transform: scale(1.15) rotate(10deg);
}

/* Title */
.indus-split-title {
    font-size: 20px;
    font-weight: 600;
    color: #212384;
    margin-bottom: 12px;
}

/* Description */
.indus-split-desc {
    font-size: 15px;
    color: #333;
    line-height: 1.6rem;
}

/* Hover Effect */
.indus-split-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 30px 60px rgba(33,35,132,0.15);
}

/* Fade In Animation */
.indus-split-card {
    opacity: 0;
    transform: translateY(30px);
    animation: splitFadeUp 0.8s forwards;
}

.indus-split-card:nth-child(1) { animation-delay: 0.2s; }
.indus-split-card:nth-child(2) { animation-delay: 0.4s; }
.indus-split-card:nth-child(3) { animation-delay: 0.6s; }
.indus-split-card:nth-child(4) { animation-delay: 0.8s; }
.indus-split-card:nth-child(5) { animation-delay: 1s; }

@keyframes splitFadeUp {
    to { opacity: 1; transform: translateY(0); }
}

@media (max-width:1024px){
    .indus-split-grid.first-row,
    .indus-split-grid.second-row {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width:768px){
    .indus-split-heading { font-size: 28px; }
    .indus-split-grid.first-row,
    .indus-split-grid.second-row {
        grid-template-columns: 1fr;
    }
}
</style>

<section class="indus-split-section">
    <h2 class="indus-section-heading">Why Offline UPS Is A <span>Smart Investment</span></h2>


    <!-- First Row: 3 Cards -->
    <div class="indus-split-grid first-row">
        <div class="indus-split-card">
            <div class="indus-split-icon"><i class="fas fa-shield-alt"></i></div>
            <div class="indus-split-title">Protection of Electrical Devices</div>
            <div class="indus-split-desc">
                Safeguards electronics from voltage fluctuations and unexpected outages.
            </div>
        </div>

        <div class="indus-split-card">
            <div class="indus-split-icon"><i class="fas fa-clock"></i></div>
            <div class="indus-split-title">Reduced Downtime</div>
            <div class="indus-split-desc">
                Maintains continuous operation during power interruptions.
            </div>
        </div>

        <div class="indus-split-card">
            <div class="indus-split-icon"><i class="fas fa-chart-line"></i></div>
            <div class="indus-split-title">Improved Productivity</div>
            <div class="indus-split-desc">
                Ensures workflow continuity and prevents data loss.
            </div>
        </div>
    </div>

    <!-- Second Row: 2 Cards Centered -->
    <div class="indus-split-grid second-row" style="margin-top:30px;">
        <div class="indus-split-card">
            <div class="indus-split-icon"><i class="fas fa-cogs"></i></div>
            <div class="indus-split-title">Long Equipment Life</div>
            <div class="indus-split-desc">
                Stable power supply reduces wear and extends equipment lifespan.
            </div>
        </div>

        <div class="indus-split-card">
            <div class="indus-split-icon"><i class="fas fa-bolt"></i></div>
            <div class="indus-split-title">Peace of Mind</div>
            <div class="indus-split-desc">
                Reliable backup power ensures confidence during unexpected outages.
            </div>
        </div>
    </div>
</section>
<!-- Why Offline UPS End -->





    <h2 class="indus-section-heading"><span>Conclusion</span></h2>

    <p>An <b>Offline UPS</b> is a dependable, efficient, and economical power backup solution for a wide range of applications. From homes and offices to lifts, petrol pumps, and commercial establishments, an <b>offline UPS</b> system ensures uninterrupted power during outages while maintaining battery readiness through automatic charging. <br><br> With advanced DSP control, pure sine wave output, comprehensive protection features, and customizable specifications, <b>INDUS Offline UPS</b> stands out as a reliable choice for both residential and commercial power backup needs.<br><br> If you are looking for a <b>high-efficiency offline UPS power backup solution,</b> INDUS Offline UPS delivers performance, safety, and peace of mind—power you can trust when it matters most.</p>

















    
<!-- Table Section Start -->
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
        border: solid 2px #f37021;
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

    <h2 class="indus-section-heading">Offline UPS (For Lift) 3 Phase I/P - <span>3Phase O/P</span></h2>
<table class="modern-table">
    <tr>
        <th>Rating</th>
        <th>6KVA</th><th>8KVA</th><th>10KVA</th><th>15KVA</th><th>20KVA</th>
        <th>30KVA</th><th>40KVA</th><th>50KVA</th><th>60KVA</th><th>75KVA</th><th>100KVA</th>
    </tr>
    <tr>
        <td>DC Voltage</td>
        <td>72V</td><td>96V</td><td>144V</td><td>180V</td><td>240V</td>
        <td>360V</td><td>360V</td><td>360V</td><td>360V</td><td>360V</td><td>360V</td>
    </tr>
    <tr>
        <td>Mains Input</td>
        <td colspan="11">415V ±15% -15%</td>
    </tr>
    <tr>
        <td>Frequency</td>
        <td colspan="11">50Hz ±4Hz</td>
    </tr>
    <tr>
        <td>Charger Type</td>
        <td colspan="11">CCCV (Constant Current Constant Voltage type)</td>
    </tr>
</table>

<div class="section-title">Inverter Mode</div>
<table class="modern-table">
    <tr><td>Technology</td><td colspan="11">DSP based IGBT Technology</td></tr>
    <tr><td>Output Voltage</td><td colspan="11">400 / 415V AC 3Ph</td></tr>
    <tr><td>Frequency</td><td colspan="11">50Hz ±0.1Hz</td></tr>
    <tr><td>Waveform</td><td colspan="11">Pure Sine wave</td></tr>
    <tr><td>Harmonic Distortion</td><td colspan="11">Less than 3% on Linear Load</td></tr>
    <tr><td>Inverter Efficiency</td><td colspan="11">Up to 90% / Up to 92% / Up to 95%</td></tr>
    <tr><td>Power Factor</td><td colspan="11">0.8</td></tr>
    <tr><td>Overload</td><td colspan="11">110% for 8 sec</td></tr>
    <tr><td>Crest Factor</td><td colspan="11">3:1</td></tr>
    <tr><td>Audible Noise</td><td colspan="11">Less than 65 dB at 1 Meter</td></tr>
    <tr><td>Duty Cycle</td><td colspan="11">Continuous</td></tr>
</table>

<div class="section-title">Display</div>
<table class="modern-table">
    <tr><td>Digital LCD Display</td><td colspan="11">Input and Output Voltages, Output currents, Battery Voltage, Load Percentage and All Faults</td></tr>
</table>

<div class="section-title">Other Features</div>
<table class="modern-table">
    <tr><td>Operating Temperature</td><td colspan="11">0°C to 45°C</td></tr>
    <tr><td>Humidity</td><td colspan="11">Max 95%, Non-condensing</td></tr>
</table>

<div class="section-title">Protection</div>
<table class="modern-table">
    <tr>
        <td>Output Under & Over voltage</td>
        <td>Short-circuit Protection</td>
        <td>Input Under & Over voltage</td>
    </tr>
    <tr>
        <td>Over Temperature</td>
        <td>Output Over load</td>
        <td>DC Under & Over voltage</td>
    </tr>
    <tr>
        <td>Phase Reverse protection</td>
        <td colspan="2"></td>
    </tr>
</table>

<div class="section-title">Indications & Alarms</div>
<table class="modern-table">
    <tr><td>Mains on</td><td colspan="11">LED Indication</td></tr>
    <tr><td>Inverter</td><td colspan="11">LED Indication</td></tr>
    <tr><td>Batt Low</td><td colspan="11">LED Indication & Alarm</td></tr>
    <tr><td>Fault</td><td colspan="11">LED Indication & Alarm</td></tr>
    <tr><td>Overload</td><td colspan="11">LED Indication & Alarm</td></tr>
    <tr><td>Over Temperature</td><td colspan="11">LCD Indication & Alarm</td></tr>
</table>

<div class="section-title">Changeover</div>
<table class="modern-table">
    <tr><td>Manual Changeover</td><td colspan="11">Optional for 6KVA / 8KVA</td></tr>
    <tr><td></td><td colspan="11">Provided for above 10KVA</td></tr>
</table>
</div>
<!-- Pending All Section End -->

<?php include ('footer.php'); ?>

</body>
</html>

