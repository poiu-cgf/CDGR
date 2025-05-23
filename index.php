<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CROZN x SKINS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background: #f2f2f2;
    }

    .header {
      background: white;
      color: black;
      padding: 15px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .header-left {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .header-left img {
      height: 32px;
      width: 32px;
      border-radius: 50%;
    }

    .header-left span {
      font-size: 18px;
      font-weight: bold;
    }

    .header-right {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .menu-btn, .search-btn {
      font-size: 24px;
      cursor: pointer;
      color: black;
    }

    .search-bar {
      display: none;
      position: absolute;
      top: 60px;
      right: 20px;
      background: white;
      padding: 10px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.2);
      z-index: 1001;
    }

    .search-bar input {
      padding: 8px 12px;
      width: 220px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    .sidebar {
      font-family: 'Ubuntu', sans-serif;
      position: fixed;
      top: 0;
      left: -280px;
      width: 250px;
      height: 100%;
      background: rgba(255,255,255,0.08);
      backdrop-filter: blur(14px);
      transition: left 0.3s ease;
      color: white;
      border-radius: 0 10px 10px 0;
      z-index: 1000;
    }

    .sidebar-header {
      padding: 15px;
      font-weight: bold;
      font-size: 20px;
      display: flex;
      justify-content: space-between;
    }

    .close-btn {
      font-size: 20px;
      cursor: pointer;
      color: white;
    }

    .sidebar a {
      display: flex;
      align-items: center;
      padding: 12px 15px;
      color: white;
      text-decoration: none;
      font-weight: 600;
      border-bottom: 1px solid rgba(255,255,255,0.1);
    }

    .sidebar a:hover {
      background: rgba(255,255,255,0.1);
    }

    .sidebar a i {
      margin-right: 10px;
      width: 20px;
    }

    .submenu {
      display: none;
      padding-left: 15px;
    }

    .submenu a {
      font-size: 14px;
      padding: 10px;
      background: rgba(255,255,255,0.1);
    }

    .overlay {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.5);
      display: none;
      z-index: 999;
    }

    .container {
      padding: 20px;
      text-align: center;
    }

    .card {
      background: white;
      border-radius: 10px;
      margin: 20px auto;
      padding: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      width: 90%;
      max-width: 420px;
    }

    .card h3 {
      margin-top: 0;
    }

    .card img {
      width: 100%;
      border-radius: 8px;
      margin-bottom: 15px;
    }

    .buttons {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .buttons a {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      background-color: #007bff;
      color: white;
      font-weight: 600;
      padding: 12px;
      border-radius: 10px;
      text-decoration: none;
      font-size: 16px;
      transition: background 0.3s ease;
    }

    .buttons a:hover {
      background-color: #0069d9;
    }

    .buttons a i {
      font-size: 18px;
    }
  </style>
</head>
<body>

<!-- Header -->
<div class="header">
  <div class="header-left">
    <img src="logo.png" alt="Logo">
    <span>CROZN x SKINS</span>
  </div>
  <div class="header-right">
    <div class="search-btn" onclick="toggleSearch()"><i class="fas fa-search"></i></div>
    <div class="menu-btn" onclick="toggleMenu()"><i class="fas fa-bars"></i></div>
  </div>
</div>

<!-- Search Box -->
<div class="search-bar" id="searchBar">
  <form method="GET" action="">
    <input type="text" name="search" placeholder="Search by title..." value="">
  </form>
</div>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
  <div class="sidebar-header">
    Menu <span class="close-btn" onclick="toggleMenu()">&times;</span>
  </div>
  <a href="welcome.php"><i class="fas fa-home-alt"></i> Home</a>
  <a href="javascript:void(0)" onclick="toggleSubMenu('checkpak')"><i class="fas fa-folder"></i> Check Files</a>
  <div id="checkpak" class="submenu">
    <a href="?filter=latest"><i class="fas fa-fire"></i>Latest Files</a>
    <a href="?filter=old"><i class="fas fa-box"></i>Old Files</a>
  </div>
  <a href="javascript:void(0)" onclick="toggleSubMenu('support')"><i class="fas fa-headset"></i> Support</a>
  <div id="support" class="submenu">
    <a href="https://t.me/Xthrlen"><i class="fab fa-telegram"></i>Telegram Support</a>
    <a href="#"><i class="fab fa-whatsapp"></i> WhatsApp Support</a>
  </div>
  <a href="https://t.me/CROZNxSKINS"><i class="fas fa-paper-plane"></i>Telegram Channel</a>
  <a href="video.php"><i class="fas fa-play"></i>Apply Process</a>
  <a href="profile.php"><i class="fas fa-user-cog"></i> Account Settings</a>
  <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<div class="overlay" id="overlay" onclick="toggleMenu()"></div>

<!-- Main Content -->
<div class="container">
<div class='card'><h3>FIRE MUMMY</h3><img src='uploads/IMG_20250504_100952_279.jpg' alt='Preview'><div class='buttons'><a href='uploads/PUBGM 3.7 V8 PAK FILE.zip' download><i class='fas fa-download'></i> Download</a><a href='https://gplinks.co/LMqOIG' target='_blank'><i class='fas fa-key'></i> Get Password</a><a href='https://youtube.com/shorts/0G5E2AfyVzM?si=Ocsz0aEOiTgAc7zY'><i class='fas fa-question-circle'></i> How to Get Password</a></div></div><div class='card'><h3>BLUE MUMMY</h3><img src='uploads/IMG_20250504_100951_789.jpg' alt='Preview'><div class='buttons'><a href='uploads/PUBGM 3.7 V7 PAK FILE.zip' download><i class='fas fa-download'></i> Download</a><a href='https://justpaste.it/bfc2m' target='_blank'><i class='fas fa-key'></i> Get Password</a><a href='https://youtube.com/shorts/0G5E2AfyVzM?si=Ocsz0aEOiTgAc7zY'><i class='fas fa-question-circle'></i> How to Get Password</a></div></div><div class='card'><h3>YELLOW MUMMY</h3><img src='uploads/IMG_20250504_100951_367.jpg' alt='Preview'><div class='buttons'><a href='uploads/PUBGM 3.7 V6 PAK FILE.zip' download><i class='fas fa-download'></i> Download</a><a href='https://gplinks.co/sXPG' target='_blank'><i class='fas fa-key'></i> Get Password</a><a href='https://youtube.com/shorts/0G5E2AfyVzM?si=Ocsz0aEOiTgAc7zY'><i class='fas fa-question-circle'></i> How to Get Password</a></div></div><div class='card'><h3>MUMMY SET</h3><img src='uploads/IMG_20250504_100951_320.jpg' alt='Preview'><div class='buttons'><a href='uploads/PUBGM 3.7 V5 PAK FILE.zip' download><i class='fas fa-download'></i> Download</a><a href='https://gplinks.co/xAtCo' target='_blank'><i class='fas fa-key'></i> Get Password</a><a href='https://youtube.com/shorts/0G5E2AfyVzM?si=Ocsz0aEOiTgAc7zY'><i class='fas fa-question-circle'></i> How to Get Password</a></div></div><div class='card'><h3>GALADRIA X-SUIT</h3><img src='uploads/IMG_20250502_194301_417.jpg' alt='Preview'><div class='buttons'><a href='uploads/PUBGM 3.7 V4 PAK FILE.zip' download><i class='fas fa-download'></i> Download</a><a href='https://gplinks.co/WrYtB' target='_blank'><i class='fas fa-key'></i> Get Password</a><a href='https://youtube.com/shorts/0G5E2AfyVzM?si=Ocsz0aEOiTgAc7zY'><i class='fas fa-question-circle'></i> How to Get Password</a></div></div><div class='card'><h3>TDM SET V3</h3><img src='uploads/IMG_20250422_20092804.jpg' alt='Preview'><div class='buttons'><a href='uploads/PUBGM 3.7 V3 PAK FILE.zip' download><i class='fas fa-download'></i> Download</a><a href='https://www.instagram.com/reel/DIwf0V-zEbb/?igsh=cW5ndDRqMHBuNHVo' target='_blank'><i class='fas fa-eye'></i> Full Preview</a><a href='https://earnlinks.in/MpL' target='_blank'><i class='fas fa-key'></i> Get Password</a><a href='https://youtube.com/shorts/0G5E2AfyVzM?si=Ocsz0aEOiTgAc7zY'><i class='fas fa-question-circle'></i> How to Get Password</a></div></div><div class='card'><h3>SNOWSTAR SWEETHEART SET V2</h3><img src='uploads/IMG_20250411_174543_289.jpg' alt='Preview'><div class='buttons'><a href='uploads/PUBGM 3.7 V2 PAK FILE.zip' download><i class='fas fa-download'></i> Download</a><a href='https://t.me/c/1881504259/1277' target='_blank'><i class='fas fa-eye'></i> Full Preview</a><a href='https://gplinks.co/kXgln' target='_blank'><i class='fas fa-key'></i> Get Password</a><a href='https://youtube.com/shorts/0G5E2AfyVzM?si=Ocsz0aEOiTgAc7zY'><i class='fas fa-question-circle'></i> How to Get Password</a></div></div><div class='card'><h3>ANUKHRA X-SUIT V1</h3><img src='uploads/IMG_20250411_172257_933.jpg' alt='Preview'><div class='buttons'><a href='uploads/PUBGM 3.7 V1 PAK FILE.zip' download><i class='fas fa-download'></i> Download</a><a href='https://t.me/c/1881504259/1276' target='_blank'><i class='fas fa-eye'></i> Full Preview</a><a href='https://gplinks.co/V7X6' target='_blank'><i class='fas fa-key'></i> Get Password</a><a href='https://youtube.com/shorts/0G5E2AfyVzM?si=Ocsz0aEOiTgAc7zY'><i class='fas fa-question-circle'></i> How to Get Password</a></div></div></div>

<script>
function toggleMenu() {
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("overlay");
  sidebar.style.left = sidebar.style.left === "0px" ? "-280px" : "0px";
  overlay.style.display = sidebar.style.left === "0px" ? "block" : "none";
}

function toggleSubMenu(id) {
  const submenu = document.getElementById(id);
  submenu.style.display = submenu.style.display === "block" ? "none" : "block";
}

function toggleSearch() {
  const search = document.getElementById("searchBar");
  search.style.display = search.style.display === "block" ? "none" : "block";
}
</script>

</body>
</html>
