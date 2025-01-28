<?php
$tabs = get_sub_field('tabs') ?? [];
$pack = get_sub_field('pack') ?? [];
?>

<article class="composition express-snack-start-composition">
  <div class="composition__wrapper">
    <div class="container">
      <div class="composition__inner">
        <?php if (!empty($tabs)): ?>
          <?php
          $title = $tabs['title'];
          $description = $tabs['description'];
          $list = $tabs['list'];
          ?>

          <div class="express-snack-start-composition__head">
            <h2 class="title"><?= $title; ?></h2>

            <?php if ($description): ?>
              <p>
                <?= $description; ?>
              </p>
            <?php endif; ?>
          </div>

          <?php if (is_array($list) && !empty($list)  && !is_wp_error($list)): ?>
            <div class="express-snack-start-composition__tabs tabs" id="tabs">
              <?php
              // Отфильтровываю единицы скрытые из админки
              $list = array_filter($list, function ($item) {
                return $item['products_show'] === true;
              })
              ?>
              <?php if (count($list) > 1) : ?>
                <div class="tabs__btns">
                  <?php foreach ($list as $key => $item) : ?>
                    <?php
                    if ($key === 0) {
                      $selected = $item['title'];
                    }
                    ?>
                    <button class="tabs__btn <?= $key === 0 ? 'active' : ''; ?>" data-tab="<?= $key + 1; ?>">
                      <span class="tabs__number"><?= $item['title'] ?? ''; ?></span>
                    </button>
                  <?php endforeach; ?>
                </div>

                <div class="tabs__select select" id="select-2">
                  <button type="button" class="select__toggle" data-select="toggle" data-index="-1">
                    <span><?= $selected; ?></span>
                  </button>

                  <div class="select__dropdown">
                    <ul class="select__options">
                      <?php foreach ($list as $key => $item) : ?>
                        <li class="select__option tabs__btn-select" data-select="option" data-value="<?= $item['title'] ?? ''; ?>" data-index="<?= $key + 1; ?>" data-tab="<?= $key + 1; ?>">
                          <span><?= $item['title'] ?? ''; ?></span>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
              <?php endif; ?>

              <div class="tabs__contents">
                <?php foreach ($list as $key => $item) : ?>
                  <?php
                  $products = $item['products'] ?? [];
                  ?>
                  <div class="tabs__content content <?= $key === 0 ? 'active' : ''; ?>" data-content="<?= $key + 1; ?>">
                    <?php if ($products && !empty($products) && is_array($products) && !is_wp_error($products)) : ?>
                      <ul class="content__list <?= count($products) % 3 ? 'col-2' : 'col-3'; ?>">

                        <?php foreach ($products as $key => $product) : ?>
                          <?php
                          $image = $product['image'] ?? '';

                          $title = $product['title'] ?? '';

                          $composition = $product['composition'] ?? [];
                          ?>
                          <li class="content__item">
                            <div class="content__link">
                              <div class="content__image">
                                <img src="<?= $image; ?>" alt="<?= strip_tags($title); ?>" />
                              </div>
                              <h2 class="content__title">
                                <?= $title; ?>
                              </h2>

                              <?php if (!empty($composition)): ?>
                                <div class="content__descr">
                                  <?php foreach ($composition as $key => $composition_item) : ?>
                                    <?php
                                    $text = $composition_item['text'] ?? '';
                                    ?>

                                    <?php if ($text): ?>
                                      <p><?= $text; ?></p>
                                    <?php endif; ?>
                                  <?php endforeach; ?>
                                </div>
                              <?php endif; ?>
                            </div>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    <?php endif; ?>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>

        <?php endif; ?>



      </div>
    </div>
  </div>

  <?php if (!empty($pack)): ?>
    <?php
    $bob_text_left = $pack['bob_text_left'] ?? '';
    $image = $pack['image'] ?? '';
    $bob_image_text = $pack['bob_image_text'] ?? '';
    ?>
    <div class="composition__block express-snack-start-pack">
      <div class="express-snack-start-pack__wrapper">
        <?php if ($bob_text_left): ?>
          <div class="express-snack-start-pack__left">
            <div class="express-snack-start-pack__left-text">
              <p>
                <?= $bob_text_left; ?>
              </p>
            </div>
            <img src="<?= get_template_directory_uri(); ?>/assets/img/small-christmas-box/snail-pack.png" alt="<?= get_bloginfo('name'); ?>" />
          </div>
        <?php endif; ?>


        <div class="express-snack-start-pack__center">
          <img
            src="<?= $image; ?>"
            alt="<?= get_bloginfo('name'); ?>"
            class="express-snack-start-pack__pack" />

          <div class="express-snack-start-pack__snail">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/advent-calendar/snail.png" alt="<?= get_bloginfo('name'); ?>" />

            <div class="express-snack-start-pack__snail-text">
              <p><?= $bob_image_text; ?></p>
            </div>
          </div>
        </div>

        <img
          class="icon express-snack-start-pack__fruit express-snack-start-pack__fruit--1"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/blueberry.svg"
          alt="<?= get_bloginfo('name'); ?>" />

        <img
          class="icon express-snack-start-pack__fruit express-snack-start-pack__fruit--2"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/pear.svg"
          alt="<?= get_bloginfo('name'); ?>" />

        <img
          class="icon express-snack-start-pack__fruit express-snack-start-pack__fruit--3"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/banana.svg"
          alt="<?= get_bloginfo('name'); ?>" />

        <img
          class="icon express-snack-start-pack__fruit express-snack-start-pack__fruit--4"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/strawberry-2.svg"
          alt="<?= get_bloginfo('name'); ?>" />

        <img
          class="icon express-snack-start-pack__fruit express-snack-start-pack__fruit--5"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/orange-2.svg"
          alt="<?= get_bloginfo('name'); ?>" />

        <img
          class="icon express-snack-start-pack__fruit express-snack-start-pack__fruit--6"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/apple-piece.svg"
          alt="<?= get_bloginfo('name'); ?>" />

        <img
          class="icon express-snack-start-pack__fruit express-snack-start-pack__fruit--7"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/mint.svg"
          alt="<?= get_bloginfo('name'); ?>" />
      </div>
    </div>
  <?php endif; ?>

  <?php
  get_template_part('templates/lucky-ticket/section', '', ['class' => 'composition__next',]);
  ?>
</article>