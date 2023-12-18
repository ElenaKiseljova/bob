<?php
global $images;
?>
<?php if ($images && !empty($images) && is_array($images) && !is_wp_error($images)) : ?>
  <?php foreach ($images as $key => $image) : ?>
    <img class="icon product-party-box__package product-party-box__package--<?= $key + 1; ?>" src="<?= $image['image']; ?>" alt="<?= strip_tags(get_the_title()); ?>" />

    <?php if ($key === 4) break; ?>
  <?php endforeach; ?>
<?php endif; ?>

<img class="icon product-party-box__bg" src="<?= get_template_directory_uri(); ?>/assets/img/party/party-bg.png" alt="img" />

<img class="icon product-party-box__fruits product-party-box__fruits--1" src="<?= get_template_directory_uri(); ?>/assets/img/icons/orange.svg" alt="img" />
<img class="icon product-party-box__fruits product-party-box__fruits--2" src="<?= get_template_directory_uri(); ?>/assets/img/icons/apple-piece.svg" alt="img" />
<img class="icon product-party-box__fruits product-party-box__fruits--3" src="<?= get_template_directory_uri(); ?>/assets/img/icons/mango.svg" alt="img" />
<img class="icon product-party-box__fruits product-party-box__fruits--4" src="<?= get_template_directory_uri(); ?>/assets/img/fruit-group/pair-persimmon.svg" alt="img" />
<img class="icon product-party-box__fruits product-party-box__fruits--5" src="<?= get_template_directory_uri(); ?>/assets/img/icons/pineapple-slice.svg" alt="img" />
<img class="icon product-party-box__fruits product-party-box__fruits--6" src="<?= get_template_directory_uri(); ?>/assets/img/icons/pear.svg" alt="img" />