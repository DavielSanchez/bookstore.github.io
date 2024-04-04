<?php 
    include 'db/conections.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Daviel Sanchez">
    <link rel="shortcut icon" href="Favicon.ico">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>BookStore | Contactos</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="index.php">BookStore<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li><a class="nav-link" href="index.php">Inicio</a></li>
                    <li><a class="nav-link" href="shop.php">Libros</a></li>
                    <li><a class="nav-link" href="about.php">Autores</a></li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.php">Contactanos</a>
                    </li>

                    <!-- <li><a class="nav-link" href="about.php">Autores</a></li>
                    <li><a class="nav-link" href="blog.php">Blog</a></li> -->
                </ul>
            </div>
        </div>

    </nav>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <div class="hero mb-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Contactos</h1>
                        <p class="mb-4">En nuestra sección de contacto, te ofrecemos un canal directo para conectarte con nosotros. Valoramos tu opinión, preguntas y comentarios, y estamos aquí para ayudarte en todo lo que necesites. Ya sea que desees realizar una consulta
                            sobre un pedido, solicitar información adicional sobre nuestros productos o simplemente dejarnos saber tus comentarios, nos encantaría escucharte.</p>
                        <p><a href="./shop.php" class="btn btn-secondary me-2">Ver libros</a><a href="#" class="btn btn-white-outline">Explorar autores</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="images/Libro_portada.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->


    <!-- Start Contact Form -->
    <div class="untree_co-section">
        <div class="container">

            <div class="block">
                <div class="row justify-content-center">


                    <div class="col-md-8 col-lg-8 pb-4">


                        <div class="row mb-5">
                            <div class="col-lg-4">
                                <div class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                                    <div class="service-icon color-1 mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                      </svg>
                                    </div>
                                    <!-- /.icon -->
                                    <div class="service-contents">
                                        <p>43 Raymouth Rd. Baltemoer, London 3910</p>
                                    </div>
                                    <!-- /.service-contents-->
                                </div>
                                <!-- /.service -->
                            </div>

                            <div class="col-lg-4">
                                <div class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                                    <div class="service-icon color-1 mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                      </svg>
                                    </div>
                                    <!-- /.icon -->
                                    <div class="service-contents">
                                        <p>info@BookStore.com</p>
                                    </div>
                                    <!-- /.service-contents-->
                                </div>
                                <!-- /.service -->
                            </div>

                            <div class="col-lg-4">
                                <div class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                                    <div class="service-icon color-1 mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                      </svg>
                                    </div>
                                    <!-- /.icon -->
                                    <div class="service-contents">
                                        <p>+1 809 715 1515</p>
                                    </div>
                                    <!-- /.service-contents-->
                                </div>
                                <!-- /.service -->
                            </div>
                        </div>
                        <?php
                            $Library = new Library;
                            $Books = $Library->register();
                        ?>

                        <form method="POST">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="Name">Nombre<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="Name" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="Correo">Correo<span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" name="Correo" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="text-black" for="Asunto">Asunto<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="Asunto" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-5">
                                <label class="text-black" for="Mensaje">Comentario<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="Mensaje" cols="30" rows="5" required></textarea>
                            </div>

                            <button name="enviar" type="submit" class="btn btn-primary-hover-outline" value="ok">Enviar mensaje</button>
                        </form>

                    </div>

                </div>

            </div>

        </div>


    </div>
    </div>

    <!-- End Contact Form -->



    <!-- Start Footer Section -->
    <footer class="footer-section">
        <div class="container relative">

            <div class="sofa-img">
                <img src="images/page_logo.png" alt="Image" class="img-fluid">
            </div>


            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">BookStore<span>.</span></a></div>
                    <p class="mb-4">Bienvenido a BookStore, tu destino literario favorito. En nuestra librería en línea, te sumergirás en un mundo de conocimiento, imaginación y descubrimiento. Con una cuidadosa selección de libros que abarcan desde los clásicos más
                        atemporales hasta las últimas novedades literarias, ofrecemos una experiencia de lectura única para todos los amantes de los libros.</p>

                    <ul class="list-unstyled custom-social">
                        <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
                    </ul>
                </div>

                <div class="col-lg-8">
                    <div class="row links-wrap">
                        <div class="col-6 col-sm-6 col-md-3">
                            <ul class="list-unstyled">
                                <li><a href="./index.php">Inicio</a></li>
                                <li><a href="./shop.php">Libros</a></li>
                                <li><a href="./about.php">Autores</a></li>
                                <li><a href="#">Contactanos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="border-top copyright">
                <div class="row pt-4">
                    <div class="col-lg-6">
                        <p class="mb-2 text-center text-lg-start">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>. All Rights Reserved. &mdash; Sitio web desarrollado por <a href="https://github.com/DavielSanchez">Daviel Sanchez</a>, Diseñado por <a href="https://untree.co">Untree.co</a>
                            <!-- License information: https://untree.co/license/ -->
                        </p>
                    </div>

                    <div class="col-lg-6 text-center text-lg-end">
                        <ul class="list-unstyled d-inline-flex ms-auto">
                            <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </footer>
    <!-- End Footer Section -->


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>