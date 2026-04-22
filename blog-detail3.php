<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Makin Cantik Setiap Hari - Innerlight</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;600&display=swap" rel="stylesheet">
  <style>
    body {
      background-color: #f9f8f5;
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 900px;
      margin: 4rem auto;
      padding: 1rem;
    }

    .blog-box, .comment-box {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
      padding: 2rem;
      margin-bottom: 2rem;
    }

    .blog-box img {
      width: 100%;
      max-width: 600px;
      height: auto;
      display: block;
      margin: 0 auto 1.5rem;
      border-radius: 10px;
    }

    .blog-box h1 {
      font-size: 1.8rem;
      margin-bottom: 0.5rem;
    }

    .blog-box p {
      line-height: 1.6;
      margin-bottom: 1rem;
    }

    .blog-box h2 {
      color: #004B3D;
      margin-top: 2rem;
    }

    .blog-box h3 {
      margin-top: 1.5rem;
    }

    .comment-box h2 {
      color: #004B3D;
      margin-bottom: 1rem;
    }

    .comment-box {
  background: #f9f9f9;
  padding: 2rem;
  border-radius: 12px;
}

.comment-box h2 {
  color: #004B3D;
  margin-bottom: 1rem;
}

/* Input & textarea */
.comment-box textarea,
.comment-box input[type="text"],
.comment-box input[type="email"] {
  width: 100%;
  padding: 0.75rem;
  margin-bottom: 1rem;
  border: 1px solid #ddd;
  border-radius: 8px;
  font-family: inherit;
  transition: 0.3s;
  box-sizing: border-box; /* FIX UTAMA */
}

.comment-box textarea:focus,
.comment-box input:focus {
  border-color: #004B3D;
  outline: none;
}

/* Checkbox fix */
.checkbox-group {
  display: flex;
  align-items: center;
  gap: 8px;
  margin-bottom: 1.5rem;
}

.checkbox-group input[type="checkbox"] {
  width: auto;
  margin: 0;
  cursor: pointer;
}

.checkbox-group label {
  font-size: 14px;
  color: #555;
  cursor: pointer;
}

/* Button */
.comment-box button {
  background-color: #004B3D;
  color: white;
  padding: 0.75rem 1.5rem;
  border: none;
  border-radius: 8px;
  font-weight: 600;
  cursor: pointer;
  transition: 0.3s;
}

.comment-box button:hover {
  background-color: #004B3D;
}

    .topbar {
      background-color: #004B3D;
      color: white;
      text-align: center;
      padding: 0.5rem;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 1.5rem;
    }

    .nav-links li a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
    }

    .logo {
      height: 40px;
    }

    footer {
      background-color: #fff9ec;
      padding: 2rem;
      font-size: 0.9rem;
      text-align: center;
      color: #444;
      margin-top: 2rem;
    }

    .logo-footer {
      height: 40px;
      margin-bottom: 0.5rem;
    }
  </style>
</head>
<body>

  <!-- Topbar & Navbar -->
  <div class="topbar">Dapatkan diskon 5% untuk semua produk dengan kupon Beauty Project</div>
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

  <!-- MAIN CONTENT -->
  <div class="container">

    <!-- Blog Detail -->
    <div class="blog-box">
      <img src="blog3.png" alt="Blog Image">
      <h1>Diskon 20% Member Baru</h1>
<p><small>Informasi Member Baru</small></p>

<p>Beauty Project memberikan promo spesial untuk Anda yang baru pertama kali melakukan pembelian. Dapatkan potongan harga sebesar 20% untuk setiap pembelian produk pilihan kami.</p>

<p>Promo ini dibuat untuk memberikan kesempatan kepada Anda mencoba rangkaian produk Beauty Project dengan harga lebih terjangkau, sekaligus merasakan manfaat perawatan kulit yang lebih sehat dan terawat.</p>

<p>Dengan menjadi member baru, Anda juga berkesempatan mendapatkan informasi promo terbaru, penawaran eksklusif, serta rekomendasi produk sesuai kebutuhan kulit Anda.</p>

<h2>Cara Mendapatkan Diskon</h2>
<p>Untuk mendapatkan diskon 20% sebagai member baru, Anda dapat langsung menghubungi admin kami melalui WhatsApp. Nomor admin dapat dilihat pada halaman <b>Contact</b> di website ini.</p>

<h3>Keuntungan Member Baru</h3>
<p>- Potongan harga 20% untuk pembelian pertama</p>
<p>- Akses promo dan penawaran khusus</p>
<p>- Konsultasi produk sesuai kebutuhan kulit</p>

<h3>Mulai Perawatan Kulit Anda Sekarang</h3>
<p>Jangan lewatkan kesempatan ini untuk mendapatkan produk Beauty Project dengan harga spesial dan mulai perjalanan Anda menuju kulit yang lebih sehat, cerah, dan glowing.</p>
    </div>

    <!-- Comment Form -->
    <div class="comment-box">
  <h2>Leave A Comment</h2>

  <form id="commentForm">
    <!-- WAJIB ADA ID -->
    <textarea id="commentText" placeholder="Type here.." rows="5" required></textarea>

    <input type="text" id="commentName" placeholder="Name*" required>
    <input type="email" placeholder="Email*" required>

    <div class="checkbox-group">
      <input type="checkbox" id="save">
      <label for="save">Save my info for next time</label>
    </div>

    <button type="submit">Post Comment »</button>
  </form>
</div>

<!-- Area komentar tampil -->
<div id="commentList">
  <h3>Comments</h3>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

  const form = document.getElementById("commentForm");
  const commentList = document.getElementById("commentList");

  // LOAD dari localStorage
  function loadComments() {
    const comments = JSON.parse(localStorage.getItem("comments")) || [];
    commentList.innerHTML = "<h3>Comments</h3>";

    comments.forEach(c => {
      showComment(c.name, c.text, c.date);
    });
  }

  // TAMPILKAN KE UI
  function showComment(name, text, date) {
    const div = document.createElement("div");
    div.innerHTML = `
      <strong>${name}</strong>
      <p>${text}</p>
      <small>${date}</small>
      <hr>
    `;
    commentList.appendChild(div);
  }

  // SUBMIT
  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const name = document.getElementById("commentName").value;
    const text = document.getElementById("commentText").value;
    const date = new Date().toLocaleString();

    const newData = { name, text, date };

    let comments = JSON.parse(localStorage.getItem("comments")) || [];
    comments.push(newData);

    localStorage.setItem("comments", JSON.stringify(comments));

    showComment(name, text, date);

    form.reset();
  });

  // LOAD AWAL
  loadComments();

});
</script>

  </div>

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