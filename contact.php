<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cerrajería Master</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center bg-secondary py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-envelope fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Correo Electrónico</h6>
                        <span>victorbago27@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center bg-primary border-inner py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <a href="index.php" class="navbar-brand">
                        <h1 class="m-0 text-uppercase text-white">Cerrajería Master</h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center bg-secondary py-3">
                <div class="d-inline-flex align-items-center justify-content-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Llamános</h6>
                        <span>+52 899 945 1053</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="index.php" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 text-uppercase text-white">Cerrajería Master</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Inicio</a>
                <a href="about.php" class="nav-item nav-link">Sobre nosotros</a>
                <a href="menu.php" class="nav-item nav-link">Productos & Servicios</a>
                <a href="contact.php" class="nav-item nav-link">Contáctanos</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">Contáctanos</h1>
                <a href="index.php">Inicio</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="contact.php">Contáctanos</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid contact position-relative px-5" style="margin-top: 90px;">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5">
                        <i class="bi bi-geo-alt fs-1 text-white"></i>
                        <h6 class="text-uppercase my-2">Nuestro establecimiento</h6>
                        <span>Calle Gto. C/Quintana Roo #419 Fracc. Río Bravo, Tamps</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5 h-100">
                        <i class="bi bi-envelope-open fs-1 text-white"></i>
                        <h6 class="text-uppercase my-2">Contáctanos</h6>
                        <span>victorbago27@gmail.com</span>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="bg-primary border-inner text-center text-white p-5 h-100">
                        <i class="bi bi-phone-vibrate fs-1 text-white"></i>
                        <h6 class="text-uppercase my-2">Llamános</h6>
                        <span>+52 899 945 1053</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form method="post">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <input type="text" class="form-control bg-light border-0 px-4" placeholder="Nombre" name="name" style="height: 55px;" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control bg-light border-0 px-4" placeholder="Apellidos" name="lastname" id="apellidos" style="height: 55px;" required>
                            </div>
                            <div class="col-sm-12">
                                <input type="email" class="form-control bg-light border-0 px-4" placeholder="Tu Email" name="correo" id="correo" style="height: 55px;" required>
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control bg-light border-0 px-4" placeholder="Tema" name="subject" id="subject" style="height: 55px;" required>
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control bg-light border-0 px-4 py-3" rows="4" placeholder="Mensaje" name="message" id="message" required></textarea>
                            </div>
                            <div class="col-sm-12">
                                <button class="btn btn-primary border-inner w-100 py-3" type="submit" name="enviarmensaje">Envíanos un mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-img text-secondary" style="margin-top: 100px">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 mb-lg-n5">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-900 bg-primary border-inner p-4">
                        <a href="index.php" class="navbar-brand">
                            <h1 class="m-0 text-uppercase text-white">Cerrajería</h1>
                            <h1 class="m-0 text-uppercase text-white">Master</h1>
                        </a>
                        <p class="mt-3">Contamos con diversos productos y servicios para tus llaves, ven y acércate a conocer nuestros productos.</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Póngase en contacto</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Calle Gto.C/Quintana Roo #419 Fracc. Río Bravo, Tamps</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">victorbago27@gmail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+52 899 945 1053</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square border-inner rounded-0 me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-primary text-uppercase mb-4">Links rápidos</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-secondary mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Inicio</a>
                                <a class="text-secondary mb-2" href="about.php"><i class="bi bi-arrow-right text-primary me-2"></i>Sobre nosotros</a>
                                <a class="text-secondary mb-2" href="menu.php"><i class="bi bi-arrow-right text-primary me-2"></i>Productos y Servicios</a>
                                <a class="text-secondary" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contáctanos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-secondary py-4" style="background: #111111;">
        <div class="container text-center">
            <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Cerrajería Master</a>. Todos los derechos reservados. 
			
			<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
			Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a></p>
            <br>Distributed By: <a class="border-bottom" href="https://themewagon.com" target="_blank">ThemeWagon</a>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary border-inner py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <?php include_once("enviarmensaje.php")?>
</body>
<script>
    history.replaceState(null, null, location.pathname)
</script>
</html>