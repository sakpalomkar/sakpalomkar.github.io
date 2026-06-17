<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Indusups</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">




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
        <h1>Air-Cooled Voltage Stabilizer Manufacturer India</h1>
        <div class="premium-breadcrumb-trail">
            <a href="#">Home</a> 
            &nbsp;»&nbsp; 
            <a href="#">Products</a> 
            &nbsp;»&nbsp;
            <a href="#">Stabilizer</a> 
            &nbsp;»&nbsp;
            <span>Air-Cooled Voltage Stabilizer</span>
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
    <img src="img/Air-Cooled1.png" class="tech-display-image" alt="">
    <img src="img/Air-Cooled2.png" class="tech-display-image" alt="">
    <img src="img/Air-Cooled3.png" class="tech-display-image" alt="">

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













<!--  Reliable Power Protection for Start -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap');

/* SECTION HEADING */
.indus-process-heading{
    text-align:center;
    font-size:35px;
    font-weight:900;
    color:#212384;
    margin-bottom:50px;
    position:relative; /* for span underline positioning */
}

/* ORANGE SPAN WITH UNDERLINE */
.indus-process-heading span{
    color:#f37021;
    position:relative; /* make span relative for ::after */
}

.indus-process-heading span::after{
    content:"";
    position:absolute;
    left:0;
    bottom:-8px; /* adjust distance below text */
    width:0%;
    height:4px;
    background:#f37021;
    border-radius:5px;
    animation:underlineMove 2s infinite alternate;
}

@keyframes underlineMove{
    from { width:0%; }
    to { width:100%; }
}

/* PANEL SECTION */
.indus-section-panel{
    background:#ffffff;
    padding:50px 5%;
    font-family:'Montserrat';
}

/* GRID */
.indus-grid-container{
    display:grid;
    grid-template-columns: repeat(auto-fit,minmax(320px,1fr));
    gap:40px;
    max-width:1206px;
    margin:auto;
}

/* CONTENT CARD */
.indus-content-card{
    background:#ffffff;
    padding:35px 30px;
    border-radius:25px;
    box-shadow:0 20px 60px rgba(33,35,132,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
    border:2px solid #f37021;
}

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
    .indus-process-heading{
        font-size:28px;
    }
}
</style>

<section class="indus-section-panel">

<h2 class="indus-process-heading">
Reliable Power Protection for <span>Homes, Offices, and Industries</span>
</h2>

<div class="indus-grid-container">

<div class="indus-content-card">
<p>In today's power-dependent world, voltage fluctuations are one of the biggest threats to electrical equipment,
     appliances, and sensitive electronics. An air cooled voltage stabilizer is a reliable solution that ensures 
     a stable voltage supply while protecting connected devices from sudden voltage changes. It helps maintain 
     consistent power and improves the overall safety of electrical systems.
</p>
</div>

<div class="indus-content-card">
<p>
At Indus Power Industries Pvt. Ltd., we design and manufacture high-quality air cooled stabilizer
 systems that deliver dependable performance across residential, commercial, and industrial applications.
  Our stabilizers are engineered with advanced technology to provide efficient voltage regulation and
   long-term durability.
</p>
</div>

<div class="indus-content-card">
<p>
An air cooling voltage stabilizer works by automatically correcting input voltage fluctuations and delivering 
a regulated output voltage to connected equipment. This ensures uninterrupted operation of appliances and machinery.
 A robust air cooled power stabilizer is especially suitable for areas that experience unstable grid supply and
  frequent power disturbances.
</p>
</div>

</div>

</section>


<!-- Reliable Power Protection for  End -->


<!-- What Is an Air-Cooled Voltage Stabilizer? starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-air-section">

<h2 class="indus-process-heading">
What Is an Air-Cooled  <span>Voltage Stabilizer?</span>
</h2>

<div class="indus-air-grid">

<!-- CARD 1 -->
<div class="indus-air-card">

<div class="indus-air-icon">
<i class="fas fa-fan"></i>
</div>

<h3>Efficient Cooling System</h3>

<p>
A voltage stabilizer air cooled is an automatic voltage regulation device that uses air circulation instead of oil for cooling. This makes the system cleaner, safer, and easier to maintain.
</p>

</div>

<!-- CARD 2 -->
<div class="indus-air-card">

<div class="indus-air-icon">
<i class="fas fa-bolt"></i>
</div>

<h3>Reliable Voltage Protection</h3>

<p>
The stabilizer works as an air cooled voltage regulator ensuring devices receive steady voltage and protection from sudden voltage spikes.
</p>

</div>

</div>

</section>


<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Montserrat';
}

/* SECTION */

.indus-air-section{
padding: 5px;50px 20px;
background:#ffffff;
text-align:center;
}

/* MAIN HEADING */

.indus-process-heading{
font-size:35px;
font-weight:700;
color:#212384;
margin-bottom:55px;
}

.indus-process-heading span{
color:#f37021;
}

/* GRID */

.indus-air-grid{
max-width:1100px;
margin:auto;
display:grid;
grid-template-columns:repeat(2,1fr);
gap:35px;
}

/* CARD */

.indus-air-card{
background:#fff;
padding:40px 30px;
border-radius:16px;
box-shadow:0 12px 30px rgba(0,0,0,0.08);
transition:all 0.4s ease;
border:2px solid transparent;
}

/* CARD HOVER */

.indus-air-card:hover{
transform:translateY(-10px);
border-color:#212384;
box-shadow:0 22px 45px rgba(0,0,0,0.15);
}

/* ICON */

.indus-air-icon{
font-size:45px;
color:#f37021;
margin-bottom:22px;
animation:iconFloat 3s ease-in-out infinite;
transition:0.4s;
}

/* ICON HOVER */

.indus-air-card:hover .indus-air-icon{
color:#212384;
animation:iconSpin 0.7s ease;
}

/* SUB HEADING */

.indus-air-card h3{
font-size:22px;
color:#f37021;
margin-bottom:15px;
transition:0.4s;
font-weight: 600;

}

/* SUB HEADING HOVER */

.indus-air-card:hover h3{
color:#212384;
}

/* TEXT */

.indus-air-card p{
font-size:17px;
line-height:1.7;
color:#000000;
}

/* FLOAT ANIMATION */

@keyframes iconFloat{

0%{transform:translateY(0);}
50%{transform:translateY(-6px);}
100%{transform:translateY(0);}

}

/* SPIN ANIMATION */

@keyframes iconSpin{

0%{transform:rotate(0) scale(1);}
50%{transform:rotate(180deg) scale(1.3);}
100%{transform:rotate(360deg) scale(1);}

}

