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
  text-transform: capitalize; /* Capitalizes the first letter of every word */
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
        <h1>Oil Cooled Voltage Stabilizer Manufacturer India</h1>
        <div class="premium-breadcrumb-trail">
            <a href="#">Home</a> 
            &nbsp;»&nbsp; 
            <a href="#">Products</a> 
            &nbsp;»&nbsp;
            <a href="#">Stabilizer</a> 
            &nbsp;»&nbsp;
            <span>Oil Cooled Voltage Stabilizer</span>
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
    <img src="img/Oil Cooled1.png" class="tech-display-image" alt="">
    <img src="img/Oil Cooled2.png" class="tech-display-image" alt="">
    <img src="img/Oil Cooled3.png" class="tech-display-image" alt="">
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















<!-- Heavy-Duty Power Protection   Start -->

<section class="indus-oil-section">

  <h2 class="indus-process-heading" style="font-size:32px;">
    Heavy-Duty Power Protection for Industrial & <span>Commercial Applications</span>
  </h2>

  <div class="indus-grid-container">

    <div class="indus-content-card">
      <p>
        In today's power-dependent environment, maintaining stable voltage is critical for protecting valuable electrical equipment and sensitive devices. Unstable voltage can lead to frequent breakdowns, reduced efficiency, and costly repairs. By ensuring a steady and reliable power supply, businesses and industries can maintain uninterrupted operations and minimize long-term maintenance costs.
      </p>
    </div>

    <div class="indus-content-card">
      <p>
        An oil cooled voltage stabilizer is a proven and highly reliable solution designed to handle heavy electrical loads and severe voltage fluctuations. Its robust design allows continuous operation under demanding conditions, ensuring that all connected equipment receives consistent and regulated voltage. This makes it ideal for industries, large commercial facilities, and critical infrastructure projects where power stability is paramount.
      </p>
    </div>

    <div class="indus-content-card">
      <p>
        At Indus Power Industries Pvt Ltd, we specialize in designing and manufacturing advanced oil cooled stabilizer systems that deliver dependable performance across a wide range of applications. Our solutions are engineered with cutting-edge technology to ensure durability, efficiency, and long-term protection of equipment, providing peace of mind for businesses and infrastructure projects that require consistent and safe power regulation.
      </p>
    </div>

  </div>

</section>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap');

body{
  font-family:'Montserrat';
  background:#ffffff;
  margin:0;
  padding:0;
}

/* SECTION HEADING */
.indus-process-heading{
    text-align:center;
    font-size:32px;
    font-weight:900;
    color:#212384;
    margin-bottom:50px;
    position:relative; /* for underline positioning */
}

/* ORANGE SPAN */
.indus-process-heading span{
    color:#f37021;
    position:relative;
}

