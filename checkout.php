<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $company = $_POST['company'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $apartment = $_POST['apartment'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $postcode = $_POST['postcode'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $notes = $_POST['notes'];

    // Ambil data dari tabel cart
    $cart_items = [];
    $result = mysqli_query($conn, "SELECT * FROM cart");
    $total = 0;

    while ($row = mysqli_fetch_assoc($result)) {
        $cart_items[] = $row;
        $total += $row['price'] * $row['quantity'];
    }

    if (count($cart_items) === 0) {
        echo "<script>alert('Keranjang kosong.'); window.location='cart.php';</script>";
        exit();
    }

    // Simpan data order
    $sql = "INSERT INTO orders (first_name, last_name, company, country, address, apartment, city, province, postcode, phone, email, notes, total)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssssd", $firstName, $lastName, $company, $country, $address, $apartment, $city, $province, $postcode, $phone, $email, $notes, $total);
    $stmt->execute();
    $order_id = $stmt->insert_id;

    // Simpan detail order
    foreach ($cart_items as $item) {
        $subtotal = $item['price'] * $item['quantity'];
        $sql_detail = "INSERT INTO order_items (order_id, product_id, nama_produk, qty, harga, subtotal)
                       VALUES (?, ?, ?, ?, ?, ?)";
        $stmt_detail = $conn->prepare($sql_detail);
        $stmt_detail->bind_param("iisidd", $order_id, $item['product_id'], $item['product_name'], $item['quantity'], $item['price'], $subtotal);
        $stmt_detail->execute();
    }

    // Hapus semua isi cart setelah checkout
    mysqli_query($conn, "DELETE FROM cart");

    // Redirect ke halaman sukses
    header("Location: sukses.php");
    exit();
}
?>

<!-- Bagian HTML tetap, hanya bagian PHP yang diubah -->
<!-- Bagian ini untuk menampilkan data dari database `cart` -->

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Checkout - Innerlight</title>
  <link rel="stylesheet" href="checkout.css" />
</head>
<body>

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

  <section class="checkout-container">
    <h1>Checkout</h1>
    <form method="post" action="checkout.php">
      <div class="checkout-grid">
        <div class="checkout-form">
          <h3>Billing Details</h3>
          <input type="text" name="first_name" placeholder="First Name" required />
          <input type="text" name="last_name" placeholder="Last Name" required />
          <input type="text" name="company" placeholder="Company Name (optional)" />
          <input type="text" name="country" value="Indonesia" readonly />
          <input type="text" name="address" placeholder="Street Address" required />
          <input type="text" name="apartment" placeholder="Apartment, suite, unit, etc. (optional)" />
          <input type="text" name="city" placeholder="Town / City" required />
          <select name="province" required>
          <option value="">-- Pilih Provinsi --</option>
          <option value="Aceh">Aceh</option>
          <option value="Sumatera Utara">Sumatera Utara</option>
          <option value="Sumatera Barat">Sumatera Barat</option>
          <option value="Riau">Riau</option>
          <option value="Kepulauan Riau">Kepulauan Riau</option>
          <option value="Jambi">Jambi</option>
          <option value="Bengkulu">Bengkulu</option>
          <option value="Sumatera Selatan">Sumatera Selatan</option>
          <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
          <option value="Lampung">Lampung</option>
          <option value="DKI Jakarta">DKI Jakarta</option>
          <option value="Jawa Barat">Jawa Barat</option>
          <option value="Banten">Banten</option>
          <option value="Jawa Tengah">Jawa Tengah</option>
          <option value="DI Yogyakarta">DI Yogyakarta</option>
          <option value="Jawa Timur">Jawa Timur</option>
          <option value="Bali">Bali</option>
          <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
          <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
          <option value="Kalimantan Barat">Kalimantan Barat</option>
          <option value="Kalimantan Tengah">Kalimantan Tengah</option>
          <option value="Kalimantan Selatan">Kalimantan Selatan</option>
          <option value="Kalimantan Timur">Kalimantan Timur</option>
          <option value="Kalimantan Utara">Kalimantan Utara</option>
          <option value="Sulawesi Utara">Sulawesi Utara</option>
          <option value="Gorontalo">Gorontalo</option>
          <option value="Sulawesi Tengah">Sulawesi Tengah</option>
          <option value="Sulawesi Barat">Sulawesi Barat</option>
          <option value="Sulawesi Selatan">Sulawesi Selatan</option>
          <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
          <option value="Maluku">Maluku</option>
          <option value="Maluku Utara">Maluku Utara</option>
          <option value="Papua">Papua</option>
          <option value="Papua Barat">Papua Barat</option>
          <option value="Papua Selatan">Papua Selatan</option>
          <option value="Papua Pegunungan">Papua Pegunungan</option>
          <option value="Papua Tengah">Papua Tengah</option>
          <option value="Papua Barat Daya">Papua Barat Daya</option>
        </select>

          <input type="text" name="postcode" placeholder="Postcode / ZIP" required />
          <input type="text" name="phone" placeholder="Phone" required />
          <input type="email" name="email" placeholder="Email Address" required />
          <textarea name="notes" rows="3" placeholder="Order Notes (optional)"></textarea>
        </div>

        <div class="checkout-summary">
          <h3>Your Order</h3>
          <p><strong>Product</strong> <span><strong>Subtotal</strong></span></p>

          <?php
          $total = 0;
          $result = mysqli_query($conn, "SELECT * FROM cart");
          while ($row = mysqli_fetch_assoc($result)):
              $subtotal = $row['price'] * $row['quantity'];
              $total += $subtotal;
          ?>
            <p><?= htmlspecialchars($row['product_name']) ?> × <?= $row['quantity'] ?>
              <span>Rp<?= number_format($subtotal, 0, ',', '.') ?></span>
            </p>
          <?php endwhile; ?>

          <p>Subtotal <span>Rp<?= number_format($total, 0, ',', '.') ?></span></p>
          <p>Shipping <span>Free shipping</span></p>
          <p class="total">Total <span>Rp<?= number_format($total, 0, ',', '.') ?></span></p>

          <div class="payment-box">
            Make your payment directly into our bank account. Use your Order ID as the payment reference.
          </div>
          <button class="btn-order" type="submit">Place Order</button>
        </div>
      </div>
    </form>
  </section>

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
