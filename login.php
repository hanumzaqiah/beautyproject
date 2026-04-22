<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require 'koneksi.php';

$error = "";

// kalau sudah login
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

// cek jika redirect dari registrasi sukses
if (isset($_GET['registered'])) {
    $success = "Registrasi berhasil! Silakan login.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $id;
            header("Location: index.php");
            exit;
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Username tidak ditemukan!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login - Innerlight</title>
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

    /* Card login */
    .login-card {
      width: 460px;
      padding: 45px 40px;
      border-radius: 18px;
      background: #fff;
      box-shadow: 0 8px 28px rgba(0,0,0,0.25);
    }

    /* Judul */
    .login-card h2 {
      font-size: 30px;
      font-weight: 700;
      margin-bottom: 28px;
      text-align: center;
      color: #03352c; /*  judul dengan warna utama */
    }

    /* Label */
    .login-card label {
      font-size: 16px;
      font-weight: 600;
      display: block;
      margin-bottom: 8px;
      color: #333;
    }

    /* Input */
    .login-card input {
      width: 100%;
      padding: 15px 17px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 10px;
      margin-bottom: 22px;
      box-sizing: border-box;
      transition: border 0.3s, box-shadow 0.3s;
    }

    .login-card input:focus {
      border-color: #03352c; /*  fokus dengan warna utama */
      box-shadow: 0 0 6px rgba(199, 169, 88, 0.6);
      outline: none;
    }

    /* Tombol */
    .login-card button {
      width: 100%;
      padding: 15px;
      font-size: 18px;
      font-weight: 600;
      border-radius: 10px;
      background: #03352c; /* warna utama */
      color: #fff;
      border: none;
      cursor: pointer;
      transition: background 0.3s, transform 0.2s;
    }

    .login-card button:hover {
      background: #03352c; /* sedikit lebih gelap */
      transform: translateY(-2px);
    }

    /* Link tambahan */
    .login-card .extra-links {
      margin-top: 20px;
      text-align: center;
      font-size: 15px;
    }

    .login-card .extra-links a {
      color: #03352c; /* ✅ link warna utama */
      text-decoration: none;
      font-weight: 600;
    }

    .login-card .extra-links a:hover {
      text-decoration: underline;
    }

    /* Pesan error */
    .error {
      color: red;
      font-size: 14px;
      margin-bottom: 15px;
      text-align: center;
    }

    /* Responsif */
    @media (max-width: 500px) {
      .login-card {
        width: 90%;
        padding: 35px 25px;
      }
      .login-card h2 {
        font-size: 24px;
      }
    }
  </style>
</head>
<body>
  <div class="login-card">
    <h2>Login</h2>
    <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
    <form method="post">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <div class="extra-links">
      <p>Belum punya akun? <a href="register.php">Register</a></p>
      
    </div>
  </div>
</body>
</html>

