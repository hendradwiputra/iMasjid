
  <!-- =======================================================
  * Template Name: ComingSoon - v2.1.0
  * Template URL: https://bootstrapmade.com/comingsoon-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Prayer Reminder</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">

  
  <!-- Vendor JS Files -->
  <script src="../assets/js/jquery-3.5.1.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>  
  <script src="../assets/vendor/jquery-countdown/jquery.countdown.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</head>

<script>

    // Set the date we're counting down to
    var countDownDate = new Date("Oct 5, 2020 15:50:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        minutes = checkTime(minutes);
		seconds = checkTime(seconds); 

        document.getElementById("menit").innerHTML = minutes;
        document.getElementById("detik").innerHTML = seconds;

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("menit").innerHTML = "00";
            document.getElementById("detik").innerHTML = "00";
		}

    }, 1000);

    function checkTime(i) {
  		  if (i < 10) {i = "0" + i}; 
  		  return i;
    } 
    
</script>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">

      <h2>Memasuki Waktu Sholat</h2>
      <div class="countdown d-flex justify-content-center">                      
        <div>
          <h1 id="menit">00</h1>
          <h3>Menit</h3>
        </div>        
        <div>
          <h1 id="detik">00</h1>
          <h3>Detik</h3>
        </div>
      </div>
    </div>
  </header><!-- End #header -->

</body>

</html>