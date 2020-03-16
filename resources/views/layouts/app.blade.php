<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>DevManaus</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<!-- ======= Header ======= -->
<header id="header">
    <div class="container d-flex">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="index.html">DevManaus<span>.</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="#header">Home</a></li>
                <li><a href="#about">Sobre nós</a></li>
                <li><a href="#services">Serviços</a></li>
                <li><a href="#portfolio">Portfólio</a></li>
                <li><a href="#contact">Contate Nos</a></li>

                <li class="get-started"><a href="#services">Iniciar</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">

    <div class="container">
        <div class="row d-flex align-items-center">
        <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
            <h1>Sua nova experiência digital com a DevManaus</h1>
            <h2>Somos uma agência de desenvolvedores talentosos que criam sistemas, sites que trazem resultados para nossos clientes</h2>
            <a href="#about" class="btn-get-started scrollto">Iniciar</a>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
            <img src="assets/img/hero-img.png" class="img-fluid" alt="">
        </div>
    </div>
    </div>

</section><!-- End Hero -->

<main id="main">
    @yield('content')



    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-in">Serviços</h2>
                <p data-aos="fade-in">Alguns dos nosso serviços.</p>
            </div>

            <div class="row">
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/services-1.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#contact">Redes Sociais</a></h5>
                            <p class="card-text">Consultoria de suas redes sociais, tenha mais resultados com atração, fidelização e remarketing</p>
                            <div class="read-more"><a href="#contact"><i class="icofont-arrow-right"></i> Saiba mais</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-left">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/services-2.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#contact">Desenvolvimento de APP</a></h5>
                            <p class="card-text">Aplicativo para transformar sua ideia em realidade</p>
                            <div class="read-more"><a href="#contact"><i class="icofont-arrow-right"></i> Saiba mais</a></div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-right">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/services-3.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#contact">Loja Virtual</a></h5>
                            <p class="card-text">Uma loja virtual com informações detalhadas e objetivas sobre o produto, que ajudam o cliente a tomar a melhor decisão.</p>
                            <div class="read-more"><a href="#contact"><i class="icofont-arrow-right"></i> Saiba mais</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-left">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/services-4.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="#contact">Sistemas Web</a></h5>
                            <p class="card-text">Desenvolvimento de sistema, tenha controle dos seus processos, automatize tarefas, assuma o controle do seu negócio</p>
                            <div class="read-more"><a href="#contact"><i class="icofont-arrow-right"></i> Saiba mais</a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-in">A solução certa</h2>
                <p data-aos="fade-in">Encontre a solução que atenda de acordo sua necessidade.</p>
            </div>

            <div class="row content">
                <div class="col-md-5" data-aos="fade-right">
                    <img src="assets/img/features-3.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5" data-aos="fade-left">
                    <h3>Sites, Blogs e Landing page</h3>
                    <p>Saiba quando ele é ideal:</p>
                    <ul>
                        <li><i class="icofont-check"></i> Quando procura presença digital.</li>
                        <li><i class="icofont-check"></i> Quando quer ser encontrado na web por relevância de conteúdo.</li>
                        <li><i class="icofont-check"></i> Quando quer capturar e converter Leads.</li>
                    </ul>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                    <img src="assets/img/features-2.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                    <h3>Sistema Web</h3>
                    <p class="font-italic">
                        Disponibilidade, automação de processos, rotinas automáticas.
                    </p>
                    <p>
                        Um sistema web pode ser construído de acordo com suas as necessidades, uma solução personalizada pode deixar seu negócio.
                    </p>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-5" data-aos="fade-right">
                    <img src="assets/img/features-1.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-4" data-aos="fade-left">
                    <h3>Aplicativo</h3>
                    <p class="font-italic">
                        Transforme sua idéia em realidade saiba quando ele é ideal:
                    </p>
                    <ul>
                        <li><i class="icofont-check"></i> Quando é necessário alto processamento.</li>
                        <li><i class="icofont-check"></i> Quando há uma grande recorrência no uso.</li>
                        <li><i class="icofont-check"></i> Quando é necessário utilizar algum recurso do dispositivo.</li>
                    </ul>
                </div>
            </div>

            <div class="row content">
                <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
                    <img src="assets/img/features-4.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
                    <h3>Consultoria</h3>
                    <p class="font-italic">
                        Quer saber qual a melhor solução? solicite uma consultoria gratuita.
                    </p>
                    <p>
                        Entre em contato conosco, ficaremos felizes em respondê-lo!
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End Features Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-in">Portfólio</h2>
                <p data-aos="fade-in">Uma pequena amostra do que podemos fazer.</p>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">Todos</li>
                        <li data-filter=".filter-blog">Blog</li>
                        <li data-filter=".filter-dashboard">Dashboard</li>
                        <li data-filter=".filter-landingPage">Landing Page</li>
                        <li data-filter=".filter-site">Site</li>
                        <li data-filter=".filter-loja">Loja</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up">

                <div class="col-lg-4 col-md-6 portfolio-item filter-blog">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/blog.png" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/blog.png" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                            <a href="#contact" title="Mais Detalhes"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-dashboard">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/dashboard_1.png" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/dashboard_1.png" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                            <a href="#contact" title="Mais Detalhes"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-landingPage">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/landingPage.png" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/landingPage.png" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                            <a href="#contact" title="Mais Detalhes"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 portfolio-item filter-dashboard">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/dashboard_2.png" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/dashboard_2.png" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                            <a href="#contact" title="Mais Detalhes"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-site">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/nutrisucos.png" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/nutrisucos.png" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                            <a href="#contact" title="Mais Detalhes"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-loja">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/loja_1.png" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/loja_1.png" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                            <a href="#contact" title="Mais Detalhes"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Loja 1</h4>
                            <p>Loja</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-dashboard">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/dashboard_3.png" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/dashboard_3.png" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                            <a href="#contact" title="Mais Detalhes"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-loja">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/loja_2.png" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/loja_2.png" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                            <a href="#contact" title="Mais Detalhes"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Loja 2</h4>
                            <p>Loja</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <!--section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-in">Team</h2>
                <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up">
                        <div class="pic"><img src="assets/img/team/team-1.jpg" alt=""></div>
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                        <div class="social">
                            <a href=""><i class="icofont-twitter"></i></a>
                            <a href=""><i class="icofont-facebook"></i></a>
                            <a href=""><i class="icofont-instagram"></i></a>
                            <a href=""><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="pic"><img src="assets/img/team/team-2.jpg" alt=""></div>
                        <h4>Sarah Jhinson</h4>
                        <span>Product Manager</span>
                        <div class="social">
                            <a href=""><i class="icofont-twitter"></i></a>
                            <a href=""><i class="icofont-facebook"></i></a>
                            <a href=""><i class="icofont-instagram"></i></a>
                            <a href=""><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="pic"><img src="assets/img/team/team-3.jpg" alt=""></div>
                        <h4>William Anderson</h4>
                        <span>CTO</span>
                        <div class="social">
                            <a href=""><i class="icofont-twitter"></i></a>
                            <a href=""><i class="icofont-facebook"></i></a>
                            <a href=""><i class="icofont-instagram"></i></a>
                            <a href=""><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                        <div class="pic"><img src="assets/img/team/team-4.jpg" alt=""></div>
                        <h4>Amanda Jepson</h4>
                        <span>Accountant</span>
                        <div class="social">
                            <a href=""><i class="icofont-twitter"></i></a>
                            <a href=""><i class="icofont-facebook"></i></a>
                            <a href=""><i class="icofont-instagram"></i></a>
                            <a href=""><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!- - End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <!--section id="pricing" class="pricing section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-in">Pricing</h2>
                <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row no-gutters">

                <div class="col-lg-4 box" data-aos="zoom-in">
                    <h3>Free</h3>
                    <h4>$0<span>per month</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                        <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                        <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                        <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                        <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                    </ul>
                    <a href="#" class="get-started-btn">Get Started</a>
                </div>

                <div class="col-lg-4 box featured" data-aos="zoom-in">
                    <span class="featured-badge">Featured</span>
                    <h3>Business</h3>
                    <h4>$29<span>per month</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                        <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                        <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                        <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                        <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                    </ul>
                    <a href="#" class="get-started-btn">Get Started</a>
                </div>

                <div class="col-lg-4 box" data-aos="zoom-in">
                    <h3>Developer</h3>
                    <h4>$49<span>per month</span></h4>
                    <ul>
                        <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                        <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                        <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                        <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                        <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                    </ul>
                    <a href="#" class="get-started-btn">Get Started</a>
                </div>

            </div>

        </div>
    </section><!- - End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!--section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-in">Frequently Asked Questions</h2>
                <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up">
                <div class="col-lg-5">
                    <i class="bx bx-help-circle"></i>
                    <h4>Non consectetur a erat nam at lectus urna duis?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                </div>
            </div><!- - End F.A.Q Item- ->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-5">
                    <i class="bx bx-help-circle"></i>
                    <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                    </p>
                </div>
            </div><!- - End F.A.Q Item- ->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-5">
                    <i class="bx bx-help-circle"></i>
                    <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
                    </p>
                </div>
            </div><!- - End F.A.Q Item- ->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                <div class="col-lg-5">
                    <i class="bx bx-help-circle"></i>
                    <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Aperiam itaque sit optio et deleniti eos nihil quidem cumque. Voluptas dolorum accusantium sunt sit enim. Provident consequuntur quam aut reiciendis qui rerum dolorem sit odio. Repellat assumenda soluta sunt pariatur error doloribus fuga.
                    </p>
                </div>
            </div><!- - End F.A.Q Item- ->

            <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                <div class="col-lg-5">
                    <i class="bx bx-help-circle"></i>
                    <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
                </div>
                <div class="col-lg-7">
                    <p>
                        Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </p>
                </div>
            </div><!- - End F.A.Q Item- ->

        </div>
    </section><!- - End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-in">Contato</h2>
                <p data-aos="fade-in">Deixe uma mensagem que teremos o prazer em responder.</p>
            </div>

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box" data-aos="fade-up">
                                <i class="bx bx-map"></i>
                                <h3>Atuação</h3>
                                <p>Trazendo soluções para nossos clientes de Manaus, e outras cidades online.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-envelope"></i>
                                <h3>E-mail</h3>
                                <p>contato@devmanaus</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-phone-call"></i>
                                <h3>WhatsApp</h3>
                                <p>92 99977-2008</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" data-rule="minlen:4" data-msg="Pelo menos 4 caracteres" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" data-rule="email" data-msg="Por favor dígite um email válido" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Por favor dígite pelo menos 8 caracteres do assunto" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escreva algo para nós" placeholder="mensagem"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Carregando</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Sua mensagem foi enviada. Obrigado!</div>
                        </div>
                        <div class="text-center"><button type="submit">Enviar mensagem</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">

        <div class="container" data-aos="fade-up">

            <div class="row  justify-content-center">
                <div class="col-lg-6">
                    <h3>DevManaus</h3>
                    <p>Cadastre seu e-mail para receber notícias e dicas para seu negócio.</p>
                </div>
            </div>

            <div class="row footer-newsletter justify-content-center">
                <div class="col-lg-6">
                    <form action="" method="post">
                        <input type="email" name="email" placeholder="Digite seu e-mail"><input type="submit" value="Se inscrever">
                    </form>
                </div>
            </div>

            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://facebook.com/devmanaus" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>

        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>Bocor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
