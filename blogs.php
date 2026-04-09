<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Our Blogs</title>
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
    font-size: 55px;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 15px;
    animation: slideDown 1s ease forwards;
 }

 .indus-breadcrumb-nav {
    font-size: 18px;
    font-weight: 400;
    animation: fadeUp 1.2s ease forwards;
    margin-left: -60px;
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

    .indus-hero-banner{
        height: 240px;
        padding: 0 15px;
    }

    .indus-hero-content{
        width: 100%;
        text-align: center;
    }

    .indus-hero-content h1{
        font-size: 32px;
        margin-bottom: 10px;
    }

    .indus-breadcrumb-nav{
        font-size: 14px;
        margin-left: 0;        /* FIXED alignment */
        text-align: center;    /* Proper centering */
    }

 }
</style>

<section class="indus-hero-banner">
    <div class="indus-hero-content">
        <h1>Our Blogs</h1>
        <div class="indus-breadcrumb-nav">
            <a href="#">Home</a> 
            &nbsp;»&nbsp; 
 
            <span>Our Blogs</span>
        </div>
    </div>
</section>
<!-- Slider End -->







<style>
 :root{
    --blue:#1b2a6d;
    --orange:#f37021;
 }

 

/* SECTION */
.blog{
    padding:70px 20px;
    text-align:center;
}

.blog h2{
    font-size:48px;
    font-weight:800;
    margin-bottom:70px;
    font-family: 'Montserrat';
}

.blog h2 span:first-child{ color:var(--blue); }
.blog h2 span:last-child{ color:var(--orange); }

/* CONTAINER - Back to Grid */
.blog-wrap{
    max-width:1300px;
    margin:auto;
    display:grid;
    /* This creates a 3-column grid on desktop */
    grid-template-columns: repeat(3, 1fr); 
    gap:40px;
}

/* CARD */
.blog-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    border: solid 2px transparent; 
    transition: transform 0.6s ease, box-shadow 0.6s ease, border-color 0.1s ease;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.06);
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%; /* Ensures uniform width */
}

/* CENTER THE 7TH CARD WITHOUT STRETCHING */
.blog-card:nth-child(7) {
    grid-column: 1 / -1; /* Spans full row */
    justify-self: center; /* Centers within that row */
    width: calc(33.33% - 27px); /* Matches exact width of other cards in the 3-col grid */
}

.blog-card:hover {
    transform: translateY(-15px);
    box-shadow: 0 25px 60px rgba(27, 42, 109, 0.15);
    border-color: #f37021;
}

/* IMAGE */
.blog-img{
    position:relative;
    overflow:hidden;
}

.blog-img img{
    width:100%;
    height:220px;
    object-fit:cover;
    transition:0.6s ease;
}

.blog-card:hover .blog-img img{
    transform:scale(1.1);
}

/* DATE BADGE */
.date{
    position:absolute;
    bottom:15px;
    right:15px;
    background:var(--orange);
    color:#fff;
    padding:8px 18px;
    border-radius:30px;
    font-size:14px;
    font-weight:600;
    box-shadow:0 8px 20px rgba(243,112,33,0.4);
    transition:0.4s;
}

.blog-card:hover .date{
    transform:scale(1.1);
}

