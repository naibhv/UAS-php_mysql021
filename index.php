<?php 
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NayiBakeShop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h1>NayiBakeShop</h1>
            </div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#shop">Shop</a></li>
                <li><a href="#order">Order Now</a></li>
                <li><a href="admin/login.php" class="tbl-admin">Login Admin</a></li>
            </ul>
        </nav>
    </header>

<section id="home" class="hero">
        <div class="hero-text">
            <h2>Freshly Baked with Love</h2>
            <p>Indulge in our delicious, homemade cookies!</p>
            <a href="#order" class="cta-button">Order Now</a>
        </div>
    </section>
    <html style="scroll-behavior: smooth;">

</head>
<div id="about" class="about-container">
    <div class="about-content">
        <img src="pribadi.jpg.jpg" alt="Your Photo" class="profile-photo">
        <h1>About Me</h1>
        <p>
            Hi there! Saya I Gusti Ayu Nairiswari Bhava NIM 2405551021. Saya adalah mahaasiswi teknologi informasi yang memiliki hobi membuat kue.
        </p>
        <p>
            Setiap kue dibuat hommade dengan cinta, menggunakan bahan-bahan terbaik untuk memastikan Anda mendapatkan rasa terbaik di setiap batch.
        </p>
        <p>
            Thank you for visiting my website!
        </p>
    </div>
</div>

</head>
<body>
    <div class="header">
        <h1>Welcome to Our Cookie Shop</h1>
        <p>Freshly baked cookies, just for you!</p>
    </div>
<main>
    <section id="shop" class="products">
        <article class="product">
            <img src="https://i.pinimg.com/736x/3a/7b/e3/3a7be3b12dcfd779025a56d7e3a9e609.jpg" alt="Chocolate Chip Cookies">
            <h2>Chocolate Chip Cookies</h2>
            <p class="price">Rp 12.000/each</p>
            <button class="view-details-btn" data-cookie="choco-chip">View Details</button>
            <script src="cookie-details.js"></script>
        </article>
        <article class="product">
            <img src="https://i.pinimg.com/736x/69/57/1f/69571f045e0e04171c492f2a84157fb5.jpg" alt="Milky Orange Cookies">
            <h2>Milky Orange Cookies</h2>
            <p class="price">Rp 20.000/each</p>
            <button class="view-details-btn" data-cookie="milky-orange">View Details</button>
            <script src="cookie-details.js"></script>
        </article>
        <article class="product">
            <img src="https://i.pinimg.com/736x/9e/53/61/9e5361798fa0866b0cd7a4d8c9fdd417.jpg" alt="Heart Sugar Cookies">
            <h2>Heart Sugar Cookies</h2>
            <p class="price">Rp 15.000/each</p>
            <button class="view-details-btn" data-cookie="heart-sugar">View Details</button>
            <script src="cookie-details.js"></script>
        </article>
    </section>

    <div id="details-modal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2 id="cookie-name"></h2>
            <p id="cookie-description"></p>
            <h3>Ingredients:</h3>
            <ul id="cookie-ingredients"></ul>
        </div>
    </div>

    <div id="order" class="order-container">
         <h1>Place Your Order</h1>
            <form action="process_order.php" method="POST">
            <div class="form-group">
                <label for="product">Choose Your Product:</label>
                <select id="product" name="product" required>
                <option value="Chocolate Chip Cookies">Chocolate Chip Cookies</option>
                <option value="Heart Sugar Cookies">Heart Sugar Cookies</option>
                <option value="Peanut Butter Cookies">Peanut Butter Cookies</option>
                <option value="Milky Orange Cookies">Milky Orange Cookies</option>
                 </select>
            </div>

     <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" max="100" required>
    </div>
        
    <div class="form-group">
            <label for="address">Delivery Address:</label>
            <textarea id="address" name="address" rows="4" required></textarea>
    </div>    
    <button type="submit" class="submit-button">Place Order</button>
    </form>
    </div>

    <footer id ="contact" class="footer">
    <div class="footer-container">
      <div class="footer-section">
        <h2 class="footer-logo">NayiBakeShop</h2>
        <p class="footer-text">Made by happiness everyday.</p>
        <p class="footer-text"> Each cake is made hommade with love, using the finest ingredients to ensure you get the best flavor in every batch.</p>
      </div>
      <div class="footer-section">
        <h3>Quick Links</h3>
        <ul class="footer-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#shop">Collections</a></li>
          <li><a href="#order">Contact</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Contact Info</h3>
          <p>ID Line: nairis.bhava</p>
          <p>Nama: I Gusti Ayu Nairiswari Bhava</p>
          <p>NIM: 2405551021</p>
          <p>Universitas: Teknik Udayana</p>
          <p>Program: Teknologi Informasi</p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2024 Your Brand. All Rights Reserved.</p>
    </div>
  </footer>
</body>

<?php
include_once("inc/inc_koneksi.php");
$sql1 = "SELECT * FROM cookie ORDER BY id DESC LIMIT 3";
$r1 = mysqli_query($koneksi, $sql1);
if (!$r1) {
    echo "Error fetching cookie: " . mysqli_error($koneksi);
    exit();
}
?>

