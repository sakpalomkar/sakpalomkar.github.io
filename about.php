<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Indusups</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Montserrat';
}

/* =========================
   HERO SECTION
========================= */

.about-hero {
    position: relative;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    overflow: hidden;
    color: #fff;
}

/* Background Image */
.about-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: url("img/about\ us.jpg") center/cover no-repeat;
    filter: brightness(0.55);
    transform: scale(1.1);
    animation: zoomEffect 10s ease-in-out infinite alternate;
}

/* Gradient Overlay */
.about-hero::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.24));
}

/* Content */
.hero-content {
    position: relative;
    z-index: 2;
}

/* Main Heading */
.hero-content h1 {
    font-size: 55px;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 15px;
    animation: slideDown 1s ease forwards;
}

/* Breadcrumb */
.breadcrumb {
    font-size: 18px;
    font-weight: 400;
    animation: fadeUp 1.2s ease forwards;
    margin-left: 65px;
}

.breadcrumb a {
    color: #fff;
    text-decoration: none;
    transition: 0.3s;
}

.breadcrumb a:hover {
    color: #ff5e00;
}

.breadcrumb span {
    color: #ff5e00;
    font-weight: 600;
    margin-left: 5px;
}

/* =========================
   ANIMATIONS
========================= */

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

/* =========================
   RESPONSIVE
========================= */

@media(max-width:768px){
    .hero-content h1{
        font-size: 36px;
    }
    .breadcrumb{
        font-size: 15px;
    }
}
</style>
</head>

<body>

<?php include('navbar.php'); ?>

<section class="about-hero">
    <div class="hero-content">
        <h1>About Us</h1>
        <div class="breadcrumb">
            <a href="#">Home</a> 
            &nbsp;»&nbsp; 
            <span>About Us</span>
        </div>
    </div>
</section>
<!-- Slider End -->
















<!-- About Us Start -->
<style>
    .chairman-section{
    padding: 40px 8%;
    position: relative;
    overflow: hidden;
}

.chairman-section::before{
    content:"";
    position:absolute;
    width:500px;
    height:500px;
    background: radial-gradient(circle, rgba(255,94,0,0.25), transparent 70%);
    top:-150px;
    left:-150px;
    animation: glowMove 6s infinite alternate ease-in-out;
}

.chairman-container{
    display:flex;
    align-items:center;
    gap:70px;
    position:relative;
    z-index:2;
}

/* Image Card */
.image-card{
    flex:1;
    position:relative;
    animation: slideLeft 1.2s ease forwards;
}

.image-card img{
    width:100%;
    border-radius:20px;
    box-shadow:0 30px 60px rgba(0,0,0,0.15);
    transition:0.5s ease;
}

.image-card:hover img{
    transform:scale(1.05);
}

.image-card::after{
    content:"";
    position:absolute;
    inset:-15px;
    border-radius:25px;
    border:2px solid rgba(255,94,0,0.3);
    animation: floatBorder 3s infinite ease-in-out;
}

.chairman-name{
    text-align:center;
    margin-top:25px;
}

.chairman-name h3{
    font-size:22px;
    font-weight:600;
    color:#111;
}

.chairman-name span{
    display:block;
    color:#ff5e00;
    font-weight:500;
    margin-top:5px;
}

/* Content */
.content{
    flex:1.2;
    animation: slideRight 1.2s ease forwards;
}

.content h2{
    font-size:32px;
    font-weight:600;
    margin-bottom:25px;
    color:#111;
    position:relative;
}

.content h2::after{
    content:"";
    width:70px;
    height:3px;
    background:#ff5e00;
    position:absolute;
    bottom:-8px;
    left:0;
}

.content p{
    font-size:16px;
    line-height:1.9;
    color:#000000;
    margin-bottom:20px;
    text-align: justify;
}

/* Animations */
@keyframes slideLeft{
    from{opacity:0; transform:translateX(-60px);}
    to{opacity:1; transform:translateX(0);}
}

