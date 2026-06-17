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
<body>

<?php include('navbar.php'); ?>

<!-- ==================== SECTION 1: HERO BANNER ==================== -->
<style>
/* power-hero-wrapper */
.power-hero-wrapper {
    position: relative;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    overflow: hidden;
    color: #fff;
}

.power-hero-wrapper::before {
    content: "";
    position: absolute;
    inset: 0;
    background: url("img/about\ us.jpg") center/cover no-repeat;
    filter: brightness(0.55);
    transform: scale(1.1);
    animation: powerZoom 10s ease-in-out infinite alternate;
}

.power-hero-wrapper::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.24));
}

.power-hero-content {
    position: relative;
    z-index: 2;
}

.power-hero-content h1 {
    font-size: 32px;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 15px;
    animation: powerSlideDown 1s ease forwards;
}

.power-breadcrumb-nav {
    font-size: 18px;
    font-weight: 400;
    animation: powerFadeUp 1.2s ease forwards;
}

.power-breadcrumb-nav a {
    color: #fff;
    text-decoration: none;
    transition: 0.3s;
}

.power-breadcrumb-nav a:hover {
    color: #ff5e00;
}

.power-breadcrumb-nav span {
    color: #ff5e00;
    font-weight: 600;
    margin-left: 5px;
}

