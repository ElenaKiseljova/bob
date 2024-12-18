<?php
$top_bob_text = get_field('top_bob_text') ?? '';

$button = get_field('button');

$images = get_field('images') ?? [];
?>

<section class="top advent-calendar-top">
  <div class="container">
    <div class="top__inner">
      <div class="top__head top__head--dark">
        <?php
        the_content();
        ?>
        <div class="advent-calendar-top__snail">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/advent-calendar/snail.png" alt="<?= get_bloginfo('name'); ?>" />
          <div class="advent-calendar-top__snail-text">
            <p>
              <?= $top_bob_text; ?>
            </p>
          </div>
        </div>
      </div>

      <?php if ($button && !empty($button) && is_array($button) && !is_wp_error($button)) : ?>
        <?php
        $title = $button['title'] ?? '';

        $link = $button['link'] && !empty($button['link']) ? $button['link'] : '#tabs';
        ?>

        <?php if (!empty($title)) : ?>
          <a href="<?= $link; ?>" class="btn"><?= $title; ?></a>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  </div>

  <?php if ($images && !empty($images) && is_array($images) && !is_wp_error($images)) : ?>
    <?php foreach ($images as $key => $image) : ?>
      <img class="icon advent-calendar-top__image advent-calendar-top__image--<?= $key + 1; ?>" src="<?= $image; ?>" alt="<?= get_bloginfo('name'); ?>" />
    <?php endforeach; ?>
  <?php endif; ?>

  <img
    class="icon advent-calendar-top__image advent-calendar-top__image--3"
    src="<?= get_template_directory_uri(); ?>/assets/img/icons/cherry.svg"
    alt="<?= get_bloginfo('name'); ?>" />
  <img
    class="icon advent-calendar-top__image advent-calendar-top__image--4"
    src="<?= get_template_directory_uri(); ?>/assets/img/icons/pear.svg"
    alt="<?= get_bloginfo('name'); ?>" />
  <img
    class="icon advent-calendar-top__image advent-calendar-top__image--5"
    src="<?= get_template_directory_uri(); ?>/assets/img/icons/orange-big.svg"
    alt="<?= get_bloginfo('name'); ?>" />
  <img
    class="icon advent-calendar-top__image advent-calendar-top__image--6"
    src="<?= get_template_directory_uri(); ?>/assets/img/icons/strawberry-2.svg"
    alt="<?= get_bloginfo('name'); ?>" />
  <img
    class="icon advent-calendar-top__image advent-calendar-top__image--7"
    src="<?= get_template_directory_uri(); ?>/assets/img/icons/apple-piece.svg"
    alt="<?= get_bloginfo('name'); ?>" />
</section>