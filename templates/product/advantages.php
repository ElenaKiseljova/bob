<?php 
  $list = get_sub_field( 'list' ) ?? [];
?>

<div class="composition__block">
  <div class="composition__snail-move">
    <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-smile.svg" alt="snail-smile" />
    <div class="composition__snail-text">
      <p><?= __( 'А ти - розкручуєш, щоб насолода була до-о-овшою!', 'bob' ); ?></p>
    </div>
  </div>
  
  <?php if ( $list && is_array($list) && !empty($list) && !is_wp_error( $list ) ) : ?>
    <ul class="composition__list composition__list--line">
      <?php foreach ($list as $key => $item) : ?>
        <?php 
          $background = $item['background'];
        
          $icon = $item['icon'] ?? '';  
          $text_big = $item['text_big'] ?? '';  
          $text_small = $item['text_small'] ?? '';  
        ?>
        <li class="composition__item" <?= $background ? 'style="background-color: ' . $background . ';"' : ''; ?>>
          <div class="composition__img">
            <img src="<?= $icon; ?>" width="38" height="38" alt="<?= strip_tags($text_big . ' ' . $text_small); ?>">
          </div>
          <b><?= $text_big; ?></b>
          <p>
            <?= $text_small; ?>
          </p>
        </li>
      <?php endforeach; ?> 
    </ul>
  <?php endif; ?>
</div>