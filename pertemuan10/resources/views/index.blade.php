<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda - Bras Telur</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

  <nav class="bg-gradient-to-r from-green-600 to-indigo-600 text-white px-8 py-4 flex justify-between items-center shadow-lg">
    <div class="text-2xl font-bold tracking-wide">Bras Telur Website</div>
    <ul class="flex space-x-8 text-lg">
      <li><a href="/index" class="hover:text-gray-200">Beranda</a></li>
      <li><a href="/About" class="hover:text-gray-200">Tentang</a></li>
      <li><a href="/Produk" class="hover:text-gray-200">Produk</a></li>
    </ul>
  </nav>

  <section class="relative bg-gradient-to-r from-green-50 to-indigo-100 py-24">
    <div class="max-w-4xl mx-auto text-center px-6">
      <h1 class="text-5xl font-extrabold text-gray-800 leading-tight">
        Selamat Datang di <span class="text-green-600">Bras Telur</span>
      </h1>
      <p class="mt-6 text-lg text-gray-600">
     Belanja mudah, cepat, dan terpercaya hanya di Bras Telur Website.
      </p>
      <div class="mt-8 flex justify-center space-x-4">
        <a href="/Produk" 
           class="px-6 py-3 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 transition">
          Lihat Produk
        </a>
        <a href="/About" 
           class="px-6 py-3 border-2 border-green-600 text-green-600 rounded-lg hover:bg-green-50 transition">
          Tentang Kami
        </a>
      </div>
    </div>
  </section>

  <section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-center text-gray-800">Kenapa Pilih Kami?</h2>
      <p class="mt-2 text-center text-gray-600">Kami menyediakan produk berkualitas dengan harga terbaik.</p>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-12">
        <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
          <div class="text-green-600 text-4xl mb-4">💎</div>
          <h3 class="text-xl font-semibold">Kualitas Premium</h3>
          <p class="mt-2 text-gray-600">Produk dengan kualitas terbaik yang terjamin.</p>
        </div>

        <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
          <div class="text-green-600 text-4xl mb-4">⚡</div>
          <h3 class="text-xl font-semibold">Pengiriman Cepat</h3>
          <p class="mt-2 text-gray-600">Pesanan dikirim dengan aman dan cepat.</p>
        </div>

        <div class="p-6 bg-gray-50 rounded-xl shadow hover:shadow-lg transition">
          <div class="text-green-600 text-4xl mb-4">💰</div>
          <h3 class="text-xl font-semibold">Harga Terjangkau</h3>
          <p class="mt-2 text-gray-600">Harga terbaik untuk setiap produk yang kami jual.</p>
        </div>
      </div>
    </div>
  </section>

    <section class="bg-gray-100 py-16">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-bold text-gray-800 mb-4">Lokasi Kami</h2>
      <p class="text-gray-600 mb-8">Kunjungi toko kami secara langsung atau lihat lokasi di peta berikut.</p>

      <div class="w-full h-96 rounded-lg overflow-hidden shadow-lg">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.3929573051043!2d119.4455014478986!3d-5.172355173704632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee3df4124fb5b%3A0x629f14da8b76c29d!2sToko%20BRAS%20TELUR!5e0!3m2!1sid!2sid!4v1762688882430!5m2!1sid!2sid" 
          width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

      <div class="mt-6">
        <a href="https://maps.app.goo.gl/6vg3gTKEKKyWKQ7p8" target="_blank"
           class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg shadow hover:bg-green-700 transition">
          Buka di Google Maps
        </a>
      </div>
    </div>
  </section>


  <footer class="bg-green-600 text-white py-6 mt-12">
    <div class="max-w-6xl mx-auto text-center">
      <p>&copy; 2025 Bras Telur. Semua hak dilindungi.</p>
    </div>
  </footer>

  <script>
    $(document).ready(function() {
      $("#beranda").animate({ opacity: 1 }, 1500);

      $(".nav-link").on("click", function(e) {
        e.preventDefault();
        const target = $(this).attr("href");
        $("html, body").animate({
          scrollTop: $(target).offset().top - 60
        }, 800);
      });
    });
  </script>

</body>
</html>
