<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serkom Maulana</title>


    <!-- favicon -->
    <link href="img/favicon/favicon.png" rel="icon">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">

    <!-- fancy box -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>

    <!-- owl -->

    <!-- animate -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    <!-- icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- Main Stylesheet File -->
     <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar Start-->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
    >
      <div class="container">
        <a class="navbar-brand font-family-sans-serif" href="index.html">SERKOM HOTEL</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="room.html">The Rooms &amp; Suites</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="reservation.php">Reservation</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar END -->
    
    <!-- Courosel Start -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/slider/roomSlider1.jpg" class="d-block w-100" alt="#">  
          </div>
          <div class="carousel-item">
            <img src="img/slider/roomSlider2.jpg" class="d-block w-100" alt="#">
          </div>
          <div class="carousel-item">
            <img src="img/slider/roomSlider3.jpg" class="d-block w-100" alt="#">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <!-- About Section Start -->

      <section class="py-5 bg-light" id="next">
        <div class="container">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>  
        </div>
      </section>
  
    <!-- About Section END -->

      <!-- Footer section start -->   
      <section class="section bg-image overlay" style="background-image: url('img/room1.jpg');">
        <div class="container" >
          <div class="row align-items-center">
            <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
              <h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
            </div>
            <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
              <a href="reservation.html" class="btn btn-outline-white-primary py-3 text-white px-5">Reserve Now</a>
            </div>
          </div>
        </div>
      </section>

    <footer class="section footer-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="about.html">About Us</a></li>
              <li><a href="room.html">The Rooms &amp; Suites</a></li>
             <li><a href="reservation.html">Reservation</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <ul class="list-unstyled link">
              <li><a href="#">The Rooms &amp; Suites</a></li>
              <li><a href="#">About Us</a></li>

            </ul>
          </div>
          <div class="col-md-3 mb-5 pr-md-5 contact-info">
              <!-- Lodaya 2 kampung bojong Rt. 20 Rw. 05 Kel/desa nagrikidul, kecamatan purwakarta -->
            <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span> <span> Lodaya 2 kampung bojong, <br> Rt. 20 Rw. 05 Kel/desa nagrikidul</span><br><span>kecamatan purwakarta</span></p>
            <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span> <span>(+68)81904397625</span></p>

          </div>
          <div class="col-md-3 mb-5">
            <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary" ></span>Email:</span> <span> 19102175@ittelkom-pwt.ac.id</span></p>
            </form>
          </div>
        </div>
      </div>
    </footer>
  <!-- footer section end -->


    
    <!-- bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="/node_modules/jquery/dist/jquery.js"></script>
    <!-- <script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="/bower_components/jquery/dist/jquery.js"></script>
    <script src="/bower_components/owl.carousel/dist/owl.carousel.min.js"></script> -->

</body>
</html>