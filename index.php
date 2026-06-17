<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indusups</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">


</head>
<body>

    <?php include('navbar.php'); ?>

    <!-- ===== SINGLE HERO VIDEO START ===== -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<style>
body{
  margin:0;
  font-family:'Montserrat',sans-serif;
}

/* HERO SECTION */
.hero{
  position:relative;
  width:100%;
  height:90vh;
  overflow:hidden;
}

/* VIDEO */
.hero video{
  position:absolute;
  width:100%;
  height:100%;
  object-fit:cover;
}

/* DARK OVERLAY */
.hero::after{
  content:'';
  position:absolute;
  width:100%;
  height:100%;
  background:rgba(0,0,0,0.6);
  top:0;
  left:0;
}

/* CONTENT */
.hero-content{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  text-align:center;
  color:#fff;
  width:90%;
  z-index:2;
}

/* HEADING */
.hero-content h1{
  font-size:30px;
  font-weight:800;
  margin-bottom:20px;
  line-height:1.2;
  animation:fadeUp 1s ease;
}

/* TEXT */
.hero-content p{
  font-size:18px;
  margin-bottom:30px;
  color:#ddd;
  animation:fadeUp 1.5s ease;
}

/* BUTTON */
.btn{
  display:inline-block;
  padding:14px 30px;
  background:#f4b400;
  color:#000;
  text-decoration:none;
  font-weight:600;
  border-radius:30px;
  transition:0.3s;
}

.btn:hover{
  background:#fff;
}

/* ANIMATION */
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

/* RESPONSIVE */
@media(max-width:768px){
  .hero-content h1{
    font-size:30px;
  }
}
</style>

<div class="hero">
  <video src="img/mp4.mp4" autoplay muted loop playsinline></video>

  <div class="hero-content">
    <h1>Powering The Future With Advanced UPS Manufacturing</h1>
    <p>High Efficiency • Reliable Backup • Industrial-Grade Performance</p>
    <a href="#" class="btn">Explore Products</a>
  </div>
</div>

<!-- ===== SINGLE HERO VIDEO END ===== -->








<!-- About Section Start -->
<style>

/*====================
About Custom Design
======================*/

.about-left{
  position: relative;
}

.about-img video{
  width:100%;
  height:400px;
  object-fit:cover;
  border-radius:12px;
  margin-left: -30px;
}

/* Orange Experience Badge */
.about-experience{
  position:absolute;
      top: -70px;
    right: -30px;
  background:#f56d1f;
  color:#fff;
  padding:25px 20px;
      width: 130px;
    height: 23vh;
  border-radius:18px;
  text-align:center;
  box-shadow:0 15px 30px rgba(0,0,0,0.15);
}

.about-experience-icon{
  width:44px;
  height:44px;
  background:#fff;
  color:#f56d1f;
  border-radius:50%;
  display:flex;
  align-items:center;
  justify-content:center;
      margin: -7px auto 4px;
  font-size:26px;
}

.about-experience b{
  font-size:14px;
  line-height:15px;
  display:block;
}

/* Right Content */
.about-right{
  padding-left:35px;
}

.site-title{
  font-weight:700;
  font-size:38px;
  color:#2a3791;
  line-height:1.2;
}

.site-title span{
  color:#f56d1f;
}

/* Paragraph */
.about-text{
  margin:20px 0;
  color:#000000;
  line-height:1.5;
}

/* List Styling */
.about-list{
  padding:0;
}

.about-list li{
  list-style:none;
  position:relative;
  padding-left:30px;
  margin-bottom:12px;
  font-size:15px;
  color:#000000;
}

.about-list li::before{
  content:"\f058";
  font-family:"Font Awesome 6 Free";
  font-weight:900;
  position:absolute;
  left:0;
  top:2px;
  color:#f56d1f;
  font-size:16px;
}

/* Button */
.theme-btn{
  background:white;
  border-radius:8px;
  padding:14px 24px;
  font-size:14px;
  text-decoration: none;
  border: solid 2px #2a3791;
}

.theme-btn:hover{
  background:#2a3791;
  color: white;
}
.row.align-items-center{
  margin-top: 30px;
  margin-bottom: 40px;
}

/* Responsive */
@media(max-width:991px){
  .about-right{
    padding-left:0;
    margin-top:30px;
  }

  .about-experience{
    right:10px;
  }
}

</style>

