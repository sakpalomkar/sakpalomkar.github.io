<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Indusups - Low Frequency Online UPS</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat';
    }
    body {
        overflow-x: hidden;
    }
 /* hero section */
    .hero-banner {
        position: relative;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        overflow: hidden;
        color: #fff;
    }
    .hero-banner::before {
        content: "";
        position: absolute;
        inset: 0;
        background: url("img/about\ us.jpg") center/cover no-repeat;
        filter: brightness(0.55);
        transform: scale(1.1);
        animation: zoomEffect 10s ease-in-out infinite alternate;
    }
    .hero-banner::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.24));
    }
    .hero-content {
        position: relative;
        z-index: 2;
    }
    .hero-content h1 {
        font-size: 37px;
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 15px;
        animation: slideDown 1s ease forwards;
    }
    .breadcrumb-nav {
        font-size: 18px;
        font-weight: 400;
        animation: fadeUp 1.2s ease forwards;
    }
    .breadcrumb-nav a {
        color: #fff;
        text-decoration: none;
        transition: 0.3s;
    }
    .breadcrumb-nav a:hover {
        color: #ff5e00;
    }
    .breadcrumb-nav span {
        color: #ff5e00;
        font-weight: 600;
        margin-left: 5px;
    }
    @keyframes slideDown {
        from { opacity: 0; transform: translateY(-40px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes zoomEffect {
        from { transform: scale(1.1); }
        to { transform: scale(1); }
    }
    @media(max-width:768px){
        .hero-content h1{ font-size: 36px; }
        .breadcrumb-nav{ font-size: 15px; }
    }

</style>
</head>

<body>

<?php include('navbar.php'); ?>



<!-- HERO SECTION -->
<section class="hero-banner">
    <div class="hero-content">
        <h1>Videos</h1>
        <div class="breadcrumb-nav">
            <a href="#">Home</a> &nbsp;»&nbsp; <a href="#">Gallery</a> &nbsp;»&nbsp; <span>Videos</span>
        </div>
    </div>
</section>


<?php include('footer.php'); ?>

</body>
</html>