<?php
/**
 * Component for commitment section
 */
?>

<style>
    .value-card {
        margin-bottom: 30px;
        padding: 15px;
    }

    .card-inner {
        background: #fff;
        padding: 30px;
        height: 100%;
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: transform 0.3s ease;
    }

    .value-card:hover .card-inner {
        transform: translateY(-10px);
    }

    .icon-box {
        font-size: 2.5rem;
        color: #2a5a8d;
        text-align: center;
    }

    .accent-line {
        width: 60px;
        height: 3px;
        background: #f0ad4e;
        margin: 15px auto;
        transition: width 0.3s ease;
    }

    .value-card:hover .accent-line {
        width: 100px;
    }

    .value-card h3 {
        color: #2a5a8d;
        font-size: 1.4rem;
        font-weight: 600;
        text-align: center;
        margin-bottom: 15px;
        margin-top: 0;
    }

    .description {
        text-align: center;
        line-height: 1.8;
        font-weight: 400;
    }

    @media (max-width: 768px) {
        .value-card {
            margin-bottom: 30px;
        }
    }
</style>

<div class="content-section about-page-section">
    <div class="container">
        <h2 class="text-center text-uppercase">Our <span class="orange-txt">Commitment</span> to our client</h2>
        <div class="border-creative text-center"><img src="<?php echo get_template_directory_uri() ?>/assets/imgs/borders/border.png" alt=""></div>
        <div class="container value-propositions">
            <div class="row">
                <!-- Scheduling -->
                <div class="col-md-4 value-card">
                    <div class="card-inner">
                        <div class="icon-box">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <h3>Precision Scheduling</h3>
                        <div class="accent-line"></div>
                        <p class="description">
                            We guarantee timely project completion through rigorous schedule optimization,
                            ensuring seamless continuity of your business operations without disruption.
                        </p>
                    </div>
                </div>

                <!-- Fair Cost -->
                <div class="col-md-4 value-card">
                    <div class="card-inner">
                        <div class="icon-box">
                            <i class="fa fa-balance-scale"></i>
                        </div>
                        <h3>Equitable Pricing</h3>
                        <div class="accent-line"></div>
                        <p class="description">
                            Our transparent costing model delivers competitive market rates without
                            compromising quality, ensuring optimal value for your investment.
                        </p>
                    </div>
                </div>

                <!-- Quality Services -->
                <div class="col-md-4 value-card">
                    <div class="card-inner">
                        <div class="icon-box">
                            <i class="fa fa-star-o"></i>
                        </div>
                        <h3>Excellence Assurance</h3>
                        <div class="accent-line"></div>
                        <p class="description">
                            Meticulous attention to detail and adherence to premium quality standards
                            form the foundation of our client partnerships and industry reputation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