/* RESPONSIVE */

@media(max-width:768px){

.indus-air-grid{
grid-template-columns:1fr;
}

.indus-process-heading{
font-size:28px;
}

}

</style>
<!-- - What Is an Air-Cooled Voltage Stabilizer? ends -->


<!--  Residential Applications  starts-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-residential-section">

<h2 class="indus-process-heading">
Residential Applications – Safe Power for <span> Every Home</span>
</h2>

<div class="indus-residential-timeline">

<!-- ITEM 1 -->
<div class="indus-residential-item">

<div class="indus-res-icon">
<i class="fas fa-home"></i>
</div>

<div class="indus-res-content">
<h3>Home Appliance Protection</h3>

<p>
A voltage stabilizer for home protects televisions, refrigerators, air conditioners, and electronic appliances from voltage damage. Many homeowners prefer an air cooled stabilizer for home because it is compact, oil-free, and suitable for indoor installation.
</p>
</div>

</div>


<!-- ITEM 2 -->
<div class="indus-residential-item">

<div class="indus-res-icon">
<i class="fas fa-building"></i>
</div>

<div class="indus-res-content">
<h3>Whole House Voltage Safety</h3>

<p>
A main line stabilizer for house provides centralized voltage protection, while a stabilizer for whole house ensures every circuit remains safe. Families living in cities often install a voltage stabilizer for apartment, while a stabilizer for flat or bungalow is ideal for independent residences.
</p>
</div>

</div>


<!-- ITEM 3 -->
<div class="indus-residential-item">

<div class="indus-res-icon">
<i class="fas fa-bolt"></i>
</div>

<div class="indus-res-content">
<h3>Inverter & Power Fluctuation Protection</h3>

<p>
An air cooled stabilizer for residential use is also widely used as a stabilizer for inverter, protecting inverter systems from voltage fluctuation. Many users install a stabilizer for power fluctuation to safeguard appliances during unstable grid conditions.
</p>
</div>

</div>

</div>

</section>


<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Montserrat';
}

/* SECTION */

.indus-residential-section{
padding:50px 20px;
background:#ffffff;
}

/* MAIN HEADING */

.indus-process-heading{
text-align:center;
font-size:35px;
color:#212384;
font-weight:700;
margin-bottom:60px;
}

.indus-process-heading span{
color:#f37021;
}

/* TIMELINE */

.indus-residential-timeline{
max-width:950px;
margin:auto;
border-left:4px solid #e5e7ff;
padding-left:40px;
}

/* ITEM */

.indus-residential-item{
display:flex;
gap:25px;
margin-bottom:45px;
position:relative;
transition:0.4s;
}

/* ICON */

.indus-res-icon{
width:60px;
margin-top: 43px;
height:60px;
min-width:60px;
background:#f37021;
color:#fff;
display:flex;
align-items:center;
justify-content:center;
font-size:24px;
border-radius:50%;
position:absolute;
left:-72px;
top:0;
transition:0.4s;
}

/* CONTENT */

.indus-res-content{
background:#ffffff;
padding:25px 30px;
border-radius:10px;
transition:0.4s;
}

/* SUB HEADING */

.indus-res-content h3{
font-size:21px;
color:#f37021;
margin-bottom:10px;
transition:0.3s;
font-weight: 600;
}

/* TEXT */

.indus-res-content p{
font-size:17px;
text-align: justify;
line-height:1.7;
color:#000000;
}

/* HOVER EFFECT */

.indus-residential-item:hover .indus-res-icon{
background:#212384;
transform:scale(1.1) rotate(10deg);
}

.indus-residential-item:hover h3{
color:#212384;
}

.indus-residential-item:hover .indus-res-content{
transform:translateX(8px);
box-shadow:0 10px 25px rgba(0,0,0,0.12);
}

/* RESPONSIVE */

@media(max-width:768px){

.indus-residential-timeline{
border-left:none;
padding-left:0;
}

.indus-residential-item{
flex-direction:column;
}

.indus-res-icon{
position:relative;
left:0;
margin-bottom:15px;
}

.indus-process-heading{
font-size:28px;
}

}

</style>

<!-- Residential Applications ends -->


<!-- Office & Commercial starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-commercial-section">

<h2 class="indus-process-heading">
Office & Commercial <span>Voltage Stabilization</span>
</h2>

<div class="indus-commercial-container">

<!-- ITEM 1 -->
<div class="indus-commercial-item">

<div class="indus-commercial-icon">
<i class="fas fa-desktop"></i>
</div>

<div class="indus-commercial-text">
<h3>Office Equipment Protection</h3>

<p>
An air cooled stabilizer for office ensures uninterrupted power for computers, printers, and networking equipment. A voltage stabilizer for office protects valuable IT assets from sudden voltage fluctuations and electrical damage.
</p>
</div>

</div>


<!-- ITEM 2 -->
<div class="indus-commercial-item">

<div class="indus-commercial-icon">
<i class="fas fa-store"></i>
</div>

<div class="indus-commercial-text">
<h3>Retail & Showroom Stability</h3>

<p>
Retail environments benefit from a stabilizer for shop that maintains stable power for billing systems and electronics. A stabilizer for showroom ensures consistent lighting and display performance in commercial outlets.
</p>
</div>

</div>


<!-- ITEM 3 -->
<div class="indus-commercial-item">

<div class="indus-commercial-icon">
<i class="fas fa-network-wired"></i>
</div>

<div class="indus-commercial-text">
<h3>IT & Network Infrastructure</h3>

<p>
Businesses use voltage stabilizers for computers, servers, networking devices, and CCTV systems to maintain operational continuity and avoid costly data loss caused by power fluctuations.
</p>
</div>

</div>

</div>

</section>
<style>
    *{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Montserrat',sans-serif;
}

/* SECTION */

.indus-commercial-section{
padding:50px 20px;
background:#ffffff;
}

/* MAIN HEADING */

.indus-process-heading{
text-align:center;
font-size:35px;
font-weight:700;
color:#212384;
margin-bottom:60px;
}

.indus-process-heading span{
color:#f37021;
}

/* CONTAINER */

.indus-commercial-container{
max-width:1000px;
margin:auto;
display:flex;
flex-direction:column;
gap:30px;
}

/* ITEM */

.indus-commercial-item{
display:flex;
gap:25px;
align-items:flex-start;
background:#ffffff;
padding:30px;
border-radius:10px;
border-left:6px solid #f37021;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
transition:0.4s;
}

/* HOVER */

.indus-commercial-item:hover{
transform:translateY(-6px);
border-left-color:#212384;
box-shadow:0 15px 35px rgba(0,0,0,0.15);
}

