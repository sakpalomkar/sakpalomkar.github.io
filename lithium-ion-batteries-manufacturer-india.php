<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Indusups – Lithium Batteries</title>

<!-- Google Font & Font Awesome (exactly as in new design) -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- Tailwind (for few icons, kept as is) -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- all original styles – only class names have been systematically changed -->
<style>
* { margin:0; padding:0; box-sizing:border-box; font-family:'Montserrat'; }
body { width:100%; overflow-x:hidden; }

/* === renamed hero section === */
.heroSectionRenamed {
    position: relative;
    height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    overflow: hidden;
    color: #fff;
}
.heroSectionRenamed::before {
    content: "";
    position: absolute;
    inset: 0;
    background: url("img/about\ us.jpg") center/cover no-repeat;
    filter: brightness(0.55);
    transform: scale(1.1);
    animation: zoomEffect 10s ease-in-out infinite alternate;
}
.heroSectionRenamed::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.24));
}
.heroContentWrapper {
    position: relative;
    z-index: 2;
}
.heroContentWrapper h1 {
    font-size: 38px;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 15px;
    animation: slideDown 1s ease forwards;
}
.breadcrumbRenamed {
    font-size: 18px;
    font-weight: 400;
    animation: fadeUp 1.2s ease forwards;
    margin-left: -60px;
}
.breadcrumbRenamed a {
    color: #fff;
    text-decoration: none;
    transition: 0.3s;
}
.breadcrumbRenamed a:hover {
    color: #ff5e00;
}
.breadcrumbRenamed span {
    color: #ff5e00;
    font-weight: 600;
    margin-left: 5px;
}
@keyframes slideDown {
    from { opacity:0; transform:translateY(-40px); }
    to { opacity:1; transform:translateY(0); }
}
@keyframes fadeUp {
    from { opacity:0; transform:translateY(30px); }
    to { opacity:1; transform:translateY(0); }
}
@keyframes zoomEffect {
    from { transform:scale(1.1); }
    to { transform:scale(1); }
}
@media(max-width:768px){
    .heroContentWrapper h1{ font-size:36px; }
    .breadcrumbRenamed{ font-size:15px; }
}