/* CONTENT */
.blog-content{
    padding:30px 25px 35px;
    text-align:left;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.blog-content h3{
    font-size:20px;
    color:var(--blue);
    margin-bottom:15px;
    transition:0.3s;
    font-family: 'Montserrat';
    font-weight: bold;
}

.blog-card:hover h3{
    color:var(--orange);
}

.blog-content p{
    text-align:justify;
    font-size:15px;
    line-height:1.8;
    color:#555;
    margin-bottom:25px;
    flex-grow: 1;
}

/* BUTTON */
.read-btn{
    align-self: flex-start;
    display:inline-block;
    padding:12px 26px;
    background:var(--blue);
    color:#fff;
    border-radius:30px;
    font-size:14px;
    font-weight:600;
    text-decoration:none;
    transition:0.4s;
    position:relative;
    overflow:hidden;
}

.read-btn::before{
    content:"";
    position:absolute;
    top:0;
    left:-100%;
    width:100%;
    height:100%;
    background:linear-gradient(120deg,transparent,rgba(255,255,255,0.3),transparent);
    transition:0.6s;
}

.read-btn:hover::before{
    left:100%;
}

.read-btn:hover{
    background:var(--orange);
}

/* Responsive */
@media(max-width:768px){
    .blog {
        padding: 40px 15px; /* Reduce padding for smaller screens */
    }

    .blog h2 { 
        font-size: 32px; /* Smaller heading for mobile */
        margin-bottom: 40px; 
    }

    .blog-wrap { 
        grid-template-columns: 1fr; /* Force single column */
        gap: 30px; 
    }

    /* Reset the 7th card to behave like a normal full-width card */
    .blog-card:nth-child(7) { 
        width: 100%; 
        grid-column: auto; 
        justify-self: stretch;
    }

    .blog-content {
        padding: 20px; /* Tighter padding for content */
    }

    .blog-content h3 {
        font-size: 20px;
    }
}
</style>

<section class="blog">
    <div class="blog-wrap">

        <div class="blog-card">
            <div class="blog-img">
                <img src="img/blog_1.png" alt="">
                <div class="date">13-08-2023</div>
            </div>
            <div class="blog-content">
                <h3>Lithium vs Lead Acid Batteries</h3>
                <p>
                   In today’s world of power backup solutions, choosing the right battery is more than a technical decision-it's a long-term investment.
                </p>
                <a href="#" class="read-btn">READ MORE →</a>
            </div>
        </div>

        <div class="blog-card">
            <div class="blog-img">
                <img src="img/blog_2.png" alt="">
                <div class="date">13-08-2023</div>
            </div>
            <div class="blog-content">
                <h3>The Silent Guardian of Industrial Machines – Servo Voltage Stabilizers</h3>
                <p>
                    In today’s industrial landscape, uninterrupted and stable voltage is not just a convenience - it’s a necessity.
                </p>
                <a href="#" class="read-btn">READ MORE →</a>
            </div>
        </div>

        <div class="blog-card">
            <div class="blog-img">
                <img src="img/blog_3.png" alt="">
                <div class="date">13-08-2023</div>
            </div>
            <div class="blog-content">
                <h3>Flat Plate vs. Tubular Lead-Acid Batteries: Which is Better?</h3>
                <p>
                   Lead-acid batteries are a common type of battery used in various applications, including backup power systems, solar power storage, and automotive vehicles.
                </p>
                <a href="#" class="read-btn">READ MORE →</a>
            </div>
        </div>

        <div class="blog-card">
            <div class="blog-img">
                <img src="img/blog_4.png" alt="">
                <div class="date">22-05-2023</div>
            </div>
            <div class="blog-content">
                <h3>How to Maintain Lead-Acid Batteries for Optimal Performance</h3>
                <p>
                   Lead-acid batteries are commonly used in various applications, including backup power systems, automotive vehicles, and off-grid energy storage systems.
                </p>
                <a href="#" class="read-btn">READ MORE →</a>
            </div>
        </div>

        <div class="blog-card">
            <div class="blog-img">
                <img src="img/blog_5.png" alt="">
                <div class="date">22-05-2023</div>
            </div>
            <div class="blog-content">
                <h3>The Critical Need for Online UPS in Industrial Applications</h3>
                <p>
                  In today's world, industries are becoming increasingly dependent on technology & digital infrastructure. However, power disruptions, such as power surges.
                </p>
                <a href="#" class="read-btn">READ MORE →</a>
            </div>
        </div>

        <div class="blog-card">
            <div class="blog-img">
                <img src="img/blog_6.png" alt="">
                <div class="date">22-05-2023</div>
            </div>
            <div class="blog-content">
                <h3>The Critical Need for UPS in Elevators for Residential and Industrial Buildings</h3>
                <p>
                  Elevators are an essential mode of transportation in both residential and industrial buildings, and they must operate reliably to ensure the safety of passengers and goods.
                </p>
                <a href="#" class="read-btn">READ MORE →</a>
            </div>
        </div>

        <div class="blog-card">
            <div class="blog-img">
                <img src="img/blog_7.png" alt="">
                <div class="date">22-05-2023</div>
            </div>
            <div class="blog-content">
                <h3>The Critical Need for UPS Systems in the Medical and Pharma Industry</h3>
                <p>
                  The medical and pharmaceutical industries are responsible for producing and storing critical and sensitive information and products. This is where the importance of Uninterruptible Power Supply (UPS) systems comes into play.
                </p>
                <a href="#" class="read-btn">READ MORE →</a>
            </div>
        </div>

    </div>
</section>


<?php include ('footer.php');?>
    
</body>
</html>