<?php
global $images;
?>

<?php if ($images && !empty($images) && is_array($images) && !is_wp_error($images)) : ?>
  <?php foreach ($images as $key => $image) : ?>
    <img class="icon product__package product__package--<?= $key + 1; ?>" src="<?= $image['image']; ?>" alt="<?= strip_tags(get_the_title()); ?>" />

    <?php if ($key === 1) break; ?>
  <?php endforeach; ?>
<?php endif; ?>


<img
  class="icon product__fruits product__fruits--1"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/pear.svg"
  alt="<?= get_bloginfo('name'); ?>" />
<img
  class="icon product__fruits product__fruits--2"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/apple-original.svg"
  alt="<?= get_bloginfo('name'); ?>" />
<img
  class="icon product__fruits product__fruits--3"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/orange-big.svg"
  alt="<?= get_bloginfo('name'); ?>" />
<img
  class="icon product__fruits product__fruits--4"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/blueberry.svg"
  alt="<?= get_bloginfo('name'); ?>" />
<img
  class="icon product__fruits product__fruits--5"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/orange-2.svg"
  alt="<?= get_bloginfo('name'); ?>" />
<img
  class="icon product__fruits product__fruits--6"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/apple-piece.svg"
  alt="<?= get_bloginfo('name'); ?>" />
<img
  class="icon product__fruits product__fruits--7"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/banana.svg"
  alt="<?= get_bloginfo('name'); ?>" />
<img
  class="icon product__fruits product__fruits--8"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/strawberry-2.svg"
  alt="<?= get_bloginfo('name'); ?>" />
<img
  class="icon product__fruits product__fruits--9"
  src="<?= get_template_directory_uri(); ?>/assets/img/icons/blueberry.svg"
  alt="<?= get_bloginfo('name'); ?>" />