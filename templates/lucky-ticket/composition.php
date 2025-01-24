<?php
$title = get_field('title') ?? '';

$image = get_field('image') ?? [];

$subtitle = get_field('subtitle') ?? '';
$description = get_field('description') ?? '';

$button = get_field('button');

// Section 'How can I get the ticket?'
$get = get_field('get') ?? [];
?>
<section class="composition lucky-ticket-composition">
  <div class="composition__wrapper">
    <div class="container">
      <div class="composition__inner">
        <div class="lucky-ticket-composition__head">
          <h2 class="title"><?= $title; ?></h2>
        </div>

        <div class="lucky-ticket-composition__content">
          <?php if ($image && !is_wp_error($image) && $image['mobile'] && $image['desktop']): ?>
            <picture class="lucky-ticket-composition__picture">
              <source
                media="(min-width: 768px)"
                srcset="<?= $image['desktop']; ?>" />

              <img src="<?= $image['mobile']; ?>" alt="<?= get_bloginfo('name'); ?>" />
            </picture>
          <?php endif; ?>

          <?php if ($subtitle): ?>
            <h3 class="lucky-ticket-composition__subtitle"><?= $subtitle; ?></h3>
          <?php endif; ?>

          <?php if ($description): ?>
            <p class="lucky-ticket-composition__description">
              <?= $description; ?>
            </p>
          <?php endif; ?>


        </div>

        <img
          class="icon lucky-ticket-composition__fruit lucky-ticket-composition__fruit--1"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/strawberry-2.svg"
          alt="<?= get_bloginfo('name'); ?>" />
        <img
          class="icon lucky-ticket-composition__fruit lucky-ticket-composition__fruit--2"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/cherry.svg"
          alt="<?= get_bloginfo('name'); ?>" />
        <img
          class="icon lucky-ticket-composition__fruit lucky-ticket-composition__fruit--3"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/banana.svg"
          alt="<?= get_bloginfo('name'); ?>" />
        <img
          class="icon lucky-ticket-composition__fruit lucky-ticket-composition__fruit--4"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/persimmon.svg"
          alt="<?= get_bloginfo('name'); ?>" />
        <img
          class="icon lucky-ticket-composition__fruit lucky-ticket-composition__fruit--5"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/mango.svg"
          alt="<?= get_bloginfo('name'); ?>" />
        <img
          class="icon lucky-ticket-composition__fruit lucky-ticket-composition__fruit--6"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/apple-piece.svg"
          alt="<?= get_bloginfo('name'); ?>" />
        <img
          class="icon lucky-ticket-composition__fruit lucky-ticket-composition__fruit--7"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/pear-piece.svg"
          alt="<?= get_bloginfo('name'); ?>" />
      </div>
    </div>
  </div>

  <?php if ($get && !is_wp_error($get)): ?>
    <?php
    get_template_part('templates/lucky-ticket/composition', 'get', $get)
    ?>


  <?php endif; ?>

</section>