@keyframes powerSlideDown {
    from { opacity: 0; transform: translateY(-40px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes powerFadeUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes powerZoom {
    from { transform: scale(1.1); }
    to { transform: scale(1); }
}

@media(max-width:768px){
    .power-hero-content h1 { font-size: 36px; }
    .power-breadcrumb-nav { font-size: 15px; }
}
</style>

<section class="power-hero-wrapper">
    <div class="power-hero-content">
        <h1>All-Inclusive AMC For Inverter And Battery Manufacturer India</h1>
        <div class="power-breadcrumb-nav">
            <a href="#">Home</a> 
            &nbsp;»&nbsp; 
            <a href="#">Products</a> 
            &nbsp;»&nbsp; 
            <a href="#">UPS And Inverter Battery AMC</a> 
            &nbsp;»&nbsp;
            <span>All-Inclusive AMC For Inverter And Battery</span>
        </div>
    </div>
</section>

<!-- ==================== SECTION 2: PRODUCT SHOWCASE ==================== -->
<style>
/* energy-showcase-block */
.energy-showcase-block {
    width: 100%;
    padding: 40px 8%;
    text-align: center;
    position: relative;
    overflow: hidden;
}

.energy-showcase-block::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    animation: energyGradient 12s ease infinite;
    z-index: 0;
}

@keyframes energyGradient {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

.energy-image-box {
    position: relative;
    z-index: 1;
    display: flex;
    justify-content: center;
    margin-bottom: 30px;
}

.energy-main-pic {
    width: 500px;
    cursor: pointer;
    background: rgba(255,255,255,0.6);
    backdrop-filter: blur(15px);
    border-radius: 20px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.15);
    transform: translateY(60px);
    opacity: 0;
    animation: energyFadeUp 1.2s ease forwards;
    transition: 0.4s ease;
}

.energy-main-pic:hover {
    transform: translateY(0) scale(1.05) rotateX(5deg);
}

@keyframes energyFadeUp {
    to { transform: translateY(0); opacity: 1; }
}

.energy-btn-group {
    position: relative;
    z-index: 1;
    display: flex;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;
}

.energy-action-btn {
    position: relative;
    padding: 16px 45px;
    font-size: 16px;
    font-weight: 600;
    text-decoration: none;
    color: #f37021;
    border-radius: 50px;
    background: #fff;
    overflow: hidden;
    transition: 0.4s ease;
    letter-spacing: 1px;
}

.energy-action-btn::before {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 50px;
    padding: 2px;
    background: linear-gradient(90deg, #f37021, #212384, #f37021);
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    animation: energyBorderMove 4s linear infinite;
}

@keyframes energyBorderMove {
    0% { background-position: 0%; }
    100% { background-position: 200%; }
}

.energy-action-btn:hover {
    background: #f37021;
    color: #fff;
    box-shadow: 0 15px 40px rgba(243,112,33,0.4);
    transform: translateY(-5px);
}

.energy-lightbox-modal {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.88);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    visibility: hidden;
    transition: 0.4s ease;
    z-index: 9999;
}

.energy-lightbox-modal.active {
    opacity: 1;
    visibility: visible;
}

.energy-lightbox-modal img {
    max-width: 90%;
    max-height: 90%;
    border-radius: 20px;
    box-shadow: 0 30px 60px rgba(0,0,0,0.5);
    animation: energyZoomIn 0.4s ease;
}

@keyframes energyZoomIn {
    from { transform: scale(0.8); }
    to { transform: scale(1); }
}

.energy-close-btn {
    position: absolute;
    top: 35px;
    right: 45px;
    width: 55px;
    height: 55px;
    border-radius: 50%;
    backdrop-filter: blur(12px);
    background: rgba(255,255,255,0.15);
    border: 1px solid rgba(255,255,255,0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.4s ease;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

.energy-close-btn span {
    position: absolute;
    width: 22px;
    height: 2px;
    background: #fff;
    transition: 0.4s ease;
}

.energy-close-btn span:nth-child(1) { transform: rotate(45deg); }
.energy-close-btn span:nth-child(2) { transform: rotate(-45deg); }

.energy-close-btn:hover {
    transform: scale(1.15) rotate(180deg);
    background: linear-gradient(135deg, #f37021, #212384);
}

@media(max-width:768px){
    .energy-main-pic { width: 260px; }
    .energy-action-btn { padding: 14px 30px; font-size: 14px; }
    .energy-close-btn { top: 20px; right: 20px; width: 45px; height: 45px; }
}
</style>

<section class="energy-showcase-block">
    <div class="energy-btn-group">
        <a href="#" class="energy-action-btn">DOWNLOAD BROCHURE</a>
        <a href="#" class="energy-action-btn" onclick="openEnquiry()">ENQUIRE NOW</a>
    </div>
</section>

<!-- ==================== SECTION 3: WHAT IS AMC ==================== -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* core-definition-area */
.core-definition-area {
    padding: 50px 20px;
    background: #ffffff;
    font-family: 'Montserrat';
}

.core-main-heading {
    font-size: 36px;
    font-weight: 700;
    text-align: center;
    color: #212384;
    margin-bottom: 50px;
}

.core-main-heading span {
    color: #f37021;
    position: relative;
}

.core-main-heading span::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -8px;
    width: 0%;
    height: 4px;
    background: #f37021;
    border-radius: 5px;
    animation: coreUnderlineMove 2s infinite alternate;
}

@keyframes coreUnderlineMove {
    from { width: 0%; }
    to { width: 100%; }
}

.core-grid-layout {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}

.core-info-card {
    background: #fff;
    padding: 35px 30px;
    border-radius: 18px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
    transition: 0.4s;
    position: relative;
    border: 1px solid #ffffff;
    overflow: hidden;
}

.core-info-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 0%;
    height: 4px;
    background: linear-gradient(to right, #212384, #f37021);
    transition: 0.4s;
}

.core-info-card p {
    font-size: 16.5px;
    line-height: 1.7;
    color: #000000;
    text-align: justify;
}

.core-info-card p strong {
    color: #000000;
}

.core-info-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 25px 60px rgba(0,0,0,0.15);
}

.core-info-card:hover::before {
    width: 100%;
}

@media(max-width:768px){
    .core-main-heading { font-size: 30px; }
    .core-info-card { padding: 28px 22px; }
}
</style>

<section class="core-definition-area">
    <h2 class="core-main-heading">What Is An Inverter And <span>Battery AMC?</span></h2>
    <div class="core-grid-layout">
        <div class="core-info-card">
            <p>An <strong>Inverter Battery Annual Maintenance Contract</strong> is a structured service agreement that ensures your inverter and batteries are professionally inspected, maintained, and serviced at regular intervals. It focuses on performance, safety, and long-term reliability.</p>
        </div>
        <div class="core-info-card">
            <p>Our <strong>Inverter AMC Service</strong> ensures smooth inverter operation, while the <strong>Battery AMC Service</strong> maintains battery health, water levels, charging efficiency, and overall safety — preventing unexpected failures.</p>
        </div>
        <div class="core-info-card">
            <p>Every <strong>Inverter Battery AMC</strong> is designed to protect your investment. A clearly defined <strong>Inverter AMC Contract</strong> removes uncertainty and delivers consistent performance throughout the year.</p>
        </div>
    </div>
</section>

<!-- ==================== SECTION 4: POWER BACKUP JOURNEY ==================== -->
<style>
/* backup-timeline-section */
.backup-timeline-section {
    padding: 50px 20px;
    font-family: 'Montserrat';
}

.backup-timeline-container {
    max-width: 900px;
    margin: auto;
    position: relative;
}

.backup-timeline-container::before {
    content: "";
    position: absolute;
    left: 25px;
    top: 120px;
    bottom: 0;
    width: 4px;
    background: linear-gradient(to bottom, #f37021, #212384);
    border-radius: 2px;
}

.backup-step-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 50px;
    position: relative;
}

.backup-step-number {
    margin-top: 3rem;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: linear-gradient(135deg, #f37021, #212384);
    color: #fff;
    font-weight: 700;
    font-size: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    margin-right: 25px;
    z-index: 2;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.backup-step-content {
    background: #fff;
    padding: 25px 30px;
    border-radius: 16px;
    box-shadow: 0 15px 35px rgba(33,35,132,0.08);
    flex: 1;
    transition: 0.35s;
    border: 2px solid transparent;
}

.backup-step-content h3 {
    font-size: 22px;
    font-weight: 600;
    color: #f37021;
    margin-bottom: 10px;
    transition: 0.3s;
}

.backup-step-content p {
    font-size: 18px;
    line-height: 1.8;
    color: #000000;
}

.backup-step-item:hover .backup-step-content {
    transform: translateX(6px);
    box-shadow: 0 25px 50px rgba(33,35,132,0.15);
    border: 2px solid #212384;
}

.backup-step-item:hover h3 {
    color: #212384;
}

@media(max-width:768px){
    .backup-timeline-container::before { left: 23px; }
    .backup-step-number { margin-right: 15px; }
}
</style>

<section class="backup-timeline-section">
    <div class="backup-timeline-container">
        <h2 class="core-main-heading">Complete Power Backup <span>Maintenance Journey</span></h2>
        
        <div class="backup-step-item">
            <div class="backup-step-number">1</div>
            <div class="backup-step-content">
                <h3>Reliable Power Assurance</h3>
                <p>Power backup systems are essential across homes, offices, and industries. An inverter AMC ensures uninterrupted power and reliable operation.</p>
            </div>
        </div>
        
        <div class="backup-step-item">
            <div class="backup-step-number">2</div>
            <div class="backup-step-content">
                <h3>Battery Longevity & Protection</h3>
                <p>A battery AMC extends battery life, prevents failures, and ensures consistent backup performance throughout the year.</p>
            </div>
        </div>
        
        <div class="backup-step-item">
            <div class="backup-step-number">3</div>
            <div class="backup-step-content">
                <h3>Professional Service & Quick Response</h3>
                <p>Our trained technicians provide routine inspections, preventive care, and rapid emergency support, ensuring peace of mind.</p>
            </div>
        </div>
        
        <div class="backup-step-item">
            <div class="backup-step-number">4</div>
            <div class="backup-step-content">
                <h3>All-Inclusive AMC Coverage</h3>
                <p>Complete coverage includes parts replacement, preventive maintenance, and structured annual contracts for hassle-free ownership.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SECTION 5: RESIDENTIAL COVERAGE ==================== -->
<style>
/* home-protection-strip */
.home-protection-strip {
    padding: 50px 20px;
    background: #ffffff;
    font-family: 'Montserrat';
}

.home-strip-container {
    display: flex;
    flex-direction: column;
    gap: 28px;
    max-width: 1100px;
    margin: auto;
}

.home-strip-item {
    display: flex;
    align-items: flex-start;
    gap: 25px;
    padding: 28px 32px;
    background: #ffffff;
    border-radius: 18px;
    border-left: 6px solid #f37021;
    transition: all 0.35s ease;
    margin-left: 8rem;
    margin-right: 8rem;
}

.home-strip-icon {
    width: 56px;
    height: 56px;
    background: #f37021;
    color: #ffffff;
    font-size: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 14px;
    flex-shrink: 0;
    transition: 0.35s;
    overflow: hidden;
}

.home-strip-icon i {
    transition: all 0.4s ease;
    transform: scale(1);
}

.home-strip-text h4 {
    font-size: 20px;
    color: #f37021;
    margin-bottom: 8px;
    transition: 0.3s;
}

.home-strip-text p {
    font-size: 16.5px;
    color: #000000;
    line-height: 1.7;
}

.home-strip-item:hover {
    transform: translateX(10px);
    background: #ffffff;
    box-shadow: 0 20px 45px rgba(33,35,132,0.15);
    border-left: 6px solid #212384;
}

.home-strip-item:hover .home-strip-icon {
    background: #212384;
}

.home-strip-item:hover .home-strip-icon i {
    transform: scale(1.25) rotate(10deg);
}

.home-strip-item:hover .home-strip-text h4 {
    color: #212384;
}

@media(max-width:768px){
    .home-strip-item {
        flex-direction: column;
        align-items: flex-start;
        margin-left: 0;
        margin-right: 0;
    }
}
</style>

<section class="home-protection-strip">
    <h2 class="core-main-heading">All-Inclusive AMC For <span>Residential Power Backup</span></h2>
    <div class="home-strip-container">
        <div class="home-strip-item">
            <div class="home-strip-icon"><i class="fas fa-house"></i></div>
            <div class="home-strip-text">
                <h4>Reliable Home Backup</h4>
                <p>An <strong>Inverter AMC For Home</strong> ensures consistent backup during power cuts, while a <strong>Battery AMC</strong> protects against heat damage, deep discharge, and irregular charging.</p>
            </div>
        </div>
        <div class="home-strip-item">
            <div class="home-strip-icon"><i class="fas fa-building"></i></div>
            <div class="home-strip-text">
                <h4>Apartments & Flats</h4>
                <p>A professionally managed <strong>Inverter Battery AMC</strong> supports apartments and flats by delivering quiet, efficient, and safe power backup every day.</p>
            </div>
        </div>
        <div class="home-strip-item">
            <div class="home-strip-icon"><i class="fas fa-city"></i></div>
            <div class="home-strip-text">
                <h4>Societies & Bungalows</h4>
                <p>Gated communities and premium homes benefit from structured maintenance and customized AMC coverage for uninterrupted comfort.</p>
            </div>
        </div>
        <div class="home-strip-item">
            <div class="home-strip-icon"><i class="fas fa-shield-halved"></i></div>
            <div class="home-strip-text">
                <h4>Complete Peace of Mind</h4>
                <p>With a <strong>Residential Inverter Battery AMC</strong>, families enjoy hassle-free ownership without service coordination or unexpected breakdowns.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SECTION 6: COMMERCIAL SOLUTIONS ==================== -->
<style>
/* business-timeline-wrapper */
.business-timeline-wrapper {
    padding: 50px 20px;
    background: linear-gradient(180deg, #ffffff, #ffffff);
    font-family: 'Montserrat';
    position: relative;
}

.business-timeline-line {
    position: relative;
    max-width: 1100px;
    margin: auto;
}

.business-timeline-line::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    width: 4px;
    height: 100%;
    background: #d8d8e6;
    transform: translateX(-50%);
    border-radius: 5px;
}

.business-timeline-block {
    position: relative;
    width: 50%;
    padding: 20px 40px;
    box-sizing: border-box;
    transition: all 0.35s ease;
}

.business-timeline-block.left {
    left: 0;
    text-align: right;
}

.business-timeline-block.right {
    left: 50%;
    text-align: left;
}

.business-timeline-marker {
    position: absolute;
    top: 110px;
    width: 60px;
    height: 60px;
    background: #f37021;
    border-radius: 50%;
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 18px;
    transition: all 0.35s ease;
}

.business-timeline-block.left .business-timeline-marker {
    right: -30px;
}

.business-timeline-block.right .business-timeline-marker {
    left: -30px;
}

.business-timeline-marker i {
    transition: transform 0.5s ease;
}

.business-content-card {
    background: #ffffff;
    padding: 28px 30px;
    border-radius: 18px;
    box-shadow: 0 18px 45px rgba(33,35,132,0.12);
    transition: all 0.35s ease;
    border: 2px solid transparent;
}

.business-content-card h4 {
    font-size: 20px;
    color: #f37021;
    margin-bottom: 10px;
    transition: color 0.35s ease;
}

.business-content-card p {
    font-size: 16.5px;
    line-height: 1.7;
    color: #000;
    font-weight: 400;
}

.business-timeline-block:hover .business-content-card {
    transform: translateY(-8px);
    box-shadow: 0 30px 65px rgba(33,35,132,0.2);
    border: 2px solid #212384;
}

.business-timeline-block:hover .business-timeline-marker {
    background: #212384;
}

.business-timeline-block:hover .business-timeline-marker i {
    transform: rotate(360deg);
}

.business-timeline-block:hover h4 {
    color: #212384;
}

@media(max-width:900px){
    .business-timeline-line::before { left: 20px; }
    .business-timeline-block {
        width: 100%;
        padding-left: 60px;
        padding-right: 20px;
        text-align: left;
        left: 0;
    }
    .business-timeline-marker { left: 12px !important; }
}
</style>

<section class="business-timeline-wrapper">
    <h2 class="core-main-heading">Commercial & Office <span>AMC Solutions</span></h2>
    <div class="business-timeline-line">
        <div class="business-timeline-block left">
            <div class="business-timeline-marker"><i class="fas fa-bolt"></i></div>
            <div class="business-content-card">
                <h4>Office Power Continuity</h4>
                <p>Businesses rely on uninterrupted electricity, making an <strong>Inverter AMC For Office</strong> essential. Our <strong>Battery AMC for Office</strong> supports workstations, routers, printers, and servers.</p>
            </div>
        </div>
        <div class="business-timeline-block right">
            <div class="business-timeline-marker"><i class="fas fa-store"></i></div>
            <div class="business-content-card">
                <h4>Retail & Showroom Reliability</h4>
                <p>Retailers choose an <strong>Inverter AMC For Shop</strong>, while premium outlets depend on an <strong>inverter AMC for showroom</strong> to prevent downtime and revenue loss.</p>
            </div>
        </div>
        <div class="business-timeline-block left">
            <div class="business-timeline-marker"><i class="fas fa-building"></i></div>
            <div class="business-content-card">
                <h4>SMEs & Corporate Offices</h4>
                <p>Small businesses rely on structured AMC coverage, while large organizations use a planned <strong>inverter battery AMC for office</strong> to maintain productivity during long outages.</p>
            </div>
        </div>
        <div class="business-timeline-block right">
            <div class="business-timeline-marker"><i class="fas fa-university"></i></div>
            <div class="business-content-card">
                <h4>Banking & Financial Institutions</h4>
                <p>Banks and financial institutions depend on <strong>inverter AMC solutions</strong> where uptime, data protection, and operational continuity are non-negotiable.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SECTION 7: UPS INTEGRATION ==================== -->
<style>
/* power-backup-showcase */
.power-backup-showcase {
    padding: 70px 8%;
    font-family: 'Montserrat';
    background: #ffffff;
}

.power-showcase-container {
    max-width: 900px;
    margin: auto;
}

.power-showcase-box {
    background: #fff;
    margin-bottom: 15px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    overflow: hidden;
    transition: all 0.3s ease;
    border: 2px solid transparent;
    font-size: 20px;
}

.power-showcase-title {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 34px 22px;
    font-size: 22px;
    font-weight: 600;
    color: #f37021;
    cursor: pointer;
    transition: color 0.4s ease;
}

.power-showcase-arrow {
    width: 12px;
    height: 12px;
    border-right: 3px solid #f37021;
    border-bottom: 3px solid #f37021;
    transform: rotate(45deg);
    transition: all 0.4s ease;
}

.power-showcase-detail {
    max-height: 0;
    overflow: hidden;
    padding: 0 22px;
    transition: max-height 0.4s ease;
    font-size: 18px;
}

.power-showcase-detail p {
    font-size: 18px;
    line-height: 1.7;
    color: #f37021;
    padding-bottom: 18px;
    transition: color 0.4s ease;
}

.power-showcase-box:hover .power-showcase-detail {
    max-height: 200px;
}

.power-showcase-box:hover .power-showcase-detail p {
    color: #000;
}

.power-showcase-box:hover .power-showcase-title {
    color: #212384;
}

.power-showcase-box:hover .power-showcase-arrow {
    transform: rotate(225deg);
    border-right-color: #212384;
    border-bottom-color: #212384;
}

.power-showcase-box:hover {
    border-color: #f37021;
}
</style>

<section class="power-backup-showcase">
    <h2 class="core-main-heading">UPS & Power Backup <span>AMC Integration</span></h2>
    <div class="power-showcase-container">
        <div class="power-showcase-box">
            <div class="power-showcase-title">
                UPS & Inverter Coordination
                <span class="power-showcase-arrow"></span>
            </div>
            <div class="power-showcase-detail">
                <p>An <strong>Inverter AMC For UPS Systems</strong> ensures smooth load sharing and stable backup, while battery AMC coverage protects against sudden power fluctuations.</p>
            </div>
        </div>
        <div class="power-showcase-box">
            <div class="power-showcase-title">
                Online & Offline UPS Support
                <span class="power-showcase-arrow"></span>
            </div>
            <div class="power-showcase-detail">
                <p>Whether it is <strong>Online UPS</strong> or <strong>Offline UPS</strong>, each AMC plan is tailored to maintain optimal efficiency and dependable backup.</p>
            </div>
        </div>
        <div class="power-showcase-box">
            <div class="power-showcase-title">
                Critical Infrastructure Protection
                <span class="power-showcase-arrow"></span>
            </div>
            <div class="power-showcase-detail">
                <p>Server rooms, data centers, and mission-critical loads remain protected with structured <strong>AMC Support Designed</strong> for continuous uptime.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SECTION 8: LIFT & SECURITY ==================== -->
<style>
/* facility-protection-grid */
.facility-protection-grid {
    padding: 110px 20px;
    background: #ffffff;
    font-family: 'Montserrat', sans-serif;
    position: relative;
    overflow: hidden;
}

.facility-grid-container {
    max-width: 1171px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 45px;
}

.facility-card-item {
    background: #ffffff;
    padding: 45px 35px;
    border-radius: 20px;
    box-shadow: 0 25px 65px rgba(33,35,132,0.12);
    transition: .45s;
    border: 2px solid transparent;
}

.facility-card-item:hover {
    transform: translateY(-12px) scale(1.02);
    box-shadow: 0 35px 90px rgba(33,35,132,0.18);
    border: 2px solid #212384;
}

.facility-icon-circle {
    width: 55px;
    height: 55px;
    margin-left: 107px;
    border-radius: 50%;
    background: linear-gradient(135deg, #f37021, #ff9a4c);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    margin-bottom: 22px;
    box-shadow: 0 15px 40px rgba(243,96,4,0.35);
    transition: .4s;
}

.facility-card-item:hover .facility-icon-circle {
    transform: scale(1.15) rotate(8deg);
    background: linear-gradient(135deg, #212384, #4450d1);
    box-shadow: 0 20px 50px rgba(33,35,132,0.35);
}

.facility-card-item p {
    font-size: 17px;
    line-height: 1.8;
    color: #000000;
    text-align: justify;
}

@media(max-width:768px){
    .facility-card-item { padding: 35px 25px; }
}
</style>

<section class="facility-protection-grid">
    <h2 class="core-main-heading">Lift, Security, And <span>Automation AMC</span></h2>
    <div class="facility-grid-container">
        <div class="facility-card-item">
            <div class="facility-icon-circle"><i class="fa-solid fa-elevator"></i></div>
            <p>Vertical transportation safety is ensured through an inverter AMC for lift, while residential towers depend on an inverter AMC for elevator. Surveillance infrastructure is protected through an inverter AMC for CCTV.</p>
        </div>
        <div class="facility-card-item">
            <div class="facility-icon-circle"><i class="fa-solid fa-shield-halved"></i></div>
            <p>Modern facilities rely on an inverter AMC for security system and inverter AMC for access control. Fire safety installations depend on an inverter AMC for fire alarm system.</p>
        </div>
        <div class="facility-card-item">
            <div class="facility-icon-circle"><i class="fa-solid fa-network-wired"></i></div>
            <p>Manufacturing units require an inverter AMC for control panel, telecom operations rely on an inverter AMC for telecom equipment, and IT environments depend on an inverter AMC for networking equipment.</p>
        </div>
    </div>
</section>

<!-- ==================== SECTION 9: BATTERY COVERAGE ==================== -->
<style>
/* battery-protection-tiles */
.battery-protection-tiles {
    padding: 90px 20px;
    background: #ffffff;
    font-family: 'Montserrat';
}

.battery-tile-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 35px;
    margin-left: 4rem;
    margin-right: 4rem;
}

.battery-tile-item {
    position: relative;
    background: #fff;
    padding: 40px 32px;
    border-radius: 22px;
    box-shadow: 0 18px 45px rgba(33,35,132,0.12);
    transition: all 0.4s ease;
    overflow: hidden;
    border: 2px solid transparent;
}

.battery-tile-badge {
    display: inline-block;
    margin-left: -11px;
    margin-bottom: 18px;
    padding: 6px 16px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    color: #fff;
    background: #f37021;
    border-radius: 30px;
}

.battery-tile-item p {
    font-size: 17px;
    line-height: 1.9;
    color: #000;
    margin: 0;
    text-align: justify;
}

.battery-tile-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 35px 80px rgba(33,35,132,0.18);
    border: 2px solid #212384;
}

.battery-tile-item:hover .battery-tile-badge {
    background: #212384;
}

@media(max-width:768px){
    .battery-tile-grid { margin-left: 0; margin-right: 0; }
    .battery-tile-item { padding: 32px 26px; }
}
</style>

<section class="battery-protection-tiles">
    <h2 class="core-main-heading">Battery-Focused <span>All-Inclusive Coverage</span></h2>
    <div class="battery-tile-grid">
        <div class="battery-tile-item">
            <div class="battery-tile-badge">Coverage</div>
            <p>An inverter battery AMC with replacement eliminates surprise expenses during battery failure. Customers prefer an inverter battery AMC including parts because it delivers predictable costs and long-term savings.</p>
        </div>
        <div class="battery-tile-item">
            <div class="battery-tile-badge">Protection</div>
            <p>Our inverter battery AMC including batteries ensures end-to-end protection, while an inverter battery AMC all parts covered plan offers complete peace of mind. For demanding environments, an inverter battery AMC with spares minimizes downtime.</p>
        </div>
        <div class="battery-tile-item">
            <div class="battery-tile-badge">Compatibility</div>
            <p>We support an inverter battery AMC for tubular battery, lithium battery, and lead acid battery. Renewable installations benefit from an inverter battery AMC for solar battery, while large systems rely on an inverter battery AMC for battery banks.</p>
        </div>
    </div>
</section>

<!-- ==================== SECTION 10: PRICING & LOCAL ==================== -->
<style>
/* cost-transparency-grid */
.cost-transparency-grid {
    padding: 50px 20px;
    font-family: 'Montserrat';
}

.cost-grid-container {
    max-width: 1100px;
    margin: auto;
    text-align: center;
}

.cost-grid-box {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-left: 130px;
    margin-right: 130px;
    align-items: start;
}

.cost-card-item {
    background: #ffffff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    cursor: pointer;
    transition: 0.4s;
    text-align: left;
    display: flex;
    flex-direction: column;
}

.cost-card-header {
    display: flex;
    align-items: center;
    gap: 12px;
}

.cost-card-header i {
    background: #f37021;
    color: #fff;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-size: 18px;
    transition: 0.4s;
}

.cost-card-header h4 {
    font-size: 19px;
    color: #212384;
}

.cost-card-detail {
    margin-top: 15px;
    font-size: 16px;
    line-height: 1.7;
    color: #000000;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s ease, opacity 0.4s ease;
    opacity: 0;
}

.cost-card-item:hover .cost-card-detail {
    max-height: 500px;
    opacity: 1;
}

.cost-card-item:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    border: 2px solid #212384;
}

.cost-card-item:hover .cost-card-header i {
    background: #212384;
    transform: rotate(360deg);
}

@media(max-width:768px){
    .cost-grid-box {
        grid-template-columns: 1fr;
        margin-left: 0;
        margin-right: 0;
    }
}
</style>

<section class="cost-transparency-grid">
    <div class="cost-grid-container">
        <h2 class="core-main-heading">Pricing Transparency & <span>Local Availability</span></h2>
        <div class="cost-grid-box">
            <div class="cost-card-item">
                <div class="cost-card-header">
                    <i class="fa-solid fa-money-bill-wave"></i>
                    <h4>Simple & Transparent Pricing</h4>
                </div>
                <div class="cost-card-detail">
                    Customers often ask about inverter battery AMC price. We provide clear quotations with transparent inverter AMC cost and defined inverter AMC charges.
                </div>
            </div>
            <div class="cost-card-item">
                <div class="cost-card-header">
                    <i class="fa-solid fa-indian-rupee-sign"></i>
                    <h4>Fair Costs Across India</h4>
                </div>
                <div class="cost-card-detail">
                    Our plans include reasonable battery AMC charges, competitive inverter battery AMC cost, and location-based inverter AMC price in India.
                </div>
            </div>
            <div class="cost-card-item">
                <div class="cost-card-header">
                    <i class="fa-solid fa-location-dot"></i>
                    <h4>Fast Local Service Network</h4>
                </div>
                <div class="cost-card-detail">
                    Customers searching for inverter battery AMC near me benefit from our local teams and quick inverter AMC service near me support.
                </div>
            </div>
            <div class="cost-card-item">
                <div class="cost-card-header">
                    <i class="fa-solid fa-shield-halved"></i>
                    <h4>Trusted AMC Provider</h4>
                </div>
                <div class="cost-card-detail">
                    Recognized as a dependable inverter AMC provider and trusted inverter AMC company for long-term service.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SECTION 11: SERVICE & SUPPORT ==================== -->
<style>
/* maintenance-service-grid */
.maintenance-service-grid {
    padding: 50px 20px;
    background: #ffffff;
    font-family: 'Montserrat';
}

.maintenance-grid-container {
    max-width: 1371px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 35px;
}

.maintenance-card-item {
    background: #fff;
    padding: 45px 30px 35px;
    border-radius: 14px;
    text-align: center;
    position: relative;
    box-shadow: 0 12px 35px rgba(0,0,0,0.08);
    transition: 0.4s;
    border: 2px solid transparent;
}

.maintenance-card-icon {
    width: 70px;
    height: 70px;
    background: #f37021;
    color: #fff;
    font-size: 26px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    position: absolute;
    top: -35px;
    left: 50%;
    transform: translateX(-50%);
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    transition: 0.4s;
}

.maintenance-card-item:hover .maintenance-card-icon {
    background: #1f2a8a;
    transform: translateX(-50%) rotate(15deg);
}

.maintenance-card-title {
    font-size: 20px;
    color: #f37021;
    margin-top: 10px;
    margin-bottom: 15px;
    font-weight: 600;
    transition: 0.4s;
}

.maintenance-card-item:hover .maintenance-card-title {
    color: #1f2a8a;
}

.maintenance-card-item p {
    font-size: 16.5px;
    line-height: 1.8;
    color: #000000;
    text-align: justify;
}

.maintenance-card-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.15);
    border: 2px solid #1f2a8a;
}

@media(max-width:768px){
    .maintenance-card-item { padding: 40px 25px; }
}
</style>

<section class="maintenance-service-grid">
        <h2 class="core-main-heading" style="    margin-bottom: 110px;">Service, Support & <span>Preventive Maintenance</span></h2>

    <div class="maintenance-grid-container">
        <div class="maintenance-card-item">
            <div class="maintenance-card-icon"><i class="fas fa-shield-alt"></i></div>
            <h3 class="maintenance-card-title">Reliable AMC Service Foundation</h3>
            <p>As an experienced inverter AMC service provider, we focus on long-term system reliability. Our inverter AMC maintenance plans include scheduled inspections, professional cleaning, and accurate load testing.</p>
        </div>
        <div class="maintenance-card-item">
            <div class="maintenance-card-icon"><i class="fas fa-user-cog"></i></div>
            <h3 class="maintenance-card-title">Dedicated Support & Certified Technicians</h3>
            <p>Every customer receives priority inverter AMC support, a clearly documented inverter AMC service contract, and a structured inverter AMC annual contract. All site visits are handled by trained inverter AMC technician professionals.</p>
        </div>
        <div class="maintenance-card-item">
            <div class="maintenance-card-icon"><i class="fas fa-tools"></i></div>
            <h3 class="maintenance-card-title">Fast Repairs & Preventive Protection</h3>
            <p>We deliver prompt inverter AMC repair service, systematic inverter AMC troubleshooting, and complete inverter AMC preventive maintenance. Critical failures are handled efficiently through our inverter AMC breakdown service.</p>
        </div>
    </div>
</section>

<!-- ==================== SECTION 12: RELIABILITY & WARRANTY ==================== -->
<style>
/* trust-value-showcase */
.trust-value-showcase {
    padding: 90px 20px;
    background: #ffffff;
    font-family: 'Montserrat';
}

.trust-value-container {
    max-width: 1100px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 40px;
}

.trust-card-item {
    background: #fff;
    border-radius: 22px;
    padding: 45px 32px 38px;
    box-shadow: 0 18px 45px rgba(33,35,132,0.12);
    transition: 0.4s;
    text-align: center;
    border-bottom: 3px solid transparent;
}

.trust-card-icon {
    width: 70px;
    height: 70px;
    margin: 0 auto 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 30px;
    border-radius: 50%;
    background: linear-gradient(120deg, #f37021, #1f2a8a);
    color: #fff;
    transition: 0.4s;
}

.trust-card-item:hover .trust-card-icon {
    transform: rotate(12deg) scale(1.1);
}

.trust-card-heading {
    font-size: 22px;
    font-weight: 600;
    color: #f37021;
    margin-bottom: 18px;
    transition: 0.4s;
}

.trust-card-item:hover .trust-card-heading {
    color: #1f2a8a;
}

.trust-card-item p {
    font-size: 16.5px;
    line-height: 1.9;
    color: #000000;
    text-align: justify;
}

.trust-card-item:hover {
    transform: translateY(-12px);
    box-shadow: 0 35px 75px rgba(33,35,132,0.22);
    border-bottom: 4px solid #1f2a8a;
}

@media(max-width:768px){
    .trust-card-item { padding: 40px 26px; }
}
</style>

<section class="trust-value-showcase">
    <h2 class="core-main-heading">Reliability, Warranty & <span>Long-Term Value</span></h2>
    <div class="trust-value-container">
        <div class="trust-card-item">
            <div class="trust-card-icon"><i class="fas fa-shield-alt"></i></div>
            <h3 class="trust-card-heading">Proven Reliability</h3>
            <p>Customers choose us for a <strong>reliable inverter AMC</strong> built on tested processes and real-world performance. Our systems are designed to work when power matters most.</p>
        </div>
        <div class="trust-card-item">
            <div class="trust-card-icon"><i class="fas fa-certificate"></i></div>
            <h3 class="trust-card-heading">Warranty-Backed Confidence</h3>
            <p>Every plan includes <strong>inverter AMC with warranty</strong>, complete documentation, and accountability — giving customers confidence that their investment is fully protected.</p>
        </div>
        <div class="trust-card-item">
            <div class="trust-card-icon"><i class="fas fa-tools"></i></div>
            <h3 class="trust-card-heading">Long-Term Peace of Mind</h3>
            <p>A <strong>long-term inverter AMC contract</strong> ensures stable performance, longer system life, and predictable maintenance — no surprises, no stress.</p>
        </div>
    </div>
</section>

<!-- ==================== SECTION 13: INDIA-SPECIFIC ==================== -->
<style>
/* india-power-conditions */
.india-power-conditions {
    padding: 80px 20px;
    background: #ffffff;
    font-family: 'Montserrat';
}

.india-conditions-container {
    max-width: 1100px;
    margin: auto;
}

.india-timeline-strip {
    display: flex;
    flex-direction: column;
    gap: 50px;
    position: relative;
}

.india-timeline-piece {
    display: flex;
    align-items: flex-start;
    gap: 25px;
    transition: all 0.4s ease;
}

.india-piece-badge {
    min-width: 60px;
    min-height: 60px;
    background: linear-gradient(135deg, #f37021, #212384);
    color: #fff;
    font-weight: 700;
    margin-top: 30px;
    font-size: 20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 8px 20px rgba(33,35,132,0.2);
    flex-shrink: 0;
    transition: transform 0.3s ease;
}

.india-timeline-piece:hover .india-piece-badge {
    transform: scale(1.2);
}

.india-piece-card {
    background: #fff;
    padding: 25px 30px;
    border-radius: 16px;
    box-shadow: 0 15px 40px rgba(33,35,132,0.12);
    transition: all 0.4s ease;
    flex: 1;
    border: 2px solid transparent;
}

.india-timeline-piece:hover .india-piece-card {
    transform: translateY(-5px);
    box-shadow: 0 25px 60px rgba(243,112,33,0.15);
    border: 2px solid #212384;
}

.india-piece-card p {
    font-size: 16.5px;
    color: #000000;
    line-height: 1.8;
    text-align: justify;
}

@media(max-width:768px){
    .india-timeline-piece { flex-direction: column; gap: 15px; }
    .india-piece-badge { width: 50px; height: 50px; font-size: 18px; align-self: center; }
}
</style>

<section class="india-power-conditions">
    <div class="india-conditions-container">
        <h2 class="core-main-heading">India-Specific <span>Power Conditions</span></h2>
        <div class="india-timeline-strip">
            <div class="india-timeline-piece">
                <div class="india-piece-badge">01</div>
                <div class="india-piece-card">
                    <p>Our services are tailored for <strong>inverter AMC India requirements</strong> and supported by <strong>inverter battery AMC</strong> India expertise. We deliver dependable <strong>inverter AMC service</strong> through trained teams.</p>
                </div>
            </div>
            <div class="india-timeline-piece">
                <div class="india-piece-badge">02</div>
                <div class="india-piece-card">
                    <p>As a leading <strong>inverter AMC provider India</strong>, we understand voltage instability and infrastructure challenges. Our <strong>inverter AMC</strong> for Indian conditions addresses power cuts, voltage fluctuation, and frequent outages.</p>
                </div>
            </div>
            <div class="india-timeline-piece">
                <div class="india-piece-badge">03</div>
                <div class="india-piece-card">
                    <p>Facilities benefit from <strong>inverter AMC for backup reliability</strong> and <strong>inverter AMC</strong> for continuous operation across diverse environments.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SECTION 14: WHY CHOOSE US ==================== -->
<style>
/* brand-advantage-grid */
.brand-advantage-grid {
    padding: 50px 20px;
    font-family: 'Montserrat';
}

.brand-advantage-container {
    max-width: 1100px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 35px;
}

.brand-advantage-card {
    position: relative;
    background: #fff;
    padding: 35px 30px;
    border-radius: 12px;
    border: 2px solid transparent;
    box-shadow: 0 15px 40px rgba(0,0,0,0.08);
    overflow: hidden;
    transition: 0.4s;
}

.brand-advantage-icon {
    font-size: 28px;
    margin-left: 114px;
    width: 55px;
    height: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    background: #212384;
    color: #fff;
    margin-bottom: 18px;
    transition: 0.4s;
}

.brand-advantage-card p {
    font-size: 16px;
    line-height: 1.8;
    color: #000000;
    text-align: justify;
}

.brand-advantage-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 60px rgba(33,35,132,0.18);
    border: 2px solid #f37021;
}

.brand-advantage-card:hover .brand-advantage-icon {
    background: #f37021;
    transform: rotate(10deg) scale(1.1);
}

@media(max-width:768px){
    .brand-advantage-card { padding: 30px 25px; }
}
</style>

<section class="brand-advantage-grid">
    <h2 class="core-main-heading">Why Choose Indus Power <span>Industries Pvt Ltd?</span></h2>
    <div class="brand-advantage-container">
        <div class="brand-advantage-card">
            <div class="brand-advantage-icon"><i class="fas fa-star"></i></div>
            <p>Customers choose us for the best inverter battery AMC backed by industry experience. Our solutions are often rated as the best inverter AMC service for quality and response time.</p>
        </div>
        <div class="brand-advantage-card">
            <div class="brand-advantage-icon"><i class="fas fa-bolt"></i></div>
            <p>We provide a complete inverter AMC solution, a dependable inverter AMC power solution, and a structured inverter AMC maintenance solution. Each plan supports both inverter systems and battery systems together.</p>
        </div>
        <div class="brand-advantage-card">
            <div class="brand-advantage-icon"><i class="fas fa-shield-alt"></i></div>
            <p>For total coverage, customers rely on our inverter AMC for complete power backup, professionally managed inverter AMC contract services and our flagship all-inclusive inverter battery AMC India offering.</p>
        </div>
    </div>
</section>

<!-- ==================== SECTION 15: CONCLUSION ==================== -->
<style>
/* final-summary-block */
.final-summary-block {
    padding: 50px 20px;
    text-align: center;
    position: relative;
    border-radius: 20px;
    margin: 50px auto;
    font-family: 'Montserrat';
}

.final-summary-block p {
    font-size: 18px;
    line-height: 1.8;
    color: #333;
    margin-bottom: 0;
    text-align: justify;
    margin-left: 5rem;
    margin-right: 5rem;
}

@media(max-width:768px){
    .final-summary-block p { margin-left: 1rem; margin-right: 1rem; }
}
</style>

<section class="final-summary-block">
    <h2 class="core-main-heading"><span>Conclusion</span></h2>
    <p>An <strong>All-Inclusive AMC</strong> from <strong>Indus Power Industries Pvt Ltd</strong> is not just a service contract; it is a long-term partnership designed to protect your power backup investment, ensure uninterrupted operations, and deliver measurable value year after year. Whether for residential comfort, commercial continuity, or industrial reliability, our inverter and battery AMC solutions are built to perform.</p>
</section>

<?php include('footer.php'); ?>

</body>
</html>