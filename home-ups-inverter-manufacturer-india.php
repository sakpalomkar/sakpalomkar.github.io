<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Indusups - Home UPS Inverter</title>

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
        <h1>Home UPS Inverter Manufacturer India</h1>
        <div class="indus-breadcrumb-nav">
            <a href="#">Home</a> 
            &nbsp;»&nbsp; 
            <a href="#">Products</a> 
            &nbsp;»&nbsp;
            <a href="#">Offline UPS</a> 
            &nbsp;»&nbsp; 
            <span>Home UPS Inverter</span>
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
    width:340px;
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
        <img src="img/Home UPS 1.png" class="indus-product-image" alt="Home UPS Inverter">
        <img src="img/Home UPS 2.png" class="indus-product-image" alt="Home UPS Inverter">
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
    <img src="" alt="Home UPS Inverter" id="lightboxImg">
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

<!-- Understanding Home UPS Inverter Start -->
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

.indus-section-heading {
    text-align: center;
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 60px;
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
    font-size:16px;
    line-height:1.8;
    color:#444;
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
        Reliable, Efficient & Long-Lasting <span>Power Backup for Modern Homes</span>
    </h2>
    
    <div class="indus-grid-container">
        <div class="indus-content-card">
            <p>
                <i class="fas fa-bolt" style="color: #f37021; margin-right: 12px;"></i> In today's world, where frequent power cuts, voltage fluctuations, and increasing dependence on electrical appliances have become part of everyday life, a <strong>Home Inverter</strong> has emerged as an essential power backup solution that ensures uninterrupted comfort, safety, and productivity for households across urban and rural areas alike.
            </p>
        </div>

        <div class="indus-content-card">
            <p>
                At <strong>Indus Power Industries Pvt. Ltd.</strong>, we design and manufacture advanced inverter systems that deliver dependable performance, long backup duration, and superior energy efficiency, making them ideal for Indian power conditions and modern residential requirements.
            </p>
        </div>

        <div class="indus-content-card">
            <p>
                A <strong>Home Inverter</strong> is an electrical device that stores energy in batteries and supplies electricity during power outages, ensuring that essential household appliances continue to operate without interruption. An inverter for home is specifically designed to provide clean, stable power suitable for domestic loads such as lights, fans, televisions, refrigerators, and computers.
            </p>
        </div>
    </div>
</section>
<!-- Understanding Home UPS Inverter End -->

<!-- What is Home UPS Section Start -->
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
    max-width: 1000px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

.indus-clean-section p {
    font-size: 17px;
    line-height: 1.8;
    margin-bottom: 20px;
    color: #444;
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
    color: #444;
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
            Understanding <span>Home Inverter Systems</span>
        </h2>
        
        <p>A <strong>House Inverter</strong> or <strong>Residential Inverter</strong> plays a vital role in maintaining daily routines during outages by acting as a reliable power inverter for home use. For families facing frequent electricity disruptions, a <strong>Home Power Backup</strong> solution is no longer a luxury but a necessity.</p>

        <p>A well-designed <strong>Inverter Battery for Home</strong> works seamlessly with the inverter to deliver dependable backup power, while a <strong>Home UPS Inverter</strong> offers fast changeover and enhanced protection for sensitive electronics. Many users also refer to these systems as a <strong>Domestic Inverter</strong> or a complete <strong>Home Inverter System</strong>, emphasizing their residential application.</p>

        <h3>How A Home Inverter System Operates</h3>
        
        <ul class="indus-steps-list">
            <li>
                <strong>1. Normal Operation</strong> - Mains power charges the battery and supplies load directly
            </li>
            <li>
                <strong>2. Power Failure</strong> - Automatically switches to inverter mode within milliseconds
            </li>
            <li>
                <strong>3. Backup Mode</strong> - Battery supplies power through inverter for continuous operation
            </li>
            <li>
                <strong>4. Power Restored</strong> - Switches back to mains and recharges the battery automatically
            </li>
        </ul>

        <p>This operating principle makes the <strong>Home UPS Inverter</strong> ideal for residential applications requiring reliable backup during power cuts.</p>
    </div>
</section>
<!-- What is Home UPS Section End -->

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
    font-weight: 600;
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
}

.indus-back-face h3{
    font-size:18px;
    color:#212384;
    margin-bottom:10px;
        margin-top: 55px;
        font-weight: 600;
        text-align: center;
}

.indus-back-face p{
    font-size:16px;
    line-height:1.7;
    text-align: justify;
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
            Applications Of <span>Home UPS Inverter</span>
        </h2>

        

        <div class="indus-card-grid">
            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>01</span>
                        <h3>Apartments & Flats</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Apartments & Flats</h3>
                        <p>An <strong>Inverter For Flat</strong> or <strong>Inverter For Apartment</strong> provides reliable backup for essential appliances in multi-story residential buildings.</p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>02</span>
                        <h3>Independent Houses</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Independent Houses</h3>
                        <p>An <strong>Inverter For Bungalow</strong> or <strong>Inverter For House</strong> supports higher load requirements for larger homes with multiple appliances.</p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>03</span>
                        <h3>Villas & Premium Homes</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Villas & Premium Homes</h3>
                        <p>Premium residences require <strong>High Capacity Home Inverter</strong> solutions for uninterrupted luxury living.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="indus-card-grid" style="margin-top:20px;">
            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>04</span>
                        <h3>Home Offices</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Home Offices</h3>
                        <p>Protects computers, routers, and office equipment from data loss during power cuts.</p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>05</span>
                        <h3>Essential Appliances</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Essential Appliances</h3>
                        <p>Supports <strong>Inverter For Lights and Fans</strong>, <strong>Inverter For TV and Fridge</strong>, and other essential household equipment.</p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>06</span>
                        <h3>Areas with Frequent Cuts</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Areas with Frequent Cuts</h3>
                        <p>Ideal <strong>Inverter For Frequent Power Cuts</strong> ensuring uninterrupted daily life.</p>
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
.indus-feature-item:nth-child(9) { animation-delay: 0.9s; }
.indus-feature-item:nth-child(10) { animation-delay: 1s; }

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

<section class="indus-features-section">
    <div class="indus-features-container">
        <h2 class="indus-section-heading">
            Features Of <span>INDUS Home UPS</span>
        </h2>

        

        <div class="indus-feature-item">
            <h3>Advanced DSP / Microcontroller Based Design</h3>
            <p>The system uses advanced DSP or microcontroller-based control for precise power regulation, intelligent monitoring, and improved system reliability.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Pure Sine Wave Output</h3>
            <p>A <strong>Sine Wave Inverter For Home</strong> ensures smooth and stable power that closely resembles grid electricity, making it safe for all household appliances including sensitive electronics.</p>
        </div>

        <div class="indus-feature-item">
            <h3>High Inverter Efficiency</h3>
            <p>With efficiency greater than 90%, the system minimizes energy losses and reduces operating costs. A <strong>High Efficiency Inverter For Home</strong> ensures optimal performance.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Intelligent Multistage Charging</h3>
            <p>Advanced charging method ensures optimal battery health and extends battery life. A <strong>Fast Charging Home Inverter</strong> ensures quick recharge after outages.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Comprehensive Protection Features</h3>
            <p>The Home UPS offers complete protection against overload, short circuit, overcharge, and deep discharge. An <strong>Inverter With Overload Protection</strong> ensures safety under high load conditions.</p>
        </div>

        <div class="indus-feature-item">
            <h3>LCD Display with Status Indication</h3>
            <p>An <strong>Inverter With LCD Display</strong> provides real-time information including battery status, load condition, and fault indications.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Low Noise Operation</h3>
            <p>A <strong>Low Noise Home Inverter</strong> ensures silent operation for residential comfort, especially during night hours.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Automatic Operation</h3>
            <p>An <strong>Automatic Home Inverter</strong> switches seamlessly during power cuts without manual intervention.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Voltage Stabilizer Integration</h3>
            <p>A <strong>Voltage Stabilizer Inverter Combo</strong> handles voltage fluctuations efficiently, making it ideal for areas with unstable grid supply.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Solar Compatible Options</h3>
            <p>A <strong>Home Inverter With Solar Integration</strong> or <strong>Hybrid Inverter For Home</strong> supports both grid and solar power for reduced electricity bills.</p>
        </div>
    </div>
</section>
<!-- Features Section End -->

<!-- Key Benefits Timeline Section Start -->
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
    color: #333;
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
            Why Choose <span>INDUS Home UPS?</span>
        </h2>   

        <div class="indus-timeline-wrapper">
            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p><strong>Reliable Home Inverter</strong> - Consistent power backup during outages</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p><strong>Energy Efficient Home Inverter</strong> - Reduces electricity consumption and operational cost</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p><strong>Long Life Home Inverter</strong> - Durable design for years of trouble-free operation</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p><strong>Safe Inverter For Home</strong> - Advanced safety mechanisms protect appliances and users</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p><strong>Best Inverter For Indian Homes</strong> - Designed for local power conditions</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p><strong>Trusted Home Inverter</strong> - Proven performance across thousands of homes</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p><strong>Comprehensive Warranty & Support</strong> - Nationwide service network</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Key Benefits Timeline Section End -->

















<!-- Home UPS Technical Specifications -->

<style>
.indus-spec-table {
    width:100%;
    border-collapse: collapse;
    margin-top:30px;
    font-size:15px;
}

.indus-spec-table th,
.indus-spec-table td{
    border:1px solid #dcdcdc;
    padding:10px 12px;
    text-align:center;
    transition: all 0.3s ease;
}

.indus-spec-table thead th{
    background:#252f74;
    color:#fff;
    font-weight:600;
}

.indus-spec-table .spec-left{
    text-align:left;
    font-weight:600;
    color:#2a3791;
}

.indus-spec-title{
    text-align:center;
    font-size:28px;
    font-weight:600;
    margin-bottom:15px;
}

.indus-spec-title span{
    color:#f37021;
}

.indus-section-bar{
    background:#252f74;
    color:#fff;
    text-align:center;
    font-weight:600;
    padding:12px;
}

/* Hover Effect */
.indus-spec-table tbody tr:hover{
    background:#fff7f0;
}

.indus-spec-table tbody tr:hover td{
    border:1px solid #ff6a00;
}

@media(max-width:900px){
.indus-spec-table{
    font-size:13px;
}
}
</style>


<div class="indus-main-wrapper" style="padding: 10px 30px;">

<h2 class="indus-section-heading">
            Technical <span>Specifications</span>
        </h2>

<table class="indus-spec-table">

<thead>
<tr>
<th>Rating</th>
<th>6KVA</th>
<th>8KVA</th>
<th>10KVA</th>
<th>15KVA</th>
<th>20KVA</th>
<th>30KVA</th>
<th>40KVA</th>
<th>50KVA</th>
<th>60KVA</th>
<th>75KVA</th>
<th>100KVA</th>
</tr>
</thead>

<tbody>

<tr>
<td class="spec-left">DC Voltage</td>
<td>72V</td>
<td>96V</td>
<td>144V</td>
<td>180V</td>
<td>240V</td>
<td>360V</td>
<td>360V</td>
<td>360V</td>
<td>360V</td>
<td>360V</td>
<td>360V</td>
</tr>

<tr>
<td class="spec-left">Mains Input</td>
<td colspan="11">415V ±15% -15%</td>
</tr>

<tr>
<td class="spec-left">Frequency</td>
<td colspan="11">50Hz ±4Hz</td>
</tr>

<tr>
<td class="spec-left">Charger Type</td>
<td colspan="11">CCCV (Constant Current Constant Voltage type)</td>
</tr>


<tr>
<td colspan="12" class="indus-section-bar">
Inverter Mode
</td>
</tr>

<tr>
<td class="spec-left">Technology</td>
<td colspan="11">DSP based IGBT Technology</td>
</tr>

<tr>
<td class="spec-left">Output Voltage</td>
<td colspan="11">400 / 415V AC 3Ph</td>
</tr>

<tr>
<td class="spec-left">Frequency</td>
<td colspan="11">50Hz ±0.1Hz</td>
</tr>

<tr>
<td class="spec-left">Waveform</td>
<td colspan="11">Pure Sine wave</td>
</tr>

<tr>
<td class="spec-left">Harmonic Distortion</td>
<td colspan="11">Less than 3% on Linear Load</td>
</tr>

<tr>
<td class="spec-left">Inverter Efficiency</td>
<td colspan="11">Up to 90% / Up to 92% / Up to 95%</td>
</tr>

<tr>
<td class="spec-left">Power Factor</td>
<td colspan="11">0.8</td>
</tr>

<tr>
<td class="spec-left">Overload</td>
<td colspan="11">110% for 8 sec</td>
</tr>

<tr>
<td class="spec-left">Crest Factor</td>
<td colspan="11">3:1</td>
</tr>

<tr>
<td class="spec-left">Audible Noise</td>
<td colspan="11">Less than 65 dB at 1 Meter</td>
</tr>

<tr>
<td class="spec-left">Duty Cycle</td>
<td colspan="11">Continuous</td>
</tr>

</tbody>
</table>

</div>

</div>


















    <!-- Installation & Maintenance Section -->
    <h2 class="indus-section-heading" style="margin-top: 40px; ">
        Installation, Maintenance, <span>And AMC Services</span>
    </h2>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; margin: 30px 0;     padding: 0px 30px;">
        <div class="indus-content-card" style="padding: 25px;">
            <i class="fas fa-tools" style="font-size: 2.5rem; color: #f37021; margin-bottom: 15px;margin-left: 135px;"></i>
            <h3 style="color: #212384; margin-bottom: 10px; font-size: 25px; font-weight: 600;text-align: center; ">Professional Installation</h3>
            <p>Professional Home Inverter Installation ensures safety and optimal performance. Proper Home Inverter Wiring prevents power loss and safety risks.</p>
        </div>
        
        <div class="indus-content-card" style="padding: 25px;">
            <i class="fas fa-wrench" style="font-size: 2.5rem; color: #f37021; margin-bottom: 15px;margin-left: 135px;"></i>
            <h3 style="color: #212384; margin-bottom: 10px; font-size: 25px; font-weight: 600;text-align: center;">Regular Maintenance</h3>
            <p>Regular Home Inverter Maintenance improves system life. Search for Home Inverter Service Near Me for quick support.</p>
        </div>
        
        <div class="indus-content-card" style="padding: 25px;">
            <i class="fas fa-file-contract" style="font-size: 2.5rem; color: #f37021; margin-bottom: 15px;margin-left: 135px;"></i>
            <h3 style="color: #212384; margin-bottom: 10px; font-size: 25px; font-weight: 600;text-align: center;">AMC & Support</h3>
            <p>Our Home Inverter AMC plans provide peace of mind through scheduled servicing. Inverter Repair For Home and genuine Inverter Spare Parts For Home available.</p>
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
            <i class="fas fa-map-marker-alt" style="color: #f37021; margin-right: 8px;"></i> Find <strong>Home Inverter Near Me</strong>
        </span>
        <span style="background: white; padding: 0.9rem 2.4rem; border-radius: 60px 10px 60px 10px; border: 2px solid #f37021; font-weight: 600; color: #1e2a78;">
            <i class="fas fa-truck" style="color: #f37021; margin-right: 8px;"></i> All India Delivery
        </span>
    </div>

    <p style="font-size: 1.1rem; line-height: 1.8; color: #444; text-align: center; max-width: 900px; margin: 0 auto;">
        As a leading Home Inverter Manufacturer and Home Inverter Company in India, we operate through a wide network of Inverter Dealers Near Me and distributors across the country. Contact us for competitive Home Inverter Price, technical specifications, and installation support.
    </p>

    <!-- Conclusion -->
    <h2 class="indus-section-heading" style="margin-top: 40px;">
        <span>Conclusion</span>
    </h2>

    <p style="font-size: 18px; line-height: 1.8; color: #444; text-align: justify; 
    padding: 0px 60px;">
        A Home Inverter is a long-term investment in comfort, safety, and reliability. Whether you need basic backup for lights and fans or advanced solutions for modern appliances and solar integration, choosing the right inverter makes all the difference.
        <br><br>
        At Indus Power Industries Pvt. Ltd., we combine engineering excellence, robust design, and nationwide service support to deliver Best Inverter For Home solutions you can trust.
        <br><br>
    </p>
</div>
<!-- Technical Specifications Section End -->

<?php include('footer.php'); ?>

</body>
</html>