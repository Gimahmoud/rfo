<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js%22%3E</script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css" type="text/css">
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css">

</head>
    <body <?php body_class();?>>
    <div class="site">
        <div class="menuResponsivo">
        <div class="logo"></div>
        <div class="paginas">
            <ul></ul>
        </div>
        <button class="fechar">‹</button>
    </div>


    <div class="headerFixo" style="display:none">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>

    <header>
        <div class="container" id="inicio">
            <div class="row principal">
                <div class="col-md-2 col logo">
                    <a href="#"><img src="../img/logo-rfo.png"></a>
                </div>
                <div class="col-md-10 col">
                    <ul class="nav navbar" id="navegacao">
                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#empresa">Empresa</a></li>
                        <li><a href="#serviços">Serviços</a></li>
                        <li><a href="#parceiros">Parceiros</a></li>
                        <li><a href="#certificado">Certificado</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                    <div class="chamaResponsivo" style="display: none;">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <img src="<?= $url; ?>/img/title-single-pass-slider.png" class="title wow fadeInUp">
        </div>
    </header>