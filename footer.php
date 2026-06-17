<?php
// footer.php
?>

<!-- Make sure this is in your header.php or before the footer include -->
<!-- Font Awesome CDN - Place this in the <head> section of your website -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<footer class="site-footer">
    <div class="footer-container">

        <!-- About Us -->
        <div class="footer-column animate-column">
            <h3>About Us</h3>
            <p class="animate-text">
                INDUS Power Industries is a well-known Brand in Mumbai region for its quality products and excellent services. Our strength lies in our core values and ultimate customer satisfaction.
            </p>
        </div>

        <!-- Quick Links -->
        <div class="footer-column animate-column">
            <h3>Quick Links</h3>
            <ul class="animate-links">
                <li><a href="index.php"><i class="fas fa-angle-right"></i> Home</a></li>
                <li><a href="about.php"><i class="fas fa-angle-right"></i> About</a></li>
                <li><a href="exhibitions-photos.php"><i class="fas fa-angle-right"></i> Gallery</a></li>
                <li><a href="contact.php"><i class="fas fa-angle-right"></i> Contact</a></li>
            </ul>
        </div>

        <!-- Products -->
        <div class="footer-column animate-column">
            <h3>Products</h3>
            <ul class="animate-links">
                <li><a href="offline-ups-manufacturers-india.php"><i class="fas fa-angle-right"></i> Offline UPS</a></li>
                <li><a href="online-ups-manufacturer-india.php"><i class="fas fa-angle-right"></i> Online UPS</a></li>
                <li><a href="stabilizers-manufacturer-india.php"><i class="fas fa-angle-right"></i> Stabilizer</a></li>
                <li><a href="inverter-batteries-manufacturer-india.php"><i class="fas fa-angle-right"></i> Inverter Batteries</a></li>
                <li><a href="ups-and-inverter-battery-amc-manufacturer-india.php"><i class="fas fa-angle-right"></i> UPS & Inverter Battery AMC</a></li>
                <li><a href="solar-power.php"><i class="fas fa-angle-right"></i> Solar Power</a></li>
            </ul>
        </div>

        <!-- Contact Us -->
        <div class="footer-column animate-column">
            <h3>Contact Us</h3>
            <div class="contact-info">
                <p class="contact-item"><i class="fas fa-phone-alt"></i> <a href="tel:+917039525555">+91 7039525555</a> / <a href="tel:+917039526666">7039526666</a></p>
                <p class="contact-item"><i class="fas fa-envelope"></i> <a href="mailto:sales@indusups.com">sales@indusups.com</a></p>
                <p class="contact-item"><i class="fas fa-map-marker-alt"></i> <a href="add">W-246/1, M.I.D.C., Phase II, Beside Abhinav Vidyalaya, Dombivli (E), Dist. Thane, Maharashtra, India - 421203</a></p>
            </div>
        </div>

    </div>

    <div class="footer-bottom animate-bottom">
        <p>© 2025 <strong>INDUS Power Industries</strong>. All Rights Reserved. Powered by <a href="https://sednainfosystems.com/" target="_blank">SednaTech</a>.</p>
    </div>
</footer>

<!-- Footer CSS with Animations -->
<style>
/* Base Styles */
.site-footer {
    background-color: #ffffff;
    color: #00134D;
    font-family: 'Montserrat', Arial, sans-serif;
    padding: 40px 20px 20px 20px;
    border-top: 4px solid #f56d1f;
    position: relative;
    overflow: hidden;
}

/* Animated background effect */
.site-footer::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(245,109,31,0.03) 0%, rgba(255,255,255,0) 70%);
    animation: rotate 20s linear infinite;
    z-index: 0;
}

@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

.footer-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: auto;
    position: relative;
    z-index: 1;
}

.footer-column {
    width: 23%;
    margin-bottom: 20px;
    transition: transform 0.3s ease;
}

/* Column hover animation */
.footer-column:hover {
    transform: translateY(-5px);
}

.footer-column h3 {
    font-size: 18px;
    font-weight: 700;
    color: #00134D;
    margin-bottom: 30px;
    position: relative;
    display: inline-block;
    transition: color 0.3s ease;
}

.footer-column h3::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -5px;
    width: 30px;
    height: 3px;
    background-color: #f56d1f;
    transition: width 0.3s ease;
}

.footer-column:hover h3::after {
    width: 50px;
}

.footer-column p {
    font-size: 14px;
    line-height: 1.7;
    color: #333;
    margin-bottom: 10px;
    transition: color 0.3s ease;
}

.footer-column p a {
    color: #00134D;
    text-decoration: none;
    transition: all 0.3s ease;
    position: relative;
    display: inline-block;
}

/* Contact item animations */
.contact-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 15px;
    transition: transform 0.3s ease;
}

.contact-item:hover {
    transform: translateX(5px);
}

.contact-item i {
    color: #f56d1f;
    margin-right: 10px;
    width: 20px;
    text-align: center;
    transition: all 0.3s ease;
}

.contact-item:hover i {
    transform: scale(1.2);
    color: #00134D;
}

.contact-item a, .contact-item span {
    flex: 1;
    transition: color 0.3s ease;
}

