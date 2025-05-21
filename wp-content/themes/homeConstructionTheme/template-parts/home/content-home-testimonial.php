<?php
/**
 * testimonial section for home page
 */
?>

<!-- client-testimonial -->
<div class="testimonial-section wow fadeIn pos-relative" data-wow-duration="900ms"  data-wow-delay="150ms">
    <div class="pattern"></div>
    <div class="container pos-relative">
        <div class="text-center testi-heading">
            <h3 class="montserrat">Client's Sayings</h3>
        </div>
        <div id="quote-carousel" class="carousel slide text-center" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active">
                    <blockquote>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="img-and-name"> <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/icons/quote.png" class="quote-icon img-fluid" alt=""/> <img style="width: 100px;height:100px;" src="<?php echo get_template_directory_uri() ?>/assets/imgs/clients/client-1.jpg" class="img-circle" alt="">
                                    <div class="clearfix"></div>
                                </div>
                                <p class="quote-para">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                            </div>
                        </div>
                    </blockquote>
                </div>
                <div class="carousel-item">
                    <blockquote>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="img-and-name"> <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/icons/quote.png" class="quote-icon img-fluid" alt=""/> <img style="width: 100px;height:100px;" src="<?php echo get_template_directory_uri() ?>/assets/imgs/clients/client-2.jpg" class="img-circle" alt="">
                                    <div class="clearfix"></div>
                                </div>
                                <p class="quote-para">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                            </div>
                        </div>
                    </blockquote>
                </div>
                <div class="carousel-item">
                    <blockquote>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="img-and-name"> <img src="<?php echo get_template_directory_uri() ?>/assets/imgs/icons/quote.png" class="quote-icon img-fluid" alt=""/> <img style="width: 100px;height:100px;" src="<?php echo get_template_directory_uri() ?>/assets/imgs/clients/client.jpg" class="img-circle" alt="">
                                    <div class="clearfix"></div>
                                </div>
                                <p class="quote-para">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
                            </div>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#quote-carousel" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i> </a> <a class="right carousel-control" href="#quote-carousel" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i> </a> </div>
</div>
<!-- \\ client-testimonial -->
