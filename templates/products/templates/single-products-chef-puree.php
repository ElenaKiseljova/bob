<?php 
  global $images;
?>
<?php if ( $images && !empty($images) && is_array($images) && !is_wp_error( $images ) ) : ?>
  <?php foreach ($images as $key => $image) : ?>
    <img
      class="icon product__tube2 product__tube2--<?= $key + 1; ?> parallax"
      
      src="<?= $image['image']; ?>"
      alt="<?= strip_tags( get_the_title(  ) ); ?>"
    />

    <?php if ($key === 1) break; ?>
  <?php endforeach; ?>
<?php endif; ?>

<img
  class="icon product__chief product__chief--1"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/orange.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__chief product__chief--2"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/banana.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__chief product__chief--3"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-original.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>

<img
  class="icon product__chief product__chief--4"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__chief product__chief--5"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pineapple-slice.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__chief product__chief--6"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__chief product__chief--7"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/mango.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__chief product__chief--8"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>