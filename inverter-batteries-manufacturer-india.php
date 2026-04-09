<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indusups - Inverter Battery Solutions</title>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">   

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat';
        }

        body {
            overflow-x: hidden;
            background-color: #F9FBFE;
        }

        .container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Section Spacing */
        section, .battery-section, .type-section, .residential-box, .commercial-box, .combine-content, .price-section, .question-section, .conclusion-section {
            width: 100%;
            margin: 0px 0;
            padding: 0;
        }

        /* Universal Section Title Styles */
        .section-title-1, .section-title-a, .section-title2, .section-title3, .section-title4, .section-title5, .section-title6, .section-title7, .section-title8, .section-title9 {
            text-align: center;
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 60px;
            color: #1e2a78;
            letter-spacing: 1px;
            line-height: 1.2;
            width: 100%;
        }

        .section-title-1 span, .section-title-a span, .section-title2 span, .section-title3 span, .section-title4 span, .section-title5 span, .section-title6 span, .section-title7 span, .section-title8 span, .section-title9 span {
            color: #f37021;
            position: relative;
            display: inline-block;
        }

        .section-title-1 span::after, .section-title-a span::after, .section-title2 span::after, .section-title3 span::after, .section-title4 span::after, .section-title5 span::after, .section-title6 span::after, .section-title7 span::after, .section-title8 span::after, .section-title9 span::after {
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

        @keyframes underline {
            from { width: 0; }
            to { width: 100%; }
        }

        /* ========== SECTION 1: INTRO BOX ========== */
        .battery-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .main-box {
            width: 100%;
            margin: 40px auto;
            border: 2px solid #ddd;
            padding: 40px;
            background: #fff;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .main-box:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.12);
            transform: translateY(-5px);
        }

        .content-box {
            border: 1px solid #ccc;
            padding: 30px;
            border-radius: 30px;
            margin-top: 30px;
            font-size: 18px;
            line-height: 1.7;
            transition: all 0.3s ease;
        }

        .content-box:hover {
            border: 2px solid #ff6a00;
            box-shadow: 0 10px 30px rgba(0,0,0,0.12);
            transform: translateY(-5px);
        }

        .content-box p {
            margin-bottom: 20px;
            text-align: justify;
            color: #000000;
        }

        .content-box p:last-child {
            margin-bottom: 0;
        }

        /* ========== SECTION 2: FEATURES ========== */
        .linear-feature-section {
            position: relative;
            max-width: 900px;
            margin: 0 auto 60px auto;
            padding: 0 20px;
        }

        .feature-item4 {
            position: relative;
            width: 50%;
            padding: 20px 30px;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .feature-item4.left {
            left: 0;
            text-align: left;
            border-left: 2px solid #1e2a78;
            margin-left: 0;
        }

        .feature-item4.right {
            left: 50%;
            text-align: left;
            border-left: 2px solid #1e2a78;
        }

        .feature-item4 .icon2 {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #1e2a78;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.8rem;
            flex-shrink: 0;
            transition: transform 0.3s ease;
        }

        .feature-item4.left .icon2 {
            order: -1;
        }

        .feature-item4 .content {
            flex: 1;
        }

        .feature-item4 h4 {
            margin: 0 0 10px 0;
            color: #1e2a78;
            font-weight: 700;
            font-size: 22px;
        }

        .feature-item4 .description {
            font-size: 18px;
            color: #000000;
            line-height: 1.5;
        }

        /* ========== SECTION 3: LONG BACKUP FEATURES ========== */
        .indus-features-inline {
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 0 20px;
        }

        .feature-item {
            background: #f9f9f9;
            border-radius: 8px;
            padding: 25px 30px;
            transition: all 0.3s ease;
            display: flex;
            align-items: flex-start;
            gap: 25px;
            border-left: 2px solid #1e2a78;
            box-shadow: 0 4px 8px rgba(18, 63, 118, 0.2);
            width: 100%;
        }

        .feature-item:hover {
            box-shadow: 0 8px 16px rgba(34, 74, 122, 0.3);
        }

        .feature-item .icon {
            font-size: 36px;
            color: #f15a24;
            width: 50px;
            text-align: center;
            flex-shrink: 0;
        }

        .feature-text {
            flex: 1;
        }

        .feature-text h4 {
            font-size: 24px;
            font-weight: 700;
            color: #1e2a78;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .feature-item:hover h4 {
            color: #f37021;
        }

        .feature-text h4 span::after {
            content: '';
            position: absolute;
            width: 0;
            height: 4px;
            background: #f15a24;
            bottom: -8px;
            left: 0;
            border-radius: 5px;
            transition: width 0.3s ease;
        }

        .feature-item:hover h4 span::after {
            width: 100%;
        }

        .feature-item .description {
            font-size: 18px;
            line-height: 1.6;
            color: #000000;
            margin: 0;
        }

        /* ========== SECTION 4: TYPE LIST ========== */
        .type-section {
            max-width: 1200px;
            margin: 80px auto;
            padding: 0 20px;
        }

        .type-list {
            list-style: none;
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .type-list li {
            display: flex;
            align-items: flex-start;
            position: relative;
            padding-left: 70px;
            margin-bottom: 45px;
        }

        .number {
            position: absolute;
            left: 0;
            width: 45px;
            height: 45px;
            background: #f06000;
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 45px;
            font-weight: bold;
            font-size: 18px;
            z-index: 2;
            transition: 0.3s;
        }

        .type-list li:hover .number {
            background: #1e2a78;
            transform: scale(1.05);
        }

        .type-list li::before {
            content: '';
            position: absolute;
            left: 22px;
            top: 45px;
            bottom: -25px;
            width: 2px;
            background: #f06000;
        }

        .type-list li:last-child::before {
            display: none;
        }

        .type-item-content {
            flex: 1;
        }

        .item-title {
            font-weight: 700;
            margin-bottom: 8px;
            font-size: 24px;
            color: #f06000;
            display: inline-block;
            position: relative;
        }

        .item-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -4px;
            width: 0;
            height: 3px;
            background: #1e2a78;
            transition: 0.3s;
        }

        .type-list li:hover .item-title::after {
            width: 100%;
        }

        .type-list li:hover .item-title {
            color: #1e2a78;
        }

        .item-desc {
            padding: 15px 20px;
            background: #f0f4ff;
            border-left: 4px solid #f06000;
            border-radius: 4px;
            font-size: 18px;
            transition: 0.3s;
            line-height: 1.6;
            text-align: justify;
        }

        .item-desc:hover {
            border-left-color: #1e2a78;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transform: translateY(-3px);
        }

        /* ========== SECTION 5: RESIDENTIAL CARDS ========== */
        .residential-box {
            max-width: 1400px;
            margin: 80px auto;
            padding: 0 20px;
        }

        .ipi-grid-top {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-bottom: 30px;
        }

        .ipi-grid-bottom {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            max-width: calc(66.666% + 15px);
            margin: 0 auto;
        }

        .ipi-card {
            perspective: 1000px;
            height: 380px;
            width: 100%;
        }

        .ipi-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .ipi-card:hover .ipi-card-inner {
            transform: rotateY(180deg);
        }

        .ipi-card-front, .ipi-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            background: #fff;
            border-radius: 12px;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            border: 4px solid #1e2a78;
        }

        .ipi-card-back {
            transform: rotateY(180deg);
            border: 4px solid #f06000;
        }

        .ipi-card-icon i {
            font-size: 48px;
            color: #ff6a00;
            margin-bottom: 20px;
        }

        .ipi-card-title {
            font-size: 24px;
            font-weight: 600;
            color: #1e2a78;
            margin-bottom: 15px;

        }

        .ipi-card-back .ipi-card-title {
            color: #f06000;
        }

        .ipi-card-text {
            font-size: 17px;
            color: #000000;
            line-height: 1.6;
            max-width: 280px;
            margin: 0 auto;
        }

        /* ========== SECTION 6: COMMERCIAL TIMELINE ========== */
        .commercial-box {
            max-width: 1200px;
            margin: 80px auto;
            padding: 0 20px;
        }

        .timeline {
            position: relative;
            max-width: 900px;
            margin: 40px auto;
            padding: 20px 0;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 4px;
            background: #1e2a78;
            top: 0;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .timeline-item {
            padding: 15px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
        }

        .timeline-item.left {
            left: 0;
            text-align: right;
        }

        .timeline-item.right {
            left: 50%;
        }

        .timeline-icon {
            position: absolute;
            width: 60px;
            height: 60px;
            background: #fff;
            border: 3px solid #f37021;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: #1e2a78;
            z-index: 2;
            top: 85px;
            transition: all 0.3s ease;
        }

        .timeline-item.left .timeline-icon {
            right: -30px;
        }

        .timeline-item.right .timeline-icon {
            left: -30px;
        }

        .timeline-item:hover .timeline-icon {
            background: #1e2a78;
            border-color: #1e2a78;
        }

        .timeline-item:hover .timeline-icon i {
            color: #f37021;
        }

        .timeline-content {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            border-bottom: 4px solid #f37021;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }

        .timeline-content:hover {
            transform: translateY(-5px);
        }

        .timeline-content h3 {
            margin: 0 0 10px;
            font-size: 24px;
            color: #1e2a78;
            font-weight: 600;
        }

        .timeline-content p {
            font-size: 18px;
            color: #000000;
            line-height: 1.6;
            margin: 0;
        }

        /* ========== SECTION 7: PERFORMANCE CARDS ========== */
        .combine-content {
            max-width: 1200px;
            margin: 80px auto;
            padding: 0 20px;
        }

        .card-row {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .card4 {
            background: #1a2e78;
            color: white;
            width: 350px;
            min-height: 120px;
            border-radius: 10px;
            text-align: center;
            padding: 25px 15px;
            transition: all 0.3s ease;
            cursor: pointer;
            overflow: hidden;
        }

        .card4 .card-icon i {
            color: #ff6600;
            font-size: 40px;
            margin-bottom: 15px;
        }

        .card4 .card-title {
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .card4 .card-description {
            opacity: 0;
            max-height: 0;
            transition: all 0.3s ease;
            font-size: 17px;
            line-height: 1.5;
        }

        .card4:hover {
            min-height: 280px;
            background: white;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            color: #000000;
        }

        .card4:hover .card-description {
            opacity: 1;
            max-height: 200px;
            margin-top: 15px;
        }

        .card4:hover .card-title {
            color: #1a2e78;
        }

        /* ========== SECTION 8: SERVICE SECTION ========== */
        .service-cards-section {
    position: relative;
    background-image: url("img/about us.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed; /* makes background fixed */

    padding: 80px 0;
    width: 100%;
    margin: 80px 0;
    color: #fff;
}

        .service-cards-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
        }

        .service-cards-section .container2 {
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
            position: relative;
            z-index: 2;
        }

        .section-title6 {
            color: #fff;
            text-align: center;
            margin-bottom: 50px;
        }

        .cards-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .cards-row .card {
            background: rgba(255,255,255,0.1);
            padding: 35px 25px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.4);
            transition: all 0.3s ease;
            backdrop-filter: blur(6px);
            text-align: center;
        }

        .cards-row .card:hover {
            box-shadow: 0 15px 35px rgba(0,0,0,0.8);
            border: 2px solid #f37021;
            transform: translateY(-6px);
        }

        .cards-row .card h3 {
            font-size: 26px;
            margin-bottom: 15px;
            color: #fff;
            font-weight: 600;
        }

        .cards-row .hover-line {
            display: block;
            height: 3px;
            background: #f37021;
            width: 0;
            margin: 8px auto 0;
            border-radius: 2px;
            transition: width 0.5s ease;
        }

        .cards-row .card:hover .hover-line {
            width: 100%;
        }

        .cards-row .card:hover h3 {
            color: #f37021;
        }

        .cards-row .card p {
            font-size: 17px;
            line-height: 1.6;
            color: rgba(255,255,255,0.9);
        }

        /* ========== SECTION 9: PRICE ========== */
        .price-section {
            max-width: 1200px;
            margin: 80px auto;
            padding: 0 20px;
        }

        .step-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .step-box {
            width: 320px;
            min-height: 250px;
            background: white;
            padding: 35px 25px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }

        .step-box.blue {
            border: 3px solid #1e2a78;
        }

        .step-box.orange {
            border: 3px solid #ff7a00;
        }

        .step-box:hover {
            box-shadow: 0 15px 30px rgba(0,0,0,0.3);
            transform: translateY(-5px);
        }

        .step-box h3 {
            font-size: 22px;
            margin-bottom: 20px;
            color: #1e2a78;
            font-weight: 600;
        }

        .step-box p {
            font-size: 18px;
            color: #000000;
            line-height: 1.6;
        }

        .middle {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .connector {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: white;
            border: 3px solid #1e2a78;
        }

        .connector-line {
            height: 3px;
            width: 50px;
            background: #1e2a78;
        }

        /* ========== SECTION 10: WHY CHOOSE ========== */
        .question-section {
            max-width: 1200px;
            margin: 80px auto;
            padding: 40px;
            border-radius: 20px;
        }

        .question-section p {
            display: flex;
            flex-wrap: wrap;
            gap: 20px 30px;
            justify-content: center;
            line-height: 1.8;
        }

        .indus-list-item {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 18px;
            color: #000000;
            background: #f8f9fa;
            padding: 10px 20px;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .indus-list-item:hover {
            background: #f37021;
            color: white;
            transform: translateY(-3px);
        }

        .indus-list-item:hover i {
            color: white;
        }

        .indus-list-item i {
            color: #f37021;
            font-size: 20px;
        }

        /* ========== SECTION 11: CONCLUSION (UPDATED STYLE) ========== */
        .conclusion-category-section {
            max-width: 1200px;
            margin: 0 auto 80px auto;
            padding: 0 20px;
        }

        .conclusion-clean-container {
            max-width: 1000px;
            margin: 0 auto;
            background: #fff;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border: 4px solid #1e2a78;
            transition: all 0.35s ease;
        }

        .conclusion-clean-container:hover {
            transform: scale(1.02);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
            border-color: #f37021;
        }

        .indus-section-heading {
            text-align: center;
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 30px;
            color: #1e2a78;
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

        .conclusion-clean-container p {
            font-size: 18px;
            color: #000000;
            line-height: 1.8;
            text-align: center;
            margin: 0;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 15px;
        }

        .conclusion-clean-container:hover p {
            background: white;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        /* ========== RESPONSIVE DESIGN ========== */
        @media (max-width: 1024px) {
            .ipi-grid-top {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .ipi-grid-bottom {
                max-width: 100%;
            }
            
            .cards-row {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .feature-item4 {
                width: 100%;
                left: 0 !important;
                border-left: 2px solid #1e2a78;
                margin: 10px 0;
            }
            
            .feature-item4.right {
                left: 0;
            }
            
            .timeline::after {
                left: 30px;
            }
            
            .timeline-item {
                width: 100%;
                left: 0 !important;
                padding-left: 70px;
                padding-right: 20px;
                text-align: left;
            }
            
            .timeline-item.left .timeline-icon,
            .timeline-item.right .timeline-icon {
                left: 5px;
                right: auto;
            }
            
            .timeline-content {
                text-align: left;
            }
            
            .ipi-grid-top, .ipi-grid-bottom {
                grid-template-columns: 1fr;
            }
            
            .cards-row {
                grid-template-columns: 1fr;
            }
            
            .step-container {
                flex-direction: column;
            }
            
            .middle {
                transform: rotate(90deg);
                margin: 20px 0;
            }
            
            .question-section p {
                flex-direction: column;
                align-items: center;
            }
            
            .indus-list-item {
                width: 100%;
                justify-content: center;
            }

            .conclusion-clean-container {
                padding: 30px;
            }

            .indus-section-heading {
                font-size: 32px;
            }

            .conclusion-clean-container p {
                font-size: 16px;
                padding: 15px;
            }
        }

        @media (max-width: 480px) {
            .main-box, .content-box {
                padding: 20px;
            }
            
            .feature-item {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            
            .feature-item .icon {
                margin-bottom: 15px;
            }
            
            .type-list li {
                padding-left: 55px;
            }
            
            .number {
                width: 40px;
                height: 40px;
                line-height: 40px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <?php include('navbar.php'); ?>

    <!-- HERO SECTION Slider Start-->
    <style>
        .hero-modern {
            position: relative;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
            color: #fff;
        }

        .hero-modern::before {
            content: "";
            position: absolute;
            inset: 0;
            background: url("img/about\ us.jpg") center/cover no-repeat;
            filter: brightness(0.55);
            transform: scale(1.1);
            animation: zoomDynamic 10s ease-in-out infinite alternate;
        }

        .hero-modern::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.24));
        }

        .hero-content-block {
            position: relative;
            z-index: 2;
        }

        .hero-content-block h1 {
            font-size: 42px;
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

        @keyframes zoomDynamic {
            from {
                transform: scale(1.1);
            }
            to {
                transform: scale(1);
            }
        }

        @media(max-width:768px){
            .hero-content-block h1{
                font-size: 36px;
            }
            .breadcrumb-nav{
                font-size: 15px;
            }
        }
    </style>

    <section class="hero-modern">
        <div class="hero-content-block">
            <h1>Inverter Battery</h1>
            <div class="breadcrumb-nav">
                <a href="#">Home</a> 
                &nbsp;»&nbsp; 
                <a href="#">Products</a> 
                &nbsp;»&nbsp;
                <span>Inverter Battery</span>
            </div>
        </div>
    </section>
    <!-- Slider End -->

    <!-- Product Gallery Section Start -->
    <style>
        .product-showcase {
            width: 100%;
            padding: 40px 8%;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .image-container {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        .product-image {
            width: 460px;
            cursor: pointer;
            border-radius: 20px;
            transform: translateY(60px);
            opacity: 0;
            animation: fadeUpImage 1.2s ease forwards;
            transition: 0.4s ease;
        }

        .product-image:hover {
            transform: translateY(0) scale(1.05) rotateX(5deg);
        }

        @keyframes fadeUpImage {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .action-buttons {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .action-btn {
            position: relative;
            padding: 16px 45px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            color: #f37021;
            border-radius: 50px;
            background: #fff;
            overflow: hidden;
            transition: 0.4s ease;
            letter-spacing: 1px;
        }

        .action-btn::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 50px;
            padding: 2px;
            background: linear-gradient(90deg,#f37021,#212384,#f37021);
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            animation: borderFlow 4s linear infinite;
        }

        @keyframes borderFlow {
            0% { background-position: 0%; }
            100% { background-position: 200%; }
        }

        .action-btn:hover {
            background: #f37021;
            color: #fff;
            box-shadow: 0 15px 40px rgba(243,112,33,0.4);
            transform: translateY(-5px);
        }

        .lightbox-modal {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.88);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: 0.4s ease;
            z-index: 9999;
        }

        .lightbox-modal.active {
            opacity: 1;
            visibility: visible;
        }

        .lightbox-modal img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 20px;
            box-shadow: 0 30px 60px rgba(0,0,0,0.5);
            animation: zoomIn 0.4s ease;
        }

        @keyframes zoomIn {
            from { transform: scale(0.8); }
            to { transform: scale(1); }
        }

        .close-btn {
            position: absolute;
            top: 35px;
            right: 45px;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            backdrop-filter: blur(12px);
            background: rgba(255,255,255,0.15);
            border: 1px solid rgba(255,255,255,0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .close-btn span {
            position: absolute;
            width: 22px;
            height: 2px;
            background: #fff;
            transition: 0.4s ease;
        }

        .close-btn span:nth-child(1) {
            transform: rotate(45deg);
        }

        .close-btn span:nth-child(2) {
            transform: rotate(-45deg);
        }

        .close-btn:hover {
            transform: scale(1.15) rotate(180deg);
            background: linear-gradient(135deg,#f37021,#212384);
        }

        @media(max-width:768px){
            .product-image {
                width: 260px;
            }
            .action-btn {
                padding: 14px 30px;
                font-size: 14px;
            }
            .close-btn {
                top: 20px;
                right: 20px;
                width: 45px;
                height: 45px;
            }
        }
    </style>

    <section class="product-showcase">
        <div class="image-container">
            <img src="img/Inverter Battery.png" class="product-image" alt="Inverter Battery">
        </div>

        <div class="action-buttons">
            <a href="#" class="action-btn">DOWNLOAD BROCHURE</a>
            <a href="#" class="action-btn" onclick="openEnquiry()">ENQUIRE NOW</a>
        </div>
    </section>

    <!-- Lightbox -->
    <div class="lightbox-modal" id="imageLightbox">
        <div class="close-btn" id="closeLightbox">
            <span></span>
            <span></span>
        </div>
        <img src="img/Offline UPS.png" alt="Product View">
    </div>

    <script>
        const productImages = document.querySelectorAll(".product-image");
        const lightboxModal = document.getElementById("imageLightbox");
        const lightboxImg = lightboxModal.querySelector("img");
        const closeButton = document.getElementById("closeLightbox");

        productImages.forEach(img => {
            img.addEventListener("click", () => {
                lightboxModal.classList.add("active");
                lightboxImg.src = img.src;
            });
        });

        closeButton.addEventListener("click", (e) => {
            e.stopPropagation();
            lightboxModal.classList.remove("active");
        });

        lightboxModal.addEventListener("click", () => {
            lightboxModal.classList.remove("active");
        });
    </script>
    <!-- Product Gallery Section End -->

    <main class="main">
        <!-- SECTION 1: INTRO -->
        <section class="battery-section">
            <div class="container">
                <div class="battery-container">
                    <div class="main-box">
                        <h2 class="section-title-1">Inverter Battery <span>Solutions</span></h2>
                        <div class="content-box">
                            <p>At Indus Power Industries Pvt. Ltd., we understand the importance of uninterrupted electricity in today's homes, offices, and businesses. A high-quality inverter battery is the backbone of any reliable power backup system, and our solutions are designed to deliver consistent performance during power cuts. Choosing the right battery for inverter ensures long backup time, safety, and efficient power delivery for essential applications.</p>
                            <p>Our advanced power backup battery solutions are engineered to meet the growing demand for reliable electricity across residential and commercial sectors. Every home inverter battery manufactured by Indus Power Industries Pvt. Ltd. is built with durability and performance in mind, making it ideal for daily use.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 2: HOME FEATURES -->
        <section>
            <div class="container">
                <h2 class="section-title-a">Reliable Inverter <span>Battery For Home Backup</span></h2>
                <div class="linear-feature-section">
                    <div class="feature-item4 left">
                        <div class="icon2"><i class="fas fa-lightbulb"></i></div>
                        <div class="content">
                            <h4>Uninterrupted Comfort</h4>
                            <p class="description">Maintains lights, fans, TVs, and internet devices during power failures.</p>
                        </div>
                    </div>
                    <div class="feature-item4 right">
                        <div class="icon2"><i class="fas fa-bolt"></i></div>
                        <div class="content">
                            <h4>Stable Power Output</h4>
                            <p class="description">Ensures consistent voltage and smooth appliance operation.</p>
                        </div>
                    </div>
                    <div class="feature-item4 left">
                        <div class="icon2"><i class="fas fa-home"></i></div>
                        <div class="content">
                            <h4>Emergency Ready</h4>
                            <p class="description">Reliable power during daily routines and emergencies.</p>
                        </div>
                    </div>
                    <div class="feature-item4 right">
                        <div class="icon2"><i class="fas fa-clock"></i></div>
                        <div class="content">
                            <h4>Long Life Battery</h4>
                            <p class="description">Durable and long-lasting performance for extended use.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3: LONG BACKUP FEATURES -->
        <section class="section-2">
            <div class="container">
                <h2 class="section-title2">Long Backup <span>& Power Solutions</span></h2>
                <div class="indus-features-inline">
                    <div class="feature-item">
                        <span class="icon"><i class="fas fa-bolt"></i></span>
                        <div class="feature-text">
                            <h4><span>Long Backup Battery</span></h4>
                            <p class="description">Well suited for areas experiencing prolonged power outages. Ensures continuity during long electricity cuts.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <span class="icon"><i class="fas fa-exchange-alt"></i></span>
                        <div class="feature-text">
                            <h4><span>Frequent Power Cut Solutions</span></h4>
                            <p class="description">Engineered to perform reliably in regions facing repeated outages, maintaining uninterrupted power supply.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <span class="icon"><i class="fas fa-cogs"></i></span>
                        <div class="feature-text">
                            <h4><span>Heavy Duty Batteries</span></h4>
                            <p class="description">Handles higher electrical loads efficiently, suitable for demanding applications.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <span class="icon"><i class="fas fa-clock"></i></span>
                        <div class="feature-text">
                            <h4><span>Long Life Batteries</span></h4>
                            <p class="description">Designed to reduce replacement frequency and offer long-term value.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 4: TYPES -->
        <section class="type-section">
            <div class="container">
                <h2 class="section-title3">Types Of <span>Inverter Batteries Offered</span></h2>
                <ul class="type-list">
                    <li>
                        <div class="number">1</div>
                        <div class="type-item-content">
                            <div class="item-title">Tubular Inverter Battery</div>
                            <div class="item-desc">A tubular inverter battery from our product range delivers superior performance and longer life, making it a popular choice for homes and offices.</div>
                        </div>
                    </li>
                    <li>
                        <div class="number">2</div>
                        <div class="type-item-content">
                            <div class="item-title">Flat Plate Inverter Battery</div>
                            <div class="item-desc">For budget-conscious users, a flat plate inverter battery provides an economical solution for moderate backup requirements.</div>
                        </div>
                    </li>
                    <li>
                        <div class="number">3</div>
                        <div class="type-item-content">
                            <div class="item-title">Tall Tubular Battery</div>
                            <div class="item-desc">A tall tubular battery is ideal for customers who require extended backup and higher efficiency.</div>
                        </div>
                    </li>
                    <li>
                        <div class="number">4</div>
                        <div class="type-item-content">
                            <div class="item-title">Maintenance Free Inverter Battery</div>
                            <div class="item-desc">For users looking for convenience, our maintenance free inverter battery options reduce the need for regular upkeep.</div>
                        </div>
                    </li>
                    <li>
                        <div class="number">5</div>
                        <div class="type-item-content">
                            <div class="item-title">Sealed Inverter Battery</div>
                            <div class="item-desc">We also offer sealed inverter battery solutions that are spill-proof and safe for indoor installations.</div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <!-- SECTION 5: RESIDENTIAL -->
        <section class="residential-box">
            <div class="container">
                <h2 class="section-title4">Residential <span>Applications</span></h2>
                <div class="ipi-grid-top">
                    <!-- Card 1 -->
                    <div class="ipi-card">
                        <div class="ipi-card-inner">
                            <div class="ipi-card-front">
                                <div class="ipi-card-icon"><i class="fas fa-home"></i></div>
                                <div class="ipi-card-title">Inverter Battery For House</div>
                            </div>
                            <div class="ipi-card-back">
                                <div class="ipi-card-title">Inverter Battery For House</div>
                                <p class="ipi-card-text">An inverter battery for house ensures uninterrupted power for essential appliances across all rooms.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="ipi-card">
                        <div class="ipi-card-inner">
                            <div class="ipi-card-front">
                                <div class="ipi-card-icon"><i class="fas fa-building"></i></div>
                                <div class="ipi-card-title">Inverter Battery For Flat</div>
                            </div>
                            <div class="ipi-card-back">
                                <div class="ipi-card-title">Inverter Battery For Flat</div>
                                <p class="ipi-card-text">Urban homes benefit from an inverter battery for flat, which offers compact design and efficient performance.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="ipi-card">
                        <div class="ipi-card-inner">
                            <div class="ipi-card-front">
                                <div class="ipi-card-icon"><i class="fas fa-city"></i></div>
                                <div class="ipi-card-title">Inverter Battery For Apartment</div>
                            </div>
                            <div class="ipi-card-back">
                                <div class="ipi-card-title">Inverter Battery For Apartment</div>
                                <p class="ipi-card-text">An inverter battery for apartment is suitable for modern residential buildings with limited space.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ipi-grid-bottom">
                    <!-- Card 4 -->
                    <div class="ipi-card">
                        <div class="ipi-card-inner">
                            <div class="ipi-card-front">
                                <div class="ipi-card-icon"><i class="fas fa-house-user"></i></div>
                                <div class="ipi-card-title">Inverter Battery For Bungalow</div>
                            </div>
                            <div class="ipi-card-back">
                                <div class="ipi-card-title">Inverter Battery For Bungalow</div>
                                <p class="ipi-card-text">For larger homes, an inverter battery for bungalow supports higher loads and multiple appliances simultaneously.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div class="ipi-card">
                        <div class="ipi-card-inner">
                            <div class="ipi-card-front">
                                <div class="ipi-card-icon"><i class="fas fa-bolt"></i></div>
                                <div class="ipi-card-title">Inverter Battery For Whole House</div>
                            </div>
                            <div class="ipi-card-back">
                                <div class="ipi-card-title">Inverter Battery For Whole House</div>
                                <p class="ipi-card-text">Customers seeking complete protection often choose an inverter battery for whole house, which provides centralized power backup.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 6: COMMERCIAL -->
        <section class="commercial-applications">
            <div class="commercial-box">
                <div class="container">
                    <h2 class="section-title5">Commercial & <span>Office Applications</span></h2>
                    <div class="timeline">
                        <div class="timeline-item left">
                            <div class="timeline-icon"><i class="fas fa-building"></i></div>
                            <div class="timeline-content">
                                <h3>Office</h3>
                                <p>Indus Power Industries supplies an inverter battery for office environments to ensure <b>smooth business operations during power outages</b>.</p>
                            </div>
                        </div>
                        <div class="timeline-item right">
                            <div class="timeline-icon"><i class="fas fa-store"></i></div>
                            <div class="timeline-content">
                                <h3>Shop</h3>
                                <p>Retail establishments rely on an inverter battery for shop to keep <b>billing systems, lighting, and essential equipment</b> running.</p>
                            </div>
                        </div>
                        <div class="timeline-item left">
                            <div class="timeline-icon"><i class="fas fa-desktop"></i></div>
                            <div class="timeline-content">
                                <h3>Computer</h3>
                                <p>A reliable inverter battery for computer <b>protects systems from sudden shutdowns and data loss</b>.</p>
                            </div>
                        </div>
                        <div class="timeline-item right">
                            <div class="timeline-icon"><i class="fas fa-server"></i></div>
                            <div class="timeline-content">
                                <h3>Server</h3>
                                <p>Businesses handling critical data depend on an inverter battery for server to <b>maintain uptime and system integrity</b>.</p>
                            </div>
                        </div>
                        <div class="timeline-item left">
                            <div class="timeline-icon"><i class="fas fa-video"></i></div>
                            <div class="timeline-content">
                                <h3>CCTV</h3>
                                <p>An inverter battery for CCTV ensures <b>continuous surveillance even during extended power cuts</b>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 7: PERFORMANCE -->
        <section class="combine-box">
            <div class="combine-content">
                <div class="container">
                    <h2 class="section-title9">Performance, <span>Reliability, & Efficiency</span></h2>
                    <div class="card-row">
                        <div class="card4">
                            <div class="card-icon"><i class="fas fa-bolt"></i></div>
                            <div class="card-title">High Performance</div>
                            <div class="card-description">Every reliable inverter battery from Indus Power Industries Pvt. Ltd. is designed to deliver consistent output and stable performance.</div>
                        </div>
                        <div class="card4">
                            <div class="card-icon"><i class="fas fa-shield-alt"></i></div>
                            <div class="card-title">Reliability</div>
                            <div class="card-description">Customers seeking efficiency choose a high performance inverter battery that can handle demanding power loads with ease.</div>
                        </div>
                        <div class="card4">
                            <div class="card-icon"><i class="fas fa-cogs"></i></div>
                            <div class="card-title">Efficiency</div>
                            <div class="card-description">Selecting the best inverter battery involves understanding load requirements, backup duration, and usage patterns.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 8: SERVICE -->
        <section class="service-cards-section">
            <div class="container2">
                <h2 class="section-title6">Service, Replacement <span>& Maintenance</span></h2>
                <div class="cards-row">
                    <div class="card">
                        <h3>Service <span class="hover-line"></span></h3>
                        <p>Timely inverter battery replacement is essential for maintaining system efficiency and protecting the inverter. Customers looking for quick support often search for inverter battery service near me, and our service network ensures prompt assistance.</p>
                    </div>
                    <div class="card">
                        <h3>Replacement <span class="hover-line"></span></h3>
                        <p>Regular inverter battery maintenance, such as inspections and performance checks, helps extend battery life. Purchasing from an authorized inverter battery dealer near me ensures genuine products and dependable service.</p>
                    </div>
                    <div class="card">
                        <h3>Maintenance <span class="hover-line"></span></h3>
                        <p>Many customers prefer visiting an inverter battery shop near me to receive personalized recommendations and installation assistance. As a trusted inverter battery supplier, Indus Power Industries Pvt. Ltd. provides expert guidance and after-sales support.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 9: PRICE -->
        <section class="price-section">
            <div class="container">
                <h2 class="section-title7">Inverter Battery <span>Price & Affordability</span></h2>
                <div class="step-container">
                    <div class="step-box blue">
                        <h3>STEP OPTION ONE</h3>
                        <p>The inverter battery price depends on capacity, technology, and application. Understanding the inverter battery cost helps customers plan an effective power backup system.</p>
                    </div>
                    <div class="middle">
                        <div class="connector"></div>
                        <div class="connector-line"></div>
                        <div class="connector"></div>
                    </div>
                    <div class="step-box orange">
                        <h3>STEP OPTION TWO</h3>
                        <p>Many buyers search for inverter battery price near me, and Indus Power Industries Pvt. Ltd. ensures competitive pricing with reliable service support.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 10: WHY CHOOSE -->
        <section class="question-section">
            <div class="container">
                <h2 class="section-title8">Why Choose Indus Power <span>Industries Pvt. Ltd.</span></h2>
                <p>
                    <span class="indus-list-item"><i class="fas fa-check-circle"></i> High-quality inverter battery solutions</span>
                    <span class="indus-list-item"><i class="fas fa-check-circle"></i> Backed by engineering expertise</span>
                    <span class="indus-list-item"><i class="fas fa-check-circle"></i> Stringent quality control</span>
                    <span class="indus-list-item"><i class="fas fa-check-circle"></i> Reliable after-sales support</span>
                    <span class="indus-list-item"><i class="fas fa-check-circle"></i> Designed for homes, offices, and commercial establishments across India</span>
                    <span class="indus-list-item">Our commitment ensures dependable power backup solutions for every need.</span>
                </p>
            </div>
        </section>
    </main>
    <!-- Content Section End -->

    <!-- CONCLUSION SECTION (UPDATED AND CORRECT) -->
    <section class="conclusion-category-section">
        <div class="conclusion-clean-container">
            <h2 class="indus-section-heading"><span>Conclusion</span></h2>
            <p>An inverter battery is a vital investment for uninterrupted power and peace of mind. Whether you need a solution for your home, office, shop, or commercial facility, Indus Power Industries Pvt. Ltd. offers dependable inverter battery solutions designed for performance, safety, and long service life. Choosing the right inverter battery today ensures reliable power when you need it the most.</p>
        </div>
    </section>

    <?php include('footer.php'); ?>

</body>
</html>