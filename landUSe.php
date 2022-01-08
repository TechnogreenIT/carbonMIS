<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Land Use</title>
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
</head>

<body>

    <?php
    include 'header.php';
    ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex  justify-content-center" style="height: auto ; min-height: 100vh;">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

            <div class="row">

                <div class="col-md-12 col-lg-8  mb-3 s " data-aos-delay="200">
                    <div class="in-sec">
                        <h3>Land Use</h3>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4  mb-3  s" data-aos-delay="200">
                    <div class="in-sec">
                        <h4 class="text-center mb-2">Land Use</h4>
                        <form class="needs-validation" novalidate>
                            
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="residential" placeholder="Total area under Residential (sq. km)" required>
                                <div class="invalid-feedback">
                                    Please provide a valid data.
                                </div>
                                <label for="residential">Total area under Residential (sq. km) </label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="commercial" placeholder="Total area under Commercial (sq. km)" required>
                                <div class="invalid-feedback">
                                    Please provide a valid data.
                                </div>
                                <label for="residential">Total area under Commercial (sq. km) </label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="waterBodies" placeholder="Total area under Water Bodiea (sq. km)" required>
                                <div class="invalid-feedback">
                                    Please provide a valid data.
                                </div>
                                <label for="waterBodies">Total area under Water Bodiea (sq. km) </label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="defence" placeholder="Total area under Defence (sq. km)" required>
                                <div class="invalid-feedback">
                                    Please provide a valid data.
                                </div>
                                <label for="defence">Total area under Defence (sq. km) </label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="agriculture" placeholder="Total area under Agriculture (sq. km)" required>
                                <div class="invalid-feedback">
                                    Please provide a valid data.
                                </div>
                                <label for="agriculture">Total area under Agriculture (sq. km) </label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="vacentLand" placeholder="Total area under Vacant Land (sq. km)" required>
                                <div class="invalid-feedback">
                                    Please provide a valid data.
                                </div>
                                <label for="vacentLand">Total area under Vacant Land (sq. km) </label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="roadArea" placeholder="Total area under Road Area (sq. km)" required>
                                <div class="invalid-feedback">
                                    Please provide a valid data.
                                </div>
                                <label for="roadArea">Total area under Road Area (sq. km) </label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="greenArea" placeholder="Total area under Green Area (sq. km)" required>
                                <div class="invalid-feedback">
                                    Please provide a valid data.
                                </div>
                                <label for="greenArea">Total area under Green Area (sq. km) </label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="industrial" placeholder="Total area under Industrial (sq. km)" required>
                                <div class="invalid-feedback">
                                    Please provide a valid data.
                                </div>
                                <label for="industrial">Total area under Industrial (sq. km) </label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="slum" placeholder="Total area under Slum (sq. km)" required>
                                <div class="invalid-feedback">
                                    Please provide a valid data.
                                </div>
                                <label for="slum">Total area under Slum (sq. km) </label>
                            </div>

                            <div class="row ">
                                <div class="col-md-12 mb-3 text-center">
                                    <button class="btn btn-primary " type="submit">Submit form</button>
                                </div>
                            </div>
                        </form>

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

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/jquery.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>