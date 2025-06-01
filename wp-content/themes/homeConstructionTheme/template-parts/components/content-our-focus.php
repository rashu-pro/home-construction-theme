<?php
/**
 * Our focus section
 */

$status = get_field('status_our_focus');
$section_name = get_field('section_name_our_focus');
?>

<?php
if (!empty($status) && $status['value'] == 1) {
    ?>
    <style>
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

        .value-card:hover .card-inner {
            transform: translateY(-10px);
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
    </style>

    <div class="content-section light-bg staff-section" id="our-focus">
        <div class="container">
            <?php
            if ($section_name) {
                echo '<h2 class="text-center text-uppercase">' . $section_name . '</h2>';
                echo '<div class="border-creative text-center"> <img src="' . get_template_directory_uri() . '/assets/imgs/borders/border.png" alt=""></div>';
            }
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="strategic-objectives">
                            <?php
                            for ($i = 1; $i <= 5; $i++) {
                                $icon = get_field('icon_class_our_focus_' . $i);
                                $title = get_field('title_our_focus_' . $i);
                                $brief = get_field('brief_our_focus_' . $i);
                                if ($title || $title || $brief) {
                                    ?>
                                    <li class="objective-item">
                                        <?php
                                        if ($icon) {
                                            echo '<i class="icon ' . $icon . '" aria-hidden="true"></i>';
                                        }
                                        if ($title) {
                                            echo '<strong>' . $title . '</strong>';
                                        }
                                        if ($brief) {
                                            echo '<p>&nbsp; ' . $brief . '</p>';
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
            </div>
            <div class="clearfix"></div>
            <!-- /col -->
        </div>
    </div>
    <?php
}