<?php
/**
 * Component for commitment section
 */

$status = get_field('status_commitment');
$section_name = get_field('section_name_commitment');
?>

<?php
if (!empty($status) && $status['value']) {
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
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
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
            <h2 class="text-center text-uppercase"><?php echo $section_name ?></h2>
            <div class="border-creative text-center"><img
                        src="<?php echo get_template_directory_uri() ?>/assets/imgs/borders/border.png" alt=""></div>
            <div class="container value-propositions">
                <div class="row">
                    <?php
                    for ($i = 1; $i <= 3; $i++) {
                        $icon_class = get_field('icon_class_commitment_' . $i);
                        $title = get_field('title_commitment_' . $i);
                        $brief = get_field('brief_commitment_' . $i);
                        ?>
                        <!-- Scheduling -->
                        <div class="col-md-4 value-card">
                            <div class="card-inner">
                                <?php
                                if ($icon_class) {
                                    ?>
                                    <div class="icon-box">
                                        <i class="<?php echo $icon_class ?>"></i>
                                    </div>
                                    <?php
                                }

                                if ($title) {
                                    echo "<h3>" . $title . "</h3>";
                                }

                                echo "<div class='accent-line'></div>";

                                if ($brief) {
                                    echo '<p class="description">' . $brief . '</p>';
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php
}
?>