/* UNDERLINE ANIMATION */
.indus-process-heading span::after{
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

/* PANEL SECTION */
.indus-section-panel{
    background:#ffffff;
    padding:50px 5%;
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

<!-- Heavy-Duty Power Protection  End -->


<!-- What Is an Oil-Cooled starts -->

<section class="indus-oil-section">

  <h2 class="indus-process-heading">
    What Is an Oil-Cooled <span>Voltage Stabilizer?</span>
  </h2>

  <div class="indus-oil-grid">

    <!-- CARD 1 -->
    <div class="indus-oil-card">

      <div class="indus-oil-icon">
        <i class="fas fa-industry"></i>
      </div>

      <h3>High-Capacity Power Regulation</h3>

      <p>
        An oil cooled voltage stabilizer is a high-capacity power regulation device that uses transformer oil 
        for efficient heat dissipation and long-term durability.
      </p>

    </div>

    <!-- CARD 2 -->
    <div class="indus-oil-card">

      <div class="indus-oil-icon">
        <i class="fas fa-bolt"></i>
      </div>

      <h3>Automatic Voltage Stabilization</h3>

      <p>
        Our oil cooled stabilizer solutions function as an automatic voltage stabilizer, 
        continuously monitoring incoming voltage and correcting deviations in real time.
      </p>

    </div>

    <!-- CARD 3 -->
    <div class="indus-oil-card">

      <div class="indus-oil-icon">
        <i class="fas fa-shield-alt"></i>
      </div>

      <h3>Dependable Line Stabilizer</h3>

      <p>
        Each oil cooled stabilizer works as a precise voltage regulator and dependable line stabilizer, 
        protecting mission-critical equipment.
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
.indus-oil-section{
  padding:50px 20px;
  background:#ffffff;
  text-align:center;
}

/* MAIN HEADING */
.indus-process-heading{
  font-size:36px;
  font-weight:700;
  color:#212384;
  margin-bottom:55px;
}

.indus-process-heading span{
  color:#f37021;
}

/* GRID */
.indus-oil-grid{
  max-width:1100px;
  margin:auto;
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:35px;
}

/* CARD */
.indus-oil-card{
  background:#fff;
  padding:40px 30px;
  border-radius:16px;
  box-shadow:0 12px 30px rgba(0,0,0,0.08);
  transition:all 0.4s ease;
  border:2px solid transparent;
  cursor:pointer;
}

/* CARD HOVER */
.indus-oil-card:hover{
  transform:translateY(-10px);
  border-color:#212384;
  box-shadow:0 22px 45px rgba(0,0,0,0.15);
}

/* ICON */
.indus-oil-icon{
  font-size:45px;
  color:#f37021;
  margin-bottom:22px;
  animation:iconFloat 3s ease-in-out infinite;
  transition:0.4s;
}

/* ICON HOVER */
.indus-oil-card:hover .indus-oil-icon{
  color:#212384;
  animation:iconSpin 0.7s ease;
}

/* SUB HEADING */
.indus-oil-card h3{
  font-size:22px;
  color:#f37021;
  margin-bottom:15px;
  transition:0.4s;
  font-weight: 600;
}

/* SUB HEADING HOVER */
.indus-oil-card:hover h3{
  color:#212384;
}

/* TEXT */
.indus-oil-card p{
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
@media(max-width:992px){
  .indus-oil-grid{
    grid-template-columns:repeat(2,1fr);
  }
}

@media(max-width:600px){
  .indus-oil-grid{
    grid-template-columns:1fr;
  }

  .indus-process-heading{
    font-size:28px;
  }
}
</style>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<!-- - What Is an Oil-Cooled ends -->


<!-- Technology & Designstarts-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-residential-section">

<h2 class="indus-process-heading">
Technology & Design <span> Excellence </span>
</h2>

<div class="indus-residential-timeline">

<!-- ITEM 1 -->
<div class="indus-residential-item">

<div class="indus-res-icon">
<i class="fas fa-cogs"></i>
</div>

<div class="indus-res-content">
<h3>Precision Engineering</h3>

  <p>
        At Indus Power Industries, every oil cooled servo voltage stabilizer is engineered for precision and longevity. 
        Our servo voltage stabilizer design uses a servo motor and variable transformer to maintain tight voltage tolerance, ensuring fast correction and minimal energy loss.
      </p>
</div>

</div>


<!-- ITEM 2 -->
<div class="indus-residential-item">

<div class="indus-res-icon">
<i class="fas fa-bolt"></i>
</div>

<div class="indus-res-content">
<h3>High Efficiency & Reliability</h3>
      <p>
        This servo-controlled approach ensures high efficiency and dependable performance across industrial and commercial applications. 
        Continuous monitoring keeps the output voltage stable even in severe fluctuations.
      </p>
</div>

</div>


<!-- ITEM 3 -->
<div class="indus-residential-item">

<div class="indus-res-icon">
<i class="fas fa-industry"></i>
</div>

<div class="indus-res-content">
 <h3>Industrial-Grade Solutions</h3>
      <p>
        Our heavy-duty stabilizers are built for demanding environments. High capacity oil cooled units operate continuously without degradation, making them reliable industrial oil cooled voltage stabilizer solutions.
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
padding:0px 20px;
background:#ffffff;
}

/* MAIN HEADING */

.indus-process-heading{
text-align:center;
font-size:36px;
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
border: solid 2px #f37021;
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
border: solid 2px #212384;

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

<!-- Technology & Design ends -->


<!-- Industrial-Grade  starts -->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-commercial-section">

  <h2 class="indus-process-heading">
    Industrial-Grade Performance for <span>Heavy Loads</span>
  </h2>

  <div class="indus-commercial-container">

    <!-- ITEM 1 -->
    <div class="indus-commercial-item">
      <div class="indus-commercial-icon">
        <i class="fas fa-industry"></i>
      </div>
      <div class="indus-commercial-text">
        <h3>Continuous Duty Stabilizers</h3>
        <p>
          Our oil cooled stabilizers for industrial use are indispensable wherever large motors, compressors, or automated systems are installed. 
          Designed to handle heavy loads, these units support round-the-clock usage without interruption.
        </p>
      </div>
    </div>

    <!-- ITEM 2 -->
    <div class="indus-commercial-item">
      <div class="indus-commercial-icon">
        <i class="fas fa-building"></i>
      </div>
      <div class="indus-commercial-text">
        <h3>Factory & Plant Applications</h3>
        <p>
          Ideal for factories and manufacturing plants, our stabilizers prevent downtime caused by voltage fluctuations. 
          They ensure smooth operations across all industrial machinery, providing reliable performance even in demanding environments.
        </p>
      </div>
    </div>

    <!-- ITEM 3 -->
    <div class="indus-commercial-item">
      <div class="indus-commercial-icon">
        <i class="fas fa-robot"></i>
      </div>
      <div class="indus-commercial-text">
        <h3>Specialized Machinery Support</h3>
        <p>
          Specialized applications such as CNC machines, injection molding, printing machines, and textile industry equipment benefit from precise voltage regulation. 
          Each stabilizer is tailored for industrial needs, ensuring safety and efficiency.
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
  font-size:36px;
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
  gap:25px;
}

/* ITEM */
.indus-commercial-item{
  display:flex;
  gap:25px;
  align-items:flex-start;
  background:#ffffff;
  padding:25px 30px;
  border-radius:10px;
  border-left:6px solid #f37021;
  box-shadow:0 10px 25px rgba(0,0,0,0.08);
  transition:0.4s;
}

/* HOVER EFFECT */
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
  transition:0.3s;
  font-weight: 600;
}

.indus-commercial-item:hover .indus-commercial-text h3{
  color:#212384;
}

.indus-commercial-text p{
  font-size:16px;
  line-height:1.7;
  color:#000000;
  text-align:justify;
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

<!-- Industrial-Grade  ends  -->

<!--Applications starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-application-section">

<h2 class="indus-process-heading">
Industry-Specific <span>Applications</span>
</h2>

<div class="indus-application-grid">

<!-- CARD 1 -->
<div class="indus-application-card">
<div class="indus-application-inner">

<div class="indus-application-front">
<i class="fas fa-industry"></i>
<h3>Industrial Plants</h3>
</div>

<div class="indus-application-back">
<h4>Industrial Plants</h4>
<p>
Our solutions extend across sectors including stabilizers for pharma industry, steel plants and power plants where voltage quality directly impacts productivity and safety.
</p>
</div>

</div>
</div>

<!-- CARD 2 -->
<div class="indus-application-card">
<div class="indus-application-inner">

<div class="indus-application-front">
<i class="fas fa-hospital"></i>
<h3>Healthcare & Hospitals</h3>
</div>

<div class="indus-application-back">
<h4>Healthcare & Hospitals</h4>
<p>
Hospitals and medical facilities depend on stable voltage for life-saving equipment. MRI machines, CT scanners and other imaging devices require precise voltage regulation.
</p>
</div>

</div>
</div>

<!-- CARD 3 -->
<div class="indus-application-card">
<div class="indus-application-inner">

<div class="indus-application-front">
<i class="fas fa-server"></i>
<h3>Research & IT Systems</h3>
</div>

<div class="indus-application-back">
<h4>Research & IT Systems</h4>
<p>
Laboratories, testing equipment, data centers and server rooms require consistent power supply. Telecom and broadcasting networks also depend on voltage stability.
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

.indus-application-section{
padding:90px 20px;
background:#ffffff;
text-align:center;
}

/* HEADING */

.indus-process-heading{
font-size:36px;
color:#212384;
font-weight:700;
margin-bottom:60px;
}

.indus-process-heading span{
color:#f37021;
}

/* GRID */

.indus-application-grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
gap:35px;
max-width:1200px;
margin:auto;
}

/* CARD */

.indus-application-card{
perspective:1000px;
}

.indus-application-inner{
position:relative;
width:100%;
height:260px;
transition:transform 0.8s;
transform-style:preserve-3d;
}

.indus-application-card:hover .indus-application-inner{
transform:rotateY(180deg);
}

/* FRONT & BACK */

.indus-application-front,
.indus-application-back{
position:absolute;
width:100%;
height:100%;
backface-visibility:hidden;
border-radius:14px;
border:2px solid #f37021;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
padding:25px;
transition:0.4s;
}

/* HOVER BORDER */

.indus-application-card:hover .indus-application-front,
.indus-application-card:hover .indus-application-back{
border-color:#212384;
}

/* FRONT */

.indus-application-front{
background:#ffffff;
}

.indus-application-front i{
font-size:38px;
color:#f37021;
margin-bottom:15px;
transition:0.4s;
}

.indus-application-front h3{
font-size:20px;
color:#f37021;
font-weight: 600;
}

.indus-application-card:hover .indus-application-front i{
color:#212384;
transform:scale(1.2) rotate(10deg);
}

/* BACK */

.indus-application-back{
background:#ffffff;
transform:rotateY(180deg);
text-align:center;
}

/* BACK SUBHEADING */

.indus-application-back h4{
color:#212384;
font-size:20px;
margin-bottom:10px;
font-weight:600;
}

/* BACK TEXT */

.indus-application-back p{
font-size:16px;
line-height:1.6;
color:#000;
text-align:justify;
}

/* RESPONSIVE */

@media(max-width:768px){

.indus-process-heading{
font-size:28px;
}

}

</style>

<!-- Applications ends -->


<!-- Commercial & Infrastructure  starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-commercial-use">

<h2 class="indus-process-heading">
Commercial &  <span> Infrastructure Use</span>
</h2>

<div class="indus-commercial-grid">

<!-- BOX 1 -->
<div class="indus-commercial-card">

<div class="indus-commercial-icon">
<i class="fas fa-building"></i>
</div>

<h3>Commercial Power Systems</h3>

<p>
Large commercial complexes rely on oil cooled stabilizers to manage fluctuating loads. 
Applications include malls, hotels, airports and metro rail systems where reliable 
voltage regulation ensures smooth and uninterrupted operations.
</p>

</div>


<!-- BOX 2 -->
<div class="indus-commercial-card">

<div class="indus-commercial-icon">
<i class="fas fa-elevator"></i>
</div>

<h3>Transport & Industrial Equipment</h3>

<p>
Vertical transport and material handling systems such as elevators, lifts, escalators, 
cranes and welding machines require stable power. Oil cooled stabilizers protect these 
systems and ensure safe and efficient performance.
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

.indus-commercial-use{
padding:50px 20px;
background:#ffffff;
text-align:center;
}

/* HEADING */

.indus-process-heading{
font-size:36px;
color:#212384;
font-weight:700;
margin-bottom:60px;
}

.indus-process-heading span{
color:#f37021;
}

/* GRID */

.indus-commercial-grid{
max-width:1000px;
margin:auto;
display:grid;
grid-template-columns:repeat(2,1fr);
gap:35px;
}

/* RECTANGLE BOX */

.indus-commercial-card{
border:2px solid #f37021;
border-radius:12px;
padding:30px;
height:160px;
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
text-align:center;
transition:0.4s;
overflow:hidden;
}

/* ICON */

.indus-commercial-icon{
font-size:38px;
color:#f37021;
margin-bottom:10px;
transition:0.4s;
}

/* SUB HEADING */

.indus-commercial-card h3{
color:#f37021;
font-size:22px;
transition:0.3s;
margin-bottom:10px;
font-weight: 700;
}

/* PARAGRAPH (hidden initially) */

.indus-commercial-card p{
opacity:0;
max-height:0;
overflow:hidden;
font-size:16px;
line-height:1.6;
color:#000;
transition:0.4s;
}

/* HOVER EFFECT */

.indus-commercial-card:hover{
border-color:#212384;
justify-content:flex-start;
padding-top:25px;
height:320px;
}

/* ICON HOVER */

.indus-commercial-card:hover .indus-commercial-icon{
color:#212384;
transform:scale(1.15);
}

/* HEADING HOVER */

.indus-commercial-card:hover h3{
color:#212384;
}

/* PARAGRAPH APPEARS */

.indus-commercial-card:hover p{
opacity:1;
max-height:200px;
margin-top:10px;
}

/* RESPONSIVE */

@media(max-width:768px){

.indus-commercial-grid{
grid-template-columns:1fr;
}

.indus-process-heading{
font-size:28px;
}

}

</style>

<!-- Commercial & Infrastructure ends -->


<!-- Single Phase &  starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-phase-section">

<h2 class="indus-process-heading">
Single Phase & Three Phase <span>Configurations</span>
</h2>

<div class="indus-phase-wrapper">

<!-- LEFT SIDE -->

<div class="indus-phase-info">

<div class="indus-phase-item">
<i class="fas fa-bolt"></i>
<h3>Single Phase Stabilizers</h3>
<p>
Ideal for smaller electrical systems, single phase oil cooled stabilizers 
provide stable voltage for offices, commercial setups and light equipment.
</p>
</div>

<div class="indus-phase-item">
<i class="fas fa-industry"></i>
<h3>Three Phase Stabilizers</h3>
<p>
Three phase stabilizers are designed for industrial networks where large 
machinery and heavy loads require continuous and reliable voltage regulation.
</p>
</div>

</div>


<!-- RIGHT SIDE BOX -->

<div class="indus-capacity-box">

<h3>Available Capacity Range</h3>

<div class="indus-capacity-grid">

<span>10 kVA</span>
<span>15 kVA</span>
<span>20 kVA</span>
<span>25 kVA</span>
<span>30 kVA</span>
<span>50 kVA</span>
<span>75 kVA</span>
<span>100 kVA</span>
<span>150 kVA</span>
<span>200 kVA</span>
<span>250 kVA</span>
<span>300 kVA</span>
<span>500 kVA</span>

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

.indus-phase-section{
  padding:90px 20px;
  background:#ffffff;
}

/* HEADING */
.indus-phase-heading{
  text-align:center;
  font-size:36px;
  color:#212384;
  margin-bottom:60px;
  font-weight:700;
}

.indus-phase-heading span{
  color:#f37021;
}

/* WRAPPER */
.indus-phase-wrapper{
  max-width:1100px;
  margin:auto;
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:50px;
}

/* LEFT SIDE ITEMS */
.indus-phase-item{
  border-left:5px solid #f37021;
  padding-left:20px;
  margin-bottom:30px;
  transition:0.4s;
}

.indus-phase-item i{
  font-size:30px;
  color:#f37021;
  margin-bottom:10px;
  display:block;
  transition:0.4s; /* smooth color change */
}

.indus-phase-item h3{
  color:#f37021;
  font-size:22px;
  margin-bottom:8px;
  transition:0.3s;
  font-weight: 600;
}

.indus-phase-item p{
  font-size:16px;
  line-height:1.7;
  color:#000;
  text-align:justify;
  transition:0.3s;
}

/* HOVER EFFECT */
.indus-phase-item:hover{
  border-color:#212384;
  transform:translateX(6px);
}

.indus-phase-item:hover i{
  color:#212384; /* blue color on hover */
}

.indus-phase-item:hover h3{
  color:#212384;
}

/* CAPACITY BOX */
.indus-capacity-box{
  border:2px solid #f37021;
  border-radius:12px;
  transition:0.4s;
  padding:23px;
  width:370px;
  margin-left:91px;
  margin-top:-11px;
  height:383px;
}

.indus-capacity-box:hover{
  border-color:#212384;
  box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

.indus-capacity-box h3{
  color:#f37021;
  font-size:24px;
  margin-bottom:25px;
  text-align:center;
  transition:0.3s;
}

.indus-capacity-box:hover h3{
  color:#212384;
}

/* GRID */
.indus-capacity-grid{
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:12px;
}

.indus-capacity-grid span{
  border:2px solid #f37021;
  padding:10px;
  text-align:center;
  border-radius:6px;
  font-weight:600;
  color:#f37021;
  transition:0.4s;
  cursor:pointer;
}

.indus-capacity-grid span:hover{
  background:#212384;
  border-color:#212384;
  color:#fff;
  transform:translateY(-4px);
}

/* RESPONSIVE */
@media(max-width:768px){
  .indus-phase-wrapper{
    grid-template-columns:1fr;
  }
  .indus-capacity-grid{
    grid-template-columns:repeat(3,1fr);
  }
  .indus-phase-heading{
    font-size:28px;
  }
}
</style>
<!-- Single Phase &  ends -->



<!-- Construction, Protection starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-timeline-section">

<h2 class="indus-process-heading">
Construction, Protection & <span>Efficiency</span>
</h2>

<div class="indus-timeline">

<!-- ITEM 1 -->

<div class="indus-timeline-item left">

<div class="indus-timeline-icon">
<i class="fas fa-coins"></i>
</div>

<div class="indus-timeline-content">

<h3>Premium Construction</h3>

<p>
Each stabilizer is built with premium materials including copper winding 
for low losses and long operational life. Isolation transformers improve 
safety and reduce electrical noise.
</p>

</div>

</div>


<!-- ITEM 2 -->

<div class="indus-timeline-item right">

<div class="indus-timeline-icon">
<i class="fas fa-shield-alt"></i>
</div>

<div class="indus-timeline-content">

<h3>Advanced Protection</h3>

<p>
Protection features include digital display monitoring, overload protection,
short circuit protection and voltage cut-off to safeguard connected equipment.
</p>

</div>

</div>


<!-- ITEM 3 -->

<div class="indus-timeline-item left">

<div class="indus-timeline-icon">
<i class="fas fa-bolt"></i>
</div>

<div class="indus-timeline-content">

<h3>High Efficiency Design</h3>

<p>
Our stabilizers deliver energy efficient performance with minimal losses
while maintaining stable voltage during fluctuations, low voltage or
high voltage conditions.
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

.indus-timeline-section{
padding:90px 20px;
background:#ffffff;
}

/* HEADING */

.indus-timeline-heading{
text-align:center;
font-size:36px;
color:#212384;
margin-bottom:70px;
font-weight:700;
}

.indus-timeline-heading span{
color:#f37021;
}

/* TIMELINE */

.indus-timeline{
position:relative;
max-width:1100px;
margin:auto;
}

/* CENTER LINE */

.indus-timeline::before{
content:"";
position:absolute;
left:50%;
top:0;
width:4px;
height:100%;
background:#f37021;
transform:translateX(-50%);
}

/* ITEM */

.indus-timeline-item{
position:relative;
width:50%;
padding:20px 40px;
}

/* LEFT SIDE */

.indus-timeline-item.left{
left:0;
text-align:right;
}

/* RIGHT SIDE */

.indus-timeline-item.right{
left:50%;
}

/* ICON ON TIMELINE */

.indus-timeline-icon{
position:absolute;
top:85px;
left:100%;
transform:translate(-50%,0);
width:60px;
height:60px;
background:#f37021;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
color:#fff;
font-size:24px;
transition:0.4s;
z-index:5;
}

.indus-timeline-item.right .indus-timeline-icon{
left:0;
transform:translate(-50%,0);
}

/* CONTENT BOX */

.indus-timeline-content{
background:#fff;
border:2px solid #f37021;
padding:25px;
border-radius:10px;
width:80%;
transition:0.4s;
}

/* ALIGN BOX CLOSE TO CENTER */

.indus-timeline-item.left .indus-timeline-content{
margin-left:auto;
}

.indus-timeline-item.right .indus-timeline-content{
margin-right:auto;
}

/* TEXT */

.indus-timeline-content h3{
color:#f37021;
font-size:22px;
margin-bottom:10px;
transition:0.3s;
font-weight: 600;
}

.indus-timeline-content p{
font-size:16px;
line-height:1.7;
color:#000;
text-align:justify;
}

/* HOVER EFFECT */

.indus-timeline-content:hover{
border-color:#212384;
width:95%;
}

.indus-timeline-content:hover h3{
color:#212384;
}

.indus-timeline-item:hover .indus-timeline-icon{
background:#212384;
transform:translate(-50%,0) scale(1.2) rotate(10deg);
}

/* RESPONSIVE */

@media(max-width:768px){

.indus-timeline::before{
left:25px;
}

.indus-timeline-item{
width:100%;
padding-left:70px;
text-align:left;
}

.indus-timeline-item.right{
left:0;
}

.indus-timeline-icon{
left:25px;
transform:none;
}

.indus-timeline-content{
width:100%;
}

}

</style>

<!-- Construction, Protection ends -->


<!-- Reliable Power for starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-reliable-section">

<h2 class="indus-process-heading">
Reliable Power for <span>Challenging Conditions</span>
</h2>

<div class="indus-reliable-container">

<!-- BOX 1 -->

<div class="indus-reliable-box">

<div class="indus-reliable-top">

<div class="indus-reliable-icon">
<i class="fas fa-bolt"></i>
</div>

<h3>Stable Power in Unstable Grids</h3>

</div>

<p>
In regions with unstable grids, an oil cooled stabilizer ensures reliable 
performance during frequent power cuts. Sensitive installations rely on 
these stabilizers to protect critical equipment and maintain uninterrupted 
operations in demanding industrial environments.
</p>

</div>


<!-- BOX 2 -->

<div class="indus-reliable-box">

<div class="indus-reliable-top">

<div class="indus-reliable-icon">
<i class="fas fa-shield-alt"></i>
</div>

<h3>Long Life Power Protection</h3>

</div>

<p>
As a vital element of electrical infrastructure, these stabilizers provide 
consistent voltage protection and long operational life. Businesses rely 
on them as industrial grade and commercial grade power protection solutions 
for 24x7 operation.
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

.indus-reliable-section{
padding:40px 20px;
background:#ffffff;
}

/* HEADING */

.indus-reliable-heading{
text-align:center;
font-size:36px;
color:#212384;
margin-bottom:60px;
font-weight:700;
}

.indus-reliable-heading span{
color:#f37021;
}

/* CONTAINER */

.indus-reliable-container{
max-width:1000px;
margin:auto;
display:flex;
flex-direction:column;
gap:35px;
}

/* BOX */

.indus-reliable-box{
border:2px solid #f37021;
border-radius:12px;
padding:30px;
overflow:hidden;
position:relative;
transition:0.4s;
cursor:pointer;
}

/* TOP AREA */

.indus-reliable-top{
display:flex;
align-items:center;
gap:20px;
}

/* ICON */

.indus-reliable-icon{
width:60px;
height:60px;
background:#f37021;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
font-size:24px;
color:#fff;
transition:0.4s;
}

/* HEADING */

.indus-reliable-top h3{
font-size:22px;
color:#f37021;
transition:0.3s;
font-weight: 600;
}

/* PARAGRAPH */

.indus-reliable-box p{
margin-top:15px;
font-size:16px;
line-height:1.7;
color:#000;
opacity:0;
transform:translateY(20px);
max-height:0;
transition:0.4s;
text-align:justify;
}

/* HOVER EFFECT */

.indus-reliable-box:hover{
border-color:#212384;
}

.indus-reliable-box:hover .indus-reliable-icon{
background:#212384;
transform:scale(1.1) rotate(10deg);
}

.indus-reliable-box:hover h3{
color:#212384;
}

.indus-reliable-box:hover p{
opacity:1;
transform:translateY(0);
max-height:200px;
}

/* RESPONSIVE */

@media(max-width:768px){

.indus-reliable-heading{
font-size:28px;
}

.indus-reliable-top{
flex-direction:column;
text-align:center;
}

}

</style>

<!-- Reliable Power for ends -->

<!-- Customization  starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-custom-section">

<h2 class="indus-process-heading">
Customization & <span>Indian Conditions</span>
</h2>

<div class="indus-custom-wrapper">

<!-- BOX 1 -->

<div class="indus-custom-box">

<div class="indus-custom-icon">
<i class="fas fa-sliders-h"></i>
</div>

<h3>Customized Stabilizer Solutions</h3>

<p>
Every project is unique, which is why we offer customized oil cooled 
stabilizers tailored to load characteristics, voltage range, and site 
conditions. These solutions are designed to perform reliably across 
different industrial environments throughout India.
</p>

</div>


<!-- BOX 2 -->

<div class="indus-custom-box">

<div class="indus-custom-icon">
<i class="fas fa-industry"></i>
</div>

<h3>Manufacturer & Supply Network</h3>

<p>
As a leading oil cooled stabilizer manufacturer in India, we operate 
as a supplier, dealer, and distributor nationwide. Our company is 
also recognized as an exporter and OEM manufacturer delivering 
reliable stabilizer solutions to industries and commercial projects.
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

.indus-custom-section{
padding:90px 20px;
background:#ffffff;
}

/* HEADING */

.indus-custom-heading{
text-align:center;
font-size:36px;
font-weight:700;
color:#212384;
margin-bottom:60px;
}

.indus-custom-heading span{
color:#f37021;
}

/* GRID */

.indus-custom-wrapper{
max-width:1100px;
margin:auto;
display:grid;
grid-template-columns:repeat(2,1fr);
gap:40px;
}

/* BOX */

.indus-custom-box{
background:#ffffff;
border:2px solid #f37021;
border-radius:12px;
padding:35px 30px;
text-align:center;
transition:0.4s;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

/* ICON */

.indus-custom-icon{
width:70px;
height:70px;
background:#f37021;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
font-size:28px;
color:#fff;
margin:0 auto 15px auto;
transition:0.4s;
}

/* SUBHEADING */

.indus-custom-box h3{
color:#f37021;
font-size:22px;
margin-bottom:12px;
transition:0.3s;
font-weight: 600;
}

/* TEXT */

.indus-custom-box p{
font-size:16px;
line-height:1.7;
color:#000;
text-align:justify;
}

/* HOVER */

.indus-custom-box:hover{
border-color:#212384;
transform:translateY(-8px);
}

.indus-custom-box:hover .indus-custom-icon{
background:#212384;
transform:scale(1.15) rotate(8deg);
}

.indus-custom-box:hover h3{
color:#212384;
}

/* RESPONSIVE */

@media(max-width:768px){

.indus-custom-wrapper{
grid-template-columns:1fr;
}

.indus-custom-heading{
font-size:28px;
}

}
</style>

<!-- Customization  ends -->


<!-- Pricing, Service starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-support-section">

<h2 class="indus-process-heading">
Pricing, Service & <span>Support</span>
</h2>

<div class="indus-support-container">

<!-- CARD 1 -->
<div class="indus-support-card">

<div class="indus-support-icon">
<i class="fas fa-tags"></i>
</div>

<h3>Transparent Pricing</h3>

<p>
Customers often inquire about oil cooled stabilizer price and voltage stabilizer cost. 
We provide clear quotations for oil cooled stabilizer price in India, ensuring 
transparent pricing and excellent value for industrial projects.
</p>

<div class="indus-support-bar"></div>

</div>


<!-- CARD 2 -->
<div class="indus-support-card">

<div class="indus-support-icon">
<i class="fas fa-tools"></i>
</div>

<h3>Installation & Maintenance</h3>

<p>
Our stabilizers are designed for Indian operating conditions and come with 
complete lifecycle support including installation, service, maintenance, 
and AMC programs for long-term reliability.
</p>

<div class="indus-support-bar"></div>

</div>


<!-- CARD 3 -->
<div class="indus-support-card">

<div class="indus-support-icon">
<i class="fas fa-headset"></i>
</div>

<h3>Technical Support</h3>

<p>
We provide expert assistance including repair, servicing, spare parts, 
and troubleshooting backed by warranty and responsive technical support.
</p>

<div class="indus-support-bar"></div>

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

.indus-support-section{
padding:90px 20px;
background:#ffffff;
}

/* HEADING */

.indus-support-heading{
text-align:center;
font-size:36px;
font-weight:700;
color:#212384;
margin-bottom:70px;
}

.indus-support-heading span{
color:#f37021;
}

/* GRID */

.indus-support-container{
max-width:1200px;
margin:auto;
display:grid;
grid-template-columns:repeat(3,1fr);
gap:35px;
}

/* CARD */

.indus-support-card{
background:#fff;
border:2px solid #f37021;
border-radius:12px;
padding:35px 30px;
text-align:center;
position:relative;
transition:0.4s;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

/* ICON */

.indus-support-icon{
width:70px;
height:70px;
background:#f37021;
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
font-size:28px;
color:#fff;
margin:0 auto 15px auto;
transition:0.6s;
}

/* ROTATE AFTER HOVER */

.indus-support-card:hover .indus-support-icon{
background:#212384;
transform:rotate(360deg) scale(1.1);
}

/* TITLE */

.indus-support-card h3{
color:#f37021;
font-size:22px;
margin-bottom:12px;
transition:0.3s;
font-weight: 600;
}

/* TEXT */

.indus-support-card p{
font-size:16px;
line-height:1.7;
color:#000;
text-align:justify;
}

/* BOTTOM BAR */

.indus-support-bar{
position:absolute;
bottom:0;
left:0;
width:0%;
height:5px;
background:#212384;
transition:0.4s;
}

/* HOVER CARD */

.indus-support-card:hover{
transform:translateY(-10px);
border-color:#212384;
}

.indus-support-card:hover h3{
color:#212384;
}

.indus-support-card:hover .indus-support-bar{
width:100%;
}

/* RESPONSIVE */

@media(max-width:900px){

.indus-support-container{
grid-template-columns:1fr;
}

.indus-support-heading{
font-size:28px;
}

}
</style>

<!-- Pricing, Service ends -->

<!-- Safety, Quality  starts -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-safety-section">

<h2 class="indus-process-heading">
Safety, Quality & <span>Long-Term Benefits</span>
</h2>

<div class="indus-safety-container">

<!-- ITEM 1 -->

<div class="indus-safety-row">

<div class="indus-safety-icon">
<i class="fas fa-shield-alt"></i>
</div>

<div class="indus-safety-text">
<h3>Power Quality & Equipment Protection</h3>

<p>
Beyond voltage regulation, our stabilizers improve power quality and 
electrical safety across industrial environments. Businesses depend 
on these systems to protect critical equipment and ensure longer 
machine life while minimizing downtime and operational risks.
</p>
</div>

</div>


<!-- ITEM 2 -->

<div class="indus-safety-row">

<div class="indus-safety-icon">
<i class="fas fa-award"></i>
</div>

<div class="indus-safety-text">
<h3>Made in India – Global Quality</h3>

<p>
Indus Power Industries proudly offers Made in India oil cooled 
stabilizer solutions designed for reliability and performance. 
Our voltage stabilizers are engineered to meet global standards 
while delivering dependable protection for modern power systems.
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

.indus-safety-section{
padding:90px 20px;
background:#ffffff;
}

/* HEADING */

.indus-safety-heading{
text-align:center;
font-size:36px;
font-weight:700;
color:#212384;
margin-bottom:60px;
}

.indus-safety-heading span{
color:#f37021;
}

/* CONTAINER */

.indus-safety-container{
max-width:1000px;
margin:auto;
display:flex;
flex-direction:column;
gap:30px;
}

/* ROW */

.indus-safety-row{
display:flex;
gap:25px;
align-items:flex-start;
padding:25px 30px;
border-left:6px solid #f37021;
background:#ffffff;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
transition:0.4s;
}

/* ICON */

.indus-safety-icon{
font-size:32px;
color:#f37021;
min-width:40px;
transition:0.4s;
}

/* TEXT */

.indus-safety-text h3{
font-size:22px;
color:#f37021;
margin-bottom:8px;
transition:0.3s;
font-weight: 600;
}

.indus-safety-text p{
font-size:16px;
line-height:1.7;
color:#000;
text-align:justify;
}

/* HOVER */

.indus-safety-row:hover{
border-left-color:#212384;
transform:translateX(8px);
}

.indus-safety-row:hover .indus-safety-icon{
color:#212384;
transform:scale(1.2);
}

.indus-safety-row:hover h3{
color:#212384;
}

/* RESPONSIVE */

@media(max-width:768px){

.indus-safety-row{
flex-direction:column;
}

.indus-safety-heading{
font-size:28px;
}

}
</style>


<!-- Safety, Quality ends -->


<!-- Why Choose start  -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<section class="indus-feature-section">

  <h2 class="indus-process-heading">
    Why Choose Indus Power <span>Industries Pvt Ltd?</span>
  </h2>

  <div class="indus-feature-wrapper">

    <!-- CARD 1 -->
    <div class="indus-feature-card">
      <div class="feature-top">
        <i class="fas fa-cogs"></i>
        <h3>Engineering Expertise</h3>
      </div>

      <p>
        Decades of engineering experience allow us to design stabilizers that
        perform reliably in demanding industrial environments.
      </p>

      <div class="mini-cards">
        <div class="mini-card"><i class="fas fa-check"></i> Industrial Design</div>
        <div class="mini-card"><i class="fas fa-check"></i> High Performance</div>
        <div class="mini-card"><i class="fas fa-check"></i> Durable Components</div>
      </div>
    </div>

    <!-- CARD 2 -->
    <div class="indus-feature-card">
      <div class="feature-top">
        <i class="fas fa-bolt"></i>
        <h3>Power Stability</h3>
      </div>

      <p>
        Advanced engineering and robust manufacturing deliver reliable voltage stabilizers.
      </p>

      <div class="mini-cards">
        <div class="mini-card"><i class="fas fa-check"></i> Voltage Control</div>
        <div class="mini-card"><i class="fas fa-check"></i> Energy Efficient</div>
        <div class="mini-card"><i class="fas fa-check"></i> Long Lifespan</div>
      </div>
    </div>

    <!-- CARD 3 -->
    <div class="indus-feature-card">
      <div class="feature-top">
        <i class="fas fa-headset"></i>
        <h3>Reliable Support</h3>
      </div>

      <p>
        Our responsive service network ensures installation assistance and long-term support.
      </p>

      <div class="mini-cards">
        <div class="mini-card"><i class="fas fa-check"></i> Installation Help</div>
        <div class="mini-card"><i class="fas fa-check"></i> Technical Guidance</div>
        <div class="mini-card"><i class="fas fa-check"></i> AMC Service</div>
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

.indus-feature-section{
  padding:40px 20px;
  background:#fff;
}

.indus-process-heading{
  text-align:center;
  font-size:36px;
  font-weight:700;
  color:#212384;
  margin-bottom:60px;
}

.indus-process-heading span{
  color:#f37021;
}

/* CARD LAYOUT */
.indus-feature-wrapper{
  max-width:1100px;
  margin:auto;
  display:flex;
  gap:20px;
  align-items:flex-start;
}

/* MAIN CARD */
.indus-feature-card{
  flex:1;
  background:#fff;
  padding:30px;
  border-radius:10px;
  box-shadow:0 10px 25px rgba(0,0,0,0.08);
  transition:0.4s;
  height:200px;
  overflow:hidden;
  border:2px solid #f37021; /* Initial orange border */
}

/* HEADER */
.feature-top{
  display:flex;
  align-items:center;
  gap:10px;
  margin-bottom:10px;
}

.feature-top i{
  font-size:26px;
  color:#f37021;
  transition:0.3s;
}

.feature-top h3{
  font-size:20px;
  color:#f37021;
  transition:0.3s;
  font-weight: 600;
}

.indus-feature-card p{
  font-size:15px;
  line-height:1.6;
  color:#000;
}

/* MINI CARDS */
.mini-cards{
  margin-top:15px;
  opacity:0;
  transition:0.4s;
  display:grid;
  gap:10px;
}

.mini-card{
  border:1px solid #f37021; /* Initial orange border */
  padding:8px 10px;
  border-radius:6px;
  display:flex;
  gap:6px;
  align-items:center;
  font-size:14px;
  color:#f37021;
  transition:0.3s;
  cursor:pointer;
}

/* MINI CARD HOVER */
.mini-card:hover{
  border-color:#212384; /* Blue on hover */
  color:#212384;
  background:#f5f7ff;
}

.mini-card:hover i{
  color:#212384;
}

/* HOVER EXPAND CARD */
.indus-feature-card:hover{
  height:330px;
  border-color:#212384; /* Card border turns blue on hover */
}

.indus-feature-card:hover .mini-cards{
  opacity:1;
}

.indus-feature-card:hover .feature-top i,
.indus-feature-card:hover .feature-top h3{
  color:#212384;
}
</style>
<!-- Why Choose ends  -->




<!--  Get the Right -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  
<section class="indus-cta2-section">

  <h2 class="indus-cta2-heading">
    Get the Right Oil-Cooled <span> Voltage Stabilizer</span>
  </h2>

  <p>
    Whether you need a heavy-duty stabilizer for an industrial plant or a
    customized solution for a critical facility, our team is ready to help
    you choose the right voltage protection system. Contact Indus Power
    Industries Pvt Ltd today to discuss your requirements and secure
    reliable voltage regulation for your operations.
  </p>

  <ul class="indus-cta2-list">
    <li><i class="fas fa-check-circle"></i> Industrial & Commercial Solutions</li>
    <li><i class="fas fa-check-circle"></i> Custom Stabilizer Design</li>
    <li><i class="fas fa-check-circle"></i> Reliable Voltage Protection</li>
  </ul>

  <a href="#" class="indus-cta2-btn">Discuss Your Requirement</a>

</section>

<style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}

.indus-cta2-section{
  padding: 60px 20px;
  max-width: 900px;
  margin: 0 auto;
  text-align: center;
}

/* HEADING */
.indus-cta2-heading {
  font-size: 34px;
  font-weight: 700;
  color: #212384;
  margin-bottom: 20px;
  position: relative;
}

.indus-cta2-heading span {
  color: #f37021;
  position: relative;
}

/* UNDERLINE ANIMATION */
.indus-cta2-heading span::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -6px;
  width: 0%;
  height: 4px;
  background: #f37021;
  border-radius: 5px;
  animation: underlineMove 2s infinite alternate;
}

@keyframes underlineMove {
  from { width: 0%; }
  to { width: 100%; }
}

/* PARAGRAPH */
.indus-cta2-section p {
  font-size: 17px;
  line-height: 1.7;
  color: #000000;
  margin: 30px auto 40px auto;
  max-width: 876px;
  text-align: justify;
}

/* LIST MINI-BOXES */
.indus-cta2-list {
  list-style: none;
  display: flex;
  flex-direction: column;
  gap: 15px;
  max-width: 400px;
  margin: 0 auto 35px auto;
}

.indus-cta2-list li {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 12px 18px;
  border: 2px solid #f37021; /* orange border */
  border-radius: 12px;
  font-size: 16px;
  color: #212384;
  cursor: pointer;
  transition: all 0.3s ease;
}

/* LIST HOVER */
.indus-cta2-list li:hover {
  border-color: #212384; /* turns blue/dark on hover */
  background: #ffffff;
  transform: translateY(-3px);
}

.indus-cta2-list li:hover i {
  color: #212384;
}

/* ICON */
.indus-cta2-list i {
  color: #f37021;
  font-size: 18px;
  transition: 0.3s ease;
}

/* BUTTON */
.indus-cta2-btn {
  display: inline-block;
  padding: 14px 28px;
  background: #f37021;
  color: #fff;
  text-decoration: none;
  border-radius: 8px;
  font-weight: 600;
  transition: all 0.3s ease;
}

.indus-cta2-btn:hover {
  background: #212384;
  transform: translateY(-2px);
}
</style>

<!-- Get the Right  -->







<?php include ('footer.php'); ?>

</body>
</html>