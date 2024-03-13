<?php
$bob_text_left = get_sub_field('bob_text_left') ?? '';

$image = get_sub_field('image') ?? '';
$bob_image_text = get_sub_field('bob_image_text') ?? '';
?>
<section class="composition choco-crush">
  <div class="composition__block">
    <div class="choco-crush__left">
      <div class="choco-crush__left-text">
        <p>
          <?= $bob_text_left; ?>
        </p>
      </div>
      <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/snail-sings.svg" alt="<?= get_bloginfo('name'); ?>" />
    </div>

    <div class="choco-crush__center">
      <img src="<?= $image; ?>" alt="<?= get_bloginfo('name'); ?>" />

      <div class="choco-crush__snail choco-crush__snail--box">
        <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/snail-sings.svg" alt="<?= get_bloginfo('name'); ?>" />
        <div class="choco-crush__snail-text">
          <p><?= $bob_image_text; ?></p>
        </div>
      </div>
    </div>
    <img class="icon choco-crush__fruit choco-crush__fruit--2" src="<?= get_template_directory_uri(); ?>/assets/img/icons/strawberry-2.svg" alt="<?= get_bloginfo('name'); ?>" />
    <img class="icon choco-crush__fruit choco-crush__fruit--3" src="<?= get_template_directory_uri(); ?>/assets/img/icons/apple-piece.svg" alt="<?= get_bloginfo('name'); ?>" />
    <img class="icon choco-crush__fruit choco-crush__fruit--4" src="<?= get_template_directory_uri(); ?>/assets/img/icons/cherry.svg" alt="<?= get_bloginfo('name'); ?>" />
    <img class="icon choco-crush__fruit choco-crush__fruit--5" src="<?= get_template_directory_uri(); ?>/assets/img/icons/blueberry.svg" alt="<?= get_bloginfo('name'); ?>" />
    <img class="icon choco-crush__fruit choco-crush__fruit--6" src="<?= get_template_directory_uri(); ?>/assets/img/icons/pear.svg" alt="<?= get_bloginfo('name'); ?>" />
    <img class="icon choco-crush__fruit choco-crush__fruit--7" src="<?= get_template_directory_uri(); ?>/assets/img/icons/orange-2.svg" alt="<?= get_bloginfo('name'); ?>" />
    <img class="icon choco-crush__fruit choco-crush__fruit--8" src="<?= get_template_directory_uri(); ?>/assets/img/icons/banana.svg" alt="<?= get_bloginfo('name'); ?>" />
  </div>
</section>