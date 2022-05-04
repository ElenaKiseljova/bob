<?php 
  global $images;
?>
<?php if ( $images && !empty($images) && is_array($images) && !is_wp_error( $images ) ) : ?>
  <?php foreach ($images as $key => $image) : ?>
    <img
      class="icon product__tube product__tube--<?= $key + 1; ?> parallax"
      
      src="<?= $image['image']; ?>"
      alt="<?= strip_tags( get_the_title(  ) ); ?>"
    />

    <?php if ($key === 2) break; ?>
  <?php endforeach; ?>
<?php endif; ?>

<img
  class="icon product__baby product__baby--1"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/lime.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__baby product__baby--2"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/banana.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__baby product__baby--3"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__baby product__baby--4"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-original.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__baby product__baby--5"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__baby product__baby--6"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__baby product__baby--7"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/mango.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>