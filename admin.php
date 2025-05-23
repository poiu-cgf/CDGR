    <!DOCTYPE html>
    <html>
    <head><title>Admin Login</title>
    <style>
        body { font-family: Arial; background: #f5f5f5; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .login-box { background: white; padding: 30px; box-shadow: 0 0 10px rgba(0,0,0,0.2); border-radius: 8px; }
        input { width: 100%; padding: 10px; margin: 10px 0; }
        button { padding: 10px 20px; background: #333; color: white; border: none; border-radius: 5px; }
        .error { color: red; }
    </style></head>
    <body>
    <div class="login-box">
        <h2>Admin Login</h2>
        <p class='error'>Invalid username or password!</p>        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
    </body>
    </html>
    