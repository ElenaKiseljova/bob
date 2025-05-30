<?php
global $images;
?>
<?php if ($images && !empty($images) && is_array($images) && !is_wp_error($images)) : ?>
  <?php foreach ($images as $key => $image) : ?>
    <img
      class="icon product__package product__package--<?= $key + 1; ?> parallax"

      src="<?= $image['image']; ?>"
      alt="<?= strip_tags(get_the_title()); ?>" />

    <?php if ($key === 1) break; ?>
  <?php endforeach; ?>
<?php endif; ?>

<img
  class="icon product__fruits product__fruits--3"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/blueberry-2.svg"
  alt="<?= get_bloginfo('name'); ?>" />
<img
  class="icon product__fruits product__fruits--4"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/blueberry-2.svg"
  alt="<?= get_bloginfo('name'); ?>" />
<img
  class="icon product__fruits product__fruits--5"
  src="<?= get_template_directory_uri(); ?>/assets/img/fruit-group/pair-lemon-piece.svg"
  alt="<?= get_bloginfo('name'); ?>" />
<img
  class="icon product__fruits product__fruits--6"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/pear.svg"
  alt="<?= get_bloginfo('name'); ?>" />
<img
  class="icon product__fruits product__fruits--7"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/pear-original.svg"
  alt="<?= get_bloginfo('name'); ?>" />
<img
  class="icon product__fruits product__fruits--8"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/strawberry.svg"
  alt="<?= get_bloginfo('name'); ?>" />