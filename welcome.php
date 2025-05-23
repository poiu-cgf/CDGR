<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to CROZN X SKINS</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js"></script>
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: #fff;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white; /* changed */
            color: black; /* changed */
            padding: 10px 15px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .logo img {
            width: 30px;
            height: 30px;
        }
        .header-buttons {
            display: flex;
            gap: 10px;
        }
        .ripple-btn {
            padding: 8px 15px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
            color: white;
        }
        .btn-signin { background: #555; }
        .btn-register { background: blue; } /* changed */
        .btn-start { background: blue; }
        .container { margin-top: 80px; padding: 20px; }
        #animation-container { width: 300px; height: 300px; margin: auto; }
        .buttons {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .info-section {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }

        /* Shine effect added */
        .info-box {
            width: 80%;
            max-width: 400px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            position: relative;
            overflow: hidden;
        }
        .info-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: -75%;
            width: 50%;
            height: 100%;
            background: linear-gradient(
                120deg,
                rgba(255, 255, 255, 0.2) 0%,
                rgba(255, 255, 255, 0.5) 50%,
                rgba(255, 255, 255, 0.2) 100%
            );
            transform: skewX(-20deg);
            animation: shine 2s infinite;
        }
        @keyframes shine {
            0% { left: -75%; }
            100% { left: 125%; }
        }

        .info-box h3 {
            font-size: 18px;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .info-box p { font-size: 14px; color: #555; }
        .icon { width: 40px; height: 40px; }

        .social-icons a {
            text-decoration: none;
            margin-right: 10px;
        }
        .social-icons i {
            font-size: 20px;
            color: #000;
            transition: 0.3s;
        }
        .social-icons i:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="http://croznxskins.kesug.com/uploads/icon.png" alt="Logo">
            <span style="font-size: 18px; font-weight: bold;">CROZNxSKINS</span>
        </div>
        <div class="header-buttons">
            <button class="ripple-btn btn-signin" onclick="location.href='login.php'">Login</button>
            <button class="ripple-btn btn-register" onclick="location.href='register.php'">Register</button>
        </div>
    </div>

    <div class="container">
        <div id="animation-container"></div>
        <p>Welcome to CROZNXSKINS Store</p>
        <div class="buttons">
            <button class="ripple-btn btn-signin" onclick="location.href='login.php'">Sign In</button>
            <button class="ripple-btn btn-start" onclick="location.href='config.php'">Get Started</button>
        </div>

        <div class="info-section">
            <div class="info-box">
                <h3>
                    <img src="http://croznxskins.kesug.com/uploads/custom_skin_icon.png" alt="Custom Skin" class="icon">
                    CUSTOM SKIN
                </h3>
                <p>Custom configs also available at a cheap price. Get your requested file in just 42 hours.</p>
            </div>
            <div class="info-box">
                <h3>
                    <img src="http://croznxskins.kesug.com/uploads/support_icon.png" alt="24/7 Support" class="icon">
                    24/7 SUPPORT
                </h3>
                <p>A dedicated support team is ready to help with any questions you may have.</p>
            </div>
        </div>

        <div class="info-section">
            <div class="info-box" style="text-align: left;">
                <h3>How It Works?</h3>
                <p style="margin-bottom: 10px;">CROZNXSKINS is a completely free site where you can get free config files and OBB of PUBG and BGMI.</p>
                <p style="margin-bottom: 10px;"><strong>1. CREATE AN ACCOUNT</strong><br>Get started with CROZNxSKINS. First, all you need is a CROZNXSKINS account, which you can create using the Register option.</p>
                <p><strong>2. DOWNLOAD FILE</strong><br>Go to the download button, start your process, and watch the tutorial video for guidance.</p>
            </div>
        </div>

        <div style="text-align: left; margin-top: 30px;">
            <p>CROZNXSKINS - It's a very trusted and secure website to give you free skins files and OBB.</p>
            <br>
            <div class="social-icons">
                <a href="https://t.me/CroznXskins" target="_blank" title="Telegram">
                    <i class="fab fa-telegram-plane"></i>
                </a>
                <a href="https://wa.me/000000001" target="_blank" title="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://instagram.com/Croznxskins" target="_blank" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://youtube.com/@Croznxskins" target="_blank" title="YouTube">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>

            <br><h3><b>Get in Touch</b></h3>
            <p>Shivneri Palace F01, Theur Road, Pune, Maharashtra, India 252610</p>
            <p>Support@CROZNxSKINS.com</p>
            <p>+91 000000001</p>
            <br><br><h3><b>Learn More</b></h3>
            <ul>
                <li>About Us</li>
                <li>Contact Us</li>
                <li>Help Center</li>
                <li>Terms of Use</li>
                <li>Privacy Policy</li>
            </ul>
            <br>
            <p>©2025 CROZNxSKINS All rights reserved.</p>
            <p style="text-align: center; font-size: 12px;">Refund Policy</p>
        </div>
    </div>

    <script>
        lottie.loadAnimation({
            container: document.getElementById('animation-container'),
            renderer: 'svg',
            loop: true,
            autoplay: true,
            path: 'welcome.json'
        });
    </script>
</body>
</html>
