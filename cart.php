<?php
// cart.php
session_start(); // 🔥 TAMBAHAN SAJA
include 'koneksi.php';

// Handle update quantity & delete (TIDAK DIUBAH)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['apply_coupon'])) {
    if (isset($_POST['update'])) {
        foreach ($_POST['quantity'] as $id => $qty) {
            $qty = max(1, intval($qty));
            mysqli_query($conn, "UPDATE cart SET quantity = $qty WHERE id = $id");
        }
    } elseif (isset($_POST['delete'])) {
        $id = intval($_POST['delete']);
        mysqli_query($conn, "DELETE FROM cart WHERE id = $id");
    }
    header("Location: cart.php");
    exit;
}

$result = mysqli_query($conn, "SELECT * FROM cart");
$total = 0;

// 🔥 VAR COUPON (TAMBAHAN)
$discount = 0;
$final_total = 0;
$coupon_applied = false;

// 🔥 SIMPAN COUPON KE SESSION
if (isset($_POST['apply_coupon'])) {
    $coupon = strtolower(trim($_POST['coupon']));

    if ($coupon == 'beauty project') {
        $_SESSION['coupon'] = 'beauty project';
    } else {
        unset($_SESSION['coupon']);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cart - Innerlight</title>
  <link rel="stylesheet" href="cart.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <style>
    input[type="number"] {
      width: 60px;
      padding: 0.3rem;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .btn-remove {
      background: none;
      border: none;
      color: red;
      cursor: pointer;
      font-weight: bold;
    }
  </style>
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

<section class="cart-section">
  <h2>Cart <span>Product</span></h2>
  <form method="POST" action="cart.php">
    <div class="cart-container">
      <div class="cart-left">
        <table class="cart-table">
          <thead>
            <tr>
              <th>Product</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Subtotal</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): 
              $subtotal = $row['price'] * $row['quantity'];
              $total += $subtotal;
            ?>
            <tr>
              <td class="product-info">
                <img src="cart1.png" alt="Produk">
                <span><?= htmlspecialchars($row['product_name']) ?></span>
              </td>
              <td>Rp<?= number_format($row['price'], 0, ',', '.') ?></td>
              <td>
                <input type="number" name="quantity[<?= $row['id'] ?>]" value="<?= $row['quantity'] ?>" min="1" />
              </td>
              <td>Rp<?= number_format($subtotal, 0, ',', '.') ?></td>
              <td>
                <button class="btn-remove" name="delete" value="<?= $row['id'] ?>" onclick="return confirm('Hapus item ini?')">Hapus</button>
              </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>

        <div class="cart-actions">
          <a href="shop.php" class="btn-outline">Update Cart</a>
        </div>

        <!-- 🔥 COUPON (TIDAK DIUBAH STRUKTUR, CUMA NAME DITAMBAH) -->
        <div class="coupon-section">
          <input type="text" name="coupon" placeholder="Coupon code">
          <button class="btn-outline" type="submit" name="apply_coupon">Apply Coupon</button>
        </div>
      </div>

      <div class="cart-right">
        <div class="cart-summary">
          <h3>Cart Totals</h3>

          <?php
          // 🔥 HITUNG DARI SESSION (TAMBAHAN)
          if (isset($_SESSION['coupon']) && $_SESSION['coupon'] == 'beauty project') {
              $discount = $total * 0.05;
              $coupon_applied = true;
          }

          $final_total = $total - $discount;
          ?>

          <p>Subtotal <span>Rp<?= number_format($total, 0, ',', '.') ?></span></p>

          <?php if ($coupon_applied): ?>
          <p>Potongan (5%) <span>- Rp<?= number_format($discount, 0, ',', '.') ?></span></p>
          <?php endif; ?>

          <p>Shipping <span>Free shipping</span></p>
          <p class="address">Shipping to Jawa Timur.<br><a href="#"></a></p>

          <p><strong>Total</strong> 
          <strong>Rp<?= number_format($final_total, 0, ',', '.') ?></strong></p>

          <a href="checkout.php" class="btn-gold">Proceed To Checkout</a>
        </div>
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