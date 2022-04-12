<?php 
  $color_background = get_field( 'color_background' ) && !empty(get_field( 'color_background' )) ? get_field( 'color_background' ) : '#A6CE39';
?>

<?php 
  get_template_part( 'templates/head' );
?>

<body class="color">
  <div class="mainwrapper" data-mcs-theme="<?= $color_background; ?>">
    <?php 
      get_template_part( 'templates/header' );
    ?>
  
