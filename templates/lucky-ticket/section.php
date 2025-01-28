<?php
$class = $args['class'] ?? '';

$bg_color = get_field('lucky_ticket_bg_color') ?? 'green';

$title = get_field('lucky_ticket_title');

$images = get_field('lucky_ticket_images') ?? [];

$list = get_field('lucky_ticket_list') ?? [];

$button = get_field('lucky_ticket_button') ?? [];
?>

<section class="lucky-ticket <?= $class; ?>" data-color="<?= $bg_color; ?>">
  <div class="container">
    <div class="lucky-ticket__content">
      <h2 class="lucky-ticket__title"><?= $title; ?></h2>

      <?php if ($images && !is_wp_error($images) && !empty($images)): ?>
        <div class="lucky-ticket__images">
          <?php foreach ($images as $key => $image): ?>
            <div class="lucky-ticket__image">
              <img src="<?= $image; ?>" alt="Lucky Ticket" />
            </div>
            <?php if ($key === 1) break; ?>
          <?php endforeach; ?>
        </div>

      <?php endif; ?>


      <div class="lucky-ticket__detail">
        <?php if ($list && !is_wp_error($list) && !empty($list)): ?>
          <?php foreach ($list as $key => $item): ?>

            <p class="lucky-ticket__text">
              <?= $item['text']; ?>
            </p>
          <?php endforeach; ?>
        <?php endif; ?>

        <?php if ($button && $button['title'] && $button['link']): ?>
          <a href="<?= $button['link']; ?>" class="lucky-ticket__btn btn"><?= $button['title']; ?></a>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <img
    class="icon lucky-ticket__fruit lucky-ticket__fruit--1"
    src="<?= get_template_directory_uri(); ?>/assets/img/icons/persimmon.svg"
    alt="Fruit" />

  <img
    class="icon lucky-ticket__fruit lucky-ticket__fruit--2"
    src="<?= get_template_directory_uri(); ?>/assets/img/icons/cherry.svg"
    alt="Fruit" />

  <img
    class="icon lucky-ticket__fruit lucky-ticket__fruit--3"
    src="<?= get_template_directory_uri(); ?>/assets/img/icons/banana.svg"
    alt="Fruit" />

  <img
    class="icon lucky-ticket__fruit lucky-ticket__fruit--4"
    src="<?= get_template_directory_uri(); ?>/assets/img/icons/apple-piece.svg"
    alt="Fruit" />

  <img
    class="icon lucky-ticket__fruit lucky-ticket__fruit--5"
    src="<?= get_template_directory_uri(); ?>/assets/img/icons/pear.svg"
    alt="Fruit" />

  <img
    class="icon lucky-ticket__fruit lucky-ticket__fruit--6"
    src="<?= get_template_directory_uri(); ?>/assets/img/icons/strawberry-2.svg"
    alt="Fruit" />

  <img
    class="icon lucky-ticket__fruit lucky-ticket__fruit--7"
    src="<?= get_template_directory_uri(); ?>/assets/img/icons/mango.svg"
    alt="Fruit" />
</section>