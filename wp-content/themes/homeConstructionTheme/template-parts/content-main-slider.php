<?php
/**
 * Home slider template parts
 */
?>

<!-- Header Carousel -->
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="bottom-twt">
        <div class="container pos-relative">
            <div class="col-xs-12 text-center">
                <div class="news-letter-top text-center" style="position:relative; display: inline-block;"> <a id="subscribe" class="scrollup" href="#"> GET EMAIL UPDATES
                        <div class="clearfix"></div>
                        <i class="fa fa-angle-down" aria-hidden="true"></i> </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="scroll-dwn"> <a class="page-scroll dwn" href="#about"> <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/scroll-dwn.png" class="arrow bounce" alt=""/></a> </div>
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/imgs/banner-slider/banner-1.jpg')">
            <div class="pattern"></div>
            <div class="carousel-caption">
                <h2>Welcome to <span>HOME BUILDER</span> CONSTRUCTION SERVICES</h2>
                <h1>dolorem ipsum quia</h1>
                <a href="#" class="btn-creative">Read more</a> </div>
        </div>
        <div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/imgs/banner-slider/banner-2.jpg')">
            <div class="pattern"></div>
            <div class="carousel-caption">
                <h2>Welcome to <span>HOME BUILDER</span> CONSTRUCTION SERVICES</h2>
                <h1>consectetur, adipisci veli</h1>
                <a href="#" class="btn-creative">Read more</a> </div>
        </div>
        <div class="carousel-item" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/imgs/banner-slider/banner-1.jpg')">
            <div class="pattern"></div>
            <div class="carousel-caption">
                <h2>Welcome to <span>HOME BUILDER</span> CONSTRUCTION SERVICES</h2>
                <h1>dolorem ipsum quia</h1>
                <a href="#" class="btn-creative">Read more</a> </div>
        </div>
    </div>
</div>