/* === renamed image gallery section === */
.imgGallerySection {
    width:100%;
    padding:40px 8%;
    text-align:center;
    position:relative;
    overflow:hidden;
    margin-bottom:-30px;
}
.imgHolderRenamed {
    position:relative;
    z-index:1;
    display:flex;
    justify-content:center;
    margin-bottom:30px;
    gap:30px;
    flex-wrap:wrap;
}
.imgDisplayRenamed {
    width:340px;
    cursor:pointer;
    border-radius:20px;
    transform:translateY(60px);
    margin-left: 45px;
    opacity:0;
    animation: fadeUp 1.2s ease forwards;
    transition:0.4s ease;
}
.imgDisplayRenamed:hover{
    transform:translateY(0) scale(1.05) rotateX(5deg);
}
.actionPanelRenamed {
    position:relative;
    z-index:1;
    display:flex;
    justify-content:center;
    gap:40px;
    flex-wrap:wrap;
}
.ctaBtnRenamed {
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
.ctaBtnRenamed::before {
    content:"";
    position:absolute;
    inset:0;
    border-radius:50px;
    padding:2px;
    background: linear-gradient(90deg,#f37021,#212384,#f37021);
    -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    animation: borderMove 4s linear infinite;
}
@keyframes borderMove { 0%{background-position:0%;} 100%{background-position:200%;} }
.ctaBtnRenamed:hover{
    background:#f37021;
    color:#fff;
    box-shadow:0 15px 40px rgba(243,112,33,0.4);
    transform:translateY(-5px);
}
.lightboxRenamed {
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
.lightboxRenamed.active {
    opacity:1;
    visibility:visible;
}
.lightboxRenamed img {
    max-width:90%;
    max-height:90%;
    border-radius:20px;
    box-shadow:0 30px 60px rgba(0,0,0,0.5);
    animation: zoomIn 0.4s ease;
}
@keyframes zoomIn { from{transform:scale(0.8);} to{transform:scale(1);} }
.closeIconRenamed {
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
}
.closeIconRenamed span {
    position:absolute;
    width:22px;
    height:2px;
    background:#fff;
    transition:0.4s ease;
}
.closeIconRenamed span:nth-child(1){ transform:rotate(45deg); }
.closeIconRenamed span:nth-child(2){ transform:rotate(-45deg); }
.closeIconRenamed:hover{
    transform:scale(1.15) rotate(180deg);
    background:linear-gradient(135deg,#f37021,#212384);
}
@media(max-width:768px){
    .imgDisplayRenamed{ width:260px; }
    .ctaBtnRenamed{ padding:14px 30px; font-size:14px; }
    .closeIconRenamed{ top:20px; right:20px; width:45px; height:45px; }
}

/* === global layout renamed === */
.containerFluidRenamed { width:100%; padding:0; margin:0; }
section { width:100%; position:relative; left:0; right:0; }
.mainContentArea { width:100%; }
.contentWrapperInner {
    width:100%;
    max-width:1400px;
    margin:0 auto;
    padding-left:30px;
    padding-right:30px;
}

/* section 1 renamed */
.sectionOneRenamed { border-radius:30px; padding:50px 0 !important; margin-top:80px !important; }
.headingOneRenamed {
    text-align:center; font-size:29px; font-weight:700; margin-bottom:70px;
    color:#1e2a78; letter-spacing:1px; padding:0 30px;
}
.headingOneRenamed span { color:#f37021; position:relative; }
.headingOneRenamed span::after {
    content:''; position:absolute; width:100%; height:4px; background:#f37021;
    bottom:-10px; left:0; border-radius:5px; animation:underlineAnim 2s infinite alternate;
}
@keyframes underlineAnim { from{width:0;} to{width:100%;} }
.gridFourRenamed {
    display:grid; grid-template-columns:repeat(4,1fr); gap:35px; width:100%;
    max-width:1400px; margin:0 auto !important; padding:0 30px;
}
.cardRenamed {
    display:flex; flex-direction:column; background:#fff; border-radius:12px;
    height:400px; overflow:hidden;
}
.cardTitleRenamed {
    background:#1e2a78; color:#fff; padding:22px; font-size:16px; text-align:center;
    font-weight:700; border-radius:12px 12px 0 0; transition:.3s; flex-shrink:0;
}
.cardDescRenamed {
    border:2px solid #1e2a78; border-top:none; padding:20px; border-radius:0 0 12px 12px;
    background:#fff; box-shadow:0 6px 18px rgba(0,0,0,0.05); transition:.3s;
    flex-grow:1; display:flex; flex-direction:column; justify-content:center;
}
.cardDescRenamed p { margin-bottom:15px; line-height:1.5; font-size:16px; color:#000; }
.cardDescRenamed strong { color:#1e2a78; }
.cardRenamed:hover .cardDescRenamed {
    box-shadow:0 18px 40px rgba(30,62,120,0.25); border-color:#f37021; transform:translateY(-6px);
}
.cardRenamed:hover .cardTitleRenamed { background:#f37021; }

/* section two (What Is) */
.sectionTwoRenamed { padding:40px 0 !important; }
.headingTwoRenamed {
    text-align:center; font-size:32px; font-weight:700; margin-bottom:60px;
    color:#1e2a78; letter-spacing:1px; padding:0 30px;
}
.headingTwoRenamed span { color:#f37021; position:relative; }
.headingTwoRenamed span::after {
    content:''; position:absolute; width:100%; height:4px; background:#f37021;
    bottom:-10px; left:0; border-radius:5px; animation:underlineAnim 2s infinite alternate;
}
.listVerticalRenamed {
    list-style:none; margin:0 auto; padding:0; position:relative; max-width:1100px;
}
.listVerticalRenamed li {
    display:flex; align-items:flex-start; position:relative; padding-left:70px; margin-bottom:50px;
}
.listNumberRenamed {
    position:absolute; left:0; width:45px; height:45px; background:#1e2a78; color:#fff;
    border-radius:50%; text-align:center; line-height:45px; font-weight:bold; font-size:22px;
    z-index:2; transition:0.4s ease; box-shadow:0 4px 10px rgba(240,96,0,0.3);
}
.listVerticalRenamed li:hover .listNumberRenamed { background:#f37021; transform:rotate(360deg) scale(1.1); }
.listVerticalRenamed li::before {
    content:''; position:absolute; left:22px; top:45px; bottom:-30px; width:3px;
    background:#f37021; opacity:0.3;
}
.listVerticalRenamed li:last-child::before { display:none; }
.listItemTitleRenamed { font-size:22px; font-weight:700; margin-bottom:8px; color:#1e2a78; transition:0.3s; text-transform:uppercase; }
.listVerticalRenamed li:hover .listItemTitleRenamed { color:#f37021; padding-left:10px; }
.listItemDescRenamed {
    margin-top:8px; padding:20px; background:#fff; border-left:5px solid #1e2a78;
    border-radius:20px; font-size:18px; font-weight:400; line-height:1.6; color:#000;
    transition:0.3s; box-shadow:5px 5px 15px rgba(0,0,0,0.02);
}
.listVerticalRenamed li:hover .listItemDescRenamed {
    border-left-color:#f37021; background:#fff; box-shadow:0 10px 25px rgba(30,42,120,0.1);
    transform:translateX(5px);
}

/* why lithium section (was section-4) */
.sectionWhyLithiumRenamed { width:100%; background:transparent; padding:60px 0 !important; }
.headingWhyRenamed {
    text-align:center; font-size:35px; font-weight:800; margin-bottom:20px; color:#1e2a78; padding:0 30px;
}
.headingWhyRenamed span { color:#f37021; position:relative; display:inline-block; }
.headingWhyRenamed span::after {
    content:''; position:absolute; width:100%; height:4px; background:#f37021;
    bottom:-10px; left:0; border-radius:5px; animation:underlineAnim 2s infinite alternate;
}
.introWhyRenamed {
    font-size:18px; margin-bottom:50px; color:#000; text-align:center; max-width:900px;
    margin-left:auto; margin-right:auto; line-height:1.6; padding:0 20px;
}
.gridThreeRenamed {
    display:grid; grid-template-columns:repeat(3,1fr); gap:30px; width:100%;
    max-width:1400px; margin:0 auto !important; padding:0 30px;
}
.cardWhyRenamed {
    background:#f8fafc; padding:35px 25px; border-radius:12px; border-top:4px solid #f37021;
    transition:0.3s; box-shadow:0 10px 15px -3px rgba(0,0,0,0.1); display:flex; flex-direction:column;
}
.cardWhyRenamed:hover { transform:translateY(-10px); box-shadow:0 20px 25px -5px rgba(30,42,120,0.2); background:#fff; }
.cardWhyRenamed strong { color:#1e2a78; display:block; margin-bottom:15px; font-size:17px; line-height:1.2; text-align:center; }
.cardWhyRenamed p { color:#000; font-size:15px; line-height:1.5; text-align:center; margin:0; }

/* section three (backup power) */
.sectionThreeRenamed { margin:80px 0 140px 0 !important; }
.headingThreeRenamed {
    text-align:center; font-size:32px; font-weight:700; margin-bottom:60px; color:#1e2a78;
    letter-spacing:1px; padding:0 30px; margin-top:150px;
}
.headingThreeRenamed span { color:#f37021; position:relative; }
.headingThreeRenamed span::after {
    content:''; position:absolute; width:100%; height:4px; background:#f37021;
    bottom:-10px; left:0; border-radius:5px; animation:underlineAnim 2s infinite alternate;
}
.textBoxRenamed {
    text-align:center; font-size:17px; width:85%; max-width:1100px; margin:0 auto;
    box-shadow:0 4px 15px rgba(30,42,120,0.1); color:#000; border-radius:20px;
    border:2px solid #1e2a78; padding:15px;
}
.textBoxRenamed:hover {
    box-shadow:0 10px 25px rgba(30,42,120,0.2); border:2px solid #f37021; background:#fff;
}

/* section four (inverter / ups) was section-4 but we already used, renamed to sectionFourCards */
.sectionFourCardsRenamed { margin:40px 0 -43px 0 !important; }
.headingFourRenamed {
    text-align:center; font-size:32px; font-weight:700; margin-bottom:70px; color:#1e2a78;
    letter-spacing:1px; padding:0 30px; margin-top:-50px;
}
.headingFourRenamed span { color:#f37021; position:relative; }
.headingFourRenamed span::after {
    content:''; position:absolute; width:100%; height:4px; background:#f37021;
    bottom:-10px; left:0; border-radius:5px; animation:underlineAnim 2s infinite alternate;
}
.gridTopRenamed {
    display:grid; grid-template-columns:repeat(3,1fr); gap:35px; width:100%;
    max-width:1400px; margin:0 auto -84px auto !important; padding:0 30px;
}
.gridBottomRenamed {
    display:grid; grid-template-columns:repeat(2,1fr); gap:35px; width:100%;
    max-width:900px; margin:0 auto !important; padding:0 30px;
}
.flipCardRenamed {
    position:relative; perspective:1000px; height:440px; width:100%;
}
.flipInnerRenamed {
    position:relative; width:100%; height:65%; transition:transform 0.6s; transform-style:preserve-3d;
}
.flipCardRenamed:hover .flipInnerRenamed { transform:rotateY(180deg); }
.flipFrontRenamed, .flipBackRenamed {
    position:absolute; width:100%; height:100%; backface-visibility:hidden; background:#fff;
    border-radius:12px; border:4px solid #1e2a78; box-shadow:0 10px 25px rgba(5,72,167,0.35);
    padding:24px; display:flex; flex-direction:column; justify-content:center; align-items:center; text-align:center;
}
.flipBackRenamed { transform:rotateY(180deg); border:4px solid #f06000; }
.flipIconRenamed { font-size:42px; margin-bottom:16px; color:#ff6a00; }
.flipTitleRenamed { font-size:22px; font-weight:600; margin-bottom:8px; color:#1e2a78; }
.flipTextRenamed { font-size:16px; color:#000; line-height:1.6; margin-top:15px; }

/* solar section – classes already generic (solar-battery-section etc) we keep as is but ensure no conflict */
.solar-battery-section { padding:40px 20px; text-align:center; background:#fff; margin-bottom:101px; margin-top:-100px; }
.solar-heading { font-size:37px; font-weight:700; margin-bottom:50px; color:#212384; }
.solar-heading span { position:relative; color:#f37021; }
.solar-heading span::after { content:''; position:absolute; width:100%; height:4px; background:#f37021; bottom:-10px; left:0; border-radius:5px; animation:underlineAnim 2s infinite alternate; }
.solar-cards { display:flex; flex-wrap:wrap; gap:30px; justify-content:center; }
.solar-card { background:#fff; border-radius:12px; box-shadow:0 6px 15px rgba(0,0,0,0.1); padding:25px; width:250px; transition:0.3s; cursor:pointer; }
.solar-card:hover { transform:translateY(-8px); box-shadow:0 12px 25px rgba(0,0,0,0.15); }
.solar-icon { font-size:2.5rem; color:#f37021; margin-bottom:15px; transition:color 0.3s; }
.solar-card:hover .solar-icon { color:#212384; }
.solar-card h3 { font-size:22px; margin-bottom:12px; font-weight:600; color:#f37021; transition:color 0.3s; }
.solar-card:hover h3 { color:#212384; }
.solar-card p { font-size:16px; line-height:1.6; color:#000; }

/* section five (industrial applications) */
.sectionFiveRenamed { margin:60px auto; width:100%; margin-top:-80px; }
.headingFiveRenamed {
    text-align:center; font-size:32px; font-weight:700; margin-bottom:70px; color:#1e2a78;
    letter-spacing:1px; padding:0 30px;
}
.headingFiveRenamed span { color:#f37021; position:relative; }
.headingFiveRenamed span::after {
    content:''; position:absolute; width:100%; height:4px; background:#f37021;
    bottom:-10px; left:0; border-radius:5px; animation:underlineAnim 2s infinite alternate;
}
.featureListRenamed {
    width:100%; max-width:1000px; margin:0 auto; display:flex; flex-direction:column; gap:25px; padding:0 30px;
}
.featureItemRenamed {
    background:#f9f9f9; border-radius:8px; padding:20px 25px; transition:0.3s; cursor:pointer;
    display:flex; align-items:flex-start; gap:20px; box-shadow:0 4px 8px rgba(5,72,167,0.3); border-left:3px solid #00134d;
}
.featureItemRenamed:hover {
    box-shadow:0 4px 12px rgba(228,80,21,0.4); border-left:3px solid #f15a24;
}
.featureIconRenamed { font-size:30px; color:#f15a24; min-width:50px; text-align:center; }
.featureTextRenamed { display:flex; flex-direction:column; }
.featureItemRenamed h4 { font-size:20px; font-weight:700; color:#1e2a78; margin:0 0 10px 0; }
.featureItemRenamed:hover h4 { color:#f37021; }
.featureDescRenamed { font-size:16px; line-height:1.5; color:#000; margin:0; }

/* section six (orbit tech) */
.orbitSectionRenamed { width:100%; min-height:100vh; padding:80px 0 !important; background:#fff; display:flex; flex-direction:column; align-items:center; justify-content:center; overflow:hidden; }
.headingSixRenamed {
    font-size:38px; font-weight:800; color:#1e2a78; text-align:center; margin-bottom:80px; letter-spacing:1px; padding:0 30px;
}
.headingSixRenamed span { color:#f37021; position:relative; }
.headingSixRenamed span::after {
    content:''; position:absolute; width:100%; height:4px; background:#f37021;
    bottom:-10px; left:0; border-radius:5px; animation:underlineAnim 2s infinite alternate;
}
.orbitContainerRenamed { position:relative; width:100%; max-width:1050px; height:700px; margin:0 auto; display:flex; justify-content:center; align-items:center; }
.orbitCoreRenamed {
    width:180px; height:180px; background:#1e2a78; border-radius:50%; display:flex; flex-direction:column;
    justify-content:center; align-items:center; color:#fff; z-index:10; border:6px solid #f37021;
    box-shadow:0 0 40px rgba(30,42,120,0.2); text-align:center; padding:20px;
}
.orbitCoreRenamed i { font-size:55px; color:#f37021; margin-bottom:10px; }
.nodeFeatureRenamed { position:absolute; width:300px; cursor:pointer; }
.nodeHeaderRenamed { display:flex; align-items:center; gap:15px; margin-bottom:8px; }
.nodeIconRenamed {
    width:55px; height:55px; background:#fff; border:2px solid #f37021; border-radius:50%;
    display:flex; justify-content:center; align-items:center; color:#1e2a78; font-size:22px;
    transition:.5s; box-shadow:0 5px 15px rgba(0,0,0,0.1);
}
.nodeTitleRenamed { font-weight:700; color:#1e2a78; font-size:20px; }
.nodeDescRenamed {
    font-size:15px; color:#000; line-height:1.5; padding:12px 18px; background:#fff;
    border:2px solid #f37021; box-shadow:0 10px 25px rgba(0,0,0,0.15); margin-left:70px;
    max-height:0; width:280px; opacity:0; overflow:hidden; transition:all .4s ease; border-radius:20px;
}
.nodeFeatureRenamed:hover .nodeIconRenamed { transform:rotate(360deg); background:#f37021; color:#fff; }
.nodeFeatureRenamed:hover .nodeTitleRenamed { color:#f37021; }
.nodeFeatureRenamed:hover .nodeDescRenamed { max-height:120px; opacity:1; }
.n1Renamed { top:5%; left:5%; } .n2Renamed { top:5%; right:5%; } .n3Renamed { top:40%; left:0; } .n4Renamed { top:40%; right:0; } .n5Renamed { bottom:5%; left:5%; } .n6Renamed { bottom:5%; right:5%; }
.orbitSvgRenamed { position:absolute; width:100%; height:100%; pointer-events:none; }
.orbitSvgRenamed line { stroke:#d1d9e6; stroke-width:1.2; stroke-dasharray:5; }

/* section seven (voltage, capacity) */
.sectionSevenRenamed { margin:80px auto; }
.headingSevenRenamed {
    text-align:center; font-size:32px; font-weight:700; margin-bottom:80px; color:#1e2a78; padding:0 30px; margin-top:-40px;
}
.headingSevenRenamed span { color:#f37021; position:relative; }
.headingSevenRenamed span::after {
    content:''; position:absolute; width:100%; height:4px; background:#f37021;
    bottom:-10px; left:0; border-radius:5px; animation:underlineAnim 2s infinite alternate;
}
.gridFourColRenamed {
    display:grid; grid-template-columns:repeat(4,1fr); gap:30px; width:100%; max-width:1400px; margin:0 auto !important; padding:0 30px;
}
.cardSpecRenamed {
    background:#fff; padding:40px 30px; border-radius:30px; position:relative; z-index:1;
    border:2px solid #1e2a78; overflow:hidden; display:flex; flex-direction:column;
    transition:all .5s ease; box-shadow:0 10px 25px rgba(7,82,188,.496);
}
.cardSpecRenamed::before {
    content:''; position:absolute; bottom:-100%; left:0; width:100%; height:100%;
    background:#1e2a78; transition:all .6s cubic-bezier(.645,.045,.355,1); z-index:-1;
}
.cardSpecRenamed:hover { transform:translateY(-10px); border-color:#f37021; }
.cardSpecRenamed:hover::before { bottom:0; }
.cardSpecRenamed h2, .cardSpecRenamed h3 { color:#f37021; font-size:26px; margin-bottom:20px; font-weight:600; transition:.4s; }
.cardSpecRenamed:hover h2, .cardSpecRenamed:hover h3 { color:#fff; }
.specListRenamed { list-style:none; padding:0; }
.specListRenamed li { padding:12px 0; border-bottom:1px solid #eee; display:flex; justify-content:space-between; font-size:15px; color:#333; }
.cardSpecRenamed:hover .specListRenamed li { color:#fff; border-bottom-color:rgba(255,255,255,.2); }
.cardSpecRenamed:hover .specListRenamed li b { color:#f37021; }
.badgeRenamed { background:#1e2a78; color:#fff; padding:6px 15px; border-radius:50px; font-size:14px; border:1px solid transparent; transition:.4s; }
.cardSpecRenamed:hover .badgeRenamed { background:transparent; border-color:#f37021; color:#f37021; }

/* section eight (timeline EV) */
.sectionEightRenamed { margin:80px auto; }
.headingEightRenamed {
    text-align:center; font-size:32px; font-weight:700; margin-bottom:80px; color:#1e2a78; letter-spacing:1px; padding:0 30px; margin-top:100px;
}
.headingEightRenamed span { color:#f37021; position:relative; }
.headingEightRenamed span::after {
    content:''; position:absolute; width:100%; height:4px; background:#f37021;
    bottom:-10px; left:0; border-radius:5px; animation:underlineAnim 2s infinite alternate;
}
.timelineRenamed { position:relative; max-width:1000px; margin:0 auto; padding:40px 20px; margin-bottom:32px; }
.timelineRenamed::after {
    content:''; position:absolute; width:4px; background:#1e2a78; top:0; bottom:0; left:50%; margin-left:-2px;
}
.timelineItemRenamed { padding:10px 40px; position:relative; width:50%; box-sizing:border-box; margin-bottom:20px; }
.timelineItemRenamed .iconCircleRenamed {
    position:absolute; width:60px; height:60px; right:-31px; background:#f37021; border:4px solid #fff;
    top:40px; border-radius:50%; z-index:2; color:#fff; display:flex; align-items:center; justify-content:center; font-size:22px;
}
.rightRenamed .iconCircleRenamed { left:-31px; }
.leftRenamed { left:0; }
.rightRenamed { left:50%; }
.timelineContentRenamed {
    padding:20px; background:#fff; position:relative; border-radius:10px; border:2px solid transparent;
    height:120px; display:flex; flex-direction:column; align-items:center; justify-content:center;
    text-align:center; transition:0.3s; box-shadow:0 8px 20px rgba(30,42,120,0.2); overflow:hidden;
}
.timelineContentRenamed h3 { margin:0; font-size:25px; color:#1e2a78; font-weight:700; }
.timelineContentRenamed p {
    position:absolute; top:0; left:0; width:100%; height:100%; background:#1e2a78; color:#fff;
    margin:0; padding:15px; display:flex; align-items:center; justify-content:center; font-size:18px;
    opacity:0; transform:scale(0.9); transition:0.3s;
}
.timelineItemRenamed:hover .iconCircleRenamed { background:#1e2a78; transform:scale(1.1); }
.timelineItemRenamed:hover .timelineContentRenamed { border-color:#1e2a78; box-shadow:0 10px 30px rgba(30,42,120,0.4); transform:translateY(-5px); }
.timelineItemRenamed:hover .timelineContentRenamed p { opacity:1; transform:scale(1); }

/* section nine (slider) */
.sectionNineRenamed { position:relative; width:100%; min-height:480px; display:flex; justify-content:center; align-items:center; overflow:hidden; margin:80px 0; }
.appBgRenamed { position:absolute; inset:0; background:linear-gradient(rgba(22,20,20,0.685),rgba(0,0,0,0.658)),url('img/about\ us.jpg') center/cover fixed; z-index:1; }
.contentWrapperNineRenamed { position:relative; z-index:2; text-align:center; width:100%; }
.headingNineRenamed {
    text-align:center; font-size:32px; font-weight:700; margin-bottom:-48px; color:#fff; letter-spacing:1px; padding:0 30px;
}
.headingNineRenamed span { color:#f37021; position:relative; }
.headingNineRenamed span::after {
    content:''; position:absolute; width:100%; height:4px; background:#f37021;
    bottom:-10px; left:0; border-radius:5px; animation:underlineAnim 2s infinite alternate;
}
.sliderWrapperRenamed { position:relative; width:100%; max-width:1000px; margin:120px auto 0; display:flex; justify-content:center; align-items:center; }
.cardsWrapperRenamed { position:relative; width:380px; height:280px; perspective:1200px; transform-style:preserve-3d; }
.cardSlideRenamed {
    position:absolute; inset:0; background:rgba(8,8,8,0.897); border:1px solid rgba(0,0,0,0.2);
    border-radius:20px; padding:40px 30px; display:flex; flex-direction:column; justify-content:center;
    text-align:center; color:#fff; transition:all 0.6s cubic-bezier(0.4,0,0.2,1); box-shadow:0 10px 30px #0d0d0e; backface-visibility:hidden;
}
.cardSlideRenamed h2 { color:#f15a24; margin-bottom:20px; font-size:25px; text-transform:uppercase; position:relative; }
.cardSlideRenamed.current--card { transform:translate3d(0,0,100px) scale(1.1); z-index:50; opacity:0.9; border:2px solid #f37021; }
.cardSlideRenamed.previous--card { transform:translate3d(-105%,0,-100px) rotateY(30deg) scale(0.9); z-index:30; opacity:0.5; }
.cardSlideRenamed.next--card { transform:translate3d(105%,0,-100px) rotateY(-30deg) scale(0.9); z-index:30; opacity:0.5; }
.btnSliderRenamed {
    position:absolute; top:50%; transform:translateY(-50%); width:50px; height:50px; border-radius:50%;
    border:2px solid #f37021; background:rgba(0,0,0,0.582); color:#fff; cursor:pointer; z-index:100; transition:0.3s; font-size:22px;
}
.btnSliderRenamed:hover { background:#f37021; }
.btnLeftRenamed { left:-115px; } .btnRightRenamed { right:-115px; }

/* section ten */
.sectionTenRenamed { margin-bottom:80px; width:100%; perspective:1000px; }
.headingTenRenamed {
    margin-top:50px; text-align:center; font-size:32px; font-weight:700; margin-bottom:70px; color:#1e2a78; letter-spacing:1px; padding:0 30px;
}
.headingTenRenamed span { color:#f37021; position:relative; }
.headingTenRenamed span::after {
    content:''; position:absolute; width:100%; height:4px; background:#f37021;
    bottom:-10px; left:0; border-radius:5px; animation:underlineAnim 2s infinite alternate;
}
.gridTwoRenamed {
    display:grid; grid-template-columns:repeat(auto-fit, minmax(300px,1fr)); gap:35px;
    width:100%; max-width:1200px; margin:0 auto !important; padding:0 30px;
}
.cardHoverRenamed {
    background:#fff; padding:40px 32px; border-radius:36px; display:flex; flex-direction:column;
    align-items:center; text-align:center; position:relative; z-index:1; border:1px solid #1e2a78;
    transition:all 0.6s cubic-bezier(0.23,1,0.32,1); cursor:pointer; overflow:hidden;
}
.iconCircleNewRenamed {
    width:70px; height:70px; background:#f15a24; border-radius:50%; display:flex; align-items:center;
    justify-content:center; margin-bottom:25px; transition:0.6s; box-shadow:0 10px 20px rgba(241,90,36,0.2);
}
.cardHoverRenamed:hover { transform:translateY(-15px) scale(1.02); border-color:#f37021; box-shadow:0 10px 20px rgba(30,42,120,0.1),0 30px 60px rgba(30,42,120,0.25); }
.cardHoverRenamed:hover .iconCircleNewRenamed { background:#1e2a78; transform:rotate(360deg); box-shadow:0 0 25px rgba(30,42,120,0.4); }
.cardHoverRenamed p { transition:transform 0.4s ease; font-size:17px; text-align:justify; }
.cardHoverRenamed:hover p { transform:translateY(-5px); }

@media (max-width:1200px){ .gridFourRenamed, .gridFourColRenamed { grid-template-columns:repeat(2,1fr); } }
@media (max-width:992px){
    .gridThreeRenamed, .gridTopRenamed { grid-template-columns:repeat(2,1fr); }
    .orbitContainerRenamed { height:auto; flex-direction:column; gap:40px; }
    .orbitSvgRenamed, .orbitCoreRenamed { display:none; }
    .nodeFeatureRenamed { position:static; width:100%; margin-bottom:20px; }
    .nodeDescRenamed { margin-left:0; }
}
@media (max-width:768px){
    .gridFourRenamed, .gridThreeRenamed, .gridTopRenamed, .gridBottomRenamed, .gridFourColRenamed, .gridTwoRenamed { grid-template-columns:1fr; }
    .headingOneRenamed, .headingTwoRenamed, .headingWhyRenamed, .headingThreeRenamed, .headingFourRenamed, .headingFiveRenamed, .headingSixRenamed, .headingSevenRenamed, .headingEightRenamed, .headingNineRenamed, .headingTenRenamed { font-size:28px !important; }
    .listItemDescRenamed { font-size:18px; }
    .timelineRenamed::after { left:31px; }
    .timelineItemRenamed { width:100%; padding-left:70px; padding-right:25px; }
    .timelineItemRenamed .iconCircleRenamed { left:1px; }
    .rightRenamed { left:0%; }
    .btnLeftRenamed { left:10px; } .btnRightRenamed { right:10px; }
    .cardSlideRenamed.previous--card, .cardSlideRenamed.next--card { opacity:0; visibility:hidden; }
}
</style>
</head>
<body>

<?php include('navbar.php'); ?>

<!-- HERO SECTION with renamed classes -->
<section class="heroSectionRenamed">
    <div class="heroContentWrapper">
        <h1>Lithium-Ion Batteries Manufacturer India</h1>
        <div class="breadcrumbRenamed">
            <a href="#">Home</a> &nbsp;»&nbsp; <a href="#">Products</a> &nbsp;»&nbsp;
            <a href="#">Inverter Battery</a> &nbsp;»&nbsp; <span>Lithium-Ion Batteries</span>
        </div>
    </div>
</section>

<!-- Image gallery with renamed classes -->
<section class="imgGallerySection">
    <div class="imgHolderRenamed">
        <img src="img/Lithium-Ion 1.png" class="imgDisplayRenamed" alt="">
        <img src="img/Lithium-Ion 2.png" class="imgDisplayRenamed" alt="">
    </div>
    <div class="actionPanelRenamed">
        <a href="#" class="ctaBtnRenamed">DOWNLOAD BROCHURE</a>
        <a href="#" class="ctaBtnRenamed" onclick="openEnquiry()">ENQUIRE NOW</a>
    </div>
</section>

<!-- Lightbox (renamed) -->
<div class="lightboxRenamed" id="imageLightboxRenamed">
    <div class="closeIconRenamed" id="closeLightboxRenamed">
        <span></span><span></span>
    </div>
    <img src="img/Offline UPS.png" alt="UPS Machine">
</div>

<script>
const imgsRenamed = document.querySelectorAll(".imgDisplayRenamed");
const lightboxRenamed = document.getElementById("imageLightboxRenamed");
const lightboxImgRenamed = lightboxRenamed.querySelector("img");
const closeBtnRenamed = document.getElementById("closeLightboxRenamed");

imgsRenamed.forEach(img => {
    img.addEventListener("click", () => {
        lightboxRenamed.classList.add("active");
        lightboxImgRenamed.src = img.src;
    });
});
closeBtnRenamed.addEventListener("click", (e) => {
    e.stopPropagation();
    lightboxRenamed.classList.remove("active");
});
lightboxRenamed.addEventListener("click", () => {
    lightboxRenamed.classList.remove("active");
});
</script>

<!-- main content area with all sections (classes fully renamed) -->
<div class="mainContentArea">

    <!-- section 1 -->
    <section class="sectionOneRenamed">
        <div class="contentWrapperInner">
            <h2 class="headingOneRenamed">Advanced Energy Storage By Indus Power <span>Industries Pvt Ltd</span></h2>
            <div class="gridFourRenamed">
                <div class="cardRenamed"><h4 class="cardTitleRenamed">Core Industry Role</h4><div class="cardDescRenamed"><p><strong>Uninterrupted Operations:</strong> Ensuring continuous power across homes, offices, and industrial sectors.</p><p><strong>Renewable Integration:</strong> Engineered to bridge the gap in solar and wind energy systems.</p></div></div>
                <div class="cardRenamed"><h4 class="cardTitleRenamed">Premium Technology Standard</h4><div class="cardDescRenamed"><p><strong>Advanced Lithium-Ion:</strong> High-performance solutions prioritizing safety, efficiency, and service life.</p><p><strong>Indian Engineering:</strong> Designed for local operating and environmental conditions.</p></div></div>
                <div class="cardRenamed"><h4 class="cardTitleRenamed">The Lithium Advantage</h4><div class="cardDescRenamed"><p><strong>Efficiency & Size:</strong> Compact design with superior reliability, the preferred modern alternative.</p><p><strong>High Performance:</strong> Engineered for fast charging and deeper discharge cycles.</p></div></div>
                <div class="cardRenamed"><h4 class="cardTitleRenamed">Versatile Applications</h4><div class="cardDescRenamed"><p><strong>Residential & Commercial:</strong> Reliable backup for home inverters and data centers.</p><p><strong>Industrial Automation:</strong> Built for demanding requirements of automated systems.</p></div></div>
            </div>
        </div>
    </section>

    <!-- section two (What is Lithium) -->
    <section id="faqsRenamed" class="sectionTwoRenamed">
        <div class="contentWrapperInner">
            <h2 class="headingTwoRenamed">What Is A<span> Lithium-Ion Battery?</span></h2>
            <ul class="listVerticalRenamed">
                <li><div class="listNumberRenamed">01</div><div><div class="listItemTitleRenamed">Advanced Energy Storage</div><div class="listItemDescRenamed">A <strong>li-ion battery</strong> is a modern rechargeable system that uses lithium ions for charge and discharge, enabling higher energy density, faster charging, and a significantly longer life compared to traditional batteries.</div></div></li>
                <li><div class="listNumberRenamed">02</div><div><div class="listItemTitleRenamed">Consistent Performance</div><div class="listItemDescRenamed">A <strong>rechargeable lithium battery</strong> provides steady and consistent power output, making it the perfect choice for applications where reliability and operational efficiency are critical.</div></div></li>
                <li><div class="listNumberRenamed">03</div><div><div class="listItemTitleRenamed">Rigorous Quality Standards</div><div class="listItemDescRenamed">Each <strong>lithium battery pack</strong> by Indus Power Industries undergoes strict quality control checks to guarantee unmatched performance consistency, thermal stability, and maximum safety.</div></div></li>
                <li><div class="listNumberRenamed">04</div><div><div class="listItemTitleRenamed">Unmatched Long-Term Value</div><div class="listItemDescRenamed">While the <strong>lithium battery cost</strong> might be higher initially, the combination of zero maintenance, longer service life, and high efficiency provides a much better return on investment than lead-acid alternatives.</div></div></li>
            </ul>
        </div>
    </section>

    <!-- WHY LITHIUM (was section-4) -->
    <section class="sectionWhyLithiumRenamed">
        <div class="contentWrapperInner">
            <h2 class="headingWhyRenamed">Why Lithium-Ion Batteries Are the Future Of <span>Power Backup?</span></h2>
            <p class="introWhyRenamed">Many users searching for <span style="color:#f37021;font-weight:700;">lithium battery near me</span> or the <span style="color:#f37021;font-weight:700;">best lithium battery</span> are shifting to lithium technology due to its unmatched performance benefits.</p>
            <div class="gridThreeRenamed">
                <div class="cardWhyRenamed"><strong>Long Life Lithium Battery</strong><p>Significantly reduces replacement cycles, offering better long-term value.</p></div>
                <div class="cardWhyRenamed"><strong>Fast Charging Lithium Battery</strong><p>Minimizes downtime during frequent power cuts, ensuring you're always prepared.</p></div>
                <div class="cardWhyRenamed"><strong>High Capacity Lithium Battery</strong><p>Ensures extended backup for critical loads and heavy-duty appliances.</p></div>
                <div class="cardWhyRenamed"><strong>Lightweight Lithium Battery</strong><p>Reduces installation complexity, especially in rack-mounted UPS systems.</p></div>
                <div class="cardWhyRenamed"><strong>Maintenance Free Lithium Battery</strong><p>Eliminates routine water topping and corrosion issues common in older tech.</p></div>
                <div class="cardWhyRenamed"><strong>Eco Friendly Lithium Battery</strong><p>Provides a cleaner, more sustainable energy storage solution.</p></div>
            </div>
        </div>
    </section>

    <!-- section three (Backup power) -->
    <section class="sectionThreeRenamed">
        <div class="contentWrapperInner">
            <h2 class="headingThreeRenamed">Lithium-Ion Batteries For Backup <span>Power Applications</span></h2>
            <div class="textBoxRenamed"><p>A lithium battery backup system ensures continuous power for critical loads, and lithium battery replacement becomes less frequent due to extended cycle life. A lithium battery for home is ideal for modern households with appliances, while a lithium battery for office supports computers and networking equipment reliably.</p><p style="margin-top:20px;">Each lithium battery warranty offered by Indus Power Industries reflects our confidence in product durability and long-term performance.</p></div>
        </div>
    </section>

    <!-- section four (inverter / UPS cards) -->
    <section class="sectionFourCardsRenamed">
        <div class="contentWrapperInner">
            <h2 class="headingFourRenamed">Lithium Batteries For Inverter & <span>UPS Systems</span></h2>
            <div class="gridTopRenamed">
                <div class="flipCardRenamed"><div class="flipInnerRenamed"><div class="flipFrontRenamed"><div class="flipIconRenamed"><i class="fas fa-bolt"></i></div><div class="flipTitleRenamed">Lithium Battery for Inverter</div></div><div class="flipBackRenamed"><div class="flipTitleRenamed">Lithium Battery for Inverter</div><p class="flipTextRenamed">Lithium batteries are known for their high energy density and long cycle life, making them an excellent choice for inverter applications.</p></div></div></div>
                <div class="flipCardRenamed"><div class="flipInnerRenamed"><div class="flipFrontRenamed"><div class="flipIconRenamed"><i class="fas fa-lightbulb"></i></div><div class="flipTitleRenamed">Lithium Ion Battery for UPS</div></div><div class="flipBackRenamed"><div class="flipTitleRenamed">Lithium Ion Battery for UPS</div><p class="flipTextRenamed">A lithium ion battery for UPS is widely used for mission-critical systems that require instant backup power.</p></div></div></div>
                <div class="flipCardRenamed"><div class="flipInnerRenamed"><div class="flipFrontRenamed"><div class="flipIconRenamed"><i class="fas fa-battery-full"></i></div><div class="flipTitleRenamed">Lithium Battery for Power Backup</div></div><div class="flipBackRenamed"><div class="flipTitleRenamed">Lithium Battery for Power Backup</div><p class="flipTextRenamed">A lithium battery for power backup ensures uninterrupted operations in homes and businesses.</p></div></div></div>
            </div>
            <div class="gridBottomRenamed">
                <div class="flipCardRenamed"><div class="flipInnerRenamed"><div class="flipFrontRenamed"><div class="flipIconRenamed"><i class="fas fa-home"></i></div><div class="flipTitleRenamed">Lithium Battery for Home, Industrial, and Commercial UPS</div></div><div class="flipBackRenamed"><div class="flipTitleRenamed">Lithium Battery for Home, Industrial, and Commercial UPS</div><p class="flipTextRenamed">A lithium battery for home inverter offers silent and efficient performance for residential power backup.</p></div></div></div>
                <div class="flipCardRenamed"><div class="flipInnerRenamed"><div class="flipFrontRenamed"><div class="flipIconRenamed"><i class="fas fa-desktop"></i></div><div class="flipTitleRenamed">Lithium Battery for Mission-Critical Facilities</div></div><div class="flipBackRenamed"><div class="flipTitleRenamed">Lithium Battery for Mission-Critical Facilities</div><p class="flipTextRenamed">Mission-critical facilities require reliable energy solutions to prevent downtime.</p></div></div></div>
            </div>
        </div>
    </section>

    <!-- solar section (already generic, keep as is) -->
    <section class="solar-battery-section">
        <h2 class="solar-heading">Solar & Renewable <span>Energy Storage Solutions</span></h2>
        <div class="solar-cards">
            <div class="solar-card"><div class="solar-icon"><i class="fas fa-bolt"></i></div><h3>Residential & Industrial Solar</h3><p>A <strong>lithium battery for solar applications</strong> ensures higher efficiency and longer usable energy. Ideal for <em>residential</em> and <em>industrial solar systems</em>.</p></div>
            <div class="solar-card"><div class="solar-icon"><i class="fas fa-solar-panel"></i></div><h3>Solar Inverters & Power Plants</h3><p><strong>Lithium ion batteries for solar inverters</strong> support smooth energy conversion, while <strong>lithium batteries for solar power plants</strong> enable large-scale energy storage.</p></div>
            <div class="solar-card"><div class="solar-icon"><i class="fas fa-home"></i></div><h3>Rooftop & Off-Grid Solutions</h3><p>Compact and efficient <strong>lithium batteries for rooftop solar</strong> and <strong>off-grid solar</strong> batteries ensure energy independence and reliability.</p></div>
            <div class="solar-card"><div class="solar-icon"><i class="fas fa-battery-full"></i></div><h3>Hybrid & Backup Systems</h3><p><strong>Lithium batteries for hybrid solar systems</strong> deliver consistent energy storage and backup, making renewable installations reliable.</p></div>
        </div>
    </section>

    <!-- section five (industrial applications) -->
    <section class="sectionFiveRenamed">
        <div class="contentWrapperInner">
            <h2 class="headingFiveRenamed">Industrial & Commercial Lithium-Ion <span>Battery Applications</span></h2>
            <div class="featureListRenamed">
                <div class="featureItemRenamed"><span class="featureIconRenamed"><i class="fas fa-industry"></i></span><div class="featureTextRenamed"><h4>Industrial Lithium-Ion Battery</h4><p class="featureDescRenamed">Designed for continuous operation in demanding environments, ensuring consistent performance for industrial operations.</p></div></div>
                <div class="featureItemRenamed"><span class="featureIconRenamed"><i class="fas fa-building"></i></span><div class="featureTextRenamed"><h4>Commercial Lithium Battery</h4><p class="featureDescRenamed">Supports offices, malls, and commercial complexes with uninterrupted power for everyday operations.</p></div></div>
                <div class="featureItemRenamed"><span class="featureIconRenamed"><i class="fas fa-cogs"></i></span><div class="featureTextRenamed"><h4>Factory & Manufacturing Plant</h4><p class="featureDescRenamed">Ensures uninterrupted production cycles for factories and manufacturing units with reliable battery solutions.</p></div></div>
                <div class="featureItemRenamed"><span class="featureIconRenamed"><i class="fas fa-robot"></i></span><div class="featureTextRenamed"><h4>Heavy Equipment & Automation</h4><p class="featureDescRenamed">Supports machinery, CNC machines, and automation setups for efficient industrial performance.</p></div></div>
                <div class="featureItemRenamed"><span class="featureIconRenamed"><i class="fas fa-hospital"></i></span><div class="featureTextRenamed"><h4>Healthcare Facilities</h4><p class="featureDescRenamed">Reliable power for hospitals and medical equipment, ensuring patient safety and uninterrupted operations.</p></div></div>
                <div class="featureItemRenamed"><span class="featureIconRenamed"><i class="fas fa-flask"></i></span><div class="featureTextRenamed"><h4>Research & Laboratory</h4><p class="featureDescRenamed">Supports laboratory and testing equipment, providing stable and continuous energy for research environments.</p></div></div>
                <div class="featureItemRenamed"><span class="featureIconRenamed"><i class="fas fa-building"></i></span><div class="featureTextRenamed"><h4>High-Rise Buildings</h4><p class="featureDescRenamed">Power solutions for elevators and lift inverters in high-rise buildings, ensuring safety and convenience.</p></div></div>
            </div>
        </div>
    </section>

    <!-- section six (orbit tech) -->
    <section class="orbitSectionRenamed">
        <div class="contentWrapperInner">
            <h2 class="headingSixRenamed">Advanced Technology & <span>Technical Features</span></h2>
            <div class="orbitContainerRenamed">
                <svg class="orbitSvgRenamed"><line x1="15%" y1="15%" x2="50%" y2="50%"/><line x1="85%" y1="15%" x2="50%" y2="50%"/><line x1="5%" y1="50%" x2="50%" y2="50%"/><line x1="95%" y1="50%" x2="50%" y2="50%"/><line x1="15%" y1="85%" x2="50%" y2="50%"/><line x1="85%" y1="85%" x2="50%" y2="50%"/></svg>
                <div class="orbitCoreRenamed"><i class="fas fa-microchip"></i><span>Engineering<br>Excellence</span></div>
                <div class="nodeFeatureRenamed n1Renamed"><div class="nodeHeaderRenamed"><div class="nodeIconRenamed"><i class="fas fa-battery-full"></i></div><div class="nodeTitleRenamed">Modern Lithium Tech</div></div><div class="nodeDescRenamed">Ensures superior performance and safety with advanced lithium battery solutions.</div></div>
                <div class="nodeFeatureRenamed n2Renamed"><div class="nodeHeaderRenamed"><div class="nodeIconRenamed"><i class="fas fa-shield-alt"></i></div><div class="nodeTitleRenamed">Intelligent BMS</div></div><div class="nodeDescRenamed">Battery Management System ensures protection and efficient cell balancing.</div></div>
                <div class="nodeFeatureRenamed n3Renamed"><div class="nodeHeaderRenamed"><div class="nodeIconRenamed"><i class="fas fa-bolt"></i></div><div class="nodeTitleRenamed">High Energy Density</div></div><div class="nodeDescRenamed">Provides more power in compact space for efficient energy systems.</div></div>
                <div class="nodeFeatureRenamed n4Renamed"><div class="nodeHeaderRenamed"><div class="nodeIconRenamed"><i class="fas fa-redo"></i></div><div class="nodeTitleRenamed">Deep Cycle Life</div></div><div class="nodeDescRenamed">Supports repeated charge-discharge cycles with long battery life.</div></div>
                <div class="nodeFeatureRenamed n5Renamed"><div class="nodeHeaderRenamed"><div class="nodeIconRenamed"><i class="fas fa-tachometer-alt"></i></div><div class="nodeTitleRenamed">Fast Recharge</div></div><div class="nodeDescRenamed">Optimized for rapid charging and high discharge performance.</div></div>
                <div class="nodeFeatureRenamed n6Renamed"><div class="nodeHeaderRenamed"><div class="nodeIconRenamed"><i class="fas fa-check-circle"></i></div><div class="nodeTitleRenamed">Safety & Efficiency</div></div><div class="nodeDescRenamed">Advanced safety design with high efficiency and thermal stability.</div></div>
            </div>
        </div>
    </section>

    <!-- section seven (voltage) -->
    <section class="sectionSevenRenamed">
        <div class="contentWrapperInner">
            <h2 class="headingSevenRenamed">Voltage, Capacity, & <span>Modular Design</span></h2>
            <div class="gridFourColRenamed">
                <div class="cardSpecRenamed"><h2>Voltage Systems</h2><ul class="specListRenamed"><li><span>Low Voltage</span><b>12V / 24V</b></li><li><span>Medium Voltage</span><b>48V</b></li><li><span>High Performance</span><b>72V</b></li></ul></div>
                <div class="cardSpecRenamed"><h2>Capacity Options</h2><ul class="specListRenamed"><li><span>Standard</span><b>100Ah</b></li><li><span>Extended</span><b>150Ah</b></li><li><span>High Capacity</span><b>200Ah</b></li></ul></div>
                <div class="cardSpecRenamed"><h2>Scalable Design</h2><p>Modular systems offering flexible power density upgrades.</p><div style="margin-top:auto;display:flex;gap:10px;"><span class="badgeRenamed">Modular</span><span class="badgeRenamed">Scalable</span></div></div>
                <div class="cardSpecRenamed"><h3>Industrial Apps</h3><p>Engineered for Industrial UPS and heavy-duty infrastructure.</p><div style="margin-top:auto;display:flex;gap:10px;"><span class="badgeRenamed">Heavy Duty</span><span class="badgeRenamed">Reliable</span></div></div>
            </div>
        </div>
    </section>

    <!-- section eight (EV timeline) -->
    <section class="sectionEightRenamed">
        <div class="contentWrapperInner">
            <h2 class="headingEightRenamed">EV & <span>Mobility Applications</span></h2>
            <div class="timelineRenamed">
                <div class="timelineItemRenamed leftRenamed"><div class="iconCircleRenamed"><i class="fas fa-car"></i></div><div class="timelineContentRenamed"><h3>Electric Vehicle</h3><p>Advanced lithium solutions for high-performance electric vehicles.</p></div></div>
                <div class="timelineItemRenamed rightRenamed"><div class="iconCircleRenamed"><i class="fas fa-shuttle-van"></i></div><div class="timelineContentRenamed"><h3>E-Rickshaw</h3><p>Durable batteries for reliable urban transport and e-rickshaws.</p></div></div>
                <div class="timelineItemRenamed leftRenamed"><div class="iconCircleRenamed"><i class="fas fa-motorcycle"></i></div><div class="timelineContentRenamed"><h3>Electric Scooter</h3><p>Ensures smooth rides and long-range battery life for scooters.</p></div></div>
                <div class="timelineItemRenamed rightRenamed"><div class="iconCircleRenamed"><i class="fas fa-bicycle"></i></div><div class="timelineContentRenamed"><h3>Electric Bike</h3><p>Eco-friendly mobility with efficient lithium power packs.</p></div></div>
                <div class="timelineItemRenamed leftRenamed"><div class="iconCircleRenamed"><i class="fas fa-industry"></i></div><div class="timelineContentRenamed"><h3>Forklift</h3><p>Heavy-duty power for industrial forklifts and warehouse tools.</p></div></div>
                <div class="timelineItemRenamed rightRenamed"><div class="iconCircleRenamed"><i class="fas fa-robot"></i></div><div class="timelineContentRenamed"><h3>AGV</h3><p>Supporting automated vehicles with smart lithium technology.</p></div></div>
            </div>
        </div>
    </section>

    <!-- section nine (slider) -->
    <section class="sectionNineRenamed">
        <div class="appBgRenamed"></div>
        <div class="contentWrapperNineRenamed">
            <h2 class="headingNineRenamed">Manufacturing, Service, & <span>Support In India</span></h2>
            <div class="sliderWrapperRenamed">
                <button class="btnSliderRenamed btnLeftRenamed" onclick="moveRenamed('left')">&#10094;</button>
                <div class="cardsWrapperRenamed">
                    <div class="cardSlideRenamed current--card" onclick="handleCardClickRenamed(this)"><h2>Manufacturing</h2><p>As a <b>trusted lithium battery manufacturer</b>, we are recognized as a <b>lithium ion battery manufacturer India</b>. Customers rely on us as a <b>lithium battery supplier</b>, <b>lithium battery dealer</b>, and <b>lithium battery distributor</b> with pan-India reach.</p></div>
                    <div class="cardSlideRenamed next--card" onclick="handleCardClickRenamed(this)"><h2>Service</h2><p>We operate as a <b>lithium battery exporter India</b>, <b>lithium battery OEM</b>, and established <b>lithium battery company</b> offering <b>lithium battery installation</b>, <b>lithium battery service</b>, <b>lithium battery maintenance</b>, and <b>lithium battery AMC</b>.</p></div>
                    <div class="cardSlideRenamed previous--card" onclick="handleCardClickRenamed(this)"><h2>Support</h2><p>Support includes <b>lithium battery repair</b>, <b>lithium battery spare parts</b>, and <b>lithium battery technical support</b>.</p></div>
                </div>
                <button class="btnSliderRenamed btnRightRenamed" onclick="moveRenamed('right')">&#10095;</button>
            </div>
        </div>
    </section>

    <!-- section ten -->
    <section class="sectionTenRenamed">
        <div class="contentWrapperInner">
            <h2 class="headingTenRenamed">Why Choose Power <span>Industries Pvt Ltd?</span></h2>
            <div class="gridTwoRenamed">
                <div class="cardHoverRenamed"><div class="iconCircleNewRenamed shadow-lg"><svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:28px;height:28px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></div><p class="text-slate-900 text-xl leading-relaxed">We deliver the best lithium ion battery India with proven reliability. Each reliable lithium battery is designed as an industrial grade lithium battery and commercial grade lithium battery, optimized as a lithium battery for Indian conditions.</p></div>
                <div class="cardHoverRenamed"><div class="iconCircleNewRenamed shadow-lg"><svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width:28px;height:28px;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg></div><p class="text-slate-900 text-xl leading-relaxed">Our offerings serve as a complete lithium battery power solution, lithium battery backup solution, and lithium battery energy solution, ensuring a lithium battery for uninterrupted power through an advanced lithium ion battery system.</p></div>
            </div>
        </div>
    </section>
</div>

<script>
function moveRenamed(direction) {
    const current = document.querySelector('.current--card');
    const previous = document.querySelector('.previous--card');
    const next = document.querySelector('.next--card');
    if (current) current.classList.remove('current--card');
    if (previous) previous.classList.remove('previous--card');
    if (next) next.classList.remove('next--card');
    if (direction === 'right') {
        if (current) current.classList.add('previous--card');
        if (next) next.classList.add('current--card');
        if (previous) previous.classList.add('next--card');
    } else {
        if (current) current.classList.add('next--card');
        if (previous) previous.classList.add('current--card');
        if (next) next.classList.add('previous--card');
    }
}
function handleCardClickRenamed(card) {
    if (card.classList.contains('next--card')) moveRenamed('right');
    else if (card.classList.contains('previous--card')) moveRenamed('left');
}
</script>

<?php include('footer.php'); ?>

</body>
</html>