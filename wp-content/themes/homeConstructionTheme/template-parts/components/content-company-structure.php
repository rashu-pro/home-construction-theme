<?php
/**
 * Staff tree page
 */

$args = [
    'post_type' => 'hhc-staff',
    'posts_per_page' => -1,
    'orderby' => 'meta_value_num',
    'meta_key' => 'order',
    'order' => 'ASC',
    'meta_query' => [
        [
            'key' => 'status',
            'value' => 1,
            'compare' => '='
        ]
    ],
];

$staff_posts = get_posts($args);
$staff_lookup = [];
$staff_tree = [];

// Build lookup
foreach ($staff_posts as $staff) {
    $staff_id = $staff->ID;
    $parent = get_field('staff_wing', $staff_id);
    $parent_id = $parent ? $parent->ID : null;
    $terms = get_the_terms($staff_id, 'designation');
    $designation = $terms && !is_wp_error($terms) ? $terms[0]->name : '';

    $staff_lookup[$staff_id] = [
        'id' => $staff_id,
        'name' => $staff->post_title,
        'designation' => $designation,
        'parent' => $parent_id,
        'children' => [],
    ];
}

// Build tree
foreach ($staff_lookup as $id => &$node) {
    if (!empty($node['parent']) && isset($staff_lookup[$node['parent']])) {
        $staff_lookup[$node['parent']]['children'][] = &$node;
    } else {
        $staff_tree[] = &$node;
    }
}
?>

<style>
    .org-chart-wrapper {
        display: flex;
        justify-content: center;
        overflow-x: auto;
        padding: 20px;
        flex-wrap: nowrap;
        width: 100%;
    }

    .org-chart-wrapper ul {
        padding-top: 20px;
        position: relative;
        display: table;
        margin: 0 auto;
    }

    .org-chart-wrapper ul::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        /*border-top: 2px solid #ccc;*/
        width: 100%;
        transform: translateX(-50%);
    }

    .org-chart-wrapper li {
        display: table-cell;
        text-align: center;
        position: relative;
        padding: 20px;
        vertical-align: top;
    }

    .org-chart-wrapper li::before,
    .org-chart-wrapper li::after {
        content: '';
        position: absolute;
        top: 0;
        border-top: 2px solid #ccc;
        width: 50%;
        height: 20px;
    }
    .org-chart-wrapper li::before {
        left: 0;
    }
    .org-chart-wrapper li::after {
        right: 0;
        border-left: 2px solid #ccc;
    }

    .org-chart-wrapper li:only-child::before,
    .org-chart-wrapper li:only-child::after {
        display: none;
    }
    .org-chart-wrapper li:only-child {
        padding-top: 0;
    }

    .org-chart-wrapper li:first-child::before,
    .org-chart-wrapper li:last-child::after {
        border-top: 0;
    }

    .org-chart-wrapper li > ul::before {
        top: 0;
        left: 50%;
        border-top: 2px solid #ccc;
        width: 0;
        height: 20px;
        border-left: 2px solid #ccc;
    }

    .box {
        display: inline-block;
        background: #fff;
        border: 2px solid #004f9e;
        padding: 10px 15px;
        border-radius: 6px;
        box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
        min-width: 150px;
        max-width: 90vw;
    }
    .box strong {
        font-size: 14px;
        color: #004f9e;
    }
    .box span {
        display: block;
        font-size: 12px;
        color: #555;
        margin-top: 4px;
    }

</style>

<div class="org-chart-wrapper">
    <?php render_staff_tree($staff_tree); ?>
</div>