/* ICON */

.indus-commercial-icon{
font-size:32px;
color:#f37021;
transition:0.4s;
}

/* ICON HOVER */

.indus-commercial-item:hover .indus-commercial-icon{
color:#212384;
transform:scale(1.2);
}

/* TEXT */

.indus-commercial-text h3{
font-size:22px;
color:#f37021;
margin-bottom:10px;
font-weight: 600;
transition:0.3s;
}

.indus-commercial-item:hover h3{
color:#212384;
}

.indus-commercial-text p{
font-size:18px;
line-height:1.7;
color:#000000;
text-align: justify;

}

/* RESPONSIVE */

@media(max-width:768px){

.indus-commercial-item{
flex-direction:column;
}

.indus-process-heading{
font-size:28px;
}

}
</style>

<!-- Office & Commercial ends  -->


<!-- Industrial & Technical starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-office-section">

<h2 class="indus-process-heading">
Industrial & Technical <span>Applications</span>
</h2>

<div class="indus-office-grid">

<!-- BOX 1 -->
<div class="indus-office-box">

<div class="indus-office-icon">
<i class="fas fa-industry"></i>
</div>

<h3>Industrial Machinery Protection</h3>

<p>
An air cooled stabilizer for industrial use is ideal for light-to-medium industrial loads where oil cooling is not required. A voltage stabilizer for machinery protects motors, drives, and production equipment from voltage stress.
</p>

</div>


<!-- BOX 2 -->
<div class="indus-office-box">

<div class="indus-office-icon">
<i class="fas fa-cogs"></i>
</div>

<h3>Manufacturing & Automation</h3>

<p>
Manufacturing facilities depend on stabilizers for CNC machines and printing machines to maintain production quality. Automation systems operate safely using stabilizers designed for control panels and automation equipment.
</p>

</div>


<!-- BOX 3 -->
<div class="indus-office-box">

<div class="indus-office-icon">
<i class="fas fa-hospital"></i>
</div>

<h3>Medical & Research Equipment</h3>

<p>
Precision environments rely on stabilizers for testing equipment and laboratories. Hospitals and medical facilities use voltage stabilizers to protect sensitive medical equipment and ensure patient safety.
</p>

</div>

</div>

</section>


<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Montserrat',sans-serif;
}

/* SECTION */

.indus-office-section{
padding:50px 20px;
background:#ffffff;
text-align:center;
}

/* MAIN HEADING */

.indus-process-heading{
font-size:35px;
color:#212384;
font-weight:700;
margin-bottom:60px;
}

.indus-process-heading span{
color:#f37021;
}

/* GRID */

.indus-office-grid{
max-width:1261px;
margin:auto;
display:grid;
grid-template-columns:repeat(3,1fr);
gap:30px;
}

/* BOX */

.indus-office-box{
background:#fff;
padding:28px 25px;
border-radius:14px;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
transition:0.4s;
cursor:pointer;
height:170px;
overflow:hidden;
border:2px solid transparent;
}

/* ICON */

.indus-office-icon{
font-size:40px;
color:#f37021;
margin-bottom:15px;
transition:0.4s;
}

/* SUB HEADING */

.indus-office-box h3{
color:#f37021;
font-size:20px;
margin-bottom:10px;
transition:0.4s;
font-weight: 600;
}

/* CONTENT */

.indus-office-box p{
opacity:0;
font-size:16px;
line-height:1.6;
color:#000000;
transition:0.4s;
}

/* HOVER EFFECT */

.indus-office-box:hover{
height:300px;
transform:translateY(-8px);
box-shadow:0 20px 40px rgba(0,0,0,0.15);
border:2px solid #212384;
}

.indus-office-box:hover p{
opacity:1;
margin-top:10px;
}

.indus-office-box:hover .indus-office-icon{
color:#212384;
}

.indus-office-box:hover h3{
color:#212384;
}

/* RESPONSIVE */

@media(max-width:900px){

.indus-office-grid{
grid-template-columns:1fr;
}

.indus-process-heading{
font-size:28px;
}

.indus-office-box{
height:auto;
}

.indus-office-box p{
opacity:1;
}

}

</style>

<!-- Industrial & Technical  ends  -->

<!-- Phase Options &  starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-phase-section">

<h2 class="indus-process-heading">
Phase Options & <span>Capacity Range</span>
</h2>

<div class="indus-phase-grid">

<!-- CARD 1 -->
<div class="indus-phase-card">

<div class="indus-phase-icon">
<i class="fas fa-plug"></i>
</div>

<h3>Single Phase Stabilizer</h3>

<p>
A single phase air cooled stabilizer is ideal for homes and small offices,
providing reliable voltage protection for appliances and office equipment.
</p>

<div class="indus-capacity-tags">
<span>3 kVA</span>
<span>5 kVA</span>
<span>10 kVA</span>
</div>

</div>


<!-- CARD 2 -->
<div class="indus-phase-card">

<div class="indus-phase-icon">
<i class="fas fa-industry"></i>
</div>

<h3>Three Phase Stabilizer</h3>

<p>
A three phase air cooled stabilizer supports larger commercial and
industrial loads, delivering stable voltage for heavy machinery and systems.
</p>

<div class="indus-capacity-tags">
<span>10 kVA</span>
<span>15 kVA</span>
<span>20 kVA</span>
</div>

</div>

</div>

</section>

<style>
    *{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Montserrat';
}

/* SECTION */

.indus-phase-section{
padding:90px 20px;
background:#ffffff;
text-align:center;
}

/* HEADING */

.indus-process-heading{
font-size:35px;
color:#212384;
font-weight:700;
margin-bottom:60px;
}

.indus-process-heading span{
color:#f37021;
}

/* GRID */

.indus-phase-grid{
max-width:1100px;
margin:auto;
display:grid;
grid-template-columns:repeat(2,1fr);
gap:40px;
}

/* CARD */

.indus-phase-card{
background:#ffffff;
padding:40px;
border-radius:16px;
box-shadow:0 15px 35px rgba(0,0,0,0.08);
transition:all 0.4s ease;
border:2px solid transparent;
position:relative;
overflow:hidden;
}

/* HOVER EFFECT */

.indus-phase-card:hover{
transform:translateY(-10px);
border-color:#212384;
box-shadow:0 25px 50px rgba(33,35,132,0.25);
}

/* ICON */

.indus-phase-icon{
font-size:44px;
color:#f37021;
margin-bottom:18px;
animation:floatIcon 3s ease-in-out infinite;
transition:0.4s;
}

/* ICON HOVER ANIMATION */

