<?php
// product.php
include 'koneksi.php';

// Jika form Add to Cart disubmit:
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    $product_name = mysqli_real_escape_string($conn, $_POST['product_name']);
    $price        = floatval($_POST['price']);
    $quantity     = intval($_POST['quantity']);

    // Cek apakah produk sudah ada di keranjang
    $cek = mysqli_query($conn, "SELECT * FROM cart WHERE product_name = '$product_name'");
    if (mysqli_num_rows($cek) > 0) {
        // Jika sudah ada, update quantity
        mysqli_query($conn, "UPDATE cart 
                             SET quantity = quantity + $quantity 
                             WHERE product_name = '$product_name'");
    } else {
        // Jika belum ada, insert baru
        mysqli_query($conn, "INSERT INTO cart (product_name, price, quantity) 
                             VALUES ('$product_name', '$price', $quantity)");
    }

    // Redirect kembali agar tidak submit ulang saat refresh
    header("Location: cart.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SOAP - BEAUTY PROJECT</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f9f8f5;
      margin: 0;
      color: #333;
    }

    .topbar {
      background-color: #004B3D;
      color: white;
      text-align: center;
      padding: 0.5rem;
      font-size: 0.9rem;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 1.5rem;
      padding: 0;
      margin: 0;
    }

    .nav-links li a {
      font-weight: 500;
      color: #333;
      text-decoration: none;
    }

    .nav-links li a:hover {
      color: #004B3D;
    }

    .logo {
      height: 40px;
    }

    .product-detail {
      padding: 3rem 2rem;
      max-width: 1200px;
      margin: auto;
    }

    .product-main {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      align-items: flex-start;
    }

    .product-image {
      flex: 1 1 40%;
      max-width: 400px;
    }

    .product-image img {
      width: 100%;
      border-radius: 10px;
      object-fit: contain;
      max-height: 350px;
    }

    .product-info {
      flex: 1 1 55%;
    }

    .product-info h1 {
      font-size: 2rem;
      margin-bottom: 0.5rem;
    }

    .product-info p {
      margin: 0.3rem 0;
    }

    .price {
      font-size: 1.3rem;
      font-weight: bold;
      color: #004B3D;
    }

    .btn-gold {
      background-color: #004B3D;
      color: white;
      padding: 0.75rem 1.5rem;
      border-radius: 6px;
      font-weight: 600;
      border: none;
      margin-top: 1rem;
      cursor: pointer;
    }

    .product-description {
      margin-top: 3rem;
      padding: 2rem;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .product-description h2, .product-description h3 {
      color: #004B3D;
    }

    .product-description ul {
      padding-left: 1.2rem;
    }

    footer {
      background-color: #fff9ec;
      padding: 2rem;
      text-align: center;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <div class="topbar">Discount Up to 50% For 100 First Order</div>

  <nav class="navbar">
    <img src="logo.png" alt="Logo" class="logo">
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="shop.php">Shop</a></li>
      <li><a href="about.php">About Us</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="cart.php">Cart</a></li>
    </ul>
  </nav>

  <section class="product-detail">
    <div class="product-main">
      <div class="product-image">
        <img src="cart6.png" alt="INNERLIGHT SKINCARE">
      </div>
      <div class="product-info">
        <h1>SOAP - BEAUTY PROJECT</h1>
        <p>SSKU skincare-innerlight | Kategori: <strong>Skincare</strong></p>
        <p class="price">Rp210.000</p>
        <p>Availability: <strong>100 in stock</strong></p>

        <!-- Form Add to Cart -->
        <form action="product6.php" method="POST">
          <input type="hidden" name="product_name" value="INNERLIGHT SKINCARE">
          <input type="hidden" name="price" value="210000">
          <label for="quantity">Jumlah:</label>
          <input type="number" name="quantity" id="quantity" value="1" min="1" style="width: 60px; margin-left: 0.5rem;">
          <button type="submit" name="add_to_cart" class="btn-gold">Add to Cart</button>
        </form>
      </div>
    </div>

    <div class="product-description">
      <h2>Deskripsi Produk</h2>
      <p><strong>Innerlight Skincare</strong> terdiri dari 3 varian:</p>
    
      <h3>🔷 Acne Treatment:</h3>
      <p>
        Varian ini diperuntukkan untuk kulit <strong>Oily</strong>, <strong>Acne Prone</strong>, dan <strong>Jerawat</strong>. 
        Dalam kandungannya terdapat metode <em>Mikroenkapsulasi</em> untuk mengangkat akar jerawat, 
        serta membantu mengeringkan jerawat dan sebagai <strong>Anti Iritan</strong>.
      </p>
    
      <h3>🔷 Expert:</h3>
      <p>
        Varian ini berfungsi untuk <strong>Kulit Normal</strong> yang bermanfaat untuk <strong>Whitening</strong> dan <strong>Brightening</strong>.
      </p>
      <p>
        Kandungannya terdiri dari <strong>Fermentasi Bakteri</strong> yaitu <strong>Ectoin</strong> dan <strong>Melazero</strong> 
        yang mampu menahan melanosit untuk naik ke permukaan setelah diuji klinis.
      </p>
      <p>
        Terbukti cream ini mampu <strong>menghambat efek penuaan dini</strong> dan <strong>mencegah breakout</strong> pasca pemakaian obat atau kortikosteroid.
      </p>
    
      <h3>🔷 White Secret:</h3>
      <p>
        Varian ini sebagai sediaan <strong>Obat Topikal</strong> yang berfungsi untuk <strong>menyamarkan dan memudarkan flek hitam</strong>, 
        bekas pemakaian skincare dengan kandungan <strong>Kortikosteroid dosis tinggi</strong>, susah cerah, dan bisa membantu sebagai 
        <strong>Anti Oksidan</strong> serta <strong>Anti Aging</strong>.
      </p>
    </div>    
  </section>
   <!-- CTA HUBUNGI ADMIN -->
   <section class="cta-section">
    <div class="cta-box">
      <div class="cta-text">
        <h3>SAATNYA KAMU BUKTIKAN</h3>
        <p>Hubungi Admin Sekarang!</p>
      </div>
      <a href="https://api.whatsapp.com/send/?phone=6281317000265&text=kak+saya+mau+konsultasi+tentang+innerlight&type=phone_number&app_absent=0" 
   class="cta-button" 
   target="_blank" 
   rel="noopener noreferrer">
  HUBUNGI KAMI
</a>

    </div>
  </section>


  <!-- FOOTER -->
  <footer class="footer">
    <div class="footer-content">
      <div>
        <img src="logo.png" alt="Logo" class="logo-footer">
        <p>PT. Innerlight Global Kosmetindo</p>
      </div>
      <div>
        <h4>Link</h4>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#shop">Shop</a></li>
          <li><a href="#about">About Us</a></li>
        </ul>
      </div>
      <div>
        <h4>Subscribe Now</h4>
        <p>Dapatkan informasi terbaru Innerlight!</p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 Innerlight</p>
    </div>
  </footer>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper('.hero-swiper', {
      loop: true,
      autoplay: {
        delay: 4000,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      slidesPerView: 1,
    });
  </script>

</body>
</html>