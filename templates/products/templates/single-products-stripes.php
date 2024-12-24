<?php
global $images;
?>
<?php if ($images && !empty($images) && is_array($images) && !is_wp_error($images)) : ?>
  <?php foreach ($images as $key => $image) : ?>
    <img
      class="icon product__package product__package--<?= $key + 1; ?> parallax"

      src="<?= $image['image']; ?>"
      alt="<?= strip_tags(get_the_title()); ?>" />

    <?php if ($key === 2) break; ?>
  <?php endforeach; ?>
<?php endif; ?>

<img
  class="icon product__fruits product__fruits--1"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/strawberry.svg"
  alt="<?= get_bloginfo('name'); ?>" />
<img
  class="icon product__fruits product__fruits--2"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/strawberry.svg"
  alt="<?= get_bloginfo('name'); ?>" />
<img
  class="icon product__fruits product__fruits--3 parallax"
  data-y="-60"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/pear.svg"
  alt="<?= get_bloginfo('name'); ?>" />
<img
  class="icon product__fruits product__fruits--4"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/peach-piece.svg"
  alt="<?= get_bloginfo('name'); ?>" />
<img
  class="icon product__fruits product__fruits--5"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/persimmon.svg"
  alt="<?= get_bloginfo('name'); ?>" />
<img
  class="icon product__fruits product__fruits--6"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/apple-piece.svg"
  alt="<?= get_bloginfo('name'); ?>" />