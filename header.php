<?php   
  $color_background = get_field( 'color_background' ) && !empty(get_field( 'color_background' )) ? get_field( 'color_background' ) : ( is_404(  ) ? '#f173ac' :'#A6CE39' );
?>

<?php 
  get_template_part( 'templates/head' );
?>

<body style="background-color: <?= $color_background; ?>" data-color="<?= $color_background; ?>">
  <?php 
    get_template_part( 'templates/header' );
  ?>
