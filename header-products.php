<?php
$color_background = get_field('color_background') && !empty(get_field('color_background')) ? get_field('color_background') : '#A6CE39';
?>

<?php
get_template_part('templates/head');
?>

<body class="color">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W9NT4THP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class="mainwrapper" data-mcs-theme="<?= $color_background; ?>">
    <?php
    get_template_part('templates/header');
    ?>