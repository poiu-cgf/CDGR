<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Paid Service</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <style>
    html, body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      height: 100%;
      background: url('serviceoff.png') no-repeat center center fixed;
      background-size: cover;
      overflow: hidden;
    }

    .container {
      position: relative;
      z-index: 1;
      max-width: 520px;
      margin: auto;
      margin-top: 6vh;
      background: rgba(255, 255, 255, 0.3); /* More transparent */
      backdrop-filter: blur(10px); /* Stronger blur effect */
      -webkit-backdrop-filter: blur(10px); /* Safari support */
      padding: 40px 30px;
      border-radius: 18px;
      box-shadow: 0 8px 28px rgba(0,0,0,0.2);
      text-align: center;
    }

    h1 {
      font-size: 26px;
      color: #111;
      margin-bottom: 10px;
    }

    p {
      color: #333;
      font-size: 16px;
      margin-bottom: 25px;
    }

    .btn {
      background-color: #111;
      padding: 12px 25px;
      color: #fff;
      text-decoration: none;
      border-radius: 10px;
      font-weight: bold;
      transition: background 0.3s ease;
      margin: 5px;
      display: inline-block;
    }

    .btn:hover {
      background-color: #000;
    }

    .note {
      font-size: 14px;
      color: #666;
      margin-top: 18px;
    }

    lottie-player {
      width: 200px;
      margin: 0 auto 20px;
    }
  </style>
</head>
<body>

  <div class="container">
    <lottie-player src="serveroff.json"
      background="transparent" speed="1" loop autoplay></lottie-player>

    <h1>Paid Service Currently Off</h1>
    <p>Premium features are temporarily disabled. We’re working on something epic!</p>

    <a href="welcome.php" class="btn">Back to Home</a>
    <a href="https://t.me/Xthrlen" class="btn" target="_blank">Telegram Support</a>

    <div class="note">
      Beast mode loading... Stay tuned!
    </div>
  </div>

</body>
</html>
