<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper(".product-slider", {
  slidesPerView: 2,
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  breakpoints: {
    640: { slidesPerView: 2 },
    768: { slidesPerView: 3 },
    1024: { slidesPerView: 4 },
  }
});
</script>

<section class="my-6">
  <h2 class="text-2xl font-bold mb-4">Produk Populer</h2>
  <div class="swiper product-slider">
    <div class="swiper-wrapper">
      <?php while($p = $products->fetch_assoc()): ?>
      <div class="swiper-slide">
        <div class="border p-4 rounded-lg shadow-md hover:shadow-lg">
          <img src="assets/images/products/<?= htmlspecialchars($p['gambar']) ?>" class="rounded-md mb-2" alt="<?= htmlspecialchars($p['nama']) ?>">
          <h3 class="text-lg font-semibold"><?= htmlspecialchars($p['nama']) ?></h3>
          <p class="text-sm text-gray-600 mb-2"><?= number_format($p['harga']) ?> IDR</p>
          <a href="user/buy_product.php?id=<?= $p['id'] ?>" class="text-white bg-blue-500 hover:bg-blue-600 rounded px-3 py-1 inline-block">Beli</a>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>



<link rel="stylesheet" href="assets/css/slider.css">
<script src="assets/js/slider.js" defer></script>

<div class="slider-container">
    <div class="slider-track">
        <span>🔥 Promo! Beli iPhone 15 Pro cuma Rp 20.000 di misi spesial!</span>
        <span>🚀 Update: Penarikan saldo diproses dalam 1x24 jam.</span>
        <span>🎯 Event Referral Berhadiah sudah dimulai!</span>
        <span>💎 Raih cashback hingga 5% untuk pembelian produk tertentu!</span>
    </div>
</div>

<?php
include 'db.php';
$products = $conn->query("SELECT * FROM products ORDER BY id DESC LIMIT 10");
?>

<section class="products">
  <h2 class="text-2xl font-bold mb-4">Produk Terbaru</h2>
  <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    <?php while($p = $products->fetch_assoc()): ?>
      <div class="border rounded-lg p-2 shadow hover:shadow-lg transition">
        <img src="assets/images/products/<?= htmlspecialchars($p['gambar']) ?>" class="rounded-lg mb-2" alt="<?= htmlspecialchars($p['nama']) ?>">
        <h3 class="text-lg font-semibold"><?= htmlspecialchars($p['nama']) ?></h3>
        <p class="text-gray-600 text-sm mb-2"><?= number_format($p['harga']) ?> IDR</p>
        <a href="#" class="text-blue-500 hover:underline">Detail</a>
      </div>
    <?php endwhile; ?>
  </div>
</section>
