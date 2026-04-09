<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<title>Indusups - Offline UPS | Reliable Power Backup</title>

<!-- Font Awesome 6 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: 'Montserrat';
        background: #ffffff;
        overflow-x: hidden;
    }
    /* ===== GLOBAL HEADING STYLE ===== */
    .indus-section-heading {
        text-align: center;
        font-size: 36px;
        font-weight: 700;
        margin: 30px 0 50px;
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
    @keyframes underline {
        from { width: 0; }
        to { width: 100%; }
    }
    /* ===== HERO SECTION (vertical alignment) ===== */
    .indus-hero-banner {
        position: relative;
        height: 320px;
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
        background: url("img/about us.jpg") center/cover no-repeat;
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
        margin-bottom: 15px;
        animation: slideDown 1s ease forwards;
    }
    .indus-breadcrumb-nav {
        font-size: 18px;
        animation: fadeUp 1.2s ease forwards;
    }
    .indus-breadcrumb-nav a {
        color: #fff;
        text-decoration: none;
        transition: 0.3s;
    }
    .indus-breadcrumb-nav a:hover { color: #ff5e00; }
    .indus-breadcrumb-nav span { color: #ff5e00; font-weight: 600; margin-left: 5px; }
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
        .indus-hero-content h1 { font-size: 36px; }
        .indus-breadcrumb-nav { font-size: 15px; }
        .indus-section-heading { font-size: 28px; }
    }

    /* ===== PRODUCT SHOWCASE (image + short spec) ===== */
    .indus-product-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 50px;
        padding: 60px 8%;
        flex-wrap: wrap;
        background: #fff;
    }
    .indus-product-left img {
        height: 320px;
        width: auto;
        object-fit: contain;
        border-radius: 12px;
        cursor: pointer;
        transition: 0.3s;
    }
    .indus-product-left img:hover { transform: scale(1.05); }
    .indus-product-right { flex: 1; }
    .indus-product-right h2 {
        font-size: 26px;
        margin-bottom: 15px;
        color: #212384;
        font-weight: 600;
    }
    .indus-spec-table {
        width: 100%;
        border-collapse: collapse;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
    }
    .indus-spec-table td {
        padding: 12px 15px;
        border-bottom: 1px solid #eee;
        font-size: 14px;
    }
    .indus-spec-table td:first-child {
        font-weight: 600;
        width: 45%;
    }
    /* lightbox */
    .indus-lightbox {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        visibility: hidden;
        transition: 0.3s;
        z-index: 9999;
    }
    .indus-lightbox.active { opacity: 1; visibility: visible; }
    .indus-lightbox img { max-width: 90%; max-height: 90%; border-radius: 12px; }
    .indus-close {
        position: absolute;
        top: 30px;
        right: 40px;
        font-size: 30px;
        color: #fff;
        cursor: pointer;
    }
    @media(max-width:768px){
        .indus-product-wrapper { flex-direction: column; }
        .indus-product-left img { height: 220px; }
    }

    
    /* Specifications table */
    .specs-wrapper {
        border-radius: 28px;
        overflow-x: auto;
        padding: 8px;
    }
    .spec-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 15px;
        min-width: 500px;
    }
    .spec-table th {
        background: #1e2a78;
        color: white;
        padding: 16px 18px;
        font-weight: 600;
        text-align: left;
    }
    .spec-table td {
        border: 1px solid #e9edf2;
        padding: 14px 18px;
        color: #1e293b;
        vertical-align: top;
    }
    .spec-table tr:nth-child(even) { background-color: #fafcff; }
    .spec-table tr:hover { background: #fff4eb; }

    /* Description panel inner blocks */
    .desc-container {
        max-width: 1000px;
        margin: auto;
        padding: 20px;
    }
    .desc-block {
        background: #ffffff;
        border-radius: 14px;
        padding: 28px 30px;
        margin-bottom: 25px;
        border-left: 5px solid #1e2a78;
        box-shadow: 0 8px 25px rgba(0,0,0,0.05);
        transition: 0.3s ease;
    }
    .desc-block:hover {
        transform: translateY(-5px);
        border-left-color: #f37021;
    }
    .desc-block h3 {
        font-size: 22px;
        color: #1e2a78;
        margin-bottom: 12px;
        font-weight: 600;
    }
    .desc-block p {
        font-size: 16px;
        color: #374151;
        line-height: 1.7;
    }
    .desc-block ul {
        list-style: none;
        padding: 0;
    }
    .desc-block li {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .desc-block li i {
        color: #f37021;
    }

    

    
</style>
</head>
<body>

<?php include('navbar.php'); ?>

<!-- Hero Section -->
<section class="indus-hero-banner">
    <div class="indus-hero-content">
        <h1>Offline UPS Manufacturer India</h1>
        <div class="indus-breadcrumb-nav">
            <a href="#">Home</a> &nbsp;»&nbsp; <a href="#">Products</a> &nbsp;»&nbsp; <span>Offline UPS</span>
        </div>
    </div>
</section>

<!-- Product Image + short spec -->
<section class="indus-product-wrapper">
    <div class="indus-product-left">
        <img src="img/Offline UPS.png" id="productImg" alt="Offline UPS">
    </div>
    <div class="indus-product-right">
        <h2>Offline UPS</h2>
        <table class="indus-spec-table">
            <tr><td>Capacity</td><td>600VA – 3KVA</td></tr>
            <tr><td>Phase</td><td>Single Phase</td></tr>
            <tr><td>Efficiency</td><td>Up to 98%</td></tr>
            <tr><td>Transfer Time</td><td>2–10 ms</td></tr>
            <tr><td>Battery</td><td>SMF / Lead Acid</td></tr>
            <tr><td>Backup</td><td>10–30 Min</td></tr>
          </table>
    </div>
</section>
<div class="indus-lightbox" id="lightbox"><span class="indus-close" id="closeBtn">&times;</span><img src="img/Offline UPS.png" alt=""></div>



























<!-- Core Features Grid -->
<style>
.ups-section {
    margin: auto;
    padding: 50px 20px;
    margin-top: -40px;
}

/* ===== UPDATED HEADING ===== */
.indus-section-heading {
    text-align: center;
    font-size: 34px;
    font-weight: 700;
    color: #1e2a78;
    margin: 20px 0 10px;
    letter-spacing: 0.5px;
}

.indus-section-heading span {
    color: #f37021;
    position: relative;
}

/* ANIMATED UNDERLINE */
.indus-section-heading span::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -8px;
    width: 0;
    height: 3px;
    background: #f37021;
    border-radius: 10px;
    transition: 0.4s ease;
}

.indus-section-heading:hover span::after {
    width: 100%;
}

/* SUBTEXT */
.indus-sub-heading {
    text-align: center;
    font-size: 15px;
    color: #000000;
    margin-bottom: 40px;
}

/* GRID */
.ups-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
    gap: 25px;
}

/* CARD */
.ups-card {
    position: relative;
    border-radius: 18px;
    padding: 30px 22px;
    text-align: center;
    background: #fff;
    overflow: hidden;
    z-index: 1;
}

/* ANIMATED BORDER */
.ups-card::before {
    content: "";
    position: absolute;
    inset: 0;
    padding: 2px;
    border-radius: 18px;
    background: linear-gradient(120deg, #f37021, transparent, #f37021);
    -webkit-mask: 
        linear-gradient(#fff 0 0) content-box, 
        linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    animation: borderMove 4s linear infinite;
}

@keyframes borderMove {
    0% { background-position: 0% 50%; }
    100% { background-position: 200% 50%; }
}

/* HOVER */
.ups-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

/* ICON */
.ups-icon {
    width: 65px;
    height: 65px;
    border: 2px solid #000000;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
    font-size: 24px;
    color: #000000;
    transition: 0.3s ease;
}

.ups-card:hover .ups-icon {
    background: #f37021;
    color: #fff;
    border-color: #f37021;
    transform: scale(1.1);
}

/* TITLE */
.ups-card h3 {
    font-size: 18px;
    color: #1e2a78;
    margin-bottom: 10px;
    font-weight: 700;
}

/* TEXT */
.ups-card p {
    font-size: 15px;
    color: #000000;
    line-height: 1.6;
    min-height: 70px;
}

/* MOBILE */
@media(max-width:768px){
    .ups-card p {
        min-height: auto;
    }
}
</style>

<div class="ups-section">

    <!-- ✅ UPDATED HEADING -->
    <h2 class="indus-section-heading">
        Offline UPS Solutions</h2>

    <p class="indus-sub-heading">
        Reliable power backup for homes, businesses, and industrial applications
    </p>

    <div class="ups-grid">

        <div class="ups-card">
            <div class="ups-icon"><i class="fas fa-globe"></i></div>
            <h3>Universal</h3>
            <p>Offline UPS provides reliable backup for homes, businesses, and small industrial use.</p>
        </div>

        <div class="ups-card">
            <div class="ups-icon"><i class="fas fa-shield-alt"></i></div>
            <h3>Value</h3>
            <p>Offline UPS protects equipment, ensures continuity, and provides reliable backup for uninterrupted operations.</p>
        </div>

        <div class="ups-card">
            <div class="ups-icon"><i class="fas fa-chart-line"></i></div>
            <h3>Overview</h3>
            <p>An Offline UPS provides reliable and cost-effective backup by switching to battery during power failures.</p>
        </div>

        <div class="ups-card">
            <div class="ups-icon"><i class="fas fa-cogs"></i></div>
            <h3>Usage</h3>
            <p>Offline UPS ensures continuous operation across homes, offices, and commercial spaces.</p>
        </div>

    </div>
</div>




























<!-- ========== 3-TAB SYSTEM (Description, Specifications, Brochure) ========== -->


<div class="indus-tab-container">

<!-- ===== BUTTON STYLE TABS START ===== -->
<style>
.indus-tab-container {
    max-width: 1200px;
    margin: 30px auto;
    padding: 0 20px;
}

/* WRAPPER */
.indus-tab-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
    flex-wrap: wrap;
}

/* BUTTON TAB */
.indus-tab-btn {
    background: #ffffff;
    border: 1px solid #e5e7eb;
    padding: 12px 26px;
    font-size: 15px;
    font-weight: 500;
    color: #1e2a78;
    border-radius: 10px;
    cursor: pointer;
    transition: 0.25s ease;
    display: flex;
    align-items: center;
    gap: 8px;
}

/* ICON */
.indus-tab-btn i {
    color: #f37021;
    font-size: 14px;
}

/* HOVER */
.indus-tab-btn:hover {
    background: #f9fafb;
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.05);
}

/* ACTIVE BUTTON */
.indus-tab-btn.active {
    background: #1e2a78;
    color: #fff;
    border-color: #1e2a78;
    box-shadow: 0 8px 20px rgba(30,42,120,0.25);
}

/* ACTIVE ICON */
.indus-tab-btn.active i {
    color: #fff;
}

/* PANEL */
.indus-tab-panel {
    display: none;
    animation: fadeTab 0.4s ease;
}

.indus-tab-panel.active-panel {
    display: block;
}

@keyframes fadeTab {
    from {
        opacity: 0;
        transform: translateY(12px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* MOBILE */
@media(max-width:768px){
    .indus-tab-btn {
        width: 100%;
        justify-content: center;
    }
}
</style>

<div class="indus-tab-container">

    <div class="indus-tab-buttons">
        
        <button class="indus-tab-btn active" data-tab="desc">
            <i class="fas fa-align-left"></i> Description
        </button>

        <button class="indus-tab-btn" data-tab="specs">
            <i class="fas fa-table-list"></i> Specifications
        </button>

        <button class="indus-tab-btn" data-tab="brochure">
            <i class="fas fa-download"></i> Download Brochure
        </button>

    </div>

</div>
<!-- ===== BUTTON STYLE TABS END ===== -->

    <!-- DESCRIPTION PANEL (NO DOWNLOAD SECTION) -->
    <div id="descPanel" class="indus-tab-panel active-panel">
        <div class="desc-container">
            <div class="desc-block">
                <h3>What is an Offline UPS?</h3>
                <p>An <strong>Offline UPS</strong> is a cost-effective power backup solution that supplies power directly from mains during normal conditions and switches to battery mode during power failure. This ensures uninterrupted operation of connected devices like computers, routers, and small equipment.</p>
            </div>
            <div class="desc-block">
                <h3>How It Works</h3>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Normal Mode: Load runs on utility power</li>
                    <li><i class="fas fa-check-circle"></i> Power Failure: Switches in 2–10 ms</li>
                    <li><i class="fas fa-check-circle"></i> Backup Mode: Battery supplies clean power</li>
                    <li><i class="fas fa-check-circle"></i> Recovery: Returns to mains automatically</li>
                </ul>
            </div>
            <div class="desc-block">
                <h3>Why Choose INDUS UPS?</h3>
                <p>INDUS Offline UPS provides high efficiency, reliable protection, and low maintenance performance. <strong>Ideal for homes, offices, and small commercial applications.</strong></p>
            </div>
        </div>
    </div>

    <!-- SPECIFICATIONS PANEL (NO DOWNLOAD SECTION) -->
    <div id="specsPanel" class="indus-tab-panel">
        <div class="specs-wrapper">
            <table class="spec-table">
                <thead><tr><th>Parameter</th><th>Detailed Specification</th></tr></thead>
                <tbody>
                    <tr><td>Capacity Range</td><td>600VA / 1KVA / 2KVA / 3KVA (Customizable up to 3KVA)</td></tr>
                    <tr><td>Phase</td><td>Single Phase Input / Single Phase Output</td></tr>
                    <tr><td>Nominal Voltage</td><td>230V AC ± 10% (Mains)</td></tr>
                    <tr><td>Output Voltage (Battery Mode)</td><td>230V AC ± 5% (Pure Sine Wave)</td></tr>
                    <tr><td>Frequency Range</td><td>50Hz ± 4Hz (Mains) / 50Hz ± 0.5Hz (Inverter)</td></tr>
                    <tr><td>Transfer Time</td><td>2–10 ms typical (Mains to Battery)</td></tr>
                    <tr><td>Efficiency (Mains Mode)</td><td>Up to 98%</td></tr>
                    <tr><td>Inverter Efficiency</td><td>> 90%</td></tr>
                    <tr><td>Waveform</td><td>Pure Sine Wave</td></tr>
                    <tr><td>Battery Type</td><td>SMF / VRLA / Lead Acid (External battery optional)</td></tr>
                    <tr><td>DC Voltage (Nominal)</td><td>12V / 24V / 48V (depends on capacity)</td></tr>
                    <tr><td>Protections</td><td>Overload, Short Circuit, Battery Deep Discharge, Over Voltage, Under Voltage, Over Temperature</td></tr>
                    <tr><td>Indications</td><td>LED / LCD Display (Input/Output Voltage, Battery Level, Load %, Fault Status)</td></tr>
                    <tr><td>Audible Alarms</td><td>Battery Low, Overload, Fault</td></tr>
                    <tr><td>Operating Temperature</td><td>0°C to 45°C</td></tr>
                    <tr><td>Optional Features</td><td>Manual Bypass, SNMP, Extended Battery Backup</td></tr>
                </tbody>
            </table>
            <p style="margin-top: 22px; text-align: center; font-size: 14px; color: #4b5563;">*Specifications can be customized. Contact INDUS for detailed datasheet.</p>
        </div>
    </div>

    <!-- ===== HORIZONTAL BROCHURE PANEL (IMAGE STYLE) ===== -->
<style>
.brochure-cta-wrapper {
    max-width: 1200px;
    margin: 30px auto;
}

/* MAIN BAR */
.brochure-cta-bar {
    border-radius: 24px;
    padding: 25px 35px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap;
    border: solid 1px #f37021;

}

/* TEXT */
.brochure-cta-text {
    font-size: 18px;
    color: #111827;
    line-height: 1.5;
    flex: 1;
}

/* BUTTON */
.brochure-cta-btn {
    background: #1e2a78;
    color: #fff;
    padding: 14px 30px;
    border-radius: 40px;
    font-size: 16px;
    font-weight: 500;
    border: none;
    cursor: pointer;
    transition: 0.3s ease;
    white-space: nowrap;
    border:solid 2px #f37021;
}

/* HOVER */
.brochure-cta-btn:hover {
    background: #f37021;
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(243,112,33,0.25);
}

/* MOBILE */
@media(max-width:768px){
    .brochure-cta-bar {
        flex-direction: column;
        text-align: center;
    }
    .brochure-cta-text {
        font-size: 16px;
    }
}
</style>

<div id="brochurePanel" class="indus-tab-panel">
    <div class="brochure-cta-wrapper">

        <div class="brochure-cta-bar">
            
            <div class="brochure-cta-text">
                Download now to make an informed decision and ensure uninterrupted power for your critical operations.
            </div>

            <button id="brochureDownloadBtnOnly" class="brochure-cta-btn">
                Download Brochure
            </button>

        </div>

    </div>
</div>
<!-- ===== END ===== -->
</div>

<script>
    // Lightbox functionality
    const img = document.getElementById("productImg");
    const lightbox = document.getElementById("lightbox");
    const closeBtn = document.getElementById("closeBtn");
    if(img && lightbox && closeBtn) {
        img.onclick = () => lightbox.classList.add("active");
        closeBtn.onclick = () => lightbox.classList.remove("active");
        lightbox.onclick = (e) => { if(e.target === lightbox) lightbox.classList.remove("active"); };
    }

    // Tab switching logic - ensures that only one panel is visible
    const tabBtns = document.querySelectorAll('.indus-tab-btn');
    const descPanel = document.getElementById('descPanel');
    const specsPanel = document.getElementById('specsPanel');
    const brochurePanel = document.getElementById('brochurePanel');
    
    function activateTab(tabId) {
        // Hide all panels
        if(descPanel) descPanel.classList.remove('active-panel');
        if(specsPanel) specsPanel.classList.remove('active-panel');
        if(brochurePanel) brochurePanel.classList.remove('active-panel');
        // Remove active class from all buttons
        tabBtns.forEach(btn => btn.classList.remove('active'));
        
        if(tabId === 'desc' && descPanel) {
            descPanel.classList.add('active-panel');
            const activeBtn = document.querySelector('.indus-tab-btn[data-tab="desc"]');
            if(activeBtn) activeBtn.classList.add('active');
        } else if(tabId === 'specs' && specsPanel) {
            specsPanel.classList.add('active-panel');
            const activeBtn = document.querySelector('.indus-tab-btn[data-tab="specs"]');
            if(activeBtn) activeBtn.classList.add('active');
        } else if(tabId === 'brochure' && brochurePanel) {
            brochurePanel.classList.add('active-panel');
            const activeBtn = document.querySelector('.indus-tab-btn[data-tab="brochure"]');
            if(activeBtn) activeBtn.classList.add('active');
        }
    }
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const tabValue = btn.getAttribute('data-tab');
            if(tabValue === 'desc') activateTab('desc');
            else if(tabValue === 'specs') activateTab('specs');
            else if(tabValue === 'brochure') activateTab('brochure');
        });
    });
    
    // Ensure default active is description
    if(descPanel && !descPanel.classList.contains('active-panel')) activateTab('desc');
    
    // ========== BROCHURE DOWNLOAD FUNCTIONALITY (ONLY inside brochure tab) ==========
    const downloadBtn = document.getElementById('brochureDownloadBtnOnly');
    
    function triggerBrochureDownload() {
        const brochureContent = `INDUS POWER SOLUTIONS — OFFLINE UPS PRODUCT BROCHURE
================================================================================

📌 PRODUCT OVERVIEW
INDUS Offline UPS series delivers reliable backup power for homes, offices, lifts, and commercial establishments. Advanced microprocessor control ensures pure sine wave output and seamless transfer time.

⚡ KEY FEATURES
• Capacity Range: 600VA to 3KVA (Single Phase)
• Efficiency (Mains Mode): Up to 98%
• Transfer Time: 2–10 ms (typical)
• Waveform: Pure Sine Wave (THD <3%)
• Overload, Short Circuit & Deep Discharge Protection
• Smart Battery Management (PWM charging)
• LCD/LED Display for real-time status

📊 TECHNICAL SPECIFICATIONS (Standard)
--------------------------------------------------
Parameter                | Specification
--------------------------------------------------
Capacity                 | 600VA / 1KVA / 2KVA / 3KVA
Phase                    | Single Phase Input / Output
Nominal Voltage (Mains)  | 230V AC ±10%
Output (Battery Mode)    | 230V AC ±5% (Pure Sine Wave)
Frequency (Inverter)     | 50Hz ± 0.5Hz
Battery Type             | SMF / VRLA / Lead Acid (External optional)
DC Voltage               | 12V / 24V / 48V (depends on model)
Protections              | Overload, Short Circuit, Deep Discharge, Over/Under Voltage, Over Temperature
Operating Temperature    | 0°C to 45°C
Audible Alarms           | Battery Low, Overload, Fault

📦 MODEL AVAILABILITY & APPLICATIONS
• INDUS 600VA  → Home PCs, WiFi routers, small fans
• INDUS 1KVA   → Small offices, 2-3 computers, POS systems
• INDUS 2KVA   → Workstations, multiple monitors, small machinery
• INDUS 3KVA   → Lifts (elevators), petrol pumps, clinics, retail stores

✅ WHY CHOOSE INDUS OFFLINE UPS?
✔️ High reliability & low maintenance
✔️ Fast changeover (2–10 ms)
✔️ Pure sine wave output for sensitive electronics
✔️ Energy-saving design (up to 98% efficiency)
✔️ Pan-India service network & support
✔️ Customizable battery backup options

📄 This brochure includes technical datasheets, capacity charts, application guide, and complete feature highlights.

For custom configurations and bulk inquiries:
Contact INDUS UPS Team | Email: sales@indusups.com | Toll-free: 1800-XXX-XXXX

Download Date: ${new Date().toLocaleString()}
© INDUS UPS — Empowering Uninterrupted Operations.
`;
        const blob = new Blob([brochureContent], { type: 'application/pdf' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'INDUS_Offline_UPS_Brochure.pdf';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        URL.revokeObjectURL(url);
        
        // Toast notification
        const toast = document.createElement('div');
        toast.innerText = '✓ Brochure download started!';
        toast.style.position = 'fixed';
        toast.style.bottom = '24px';
        toast.style.left = '50%';
        toast.style.transform = 'translateX(-50%)';
        toast.style.backgroundColor = '#1e2a78';
        toast.style.color = 'white';
        toast.style.padding = '10px 24px';
        toast.style.borderRadius = '40px';
        toast.style.fontSize = '14px';
        toast.style.fontWeight = '500';
        toast.style.zIndex = '9999';
        toast.style.boxShadow = '0 6px 14px rgba(0,0,0,0.1)';
        document.body.appendChild(toast);
        setTimeout(() => toast.remove(), 2000);
    }
    
    if(downloadBtn) {
        downloadBtn.addEventListener('click', (e) => {
            e.preventDefault();
            triggerBrochureDownload();
        });
    }
</script>

<?php include('footer.php'); ?>

</body>
</html>