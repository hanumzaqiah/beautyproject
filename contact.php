<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us - Beauty Project</title>
  <link rel="stylesheet" href="contact.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

  <!-- Top Bar -->
  <div class="topbar">Dapatkan diskon 5% untuk semua produk dengan kupon Beauty Project</div>

  <!-- Navbar -->
  <nav class="navbar">
    <img src="logo.png" alt="Logo" class="logo" />
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="shop.php">Shop</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="cart.php">Cart</a></li>
    </ul>
  </nav>
  

  <!-- CONTACT SECTION -->
  <section class="contact-section">
    <h2>Contact Us <span>Beauty Project</span></h2>
    <div class="contact-cards">
      <div class="contact-card">
        <img src="admin.png" alt="Phone Icon">
        <h3>Admin</h3>
        <p>0838-5128-4526</p>
      </div>
      <div class="contact-card">
        <img src="alamat.png" alt="Location Icon">
        <h3>Alamat</h3>
        <p>Malang Jawa Timur<br>Indonesia</p>
      </div>
      <div class="contact-card">
        <img src="email.png" alt="Email Icon">
        <h3>Email</h3>
        <p>beautyproject@gmail.com</p>
      </div>
    </div>

    <div class="contact-form-wrapper">
      <div class="map">
       <iframe 
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.164368449365!2d112.599042!3d-7.921396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7bfc8c1a5c2df%3A0x6fbb0b7c5a5b6b3a!2sGedung%20Kuliah%20Bersama%203%20(GKB%203)%20UMM!5e0!3m2!1sid!2sid!4v1710000000000!5m2!1sid!2sid" 

" width="100%" height="300" style="border:0;" allowfullscreen loading="lazy"></iframe>
      </div>
      <form class="contact-form">
        <h3>Let's Talk With <span>Beauty Project</span></h3>
        <input type="text" placeholder="Name" required>
        <input type="email" placeholder="Email" required>
        <textarea rows="4" placeholder="Message" required></textarea>
        <button type="submit">SEND</button>
      </form>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="footer-content">
      <div>
        <img src="logo.png" alt="Logo" class="logo-footer">
        <p>Beauty Project adalah website simulasi
           penjualan produk kecantikan </p>
      </div>
      <div>
        <h4>Link</h4>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li><a href="about.php">About Us</a></li>
        </ul>
      </div>
      <div>
        <h4>Subscribe Now</h4>
        <p>Dapatkan informasi terbaru Beauty Project!</p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2026 Beauty Project</p>
    </div>
  </footer>

</body>
</html>
