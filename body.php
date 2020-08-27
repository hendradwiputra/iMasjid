<?php include('form.php'); ?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
      <div class="row justify-content-center">
        <div class="col-xl-11 col-lg-11 col-md-11 d-flex align-items-center">

          <span class="logo mr-auto">
            <p class="nama" id="NamaMasjid"></p>
            <p class="alamat" id="AlamatMasjid"></p>
            <p class="tanggal" id="penanggalan">[KALENDER]</p>
          </span>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
				      <li><p id="timer">[TIMER]</p></li><!--Prayer counter-->
            </ul>
          </nav><!-- .nav-menu -->

        </div>
      </div>
</header>
<!-- ======= Header ======= -->

<!-- ======= Intro ======= -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel" data-interval="10000">

        <!--<ol class="carousel-indicators"></ol>-->
        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(./images/kaaba-01.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Membaca Surat Al Kahfi</h2>
                <p class="animate__animated animate__fadeInUp">"Barang siapa membaca surat Al Kahfi pada hari Jum'at, dia akan disinari cahaya di antara dua Jum'at." <br>(HR. An Nasa'i dan Baihaqi)</p>

              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(./images/kaaba-02.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Jangan Memutuskan Tali Silaturahmi</h2>
                <p class="animate__animated animate__fadeInUp">"Tidak akan masuk surga orang yang memutuskan tali silaturahmi."<br>(HR. Bukhari 5984 dan Muslim 2556)</p>

              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(./images/madina-03.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Di Balik Musibah</h2>
                <p class="animate__animated animate__fadeInUp">"Barangsiapa yang dikehendaki kebaikan oleh Allah, maka Allah akan mengujinya dengan musibah."<br>(HR. Bukhari 5645)</p>

              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(./images/madina-02.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Istiqomah Ya</h2>
                <p class="animate__animated animate__fadeInUp">"Amalan yang paling dicintai Allah adalah yang rutin dilakukan meskipun sedikit."<br>(HR. Bukhari 6464 dan Muslim 783)</p>

              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(./images/arafah-01.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Jangan Mencela Seorang Muslim</h2>
                <p class="animate__animated animate__fadeInUp">"Mencela seorang muslim adalah kefasikan sedang membunuhnya adalah kekafiran."<br>(HR. Ahmad | Shahih Al Jaami 3595)</p>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(./images/arafah-02.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Ridha Allah Pada Ridha Orangtua</h2>
                <p class="animate__animated animate__fadeInUp">"Ridha Allah terdapat pada ridha orangtua, sedang murka Allah terdapat pada murka orangtua."<br>(HR. At-Thabrani | Shahih Al Jaami 3507)</p>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(./images/quran-01.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown"></h2>
                <p class="animate__animated animate__fadeInUp"></p>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(./images/al-aqso-02.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown"></h2>
                <p class="animate__animated animate__fadeInUp"></p>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>


    </div>
  </section>
<!-- ======= Intro ======= -->

<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="intro-container">
        
        <div class="row">
          <div class="col-xl-10 col-lg-10 col-md-10">
            <h3 class="running-text"><marquee scrollamount="7" id="running_text"></marquee></h3>
          </div>

          <div class="col-md-2 col-sm-2">
            <h3 id="jam" class="jam"></h3>
          </div>        
        </div>
      
        <div class="row">
          <div class="col-xl-2 col-lg-2 col-md-3">
            <h3 id="prayer1"></h3>
            <h3 id="shubuh"></h3>
          </div>

          <div class="col-xl-2 col-lg-2 col-md-3">
            <h3 id="prayer2"></h3>
            <h3 id="syuruq"></h3>
          </div>

          <div class="col-xl-2 col-lg-2 col-md-3">
            <h3 id="prayer3"></h3>
            <h3 id="dzuhur"></h3>
          </div>

          <div class="col-xl-2 col-lg-2 col-md-3">
            <h3 id="prayer4"></h3>
            <h3 id="ashar"></h3>
          </div>

          <div class="col-xl-2 col-lg-2 col-md-3">
            <h3 id="prayer5"></h3>
            <h3 id="maghrib"></h3>
          </div>

          <div class="col-xl-2 col-lg-2 col-md-3">
            <h3 id="prayer6"></h3>
            <h3 id="isya"></h3>
          </div>
        </div>

        <div class="row">
          <div class="copyright col-md-10" id="copyright"></div>   
          <div class="menu col-md-2"><?php $label = ""; echo $label; ?><i class="fas fa-wrench"></i><a href="form.php" data-toggle="modal" data-target="#exampleModal"> <strong>Pengaturan</strong> </a></div>
        </div>
        
    </div>
  </footer>
<!-- ======= Footer ======= -->

