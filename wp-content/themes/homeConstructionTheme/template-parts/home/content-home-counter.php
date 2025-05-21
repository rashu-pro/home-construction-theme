<?php
/**
 * Counter section for homepage
 */
?>

<!--counter -->
<div class="content-section counter-section text-center">
    <div class="pattern-2"></div>
    <div class="container">
        <div class="col-xs-3">
            <div class="counter-div">
                <div class="stats-2-img"> <i class="fa fa-suitcase" aria-hidden="true"></i> </div>
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='120' data-delay='.5' data-increment="1">324</div>
                <p class="montserrat">project completed</p>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="counter-div">
                <div class="stats-2-img"> <i class="fa fa-users" aria-hidden="true"></i> </div>
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='324' data-delay='.5' data-increment="1">324</div>
                <p class="montserrat">workers & stuffs</p>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="counter-div">
                <div class="stats-2-img"> <i class="fa fa-trophy" aria-hidden="true"></i> </div>
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='70' data-delay='.5' data-increment="1">324</div>
                <p class="montserrat">awards won</p>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="counter-div">
                <div class="stats-2-img"> <i class="fa fa-bar-chart" aria-hidden="true"></i> </div>
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='350' data-delay='.5' data-increment="1">324</div>
                <p class="montserrat">Features</p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--\\ counter-->

<?php
wp_enqueue_script(
    'counter-js',
    get_template_directory_uri() . '/assets/js/numscroller-1.0.js',
    array(),
    null,
    true
);

