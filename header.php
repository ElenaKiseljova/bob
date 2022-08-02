<?php   
  $color_background = get_field( 'color_background' ) && !empty(get_field( 'color_background' )) ? get_field( 'color_background' ) : ( is_404(  ) ? '#f173ac' :'#A6CE39' );
?>

<?php 
  get_template_part( 'templates/head' );
?>

<body style="background-color: <?= $color_background; ?>" data-color="<?= $color_background; ?>">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NT8GNXM"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <?php 
    get_template_part( 'templates/header' );
  ?>
