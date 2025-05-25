<?php
/**
 * Contact info section
 */


$address = Redux::get_option('hhc_redux_options', 'hhc_contact_details_address');
$phone = Redux::get_option('hhc_redux_options', 'hhc_contact_details_phone');
$email = Redux::get_option('hhc_redux_options', 'hhc_contact_details_email');

?>

<div class="container top-contact-main">
    <h2 class="text-center text-uppercase">Get in<span class="orange-txt"> touch</span></h2>
    <div class="border-creative text-center"><img src="<?php echo get_template_directory_uri() ?>/assets/imgs/borders/border.png" alt=""/></div>
    <div class="top-contact">
        <div class="row">
            <div class="col-lg-4 col-md-12  no-padding">
                <div class="col-xs-4"> <span class="icon-contact"> <i class="flaticon-placeholder-1"></i> </span></div>
                <div class="col-xs-8 no-padding">
                    <?php echo $address ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-12  no-padding">
                <div class="col-xs-4"> <span class="icon-contact"> <i class="fa fa-mobile"></i> </span></div>
                <div class="col-xs-8 no-padding">
                    <a class="phone-mail" href="tel:<?php echo $phone ?>"><?php echo $phone ?></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12  no-padding">
                <div class="col-xs-4"> <span class="icon-contact"> <i class="fa fa-envelope-o"></i> </span></div>
                <div class="col-xs-8 no-padding">
                    <p  class="phone-mail"> <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a> </p>
                </div>
            </div>
        </div>
    </div>
</div>
