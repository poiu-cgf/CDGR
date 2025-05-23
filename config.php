<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Free & Premium Configs</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.9.6/lottie.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #f1f8ff, #dff0ff);
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
      height: 60px;
      background-color: white;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      position: sticky;
      top: 0;
      z-index: 999;
      opacity: 0;
      transform: translateY(-20px);
      animation: fadeDown 1s ease forwards;
    }

    @keyframes fadeDown {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .logo img {
      height: 100px;
    }

    .nav-buttons a {
      background-color: #007bff;
      color: white;
      text-decoration: none;
      padding: 8px 16px;
      margin-left: 8px;
      border-radius: 6px;
      font-weight: bold;
      transition: 0.3s ease;
    }

    .nav-buttons a:hover {
      background-color: #0056b3;
    }

    .main {
      text-align: center;
      padding: 40px 15px 20px;
      opacity: 0;
      animation: fadeInMain 1s ease 0.5s forwards;
    }

    @keyframes fadeInMain {
      to { opacity: 1; }
    }

    .config-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 30px;
      opacity: 0;
      transform: translateY(40px);
      animation: slideUp 1s ease 1s forwards;
    }

    @keyframes slideUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .config-card {
      background-color: white;
      padding: 20px;
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      width: 300px;
      text-align: center;
      position: relative;
      overflow: hidden;
      transition: transform 0.3s;
    }

    .config-card:hover {
      transform: translateY(-5px);
    }

    .config-card::before {
      content: "";
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: linear-gradient(45deg, rgba(255,255,255,0.2), rgba(255,255,255,0));
      transform: rotate(25deg);
      animation: shine 3s infinite linear;
    }

    @keyframes shine {
      0% { transform: translate(-100%, -100%) rotate(25deg); }
      100% { transform: translate(100%, 100%) rotate(25deg); }
    }

    .config-card h3 {
      margin: 0;
      font-size: 20px;
    }

    .config-card p {
      color: #777;
    }

    .price {
      font-size: 18px;
      color: green;
      font-weight: bold;
      margin: 10px 0;
    }

    .button {
      background-color: #007bff;
      color: white;
      padding: 10px 18px;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      display: inline-block;
    }

    .icon {
      font-size: 30px;
      color: #007bff;
      margin-bottom: 10px;
    }

    .lottie-bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 0;
      opacity: 0.24;
      pointer-events: none;
    }
    
    .right-lottie {
  justify-content: flex-end;
  display: flex;
  align-items: center;
  padding-right: 10px;
  opacity: 0.1;
  right: 0;
  top: 0;
  height: 100%;
  width: 50%;
  position: absolute;
}


    .lottie-bg canvas {
      width: 100% !important;
      height: 100% !important;
    }

    .config-card-content {
      position: relative;
      z-index: 1;
    }

  </style>
</head>
<body>

  <div class="header">
    <div class="logo">
      <a href="index.php"><img src="logo.png" alt="Logo"></a>
    </div>
    <div class="nav-buttons">
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
    </div>
  </div>

  <div class="main">
    <h1>Get Free & Premium Configs</h1>
    <p>Browse our collection of high-quality configs at the best prices.</p>

    <div class="config-container">

<div class="config-card">
  <div class="lottie-bg right-lottie" id="lottie1"></div>
  <div class="config-card-content">
    <i class="fas fa-gift icon"></i>
    <h3>Free Configs</h3>
    <p>Basic settings for beginners</p>
    <div class="price">Free</div>
    <a href="index.php" class="button">View Now</a>
  </div>
</div>

<div class="config-card">
  <div class="lottie-bg right-lottie" id="lottie2"></div>
  <div class="config-card-content">
    <i class="fas fa-crown icon"></i>
    <h3>Premium Configs</h3>
    <p>Advanced optimized settings</p>
    <div class="price">₹799</div>
    <a href="offlinepaid.php" class="button">Buy Now</a>
  </div>
</div>


    </div>
  </div>

  <script>
    // Background animation for cards
    lottie.loadAnimation({
      container: document.getElementById('lottie1'),
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path: 'https://assets10.lottiefiles.com/packages/lf20_zrqthn6o.json'
    });

    lottie.loadAnimation({
      container: document.getElementById('lottie2'),
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path: 'https://assets10.lottiefiles.com/packages/lf20_zrqthn6o.json'
    });
  </script>

</body>
</html>
