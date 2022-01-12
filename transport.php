<?php
require "php/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Transport</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: OnePage - v4.7.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->



    <style>
        #transChart {
            width: 300px;
            height: 300px;
        }
    </style>
</head>

<body>

    <?php
    include 'header.php';
    ?>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex  justify-content-center" style="height: auto ; min-height: 100vh;">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <input type="text" class="form-control" id="sectionType" value="transChart" hidden>
            <div class="row">
                
                <div class="col-md-12 col-lg-6  mb-3" data-aos-delay="200">
                    <div class="in-sec infoFont">
                        <h3>Transport</h3>
                            <ul style="margin-left: 10px;">
                                <li class="popupli"> After burning 1 liter of diesel 2.62 kg of CO2 is release in enviroment .</li>
                                <li class="popupli">Whereas petrol has a lower carbon content and produces about 2.39 kgs of CO2 per liter.</li>
                            </ul>
                        <div id="chartName">
                            <h3> Transport Graph</h3>
                        </div>
                        <div id="transChart"></div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6  mb-3" data-aos-delay="200">
                    <div class="in-sec">
                        <h4 class="text-center mb-2">Transport</h4>

                        <form class="needs-validation" novalidate>
                            <h6 class="text-center"> Enter Total No of Vehicles in your Region</h6>

                                    <div class="row justify-content-center">
                                        <div class="col-md-6 col-lg-10 col-xl-6 col-10">
                                            <label for="2Wheeler" class="form-label"> Two wheeler</label>
                                            <div class="input-group mb-3">
                                                <input type="text" id="2Wheeler" class="form-control" placeholder="Two wheeler" aria-label="Residential" aria-describedby="basic-addon2">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-10 col-xl-6 col-10">
                                            <label for="3Wheeler" class="form-label"> Three wheeler</label>
                                            <div class="input-group mb-3">
                                                <input type="text" id="3Wheeler" class="form-control" placeholder="Three wheeler" aria-label="Residential" aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 col-lg-10 col-xl-6 col-10">
                                            <label for="4Wheeler" class="form-label"> Four wheeler</label>
                                            <div class="input-group mb-3">
                                                <input type="text" id="4Wheeler" class="form-control" placeholder="Four wheeler" aria-label="Residential" aria-describedby="basic-addon2">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-10 col-xl-6 col-10">
                                            <label for="bus" class="form-label"> Bus</label>
                                            <div class="input-group mb-3">
                                                <input type="text" id="bus" class="form-control" placeholder="Bus" aria-label="Residential" aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                    </div>
                               
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 col-lg-10 col-xl-6 col-10">
                                            <label for="bus" class="form-label"> Tempo</label>
                                            <div class="input-group mb-3">
                                                <input type="text" id="bus" class="form-control" placeholder="Tempo" aria-label="Tempo" aria-describedby="basic-addon2">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-10 col-xl-6 col-10">
                                            <label for="tempo" class="form-label"> Truck</label>
                                            <div class="input-group mb-3">
                                                <input type="text" id="tempo" class="form-control" placeholder="Truck" aria-label="Truck" aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-md-6 col-lg-10 col-xl-6 col-10">
                                            <label for="train" class="form-label"> Train</label>
                                            <div class="input-group mb-3">
                                                <input type="text" id="train" class="form-control" placeholder="Train" aria-label="Train" aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-10 col-xl-6 col-10">
                                            <label for="flight" class="form-label"> Flight</label>
                                            <div class="input-group mb-3">
                                                <input type="text" id="flight" class="form-control" placeholder="Flight" aria-label="Flight" aria-describedby="basic-addon2">
                                            </div>
                                        </div>
                                    </div>
                            
                            <div class="row ">
                                <div class="col-md-12 mb-3 text-center">
                                    <button class="btn btn-primary " type="button" onclick="redirect();">NEXT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-center" id="moreInfo">

                <div class=" col-lg-8 col-md-8 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">

                    <div class="popup-flex fade-to-img" onclick="showVehiInfo();">
                        <img class="reggot" id="popup-btn" src="img/car.png" width="80" height="80">
                    </div>

                    <div id="popup-wrapper" class="popup-container">
                        <div class="popup-content">

                            <div class="row align-items-center justify-content-center">
                                <div id="popUpData" class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                </div>
                                <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="btn-container">
                                        <a href="#" id="close" class="btn-gotit">Got It</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Hero -->


    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>


    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="js/energyTransportModel.js"></script>

    <script src="js/induGraph.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/bootstrap-show-modal.js"></script>


</body>

</html>