.contact-item a:hover {
    color: #f56d1f;
}

/* List styles */
.footer-column ul {
    list-style: none;
    padding: 0;
}

.footer-column ul li {
    margin-bottom: 10px;
    transition: all 0.3s ease;
    position: relative;
    left: 0;
}

.footer-column ul li:hover {
    left: 8px;
}

.footer-column ul li a {
    color: #00134D;
    text-decoration: none;
    font-size: 14px;
    transition: all 0.3s ease;
    display: inline-block;
    position: relative;
}

.footer-column ul li a:hover {
    color: #f56d1f;
}

.footer-column ul li a i {
    color: #f56d1f;
    margin-right: 8px;
    width: 16px;
    text-align: center;
    transition: all 0.3s ease;
}

.footer-column ul li:hover a i {
    transform: rotate(90deg);
    color: #00134D;
}

/* Footer bottom */
.footer-bottom {
    text-align: center;
    border-top: 1px solid #eee;
    font-size: 13px;
    color: #666;
    position: relative;
    z-index: 1;
    transition: all 0.3s ease;
}

.footer-bottom:hover {
    border-top-color: #f56d1f;
}

.footer-bottom a {
    color: #00134D;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.3s ease;
    position: relative;
    display: inline-block;
}

.footer-bottom a:hover {
    color: #f56d1f;
    transform: scale(1.05);
}

/* Pulse animation for important links */
.footer-bottom strong {
    transition: all 0.3s ease;
    display: inline-block;
}

.footer-bottom:hover strong {
    animation: pulse 1s ease infinite;
    color: #f56d1f;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

/* Entrance animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-column {
    animation: fadeInUp 0.6s ease forwards;
    opacity: 0;
}

.footer-column:nth-child(1) { animation-delay: 0.1s; }
.footer-column:nth-child(2) { animation-delay: 0.3s; }
.footer-column:nth-child(3) { animation-delay: 0.5s; }
.footer-column:nth-child(4) { animation-delay: 0.7s; }

.animate-bottom {
    animation: fadeInUp 0.6s ease 0.9s forwards;
    opacity: 0;
}

/* Shine effect on hover */
.footer-column {
    position: relative;
    overflow: hidden;
}

.footer-column::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -60%;
    width: 20%;
    height: 200%;
    background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,0.3) 50%, rgba(255,255,255,0) 100%);
    transform: rotate(25deg);
    transition: all 0.6s ease;
    opacity: 0;
}

.footer-column:hover::after {
    left: 120%;
    opacity: 1;
}

/* Responsive */
@media (max-width: 1024px) {
    .footer-column { 
        width: 48%; 
    }
}

@media (max-width: 768px) {
    .footer-container { 
        flex-direction: column; 
        text-align: center; 
    }
    .footer-column { 
        width: 100%; 
        margin-bottom: 30px; 
    }
    .footer-column h3::after { 
        left: 50%; 
        transform: translateX(-50%); 
    }
    .footer-column i {
        display: inline-block;
        width: auto;
    }
    .contact-item {
        justify-content: center;
        text-align: left;
    }
    .footer-column ul li:hover {
        left: 0;
    }
    .footer-column:hover {
        transform: translateY(0);
    }
}
</style>







<!-- WhatsApp Floating Button -->
<style>
    /* COMMON STYLE */
.floating-whatsapp,
.scroll-top{
    position: fixed;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    color: #fff;
    cursor: pointer;
    z-index: 999;
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
    transition: all 0.4s ease;
}

/* WhatsApp Button */
.floating-whatsapp{
    bottom: 90px;
    right: 25px;
    background: linear-gradient(135deg,#25D366,#128C7E);
    animation: pulse 2s infinite;
    text-decoration: none;
}

.floating-whatsapp:hover{
    transform: scale(1.1);
    box-shadow: 0 10px 25px rgba(0,0,0,0.35);
}

/* Scroll Top Button */
.scroll-top{
    bottom: 20px;
    right: 25px;
    background: linear-gradient(135deg,#ff7b00,#ff3c00);
    border: none;
    opacity: 0;
    visibility: hidden;
}

.scroll-top.show{
    opacity: 1;
    visibility: visible;
}

.scroll-top:hover{
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.35);
}

/* Pulse Animation */
@keyframes pulse{
    0%{box-shadow: 0 0 0 0 rgba(37,211,102,0.6);}
    70%{box-shadow: 0 0 0 15px rgba(37,211,102,0);}
    100%{box-shadow: 0 0 0 0 rgba(37,211,102,0);}
}

</style>


<!-- Scroll To Top Button -->
<button class="scroll-top" id="scrollTopBtn">
   <i class="fas fa-arrow-up"></i>
</button>

<a href="https://wa.me/918422888843" 
   class="floating-whatsapp" 
   target="_blank">
   <i class="fab fa-whatsapp"></i>
</a>

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>





<script>
    const scrollTopBtn = document.getElementById("scrollTopBtn");

    window.addEventListener("scroll", function(){
        if(window.scrollY > 300){
            scrollTopBtn.classList.add("show");
        } else{
            scrollTopBtn.classList.remove("show");
        }
    });

    scrollTopBtn.addEventListener("click", function(){
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>