<div class="container">
  <div class="row align-items-center">
    
    <!-- Left Side -->
    <div class="col-lg-6">
      <div class="about-left">
        <div class="about-img">
          <video controls autoplay muted>
            <source src="img/mp4.mp4" type="video/mp4">
          </video>
        </div>

        <div class="about-experience">
          <div class="about-experience-icon">
            <i class="fas fa-plug"></i>
          </div>
          <b>30 Years Of <br> Rich Industry <br> Experience</b>
        </div>
      </div>
    </div>

    <!-- Right Side -->
    <div class="col-lg-6">
      <div class="about-right">
        <div class="site-heading mb-3">
          <h2 class="site-title">
            We Are Commited To Provide <span>Quality Service</span>
          </h2>
        </div>

        <p class="about-text">
          INDUS Power Industries is a well-known Brand in Mumbai region for its quality products and excellent services. Our strength lies in our core values and ultimate customer satisfaction.
        </p>

        <ul class="about-list">
          <li>ISO 9001-2015 Certified Organization.</li>
          <li>Over 20,000 Sq.Ft. Manufacturing Facility</li>
          <li>Well Equipped R&D Lab Facility.</li>
          <li>Wide Range of Quality Products.</li>
          <li>Positive Financial Growth</li>
          <li>PAN India Presence</li>
          <li>UPS Production Capacity upto 15000 Nos P.A.</li>
          <li>Battery Production Capacity Upto 10000 Nos P.A.</li>
          <li>Customized Products</li>
        </ul>

        <a href="about-company.html" class="theme-btn mt-3">
          Discover More <i class="fas fa-arrow-right-long"></i>
        </a>
      </div>
    </div>

  </div>
</div>
<!-- About Section End -->










<!-- countdown start -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
:root {
    --brand-orange: #ff6a00;
    --brand-orange-light: #fff0e6;
    --text-main: #1a1a1a;
    --text-muted: #666666;
    --bg-white: #ffffff;
}

.luxury-stats {
    padding: 30px 20px;
    background: var(--bg-white);
    font-family: 'Inter', sans-serif;
}

.luxury-container {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 25px;
}

/* Minimalist Card Design */
.luxury-card {
    position: relative;
    padding: 50px 30px;
    background: #fdfdfd;
    border: 1px solid #eee;
    border-radius: 20px;
    text-align: center;
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
    overflow: hidden;
    opacity: 0;
    transform: translateY(30px);
}

.luxury-card.show {
    opacity: 1;
    transform: translateY(0);
}

/* Accent Border */
.luxury-card::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: var(--brand-orange);
    transition: height 0.3s ease;
    z-index: 1;
}

.luxury-card:hover {
    transform: translateY(-12px);
    box-shadow: 0 30px 60px rgba(255, 106, 0, 0.12);
    border-color: var(--brand-orange-light);
}

.luxury-card:hover::after {
    height: 8px;
}

/* Icon Circle */
.icon-box {
    width: 70px;
    height: 70px;
    margin: 0 auto 20px;
    background: #ffffff; /* pure white */
    border: 1px solid var(--brand-orange-light); /* soft border */
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    color: var(--brand-orange); /* brand color icon */
    transition: transform 0.5s ease, box-shadow 0.3s ease;
}

.luxury-card:hover .icon-box {
    transform: scale(1.08);
    box-shadow: 0 10px 25px rgba(255, 106, 0, 0.15);
}

.icon-box i {
    transition: 0.3s ease;
}

/* Counter & Label */
.luxury-counter {
    font-size: 48px;
    font-weight: 800;
    color: var(--text-main);
    margin-bottom: 5px;
    display: block;
}

