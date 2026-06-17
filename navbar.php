<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer files - adjust path as needed
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Initialize response array
$response = ['success' => false, 'message' => ''];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    // Honeypot anti-spam
    if (!empty($_POST['website'])) {
        $response['message'] = 'Spam detected';
        echo json_encode($response);
        exit;
    }

    // Get and sanitize form data
    $name    = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email   = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone   = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        $response['message'] = 'All fields are required';
        echo json_encode($response);
        exit;
    }

    // Validate phone number (exactly 10 digits)
    if (!preg_match('/^[0-9]{10}$/', $phone)) {
        $response['message'] = 'Please enter a valid 10-digit phone number';
        echo json_encode($response);
        exit;
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = 'Please enter a valid email address';
        echo json_encode($response);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP Settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sednainfo5@gmail.com'; // Your Gmail
        $mail->Password   = 'mfzm afcu fwma latu';  // Your App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->CharSet    = 'UTF-8';
        $mail->SMTPDebug  = 0; // Set to 0 for production

        // Headers
        $mail->setFrom('sednainfo5@gmail.com', 'INDUS Power Industries');
        $mail->addAddress('sednainfo5@gmail.com', 'INDUS Power'); // Your receiving email
        $mail->addReplyTo($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'INDUS Power Industries - New Enquiry from ' . $name;

        // HTML Email Body
        $mail->Body = "
        <!DOCTYPE html>
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; }
                .container { max-width: 600px; margin: 0 auto; background: #f9f9f9; }
                .header { background: #f37021; color: white; padding: 20px; text-align: center; }
                .header h2 { margin: 0; }
                .content { padding: 30px; background: white; }
                .field { margin-bottom: 20px; }
                .label { font-weight: bold; color: #0a1f4d; font-size: 16px; }
                .value { background: #f5f5f5; padding: 12px; border-radius: 5px; border-left: 4px solid #f37021; }
                .footer { background: #0a1f4d; color: white; padding: 15px; text-align: center; font-size: 14px; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>INDUS Power Industries - New Enquiry</h2>
                </div>
                <div class='content'>
                    <div class='field'>
                        <div class='label'>Name:</div>
                        <div class='value'>" . htmlspecialchars($name) . "</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Email:</div>
                        <div class='value'>" . htmlspecialchars($email) . "</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Phone Number:</div>
                        <div class='value'>" . htmlspecialchars($phone) . "</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Message:</div>
                        <div class='value'>" . nl2br(htmlspecialchars($message)) . "</div>
                    </div>
                </div>
                <div class='footer'>
                    <p>This enquiry was sent from INDUS Power Industries website</p>
                    <p>Received on: " . date('d-m-Y H:i:s') . "</p>
                </div>
            </div>
        </body>
        </html>
        ";

        // Plain text version
        $mail->AltBody = "New Enquiry:\n\nName: {$name}\nEmail: {$email}\nPhone: {$phone}\nMessage: {$message}";

        // Send email
        if($mail->send()) {
            $response['success'] = true;
            $response['message'] = 'Thank you! Your enquiry has been sent successfully. We will contact you soon.';
        } else {
            $response['message'] = 'Mail could not be sent. Please try again.';
        }

    } catch (Exception $e) {
        $response['message'] = 'Mail Error: ' . $mail->ErrorInfo;
        // Log error for debugging
        error_log("Mail Error: " . $mail->ErrorInfo);
    }
    
    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>INDUS Power Industries</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

<!-- Google Font: Montserrat -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
/* Your existing CSS */
body {
    margin: 0;
    font-family: 'Montserrat', sans-serif;
}

/* ================= TOP BAR ================= */
.top-bar {
    display: flex;
    width: 100%;
    height: 45px;
}

.top-left {
    background: #f37021;
    color: #fff;
    flex: 3;
    display: flex;
    align-items: center;
    padding-left: 60px;
    font-weight: 500;
    gap: 40px;
}

.top-left i {
    margin-right: 8px;
}

.top-right {
    background: #0a1f4d;
    color: #fff;
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
    font-weight: 500;
}

.top-right a {
    color: #fff;
    font-size: 16px;
    transition: 0.3s;
}

.top-right a:hover {
    color: #f37021;
}

/* ================= NAVBAR ================= */
.main-navbar {
    position: sticky;
    top: 0;
    z-index: 999;
    background: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
}

.nav-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.logo img {
    height: 90px;
}

.menu {
    display: flex;
    gap: 29px;
    font-weight: 500;
    align-items: center;
}

.menu a {
    text-decoration: none;
    color: #222;
    font-size: 15px;
    font-family: 'Montserrat';
    font-weight: 600;
}

.menu a:hover {
    color: #f37021;
}

.enquiry-btn {
    background: #f37021;
    color: #fff;
    border: none;
    padding: 8px 20px;
    font-size: 16px;
    font-weight: 500;
    border-radius: 30px;
    cursor: pointer;
    transition: 0.3s;
}

.enquiry-btn:hover {
    background: #d95f14;
}

.right-logo img {
    height: 90px;
}

/* ================= PRODUCTS DROPDOWN ================= */
.dropdown {
    position: relative;
}

.product-dropdown {
    position: absolute;
    top: 35px;
    left: 0;
    width: 260px;
    background: #e9e9e9;
    border-bottom: 4px solid #f37021;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    opacity: 0;
    visibility: hidden;
    transform: translateY(15px);
    transition: 0.3s ease;
    z-index: 999;
}

.dropdown:hover .product-dropdown {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.product-dropdown .dropdown-item {
    position: relative;
}

.product-dropdown .dropdown-item>a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 18px 25px;
    text-decoration: none;
    color: #333;
    font-size: 15px;
    font-weight: 600;
    border-bottom: 1px solid #d2d2d2;
    transition: 0.2s ease;
}

.product-dropdown .dropdown-item>a:hover {
    background: #ffffff;
    color: #f37021;
}

.product-dropdown .submenu {
    position: absolute;
    top: 0;
    left: 100%;
    width: 240px;
    background: #ffffff;
    border-bottom: 4px solid #f37021;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    opacity: 0;
    visibility: hidden;
    transform: translateX(15px);
    transition: 0.3s ease;
}

.product-dropdown .dropdown-item:hover .submenu {
    opacity: 1;
    visibility: visible;
    transform: translateX(0);
}

.product-dropdown .submenu a {
    display: block;
    padding: 16px 20px;
    font-size: 15px;
    font-weight: 500;
    border-bottom: 1px solid #eee;
    text-decoration: none;
    color: #333;
}

.product-dropdown .submenu a:hover {
    background: #f37021;
    color: #fff;
}

/* ================= POPUP ================= */
.enquiry-modal {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.7);
    justify-content: center;
    align-items: center;
    z-index: 9999;
    backdrop-filter: blur(5px);
}

.enquiry-content {
    background: #fff;
    width: 90%;
    max-width: 500px;
    padding: 40px;
    border-radius: 15px;
    position: relative;
    animation: popupFade 0.3s ease;
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
}

@keyframes popupFade {
    from {
        transform: scale(0.8);
        opacity: 0;
    }
    to {
        transform: scale(1);
        opacity: 1;
    }
}

.enquiry-content h2 {
    margin-bottom: 30px;
    text-align: center;
    color: #0a1f4d;
    font-weight: 700;
    font-size: 28px;
    position: relative;
}

.enquiry-content h2::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 3px;
    background: #f37021;
}

.enquiry-content input,
.enquiry-content textarea {
    width: 100%;
    padding: 14px;
    margin-bottom: 20px;
    border: 2px solid #e1e1e1;
    border-radius: 8px;
    font-family: 'Montserrat', sans-serif;
    font-size: 14px;
    transition: all 0.3s ease;
}

.enquiry-content input:focus,
.enquiry-content textarea:focus {
    outline: none;
    border-color: #f37021;
    box-shadow: 0 0 0 4px rgba(243,112,33,0.1);
}

.enquiry-content button {
    width: 100%;
    padding: 15px;
    background: #f37021;
    color: #fff;
    border: none;
    border-radius: 8px;
    font-weight: 700;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.enquiry-content button:hover {
    background: #d95f14;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(243,112,33,0.4);
}

.enquiry-content button:disabled {
    background: #ccc;
    cursor: not-allowed;
    transform: none;
    box-shadow: none;
}

.close-popup {
    position: absolute;
    top: 15px;
    right: 20px;
    font-size: 35px;
    cursor: pointer;
    color: #999;
    transition: all 0.3s ease;
    line-height: 1;
}

.close-popup:hover {
    color: #f37021;
    transform: rotate(90deg);
}

/* Message Styles */
.phone-error {
    color: #dc3545;
    font-size: 13px;
    margin-top: -15px;
    margin-bottom: 15px;
    display: none;
    font-weight: 500;
    padding-left: 5px;
}

.invalid-field {
    border-color: #dc3545 !important;
}

/* Success and Error Message Styles */
.success-message {
    background: linear-gradient(135deg, #84fab0 0%, #8fd3f4 100%);
    color: #155724;
    padding: 15px 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    text-align: center;
    display: none;
    font-weight: 600;
    border: none;
    animation: slideIn 0.3s ease;
    font-size: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.error-message {
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    color: #721c24;
    padding: 15px 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    text-align: center;
    display: none;
    font-weight: 600;
    border: none;
    animation: slideIn 0.3s ease;
    font-size: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.success-message i,
.error-message i {
    margin-right: 8px;
    font-size: 18px;
}

/* Spinner */
.spinner {
    display: none;
    width: 25px;
    height: 25px;
    border: 3px solid #ffffff;
    border-top: 3px solid #f37021;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    margin: 0 auto;
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

/* Honeypot field - hidden */
.honeypot {
    display: none !important;
}

/* ================= MOBILE ================= */
@media(max-width:992px) {
    .menu {
        display: none;
    }
    .nav-container {
        flex-direction: column;
        gap: 20px;
    }
    .top-bar {
        flex-direction: column;
        height: auto;
    }
    .top-left,
    .top-right {
        clip-path: none;
        justify-content: center;
        padding: 10px;
    }
    .top-left {
        flex-direction: column;
        gap: 10px;
        padding-left: 0;
        text-align: center;
    }
    .logo img,
    .right-logo img {
        height: 60px;
    }
    .product-dropdown {
        width: 220px;
    }
    .product-dropdown .submenu {
        width: 200px;
    }
}

@media(max-width:576px) {
    .enquiry-content {
        padding: 30px 20px;
    }
    .enquiry-content h2 {
        font-size: 24px;
    }
}
</style>
</head>
<body>

<!-- ================= TOP BAR =================
<div class="top-bar">
    <div class="top-left">
        <span><i class="fa-solid fa-envelope"></i> sales@indusups.com</span>
        <span><i class="fa-solid fa-phone"></i> 7039 52 55 55 / 7039 52 66 66</span>
    </div>
    <div class="top-right">
        Follow Us :
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
</div> -->

<!-- ================= NAVBAR ================= -->
<div class="main-navbar">
    <div class="container nav-container">
        <div class="logo">
            <img src="img/logo2.png" alt="INDUS Logo">
        </div>
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>

            <div class="dropdown">
                <a href="#">Products</a>
                <div class="product-dropdown">
                    <div class="dropdown-item">
                        <a href="offline-ups-manufacturers-india.php">Offline UPS <span>›</span></a>
                        <div class="submenu">
                            <a href="static-ups-inverter-manufacturer-india.php">Static UPS Inverter</a>
                            <a href="lift-ups-inverter-manufacturer-india.php">Lift UPS Inverter</a>
                            <a href="home-ups-inverter-manufacturer-india.php">Home UPS Inverter</a>
                            <a href="sine-wave-ups-inverter-manufacturer-india.php">Sine Wave UPS Inverter</a>
                        </div>
                    </div>
                    <div class="dropdown-item">
                        <a href="online-ups-manufacturer-india.php">Online UPS <span>›</span></a>
                        <div class="submenu">
                            <a href="high-frequency-online-ups-inverter-manufacturer-india.php">High Frequency Online <br> UPS Inverter</a>
                            <a href="low-frequency-online-ups-inverter-manufacturer-india.php">Low Frequency Online <br> UPS Inverter</a>
                        </div>
                    </div>
                    <div class="dropdown-item">
                        <a href="stabilizers-manufacturer-india.php">Stabilizers <span>›</span></a>
                        <div class="submenu">
                            <a href="air-cooled-voltage-stabilizer-manufacturer-india.php">Air-Cooled Voltage Stabilizer</a>
                            <a href="oil-cooled-voltage-stabilizer-manufacturer-india.php">Oil Cooled Voltage Stabilizer</a>
                        </div>
                    </div>
                    <div class="dropdown-item">
                        <a href="inverter-batteries-manufacturer-india.php">Inverter Batteries <span>›</span></a>
                        <div class="submenu">
                            <a href="lithium-ion-batteries-manufacturer-india.php">Lithium-Ion Batteries</a>
                            <a href="tall-tubular-inverter-battery-manufacturer-india.php">Tall Tubular Inverter Battery</a>
                            <a href="short-tubular-inverter-battery-manufacturer-india.php">Short Tubular Inverter <br> Battery</a>
                        </div>
                    </div>
                    <div class="dropdown-item">
                        <a href="ups-and-inverter-battery-amc-manufacturer-india.php">UPS And Inverter <br> Battery AMC <span>›</span></a>
                        <div class="submenu">
                            <a href="standard-amc-inverter-and-battery-manufacturer-india.php">Standard AMC Inverter <br> and Battery</a>
                            <a href="all-inclusive-amc-inverter-and-battery-manufacturer-india.php">All-Inclusive AMC for <br> Inverter and Battery</a>
                        </div>
                    </div>
                    <div class="dropdown-item">
                        <a href="solar-power.php">Solar Power</a>
                    </div>
                </div>
            </div>

            <div class="dropdown">
                <a href="#">Gallery</a>
                <div class="product-dropdown">
                    <div class="dropdown-item">
                        <a href="exhibitions-photos.php">Exhibition Photos</a>
                        <a href="videos.php">Videos</a>
                        <a href="live_installation.php">Live Installation</a>
                    </div>
                </div>
            </div>

            <a href="clients.php">Client</a>
            <a href="contact.php">Contact</a>
            <button class="enquiry-btn" onclick="openEnquiry()">Enquiry</button>
        </div>
        <div class="right-logo">
            <img src="img/vector.jpg" alt="Vector Logo">
        </div>
    </div>
</div>

<!-- ================= ENQUIRY POPUP ================= -->
<div class="enquiry-modal" id="enquiryModal">
    <div class="enquiry-content">
        <span class="close-popup" onclick="closeEnquiry()">&times;</span>
        <h2>Enquiry Form</h2>

        <!-- Success/Error Messages -->
        <div class="success-message" id="successMessage">
            <i class="fas fa-check-circle"></i> <span id="successText"></span>
        </div>
        <div class="error-message" id="errorMessage">
            <i class="fas fa-exclamation-circle"></i> <span id="errorText"></span>
        </div>

        <!-- Enquiry Form -->
        <form id="enquiryForm" method="POST">
            <!-- Honeypot field for anti-spam -->
            <input type="text" name="website" class="honeypot" tabindex="-1" autocomplete="off">
            
            <input type="text" id="name" name="name" placeholder="Your Full Name *" required>
            <input type="email" id="email" name="email" placeholder="Your Email Address *" required>
            <input type="tel" id="phone" name="phone" placeholder="Phone Number (10 digits) *" maxlength="10" required>
            <textarea rows="4" id="message" name="message" placeholder="Your Message *" required></textarea>
            
            <button type="submit" id="submitBtn">
                <span id="btnText">Submit Enquiry</span>
                <div class="spinner" id="spinner"></div>
            </button>
        </form>
        
        <div class="phone-error" id="phoneError">
            <i class="fas fa-exclamation-triangle"></i> Please enter exactly 10 digits
        </div>
    </div>
</div>

<!-- ================= SCRIPT ================= -->
<script>
// Function to open enquiry popup
function openEnquiry() {
    document.getElementById("enquiryModal").style.display = "flex";
    document.body.style.overflow = "hidden";
    
    // Reset form and messages
    resetForm();
}

// Function to close enquiry popup
function closeEnquiry() {
    document.getElementById("enquiryModal").style.display = "none";
    document.body.style.overflow = "auto";
}

// Function to reset form
function resetForm() {
    document.getElementById("enquiryForm").reset();
    document.getElementById("phoneError").style.display = "none";
    document.getElementById("phone").classList.remove("invalid-field");
    document.getElementById("successMessage").style.display = "none";
    document.getElementById("errorMessage").style.display = "none";
    document.getElementById("submitBtn").disabled = false;
    document.getElementById("btnText").style.display = "inline";
    document.getElementById("spinner").style.display = "none";
}

// Close popup when clicking outside
window.onclick = function(e) {
    let modal = document.getElementById("enquiryModal");
    if (e.target == modal) {
        closeEnquiry();
    }
}

// Phone number validation - only digits
document.getElementById("phone").addEventListener("input", function(e) {
    // Remove non-digits
    this.value = this.value.replace(/[^0-9]/g, '');
    
    // Show/hide error message
    const phoneError = document.getElementById("phoneError");
    if (this.value.length > 0 && this.value.length !== 10) {
        phoneError.style.display = "block";
        this.classList.add("invalid-field");
    } else {
        phoneError.style.display = "none";
        this.classList.remove("invalid-field");
    }
});

// Form submission with AJAX
document.getElementById("enquiryForm").addEventListener("submit", function(e) {
    e.preventDefault();
    
    const phone = document.getElementById("phone");
    const phoneValue = phone.value;
    const phoneError = document.getElementById("phoneError");
    const submitBtn = document.getElementById("submitBtn");
    const btnText = document.getElementById("btnText");
    const spinner = document.getElementById("spinner");
    const successMsg = document.getElementById("successMessage");
    const errorMsg = document.getElementById("errorMessage");
    const successText = document.getElementById("successText");
    const errorText = document.getElementById("errorText");
    
    // Validate phone number
    if (phoneValue.length !== 10) {
        phoneError.style.display = "block";
        phone.classList.add("invalid-field");
        phone.focus();
        return false;
    }
    
    // Get form data
    const formData = new FormData(this);
    
    // Disable button and show loading
    submitBtn.disabled = true;
    btnText.style.display = "none";
    spinner.style.display = "block";
    successMsg.style.display = "none";
    errorMsg.style.display = "none";
    
    // Send AJAX request
    fetch(window.location.href, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Hide loading
        submitBtn.disabled = false;
        btnText.style.display = "inline";
        spinner.style.display = "none";
        
        if (data.success) {
            // Show success message
            successText.textContent = data.message;
            successMsg.style.display = "block";
            
            // Reset form
            document.getElementById("enquiryForm").reset();
            document.getElementById("phone").classList.remove("invalid-field");
            
            // Auto close popup after 3 seconds
            setTimeout(function() {
                closeEnquiry();
            }, 3000);
        } else {
            // Show error message
            errorText.textContent = data.message;
            errorMsg.style.display = "block";
            
            // Auto hide error message after 5 seconds
            setTimeout(function() {
                errorMsg.style.display = "none";
            }, 5000);
        }
    })
    .catch(error => {
        // Hide loading and show error
        submitBtn.disabled = false;
        btnText.style.display = "inline";
        spinner.style.display = "none";
        errorText.textContent = "Network error. Please check your connection and try again.";
        errorMsg.style.display = "block";
        
        // Auto hide error message after 5 seconds
        setTimeout(function() {
            errorMsg.style.display = "none";
        }, 5000);
        
        console.error('Error:', error);
    });
});

// Close with ESC key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeEnquiry();
    }
});

// Prevent form submission on Enter key (except for textarea)
document.querySelectorAll('input:not(textarea)').forEach(input => {
    input.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
        }
    });
});
</script>

</body>
</html>