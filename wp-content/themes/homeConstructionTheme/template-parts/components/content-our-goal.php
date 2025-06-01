<?php
/**
 * Our goal section
 */

$status = get_field('status_our_goal');
$section_name = get_field('section_name_our_goal');
?>

<?php
if (!empty($status) && $status['value'] == 1) {
    ?>
    <style>
        .mission-section {
            padding: 40px 0;
        }

        .value-propositions {
            list-style: none;
            padding: 0;
        }

        .prop-item {
            margin-bottom: 30px;
            padding: 20px;
            background: #f9f9f9;
            border-left: 4px solid #f0ad4e;
            display: flex;
            align-items: flex-start;
        }

        .prop-item .icon {
            font-size: 24px;
            color: #f0ad4e;
            margin-right: 15px;
            min-width: 40px;
            text-align: center;
        }

        .prop-item strong {
            color: #333;
            font-size: 1.1em;
            display: block;
            margin-bottom: 5px;
        }

        .prop-item p {
            margin: 0;
            color: #666;
            line-height: 1.6;
        }

        .objectives-section {
            padding: 50px 0;
            background: #fafafa;
        }

        .strategic-objectives {
            list-style: none;
            padding: 0;
            margin: 0 -15px;
        }

        .objective-item {
            background: #fff;
            margin-bottom: 25px;
            padding: 25px;
            border-radius: 4px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            display: flex;
            align-items: flex-start;
            transition: transform 0.3s ease;
        }

        .objective-item:hover {
            transform: translateY(-5px);
        }

        .objective-item .icon {
            font-size: 28px;
            color: #2c3e50;
            margin-right: 20px;
            min-width: 50px;
            text-align: center;
        }

        .objective-item strong {
            color: #2c3e50;
            font-size: 1.2em;
            margin-bottom: 8px;
            display: block;
        }

        .objective-item p {
            color: #7f8c8d;
            line-height: 1.7;
            margin: 0;
        }

        .value-propositions {
            padding: 60px 0;
        }

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
            margin-bottom: 20px;
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

        h3 {
            color: #2a5a8d;
            font-size: 1.4rem;
            font-weight: 600;
            text-align: center;
            margin-bottom: 15px;
        }

        .description {
            color: #4a5568;
            font-size: 1.2rem;
            line-height: 2;
            text-align: center;
            margin-bottom: 0;
        }

        @media (max-width: 768px) {
            .value-card {
                margin-bottom: 30px;
            }
        }
    </style>

    <div class="content-section light-bg staff-section">
        <div class="container">
            <h2 class="text-center text-uppercase">Our <span class="orange-txt">Goal</span></h2>
            <?php get_template_directory_uri() ?>
            <div class="border-creative text-center"><img
                        src="<?php echo get_template_directory_uri() ?>/assets/imgs/borders/border.png" alt=""></div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="value-propositions">
                        <?php
                        for ($i = 1; $i <= 3; $i++) {
                            $icon = get_field('icon_class_our_goal_' . $i);
                            $title = get_field('title_our_goal_' . $i);
                            $brief = get_field('brief_our_goal_' . $i);
                            if ($icon || $title || $brief) {
                                ?>
                                <li class="prop-item">
                                    <?php
                                    if ($icon) {
                                        echo '<i class="icon ' . $icon . '" aria-hidden="true"></i>';
                                    }
                                    if ($title) {
                                        echo '<strong>' . $title . '</strong>';
                                    }
                                    if ($brief) {
                                        echo '<p>' . $brief . '</p>';
                                    }
                                    ?>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- /col -->
        </div>
    </div>
    <?php
}
?>