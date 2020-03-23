@extends('layouts.app')

@section('content')
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="" data-aos="flip-right">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="200">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="300">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="400">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="500">
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <div class="client-logo">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="" data-aos="flip-right" data-aos-delay="600">
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container">

            <div class="row">
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
                <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
                    <div class="content d-flex flex-column justify-content-center">
                        <h3 data-aos="fade-in" data-aos-delay="100">DevManaus</h3>
                        <p data-aos="fade-in">
                            Buscamos proporcionar soluções que permitam nossos clientes focar no seu negócio.
                        </p>
                        <div class="row">
                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="bx bx-receipt"></i>
                                <h4><a href="#">Relatórios</a></h4>
                                <p>Tenha o controle do seu negócio.</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-cube-alt"></i>
                                <h4><a href="#">Desenvolvimento</a></h4>
                                <p>Desenvolvemos a solução que você prescisa, moldando as soluções personalizadas</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-images"></i>
                                <h4><a href="#">Melhore os resultados</a></h4>
                                <p>Atrair, Fidelizar e Vender.</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-shield"></i>
                                <h4><a href="#">Segurança</a></h4>
                                <p>Ambiente criptografado, onde seus dados pessoais e financeiros estarão protegidos.</p>
                            </div>
                        </div>
                    </div><!-- End .content -->
                </div>
            </div>

        </div>
    </section><!-- End About Section -->
@endsection