.indus-phase-card:hover .indus-phase-icon{
color:#212384;
animation:bounceRotate 0.8s ease;
}

/* TITLE */

.indus-phase-card h3{
font-size:22px;
color:#f37021;
margin-bottom:12px;
transition:0.3s;
font-weight: 600;
}

.indus-phase-card:hover h3{
color:#212384;
}

/* TEXT */

.indus-phase-card p{
font-size:18px;
line-height:1.7;
color:#000000;
margin-bottom:25px;
}

/* CAPACITY TAGS */

.indus-capacity-tags{
display:flex;
justify-content:center;
gap:12px;
flex-wrap:wrap;
}

.indus-capacity-tags span{
background:linear-gradient(135deg,#f37021,#ff8c3a);
color:#fff;
padding:7px 16px;
border-radius:20px;
font-size:14px;
transition:0.4s;
}

.indus-phase-card:hover .indus-capacity-tags span{
background:#212384;
}

/* FLOAT ICON ANIMATION */

@keyframes floatIcon{

0%{transform:translateY(0px);}
50%{transform:translateY(-6px);}
100%{transform:translateY(0px);}

}

/* HOVER BOUNCE ANIMATION */

@keyframes bounceRotate{

0%{transform:scale(1) rotate(0deg);}
50%{transform:scale(1.25) rotate(12deg);}
100%{transform:scale(1) rotate(0deg);}

}

/* RESPONSIVE */

@media(max-width:900px){

.indus-phase-grid{
grid-template-columns:1fr;
}

.indus-process-heading{
font-size:28px;
}

}
</style>

<!-- Phase Options &  ends  -->


<!-- Performance Features &  starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-performance-section">

<h2 class="indus-process-heading">
Performance Features & <span>Protection</span>
</h2>

<div class="indus-performance-column">

<!-- ITEM 1 -->

<div class="indus-performance-row">

<div class="indus-perf-icon">
<i class="fas fa-bolt"></i>
</div>

<div class="indus-perf-content">
<h3>High Efficiency Stabilizer</h3>

<p>
Every automatic voltage stabilizer from Indus Power Industries is 
engineered for precision. A high efficiency air cooled stabilizer 
ensures minimal energy loss and reliable voltage regulation.
</p>
</div>

</div>


<!-- ITEM 2 -->

<div class="indus-performance-row">

<div class="indus-perf-icon">
<i class="fas fa-leaf"></i>
</div>

<div class="indus-perf-content">
<h3>Energy Efficient Operation</h3>

<p>
An energy efficient stabilizer reduces electricity costs while 
maintaining stable output voltage for residential, office, 
and industrial applications.
</p>
</div>

</div>


<!-- ITEM 3 -->

<div class="indus-performance-row">

<div class="indus-perf-icon">
<i class="fas fa-tachometer-alt"></i>
</div>

<div class="indus-perf-content">
<h3>Fast Voltage Correction</h3>

<p>
Fast response technology enables quick voltage correction. 
Users can monitor performance through stabilizers with 
digital display or LCD display.
</p>
</div>

</div>


<!-- ITEM 4 -->

<div class="indus-performance-row">

<div class="indus-perf-icon">
<i class="fas fa-shield-alt"></i>
</div>

<div class="indus-perf-content">
<h3>Advanced Protection System</h3>

<p>
Overload protection, short circuit protection, and voltage 
cut-off mechanisms safeguard appliances and ensure 
long-term reliability.
</p>
</div>

</div>


<!-- ITEM 5 -->

<div class="indus-performance-row">

<div class="indus-perf-icon">
<i class="fas fa-tools"></i>
</div>

<div class="indus-perf-content">
<h3>Low Maintenance Design</h3>

<p>
A low maintenance voltage stabilizer reduces servicing 
requirements and ensures dependable performance 
for many years.
</p>
</div>

</div>

</div>

</section>
<style>
    *{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Montserrat',sans-serif;
}

/* SECTION */

.indus-performance-section{
padding:90px 20px;
background:#ffffff;
}

/* HEADING */

.indus-process-heading{
text-align:center;
font-size:35px;
color:#212384;
font-weight:700;
margin-bottom:60px;
}

.indus-process-heading span{
color:#f37021;
}

/* COLUMN */

.indus-performance-column{
max-width:1100px;
margin:auto;
display:flex;
flex-direction:column;
gap:25px;
}

/* ROW */

.indus-performance-row{
display:flex;
align-items:center;
gap:25px;
background:#fff;
padding:25px 30px;
border-radius:12px;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
transition:0.4s;
border-left:5px solid transparent;
}

/* HOVER */

.indus-performance-row:hover{
transform:translateX(10px);
border-left:5px solid #212384;
box-shadow:0 18px 40px rgba(0,0,0,0.15);
}

/* ICON */

.indus-perf-icon{
font-size:32px;
color:#f37021;
min-width:60px;
text-align:center;
animation:floatIcon 3s ease-in-out infinite;
transition:0.4s;
}

/* ICON HOVER */

.indus-performance-row:hover .indus-perf-icon{
color:#212384;
animation:spinIcon 0.7s ease;
}

/* CONTENT */

.indus-perf-content h3{
font-size:20px;
color:#f37021;
margin-bottom:8px;
transition:0.3s;
font-weight: 600;
}

.indus-performance-row:hover h3{
color:#212384;
}

.indus-perf-content p{
font-size:16px;
line-height:1.7;
color:#000000;
}

/* ICON FLOAT */

@keyframes floatIcon{

0%{transform:translateY(0);}
50%{transform:translateY(-5px);}
100%{transform:translateY(0);}

}

/* ICON SPIN */

@keyframes spinIcon{

0%{transform:rotate(0);}
50%{transform:rotate(180deg) scale(1.3);}
100%{transform:rotate(360deg);}

}

/* RESPONSIVE */

@media(max-width:768px){

.indus-performance-row{
flex-direction:column;
text-align:center;
}

.indus-process-heading{
font-size:28px;
}

}
</style>

<!-- Performance Features &  ends -->



<!-- Cooling Design & starts  -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-flip-section">

<h2 class="indus-process-heading">
Cooling Design & Construction <span> Advantages</span>
</h2>

<div class="indus-flip-grid">

  <!-- CARD 1 -->
  <div class="indus-flip-card">
    <div class="indus-flip-inner">

      <div class="indus-flip-front">
        <i class="fas fa-wind"></i>
        <h3>Oil Free Cooling</h3>
      </div>

      <div class="indus-flip-back">
        <h4>Oil Free Cooling</h4>
        <p>
          An air cooled stabilizer without oil eliminates leakage risks,
          making it a preferred oil free voltage stabilizer with cleaner operation.
        </p>
      </div>

    </div>
  </div>

  <!-- CARD 2 -->
  <div class="indus-flip-card">
    <div class="indus-flip-inner">

      <div class="indus-flip-front">
        <i class="fas fa-leaf"></i>
        <h3>Eco Friendly Design</h3>
      </div>

      <div class="indus-flip-back">
        <h4>Eco Friendly Design</h4>
        <p>
          Environmentally conscious buyers choose eco friendly voltage stabilizers
          that operate using clean air cooling technology.
        </p>
      </div>

    </div>
  </div>

  <!-- CARD 3 -->
  <div class="indus-flip-card">
    <div class="indus-flip-inner">

      <div class="indus-flip-front">
        <i class="fas fa-cube"></i>
        <h3>Compact Structure</h3>
      </div>

      <div class="indus-flip-back">
        <h4>Compact Structure</h4>
        <p>
          A compact air cooled stabilizer saves installation space while the
          lightweight structure simplifies installation and maintenance.
        </p>
      </div>

    </div>
  </div>

  <!-- CARD 4 -->
  <div class="indus-flip-card">
    <div class="indus-flip-inner">

      <div class="indus-flip-front">
        <i class="fas fa-volume-mute"></i>
        <h3>Silent Operation</h3>
      </div>

      <div class="indus-flip-back">
        <h4>Silent Operation </h4>
        <p>
          Low noise voltage stabilizers ensure silent operation making them
          ideal for homes, offices, hospitals and quiet environments.
        </p>
      </div>

    </div>
  </div>

  <!-- CARD 5 -->
  <div class="indus-flip-card">
    <div class="indus-flip-inner">

      <div class="indus-flip-front">
        <i class="fas fa-tools"></i>
        <h3>Flexible Installation</h3>
      </div>

      <div class="indus-flip-back">
        <h4>Flexible Installation </h4>
        <p>
          Customers can choose between wall mounted stabilizer or floor mounted
          stabilizer depending on available installation space.
        </p>
      </div>

    </div>
  </div>

  <!-- CARD 6 -->
  <div class="indus-flip-card">
    <div class="indus-flip-inner">

      <div class="indus-flip-front">
        <i class="fas fa-house"></i>
        <h3>Indoor Friendly</h3>
      </div>

      <div class="indus-flip-back">
        <h4>Indoor Friendly </h4>
        <p>
          Many users prefer an indoor voltage stabilizer because it is safe,
          compact and convenient for indoor installation.
        </p>
      </div>

    </div>
  </div>

</div>
</section>

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Montserrat',sans-serif;
}

