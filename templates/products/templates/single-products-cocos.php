<?php 
  global $images;
?>
<?php if ( $images && !empty($images) && is_array($images) && !is_wp_error( $images ) ) : ?>
  <?php foreach ($images as $key => $image) : ?>
    <img
      class="icon product__case product__case--<?= $key + 1; ?>"
      src="<?= $image['image']; ?>"
      alt="<?= strip_tags( get_the_title(  ) ); ?>"
    />

    <?php if ($key === 1) break; ?>
  <?php endforeach; ?>
<?php endif; ?>

<img
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/blueberry-2.svg"
  class="icon product__dessert product__dessert--1"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/raspberries.svg"
  class="icon product__dessert product__dessert--2"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/papaya.svg"
  class="icon product__dessert product__dessert--3"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-original.svg"
  class="icon product__dessert product__dessert--4"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/blueberry-2.svg"
  class="icon product__dessert product__dessert--5"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/blueberry.svg"
  class="icon product__dessert product__dessert--6"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/raspberries.svg"
  class="icon product__dessert product__dessert--7"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>
<img
  src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/grass.svg"
  class="icon product__dessert product__dessert--8"
  alt="<?= get_bloginfo( 'name' ); ?>"
/>