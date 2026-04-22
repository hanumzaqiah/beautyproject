<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Blog - Innerlight</title>

  <link rel="stylesheet" href="blog.css"/>

  <style>
    /* Hilangkan garis bawah link product */
    .product-link,
    .product-link *{
      text-decoration: none;
      color: inherit;
    }

    /* Hover card */
    .product-card{
      transition: 0.3s;
    }

    .product-link:hover .product-card{
      transform: translateY(-5px);
    }
  </style>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

  <!-- Topbar -->
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


  <!-- Blog Section -->
  <section id="blog" class="blog-section">
    <h2>Blog <span>Beauty Project</span></h2>
    <p class="blog-sub">Dapatkan Informasi Terbaru Tentang Beauty Project</p>

    <div class="blog-cards">

      <div class="blog-card">
        <img src="blog1.png" alt="Blog 1" />
        <h3>Menghadirkan Berbagai Produk</h3>
        <p>Soap, face mist, collagen, acne treatment, dan sunscreen yang diformulasikan untuk membantu menjaga kulit tetap bersih, sehat, dan tampak lebih cerah alami.</p>
        <a href="blog-detail.php">READ MORE</a>
        <div class="meta">April 20, 2026 •  Comments</div>
      </div>

      <div class="blog-card">
        <img src="blog2.png" alt="Blog 2" />
        <h3>Testimoni Pengguna</h3>
        <p>Banyak pengguna merasakan perubahan positif setelah pemakaian rutin, mulai dari kulit yang lebih bersih,  dan glowing.</p>
        <a href="blog-detail2.php">READ MORE</a>
        <div class="meta">April 20, 2026 •  Comments</div>
      </div>

      <div class="blog-card">
        <img src="blog3.png" alt="Blog 3" />
        <h3>Diskon 20% Member Baru</h3>
        <p>Nikmati potongan harga 20% untuk pembelian pertama dengan cara menghubungi admin di whatsapp.</p>
        <a href="blog-detail3.php">READ MORE</a>
        <div class="meta">April 20, 2026 •  Comments</div>
      </div>

    </div>
  </section>

   <!-- 🔥 INSIGHT & TREND -->
<div class="insight-box">

  <h3>Insight & Tren Kecantikan</h3>

  <!-- FILTER -->
  <form method="POST" class="filter-form">
    <select name="trend">
      <option value="">-- Pilih Tren --</option>
      <option value="jerawat">Jerawat</option>
      <option value="glowing">Glowing</option>
      <option value="antiaging">Anti Aging</option>
    </select>

    <button type="submit" name="filter" class="btn-outline">Filter</button>
  </form>

  <?php
  // 🔥 AMANKAN SESSION
  if (session_status() === PHP_SESSION_NONE) {
      session_start();
  }

  // 🔥 SIMPAN PREFERENSI
  if (isset($_POST['filter'])) {
      $_SESSION['trend'] = isset($_POST['trend']) ? $_POST['trend'] : '';
  }

  $trend = isset($_SESSION['trend']) ? $_SESSION['trend'] : '';
  ?>

  <!-- 🔥 CHART -->
  <div class="chart-box">

    <?php
    $data = array(
      "jerawat" => 70,
      "glowing" => 95,
      "antiaging" => 60
    );

    foreach ($data as $key => $value):
      if ($trend == "" || $trend == $key):
    ?>

      <div class="chart-item">
        <span><?php echo ucfirst($key); ?></span>
        <div class="bar" style="--value: <?php echo $value; ?>%; width: <?php echo $value; ?>%"></div>
      </div>

    <?php
      endif;
    endforeach;
    ?>

  </div>

  <!-- 🔥 INSIGHT -->
  <div class="insight-text">
    <h4>Insight:</h4>

   <?php