/* SECTION */
.indus-flip-section{
  padding:50px 20px;
  background:#ffffff;
  text-align:center;
}

/* MAIN HEADING */
.indus-process-heading{
  font-size:35px;
  color:#212384;
  font-weight:700;
  margin-bottom:60px;
}

.indus-process-heading span{
  color:#f37021;
}

/* GRID */
.indus-flip-grid{
  max-width:1200px;
  margin:auto;
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:35px;
}

/* CARD */
.indus-flip-card{
  background:transparent;
  height:345px;
  perspective:1000px;
}

/* INNER */
.indus-flip-inner{
  position:relative;
  width:100%;
  height:100%;
  text-align:center;
  transition:transform 0.8s;
  transform-style:preserve-3d;
}

/* HOVER FLIP */
.indus-flip-card:hover .indus-flip-inner{
  transform:rotateY(180deg);
}

/* FRONT & BACK */
.indus-flip-front,
.indus-flip-back{
  position:absolute;
  width:100%;
  height:80%;
  backface-visibility:hidden;
  border-radius:14px;
  box-shadow:0 10px 25px rgba(0,0,0,0.08);
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  padding:25px;
  border:2px solid #f37021; /* orange border */
  transition:0.4s;
}

/* BORDER CHANGE ON HOVER */
.indus-flip-card:hover .indus-flip-front,
.indus-flip-card:hover .indus-flip-back{
  border-color:#212384; /* blue border */
}

/* FRONT */
.indus-flip-front{
  background:#ffffff;
}

.indus-flip-front i{
  font-size:40px;
  color:#f37021;
  margin-bottom:15px;
  animation:floatIcon 3s ease-in-out infinite;
}

.indus-flip-front h3{
  color:#f37021;
  font-size:20px;
  font-weight: 600;
}

/* BACK */
.indus-flip-back{
  background:#ffffff;
  transform:rotateY(180deg);
}

.indus-flip-back h4{
  font-size:18px;
  color:#212384;
  margin-bottom:12px;
  text-align:center;
  font-weight: 600;
}

.indus-flip-back p{
  font-size:16px;
  line-height:1.6;
  color:#000;
  text-align:center;
}

/* ICON FLOAT ANIMATION */
@keyframes floatIcon{
  0%{transform:translateY(0);}
  50%{transform:translateY(-6px);}
  100%{transform:translateY(0);}
}

/* RESPONSIVE */
@media(max-width:900px){
  .indus-flip-grid{
    grid-template-columns:repeat(2,1fr);
  }
}

@media(max-width:600px){
  .indus-flip-grid{
    grid-template-columns:1fr;
  }

  .indus-process-heading{
    font-size:28px;
  }
}
</style>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<!-- Cooling Design & ends -->


<!-- Pricing, Buying &  starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-value-section">

<h2 class="indus-process-heading">
Pricing, Buying & <span>Value</span>
</h2>

<div class="indus-value-timeline">

<!-- ITEM 1 -->
<div class="indus-value-item left">

<div class="indus-value-icon">
<i class="fas fa-tags"></i>
</div>

<div class="indus-value-content">
<h3>Compare Stabilizer Prices</h3>
<p>
Buyers frequently compare air cooled stabilizer price and voltage stabilizer 
price before purchase. Many also search for stabilizer price near me to 
find trusted local suppliers.
</p>
</div>

</div>

<!-- ITEM 2 -->
<div class="indus-value-item right">

<div class="indus-value-icon">
<i class="fas fa-wallet"></i>
</div>

<div class="indus-value-content">
<h3>Affordable Voltage Stabilizer</h3>
<p>
An affordable voltage stabilizer delivers strong performance and reliable 
voltage protection without compromising on quality.
</p>
</div>

</div>

<!-- ITEM 3 -->
<div class="indus-value-item left">

<div class="indus-value-icon">
<i class="fas fa-star"></i>
</div>

<div class="indus-value-content">
<h3>Best Stabilizer Brands</h3>
<p>
Customers look for the best air cooled stabilizer and the best voltage 
stabilizer brand while evaluating stabilizer cost and long-term reliability.
</p>
</div>

