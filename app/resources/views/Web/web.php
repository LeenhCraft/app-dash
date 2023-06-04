<?php headerWeb('Web.Template.header_web', $data); ?>
<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="banner_slider owl-carousel">
                    <?php //echo $data['items_banner']; 
                    ?>
                    <div class="single_banner_slider">
                        <div class="row">
                            <div class="col-lg-5 col-md-8">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>' . $row['art_nombre'] . '</h1>
                                        <p>' . substr($row['art_descri'], 0, 100) . '...</p>
                                        <a href="#" class="btn_2" onclick="return add_carrito(this,'1')">Reservar</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_img d-none d-lg-block" style="max-width: 300px; right: 15%;">
                                <img src="/img/dash.png" alt="Cargando...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-counter"></div>
            </div>
        </div>
    </div>
</section>
<?php
dep($_SESSION);
?>
<?php footerWeb('Web.Template.footer_web', $data); ?>