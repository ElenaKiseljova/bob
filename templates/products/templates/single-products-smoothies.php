<?php 
  global $images;
?>
<?php if ( $images && !empty($images) && is_array($images) && !is_wp_error( $images ) ) : ?>
  <?php foreach ($images as $key => $image) : ?>
    <img
      class="icon product__smoothies product__smoothies--<?= $key + 1; ?> parallax"
      <?php if ( ($key + 1) === 1 ) : ?>
        data-y="-50"
      <?php else : ?>
        data-y="-10"
      <?php endif; ?>
      
      src="<?= $image['image']; ?>"
      alt="<?= strip_tags( get_the_title(  ) ); ?>"
    />

    <?php if ($key === 2) break; ?>
  <?php endforeach; ?>
<?php endif; ?>

<img
  class="icon product__element product__element--1 parallax"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/mango.svg "
  data-y="50"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__element product__element--2"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry-2.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__element product__element--3"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pineapple-slice.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__element product__element--4"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__element product__element--5"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  class="icon product__element product__element--6"
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>