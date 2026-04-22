<?php
include 'koneksi.php';

if (!$conn) {
    die("Koneksi database gagal");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shop - Beauty Project</title>
  <link rel="stylesheet" href="style.css" />
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

    <!-- SHOP SECTION -->
  <section class="best-seller">
    <h2>Shop <span>Beauty Project</span></h2>
    <div class="products">
  
      <a href="product.php" class="product-link">
        <div class="product-card">
          <img src="cart1.png" alt="Produk 1" />
          <p class="product-name">BEAUTY PROJECT SOAP</p>
          <p class="product-price">Skincare Rp65.000</p>
        </div>
      </a>
  
      <a href="product1.php" class="product-link">
        <div class="product-card">
          <img src="cart2.png" alt="Produk 2" />
          <p class="product-name">BEAUTY FACE MIST</p>
          <p class="product-price">Skincare Rp45.000</p>
        </div>
      </a>
  
      <a href="product2.php" class="product-link">
        <div class="product-card">
          <img src="cart3.png" alt="Produk 3" />
          <p class="product-name">BEAUTY COLLAGEN DRINK</p>
          <p class="product-price">Skincare Rp60.000</p>
        </div>
      </a>
  
      <a href="product3.php" class="product-link">
        <div class="product-card">
          <img src="cart4.png" alt="Produk 4" />
          <p class="product-name">BEAUTY SUNSCREAM</p>
          <p class="product-price">Skincare Rp60.000</p>
        </div>
      </a>
  
      <a href="product4.php" class="product-link">
        <div class="product-card">
          <img src="cart5.png" alt="Produk 5" />
          <p class="product-name">BEAUTY ACNE PRODUCT</p>
          <p class="product-price">Skincare Rp50.000</p>
        </div>
      </a>
  
      <a href="product5.php" class="product-link">
        <div class="product-card">
          <img src="cart6.png" alt="Produk 6" />
          <p class="product-name">BEAUTY PROJECT SKINCARE</p>
          <p class="product-price">Skincare Rp210.000</p>
        </div>
      </a>
  
    </div>
  </section>

  

  <!-- CTA HUBUNGI ADMIN -->
  <section class="cta-section">
    <div class="cta-box">
      <div class="cta-text">
        <h3>Ada Pertanyaan?</h3>
        <p>Jangan ragu untuk menghubungi kami</p>
      </div>
      <a href="https://api.whatsapp.com/send/?phone=63851284526&text=kak+saya+mau+konsultasi+tentang+BeautyProduct&type=phone_number&app_absent=0" 
   class="cta-button" 
   target="_blank" 
   rel="noopener noreferrer">
  HUBUNGI KAMI</a>
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
