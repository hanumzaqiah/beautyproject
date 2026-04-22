<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beauty Project</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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

      <?php if (isset($_SESSION['username'])): ?>
        <li><a href="#">Halo, <?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
        <li><a href="logout.php">Logout</a></li>
      <?php else: ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
      <?php endif; ?>
    </ul>
  </nav>

  <!-- HERO SECTION -->
  <section class="bagian-hero">
    <div class="kontainer-hero">
      <div class="teks-hero">
        <h1>BEAUTY PROJECT</h1>
        <p>Cerahkan Kulit Mu sejak pemakaian pertama</p>
        <a href="shop.php" class="tombol-emas">SELENGKAPNYA</a>
      </div>
      <div class="gambar-hero"></div>
    </div>
  </section>

  <!-- ABOUT PREVIEW -->
  <section class="about-preview">
    <img src="aboutmodel.png" alt="Model About" />
    <div>
      <h2>About <span>Beauty Project</span></h2>
      <p>Temukan Produk sesuai kebutuhan Anda</p>
      <p>Beauty Project Adalah website simulasi penjualan produk kecantikan yang dibuat untuk kebutuhan pembelajaran dan pengembangan desain web. Website ini menampilkan berbagai produk seperti sabun, face mist, collagen drink, sunscreen, paket skincare, dan produk khusus acne.</p>
      <a href="about.php" class="btn-outline">Selengkapnya</a>
    </div>
  </section>

  <!-- SKIN ANALYSIS -->
<section class="skin-analysis">
  <h2>Analisis <span>Kebutuhan Kulit</span></h2>

  <form method="POST">
    <div class="analysis-form">

      <!-- TIPE KULIT -->
      <label>Tipe Kulit:</label>
      <select name="skin_type">
        <option value="">-- Pilih --</option>
        <option value="kering">Kering</option>
        <option value="berminyak">Berminyak</option>
        <option value="kombinasi">Kombinasi</option>
        <option value="sensitif">Sensitif</option>
      </select>

      <!-- MASALAH KULIT -->
      <label>Masalah Kulit:</label>
      <select name="skin_problem">
        <option value="">-- Pilih --</option>
        <option value="jerawat">Jerawat</option>
        <option value="kusam">Kusam</option>
        <option value="flek">Flek Hitam</option>
        <option value="kering">Kering</option>
      </select>

      <button type="submit" name="analyze_skin" class="btn-gold">Analisis</button>
    </div>
  </form>

  <?php
  // 🔥 PROSES ANALISIS
  if (isset($_POST['analyze_skin'])) {
      $skin_type = $_POST['skin_type'];
      $skin_problem = $_POST['skin_problem'];

      $_SESSION['skin_type'] = $skin_type;
      $_SESSION['skin_problem'] = $skin_problem;

      echo "<div class='result-box'>";
      echo "<h3>Rekomendasi Produk</h3>";

      // 🔥 LOGIC REKOMENDASI
      if ($skin_problem == "jerawat") {
          echo "<p>Disarankan: BEAUTY ACNE PRODUCT</p>";
          echo "<a href='product4.php' class='btn-outline'>Lihat Produk</a>";
      } elseif ($skin_problem == "kusam") {
          echo "<p>Disarankan: BEAUTY COLLAGEN DRINK</p>";
          echo "<a href='product2.php' class='btn-outline'>Lihat Produk</a>";
      } elseif ($skin_problem == "kering") {
          echo "<p>Disarankan: BEAUTY FACE MIST</p>";
          echo "<a href='product1.php' class='btn-outline'>Lihat Produk</a>";
      } elseif ($skin_problem == "flek") {
          echo "<p>Disarankan: BEAUTY PROJECT SKINCARE</p>";
          echo "<a href='product5.php' class='btn-outline'>Lihat Produk</a>";
      } else {
          echo "<p>Pilih kebutuhan kulit terlebih dahulu</p>";
      }

      echo "</div>";
  }
  ?>

  <?php if (isset($_SESSION['skin_type'])): ?>
    <div class="saved-pref">
      <h4>Preferensi Tersimpan:</h4>
      <p>Tipe Kulit: <?= $_SESSION['skin_type']; ?></p>
      <p>Masalah: <?= $_SESSION['skin_problem']; ?></p>
    </div>
  <?php endif; ?>

</section>

  <!-- SHOP -->
  <section class="best-seller">
    <h2>Best Seller <span>Beauty Project</span></h2>
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

    <div class="product-button">
      <a href="shop.php" class="btn-gold">Produk Lainnya</a>
    </div>
  </section>

  <!-- WHY INNERLIGHT -->
  <section class="why-innerlight">
    <h2>Kenapa Harus <span>Beauty Project</span> ?</h2>
    <div class="why-features">
      <div class="feature-box">
        <img src="freeongkir.png" alt="Free Ongkir" />
        <p>Free Ongkir</p>
      </div>
      <div class="feature-box">
        <img src="hargadiskon.png" alt="Harga Diskon" />
        <p>Harga Diskon</p>
      </div>
      <div class="feature-box">
        <img src="freegift.png" alt="Free Gift" />
        <p>Free Gift</p>
      </div>
    </div>
  </section>

  <!-- BLOG SECTION -->
  <section id="blog" class="blog-section">
    <h2>Blog <span>Beauty Project</span></h2>
    <p class="blog-sub">Rangkaian Produk Perawatan Kulit</p>
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

  <!-- MEDIA SECTION -->
  <section id="media" class="media-section">
    <h2>Liputan <span>Media</span></h2>
    <p class="media-sub">Peliputan Beauty Product Media Nasional</p>
    <div class="media-cards">
      <img src="media1.png" alt="Media 1" />
      <img src="media2.png" alt="Media 2" />
      <img src="media3.png" alt="Media 3" />
      <img src="media4.png" alt="Media 4" />
      <img src="media5.png" alt="Media 5" />
    </div>
  </section>

  <!-- CTA HUBUNGI ADMIN -->
  <section class="cta-section">
    <div class="cta-box">
      <div class="cta-text">
        <h3>Ada Pertanyaan?</h3>
        <p>Jangan ragu untuk menghubungi kami</p>
      </div>
      <a href="https://api.whatsapp.com/send/?phone=63851284526&text=kak+saya+mau+konsultasi+tentang+beautyproduct&type=phone_number&app_absent=0" 
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