.luxury-text {
    font-size: 13px;
    font-weight: 600;
    color: var(--text-muted);
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

/* Subtle Background Circle */
.luxury-card::before {
    content: '';
    position: absolute;
    top: -20px;
    right: -20px;
    width: 80px;
    height: 80px;
    background: var(--brand-orange);
    opacity: 0.03;
    border-radius: 50%;
}
</style>

<section class="luxury-stats">
    <div class="luxury-container">

        <div class="luxury-card">
            <div class="icon-box">
                <i class="fas fa-warehouse"></i>

            </div>
            <span class="luxury-counter" data-target="50000">0</span>
            <span class="luxury-text">Products Delivered</span>
        </div>

        <div class="luxury-card">
            <div class="icon-box">
                <i class="fas fa-smile"></i>
            </div>
            <span class="luxury-counter" data-target="50000">0</span>
            <span class="luxury-text">Happy Customers</span>
        </div>

        <div class="luxury-card">
            <div class="icon-box">
                <i class="fas fa-users"></i>
            </div>
            <span class="luxury-counter" data-target="150">0</span>
            <span class="luxury-text">Team Experts</span>
        </div>

        <div class="luxury-card">
            <div class="icon-box">
                <i class="fas fa-handshake"></i>
            </div>
            <span class="luxury-counter" data-target="150">0</span>
            <span class="luxury-text">Global Partners</span>
        </div>

    </div>
</section>

<script>
const cardObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.classList.add('show');
                const counter = entry.target.querySelector('.luxury-counter');
                if (counter && !counter.classList.contains('active')) {
                    startLuxuryCount(counter);
                    counter.classList.add('active');
                }
            }, index * 100);
        }
    });
}, { threshold: 0.1 });

document.querySelectorAll('.luxury-card').forEach(card => cardObserver.observe(card));

function startLuxuryCount(el) {
    const target = parseInt(el.getAttribute('data-target'));
    const duration = 2000; 
    let startTime = null;

    function animation(currentTime) {
        if (startTime === null) startTime = currentTime;
        const timeElapsed = currentTime - startTime;
        const run = easeOutExpo(timeElapsed, 0, target, duration);
        
        el.innerText = Math.floor(run).toLocaleString() + (target > 500 ? '+' : '');

        if (timeElapsed < duration) requestAnimationFrame(animation);
        else el.innerText = target.toLocaleString() + (target > 500 ? '+' : '');
    }

    function easeOutExpo(t, b, c, d) {
        return t === d ? b + c : c * (-Math.pow(2, -10 * t / d) + 1) + b;
    }

    requestAnimationFrame(animation);
}
</script>

<!-- countdown End -->



















<!-- Services Start -->
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
:root{
    --blue:#1b2a6d;
    --orange:#f37021;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}



/* SECTION */
.services{
    padding:30px 20px;
    text-align:center;
}

/* TITLE */
.services h2{
    font-size:40px;
    font-weight:800;
    margin-bottom:30px;
    font-family: 'Montserrat';
}

.services h2 span:first-child{ color:var(--blue); }
.services h2 span:last-child{ color:var(--orange); }

/* CONTAINER */
.wrap{
    max-width:1200px;
    margin:auto;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:40px;
    margin-top: 60px;
}

/* CARD */
.card{
    position:relative;
    background:white;
    padding:40px 30px 25px;
    border-radius:18px;
    transition:0.5s ease;
    box-shadow:0 8px 25px rgba(0,0,0,0.06);
    overflow:hidden;
}

/* Left Vertical Accent Bar */
.card::before{
    content:"";
    position:absolute;
    left:0;
    top:0;
    height:100%;
    width:6px;
    background:linear-gradient(to bottom,var(--blue),var(--orange));
    transition:0.5s;
}

.card:hover{
    transform:translateY(-12px);
    box-shadow:0 18px 45px rgba(27,42,109,0.15);
}

.card:hover::before{
    width:100%;
    opacity:0.05;
}

/* ICON */
.icon{
    width:75px;
    height:75px;
    margin-left: 65px;
    border-radius:50%;
    background:linear-gradient(135deg,var(--blue),var(--orange));
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:32px;
    color:white;
    margin-bottom:25px;
    transition:0.5s;
}

.card:hover .icon{
    transform:rotateY(180deg);
}

/* TITLE */
.card h3{
    font-size:18px;
    margin-bottom:15px;
    color:var(--blue);
}

/* TEXT */
.card p{
    font-size:15px;
    line-height:1.8;
    color:#000000;
    text-align:center;
}


/* Subtle bottom accent */
.card::after{
    content:"";
    position:absolute;
    bottom:0;
    left:20%;
    width:60%;
    height:3px;
    background:linear-gradient(to right,var(--blue),var(--orange));
    border-radius:3px;
}

@media(max-width:768px){
    .services h2{
        font-size:40px;
    }
}
</style>

<section class="services">
    <h2 class="section-title">
            Our <span>Services</span>
        </h2>

    <div class="wrap">

        <div class="card">
            <div class="icon"><i class="fa-solid fa-gears"></i></div>
            <h3>AMC & FMS</h3>
            <p>
                Managed Energy Services with 100% satisfaction in onsite supports. Designed for short, medium & long term requirements.
            </p>
        </div>

        <div class="card">
            <div class="icon"><i class="fa-solid fa-calculator"></i></div>
            <h3>Load Calculation</h3>
            <p>
                Commercial load calculations and protection solutions delivered with strong field expertise.
            </p>
        </div>

        <div class="card">
            <div class="icon"><i class="fa-solid fa-solar-panel"></i></div>
            <h3>Solar Energy Solutions</h3>
            <p>
                Engineering, design & project development
                for complete solar energy solutions.
            </p>
        </div>

        <div class="card">
            <div class="icon"><i class="fa-solid fa-lightbulb"></i></div>
            <h3>Customized Solutions</h3>
            <p>
                Advanced engineered products tailored
                to meet the highest performance standards.
            </p>
        </div>

    </div>
</section>
 <!-- Services End -->

















<!-- WHY CHOOSE US - PREMIUM GLASS ANIMATION DESIGN -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
:root{
  --blue:#1b2a6d;
  --orange:#f37021;
  --light:#f9fafc;
}

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Montserrat';
}

