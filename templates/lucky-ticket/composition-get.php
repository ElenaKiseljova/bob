<?php
$title = $args['title'];
$subtitle = $args['subtitle'];
$list = $args['list'] ?? [];
$time = $args['time'];
$button = $args['button'] ?? [];
?>
<div class="composition__block lucky-ticket-get">
  <div class="lucky-ticket-get__wrapper">
    <div class="lucky-ticket-get__content">
      <h2 class="lucky-ticket-get__title"><?= $title; ?></h2>

      <?php if ($subtitle): ?>
        <p class="lucky-ticket-get__subtitle"><?= $subtitle; ?></p>
      <?php endif; ?>


      <?php if ($list && !is_wp_error($list) && !empty($list)): ?>
        <ul class="lucky-ticket-get__list">
          <?php foreach ($list as $key => $item): ?>
            <li class="lucky-ticket-get__item">
              <?= $item['text']; ?>
            </li>
          <?php endforeach; ?>


        </ul>
      <?php endif; ?>

      <?php if ($time): ?>
        <h3 class="lucky-ticket-get__time">
          <?= $time; ?>
        </h3>
      <?php endif; ?>

      <?php if ($button && $button['title'] && $button['link']): ?>
        <a href="<?= $button['link']; ?>" class="lucky-ticket-get__btn btn"><?= $button['title']; ?></a>
      <?php endif; ?>


    </div>

    <img
      class="icon lucky-ticket-get__fruit lucky-ticket-get__fruit--1"
      src="<?= get_template_directory_uri(); ?>/assets/img/icons/blueberry.svg"
      alt="<?= get_bloginfo('name'); ?>" />

    <img
      class="icon lucky-ticket-get__fruit lucky-ticket-get__fruit--2"
      src="<?= get_template_directory_uri(); ?>/assets/img/icons/pear.svg"
      alt="<?= get_bloginfo('name'); ?>" />

    <img
      class="icon lucky-ticket-get__fruit lucky-ticket-get__fruit--3"
      src="<?= get_template_directory_uri(); ?>/assets/img/icons/banana.svg"
      alt="<?= get_bloginfo('name'); ?>" />

    <img
      class="icon lucky-ticket-get__fruit lucky-ticket-get__fruit--4"
      src="<?= get_template_directory_uri(); ?>/assets/img/icons/strawberry-2.svg"
      alt="<?= get_bloginfo('name'); ?>" />

    <img
      class="icon lucky-ticket-get__fruit lucky-ticket-get__fruit--5"
      src="<?= get_template_directory_uri(); ?>/assets/img/icons/orange-2.svg"
      alt="<?= get_bloginfo('name'); ?>" />

    <img
      class="icon lucky-ticket-get__fruit lucky-ticket-get__fruit--6"
      src="<?= get_template_directory_uri(); ?>/assets/img/icons/apple-piece.svg"
      alt="<?= get_bloginfo('name'); ?>" />

    <img
      class="icon lucky-ticket-get__fruit lucky-ticket-get__fruit--7"
      src="<?= get_template_directory_uri(); ?>/assets/img/icons/mint.svg"
      alt="<?= get_bloginfo('name'); ?>" />
  </div>
</div>