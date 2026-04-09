<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>
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
        <h1>Contact Us</h1>
        <div class="indus-breadcrumb-nav">
            <a href="#">Home</a> 
            &nbsp;»&nbsp; 
 
            <span>Contact Us</span>
        </div>
    </div>
</section>
<!-- Slider End -->










<!--====================== Address +  Form Section ===============--> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<style>
    /* Container Styling */
    .contact-wrapper {
        max-width: 1200px;
        margin: 40px auto;
        padding: 20px;
        font-family: 'Segoe UI', Arial, sans-serif;
        box-sizing: border-box;
    }

    /* Layout Grid */
    .contact-wrapper .layout-grid {
        display: grid;
        grid-template-columns: 1.2fr 0.8fr;
        gap: 30px;
        align-items: stretch;
    }

    /* Info Section (Left side) */
    .contact-wrapper .info-section {
        display: flex;
        flex-direction: column;
    }

    .contact-wrapper .info-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
        height: 100%;
    }

    /* Card Styling */
    .contact-wrapper .info-card {
        background-color: #ffffff;
        padding: 30px 15px;
        text-align: center;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        border-bottom: 4px solid #f37021;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .contact-wrapper .icon-box {
        background-color: #f37021;
        color: #ffffff;
        width: 50px;
        height: 50px;
        margin: 0 auto 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        font-size: 20px;
        flex-shrink: 0;
    }

    .contact-wrapper .card-title {
        font-size: 14px;
        color: #003366;
        margin-bottom: 10px;
        font-weight: 700;
    }

    .contact-wrapper .card-text {
        font-size: 13px;
        line-height: 1.5;
        color: #555555;
        margin: 0;
    }

    .contact-wrapper .email-text {
        color: #f37021;
        font-weight: 600;
        margin-top: 8px;
        font-size: 13px;
    }

    /* Form Section (Right side) */
    .contact-wrapper .form-section {
        background-color: #ffffff;
        padding: 35px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .contact-wrapper .form-heading {
        color: #003366;
        margin-top: 0;
        margin-bottom: 8px;
        font-size: 24px;
    }

    .contact-wrapper .form-subtext {
        font-size: 14px;
        color: #888888;
        margin-bottom: 20px;
    }

    .contact-wrapper .field-group {
        margin-bottom: 15px;
        position: relative;
    }

    .contact-wrapper .field-label {
        display: block;
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 6px;
        color: #333333;
    }

    .contact-wrapper .input-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #dddddd;
        border-radius: 5px;
        font-size: 14px;
        background-color: #fafafa;
        box-sizing: border-box;
        transition: border-color 0.3s;
    }

    /* Validation Tooltip Styling */
    .input-popup {
        position: absolute;
        top: -35px;
        left: 0;
        background-color: #e74c3c;
        color: white;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 11px;
        font-weight: bold;
        display: none;
        z-index: 100;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        white-space: nowrap;
    }

    .input-popup::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 15px;
        border-width: 5px;
        border-style: solid;
        border-color: #e74c3c transparent transparent transparent;
    }

    .invalid-field {
        border-color: #e74c3c !important;
    }

    .contact-wrapper .submit-action-btn {
        width: 100%;
        background-color: #f37021;
        color: white;
        border: none;
        padding: 12px;
        border-radius: 5px;
        font-size: 15px;
        font-weight: bold;
        cursor: pointer;
        margin-top: 5px;
        transition: background 0.3s;
    }

    .contact-wrapper .submit-action-btn:hover {
        background-color: #d65d18;
    }

    /* --- SUCCESS POPUP OVERLAY --- */
    .success-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: none; /* Hidden by default */
        align-items: center;
        justify-content: center;
        z-index: 1000;
    }

    .success-content {
        background: white;
        padding: 40px;
        border-radius: 12px;
        text-align: center;
        max-width: 400px;
        width: 90%;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        animation: slideIn 0.3s ease-out;
    }

    @keyframes slideIn {
        from { transform: translateY(-20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    .success-content i {
        font-size: 50px;
        color: #2ecc71;
        margin-bottom: 20px;
    }

    .success-content h2 {
        color: #003366;
        margin: 0 0 10px 0;
    }

    .success-content p {
        color: #555;
        margin-bottom: 25px;
    }

    .close-popup-btn {
        background-color: #003366;
        color: white;
        border: none;
        padding: 10px 25px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 600;
    }

    /* --- RESPONSIVE MOBILE VIEW --- */
    @media (max-width: 768px) {
        .contact-wrapper {
            padding: 15px;
            margin: 20px auto;
        }
        
        /* Stack the Info section and Form section */
        .contact-wrapper .layout-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        /* Stack cards in a single column */
        .contact-wrapper .info-grid {
            grid-template-columns: 1fr;
        }

        .contact-wrapper .info-card {
            padding: 20px;
        }

        .contact-wrapper .form-section {
            padding: 25px;
        }

        .contact-wrapper .form-heading {
            font-size: 20px;
        }
    }
</style>

<div class="success-overlay" id="successOverlay">
    <div class="success-content">
        <i class="fa-solid fa-circle-check"></i>
        <h2>Thank You!</h2>
        <p>Your request has been submitted successfully. We will get back to you soon.</p>
        <button class="close-popup-btn" id="closePopup">Close</button>
    </div>
</div>

<div class="contact-wrapper">
    <div class="layout-grid">
        
        <section class="info-section">
            <div class="info-grid">
                <div class="info-card">
                    <div class="icon-box"><i class="fa-solid fa-map-location-dot"></i></div>
                    <h3 class="card-title">OFFICE ADDRESS</h3>
                    <p class="card-text">W-246/1, M.I.D.C., Phase II, Beside Abhinav Vidyalaya, Dombivli (E), Dist. Thane, Maharashtra, India - 421203.</p>
                </div>
                <div class="info-card">
                    <div class="icon-box"><i class="fa-solid fa-phone-volume"></i></div>
                    <h3 class="card-title">FOR SALES</h3>
                    <p class="card-text">7039 52 55 55 / 7039 52 66 66</p>
                    <p class="email-text">sales@indusups.com</p>
                </div>
                <div class="info-card">
                    <div class="icon-box"><i class="fa-solid fa-industry"></i></div>
                    <h3 class="card-title">FACTORY ADDRESS</h3>
                    <p class="card-text">Plot E-4, MIDC, Murbad MIDC, Near Murbad Bus Stop, Murbad, Thane - 421 401</p>
                </div>
                <div class="info-card">
                    <div class="icon-box"><i class="fa-solid fa-headset"></i></div>
                    <h3 class="card-title">FOR HELPDESK</h3>
                    <p class="card-text">8108 08 18 18</p>
                    <p class="email-text">helpdesk@indusups.com</p>
                </div>
            </div>
        </section>

        <section class="form-section">
            <div class="form-container">
                <h2 class="form-heading">Get In Touch</h2>
                <p class="form-subtext">Fill out the form below to register your inquiry.</p>
                
                <form class="contact-form" id="contactForm">
                    <div class="field-group">
                        <label class="field-label">Full Name</label>
                        <div id="nameValidationPopup" class="input-popup">Characters only, please!</div>
                        <input type="text" id="fullName" class="input-control" placeholder="Enter your name" required>
                    </div>

                    <div class="field-group">
                        <label class="field-label">Email Address</label>
                        <div id="emailValidationPopup" class="input-popup">Only @gmail.com addresses allowed!</div>
                        <input type="email" id="emailAddress" class="input-control" placeholder="Enter your gmail" required>
                    </div>

                    <div class="field-group">
                        <label class="field-label">Subject</label>
                        <select class="input-control">
                            <option>Sales Inquiry</option>
                            <option>Technical Support</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class="field-group">
                        <label class="field-label">Message</label>
                        <textarea class="input-control" rows="4" placeholder="How can we help?" required></textarea>
                    </div>

                    <button type="submit" class="submit-action-btn">Submit Request</button>
                </form>
            </div>
        </section>
        
    </div>
</div>



<script>
    const fullNameInput = document.getElementById('fullName');
    const namePopup = document.getElementById('nameValidationPopup');
    const emailInput = document.getElementById('emailAddress');
    const emailPopup = document.getElementById('emailValidationPopup');
    const contactForm = document.getElementById('contactForm');
    const successOverlay = document.getElementById('successOverlay');
    const closeBtn = document.getElementById('closePopup');

    // 1. Name Validation
    fullNameInput.addEventListener('input', function() {
        const charOnlyRegex = /^[a-zA-Z\s]*$/;
        if (!charOnlyRegex.test(this.value)) {
            namePopup.style.display = 'block';
            this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
            setTimeout(() => { namePopup.style.display = 'none'; }, 2000);
        } else {
            namePopup.style.display = 'none';
        }
    });

    // 2. Email Validation Function
    function validateGmail() {
        const emailValue = emailInput.value.toLowerCase();
        if (emailValue !== "" && !emailValue.endsWith('@gmail.com')) {
            emailPopup.style.display = 'block';
            emailInput.classList.add('invalid-field');
            return false;
        } else {
            emailPopup.style.display = 'none';
            emailInput.classList.remove('invalid-field');
            return true;
        }
    }

    emailInput.addEventListener('blur', validateGmail);
    emailInput.addEventListener('input', function() {
        if(this.value.toLowerCase().endsWith('@gmail.com')) {
            emailPopup.style.display = 'none';
            emailInput.classList.remove('invalid-field');
        }
    });

    // 3. Form Submission Handling
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault(); // Stop actual page refresh
        
        if (validateGmail()) {
            // Show the success popup
            successOverlay.style.display = 'flex';
            // Optional: Reset form after success
            contactForm.reset();
        } else {
            emailInput.focus();
        }
    });

    // 4. Close Popup Logic
    closeBtn.addEventListener('click', () => {
        successOverlay.style.display = 'none';
    });
</script>

























<!-- Google map --> 
  
<style>
.map-section {
  width: 100%;
  overflow: hidden;
  line-height: 0;
}

.map-container {
  position: relative;
  width: 100%;
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
}

.map-container iframe {
  display: block;
  width: 100%;
  filter: saturate(1.1);
}

@media (max-width: 768px) {
  .map-container iframe {
    height: 350px;
  }
}
</style>

<section class="map-section">
  <div class="map-container">
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.75734066366!2d73.0985317!3d19.205798199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be79584e889cdf5%3A0x9db691feca6a84a7!2sIndus%20Power%20Industries!5e0!3m2!1sen!2sin!4v1771828256292!5m2!1sen!2sin" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>


<br>

<?php include ('footer.php');?>

</body>
</html>