/* SECTION */
.pro-section{
  padding:90px 20px;
  text-align:center;
}

/* TITLE */
.pro-section h2{
  font-size:44px;
  font-weight:800;
  margin-bottom:70px;
  color:var(--blue);
  position:relative;
}

.pro-section h2 span{
  color:var(--orange);
}



/* GRID */
.pro-grid{
  max-width:1200px;
  margin:auto;
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:35px;
}

/* CARD */
.pro-card{
  background:#fff;
  padding:40px 30px;
  border-radius:18px;
  border:1px solid #ececec;
  position:relative;
  overflow:hidden;
  transition:all 0.4s ease;
}

/* GRADIENT BORDER EFFECT */
.pro-card::before{
  content:"";
  position:absolute;
  inset:0;
  border-radius:18px;
  padding:1px;
  background:linear-gradient(135deg,transparent,var(--blue),var(--orange));
  -webkit-mask:
    linear-gradient(#fff 0 0) content-box,
    linear-gradient(#fff 0 0);
  -webkit-mask-composite:xor;
  mask-composite:exclude;
  opacity:0;
  transition:0.4s;
}

/* ICON */
.pro-icon{
  width:65px;
  height:65px;
  margin:0 auto 20px;
  border-radius:50%;
  background:#fff;
  display:flex;
  align-items:center;
  justify-content:center;
  color:var(--blue);
  font-size:22px;
  border:1px solid #eee;
  transition:0.4s;
}

/* TITLE */
.pro-card h3{
  font-size:19px;
  margin-bottom:12px;
  color:var(--blue);
}

/* TEXT */
.pro-card p{
  font-size:14px;
  color:#666;
  line-height:1.7;
}

/* HOVER EFFECT */
.pro-card:hover{
  transform:translateY(-12px);
  box-shadow:0 20px 50px rgba(0,0,0,0.12);
}

.pro-card:hover::before{
  opacity:1;
}

.pro-card:hover .pro-icon{
  background:linear-gradient(135deg,var(--blue),var(--orange));
  color:#fff;
  transform:scale(1.1);
}

/* FADE IN */
@keyframes fadeUp{
  from{
    opacity:0;
    transform:translateY(30px);
  }
  to{
    opacity:1;
    transform:translateY(0);
  }
}

.pro-card{
  animation:fadeUp 0.6s ease forwards;
}

/* RESPONSIVE */
@media(max-width:992px){
  .pro-grid{
    grid-template-columns:repeat(2,1fr);
  }
}

@media(max-width:600px){
  .pro-grid{
    grid-template-columns:1fr;
  }
}
</style>

<section class="pro-section">
  <h2 class="section-title">
            Why <span>Choose Us</span>
        </h2>

  <div class="pro-grid">

    <div class="pro-card">
      <div class="pro-icon"><i class="fas fa-bolt"></i></div>
      <h3>Reliable Power</h3>
      <p>Consistent and uninterrupted power solutions for industrial applications.</p>
    </div>

    <div class="pro-card">
      <div class="pro-icon"><i class="fas fa-tools"></i></div>
      <h3>Expert Maintenance</h3>
      <p>Skilled team ensuring long-term performance and quick service support.</p>
    </div>

    <div class="pro-card">
      <div class="pro-icon"><i class="fas fa-shield-alt"></i></div>
      <h3>Quality Assurance</h3>
      <p>Strict quality standards for safe, durable, and reliable systems.</p>
    </div>

    <div class="pro-card">
      <div class="pro-icon"><i class="fas fa-users"></i></div>
      <h3>Customer Focus</h3>
      <p>Customized solutions tailored to your business needs.</p>
    </div>

    <div class="pro-card">
      <div class="pro-icon"><i class="fas fa-cogs"></i></div>
      <h3>Advanced Technology</h3>
      <p>Modern systems designed for efficiency and long-term performance.</p>
    </div>

    <div class="pro-card">
      <div class="pro-icon"><i class="fas fa-headset"></i></div>
      <h3>24/7 Support</h3>
      <p>Round-the-clock assistance ensuring smooth operations.</p>
    </div>

  </div>
</section>
<!-- WHY CHOOSE US SECTION END -->




















<!-- ===== PROFESSIONAL CORPORATE DESIGN ===== -->

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Montserrat',sans-serif;
}

body{
  background:#fff;
}

/* SECTION */
.section-pro{
  padding:50px 8%;
  display:flex;
  gap:60px;
  align-items:center;
  flex-wrap:wrap;
}

/* LEFT */
.left-pro{
  flex:1;
  max-width:520px;
}

.tag-pro{
  font-size:20px;
  color:#f37021;
  font-weight:600;
  margin-bottom:12px;
}

.title-pro{
  font-size:27px;
  font-weight:700;
  color:#1e2a78;
  line-height:1.3;
  margin-bottom:20px;
}

.desc-pro{
  color:#000000;
  text-align: justify;
  font-size:15px;
  line-height:1.8;
  margin-bottom:30px;
}

/* BUTTON */
.btn-pro{
  display:inline-block;
  padding:12px 28px;
  background:#1e2a78;
  color:#fff;
  border-radius:6px;
  text-decoration:none;
  font-size:14px;
  font-weight:500;
  transition:0.3s;
}

.btn-pro:hover{
  background:#f37021;
}

/* RIGHT GRID */
.grid-pro{
  flex:1;
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:18px;
}

/* CARD */
.card-pro{
  background:#fff;
  border-radius:10px;
  padding:22px;
  border:1px solid #e6e8ef;
  display:flex;
  align-items:center;
  gap:15px;
  transition:0.3s;
}

/* ICON BOX */
.icon-box{
  width:45px;
  height:45px;
  background:#f4f6fb;
  border-radius:8px;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:18px;
  color:#1e2a78;
  transition:0.3s;
}

/* TEXT */
.card-pro h4{
  font-size:14px;
  color:#1e2a78;
  font-weight:600;
}

/* HOVER */
.card-pro:hover{
  border-color:#1e2a78;
  box-shadow:0 8px 20px rgba(0,0,0,0.06);
}

.card-pro:hover .icon-box{
  background:#1e2a78;
  color:#fff;
}

/* HIGHLIGHT */
.highlight-pro{
  border-color:#1e2a78;
  background:#f9faff;
}

/* ANIMATION (subtle) */
.card-pro{
  opacity:0;
  transform:translateY(20px);
  animation:fadeUpPro 0.6s forwards;
}

.card-pro:nth-child(1){animation-delay:.05s}
.card-pro:nth-child(2){animation-delay:.1s}
.card-pro:nth-child(3){animation-delay:.15s}
.card-pro:nth-child(4){animation-delay:.2s}
.card-pro:nth-child(5){animation-delay:.25s}
.card-pro:nth-child(6){animation-delay:.3s}
.card-pro:nth-child(7){animation-delay:.35s}
.card-pro:nth-child(8){animation-delay:.4s}
.card-pro:nth-child(9){animation-delay:.45s}

@keyframes fadeUpPro{
  to{
    opacity:1;
    transform:translateY(0);
  }
}

/* RESPONSIVE */
@media(max-width:992px){
  .grid-pro{
    grid-template-columns:repeat(2,1fr);
  }
}

@media(max-width:600px){
  .section-pro{
    flex-direction:column;
  }
  .grid-pro{
    grid-template-columns:1fr;
  }
}
</style>

<section class="section-pro">

  <div class="left-pro">
    <div class="tag-pro">Our Applications</div>
    <div class="title-pro">Powering Industrial and Commercial Organizations</div>
    <div class="desc-pro">
      Our UPS solutions ensure reliable, uninterrupted power for industries, offices, hospitals, and critical facilities. Designed for efficiency, they protect against outages, voltage fluctuations, and power disturbances.
    </div>
    <a href="#" class="btn-pro">Our Products</a>
  </div>

  <div class="grid-pro">

    <div class="card-pro">
      <div class="icon-box"><i class="fa fa-film"></i></div>
      <h4>Movie Theatres</h4>
    </div>

    <div class="card-pro">
      <div class="icon-box"><i class="fa fa-hospital"></i></div>
      <h4>Healthcare</h4>
    </div>

    <div class="card-pro">
      <div class="icon-box"><i class="fa fa-industry"></i></div>
      <h4>Laser Cutting</h4>
    </div>

    <div class="card-pro">
      <div class="icon-box"><i class="fa fa-print"></i></div>
      <h4>Printing Process</h4>
    </div>

    <div class="card-pro">
      <div class="icon-box"><i class="fa fa-credit-card"></i></div>
      <h4>BFSI & ATMs</h4>
    </div>

    <div class="card-pro">
      <div class="icon-box"><i class="fa fa-landmark"></i></div>
      <h4>Government</h4>
    </div>

    <div class="card-pro">
      <div class="icon-box"><i class="fa fa-university"></i></div>
      <h4>Institutions</h4>
    </div>

    <div class="card-pro">
      <div class="icon-box"><i class="fa fa-home"></i></div>
      <h4>Home Offices</h4>
    </div>

    <div class="card-pro">
      <div class="icon-box"><i class="fa fa-shirt"></i></div>
      <h4>Embroidery</h4>
    </div>

  </div>

</section>
<!-- Powering Industrial End -->



















<!-- client section start -->
  <style>
    /* SECTION */
.clients-section{
    padding: 40px 0;
    overflow: hidden;
    position: relative;
}

/* TITLE */
.section-title{
    text-align: center;
    font-size: 40px;
    font-weight: 700;
    margin-bottom: 70px;
    color: #1e2a78;
    letter-spacing: 1px;
}

.section-title span{
    color: #f37021;
    position: relative;
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

/* CLIENT SLIDER */
.clients-wrapper{
    width: 100%;
    overflow: hidden;
    position: relative;
}

.clients-track{
    display: flex;
    margin-top: 20px;
    gap: 40px;
    animation: scroll 8s linear infinite;
}

@keyframes scroll{
    from{ transform: translateX(0); }
    to{ transform: translateX(-50%); }
}

/* CARD BASE STYLES */
.client-card{
    min-width: 220px;
    height: 140px;
    background: white;
    backdrop-filter: blur(12px);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(255,255,255,0.4);
}

.client-card img{
    max-width: 140px;
}

/* ========== CHOOSE ONE HOVER EFFECT BELOW ========== */
/* Just keep the one you like and delete/comment the others */

/* 1. Glowing Border Effect */
.client-card:hover{
    transform: translateY(-5px);
    border: 2px solid #f37021;
}

.client-card:hover img{
    filter: grayscale(0%);
    transform: scale(1.1);
}

/* 2. Flip Card Effect */
.client-card{
    transition: transform 0.6s;
    transform-style: preserve-3d;
}

.client-card:hover{
    transform: rotateY(180deg) scale(1.05);
}

.client-card:hover img{
    filter: grayscale(0%);
    transform: rotateY(180deg);
}

/* 3. Lift and Color Overlay */
.client-card{
    position: relative;
    overflow: hidden;
}

.client-card::before{
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    transition: left 0.5s;
}

.client-card:hover{
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

.client-card:hover::before{
    left: 100%;
}

.client-card:hover img{
    filter: grayscale(0%);
}

/* 4. Border Animation Effect */
.client-card{
    position: relative;
    overflow: hidden;
}

.client-card::after{
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 3px;
    background: #f37021;
    transition: width 0.3s ease;
}

.client-card:hover{
    transform: scale(1.02);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}

.client-card:hover::after{
    width: 100%;
}

.client-card:hover img{
    filter: grayscale(0%);
    transform: scale(1.05);
}

/* 5. Pulse and Glow Effect */
@keyframes pulse{
    0%{
        box-shadow: 0 0 0 0 rgba(243,112,33,0.4);
    }
    70%{
        box-shadow: 0 0 0 15px rgba(243,112,33,0);
    }
    100%{
        box-shadow: 0 0 0 0 rgba(243,112,33,0);
    }
}

.client-card:hover{
    transform: scale(1.05);
    animation: pulse 1.5s infinite;
    background: white;
}

.client-card:hover img{
    filter: grayscale(0%);
}

/* 6. 3D Tilt Effect */
.client-card{
    transition: all 0.3s ease;
}

.client-card:hover{
    transform: perspective(500px) rotateX(5deg) rotateY(5deg) translateY(-10px);
    box-shadow: -10px 15px 30px rgba(243,112,33,0.2);
}

.client-card:hover img{
    filter: grayscale(0%);
    transform: translateZ(20px);
}

/* 7. Double Border Effect */
.client-card{
    position: relative;
}

.client-card::before,
.client-card::after{
    content: '';
    position: absolute;
    width: 0;
    height: 0;
    opacity: 0;
    transition: all 0.4s ease;
}

.client-card::before{
    top: 0;
    left: 0;
    border-top: 2px solid #f37021;
    border-left: 2px solid #f37021;
}

.client-card::after{
    bottom: 0;
    right: 0;
    border-bottom: 2px solid #f37021;
    border-right: 2px solid #f37021;
}

.client-card:hover::before,
.client-card:hover::after{
    width: 30px;
    height: 30px;
    opacity: 1;
}

.client-card:hover{
    transform: translateY(-5px);
    background: white;
}

.client-card:hover img{
    filter: grayscale(0%);
}

/* 8. Color Shimmer Effect */
.client-card{
    background: linear-gradient(105deg, rgba(255,255,255,0.6) 0%, rgba(255,255,255,0.6) 50%, rgba(243,112,33,0.1) 50%, rgba(255,255,255,0.6) 100%);
    background-size: 250% 100%;
    background-position: 100% 0;
    transition: all 0.5s ease;
}

.client-card:hover{
    background-position: 0 0;
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 20px 40px rgba(243,112,33,0.15);
}

.client-card:hover img{
    filter: grayscale(0%);
}

/* 9. Minimal Scale & Border */
.client-card:hover{
    transform: scale(1.03);
    border: 2px solid #f37021;
    background: white;
    box-shadow: 0 15px 30px rgba(0,0,0,0.08);
}

.client-card:hover img{
    filter: grayscale(0%);
}

/* 10. Slide Up with Shadow */
.client-card{
    transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

.client-card:hover{
    transform: translateY(-15px);
    box-shadow: 0 30px 40px -15px rgba(243,112,33,0.4);
    background: white;
}

.client-card:hover img{
    filter: grayscale(0%);
    transform: scale(1.05);
}

/* Responsive */
@media(max-width:768px){
    .section-title{
        font-size: 32px;
    }
    .client-card{
        min-width: 160px;
        height: 110px;
    }
}
</style>

<section class="clients-section">
    <div class="container">
        <h2 class="section-title">
            Our <span>Clients</span>
        </h2>

        <div class="clients-wrapper">
            <div class="clients-track">
                <div class="client-card"><img src="img/client1.png" alt="SBI"></div>
                <div class="client-card"><img src="img/client2.png" alt="UltraTech"></div>
                <div class="client-card"><img src="img/client3.png" alt="Rotary"></div>
                <div class="client-card"><img src="img/client4.png" alt="Cummins"></div>
                <div class="client-card"><img src="img/client5.png" alt="Apollo"></div>
                <div class="client-card"><img src="img/client6.png" alt="Apollo"></div>
                <div class="client-card"><img src="img/client7.png" alt="Apollo"></div>

                <!-- Duplicate for smooth infinite scroll -->
                <div class="client-card"><img src="img/client1.png" alt="SBI"></div>
                <div class="client-card"><img src="img/client2.png" alt="UltraTech"></div>
                <div class="client-card"><img src="img/client3.png" alt="Rotary"></div>
                <div class="client-card"><img src="img/client4.png" alt="Cummins"></div>
                <div class="client-card"><img src="img/client5.png" alt="Apollo"></div>
                <div class="client-card"><img src="img/client6.png" alt="Apollo"></div>
                <div class="client-card"><img src="img/client7.png" alt="Apollo"></div>
            </div>
        </div>
    </div>
</section>
   <!-- client section end -->

























    <?php include('footer.php'); ?>

</body>
</html>