</div>

<!-- ITEM 4 -->
<div class="indus-value-item right">

<div class="indus-value-icon">
<i class="fas fa-bolt"></i>
</div>

<div class="indus-value-content">
<h3>Designed for Indian Conditions</h3>
<p>
All stabilizers are designed as voltage stabilizers for Indian conditions,
ensuring durability, efficiency, and dependable performance.
</p>
</div>

</div>

</div>
</section>

<style>
    *{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Montserrat',sans-serif;
}

.indus-value-section{
  padding:50px 20px;
  background:#fff;
  margin-top: -85px;
}

/* HEADING */
.indus-process-heading{
  text-align:center;
  font-size:35px;
  color:#212384;
  margin-bottom:70px;
}
.indus-process-heading span{
  color:#f37021;
}

/* TIMELINE */
.indus-value-timeline{
  position:relative;
  max-width:1100px;
  margin:auto;
}

/* CENTER LINE */
.indus-value-timeline::before{
  content:"";
  position:absolute;
  left:50%;
  top:0;
  bottom:0;
  width:4px;
  background:#dad9d9;
  transform:translateX(-50%);
}

/* ITEMS */
.indus-value-item{
  position:relative;
  width:50%;
  padding:20px 40px;
}

/* LEFT SIDE */
.indus-value-item.left{
  left:0;
  margin-left: -44px;
  text-align:right;
}

/* RIGHT SIDE */
.indus-value-item.right{
  margin-left: 44px;    
  left:50%;
}

/* CARD */
.indus-value-content{
  background:#fff;
  padding:25px;
  border-radius:12px;
  box-shadow:0 10px 25px rgba(0,0,0,0.08);
  border:2px solid transparent; /* Default border */
  transition:0.4s;
}

.indus-value-content:hover{
  transform:translateY(-8px);
  box-shadow:0 18px 40px rgba(0,0,0,0.15);
  border-color:#212384; /* Blue border on hover */
}

/* ICON */
.indus-value-icon{
  position:absolute;
  top:30px;
  width:50px;
  height:50px;
  border-radius:50%;
  background:#fff;
  border:3px solid #f37021;
  display:flex;
  align-items:center;
  justify-content:center;
  color:#f37021;
  font-size:20px;
  animation:floatIcon 3s ease-in-out infinite;
  transition:0.4s;
}

/* POSITION ICONS AWAY FROM LINE */
.indus-value-item.left .indus-value-icon{
  right:-70px;
}
.indus-value-item.right .indus-value-icon{
  left:-70px;
}

/* ICON HOVER */
.indus-value-item:hover .indus-value-icon{
  color:#212384;
  border-color:#212384;
  transform:rotate(180deg) scale(1.2); /* Half rotate */
}

/* TEXT */
.indus-value-content h3{
  color:#f37021;
  margin-bottom:8px;
  font-weight: 600;
}
.indus-value-content:hover h3{
  color:#212384;
}

.indus-value-content p{
  font-size:16px;
  line-height:1.6;
  color:#000000;
}

/* FLOAT ANIMATION */
@keyframes floatIcon{
  0%{transform:translateY(0);}
  50%{transform:translateY(-6px);}
  100%{transform:translateY(0);}
}

/* MOBILE */
@media(max-width:768px){
  .indus-value-timeline::before{
    left:20px;
  }
  .indus-value-item{
    width:100%;
    padding-left:60px;
  }
  .indus-value-item.right{
    left:0;
  }
  .indus-value-icon{
    left:0;
  }
}
</style>
<!--Pricing, Buying &  ends  -->


<!--     Manufacturer, Supplier starts -->
<section class="indus-manufacturer-section">

  <h2 class="indus-process-heading">
    Manufacturer, Supplier & <span>Local Availability</span>
  </h2>

  <div class="indus-manufacturer-grid">

    <!-- CARD 1 -->
    <div class="indus-manufacturer-card">
      <div class="indus-card-icon">
        <i class="fas fa-cogs"></i>
      </div>
      <h3 class="indus-card-title">Leading Manufacturer</h3>
      <p>
        Indus Power Industries is a leading air cooled stabilizer manufacturer and voltage stabilizer manufacturer in India.
      </p>
    </div>

    <!-- CARD 2 -->
    <div class="indus-manufacturer-card">
      <div class="indus-card-icon">
        <i class="fas fa-network-wired"></i>
      </div>
      <h3 class="indus-card-title">Supplier Network</h3>
      <p>
        The company serves diverse sectors nationwide as an air cooled stabilizer supplier and voltage stabilizer supplier.
      </p>
    </div>

    <!-- CARD 3 -->
    <div class="indus-manufacturer-card">
      <div class="indus-card-icon">
        <i class="fas fa-shipping-fast"></i>
      </div>
      <h3 class="indus-card-title">Dealers & Export</h3>
      <p>
        Products are available through distributors, wholesalers, and stabilizer exporter India channels. OEM solutions are also offered.
      </p>
    </div>

  </div>

</section>

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Montserrat';
}

/* SECTION */
.indus-manufacturer-section{
  padding:80px 20px;
  background:#ffffff;
  text-align:center;
}

/* HEADING */
.indus-process-heading{
  font-size:35px;
  color:#212384;
  font-weight:700;
  margin-bottom:60px;
}

/* ORANGE SPAN */
.indus-process-heading span{
  color:#f37021;
  position:relative;
}

/* GRID */
.indus-manufacturer-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit, minmax(280px,1fr));
  gap:35px;
  max-width:1200px;
  margin:auto;
}

