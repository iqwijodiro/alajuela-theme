<?php
get_header();
?>

<main class="main-content">
    <div class="image-bg">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/hero_bg.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/img/hero_bg.jpg" class="skip-lazy" alt="Logo">
        </picture>
    </div>
    <div class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="image-logo">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/img/logo-black.webp" type="image/webp">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo-black.png"" alt=" Logo">
                    </picture>
                </div>
                <h1 class="title text-center">Estás a un paso <br> de las llaves de tu casa <br>
                    <strong>
                        ¡Entrega inmediata!
                    </strong>
                </h1>
                <a href="#form" class="btn-primary text-uppercase">Más información</a>

            </div>
        </div>

    </div>

    <section class="location section bg-verde-ac">
        <div class="container">
            <div class="row">
                <div class="content col">
                    <h2 class="text-xl text-white">Ubicada a 5 minutos del centro de Alajuela</h2>
                    <h3 class="text-white title">
                        Rápido acceso a: <br> supermercados, restaurantes, escuelas y más...
                    </h3>
                </div>
                <div class="col">
                    <div class="map">
                        <?php
                        echo the_field('ubicacion')
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="plans section">
        <h2 class="text-center fw-bold text-xl">¡La compra de su casa puede ser una realidad ahora!</h2>
        <div class="container">
            <div class="row">
                <div class="col image">
                    <!-- <picture>
                        <source srcset="
                        <?php /*echo get_template_directory_uri(); */?>
                        /img/couple-mod.webp" type="image/webp">
                        <img loading="lazy" src="<?php /*echo get_template_directory_uri(); */?>/img/couple.png"" alt=" Pareja con llaves de nueva casa" height="550">
                    </picture> -->
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/couple.png"" alt=" Pareja con llaves de nueva casa" height="550">
                </div>
                <div class="col content">
                    <div class="box text-center text-xl order-sm-1">
                        <h3 class="text-color-primary fw-bold">
                            Financiamos casi el <span class="text-color-secondary fw-bold">100%</span>
                        </h3>
                    </div>
                    <p class="text-content order-sm-0">¡Ya no más alquiler! Ahora puedes vivir en casa propia, con estilo, en un lugar seguro y agradable.</p>
                    <a href="https://wa.me/message/GUWFBJEX6657L1" class="btn-primary order-sm-2">
                        <i class="fab fa-whatsapp"></i>
                        <span>
                            Contactar
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section form-section" id="form">
        <div class="container">
            <div class="row">
                <div class="col content">
                    <div class="box">
                        <h2 class="text-xl fw-bold">
                            ¡Estamos listos para atenderte!
                        </h2>
                    </div>
                    <div class="box border-m">
                        <p class="text-content">Nuestros asesores te esperan para brindarte una atención personalizada.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="box form">
                        <div>
                            <?php
                            echo do_shortcode('[contact-form-7 id="102" title="Formulario de contacto"]');
                            ?>
                        </div>
                        <div class="social-media">
                            <div class="social-single">
                                <i class="fab fa-instagram" ;"></i>
                                <a href="https://www.instagram.com/pradealajuela_cr/">pradealajuela_cr</a>
                            </div>
                            <div class="social-single">
                                <i class="fab fa-facebook" ;"></i>
                                <a href="https://www.facebook.com/condominiopraderasdealajuelacr/">Condominios Praderas de alajuela</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="propiedades section bg-verde-ac">
        <h2 class="text-xl text-center text-white fw-light">
            Propiedades disponibles
        </h2>
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="#modelo-1">
                        <div class="card">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/panorama-escalera.webp" type="image/webp">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/panorama-escalera.png"" alt=" Foto de modelo 1">
                            </picture>

                            <h3 class="text-uppercase fw-bold">Modelo 1</h3>
                            <div class="section-divider"></div>
                            <p class="text-caption">
                                Unidad habitacional de <strong>64 mts<sup>2</sup></strong>
                            </p>
                            <ul class="icons-list text-color-secondary">
                                <li>
                                    <p>2</p>
                                    <i class="fas fa-bed"></i>
                                </li>
                                <li>
                                    <p>1</p>
                                    <i class="fas fa-bath"></i>
                                </li>
                                <li>
                                    <p>2</p>
                                    <i class="fas fa-car"></i>
                                </li>
                            </ul>

                        </div>
                    </a>
                </div>

                <div class="col">
                    <a href="#modelo-2">
                        <div class="card">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/close-up-sala.webp" type="image/webp">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/close-up-sala.png"" alt=" Foto de modelo 2">
                            </picture>

                            <h3 class="text-uppercase fw-bold">Modelo 2</h3>
                            <div class="section-divider"></div>
                            <p class="text-caption">
                                Unidad habitacional de <strong>57 mts<sup>2</sup></strong>
                            </p>
                            <ul class="icons-list text-color-secondary">
                                <li>
                                    <p>2</p>
                                    <i class="fas fa-bed"></i>
                                </li>
                                <li>
                                    <p>1</p>
                                    <i class="fas fa-bath"></i>
                                </li>
                                <li>
                                    <p>1</p>
                                    <i class="fas fa-car"></i>
                                </li>
                            </ul>

                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="#modelo-3">
                        <div class="card">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/dormitorios.webp" type="image/webp">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/dormitorios.png" alt=" Foto de modelo 3">
                            </picture>

                            <h3 class="text-uppercase fw-bold">Modelo 3</h3>
                            <div class="section-divider"></div>
                            <p class="text-caption">
                                Unidad habitacional de <strong>70 mts<sup>2</sup></strong>
                            </p>
                            <ul class="icons-list text-color-secondary">
                                <li>
                                    <p>3</p>
                                    <i class="fas fa-bed"></i>
                                </li>
                                <li>
                                    <p>1</p>
                                    <i class="fas fa-bath"></i>
                                </li>
                                <li>
                                    <p>2</p>
                                    <i class="fas fa-car"></i>
                                </li>
                            </ul>

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- banner especial-->

    <section class="banner">
        <div class="image-banner">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/banner.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner.png" alt="Banner de precio">
            </picture>
        </div>
        <!-- banner-responsive -->
        <div class="image-banner-responsive d-none">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/banner_rsp.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner_rsp.png" alt="Banner de precio">
            </picture>
        </div>
    </section>


    <!-- propiedad singular - MODELO 1-->
    <section id="modelo-1" class="propiedad section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <div class="box-mod">
                            <div class="box-inner">
                                <h2 class="title">
                                    Modelo 1
                                </h2>
                            </div>
                        </div>
                        <p class="text-mid">
                            Esta casa está diseñada con acabados de primera, espacios para esparcimiento (jardín posterior).<br> <strong>64 mts<sup>2</sup></strong>
                        </p>
                        <ul class="icons-list text-color-secondary">
                            <li>
                                <p>2</p>
                                <i class="fas fa-bed"></i>
                            </li>
                            <li>
                                <p>1</p>
                                <i class="fas fa-bath"></i>
                            </li>
                            <li>
                                <p>2</p>
                                <i class="fas fa-car"></i>
                            </li>
                        </ul>
                        <div class="image">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/mod-1.webp" type="image/webp">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/mod-1.png"" alt=" Foto de modelo 1" height="310">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="image">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/panorama-escalera.webp" type="image/webp">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/panorama-escalera.png"" alt=" Foto de modelo 1" height="330">
                        </picture>
                    </div>
                    <div class="image">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/sala.webp" type="image/webp">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/sala.png"" alt=" Foto de modelo 1" height="330">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="row">
                <a href="https://wa.me/message/GUWFBJEX6657L1" class="btn-primary bg-morado">
                    <i class="fab fa-whatsapp"></i>
                    Contactar
                </a>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>

    <!-- propiedad singular - MODELO 2-->

    <section id="modelo-2" class="propiedad section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <div class="box-mod">
                            <div class="box-inner">
                                <h2 class="title">
                                    Modelo 2
                                </h2>
                            </div>
                        </div>
                        <p class="text-mid">
                            Esta casa está diseñada con acabados de primera, espacios para esparcimiento (jardín posterior).<br> <strong>57 mts<sup>2</sup></strong>
                        </p>
                        <ul class="icons-list text-color-secondary">
                            <li>
                                <p>2</p>
                                <i class="fas fa-bed"></i>
                            </li>
                            <li>
                                <p>1</p>
                                <i class="fas fa-bath"></i>
                            </li>
                            <li>
                                <p>1</p>
                                <i class="fas fa-car"></i>
                            </li>
                        </ul>
                        <div class="image">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/mod-3.webp" type="image/webp">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/mod-3.png"" alt=" Foto de modelo 1" height="310">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="image">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/dormitorios.webp" type="image/webp">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/dormitorios.png"" alt=" Foto de modelo 1" height="330">
                        </picture>
                    </div>
                    <div class="image">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/corredor.webp" type="image/webp">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/corredor.png"" alt=" Foto de modelo 1" height="330">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="row">
                <a href="https://wa.me/message/GUWFBJEX6657L1" class="btn-primary bg-morado">
                    <i class="fab fa-whatsapp"></i>
                    Contactar
                </a>
            </div>
        </div>
    </section>

    <div class="section-divider"></div>
    <!-- propiedad singular - MODELO 3-->

    <section id="modelo-3" class="propiedad section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="wrapper">
                        <div class="box-mod">
                            <div class="box-inner">
                                <h2 class="title">
                                    Modelo 3
                                </h2>
                            </div>
                        </div>
                        <p class="text-mid">
                            Esta casa está diseñada con acabados de primera, espacios para esparcimiento (jardín posterior).<br> <strong>70 mts<sup>2</sup></strong>
                        </p>
                        <ul class="icons-list text-color-secondary">
                            <li>
                                <p>3</p>
                                <i class="fas fa-bed"></i>
                            </li>
                            <li>
                                <p>1</p>
                                <i class="fas fa-bath"></i>
                            </li>
                            <li>
                                <p>2</p>
                                <i class="fas fa-car"></i>
                            </li>
                        </ul>
                        <div class="image">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri(); ?>/img/mod-2.webp" type="image/webp">
                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/mod-2.png"" alt=" Foto de modelo 1" height="310">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="image">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/close-up-sala.webp" type="image/webp">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/close-up-sala.png"" alt=" Foto de modelo 1" height="330">
                        </picture>
                    </div>
                    <div class="image">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/armario.webp" type="image/webp">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/armario.png"" alt=" Foto de modelo 1" height="330">
                        </picture>
                    </div>
                </div>
            </div>
            <div class="row">
                <a href="https://wa.me/message/GUWFBJEX6657L1" class="btn-primary bg-morado">
                    <i class="fab fa-whatsapp"></i>
                    Contactar
                </a>
            </div>
        </div>
    </section>

    <section class="section date-section">
        <div class="container">
            <div class="row">
                <div class="col" style="margin-top: 5%">
                    <h2 class="text-xl fw-bold text-white">
                        Agenda tu cita
                    </h2>
                    <p class="text-white text-uppercase">
                        Teléfono: (+506) 70373135
                    </p>
                    <p class="text-white">
                        Correo: <br> info@praderasdealajuela.com
                    </p>
                    <div class="box form">
                        <div>
                            <?php
                            echo do_shortcode('[contact-form-7 id="19" title="Formulario de agenda"]');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col" style="padding: 0">
                    <div class="image">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/agenda.webp" type="image/webp">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/agenda.png"" alt=" Foto de modelo 1">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>