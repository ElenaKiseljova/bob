<?php
$new = get_field('new') ?? [];
?>
<?php if ($new && !empty($new) && !is_wp_error($new)) : ?>
  <?php
  // Скрывает контент секции. Полностью секцию нельзя убрать из DOM, т.к. сломаются цвета остальных секций
  $is_hidden = $new['is_hidden'] ?? false;

  $bob_text = $new['bob_text'] ?? '';

  $title = $new['title'] ?? '';
  $subtitle = $new['subtitle'] ?? '';
  ?>
  <div class="product__new <?= $is_hidden ? 'empty' : '' ?>">
    <?php if (!$is_hidden) : ?>
      <div class=" product__content">
        <div class="product__text">
          <h2><?= $title; ?></h2>

          <div class="product__snail-move">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/snail-drack.svg" alt="<?= get_bloginfo('name'); ?>" />
            <div class="product__snail-text">
              <p><?= $bob_text; ?></p>
            </div>
          </div>
        </div>

        <p class="product__descr"><?= $subtitle; ?></p>
      </div>
      <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/blueberry-2.svg" class="icon product__more product__more--1" alt="<?= get_bloginfo('name'); ?>" />
      <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/pear.svg" class="icon product__more product__more--2" alt="<?= get_bloginfo('name'); ?>" />
      <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/orange-big.svg" class="icon product__more product__more--3" alt="<?= get_bloginfo('name'); ?>" />
      <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/peach-piece.svg" class="icon product__more product__more--4" alt="<?= get_bloginfo('name'); ?>" />
      <img src="<?= get_template_directory_uri(); ?>/assets/img/icons/blueberry.svg" class="icon product__more product__more--5" alt="<?= get_bloginfo('name'); ?>" />
    <?php endif; ?>

  </div>

<?php endif; ?>