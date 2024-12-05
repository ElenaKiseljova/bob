<?php
$list = get_sub_field('list');
?>
<section class="inside" data-color="var(--footer-top-background, #FFEAA2)" style="background-color: var(--footer-top-background, #FFEAA2);">
  <div class="container">
    <div class="inside__inner">
      <?php if ($list && !empty($list) && is_array($list) && !is_wp_error($list)) : ?>
        <ul class="inside__list">
          <?php foreach ($list as $key => $item) : ?>
            <?php
            $images = $item['images'] ?? [];

            $title = $item['title'] ?? '';
            $description = $item['description'] ?? '';
            ?>
            <li class="inside__item">
              <div class="inside__images">
                <?php if (!empty($images) && isset($images['1']) && isset($images['2'])) : ?>
                  <img class="inside__image inside__image--front" src="<?= $images['1']; ?>" alt="<?= get_bloginfo('name'); ?>" />
                  <?php if (isset($images['2']) && !empty($images['2'])) : ?>
                    <img class="inside__image inside__image--back" src="<?= $images['2']; ?>" alt="<?= get_bloginfo('name'); ?>" />
                  <?php endif; ?>
                <?php endif; ?>
              </div>
              <h2><?= $title; ?></h2>
              <?php if (($description && !empty($description))) : ?>
                <p>
                  <?= $description; ?>
                </p>
              <?php endif; ?>

              <?php if ((isset($images['2']) && !empty($images['2'])) || ($description && !empty($description))) : ?>
                <button class="inside__btn btn">
                  <svg width="12" height="8">
                    <use xlink:href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#arrow-down-white"></use>
                  </svg>
                </button>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>
</section>