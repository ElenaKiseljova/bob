<?php
$color_background = get_field('color_background') && !empty(get_field('color_background')) ? get_field('color_background') : (is_404() ? '#f173ac' : '#A6CE39');
$color_background_footer_top = get_field('color_background_footer_top') && !empty(get_field('color_background_footer_top')) ? get_field('color_background_footer_top') : null;

$is_shelf_health = is_page_template('page-shelf-health.php');
$custom_scrollbar_body_class = $is_shelf_health ? 'custom-scrollbar' : '';
?>

<?php
get_template_part('templates/head');
?>

<body class="<?= $custom_scrollbar_body_class; ?>" style="background-color: <?= $color_background; ?>" data-color="<?= $color_background; ?>">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W9NT4THP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php if ($color_background_footer_top) : ?>
    <style>
      html {
        --footer-top-background: <?= $color_background_footer_top; ?>;
      }
    </style>
  <?php endif; ?>


  <?php if ($is_shelf_health) : ?>
    <!-- landing-page START - класс для стилизации кастомного скролла -->
    <div class="landing-page">
    <?php endif; ?>

    <?php
    get_template_part('templates/header');
    ?>