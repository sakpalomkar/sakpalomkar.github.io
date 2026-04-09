<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Indusups - Sine Wave UPS Inverter</title>

<!-- Google Font & Font Awesome (exactly as in new design) -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
        <h1>Sine Wave UPS Inverter Manufacturer India</h1>
        <div class="indus-breadcrumb-nav">
            <a href="#">Home</a> 
            &nbsp;»&nbsp; 
            <a href="#">Products</a> 
            &nbsp;»&nbsp;
            <a href="#">Offline UPS</a> 
            &nbsp;»&nbsp; 
            <span>Sine Wave UPS Inverter</span>
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
    gap: 20px;
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
        <img src="img/Sine Wave UPS1.png" class="indus-product-image" alt="Sine Wave UPS Inverter">
        <img src="img/Sine Wave UPS2.png" class="indus-product-image" alt="Sine Wave UPS Inverter">
        <img src="img/Sine Wave UPS3.png" class="indus-product-image" alt="Sine Wave UPS Inverter">

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
    <img src="" alt="Sine Wave UPS Inverter" id="lightboxImg">
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

<!-- Understanding Sine Wave UPS Inverter Start -->
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
    margin-bottom: 50px;
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
    line-height:1.5;
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
        Reliable, Clean & Efficient <span>Power Backup Solutions</span>
    </h2>
    
    <div class="indus-grid-container">
        <div class="indus-content-card">
            <p>
                In today's world, uninterrupted power has become a necessity rather than a luxury, whether it is for homes, offices, shops, or industries. Power cuts, voltage fluctuations, and unstable electricity supply can disrupt daily life and damage sensitive equipment. This is where a <strong>Sine Wave Inverter</strong> plays a critical role by delivering smooth, stable, and clean power output that closely resembles the electricity supplied by the grid.
            </p>
        </div>

        <div class="indus-content-card">
            <p>
                At <strong>Indus Power Industries Pvt. Ltd.</strong>, we specialize in designing and manufacturing advanced inverter solutions that ensure consistent performance, long backup, and maximum safety across residential, commercial, and industrial applications.
            </p>
        </div>

        <div class="indus-content-card">
            <p>
                A <strong>Pure Sine Wave Inverter</strong> is a power backup device that converts DC power stored in batteries into AC power with a waveform identical to utility electricity. This clean waveform ensures that electrical appliances operate efficiently, silently, and without damage.
            </p>
        </div>
    </div>
</section>
<!-- Understanding Sine Wave UPS Inverter End -->

<!-- What is Sine Wave Inverter Section Start -->
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
    font-size: 1.1rem;
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
            What Is <span>A Sine Wave Inverter?</span>
        </h2>
        
        <p>A <strong>Pure Sine Wave Inverter</strong> delivers stable voltage, precise frequency control, and high efficiency, making it suitable for both sensitive electronics and heavy electrical loads. Unlike modified wave systems, sine wave technology eliminates humming noises, overheating, and inefficiencies, making it the preferred choice for modern homes and professional setups.</p>

        <p>A <strong>High Efficiency Sine Wave Inverter</strong> reduces energy loss during conversion, ensuring longer battery backup and lower electricity consumption. A <strong>Silent Sine Wave Inverter</strong> ensures noiseless operation, making it ideal for residential areas, hospitals, offices, and libraries.</p>

        <h3>How Sine Wave Technology Works</h3>
        
        <ul class="indus-steps-list">
            <li>
                <strong>1. Clean Power Output</strong> - Produces waveform identical to grid electricity
            </li>
            <li>
                <strong>2. Voltage Regulation</strong> - Maintains stable voltage for sensitive equipment
            </li>
            <li>
                <strong>3. Harmonic Reduction</strong> - Eliminates harmful harmonics that damage appliances
            </li>
            <li>
                <strong>4. Efficient Operation</strong> - Ensures appliances run cooler and last longer
            </li>
        </ul>

        <p>This operating principle makes the <strong>Sine Wave UPS Inverter</strong> ideal for applications requiring clean, stable power for sensitive electronics.</p>
    </div>
