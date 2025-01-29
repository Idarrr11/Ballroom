<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Restaurant</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Playball&display=swap" rel="stylesheet">

  <!-- CSS Files -->
  <link rel="stylesheet" href="css/normalize.css"> <!-- Normalize untuk standardisasi tampilan browser -->
  <link rel="stylesheet" href="css/main.css" media="screen" type="text/css"> <!-- Custom Styles -->
  <link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap jika diperlukan -->
  <link rel="stylesheet" href="css/font-awesome.min.css"> <!-- Font Awesome -->
  <link rel="stylesheet" href="css/style-portfolio.css">
  <link rel="stylesheet" href="css/picto-foundry-food.css">
  <link rel="stylesheet" href="css/jquery-ui.css"> <!-- Jika menggunakan UI jQuery -->

  <!-- Meta Tags for Responsiveness -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="icon" href="favicon-1.ico" type="image/x-icon">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind di CDN -->
</head>


    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <nav class="bg-white border-gray-200 dark:bg-gray-900">
                  <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
                      <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                          <img src="/css/nest.png" class="h-8" alt="Flowbite Logo" />
                          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
                      </a>
                  </div>
              </nav>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right ">
                            <li><a class="navactive color_animation" href="#top">WELCOME</a></li>
                            <li><a class="color_animation" href="#story">ABOUT</a></li>
                            <li><a class="color_animation" href="#pricing">PRICING</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>

        <div id="top" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="top-title"> Ballrom</h2>
                    <h2 class="white second-title">"Sukoharjo's Trusted Venue"</h2>
                    <hr>
                </div>
            </div>
        </div>

        <!-- ============ About Us ============= -->

        <section id="story" class="description_content">
            <div class="text-content container">
                <div >
                  <h4 class="text-3xl font-bold text-center mb-5">NESTAGAR BALLROOM</h4>

                    <br>
                    <p class="desc-text">Gedung ballroom kami dirancang untuk memenuhi berbagai kebutuhan acara Anda, baik formal maupun informal. Dengan kapasitas yang fleksibel, ballroom ini cocok untuk seminar, konferensi, acara perusahaan, hingga perayaan pribadi seperti pernikahan dan ulang tahun.

                        Fasilitas modern seperti pencahayaan yang memadai, pendingin ruangan, dan tata suara berkualitas tinggi memastikan kenyamanan maksimal bagi para tamu. Tata ruang yang elegan dilengkapi dengan perabotan berkualitas, memberikan suasana yang mewah dan profesional.
                        
                        Lokasi strategis di Sukoharjo menjadikan ballroom ini pilihan utama bagi siapa saja yang mencari tempat acara yang mudah dijangkau dan representatif. Kami juga menyediakan paket layanan tambahan seperti dekorasi, katering, dan dokumentasi acara untuk melengkapi pengalaman Anda.
                        
                        </p>
                </div>
                {{-- <div class="col-md-6">
                    <div class="img-section">
                       <img src="images/kabob.jpg" width="250" height="220">
                       <img src="images/limes.jpg" width="250" height="220">
                       <div class="img-section-space"></div>
                       <img src="images/radish.jpg"  width="250" height="220">
                       <img src="images/corn.jpg"  width="250" height="220">
                   </div>
                </div> --}}
            </div>
        </section>

       <br><br><br>


       <!-- ============ Pricing  ============= -->
       <section id="services" class="bg-gray-800 py-20">
        <div class="w-11/12 md:container mx-auto">
          <h4 class="text-5xl font-bold text-center mb-5 text-white shadow-lg">List Package</h4>
          <br><br>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Service 1 -->
            <div class="service-card flex flex-col justify-between items-center text-center py-12 px-8 bg-white rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300">
              <h4 class="text-2xl font-bold mb-5">Wedding Package</h4>
              <p class="text-gray-500 mb-5">25k - 150k / Pax</p>
              <a href="/layanan" class="hover:text-blue-700 font-bold text-lg">Selengkapnya --></a>
            </div>
      
            <!-- Service 2 -->
            <div class="service-card flex flex-col justify-between items-center text-center py-8 px-8 bg-white rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300">
              <h4 class="text-2xl font-bold mb-5">Paket Arisan</h4>
              <p class="text-gray-500 mb-5">
                Seminar <br>
                Table Manner Course <br>
                Bar / Making Bed Demo <br>
                Sertifikat <br>
                Campus Tour <br><br>
                30k - 85k / Pax
              </p>
              <a href="/sampaikan" class="hover:text-blue-700 font-bold text-lg">Selengkapnya --></a>
            </div>
      
            <!-- Service 3 -->
            <div class="service-card flex flex-col justify-between items-center text-center py-8 px-8 bg-white rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300">
              <h4 class="text-2xl font-bold mb-5">Table Manner</h4>
              <p class="text-gray-500 mb-5">
                Seminar <br>
                Table Manner Course <br>
                Bar / Making Bed Demo <br>
                Sertifikat <br>
                Campus Tour <br><br>
                100k - 250k / Pax
              </p>
              <a href="/sampaikan" class="hover:text-blue-700 font-bold text-lg">Selengkapnya --></a>
            </div>
      
            <!-- Service 4 -->
            <div class="service-card flex flex-col justify-between items-center text-center py-8 px-8 bg-white rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300">
              <h4 class="text-2xl font-bold mb-5">Beauty / Handsome Package</h4>
              <p class="text-gray-500 mb-5">
                Seminar <br>
                Beauty Class <br>
                Lunch <br>
                Sertifikat <br>
                Campus Tour <br><br>
                75k - 100k / Pax
              </p>
              <a href="/sampaikan" class="hover:text-blue-700 font-bold text-lg">Selengkapnya --></a>
            </div>
      
            <!-- Service 5 -->
            <div class="service-card flex flex-col justify-between items-center text-center py-8 px-8 bg-white rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300">
              <h4 class="text-2xl font-bold mb-5">Meeting Package</h4>
              <p class="text-gray-500 mb-5">
                400k / Pax FullBoard (2 x CB + L / D + Room Hotel) <br>
                95k / Pax FullDay (2 x CB + L / D) <br>
                75k / Pax HalfDay (1 x CB + 1 L / D) <br>
                75k / Pax Sewa Ruang <br>
                35k / Pax Special Meeting 1 x CB
              </p>
              <a href="/sampaikan" class="hover:text-blue-700 font-bold text-lg">Selengkapnya --></a>
            </div>
      
            <!-- Service 6 -->
            <div class="service-card flex flex-col justify-between items-center text-center py-8 px-8 bg-white rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300">
              <h4 class="text-2xl font-bold mb-5">Birthday Package</h4>
              <p class="text-gray-500 mb-5">
                Birthday Package 1: 30k / Pax (Makan, Minum, Snack, Bingkisan Tamu) <br><br>
                Birthday Package 2: 40k / Pax (Makan, Minum, Snack, Bingkisan Tamu + Dekor Balon, Hadiah Game, Topi, Undangan, MC & Mic) <br><br>
                Birthday Package 3: 45k / Pax (Sama seperti Paket 2, tambahan fasilitas) <br><br>
                Birthday Package 4: 50k / Pax (Tambahan opsi dekor lebih lengkap)
              </p>
              <a href="/sampaikan" class="hover:text-blue-700 font-bold text-lg">Selengkapnya --></a>
            </div>
          </div>
        </div>
      </section>
      
      
        

        
  

        <br><br>
        <!-- ============ Footer Section  ============= -->

        <footer class="sub_footer">
            <div class="container">
                <div class="col-md-4"><p class="sub-footer-text text-center">&copy; Restaurant 2014, Theme by <a href="https://themewagon.com/">ThemeWagon</a></p></div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Back to <a href="#top">TOP</a></p>
                </div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Built With Care By <a href="#" target="_blank">Us</a></p></div>
            </div>
        </footer>


        <script type="text/javascript" src="js/jquery-1.10.2.min.js"> </script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>

    </body>
</html>
