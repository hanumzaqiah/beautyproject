<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require 'koneksi.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email    = trim($_POST['email']);
    $phone    = trim($_POST['phone']);

    // cek username sudah ada atau belum
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $error = "Username sudah digunakan!";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (username, password, email, phone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $hashed_password, $email, $phone);
 
        if ($stmt->execute()) {
            header("Location: login.php?registered=1");
            exit;
        } else {
            $error = "Error saat registrasi: " . $stmt->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Register - Innerlight</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #03352c, #03352c); /* ✅ warna utama */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .register-card {
      width: 460px;
      padding: 45px 40px;
      border-radius: 18px;
      background: #fff;
      box-shadow: 0 8px 28px rgba(0,0,0,0.25);
    }

    .register-card h2 {
      font-size: 30px;
      font-weight: 700;
      margin-bottom: 28px;
      text-align: center;
      color: #03352c;
    }

    .register-card label {
      font-size: 16px;
      font-weight: 600;
      display: block;
      margin-bottom: 8px;
      color: #333;
    }

    .register-card input {
      width: 100%;
      padding: 15px 17px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 10px;
      margin-bottom: 22px;
      box-sizing: border-box;
      transition: border 0.3s, box-shadow 0.3s;
    }

    .register-card input:focus {
      border-color: #03352c;
      box-shadow: 0 0 6px rgba(199, 169, 88, 0.6);
      outline: none;
    }

    .register-card button {
      width: 100%;
      padding: 15px;
      font-size: 18px;
      font-weight: 600;
      border-radius: 10px;
      background: #03352c;
      color: #fff;
      border: none;
      cursor: pointer;
      transition: background 0.3s, transform 0.2s;
    }

    .register-card button:hover {
      background: #03352c;
      transform: translateY(-2px);
    }

    .register-card .extra-links {
      margin-top: 20px;
      text-align: center;
      font-size: 15px;
    }

    .register-card .extra-links a {
      color: #03352c;
      text-decoration: none;
      font-weight: 600;
    }

    .register-card .extra-links a:hover {
      text-decoration: underline;
    }

    .error {
      color: red;
      font-size: 14px;
      margin-bottom: 15px;
      text-align: center;
    }

    @media (max-width: 500px) {
      .register-card {
        width: 90%;
        padding: 35px 25px;
      }
      .register-card h2 {
        font-size: 24px;
      }
    }
  </style>
</head>
<body>
  <div class="register-card">
    <h2>Register</h2>
    <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    <form method="post">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" placeholder="Masukkan username" required>

      <label for="password">Password</label>
      <input type="password" name="password" id="password" placeholder="Masukkan password" required>

      <label for="email">Email</label>
      <input type="email" name="email" id="email" placeholder="Masukkan email" required>

      <label for="phone">Nomor Telepon</label>
      <input type="tel" name="phone" id="phone" placeholder="Masukkan nomor telepon" required>

      <button type="submit">Register</button>
    </form>
    <div class="extra-links">
      <p>Sudah punya akun? <a href="login.php">Login</a></p>
    </div>
  </div>
</body>
</html>
