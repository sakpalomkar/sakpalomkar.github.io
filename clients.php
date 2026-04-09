<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Our Clients</title>
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<?php include('navbar.php'); ?>






<!-- HERO SECTION  Start-->
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
        <h1>Our Clients</h1>
        <div class="indus-breadcrumb-nav">
            <a href="#">Home</a> 
            &nbsp;»&nbsp; 
 
            <span>Our Clients</span>
        </div>
    </div>
</section>
<!-- HERO SECTION End -->









<!-- CLIENT IMAGES SECTION  STARTS--> 

<style>
        /* --- WRAPPER --- */
        .gallery-wrapper {
            display: flex;
            justify-content: center;
            padding: 100px 20px;
            background: #ffffff;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        /* --- GRID --- */
        .image-grid-section {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            max-width: 1200px;
            width: 100%;
        }

        /* --- CARD CONTAINER --- */
        .image-card {
            perspective: 1000px; 
        }

        /* --- INNER (Optimized Speed: 0.8s) --- */
        .image-card .card-inner {
            position: relative;
            width: 100%;
            height: 180px;
            transform-style: preserve-3d;
            /* 0.8s is the gold standard for 'snappy but smooth' */
            transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }

        /* --- FLIP TRIGGER --- */
        .image-card:hover .card-inner {
            transform: rotateY(180deg);
        }

        /* --- FRONT + BACK SHARED --- */
        .image-card .card-front,
        .image-card .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            background: #ffffff;
            border: 1px solid #212384;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
            backface-visibility: hidden;
            border-radius: 15px; /* Sharp corners */
            overflow: hidden;
            
            /* DEEP PRE-HOVER SHADOW */
            box-shadow: 0 12px 24px rgba(0,0,0,0.2), 0 4px 8px rgba(0,0,0,0.07);
            
            transition: box-shadow 0.4s ease, border-color 0.4s ease;
            box-sizing: border-box;
        }

        /* --- BACK POSITION --- */
        .image-card .card-back {
            transform: rotateY(180deg);
        }

        /* --- HOVER STATE --- */
        .image-card:hover .card-front,
        .image-card:hover .card-back {
            box-shadow: 0 25px 50px rgba(0,0,0,0.18);
            border-color: #f37021 ;
        }

        /* --- IMAGE STYLES --- */
        .image-card img {
            max-width: 135%;
            max-height: 135%;
            object-fit: contain;
            image-rendering: -webkit-optimize-contrast;
            transition: transform 0.6s ease;
        }

        .image-card:hover img {
            transform: scale(1.08);
        }

        /* --- SHINE SWEEP --- */
        .image-card .card-front::after,
        .image-card .card-back::after {
            content: "";
            position: absolute;
            top: 0;
            left: -150%;
            width: 65%;
            height: 100%;
            background: linear-gradient(
                120deg,
                transparent,
                rgba(255, 255, 255, 0.9),
                transparent
            );
            transform: skewX(-20deg);
            pointer-events: none;
            z-index: 2;
        }

        /* --- SHINE TRIGGER (Synced to 0.8s) --- */
        .image-card:hover .card-front::after,
        .image-card:hover .card-back::after {
            left: 150%;
            transition: left 0.8s ease-in-out;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 1024px) {
            .image-grid-section { grid-template-columns: repeat(3, 1fr); }
        }
        @media (max-width: 768px) {
            .image-grid-section { grid-template-columns: repeat(2, 1fr); gap: 25px; }
        }
        @media (max-width: 480px) {
            .image-card .card-inner { height: 150px; }
            .image-grid-section { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

<div class="gallery-wrapper">
<section class="image-grid-section">
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-1.png"></div><div class="card-back"><img src="img/client-1.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-2.png"></div><div class="card-back"><img src="img/client-2.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-3.png"></div><div class="card-back"><img src="img/client-3.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-4.png"></div><div class="card-back"><img src="img/client-4.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-5.png"></div><div class="card-back"><img src="img/client-5.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-6.png"></div><div class="card-back"><img src="img/client-6.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-7.png"></div><div class="card-back"><img src="img/client-7.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-8.png"></div><div class="card-back"><img src="img/client-8.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-9.png"></div><div class="card-back"><img src="img/client-9.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-10.png"></div><div class="card-back"><img src="img/client-10.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-11.png"></div><div class="card-back"><img src="img/client-11.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-12.png"></div><div class="card-back"><img src="img/client-12.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-13.png"></div><div class="card-back"><img src="img/client-13.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-14.png"></div><div class="card-back"><img src="img/client-14.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-15.png"></div><div class="card-back"><img src="img/client-15.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-16.png"></div><div class="card-back"><img src="img/client-16.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-17.png"></div><div class="card-back"><img src="img/client-17.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-18.png"></div><div class="card-back"><img src="img/client-18.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-19.png"></div><div class="card-back"><img src="img/client-19.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-20.png"></div><div class="card-back"><img src="img/client-20.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-21.png"></div><div class="card-back"><img src="img/client-21.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-22.png"></div><div class="card-back"><img src="img/client-22.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-23.png"></div><div class="card-back"><img src="img/client-23.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-24.png"></div><div class="card-back"><img src="img/client-24.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-25.png"></div><div class="card-back"><img src="img/client-25.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-26.png"></div><div class="card-back"><img src="img/client-26.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-27.png"></div><div class="card-back"><img src="img/client-27.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-28.png"></div><div class="card-back"><img src="img/client-28.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-29.png"></div><div class="card-back"><img src="img/client-29.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-30.png"></div><div class="card-back"><img src="img/client-30.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-31.png"></div><div class="card-back"><img src="img/client-31.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-32.png"></div><div class="card-back"><img src="img/client-32.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-33.png"></div><div class="card-back"><img src="img/client-33.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-34.png"></div><div class="card-back"><img src="img/client-34.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-35.png"></div><div class="card-back"><img src="img/client-35.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-36.png"></div><div class="card-back"><img src="img/client-36.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-37.png"></div><div class="card-back"><img src="img/client-37.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-38.png"></div><div class="card-back"><img src="img/client-38.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-39.png"></div><div class="card-back"><img src="img/client-39.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-40.png"></div><div class="card-back"><img src="img/client-40.png"></div></div></div>
    <div class="image-card"><div class="card-inner"><div class="card-front"><img src="img/client-41.png"></div><div class="card-back"><img src="img/client-41.png"></div></div></div>
</section>
</div>
<!-- CLIENT IMAGES   SECTION ENDS -->



<?php include ('footer.php');?>
    
</body>
</html>