@keyframes slideRight{
    from{opacity:0; transform:translateX(60px);}
    to{opacity:1; transform:translateX(0);}
}

@keyframes glowMove{
    from{transform:scale(1);}
    to{transform:scale(1.2);}
}

@keyframes floatBorder{
    0%,100%{transform:translateY(0);}
    50%{transform:translateY(-10px);}
}

/* Responsive */
@media(max-width:992px){
    .chairman-container{
        flex-direction:column;
        text-align:center;
    }

    .content h2::after{
        left:50%;
        transform:translateX(-50%);
    }
}

</style>

 <section class="chairman-section">
    <div class="chairman-container">

        <!-- Image Side -->
        <div class="image-card">
            <img src="img/Vijay-Dumbre.jpg" alt="Vijay Dumbre">
            <div class="chairman-name">
                <h3>Vijay Dumbre</h3>
                <span>Founder and Chairman of Indus Group</span>
            </div>
        </div>

        <!-- Content Side -->
        <div class="content">
            <h2>Chairman’s Message</h2>

            <p><strong>At Indus Power Industries Pvt. Ltd.,</strong> our journey has always been driven by one clear vision - to deliver reliable, efficient, and future-ready power solutions that empower homes, businesses, and industries to operate without interruption.</p>

            <p>Since our inception, we have believed that electricity is not just a utility, but the backbone of productivity, safety, and progress. Every product we design and every solution we deliver reflects our commitment to quality, innovation, and customer trust.</p>

            <p>From voltage stabilizers and UPS systems to inverter batteries and solar solutions, our focus has been on creating dependable power infrastructure that performs consistently even under the most challenging conditions.</p>
        </div>

    </div>
</section>
 <!-- About Us End -->













 <!-- para Section start -->
  <style>

/* =====================================
   LUXURY EXECUTIVE MESSAGE DESIGN
======================================*/

.message-section{
    padding:0px 5%;
    position:relative;
    overflow:hidden;
}


/* Main Card */
.message-container{
    position:relative;
    z-index:2;
    background:#ffffff;
    padding:35px;
    border-radius:30px;
    box-shadow:0 30px 80px rgba(0,0,0,0.08);
    overflow:hidden;
    animation: fadeUp 1.2s ease forwards;
}

