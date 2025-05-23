
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background: url('background.jpg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            padding: 40px;
            text-align: center;
            width: 350px;
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .logo {
            width: 200px;
            margin-bottom: 1px;
        }
        h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }
        .input-box {
            display: flex;
            align-items: center;
            background: #f1f1f1;
            padding: 8px;
            border-radius: 25px;
            margin: 10px 0;
            box-shadow: inset 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }
        .input-box input {
            border: none;
            outline: none;
            width: 100%;
            padding: 6px;
            font-size: 16px;
            background: transparent;
            border-radius: 25px;
        }
        .input-box i {
            margin-right: 10px;
            color: gray;
        }
        .input-box:focus-within {
            box-shadow: 0px 0px 10px rgba(255, 102, 0, 0.7);
            transform: scale(1.05);
        }
        .forgot {
            text-align: right;
            font-size: 12px;
            margin: 5px 0 15px;
        }
        .sign-in-btn {
            background: linear-gradient(135deg, #ff6600, #ff3300);
            padding: 12px;
            border: none;
            border-radius: 50px;
            color: white;
            font-size: 18px;
            cursor: pointer;
            width: 100%;
            position: relative;
            overflow: hidden;
            transition: 0.3s;
            box-shadow: 0px 4px 10px rgba(255, 102, 0, 0.6);
        }
        .sign-in-btn:hover {
            background: linear-gradient(135deg, #ff4500, #ff2200);
        }
        .sign-in-btn::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.3) 10%, transparent 50%);
            transition: 0.5s;
            opacity: 0;
        }
        .sign-in-btn:hover::before {
            top: 0;
            left: 0;
            opacity: 1;
        }
        .register {
            margin-top: 15px;
            font-size: 14px;
        }
        .register a {
            font-weight: bold;
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="http://croznxskins.kesug.com/logo.png" alt="Logo" class="logo">
        <h2>Welcome Back</h2>
        <p>Sign in to continue</p>
        <p style="color:white;">Sign in to continue</p>
                        <form method="post">
            <div class="input-box">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="username" placeholder="Username" required 
       value="">
            </div>
            <div class="input-box">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Password" id="password" required 
       value="">
                <i class="fa-solid fa-eye" id="toggle-password" style="cursor:pointer;"></i>
            </div>
            <div style="display: flex; justify-content: flex-end; align-items: center; font-size: 12px; margin: 5px 0 15px; color: black;">
    <label style="cursor: pointer;">
        <input type="checkbox" name="remember" style="margin-right: 5px;" > Remember me
    </label>
</div>

            <button class="sign-in-btn" name="login" type="submit">Sign in</button>
            <p class="register">Don’t have an account? <a href="register.php">Create</a></p>
        </form>
    </div>

    <script>
        document.getElementById('toggle-password').addEventListener('click', function() {
            let passwordField = document.getElementById('password');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
            } else {
                passwordField.type = 'password';
            }
        });
    </script>
</body>
</html>
