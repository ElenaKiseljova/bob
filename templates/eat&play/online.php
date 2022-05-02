<?php 
  $title = get_sub_field( 'title' ) ?? '';

  $description = get_sub_field( 'description' ) ?? '';

  $list = get_sub_field( 'list' ) ?? [];
?>

<section class="online order" id="tabs">
  <div class="container">
    <div class="top__inner">
      <div class="top__head top__head--dark">
        <h2><?= $title; ?></h2>
      </div>
      <div class="order__text">
        <p><?= $description; ?></p>
      </div>

      <?php if ( $list && !empty($list) && is_array($list) && !is_wp_error( $list ) ) : ?>
        <ul class="order__list">
          <?php foreach ($list as $key => $item) : ?>
            <?php 
              $image = $item['image'] ?? '';
              $link = $item['link'] ?? '';
            ?>
            <li class="order__item">
              <a class="order__logo" href="<?= $link; ?>">
                <img src="<?= $image; ?>" alt="<?= get_bloginfo( 'name' ); ?>" />
              </a>
            </li>
          <?php endforeach; ?>        
        </ul>
      <?php endif; ?>      
    </div>
  </div>
</section>