/* CARD */
.indus-manufacturer-card{
  background: linear-gradient(135deg, #ffffff, #fefefe);
  border-radius:20px;
  padding:40px 25px;
  box-shadow:0 15px 40px rgba(0,0,0,0.06);
  transition:0.5s ease;
  cursor:pointer;
  position:relative;
  display:flex;
  flex-direction:column;
  align-items:center;
  text-align:center;
  border: solid 2px #f37021;
}

/* ICON CIRCLE */
.indus-card-icon{
  width:80px;
  height:80px;
  border-radius:50%;
  background:#f37021;
  color:#fff;
  display:flex;
  justify-content:center;
  align-items:center;
  font-size:30px;
  margin-bottom:20px;
  transition:0.4s ease;
}

.indus-manufacturer-card:hover .indus-card-icon{
  transform: translateY(-10px) rotate(10deg);
  background:#212384;
  border: solid 2px #212384;

}

/* CARD TITLE */
.indus-card-title{
  color:#212384;
  font-size:20px;
  font-weight:600;
  margin-bottom:12px;
  position:relative;
}

/* CARD TEXT */
.indus-manufacturer-card p{
  font-size:15px;
  line-height:1.7;
  color:#444;
  max-width:280px;
}

/* HOVER CARD EFFECT */
.indus-manufacturer-card:hover{
  transform:translateY(-12px) scale(1.05);
  box-shadow:0 25px 60px rgba(0,0,0,0.12);
}

/* RESPONSIVE */
@media(max-width:900px){
  .indus-manufacturer-grid{
    grid-template-columns:repeat(auto-fit, minmax(250px,1fr));
  }
}

@media(max-width:600px){
  .indus-process-heading{
    font-size:28px;
  }
}
</style>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!--     Manufacturer, Supplier ends  -->



<!-- Installation, Service starts -->
<section class="indus-installation-column">

  <h2 class="indus-process-heading">
    Installation, Service & <span>AMC Support</span>
  </h2>

  <div class="indus-installation-grid">

    <!-- BOX 1 -->
    <div class="indus-installation-box">
      <div class="indus-box-header">
        <i class="fas fa-tools"></i>
        <h3>Professional Installation</h3>
      </div>
      <p>
        Proper voltage stabilizer installation ensures correct operation and peak performance. Expert air cooled stabilizer installation guarantees safety and efficiency.
      </p>
    </div>

    <!-- BOX 2 -->
    <div class="indus-installation-box">
      <div class="indus-box-header">
        <i class="fas fa-wrench"></i>
        <h3>Expert Service & Maintenance</h3>
      </div>
      <p>
        Customers can quickly access stabilizer service near them. Routine maintenance ensures consistent performance and long-term reliability.
      </p>
    </div>

    <!-- BOX 3 -->
    <div class="indus-installation-box">
      <div class="indus-box-header">
        <i class="fas fa-calendar-check"></i>
        <h3>AMC & Support Plans</h3>
      </div>
      <p>
        Stabilizer AMC plans provide peace of mind. Support includes repair, servicing, genuine spare parts, troubleshooting, and full warranty coverage.
      </p>
    </div>

  </div>

</section>

<style>
    *{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Montserrat',sans-serif;
}

/* SECTION */
.indus-installation-column{
  padding:50px 20px;
  background:#ffffff;
  text-align:center;
}

/* HEADING */
.indus-process-heading{
  font-size:35px;
  color:#212384;
  font-weight:700;
  margin-bottom:60px;
}

.indus-process-heading span{
  color:#f37021;
}

/* GRID */
.indus-installation-grid{
  display:grid;
  gap:30px;
   width: 788px;
  margin:auto;
  text-align: center;
}

/* BOX */
.indus-installation-box{
  background:#fff;
  border-radius:12px;
  box-shadow:0 10px 25px rgba(0,0,0,0.08);
  padding:30px 20px;
  overflow:hidden;
  cursor:pointer;
  border:2px solid #f37021;
  transition:0.5s;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:flex-start;
  min-height:180px;
  text-align: center;
}

/* HEADER (ICON + HEADING) */
.indus-box-header{
  display:flex;
  flex-direction:column;
  align-items:center;
  margin-bottom:15px;
  text-align: center;

}

.indus-box-header i{
  font-size:32px;
  color:#f37021;  /* orange first */
  margin-bottom:10px;
  transition:0.4s;
  animation:floatIcon 3s ease-in-out infinite;
}

.indus-box-header h3{
  font-size:205x;
  color:#f37021;   /* orange first */
  transition:0.4s;
  text-align: center;
  font-weight: 600;
}

/* PARAGRAPH */
.indus-installation-box p{
  opacity:0;
  transform:translateY(20px);
  font-size:16px;
  line-height:1.7;
  color:#000000;
  transition:0.5s;
  text-align:center;
}

/* HOVER EFFECT */
.indus-installation-box:hover{
  transform:translateY(-8px);
  border-color:#212384;  /* blue border on hover */
  box-shadow:0 18px 40px rgba(0,0,0,0.15);
}

.indus-installation-box:hover i{
  color:#212384;   /* icon turns blue */
}

.indus-installation-box:hover h3{
  color:#212384;  /* heading turns blue */
}

.indus-installation-box:hover p{
  opacity:1;
  transform:translateY(0);
}

/* FLOAT ICON ANIMATION */
@keyframes floatIcon{
  0%{transform:translateY(0);}
 50%{transform:translateY(-6px);}
 100%{transform:translateY(0);}
}

/* RESPONSIVE */
@media(max-width:992px){
  .indus-installation-grid{
    grid-template-columns:repeat(2,1fr);
  }
}

@media(max-width:600px){
  .indus-installation-grid{
    grid-template-columns:1fr;
  }

  .indus-process-heading{
    font-size:28px;
  }
}
</style>


<!-- Installation, Service ends  -->


<!-- Protection Against start -->

<section class="indus-protection-section">

  <h2 class="indus-process-heading">
    Protection Against <span>Power Problems</span>
  </h2>

  <div class="indus-protection-grid">

    <!-- BOX 1 -->
    <div class="indus-protection-box">
      <div class="indus-protection-icon">
        <i class="fas fa-bolt"></i>
      </div>
      <h3>Voltage Fluctuation Protection</h3>
      <p>
        An air-cooled stabilizer addresses unstable grid voltage, protecting equipment with low and high voltage correction.
      </p>
    </div>

    <!-- BOX 2 -->
    <div class="indus-protection-box">
      <div class="indus-protection-icon">
        <i class="fas fa-plug"></i>
      </div>
      <h3>Power Cut Safety</h3>
      <p>
        Areas with frequent outages benefit from stabilizers ensuring continuous operation and safeguarding sensitive systems.
      </p>
    </div>

    <!-- BOX 3 -->
    <div class="indus-protection-box">
      <div class="indus-protection-icon">
        <i class="fas fa-shield-alt"></i>
      </div>
      <h3>Electrical Safety</h3>
      <p>
        Ensures complete protection, prolongs equipment life, and safeguards against electrical hazards and power instability.
      </p>
    </div>

  </div>

</section>

<style>

    *{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Montserrat',sans-serif;
}

/* SECTION */
.indus-protection-section{
  padding:50px 20px;
  background:#ffffff;
  text-align:center;
}

/* HEADING */
.indus-process-heading{
  font-size:35px;
  color:#212384;
  font-weight:700;
  margin-bottom:70px;
}

.indus-process-heading span{
  color:#f37021;
}

/* GRID */
.indus-protection-grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:40px;
  max-width:1200px;
  margin:auto;
}