</section>
<!-- What is Sine Wave Inverter Section End -->

<!-- Why Choose Sine Wave Timeline Section Start -->
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
.indus-timeline-item:nth-child(8){animation-delay:1.6s;}

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
            Why Choose <span>Sine Wave Inverter?</span>
        </h2>   

        <div class="indus-timeline-wrapper">
            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p><strong>Pure Sine Wave Output</strong> - Clean power identical to grid electricity</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p><strong>Protects Sensitive Electronics</strong> - Safe for computers, TVs, refrigerators, and medical equipment</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p><strong>No Humming or Noise</strong> - Silent operation for peaceful environment</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p><strong>High Efficiency</strong> - Reduces energy loss and electricity consumption</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p><strong>Longer Appliance Life</strong> - Prevents overheating and damage</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p><strong>Better Voltage Regulation</strong> - Stable power for all applications</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p><strong>Ideal for All Loads</strong> - From homes to industrial applications</p>
                </div>
            </div>

            <div class="indus-timeline-item">
                <div class="indus-timeline-marker">✓</div>
                <div class="indus-timeline-description">
                    <p><strong>Advanced DSP Technology</strong> - Precise control and monitoring</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Sine Wave Timeline Section End -->

<!-- Applications Flip Cards Section Start -->
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
    gap:20px;
    justify-items:center;
}

.indus-flip-card{
    perspective:1000px;
    width:350px;
    height:350px;
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
    height:100%;
    backface-visibility:hidden;
    border-radius:18px;
    padding:30px;
    box-shadow:0 15px 35px rgba(33,35,132,0.12);
}

.indus-front-face{
    background: white;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    text-align:center;
    border: solid 2px #212384;
}

.indus-front-face h3{
    font-size:22px;
    margin:15px 0 10px;
    color: #212384;
    font-weight: 600;
}

.indus-front-face span{
    font-size:50px;
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
    font-size:22px;
    text-align: center;
    font-weight: 700;
    margin-top: 70px;
    color:#212384;
    margin-bottom:15px;
}

