<?php
$tabs = get_sub_field('tabs') ?? [];
$pack = get_sub_field('pack') ?? [];
?>

<section class="composition advent-calendar-composition">
  <img
    class="icon advent-calendar-composition__fruit advent-calendar-composition__fruit--1"
    src="<?= get_template_directory_uri(); ?>/assets/img/icons/banana.svg"
    alt="<?= get_bloginfo('name'); ?>" />

  <div class="composition__wrapper">
    <div class="container">
      <div class="composition__inner">
        <?php if (!empty($tabs)): ?>
          <?php
          $title = $tabs['title'];
          $description = $tabs['description'];
          $list = $tabs['list'];
          ?>

          <div class="advent-calendar-composition__head">
            <h2 class="title"><?= $title; ?></h2>

            <?php if ($description): ?>
              <p>
                <?= $description; ?>
              </p>
            <?php endif; ?>
          </div>

          <?php if (is_array($list) && !empty($list)  && !is_wp_error($list)): ?>
            <div class="advent-calendar-composition__tabs tabs" id="tabs">
              <?php
              // Отфильтровываю единицы скрытые из админки
              $list = array_filter($list, function ($item) {
                return $item['products_show'] === true;
              })
              ?>
              <?php if (count($list) > 1) : ?>
                <!-- select -->
              <?php endif; ?>

              <div class="tabs__contents">
                <?php foreach ($list as $key => $item) : ?>
                  <?php
                  $products = $item['products'] ?? [];
                  ?>
                  <div class="tabs__content content <?= $key === 0 ? 'active' : ''; ?>" data-content="<?= $key + 1; ?>">
                    <?php if ($products && !empty($products) && is_array($products) && !is_wp_error($products)) : ?>
                      <ul class="content__list">

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


        <img
          class="icon advent-calendar-composition__fruit advent-calendar-composition__fruit--2"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/blueberry.svg"
          alt="<?= get_bloginfo('name'); ?>" />

        <img
          class="icon advent-calendar-composition__fruit advent-calendar-composition__fruit--3"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/cherry.svg"
          alt="<?= get_bloginfo('name'); ?>" />
      </div>
    </div>
  </div>

  <?php if (!empty($pack)): ?>
    <?php
    // $bob_text_left = $pack['bob_text_left'] ?? '';
    $image = $pack['image'] ?? '';
    $bob_image_text = $pack['bob_image_text'] ?? '';
    ?>
    <div class="composition__block advent-calendar-pack">
      <div class="advent-calendar-pack__wrapper">
        <div class="advent-calendar-pack__center">
          <img
            src="<?= $image; ?>"
            alt="<?= get_bloginfo('name'); ?>"
            class="advent-calendar-pack__pack" />

          <div class="advent-calendar-pack__snail">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/advent-calendar/snail.png" alt="<?= get_bloginfo('name'); ?>" />

            <div class="advent-calendar-pack__snail-text">
              <p><?= $bob_image_text; ?></p>
            </div>
          </div>
        </div>

        <img
          class="icon advent-calendar-pack__fruit advent-calendar-pack__fruit--1"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/blueberry.svg"
          alt="<?= get_bloginfo('name'); ?>" />

        <img
          class="icon advent-calendar-pack__fruit advent-calendar-pack__fruit--2"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/strawberry-2.svg"
          alt="<?= get_bloginfo('name'); ?>" />

        <img
          class="icon advent-calendar-pack__fruit advent-calendar-pack__fruit--3"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/apple-piece.svg"
          alt="<?= get_bloginfo('name'); ?>" />

        <img
          class="icon advent-calendar-pack__fruit advent-calendar-pack__fruit--4"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/pear.svg"
          alt="<?= get_bloginfo('name'); ?>" />
        <img
          class="icon advent-calendar-pack__fruit advent-calendar-pack__fruit--5"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/orange-2.svg"
          alt="<?= get_bloginfo('name'); ?>" />
        <img
          class="icon advent-calendar-pack__fruit advent-calendar-pack__fruit--6"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/banana.svg"
          alt="<?= get_bloginfo('name'); ?>" />
        <img
          class="icon advent-calendar-pack__fruit advent-calendar-pack__fruit--7"
          src="<?= get_template_directory_uri(); ?>/assets/img/icons/mint.svg"
          alt="<?= get_bloginfo('name'); ?>" />
      </div>
    </div>
  <?php endif; ?>

</section>