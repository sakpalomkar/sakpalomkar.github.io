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
    
    body {
        font-family: 'Montserrat';
        overflow-x: hidden;
        color: #212121;
        background: #fafafa;
    }

    :root {
        --primary: #D21A26;
        --primary-dark: #B00D1A;
        --secondary: #ff6600;
        --dark-blue: #00134d;
        --dark: #212121;
        --light: #ffffff;
        --gray-light: #f5f5f5;
        --gray: #757F95;
        --gradient-primary: linear-gradient(135deg, var(--secondary) 0%, var(--primary) 100%);
        --gradient-dark: linear-gradient(135deg, #00134d 0%, #002B8F 100%);
        --shadow-sm: 0 10px 30px rgba(0,0,0,0.05);
        --shadow-md: 0 15px 40px rgba(0,0,0,0.1);
        --shadow-lg: 0 20px 50px rgba(0,0,0,0.15);
        --border-radius: 16px;
        --border-radius-sm: 12px;
    }

    /* Promo Strip */
    .promo-strip {
        background: linear-gradient(135deg, #ff6600 55%, #00134d 45%);
        color: #fff;
        padding: 12px 0;
        position: relative;
        z-index: 100;
        font-weight: 500;
        letter-spacing: 0.3px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .promo-strip a {
        color: #fff;
        transition: all 0.3s ease;
    }

    .promo-strip a:hover {
        color: #ffff66;
        transform: translateY(-1px);
    }

    .top-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .contact-details ul {
        display: flex;
        align-items: center;
        gap: 25px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .contact-details li {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .contact-details i {
        color: #ff6600;
        font-size: 18px;
    }

    .right-panel {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .right-panel a {
        color: #fff;
        transition: all 0.3s ease;
    }

    .right-panel a:hover {
        color: #ff6600;
        transform: translateY(-2px);
    }

    /* Header/Navbar */
    .header-main {
        background: #fff;
        box-shadow: 0 5px 20px rgba(0,0,0,0.03);
        position: sticky;
        top: 0;
        z-index: 99;
        padding: 10px 0;
    }

    .company-logo img {
        height: 60px;
        width: auto;
        transition: all 0.3s ease;
    }

    .company-logo:hover img {
        transform: scale(1.02);
    }

    .nav-list {
        display: flex;
        gap: 10px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .nav-list .list-item {
        position: relative;
    }

    .nav-list .list-item .item-link {
        padding: 10px 18px;
        color: #212121;
        font-weight: 600;
        font-size: 15px;
        letter-spacing: 0.5px;
        border-radius: 30px;
        transition: all 0.3s ease;
    }

    .nav-list .list-item .item-link:hover {
        color: #ff6600;
        background: rgba(255, 102, 0, 0.05);
    }

    /* Dropdown */
    .advanced-dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        background: #fff;
        width: 220px;
        border-radius: 12px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.12);
        padding: 10px 0;
        opacity: 0;
        visibility: hidden;
        transform: translateY(15px);
        transition: all 0.3s ease;
        z-index: 1000;
        border-top: 3px solid #ff6600;
    }

    .advanced-dropdown:hover .advanced-dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(5px);
    }

    .advanced-dropdown-menu li a {
        padding: 12px 20px;
        color: #212121;
        font-weight: 500;
        font-size: 14px;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .advanced-dropdown-menu li a i {
        color: #ff6600;
        font-size: 14px;
        opacity: 0;
        transform: translateX(-5px);
        transition: all 0.3s ease;
    }

    .advanced-dropdown-menu li a:hover {
        background: rgba(255, 102, 0, 0.05);
        padding-left: 25px;
    }

    .advanced-dropdown-menu li a:hover i {
        opacity: 1;
        transform: translateX(0);
    }

    .down-arrow {
        margin-left: 6px;
        font-size: 12px;
        transition: all 0.3s ease;
    }

    .advanced-dropdown:hover .down-arrow {
        transform: rotate(180deg);
        color: #ff6600;
    }

    /* Title Section / Hero */
    .title-section {
        position: relative;
        padding: 100px 0;
        background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('gallery/all/image2.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        text-align: center;
        isolation: isolate;
    }

    .title-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: var(--gradient-dark);
        opacity: 0.85;
        z-index: -1;
    }

    .title-section .page-heading {
        font-size: 52px;
        color: #fff;
        font-weight: 800;
        margin-bottom: 15px;
        letter-spacing: 2px;
        animation: fadeInUp 0.8s ease;
    }

    .title-section .path-links {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px;
        list-style: none;
        margin: 0;
        padding: 0;
        animation: fadeInUp 0.8s ease 0.2s both;
    }

    .title-section .path-links li {
        color: rgba(255,255,255,0.8);
        font-size: 16px;
        font-weight: 500;
    }

    .title-section .path-links li a {
        color: #fff;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .title-section .path-links li a:hover {
        color: #ff6600;
    }

    .title-section .path-links li:not(:last-child)::after {
        content: "//";
        margin-left: 15px;
        color: #ff6600;
        font-weight: 400;
    }

    .title-section .path-links .current-item {
        color: #ff6600;
        font-weight: 600;
    }

    /* Gallery Section */
    .showcase-block {
        padding: 80px 0;
    }

    /* Filter Buttons */
    .filter-control {
        margin-bottom: 50px;
    }

    .sort-buttons {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 12px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .sort-buttons li {
        padding: 12px 28px;
        background: #fff;
        border: 2px solid transparent;
        border-radius: 40px;
        font-weight: 600;
        font-size: 15px;
        color: #212121;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(0,0,0,0.03);
        letter-spacing: 0.3px;
    }

    .sort-buttons li:hover {
        border-color: #ff6600;
        color: #ff6600;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(255,102,0,0.15);
    }

    .sort-buttons li.sort-active {
        background: var(--gradient-primary);
        color: #fff;
        border-color: transparent;
        box-shadow: 0 10px 25px rgba(210,26,38,0.25);
    }

    /* Section Headers */
    .section-header {
        width: 100%;
        margin: 60px 0 40px;
        position: relative;
        text-align: center;
    }

    .section-header h1 {
        font-size: 32px;
        font-weight: 700;
        color: #00134d;
        display: inline-block;
        padding: 0 30px;
        background: linear-gradient(to right, transparent, #fff, transparent);
        position: relative;
        z-index: 2;
    }

    .section-header::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent, #ff6600, #D21A26, #ff6600, transparent);
        transform: translateY(-50%);
        z-index: 1;
    }

    .section-header:first-of-type {
        margin-top: 0;
    }

    /* Gallery Items */
    .media-card {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(0,0,0,0.05);
        transition: all 0.4s ease;
        margin-bottom: 25px;
        cursor: pointer;
        aspect-ratio: 1/1;
    }

    .media-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 45px rgba(210,26,38,0.15);
    }

    .media-box {
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .media-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.6s ease;
    }

    .media-card:hover img {
        transform: scale(1.1);
    }

    .media-card::after {
        content: '\f00e';
        font-weight: 900;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        color: #fff;
        font-size: 24px;
        background: rgba(210,26,38,0.9);
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        opacity: 0;
        z-index: 3;
    }

    .media-card:hover::after {
        transform: translate(-50%, -50%) scale(1);
        opacity: 1;
    }

    /* Lightbox */
    .lightbox-pop {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.95);
        backdrop-filter: blur(10px);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .lightbox-photo {
        max-width: 600px;
        width: 100%;
        max-height:450px;
        border-radius: 20px;
        box-shadow: 0 30px 60px rgba(0,0,0,0.3);
        animation: zoomIn 0.3s ease;
    }

    .dismiss-btn {
        position: absolute;
        top: 96px;
        right: 343px;
        font-size: 50px;
        color: #ff6a00;
        cursor: pointer;
        transition: all 0.3s ease;
        width: 30px;
        height: 30px;
        background: transparent;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        /* backdrop-filter: blur(5px); */
        border: solid 2px #1b2a6d;
    }

    .dismiss-btn:hover {
        transform: rotate(90deg);
        background: #fff;
    }

    .arrow-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
        color: #fff;
        cursor: pointer;
        width: 30px;
        height: 30px;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        backdrop-filter: blur(5px);
    }

    .arrow-btn:hover {
        background: #ff6600;
        transform: translateY(-50%) scale(1.1);
    }

    .left-arrow { left: 30px; }
    .right-arrow { right: 30px; }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes zoomIn {
        from {
            opacity: 0;
            transform: scale(0.8);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* Mobile Responsive */
    @media (max-width: 991px) {
        .nav-list {
            flex-direction: column;
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-top: 15px;
        }
        
        .title-section .page-heading {
            font-size: 36px;
        }
        
        .section-header h1 {
            font-size: 24px;
            background: #fff;
        }
        
        .sort-buttons li {
            padding: 8px 18px;
            font-size: 13px;
        }
        
        .dismiss-btn {
            top: 15px;
            right: 15px;
            font-size: 30px;
            width: 45px;
            height: 45px;
        }
        
        .arrow-btn {
            width: 40px;
            height: 40px;
            font-size: 20px;
        }
        
        .left-arrow { left: 15px; }
        .right-arrow { right: 15px; }
    }
</style>
</head>
<body>


<?php include('navbar.php'); ?>

<main class="content-area">

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
        <h1>Gallery</h1>
        <div class="premium-breadcrumb-trail">
            <a href="#">Home</a> 
            &nbsp;»&nbsp; 
            <a href="#">Gallery</a> 
            &nbsp;»&nbsp;
            <span>Exhibitions</span>
        </div>
    </div>
</section>
<!-- Slider End -->

    <!-- Gallery Section -->
    <div class="showcase-block space-lg">
        <div class="container">

            <!-- Filter Buttons -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter-control" data-aos="fade-up">
                        <ul class="sort-buttons">
                            <li class="sort-active" data-filter="*">All</li>
                            <li data-filter=".group1">Goregaon</li>
                            <li data-filter=".group2">Vashi</li>
                            <li data-filter=".group3">Pune</li>
                            <li data-filter=".group4">Aurangabad</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Gallery Items -->
            <div class="row sort-wrapper g-4">

                <!-- Goregaon 2025 -->
                <div class="sort-block group1 section-header" data-aos="fade-up">
                    <h1>Automation Expo - 2025 - BEC Goregaon</h1>
                </div>

                <!-- Goregaon 2025 Images -->
                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/1.png" data-full="a1.png" class="img-fluid media-photo" alt="Automation Expo 2025">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="150">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/2.png" class="img-fluid media-photo" alt="Automation Expo 2025">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="200">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/3.png" class="img-fluid media-photo" alt="Automation Expo 2025">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="250">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/4.png" class="img-fluid media-photo" alt="Automation Expo 2025">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="300">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/5.png" class="img-fluid media-photo" alt="Automation Expo 2025">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="350">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/6.png" class="img-fluid media-photo" alt="Automation Expo 2025">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="400">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/7.png" class="img-fluid media-photo" alt="Automation Expo 2025">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="450">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/8.png" class="img-fluid media-photo" alt="Automation Expo 2025">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="500">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/9.png" class="img-fluid media-photo" alt="Automation Expo 2025">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="550">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/10.png" class="img-fluid media-photo" alt="Automation Expo 2025">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="600">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/11.png" class="img-fluid media-photo" alt="Automation Expo 2025">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="650">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/12.png" class="img-fluid media-photo" alt="Automation Expo 2025">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="700">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/13.png" class="img-fluid media-photo" alt="Automation Expo 2025">
                        </div>
                    </div>
                </div>

                <!-- Goregaon 2023 -->
                <div class="sort-block group1 section-header" data-aos="fade-up">
                    <h1>Automation Expo - 2023 - BEC Goregaon</h1>
                </div>

                <!-- Goregaon 2023 Images -->
                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/14.png" class="img-fluid media-photo" alt="Automation Expo 2023">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="150">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/15.png" class="img-fluid media-photo" alt="Automation Expo 2023">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="200">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/16.png" class="img-fluid media-photo" alt="Automation Expo 2023">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="250">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/17.png" class="img-fluid media-photo" alt="Automation Expo 2023">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="300">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/18.png" class="img-fluid media-photo" alt="Automation Expo 2023">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="350">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/19.png" class="img-fluid media-photo" alt="Automation Expo 2023">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="400">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/20.png" class="img-fluid media-photo" alt="Automation Expo 2023">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="450">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/21.png" class="img-fluid media-photo" alt="Automation Expo 2023">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="500">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/22.png" class="img-fluid media-photo" alt="Automation Expo 2023">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group1" data-aos="fade-up" data-aos-delay="550">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/23.png" class="img-fluid media-photo" alt="Automation Expo 2023">
                        </div>
                    </div>
                </div>

                <!-- Vashi Section -->
                <div class="sort-block group2 section-header" data-aos="fade-up">
                    <h1>MahaindX - 2023 - CIDCO Vashi</h1>
                </div>

                <!-- Vashi Images -->
                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group2" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/24.png" class="img-fluid media-photo" alt="MahaindX 2023">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group2" data-aos="fade-up" data-aos-delay="150">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/25.png" class="img-fluid media-photo" alt="MahaindX 2023">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group2" data-aos="fade-up" data-aos-delay="200">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/26.png" class="img-fluid media-photo" alt="MahaindX 2023">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group2" data-aos="fade-up" data-aos-delay="250">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/27.png" class="img-fluid media-photo" alt="MahaindX 2023">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group2" data-aos="fade-up" data-aos-delay="300">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/28.png" class="img-fluid media-photo" alt="MahaindX 2023">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group2" data-aos="fade-up" data-aos-delay="350">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/29.png" class="img-fluid media-photo" alt="MahaindX 2023">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group2" data-aos="fade-up" data-aos-delay="400">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/30.png" class="img-fluid media-photo" alt="MahaindX 2023">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group2" data-aos="fade-up" data-aos-delay="450">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/31.png" class="img-fluid media-photo" alt="MahaindX 2023">
                        </div>
                    </div>
                </div>

                <!-- Pune Section -->
                <div class="sort-block group3 section-header" data-aos="fade-up">
                    <h1>9th PowerON Battery Fair - 2014 - Pune</h1>
                </div>

                <!-- Pune Images -->
                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group3" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/32.png" class="img-fluid media-photo" alt="PowerON Fair 2014">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group3" data-aos="fade-up" data-aos-delay="150">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/33.png" class="img-fluid media-photo" alt="PowerON Fair 2014">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group3" data-aos="fade-up" data-aos-delay="200">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/34.png" class="img-fluid media-photo" alt="PowerON Fair 2014">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group3" data-aos="fade-up" data-aos-delay="250">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/35.png" class="img-fluid media-photo" alt="PowerON Fair 2014">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group3" data-aos="fade-up" data-aos-delay="300">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/36.png" class="img-fluid media-photo" alt="PowerON Fair 2014">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group3" data-aos="fade-up" data-aos-delay="350">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/37.png" class="img-fluid media-photo" alt="PowerON Fair 2014">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group3" data-aos="fade-up" data-aos-delay="400">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/38.png" class="img-fluid media-photo" alt="PowerON Fair 2014">
                        </div>
                    </div>
                </div>

                <!-- Aurangabad Section -->
                <div class="sort-block group4 section-header" data-aos="fade-up">
                    <h1>MAHA Expo - 2014 - Aurangabad</h1>
                </div>

                <!-- Aurangabad Images -->
                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group4" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/39.png" class="img-fluid media-photo" alt="MAHA Expo 2014">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group4" data-aos="fade-up" data-aos-delay="150">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/40.png" class="img-fluid media-photo" alt="MAHA Expo 2014">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group4" data-aos="fade-up" data-aos-delay="200">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/41.png" class="img-fluid media-photo" alt="MAHA Expo 2014">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group4" data-aos="fade-up" data-aos-delay="250">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/42.png" class="img-fluid media-photo" alt="MAHA Expo 2014">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group4" data-aos="fade-up" data-aos-delay="300">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/43.png" class="img-fluid media-photo" alt="MAHA Expo 2014">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group4" data-aos="fade-up" data-aos-delay="350">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/44.png" class="img-fluid media-photo" alt="MAHA Expo 2014">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group4" data-aos="fade-up" data-aos-delay="400">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/45.png" class="img-fluid media-photo" alt="MAHA Expo 2014">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 sort-block group4" data-aos="fade-up" data-aos-delay="450">
                    <div class="media-card">
                        <div class="media-box">
                            <img src="gallery/Exhibitions/46.png" class="img-fluid media-photo" alt="MAHA Expo 2014">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Lightbox Popup -->
    <div class="lightbox-pop" id="lightbox">
        <span class="dismiss-btn" id="closeBtn">&times;</span>
        <span class="arrow-btn left-arrow" id="prevBtn"><i class="fa-solid fa-chevron-left"></i></span>
        <img class="lightbox-photo" id="lightboxImg" alt="">
        <span class="arrow-btn right-arrow" id="nextBtn"><i class="fa-solid fa-chevron-right"></i></span>
    </div>

</main>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    // Initialize AOS
    AOS.init({
        duration: 800,
        once: true,
        offset: 100
    });

    // Initialize Isotope
    var iso = new Isotope('.sort-wrapper', {
        itemSelector: '.sort-block',
        layoutMode: 'fitRows',
        percentPosition: true,
        transitionDuration: '0.6s'
    });

    // Filter buttons
    document.querySelectorAll('.sort-buttons li').forEach(function(btn) {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.sort-buttons li').forEach(function(li) {
                li.classList.remove('sort-active');
            });
            this.classList.add('sort-active');

            var filterValue = this.getAttribute('data-filter');
            iso.arrange({ filter: filterValue });
            
            // Smooth scroll to filtered section
            if(filterValue !== '*') {
                setTimeout(() => {
                    document.querySelector(filterValue)?.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }, 100);
            }
        });
    });

    // Lightbox functionality
    const galleryImages = document.querySelectorAll('.media-photo');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightboxImg');
    let currentIndex = 0;

    galleryImages.forEach((img, index) => {
        img.addEventListener('click', () => {
            currentIndex = index;
            showImage();
            lightbox.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });

    function showImage() {
        lightboxImg.src = galleryImages[currentIndex].src;
    }

    document.getElementById('nextBtn').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % galleryImages.length;
        showImage();
    });

    document.getElementById('prevBtn').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
        showImage();
    });

    document.getElementById('closeBtn').addEventListener('click', () => {
        lightbox.style.display = 'none';
        document.body.style.overflow = 'auto';
    });

    lightbox.addEventListener('click', (e) => {
        if(e.target === lightbox) {
            lightbox.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if(lightbox.style.display === 'flex') {
            if(e.key === 'ArrowRight') {
                currentIndex = (currentIndex + 1) % galleryImages.length;
                showImage();
            } else if(e.key === 'ArrowLeft') {
                currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
                showImage();
            } else if(e.key === 'Escape') {
                lightbox.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }
    });

    // Mobile menu toggle
    document.querySelector('.mobile-btn')?.addEventListener('click', function() {
        const nav = document.querySelector('.nav-list');
        if(nav) {
            nav.style.display = nav.style.display === 'flex' ? 'none' : 'flex';
        }
    });
</script>

<?php include('footer.php'); ?>

</body>
</html>