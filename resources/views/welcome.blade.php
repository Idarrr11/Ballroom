<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
        <script src="{{ asset('js/menu.js') }}"></script>
        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <x-nav>

    </x-nav>
                        </div>
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>
    <!-- hero -->
    <section id="gambar" alt="">
      <div class="container mx-auto text-center text-white h-screen flex items-center">
        <div class="mx-auto w-3/4 md:w-2/4">
          <h3 class="text-5xl font-bold text-center mb-5" style="color: white; text-shadow: 2px 2px 4px rgba(5, 23, 79, 0.7), -2px -2px 4px rgba(5, 23, 79, 0.7);">
            Selamat Datang di Website E-katalog Nestagar Ballroom
        </h3>
        
          <p class="text-white mb-5" style="color: white; text-shadow: 2px 2px 4px rgba(5, 23, 79, 0.7), -2px -2px 4px rgba(5, 23, 79, 0.7);">"Wujudkan Acara Impian Anda Bersama Nestagar Hotel!"</p>
          <a href="#portofolio" class="bg-blue-600 text-white py-2 px-5 rounded-xl" style="color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7), -2px -2px 4px rgba(0, 0, 0, 0.7);">See All Kegiatan</a>
        </div>
      </div>
    </section>

    <!-- services -->
    <section id="services" class="bg-gray-800 py-20">
      <div class="w-11/12 md:container mx-auto">
        <h4 class="text-5xl font-bold text-center mb-5" style="color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7), -2px -2px 4px rgba(0, 0, 0, 0.7);">Layanan Kami</h4>
        <p class="text-gray-500 text-center mb-5" style="color: rgb(206, 206, 206); text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7), -2px -2px 4px rgba(0, 0, 0, 0.7);">Layanan yang kami berikan untuk Masyarakat</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
          <!-- service 1-->
          <div class="flex space-x-5 py-8 px-8 bg-white rounded-xl items-start">
            <i class="fas fa-building text-6xl text-blue-400"></i>
            <div>
              <h4 class="text-2xl font-bold mb-5">Informasi Gedung</h4>
              <p class="text-gray-500 mb-5">Ketersediaan tempat di Kampus Politeknik NEST untuk anda yang ingin mengadakan event</p>
              <a href="/gedung" class="hover:text-blue-700 font-bold">Selengkapnya--></a>
            </div>
          </div>
    
          <!-- service 2-->
          <div class="flex space-x-5 py-8 px-8 bg-white rounded-xl items-start">
            <i class="fas fa-hands-helping  text-6xl text-blue-400"></i>
            <div>
              <h4 class="text-2xl font-bold mb-5">Layanan NEST</h4>
              <p class="text-gray-500 mb-5">Layanan yang kami berikan untuk mendukung kegiatan masyarakat untuk menyelenggarakan event</p>
              <a href="/layanan" class="hover:text-blue-700 font-bold">Selengkapnya--></a>
            </div>
          </div>
    
          <!-- service 3-->
          <div class="flex space-x-5 py-8 px-8 bg-white rounded-xl items-start">
            <i class="fas fa-envelope  text-6xl text-blue-400"></i>
            <div>
              <h4 class="text-2xl font-bold mb-5">Sampaikan Kebutuhanmu</h4>
              <p class="text-gray-500 mb-5">Segera hubungi kami jika anda ingin mengadakan event di Kampus Politeknik NEST Sukoharjo!</p>
              <a href="/sampaikan" class="hover:text-blue-700 font-bold">Selengkapnya--></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    

   <!-- portofolio -->
<section id="portofolio" class="py-20 bg-white">
  <h3 class="text-5xl font-bold text-center mb-5" style="color: #4a4a4a">Kegiatan</h3>
  <p class="text-gray-500 mb-5 text-center">Sorotan Kegiatan yang Telah Berlalu.</p>
  <div class="grid grid-cols-2 md:grid-cols-4 w-11/12 md:container mx-auto gap-6">

  <!-- portofolio 1-->
<div class="shadow-xl rounded-lg overflow-hidden transform hover:scale-105 hover:shadow-2xl transition-all duration-300">
  <a href="/kegiatan-1">
    <img src="assets/img/blog/isikeg1.png" class="w-full h-64 object-cover" />
    <div class="py-3 px-5">
      <h4 class="text-center font-bold">Badan Pusat Statistik (BPS)</h4>
    </div>
  </a>
</div>

<!-- portofolio 2-->
<div class="shadow-xl rounded-lg overflow-hidden transform hover:scale-105 hover:shadow-2xl transition-all duration-300">
  <a href="/kegiatan-2">
    <img src="assets/img/blog/isikeg2.png" class="w-full h-64 object-cover" />
    <div class="py-3 px-5">
      <h4 class="text-center font-bold">MMS SHOW FEST 2024</h4>
    </div>
  </a>
</div>

<!-- portofolio 3-->
<div class="shadow-xl rounded-lg overflow-hidden transform hover:scale-105 hover:shadow-2xl transition-all duration-300">
  <a href="/kegiatan-3">
    <img src="assets/img/hero/keg3.JPG" class="w-full h-64 object-cover" />
    <div class="py-3 px-5">
      <h4 class="text-center font-bold">SERTIJAB HIMA TI</h4>
    </div>
  </a>
</div>

<!-- portofolio 4-->
<div class="shadow-xl rounded-lg overflow-hidden transform hover:scale-105 hover:shadow-2xl transition-all duration-300">
  <a href="/kegiatan-4">
    <img src="assets/img/hero/haha.png" class="w-full h-64 object-cover" />
    <div class="py-3 px-5">
      <h4 class="text-center font-bold">PKKMB 2024</h4>
    </div>
  </a>
</div>

  </div>
</section>

    <!-- about -->
    <section id="about" class="w-11/12 md:container mx-auto py-20">
      <div class="flex space-x-10 items-start">
        <img src="assets/img/hero/logopolnest.jpeg" class="w-24 md:w-1/3" />
        <div>
          <p class="mb-5">Nestagar Ballroom adalah solusi terbaik untuk menjadikan acara Anda berkesan dengan layanan terbaik dan fasilitas lengkap</p>
          <h3 class="text-5xl font-bold mb-5">Tentang Ballroom Nestagar Hotel</h3>
          <p class="mb-5">Nestagar Hotel Solo juga menawarkan Nestagar Ballroom, ruang serbaguna dengan desain modern dan elegan, yang cocok untuk berbagai acara spesial Anda. Ballroom ini merupakan pilihan yang sempurna untuk menyelenggarakan acara, mulai dari pernikahan, seminar, konferensi, hingga acara perusahaan.</p>
          <p class="mb-5 pb-5 border-b border-gray-900">Kenapa Memilih Nestagar Ballroom?
            Lokasi Strategis: Berada di tengah kota Solo, memudahkan akses bagi tamu dari berbagai wilayah.
            Pelayanan Profesional: Staf yang ramah dan profesional siap membantu Anda dari perencanaan hingga akhir acara.</p>
            <ul class="md:flex md:space-x-5">
              <li>
                <a href="https://www.tiktok.com" class="hover:text-blue-700" target="_blank">
                  <i class=""></i> Tiktok
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com" class="hover:text-blue-700" target="_blank">
                  <i class=""></i> Instagram
                </a>
              </li>
              <li>
                <a href="https://wa.me/628112840526" class="hover:text-blue-700" target="_blank">
                  <i class=""></i> WhatsApp
                </a>
              </li>
            </ul>
            
        </div>
      </div>
    </section>
    <x-foot>

    </x-foot>
                </div>
            </div>
        </div>
    </body>
</html>