.indus-back-face p{
    font-size:15px;
    line-height:1.7;
    text-align: justify;
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
            Applications <span>Across Sectors</span>
        </h2>

        

        <div class="indus-card-grid">
            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>01</span>
                        <h3>Home</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Home Applications</h3>
                        <p>A <strong>sine wave inverter for home</strong> is essential for daily comfort and safety, powering lights, fans, TVs, refrigerators, and computers with clean, stable power.</p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>02</span>
                        <h3>Office</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Office Applications</h3>
                        <p>A <strong>sine wave inverter for office</strong> ensures business continuity, protecting computers, servers, printers, and networking equipment from power disruptions.</p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>03</span>
                        <h3>Computer</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Computer Protection</h3>
                        <p>A <strong>sine wave inverter for computer</strong> safeguards critical data and hardware from sudden shutdowns and power surges.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="indus-card-grid" style="margin-top:20px;">
            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>04</span>
                        <h3>Solar</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Solar Integration</h3>
                        <p>A <strong>sine wave inverter for solar</strong> supports sustainable and eco-friendly energy solutions, enabling seamless integration with solar power systems.</p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>05</span>
                        <h3>Industrial</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Industrial Applications</h3>
                        <p>An <strong>industrial sine wave inverter</strong> ensures uninterrupted manufacturing and production, supporting heavy machinery and automation systems.</p>
                    </div>
                </div>
            </div>

            <div class="indus-flip-card">
                <div class="indus-flip-inner">
                    <div class="indus-front-face">
                        <span>06</span>
                        <h3>Shop</h3>
                    </div>
                    <div class="indus-back-face">
                        <h3>Shop Applications</h3>
                        <p>A <strong>sine wave inverter for shop</strong> ensures smooth daily operations, powering billing systems, lighting, and electronic displays during outages.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Applications Flip Cards Section End -->

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
            Features Of <span>INDUS Sine Wave UPS</span>
        </h2>

       

        <div class="indus-feature-item">
            <h3>Pure Sine Wave Output</h3>
            <p>Produces clean, stable power identical to grid electricity, safe for all sensitive electronics including computers, TVs, refrigerators, and medical equipment.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Advanced DSP Technology</h3>
            <p>Digital Signal Processing ensures precise voltage regulation, frequency stability, and intelligent monitoring for optimal performance.</p>
        </div>

        <div class="indus-feature-item">
            <h3>High Efficiency</h3>
            <p>With efficiency greater than 90%, the system minimizes energy loss during conversion, ensuring longer battery backup and lower electricity consumption.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Silent Operation</h3>
            <p>A <strong>silent sine wave inverter</strong> ensures noiseless operation, making it ideal for residential areas, hospitals, offices, and libraries.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Excellent Voltage Regulation</h3>
            <p>Maintains stable output voltage regardless of input fluctuations, protecting appliances from damage.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Comprehensive Protection</h3>
            <p>Complete protection against overload, short circuit, overcharge, deep discharge, and reverse polarity.</p>
        </div>

        <div class="indus-feature-item">
            <h3>LCD Display</h3>
            <p>Real-time monitoring of battery status, load level, input/output voltage, and fault indications.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Fast Changeover</h3>
            <p>Seamless switching between mains and inverter mode in less than 10ms for uninterrupted power supply.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Intelligent Multistage Charging</h3>
            <p>Advanced charging algorithm optimizes battery health and extends battery life.</p>
        </div>

        <div class="indus-feature-item">
            <h3>Single & Three Phase Options</h3>
            <p>Available in single phase for homes and offices, and three phase for industrial applications.</p>
        </div>
    </div>
</section>
<!-- Features Section End -->















<!-- Technical Specifications Section Start -->
<style>

/* Wrapper */
.inv-spec-wrapper{
width:100%;
max-width:1400px;
margin:auto;
}

/* Header */
.inv-spec-title{
background:#2e3a78;
color:#fff;
text-align:center;
padding:16px;
font-size:22px;
font-weight:500;
letter-spacing:.5px;
}

/* Table */
.inv-spec-table{
width:100%;
border-collapse:collapse;
}

/* Cells */
.inv-spec-table td, .inv-spec-table th{
padding:18px 15px;
text-align:left;
border:1px solid #bfbfbf;
background:white;
font-size:16px;
color:#333;
transition:all .3s ease;
}

/* Header Row */
.inv-spec-table th{
background:#2e3a78;
color:#fff;
font-weight:600;
}


/* Hover Effect */
.inv-spec-table tr:hover td{
border:2px solid #f37021;
transform:scale(1.01);
z-index:1;
position:relative;
}

</style>


<div class="inv-spec-wrapper">
<h2 class="indus-section-heading">
          Technical <span>Specifications</span>
        </h2>

<table class="inv-spec-table">

<tr>
<th>Specification</th>
<th>Details</th>
</tr>

<tr>
<td>Inverter Efficiency at 100 % load</td>
<td>0.9</td>
</tr>

<tr>
<td>Crest Factor</td>
<td>3:1</td>
</tr>

<tr>
<td>Output voltage at no load</td>
<td>230 ± 5 VAC</td>
</tr>

<tr>
<td>No load battery current</td>
<td>230 ± 5 VAC</td>
</tr>

<tr>
<td>Full load Inverter Output waveform</td>
<td>Pure sine wave</td>
</tr>

<tr>
<td>Change over time mains to inverter at normal mode</td>
<td>&lt; 35 ms</td>
</tr>

<tr>
<td>Change over time mains to inverter at UPS mode</td>
<td>&lt; 10 ms</td>
</tr>

<tr>
<td>Change over time inverter to mains at UPS mode</td>
<td>&lt; 10 ms</td>
</tr>

<tr>
<td>Charging voltage cut off LB per battery</td>
<td>13.9 ± 0.2 VDC</td>
</tr>

<tr>
<td>Charging voltage cut off SB per battery</td>
<td>14.3 ± 0.2 VDC</td>
</tr>

<tr>
<td>Battery float voltage per battery</td>
<td>13.6 ± 0.2 VDC</td>
</tr>

</table>

</div>



















    <!-- Phase Options -->
    <h2 class="indus-section-heading" style="margin-top: 40px;">
        Phase Options & <span>Load Handling</span>
    </h2>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; margin: 30px 0;     padding: 0px 55px;">
        <div class="indus-content-card" style="padding: 25px;">
            <h3 style="color: #212384; margin-bottom: 15px; font-size: 18px;    font-weight: 700;">Single Phase Sine Wave Inverter</h3>
            <p>Ideal for <strong>homes, small offices, and shops</strong> with standard electrical loads.</p>
        </div>
        
        <div class="indus-content-card" style="padding: 25px;">
            <h3 style="color: #212384; margin-bottom: 15px; font-size: 18px;    font-weight: 700;">Three Phase Sine Wave Inverter</h3>
            <p>Designed for <strong>industries, large commercial buildings, and heavy machinery applications</strong>.</p>
        </div>
        
        <div class="indus-content-card" style="padding: 25px; ">
            <h3 style="color: #212384; margin-bottom: 15px;font-size: 18px;    font-weight: 700;">Heavy Duty Sine Wave Inverter</h3>
            <p>Handles <strong>high starting currents</strong> and continuous loads with ease for demanding applications.</p>
        </div>
    </div>

    <!-- Battery & Backup -->
    <h2 class="indus-section-heading" style="margin-top: 40px;">
        Battery Compatibility & <span>Backup Performance</span>
    </h2>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; margin: 30px 0; padding: 0px 55px;">
        <div class="indus-content-card" style="padding: 25px;">
            <i class="fas fa-battery-full" style="font-size: 2.5rem; color: #f37021; margin-bottom: 15px;margin-left: 130px;"></i>
            <h3 style="color: #212384; margin-bottom: 15px;font-weight: 600;    text-align: center;">Backup Duration</h3>
            <p>A <strong>sine wave inverter battery</strong> plays a vital role in determining backup duration and overall system efficiency.</p>
        </div>
        
        <div class="indus-content-card" style="padding: 25px;">
            <i class="fas fa-clock" style="font-size: 2.5rem; color: #f37021; margin-bottom: 15px;margin-left: 130px;"></i>
            <h3 style="color: #212384; margin-bottom: 15px;font-weight: 600;    text-align: center;">Long Backup Solution</h3>
            <p>A <strong>long backup sine wave inverter</strong> paired with the right battery ensures uninterrupted power during extended blackouts.</p>
        </div>
        
        <div class="indus-content-card" style="padding: 25px;">
            <i class="fas fa-chart-line" style="font-size: 2.5rem; color: #f37021; margin-bottom: 15px;margin-left: 130px;"></i>
            <h3 style="color: #212384; margin-bottom: 15px;font-weight: 600;    text-align: center;">High Efficiency</h3>
            <p>A <strong>high efficiency sine wave inverter</strong> maximizes battery usage while reducing charging time.</p>
        </div>
    </div>

    <!-- Price & Availability -->
    <h2 class="indus-section-heading" style="margin-top: 40px;">
        Price, Availability, And <span>Buying Considerations</span>
    </h2>

    <div style="display: flex; flex-wrap: wrap; gap: 15px; justify-content: center; margin: 30px 0;">
        <span style="background: white; padding: 0.9rem 2.4rem; border-radius: 60px 10px 60px 10px; border: 2px solid #f37021; font-weight: 600; color: #1e2a78;">
            <i class="fas fa-tag" style="color: #f37021; margin-right: 8px;"></i> Best Price
        </span>
        <span style="background: white; padding: 0.9rem 2.4rem; border-radius: 60px 10px 60px 10px; border: 2px solid #f37021; font-weight: 600; color: #1e2a78;">
            <i class="fas fa-map-marker-alt" style="color: #f37021; margin-right: 8px;"></i> Find <strong>Sine Wave Inverter Near Me</strong>
        </span>
        <span style="background: white; padding: 0.9rem 2.4rem; border-radius: 60px 10px 60px 10px; border: 2px solid #f37021; font-weight: 600; color: #1e2a78;">
            <i class="fas fa-truck" style="color: #f37021; margin-right: 8px;"></i> All India Delivery
        </span>
    </div>

    <p style="font-size: 1.1rem; line-height: 1.8; color: #444; text-align: center; max-width: 900px; margin: 0 auto;">
        Understanding the <strong>sine wave inverter price</strong> helps customers choose the right model based on their power requirements and budget. As a leading <strong>sine wave inverter manufacturer</strong> in India, we offer competitive pricing, customized solutions, and reliable after-sales support.
    </p>

    <!-- Why Indus Section -->
    <h2 class="indus-section-heading" style="margin-top: 40px;">
        Why Choose <span>Indus Power Industries Pvt. Ltd.</span>
    </h2>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; margin: 30px 0; padding: 0px 55px;">
        <div class="indus-content-card" style="padding: 25px;">
            <i class="fas fa-medal" style="font-size: 2.5rem; color: #f37021; margin-bottom: 15px;    margin-left: 135px;"></i>
            <h3 style="color: #212384; margin-bottom: 10px;    font-size: 25px;
    font-weight: 600;
    text-align: center;">Trusted Manufacturer</h3>
            <p>Indus Power Industries Pvt. Ltd. is a trusted manufacturer of advanced power backup solutions with a strong focus on quality, reliability, and innovation.</p>
        </div>
        
        <div class="indus-content-card" style="padding: 25px;">
            <i class="fas fa-cogs" style="font-size: 2.5rem; color: #f37021; margin-bottom: 15px;margin-left: 135px;"></i>
            <h3 style="color: #212384; margin-bottom: 10px;    font-size: 25px;
    font-weight: 600;
    text-align: center;">Wide Product Range</h3>
            <p>Our range includes <strong>pure sine wave inverter</strong> systems designed for residential, commercial, and industrial use.</p>
        </div>
        
        <div class="indus-content-card" style="padding: 25px;">
            <i class="fas fa-handshake" style="font-size: 2.5rem; color: #f37021; margin-bottom: 15px;margin-left: 135px;"></i>
            <h3 style="color: #212384; margin-bottom: 10px;    font-size: 25px;
    font-weight: 600;
    text-align: center;">Customized Solutions</h3>
            <p>We offer customized solutions, competitive pricing, and reliable after-sales support across India.</p>
        </div>
    </div>

    <!-- Conclusion -->
    <h2 class="indus-section-heading" style="margin-top: 40px;">
        <span>Conclusion</span>
    </h2>

    <p style="font-size: 17px; line-height: 1.5; color: #444; text-align: justify;     padding: 0px 55px;">
        A <strong>pure sine wave inverter</strong> is the smartest investment for anyone seeking reliable, efficient, and clean power backup. Whether you need an <strong style="color: #f37021;">affordable sine wave inverter</strong> for your home or a <strong style="color: #212384;">heavy duty sine wave inverter</strong> for industrial use, choosing the right solution ensures peace of mind and long-term savings.
        <br><br>
        At Indus Power Industries Pvt. Ltd., we are committed to delivering world-class inverter solutions that empower homes, businesses, and industries with uninterrupted power.
        <br><br>
    </p>
</div>
<!-- Technical Specifications Section End -->

<?php include('footer.php'); ?>

</body>
</html>