/* Animated Side Accent */
.message-container::before{
    content:"";
    position:absolute;
    left:0;
    top:0;
    height:100%;
    width:8px;
    background:linear-gradient(to bottom,#ff5e00,#ff8c42);
    animation: glowLine 2s infinite alternate;
}

/* Paragraph Styling */
.message-container p{
    font-size:17px;
    line-height:2;
    color:#000000;
    margin-bottom:28px;
    position:relative;
    padding-left:25px;
    opacity:0;
    animation: fadeParagraph 1.5s ease forwards;
    text-align: justify;
}

/* Stagger animation delay */
.message-container p:nth-child(1){ animation-delay:0.3s; }
.message-container p:nth-child(2){ animation-delay:0.6s; }
.message-container p:nth-child(3){ animation-delay:0.9s; }
.message-container p:nth-child(4){ animation-delay:1.2s; }

/* Decorative dot before paragraphs */
.message-container p::before{
    content:"";
    position:absolute;
    width:10px;
    height:10px;
    background:#ff5e00;
    border-radius:50%;
    left:0;
    top:12px;
    box-shadow:0 0 10px rgba(255,94,0,0.6);
}

/* Subtle hover lift */
.message-container:hover{
    transform:translateY(-8px);
    transition:0.4s ease;
    box-shadow:0 40px 100px rgba(0,0,0,0.12);
}

/* ================= Animations ================= */

@keyframes fadeUp{
    from{opacity:0; transform:translateY(50px);}
    to{opacity:1; transform:translateY(0);}
}

@keyframes fadeParagraph{
    from{opacity:0; transform:translateY(30px);}
    to{opacity:1; transform:translateY(0);}
}

@keyframes floatGlow{
    from{transform:scale(1);}
    to{transform:scale(1.15);}
}

@keyframes glowLine{
    from{box-shadow:0 0 10px rgba(255,94,0,0.4);}
    to{box-shadow:0 0 25px rgba(255,94,0,0.8);}
}

/* ================= Responsive ================= */

@media(max-width:992px){
    .message-container{
        padding:40px;
    }

    .message-container p{
        padding-left:0;
    }

    .message-container p::before{
        display:none;
    }
}

</style>


<section class="message-section">
    <div class="message-container">

        <p>In a rapidly evolving energy landscape, we recognize the responsibility that comes with being a power solutions provider. This is why we continuously invest in advanced technology, skilled manpower, and rigorous quality standards to ensure that our products meet both present needs and future demands. Our solutions are engineered not only for performance but also for longevity, efficiency, and ease of maintenance.</p>

        <p>What truly sets Indus Power Industries Pvt. Ltd. apart is our customer-centric approach. We listen, we understand, and we customize. Whether it is a residential requirement or a large industrial application, our team works closely with clients to deliver solutions that are practical, cost-effective, and reliable. Long-term relationships, built on transparency and service excellence, remain at the core of our business philosophy.</p>

        <p>As we move forward, sustainability and energy efficiency will continue to guide our growth. We are committed to supporting cleaner energy solutions and contributing positively to the nation’s power ecosystem. With a strong foundation, a clear vision, and an unwavering dedication to excellence, we look ahead with confidence and responsibility.</p>

        <p>I extend my sincere gratitude to our customers, partners, and employees who have placed their trust in us and have been an integral part of our journey. Together, we will continue to power progress and build a stronger, more reliable future.</p>

    </div>
</section>
  <!-- para Section End -->


















  <!-- our mission and vision start -->
 <style>

/* ======================================
   LUXURY SPLIT PARALLAX VISION MISSION
======================================*/

.lux-parallax-section{
    position:relative;
    padding:30px 7%;
    overflow:hidden;
    background:url("img/about us.jpg") center/cover no-repeat fixed;
}

/* Strong Premium Overlay */
.lux-parallax-section::before{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(120deg,rgba(0,0,0,0.85),rgba(0,0,0,0.6));
    z-index:1;
}

/* Animated Moving Light */
.lux-parallax-section::after{
    content:"";
    position:absolute;
    width:600px;
    height:600px;
    background:radial-gradient(circle,rgba(255,139,69,0.25),transparent 70%);
    top:-200px;
    left:-200px;
    animation: moveGlow 10s infinite alternate ease-in-out;
    z-index:1;
}

/* Container */
.lux-parallax-container{
    position:relative;
    z-index:2;
    display:flex;
    gap:80px;
    align-items:center;
    justify-content:center;
}

/* Box */
.lux-box{
    flex:1;
    padding:70px 60px;
    border-radius:35px;
    position:relative;
    color:#fff;
    overflow:hidden;
    transition:0.6s ease;
}

/* Left Box Style */
.lux-box.vision{
    background:rgba(255,255,255,0.05);
    border-left:5px solid #ff8b45;
    transform:translateY(80px);
    opacity:0;
    animation:slideUp 1.2s ease forwards;
}

/* Right Box Style */
.lux-box.mission{
    background:rgba(255,255,255,0.05);
    border-right:5px solid #ff8b45;
    transform:translateY(80px);
    opacity:0;
    animation:slideUp 1.6s ease forwards;
}

/* Hover Premium Effect */
.lux-box:hover{
    background:rgba(255,139,69,0.12);
    transform:translateY(-15px) scale(1.03);
    box-shadow:0 30px 80px rgba(0,0,0,0.6);
}

/* Headings */
.lux-box h2{
    font-size:32px;
    margin-bottom:30px;
    letter-spacing:3px;
    color:#ff8b45;
    position:relative;
}

/* Decorative Line */
.lux-box h2::after{
    content:"";
    position:absolute;
    bottom:-12px;
    left:0;
    width:60px;
    height:3px;
    background:#ff8b45;
    transition:0.4s;
}

.lux-box:hover h2::after{
    width:120px;
}

/* Paragraph */
.lux-box p{
    font-size:18px;
    color:#eee;
    text-align:justify;
}

/* Animations */
@keyframes slideUp{
    to{
        transform:translateY(0);
        opacity:1;
    }
}

@keyframes moveGlow{
    from{transform:translate(0,0);}
    to{transform:translate(200px,150px);}
}

/* Responsive */
@media(max-width:992px){
    .lux-parallax-container{
        flex-direction:column;
        gap:50px;
    }

    .lux-parallax-section{
        background-attachment:scroll;
    }
}

</style>

<section class="lux-parallax-section">
    <div class="lux-parallax-container">

        <!-- Vision -->
        <div class="lux-box vision">
            <h2>OUR VISION</h2>
            <p>
                To become most trusted brand in power industry by 2030.
            </p>
        </div>

        <!-- Mission -->
        <div class="lux-box mission">
            <h2>OUR MISSION</h2>
            <p>
                To achieve world class excellence in innovative product & services by empowering human life with power solutions, 
                having clan oriented culture of an organization.
            </p>
        </div>

    </div>
</section>
  <!-- our mission and vision End -->
















  <!-- Core Section Start -->
  <style>
/* ===============================
   LAVISH CORE VALUES (SAME COLORS)
=================================*/

.elegant-core{
    padding:30px 8%;
    position:relative;
    overflow:hidden;
}

/* Soft floating background shapes */
.elegant-core::before{
    content:"";
    position:absolute;
    width:600px;
    height:600px;
    background:rgba(30,42,120,0.05);
    border-radius:50%;
    top:-200px;
    right:-200px;
    animation:float 8s ease-in-out infinite alternate;
}

@keyframes float{
    from{ transform:translateY(0); }
    to{ transform:translateY(40px); }
}

/* ================= TITLE ================= */

.section-title{
    text-align:center;
    font-size:48px;
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

/* ================= GRID ================= */

.core-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:45px;
    position:relative;
    z-index:2;
}

/* ================= CARD ================= */

.core-box{
    background:#fff;
    padding:20px 24px;
    border-radius:18px;
    position:relative;
    overflow:hidden;
    transition:all .5s ease;
    box-shadow:0 15px 40px rgba(0,0,0,0.06);
    opacity:0;
    transform:translateY(50px);
    animation:fadeUp 1s ease forwards;
}

/* Stagger animation */
.core-box:nth-child(1){animation-delay:.2s;}
.core-box:nth-child(2){animation-delay:.4s;}
.core-box:nth-child(3){animation-delay:.6s;}
.core-box:nth-child(4){animation-delay:.8s;}
.core-box:nth-child(5){animation-delay:1s;}

@keyframes fadeUp{
    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* Animated border glow */
.core-box::before{
    content:"";
    position:absolute;
    inset:0;
    border-radius:18px;
    padding:2px;
    background:linear-gradient(120deg,#1e2a78,#f37021,#1e2a78);
    -webkit-mask:
        linear-gradient(#fff 0 0) content-box,
        linear-gradient(#fff 0 0);
    -webkit-mask-composite:xor;
            mask-composite:exclude;
    opacity:0;
    transition:.5s;
}

.core-box:hover::before{
    opacity:1;
}

/* Bottom animated line */
.core-box::after{
    content:"";
    position:absolute;
    bottom:0;
    left:0;
    height:4px;
    width:0;
    background:linear-gradient(to right,#1e2a78,#f37021);
    transition:.4s;
}

.core-box:hover::after{
    width:100%;
}

/* Hover effect */
.core-box:hover{
    transform:translateY(-15px) scale(1.03);
    box-shadow:0 25px 60px rgba(30,42,120,0.18);
}

/* ================= NUMBER CIRCLE ================= */

.icon-box{
    width:60px;
    height:60px;
    border-radius:50%;
    background:#1e2a78;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:700;
    font-size:18px;
    margin-bottom:25px;
    transition:.5s;
    box-shadow:0 10px 25px rgba(30,42,120,0.25);
}

.core-box:hover .icon-box{
    background:#f37021;
    transform:rotate(8deg) scale(1.1);
    box-shadow:0 15px 35px rgba(243,112,33,0.4);
}

/* ================= TEXT ================= */

.core-box h3{
    color:#1e2a78;
    font-size:20px;
        font-weight: 600;
    margin-top: -66px;
    margin-left: 80px;
    margin-bottom: 40px;
}

.core-box p{
    font-size:15px;
    line-height:1.9;
    color:#000000;
    text-align: justify;
}

/* ================= RESPONSIVE ================= */

@media(max-width:768px){
    .section-title{
        font-size:34px;
    }
}
</style>

<section class="elegant-core">
    <h2 class="section-title">
        Core <span>Values</span>
    </h2>

    <div class="core-grid">

        <div class="core-box">
            <div class="icon-box">01</div>
            <h3>RESPONSIBILITY</h3>
            <p>Everyone should have sense of ownership towards the growth & prosperity of the organization. An individual conducts in such a manner as he/she is a business partner of the organization. “We are committed towards our work responsibility.”</p>
        </div>

        <div class="core-box">
            <div class="icon-box">02</div>
            <h3>INTEGRITY</h3>
            <p>We are loyal towards an organization & maintain transparency to keep organization above self. “Everyone is loyal & honest towards an organization.”</p>
        </div>

        <div class="core-box">
            <div class="icon-box">03</div>
            <h3>TEAM WORK</h3>
            <p>We work as a team having “go-getter attitude” with our colleagues, customers & suppliers to build a strong relationship based on mutual understanding, Co-operation, respect & faith for each other. “All of us are better than every one of us.”</p>
        </div>

        <div class="core-box">
            <div class="icon-box">04</div>
            <h3 style="margin-top: -85px;">LEARNING ATTITUDE</h3>
            <p>We enhance our unique ability and creativity by learning new things and also encourage subordinates to take bigger responsibilities in order to develop leadership. “We take initiative to enhance our efficiency and effectiveness.”</p>
        </div>

        <div class="core-box">
            <div class="icon-box">05</div>
            <h3>COMMITMENT</h3>
            <p>We are committed to implement system and process which are evaluated & regulated to provide accurate, uninterrupted services. “We follow clearly defined system & process. (When, what, how, where)”</p>
        </div>

    </div>
</section>
  <!-- Core Section End -->
















<!-- Our Certificate Start -->
<style>
/* ===============================
   PREMIUM CERTIFICATION SECTION
   (BLUE ORANGE THEME)
=================================*/

.certifications-section{
    padding:30px 8%;
    text-align:center;
    position:relative;
    overflow:hidden;
}

/* Heading */
.cert-title{
    font-size:46px;
    font-weight:700;
    margin-bottom:60px;
    letter-spacing:2px;
    color:#0d3b66;
}

.cert-title span{
    background:linear-gradient(45deg,#0d3b66,#f77f00,#0d3b66);
    background-size:200% 200%;
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
    animation:shineText 3s linear infinite;
}

@keyframes shineText{
    0%{background-position:0% 50%;}
    100%{background-position:100% 50%;}
}

/* Grid */
.cert-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
    gap:30px;
}

/* Cards */
.cert-card{
    background:#ffffff;
    border-radius:25px;
    padding:30px;
    box-shadow:0 15px 40px rgba(13,59,102,0.08);
    transition:all 0.5s ease;
    cursor:pointer;
    position:relative;
    overflow:hidden;
    animation:floatCard 6s ease-in-out infinite;
}

@keyframes floatCard{
    0%,100%{transform:translateY(0px);}
    50%{transform:translateY(-8px);}
}

/* Hover border animation */
.cert-card::after{
    content:"";
    position:absolute;
    inset:0;
    border-radius:25px;
    padding:2px;
    background:linear-gradient(45deg,#0d3b66,#f77f00);
    -webkit-mask:
        linear-gradient(#fff 0 0) content-box,
        linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    opacity:0;
    transition:0.5s;
}

.cert-card:hover::after{
    opacity:1;
}

.cert-card img{
    width:100%;
    height:200px;
    object-fit:contain;
    transition:transform 0.5s ease;
    cursor:pointer;
}

.cert-card:hover{
    transform:translateY(-12px);
    box-shadow:0 25px 60px rgba(13,59,102,0.15);
}

.cert-card:hover img{
    transform:scale(1.08);
}

/* ===============================
   MODAL UPDATED
=================================*/

.cert-modal{
    position:fixed;
    inset:0;
    backdrop-filter:blur(3px);
    display:flex;
    justify-content:center;
    align-items:center;
    opacity:0;
    visibility:hidden;
    transition:0.4s ease;
    z-index:9999;
}

.cert-modal.active{
    opacity:1;
    visibility:visible;
}

.modal-content{
    max-width:45%;
    max-height:97%;
    border-radius:20px;
    background: white;
    transform:scale(0.7);
    transition:0.4s ease;
    cursor:default;
}

.cert-modal.active .modal-content{
    transform:scale(1);
}

.close-btn{
    position:absolute;
    top:0px;
    right:365px;
    color:#f77f00;
    font-size:45px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
    z-index:10000;
}

.close-btn:hover{
    color:#1e2a78;
}

/* Click hint */
.click-hint {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(247,127,0,0.9);
    color: white;
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 14px;
    opacity: 0;
    transition: opacity 0.3s ease;
    pointer-events: none;
    white-space: nowrap;
}

.cert-card:hover .click-hint {
    opacity: 1;
}

@media (max-width: 768px) {
    .cert-title {
        font-size: 36px;
    }
    
    .click-hint {
        display: none;
    }
}
</style>

<section class="certifications-section">

    <h2 class="section-title">
        Our <span>Certifications</span>
    </h2>

    <div class="cert-grid">
        <div class="cert-card" onclick="openModal('img/certificate 1.png')">
            <img src="img/certificate 1.png" alt="Certificate 1">
        </div>

        <div class="cert-card" onclick="openModal('img/certificate 2.png')">
            <img src="img/certificate 2.png" alt="Certificate 2">
        </div>

        <div class="cert-card" onclick="openModal('img/certificate 3.png')">
            <img src="img/certificate 3.png" alt="Certificate 3">
        </div>

        <div class="cert-card" onclick="openModal('img/certificate 4.png')">
            <img src="img/certificate 4.png" alt="Certificate 4">
        </div>
    </div>
</section>

<!-- Modal -->
<div id="certModal" class="cert-modal" onclick="outsideClick(event)">
    <span class="close-btn" onclick="closeModal()">×</span>
    <img class="modal-content" id="modalImg" alt="Enlarged certificate">
</div>

<script>
function openModal(src){
    const modal = document.getElementById("certModal");
    const img = document.getElementById("modalImg");
    
    // Add loading state
    img.style.opacity = '0.5';
    
    // Set image source
    img.src = src;
    
    // When image loads, remove loading state
    img.onload = function() {
        img.style.opacity = '1';
    };
    
    modal.classList.add("active");
    document.body.style.overflow = "hidden";
}

function closeModal(){
    const modal = document.getElementById("certModal");
    modal.classList.remove("active");
    document.body.style.overflow = "auto";
}

/* Close when clicking outside image */
function outsideClick(e){
    if(e.target.id === "certModal"){
        closeModal();
    }
}

/* ESC key close */
document.addEventListener("keydown", function(e){
    if(e.key === "Escape"){
        closeModal();
    }
});

// Add smooth image loading
document.addEventListener('DOMContentLoaded', function() {
    const modalImg = document.getElementById('modalImg');
    modalImg.style.transition = 'opacity 0.3s ease';
});
</script>
<!-- Our Certificate End -->
















   <!-- PREMIUM VERTICAL JOURNEY START -->
<style>

.royal-journey{
    padding:30px 8%;
    font-family:'Poppins',sans-serif;
    position:relative;
}

/* Title */
.royal-title{
    text-align:center;
    font-size:48px;
    font-weight:700;
    margin-bottom:90px;
    color:#0d3b66;
    letter-spacing:2px;
}

.royal-title span{
    background:linear-gradient(45deg,#ff6a00,#ff9d00);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

/* Timeline Wrapper */
.royal-timeline{
    position:relative;
    max-width:700px;
    margin:auto;
    padding-left:60px;
}

/* Animated Line */
.royal-timeline::before{
    content:"";
    position:absolute;
    left:82px;
    top:-19px;
    width:5px;
    height:100%;
    background:linear-gradient(to bottom,#0d3b66,#ff6a00);
    border-radius:10px;
    animation:lineGrow 2s ease forwards;
}

@keyframes lineGrow{
    from{height:0;}
    to{height:100%;}
}

/* Each Step */
.royal-step{
    position:relative;
    margin-bottom:70px;
    animation:fadeUp 1s ease forwards;
    opacity:0;
}

.royal-step:nth-child(1){animation-delay:.3s;}
.royal-step:nth-child(2){animation-delay:.6s;}
.royal-step:nth-child(3){animation-delay:.9s;}
.royal-step:nth-child(4){animation-delay:1.2s;}
.royal-step:nth-child(5){animation-delay:1.5s;}
.royal-step:nth-child(6){animation-delay:1.8s;}

/* Year Circle */
.year{
    position:absolute;
    left:-10px;
    width:70px;
    height:70px;
    background:linear-gradient(45deg,#ff6a00,#ff9d00);
    color:#fff;
    font-weight:600;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:50%;
    box-shadow:0 10px 30px rgba(255,106,0,0.4);
    animation:float 3s ease-in-out infinite;
}

/* Floating Animation */
@keyframes float{
    0%{transform:translateY(0);}
    50%{transform:translateY(-8px);}
    100%{transform:translateY(0);}
}

/* Card */
.royal-card{
    background:#fff;
    padding:25px 30px;
    border-radius:18px;
    font-size:16px;
    color:#000000;
    box-shadow:0 15px 35px rgba(13,59,102,0.15);
    transition:all .4s ease;
    margin-left:80px;
}

.royal-card:hover{
    transform:translateY(-10px) scale(1.02);
    box-shadow:0 20px 45px rgba(255,106,0,0.3);
}

/* Fade Animation */
@keyframes fadeUp{
    to{
        opacity:1;
        transform:translateY(0);
    }
    from{
        transform:translateY(40px);
    }
}

/* Responsive */
@media(max-width:768px){

    .royal-timeline{
        padding-left:40px;
    }

    .year{
        width:55px;
        height:55px;
        font-size:14px;
        left:-18px;
    }

    .royal-card{
        margin-left:60px;
    }

}
</style>

<section class="royal-journey">
    <h2 class="section-title">
        Our <span>Journey</span>
    </h2>

    <div class="royal-timeline">

        <div class="royal-step">
            <div class="year">1996</div>
            <div class="royal-card">
                INDUS Industries Founded
            </div>
        </div>

        <div class="royal-step">
            <div class="year">1999</div>
            <div class="royal-card">
                Corporate Sales Office, Dombivli
            </div>
        </div>

        <div class="royal-step">
            <div class="year">2006</div>
            <div class="royal-card">
                Manufacturing Unit, Dombivli
            </div>
        </div>

        <div class="royal-step">
            <div class="year">2008</div>
            <div class="royal-card">
                Battery Manufacturing Unit, Dombivli <br>
                ISO 9001:2008 Certified
            </div>
        </div>

        <div class="royal-step">
            <div class="year">2013</div>
            <div class="royal-card">
                Entry in Solar Power Industry
            </div>
        </div>

        <div class="royal-step">
            <div class="year">2015</div>
            <div class="royal-card">
                Land Purchase for Proposed EV Battery Plant <br>
                ISO 9001:2015 Certified
            </div>
        </div>

    </div>
</section>
   <!-- PREMIUM VERTICAL JOURNEY END -->







<?php include('footer.php');?>


</body>
</html>
