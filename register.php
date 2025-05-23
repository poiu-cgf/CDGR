
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Remix Icons + Lottie -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom right, #2b5876, #4e4376);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 20px;
            width: 95%;
            max-width: 420px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            animation: pop 0.4s ease;
        }
        @keyframes pop {
            0% { transform: scale(0.9); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
        .container h2 {
            text-align: center;
            margin-bottom: 10px;
            font-size: 24px;
            color: #333;
        }
        .lottie-wrapper {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .input-box {
            position: relative;
            margin-bottom: 16px;
        }
        .input-box input,
        .input-box select {
            width: 100%;
            padding: 12px 40px 12px 14px;
            font-size: 15px;
            border: 1px solid #ccc;
            border-radius: 12px;
            background: #f9f9f9;
        }
        .input-box i {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #555;
            cursor: pointer;
        }
        .strength {
            font-size: 12px;
            margin-top: -10px;
            margin-bottom: 10px;
            color: #555;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #4e54c8;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #363b94;
        }
        .message {
            text-align: center;
            font-size: 14px;
            margin-bottom: 10px;
            color: red;
        }
        .login-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }
        .login-link a {
            color: #4e54c8;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="lottie-wrapper">
        <lottie-player src="register.json" background="transparent" speed="1" style="width: 120px; height: 120px;" loop autoplay></lottie-player>
    </div>

    <h2>Create Account</h2>

    
    <form method="POST">
        <div class="input-box">
            <input type="text" name="username" placeholder="Username" maxlength="14" required>
            <i class="ri-user-line"></i>
        </div>
        <div class="input-box">
            <input type="email" name="email" placeholder="Email" required>
            <i class="ri-mail-line"></i>
        </div>
        <div class="input-box">
            <select name="country" id="countrySelect" required></select>
            <i class="ri-earth-line"></i>
        </div>
        <div class="input-box">
            <input type="password" name="password" id="passwordInput" placeholder="Password" maxlength="14" required>
            <i class="ri-eye-off-line" id="togglePassword"></i>
        </div>
        <div class="strength" id="strengthText">Strength: </div>
        <div class="input-box">
            <input type="password" name="confirm_password" placeholder="Confirm Password" maxlength="14" required>
            <i class="ri-lock-password-line"></i>
        </div>
        <button type="submit">Register</button>
    </form>

    <div class="login-link">
        Already have an account? <a href="login.php">Login</a>
    </div>
</div>

<script>
    // Password toggle
    document.getElementById('togglePassword').onclick = function() {
        const pwd = document.getElementById('passwordInput');
        const icon = this;
        if (pwd.type === "password") {
            pwd.type = "text";
            icon.className = "ri-eye-line";
        } else {
            pwd.type = "password";
            icon.className = "ri-eye-off-line";
        }
    };

    // Strength meter
    const pwdInput = document.getElementById('passwordInput');
    const strengthText = document.getElementById('strengthText');
    pwdInput.addEventListener('input', () => {
        const val = pwdInput.value;
        let strength = "Weak";
        if (val.length >= 8 && /[A-Z]/.test(val) && /[0-9]/.test(val) && /[\W]/.test(val)) {
            strength = "Strong";
        } else if (val.length >= 6) {
            strength = "Medium";
        }
        strengthText.textContent = "Strength: " + strength;
    });

    // Populate country dropdown via API
    fetch('https://restcountries.com/v3.1/all')
    .then(res => res.json())
    .then(data => {
        const select = document.getElementById('countrySelect');
        const sorted = data.sort((a, b) => a.name.common.localeCompare(b.name.common));
        sorted.forEach(country => {
            const opt = document.createElement('option');
            opt.value = country.name.common;
            opt.textContent = country.name.common;
            select.appendChild(opt);
        });
    });
</script>

</body>
</html>
