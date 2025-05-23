<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Shorts Video</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: #fefefe;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
    }

    .title {
      font-size: 22px;
      font-weight: 700;
      color: #222;
      margin-bottom: 15px;
      text-align: center;
      animation: slideDown 1s ease;
    }

    .video-container {
      width: 100%;
      max-width: 420px;
      aspect-ratio: 9/16;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
      animation: fadeIn 1s ease;
    }

    iframe {
      width: 100%;
      height: 100%;
      border: none;
    }

    .back-btn {
      margin-top: 20px;
      background: #222;
      color: white;
      padding: 12px 24px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 5px 12px rgba(0, 0, 0, 0.2);
    }

    .back-btn:hover {
      background: #444;
      transform: scale(1.05);
    }

    @keyframes fadeIn {
      0% { opacity: 0; transform: scale(0.95); }
      100% { opacity: 1; transform: scale(1); }
    }

    @keyframes slideDown {
      0% { transform: translateY(-30px); opacity: 0; }
      100% { transform: translateY(0); opacity: 1; }
    }

    @media (max-width: 480px) {
      .title {
        font-size: 18px;
      }
      .back-btn {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <div class="title">How To Apply Pak File Tutorial</div>

  <div class="video-container">
    <iframe 
      src="https://www.youtube.com/embed/IOqhFg515-k?rel=0&modestbranding=1&autoplay=0&controls=1&showinfo=0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; fullscreen" 
      allowfullscreen>
    </iframe>
  </div>

  <button class="back-btn" onclick="window.location.href='index.php'">Back to Home</button>

</body>
</html>
