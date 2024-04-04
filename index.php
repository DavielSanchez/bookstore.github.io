<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
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
    <title>BookStore | Inicio</title>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li><a class="nav-link" href="./shop.php">Libros</a></li>
                    <li><a class="nav-link" href="./about.php">Autores</a></li>
                    <li><a class="nav-link" href="./contact.php">Contactanos</a></li>

                    <!-- <li><a class="nav-link" href="about.php">Autores</a></li>
                    <li><a class="nav-link" href="blog.php">Blog</a></li> -->
                </ul>
            </div>
        </div>

    </nav>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>La librería <span clsas="d-block">más completa del mercado</span></h1>
                        <p class="mb-4">Con cientos de libros que te harán viajar hasta los tiempos y lugares mas lejanos de nuestro planeta, enamorate de la lectura con nosotros.</p>
                        <p><a href="./shop.php" class="btn btn-secondary me-2">Ver libros</a><a href="./about.php" class="btn btn-white-outline">Explorar autores</a></p>
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

    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">

                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">BookStore se enorgullece</h2>
                    <p class="mb-4">En ofrecerte una cuidada selección de libros para todos los gustos y edades. Desde clásicos de la literatura hasta las últimas novedades, nuestra amplia variedad garantiza que encuentres exactamente lo que estás buscando.</p>
                    <p><a href="shop.php" class="btn">Explorar</a></p>
                </div>
                <!-- End Column 1 -->

                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="thankyou.php">
                        <img src="images/montecristo.jpg" class="img-fluidd product-thumbnail">
                        <h3 class="product-title">El conde de montecristo</h3>
                        <strong class="product-price">$20.00</strong>

                        <span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
                    </a>
                </div>
                <!-- End Column 2 -->

                <!-- Start Column 3 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="thankyou.php">
                        <img src="images/romeo_y_julieta.jpg" class="img-fluidd product-thumbnail">
                        <h3 class="product-title">Romeo y Julieta</h3>
                        <strong class="product-price">$25.00</strong>

                        <span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
                    </a>
                </div>
                <!-- End Column 3 -->

                <!-- Start Column 4 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="thankyou.php">
                        <img src="images/100anios.jpg" class="img-fluidd product-thumbnail">
                        <h3 class="product-title">100 años de soledad</h3>
                        <strong class="product-price">$40.00</strong>

                        <span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
                    </a>
                </div>
                <!-- End Column 4 -->

            </div>
        </div>
    </div>
    <!-- End Product Section -->

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <?php
                        print('<h2 class="section-title">¿Por qué elegirnos?</h2>')
                    ?>
                    <p>Las razones para elegirnos son muchas, pero aqui te dejamos las mas interesantes. 😊</p>

                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/truck.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Envio Rapido &amp; Gratis</h3>
                                <p>Disfruta de la comodidad de recibir tus libros en tiempo récord y sin costos adicionales de envío.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/bag.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Es muy facil comprar</h3>
                                <p>Explora nuestra amplia selección de libros con una plataforma intuitiva que facilita tu experiencia de compra desde cualquier dispositivo.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/support.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Soporte 24/7</h3>
                                <p>Nuestro equipo de atención al cliente está disponible en todo momento para resolver tus dudas, ayudarte con tus pedidos o brindarte asistencia personalizada.</p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="images/return.svg" alt="Image" class="imf-fluid">
                                </div>
                                <h3>Devoluciones sin costo</h3>
                                <p>Compra con total tranquilidad, ofrecemos devoluciones sin complicaciones para garantizar tu satisfacción en cada compra.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->


    <!-- Start Testimonial Slider -->
    <div class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="section-title">Testimonios</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="testimonial-slider-wrap text-center">

                        <div id="testimonial-nav">
                            <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                            <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                        </div>

                        <div class="testimonial-slider">

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">

                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;Como estudiante universitaria, BookStore ha sido mi salvación. Encontré todos los libros que necesitaba para mis clases a precios accesibles y con una entrega rápida. ¡Definitivamente mi primera opción
                                                    para comprar libros en línea!&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">María González</h3>
                                                <span class="position d-block mb-3">Estudiante universitaria</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">

                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;Como profesor de literatura, siempre busco recomendaciones de libros para mis alumnos. BookStore no solo tiene una amplia variedad de títulos, sino que también ofrece una plataforma fácil de usar.
                                                    Gracias a ellos, he podido recomendar libros relevantes y enriquecedores a mis estudiantes.&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="images/person_2.jpg" alt="Maria Jones" class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold"> Javier Martínez</h3>
                                                <span class="position d-block mb-3">Profesor de literatura</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">

                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>&ldquo;BookStore es mi destino predilecto para todas mis necesidades de lectura. Desde los últimos bestsellers hasta joyas literarias difíciles de encontrar, siempre encuentro lo que busco. Además, su atención
                                                    al cliente es excepcional. ¡Recomendaría BookStore a todos los amantes de la lectura!&rdquo;</p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="images/person_4.jpg" alt="Maria Jones" class="img-fluid">
                                                </div>
                                                <h3 class="font-weight-bold">Ana Rodríguez</h3>
                                                <span class="position d-block mb-3">Apasionada de la lectura</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Slider -->



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

                    <ul class="list-unstyled custom-social sm-center">
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
                                <li><a href="#">Inicio</a></li>
                                <li><a href="./shop.php">Libros</a></li>
                                <li><a href="./about.php">Autores</a></li>
                                <li><a href="./contact.php">Contactanos</a></li>
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
                            <li class="me-4">Terms &amp; Conditions</li>
                            <li>Privacy Policy</li>
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