if ($trend == "jerawat") {
    echo "<p>
    <strong>Kenapa tren ini naik:</strong><br>
    Tren perawatan jerawat mengalami peningkatan karena semakin banyak individu yang mengalami masalah kulit akibat perubahan gaya hidup modern. 
    Aktivitas di luar ruangan, stres, serta penggunaan produk yang tidak sesuai membuat kasus jerawat semakin umum terjadi.<br><br>

    <strong>Penyebab:</strong><br>
    Faktor utama meliputi polusi udara, perubahan hormon, pola makan yang tidak sehat, serta kebiasaan penggunaan masker dalam waktu lama (maskne). 
    Selain itu, kurangnya pemahaman dalam memilih produk skincare juga memperparah kondisi kulit.<br><br>

    <strong>Dampak:</strong><br>
    Dampaknya adalah meningkatnya permintaan terhadap produk khusus jerawat seperti acne treatment, serum, dan facial wash. 
    Di sisi lain, pengguna menjadi lebih selektif dalam memilih produk dan mulai memperhatikan kandungan bahan aktif yang digunakan.
    </p>";

} elseif ($trend == "glowing") {
    echo "<p>
    <strong>Kenapa tren ini naik:</strong><br>
    Tren kulit glowing meningkat karena adanya perubahan standar kecantikan yang lebih menekankan pada kulit sehat, cerah, dan bercahaya alami. 
    Media sosial dan influencer juga berperan besar dalam mempopulerkan tren ini.<br><br>

    <strong>Penyebab:</strong><br>
    Banyaknya konten skincare routine, review produk, serta edukasi tentang pentingnya perawatan kulit membuat masyarakat lebih sadar akan pentingnya menjaga kesehatan kulit. 
    Produk seperti serum vitamin C, face mist, dan collagen menjadi populer karena memberikan hasil yang cepat terlihat.<br><br>

    <strong>Dampak:</strong><br>
    Dampaknya adalah meningkatnya penjualan produk brightening dan hydrating. 
    Selain itu, pengguna cenderung mulai menerapkan rutinitas skincare yang lebih terstruktur dan konsisten untuk mendapatkan hasil maksimal.
    </p>";

} elseif ($trend == "antiaging") {
    echo "<p>
    <strong>Kenapa tren ini naik:</strong><br>
    Tren anti aging meningkat karena kesadaran masyarakat terhadap penuaan dini semakin tinggi. 
    Banyak individu mulai melakukan perawatan sejak usia muda sebagai langkah pencegahan.<br><br>

    <strong>Penyebab:</strong><br>
    Faktor seperti paparan sinar UV, polusi, stres, serta gaya hidup menjadi penyebab utama munculnya tanda-tanda penuaan. 
    Selain itu, edukasi mengenai pentingnya perawatan dini juga semakin luas di masyarakat.<br><br>

    <strong>Dampak:</strong><br>
    Dampaknya adalah meningkatnya penggunaan produk dengan kandungan seperti retinol, collagen, dan peptide. 
    Pengguna juga mulai fokus pada perawatan jangka panjang dibandingkan hanya perawatan instan.
    </p>";

} else {
    echo "<p>
    <strong>Kenapa tren ini naik:</strong><br>
    Secara umum, tren kecantikan meningkat karena kesadaran masyarakat terhadap pentingnya merawat kulit semakin tinggi.<br><br>

    <strong>Penyebab:</strong><br>
    Faktor utama meliputi pengaruh media sosial, edukasi skincare, serta meningkatnya kebutuhan akan penampilan yang lebih baik.<br><br>

    <strong>Dampak:</strong><br>
    Dampaknya adalah meningkatnya permintaan produk skincare dan munculnya berbagai inovasi produk yang menyesuaikan kebutuhan pengguna.
    </p>";
}
?>
  </div>

  <!-- 🔥 SIMPAN PREFERENSI -->
  <?php if (!empty($trend)): ?>
    <div class="saved-pref">
      <p>Preferensi tersimpan: <strong><?php echo $trend; ?></strong></p>
    </div>
  <?php endif; ?>

</div>

  <!-- CTA -->
  <section class="cta-section">
    <div class="cta-box">
      <div class="cta-text">
        <h3>Ada Pertanyaan?</h3>
        <p>Jangan ragu untuk menghubungi kami</p>
      </div>

      <a href="https://api.whatsapp.com/send/?phone=63851284526&text=kak+saya+mau+konsultasi+tentang+innerlight&type=phone_number&app_absent=0"
         class="cta-button"
         target="_blank">
         HUBUNGI KAMI
      </a>
    </div>
  </section>

  <!-- New Arrival -->
  <section class="new-arrival">
    <h2>New <span>Arrival</span></h2>

    <div class="arrival-grid">

      <a href="product.php" class="product-link">
        <div class="product-card">
          <img src="cart1.png">
          <p class="product-name">SOAP</p>
          <p class="product-price">Skincare Rp65.000</p>
        </div>
      </a>

      <a href="product1.php" class="product-link">
        <div class="product-card">
          <img src="cart2.png">
          <p class="product-name">FACE MIST</p>
          <p class="product-price">Skincare Rp45.000</p>
        </div>
      </a>

      <a href="product2.php" class="product-link">
        <div class="product-card">
          <img src="cart3.png">
          <p class="product-name">COLLAGEN DRINK</p>
          <p class="product-price">Skincare Rp60.000</p>
        </div>
      </a>

      <a href="product3.php" class="product-link">
        <div class="product-card">
          <img src="cart4.png">
          <p class="product-name">SUNSCREAM</p>
          <p class="product-price">Skincare Rp60.000</p>
        </div>
      </a>

      <a href="product4.php" class="product-link">
        <div class="product-card">
          <img src="cart5.png">
          <p class="product-name">ACNE PRODUCT</p>
          <p class="product-price">Skincare Rp50.000</p>
        </div>
      </a>

      <a href="product5.php" class="product-link">
        <div class="product-card">
          <img src="cart6.png">
          <p class="product-name">PAKET SKINCARE</p>
          <p class="product-price">Skincare Rp210.000</p>
        </div>
      </a>

    </div>
  </section>

  <!-- Footer -->
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