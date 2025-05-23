
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
  <style>
    * { box-sizing: border-box; }
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #e0f7fa, #fff);
    }
    .container {
      max-width: 400px;
      margin: 60px auto;
      background: #fff;
      padding: 25px;
      border-radius: 15px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.1);
      position: relative;
    }
    .lottie-container {
      text-align: center;
      margin-bottom: 20px;
    }
    .form-group {
      position: relative;
      margin-bottom: 20px;
    }
    .form-group i.fas {
  position: absolute;
  top: 50%;
  transform: translateY(10%); /* adjust this value for more spacing */
  left: 14px;
  color: #007bff;
  font-size: 16px;
  pointer-events: none;
}

    input {
      width: 100%;
      padding: 12px 12px 12px 42px;
      border: 1px solid #ccc;
      border-radius: 10px;
      outline: none;
      font-size: 15px;
      transition: 0.3s ease;
    }
    input:focus {
      border-color: #007bff;
      box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
    }
    .strength-meter {
      height: 6px;
      border-radius: 5px;
      margin-top: 8px;
      background: #eee;
      overflow: hidden;
    }
    .strength-meter div {
      height: 100%;
      width: 0;
      transition: width 0.3s;
    }
    .btn {
      width: 100%;
      padding: 12px;
      background: #007bff;
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }
    .btn:hover {
      background: #0056b3;
    }
    #successPopup {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.5);
      display: none;
      align-items: center;
      justify-content: center;
      z-index: 9999;
    }
    .popup-box {
      background: #fff;
      border-radius: 10px;
      padding: 25px;
      text-align: center;
      box-shadow: 0 5px 20px rgba(0,0,0,0.2);
    }
    #progressBar {
      height: 5px;
      width: 0;
      background: #28a745;
      border-radius: 10px;
      margin-top: 20px;
      transition: width 0.3s;
    }
  </style>
</head>
<body>

<div id="successPopup">
  <div class="popup-box">
    <h3>Profile Saved Successfully!</h3>
    <div id="progressBar"></div>
  </div>
</div>

<div class="container">
  <div class="lottie-container">
    <lottie-player src="profile.json" background="transparent" speed="1" style="width: 140px; height: 140px;" loop autoplay></lottie-player>
  </div>

  <form method="POST">
    <div class="form-group">
      <label>Username</label>
      <i class="fas fa-user"></i>
      <input type="text" name="username" value="Test" required>
    </div>

    <div class="form-group">
      <label>Email</label>
      <i class="fas fa-envelope"></i>
      <input type="email" name="email" value="test@gmail.com" required>
    </div>

    <div class="form-group">
      <label>New Password</label>
      <i class="fas fa-lock"></i>
      <input type="password" name="new_password" id="password">
      <div class="strength-meter"><div id="strengthBar"></div></div>
    </div>

    <div class="form-group">
      <label>Confirm Password</label>
      <i class="fas fa-lock"></i>
      <input type="password" name="confirm_password" id="confirm">
    </div>

    <button type="submit" class="btn"><i class="fas fa-save"></i> Save Profile</button>
  </form>
</div>

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script>
document.getElementById('password').addEventListener('input', function() {
  const score = zxcvbn(this.value).score;
  const bar = document.getElementById('strengthBar');
  bar.style.width = (score + 1) * 20 + '%';
  bar.style.background = ['#ff4d4d', '#ff944d', '#ffcc00', '#99e600', '#28a745'][score];
});
</script>

</body>
</html>
