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
  <title>PAKET SKINCARE - BEAUTY PROJECT</title>
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
  <div class="topbar">Dapatkan diskon 5% untuk semua produk dengan kupon Beauty Project</div>

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
        <img src="cart6.png" alt="INNERLIGHT FACEMIST">
      </div>
      <div class="product-info">
        <h1>PAKET SKINCARE BEAUTY PROJECT</h1>
<p>SKU beauty-project-skincare | Kategori: <strong>Skincare</strong></p>
<p class="price">Rp210.000</p>
<p>Paket skincare lengkap untuk membantu membersihkan, merawat, melindungi, dan membuat kulit tampak cerah sehat setiap hari.</p>
<p>Availability: <strong>100 in stock</strong></p>

<!-- Form Add to Cart -->
<form action="product5.php" method="POST">
  <input type="hidden" name="product_name" value="PAKET SKINCARE BEAUTY PROJECT">
  <input type="hidden" name="price" value="210000">

  <label for="quantity">Jumlah:</label>
  <input type="number" name="quantity" id="quantity" value="1" min="1" style="width: 60px; margin-left: 0.5rem;">

  <button type="submit" name="add_to_cart" class="btn-gold">Add to Cart</button>
</form>
</div>
</div>

<div class="product-description">
  <h2>Deskripsi Produk</h2>

  <p><strong>PAKET SKINCARE BEAUTY PROJECT</strong></p>

  <p>
    Paket skincare eksklusif yang terdiri dari rangkaian produk terbaik untuk perawatan wajah dan kulit harian.
    Diperkaya formula premium untuk membantu:
    <strong>Mencerahkan</strong>, <strong>Membersihkan</strong>, <strong>Melembapkan</strong>,
    <strong>Melindungi</strong>, dan <strong>Menenangkan Kulit</strong>.
  </p>

  <h3>Isi Paket:</h3>
  <ul>
    <li> BEAUTY PROJECT SOAP</li>
    <li> BEAUTY PROJECT FACE MIST</li>
    <li> BEAUTY PROJECT SUNSCREAM</li>
    <li> BEAUTY PROJECT ACNE PRODUCT</li>
  </ul>

  <h3>Manfaat:</h3>
  <ul>
    <li> Membersihkan kulit dari kotoran dan minyak</li>
    <li> Membantu mencerahkan kulit kusam</li>
    <li> Menjaga kelembapan kulit</li>
    <li> Melindungi kulit dari sinar matahari</li>
    <li> Membantu merawat kulit berjerawat</li>
    <li> Menenangkan kulit sensitif</li>
    <li> Membuat kulit tampak sehat dan glowing</li>
    <li> Perawatan lengkap dalam satu paket</li>
  </ul>

  <h3>Cara Penggunaan:</h3>
  <p>
    Gunakan SOAP untuk membersihkan wajah/tubuh, lanjutkan FACE MIST untuk menyegarkan,
    gunakan ACNE PRODUCT pada area berjerawat, lalu aplikasikan SUNSCREAM sebelum beraktivitas di luar ruangan.
  </p>
</div>
    
  </section>
   <!-- CTA HUBUNGI ADMIN -->
   <section class="cta-section">
    <div class="cta-box">
      <div class="cta-text">
        <h3>Ada Pertanyaan?</h3>
        <p>Jangan ragu untuk menghubungi kami</p>
      </div>
      <a href="https://api.whatsapp.com/send/?phone=63851284526&text=kak+saya+mau+konsultasi+tentang+innerlight&type=phone_number&app_absent=0" 
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