/* BOX */
.indus-protection-box{
  background:#fff;
  border-radius:12px;
  box-shadow:0 10px 25px rgba(0,0,0,0.08);
  padding:30px 20px;
  text-align:center;
  cursor:pointer;
  border:2px solid transparent;
  transition:0.5s;
  min-height:240px;
  display:flex;
  flex-direction:column;
  align-items:center;
  justify-content:flex-start;
}

/* ICON */
.indus-protection-icon{
  width:50px;  /* smaller icon */
  height:50px;
  background:#f37021;
  border-radius:50%;
  display:flex;
  align-items:center;
  justify-content:center;
  margin-bottom:15px;
  transition:0.4s;
}

.indus-protection-icon i{
  color:#fff;
  font-size:20px;
}

/* HEADING */
.indus-protection-box h3{
  font-size:20px;
  color:#f37021;   /* orange first */
  margin-bottom:12px;
  transition:0.4s;
  font-weight: 600;
}

/* PARAGRAPH */
.indus-protection-box p{
  font-size:16px;
  line-height:1.7;
  color:#000000;
  text-align:center;
}

/* HOVER EFFECT */
.indus-protection-box:hover{
  border-color:#212384;   /* border blue after hover */
  transform:translateY(-5px);
  box-shadow:0 15px 35px rgba(0,0,0,0.12);
}

.indus-protection-box:hover h3{
  color:#212384;   /* heading turns blue */
}

.indus-protection-box:hover .indus-protection-icon{
  background:#212384;   /* icon background blue */
  transform:rotateY(180deg); /* half rotation effect */
}

/* RESPONSIVE */
@media(max-width:992px){
  .indus-protection-grid{
    grid-template-columns:repeat(2,1fr);
  }
}

@media(max-width:600px){
  .indus-protection-grid{
    grid-template-columns:1fr;
  }

  .indus-process-heading{
    font-size:28px;
  }
}
</style>


<!-- Protection Against ends -->


<!-- Trust starts  -->
<section class="indus-trust-section">

  <h2 class="indus-process-heading">
    Trust, Quality & <span>Customization</span>
  </h2>

  <div class="indus-trust-grid">

    <!-- MINI CARD 1 -->
    <div class="indus-trust-card">
      <div class="indus-trust-icon">
        <i class="fas fa-check-circle"></i>
      </div>
      <h3>Trusted Performance</h3>
      <p>Customers rely on air cooled stabilizers built for demanding environments and heavy loads, ensuring consistent operation.</p>
    </div>

    <!-- MINI CARD 2 -->
    <div class="indus-trust-card">
      <div class="indus-trust-icon">
        <i class="fas fa-industry"></i>
      </div>
      <h3>Industrial & Commercial Grade</h3>
      <p>Heavy duty, industrial grade, and commercial grade stabilizers deliver dependable performance for all sectors.</p>
    </div>

    <!-- MINI CARD 3 -->
    <div class="indus-trust-card">
      <div class="indus-trust-icon">
        <i class="fas fa-flag"></i>
      </div>
      <h3>Made in India & Custom</h3>
      <p>Proudly offering Made in India solutions with customized options to suit unique requirements and applications.</p>
    </div>

    <!-- MINI CARD 4 -->
    <div class="indus-trust-card">
      <div class="indus-trust-icon">
        <i class="fas fa-bolt"></i>
      </div>
      <h3>Complete Power Solution</h3>
      <p>Comprehensive voltage stabilization support for homes, offices, and industries nationwide for reliable power regulation.</p>
    </div>

  </div>

</section>

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Montserrat';
}

/* SECTION */
.indus-trust-section{
  padding:50px 20px;
  background:#ffffff;
  text-align:center;
}

/* HEADING */
.indus-process-heading{
  font-size:35px;
  color:#212384;
  font-weight:700;
  margin-bottom:54px;
}

.indus-process-heading span{
  color:#f37021;
}

/* GRID */
.indus-trust-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit, minmax(250px, 1fr));
  gap:25px;
  max-width:1200px;
  margin:auto;
}

/* MINI CARD */
.indus-trust-card{
  background:#fff;
  padding:25px 20px;
  border-radius:12px;
  box-shadow:0 8px 20px rgba(0,0,0,0.08);
  border:2px solid transparent;
  transition:0.5s;
  cursor:pointer;
  display:flex;
  flex-direction:column;
  align-items:center;
  text-align:center;
  min-height:220px;
  position:relative;
}

/* ICON */
.indus-trust-icon{
  font-size:40px;
  color:#f37021;
  margin-bottom:12px;
  transition:0.5s;
}

.indus-trust-card:hover .indus-trust-icon{
  color:#212384;
  animation:iconBounce 0.6s ease forwards;
}

/* CARD HEADING */
.indus-trust-card h3{
  color:#f37021;
  font-size:18px;
  margin-bottom:12px;
  transition:0.4s;
  font-weight: 600;
}

/* CARD TEXT */
.indus-trust-card p{
  font-size:15px;
  color:#000000;
  line-height:1.6;
  transition:0.4s;
}

/* HOVER EFFECT */
.indus-trust-card:hover{
  transform:translateY(-8px) scale(1.05);
  border-color:#212384;
  box-shadow:0 18px 35px rgba(0,0,0,0.15);
}

.indus-trust-card:hover h3{
  color:#212384;
}

/* ICON ANIMATION */
@keyframes iconBounce {
  0% { transform: scale(1); }
  30% { transform: scale(1.3); }
  50% { transform: scale(1.15); }
  70% { transform: scale(1.25); }
  100% { transform: scale(1.2); }
}

/* RESPONSIVE */
@media(max-width:900px){
  .indus-trust-grid{
    grid-template-columns:repeat(auto-fit, minmax(200px, 1fr));
  }
}

@media(max-width:600px){
  .indus-process-heading{
    font-size:28px;
  }
}
</style>

<!-- Font Awesome CDN for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Trust ends -->


<!-- conclusion starts -->

<section>

    <!-- CONCLUSION TOP -->
<section class="indus-conclusion-new">

<h2 class="indus-process-heading">
<span>Conclusion</span>
</h2>

<p class="indus-conclusion-text">
An air cooled voltage stabilizer is an essential investment for protecting electrical equipment, 
ensuring operational stability, and reducing long-term costs. With advanced engineering, robust construction, and nationwide service support, Indus Power Industries Pvt. Ltd. 
delivers industry-leading air-cooled stabilization solutions for homes, offices, and industries.
</p>

<p>
    Choosing the right stabilizer today ensures safer power, longer equipment life, and uninterrupted productivity tomorrow.
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