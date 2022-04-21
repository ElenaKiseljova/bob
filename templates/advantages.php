<?php 
  global $list;
?>

<?php if ( $list && is_array($list) && !empty($list) && !is_wp_error( $list ) ) : ?>
  <ul class="composition__list composition__list--<?= is_singular( 'products' ) ? 'line' : 'column'; ?>">
    <?php foreach ($list as $key => $item) : ?>
      <?php 
        $background = $item['background'];
      
        $icon = $item['icon'] ?? '';  
        $text_big = $item['text_big'] ?? '';  
        $text_small = $item['text_small'] ?? '';  
      ?>
      <li class="composition__item" <?= $background ? 'style="background-color: ' . $background . ';"' : ''; ?>>
        <div class="composition__img">
          <img src="<?= $icon; ?>" width="50" height="50" alt="<?= strip_tags($text_big . ' ' . $text_small); ?>">
        </div>
        <b><?= $text_big; ?></b>
        <p>
          <?= $text_small; ?>
        </p>
      </li>
    <?php endforeach; ?>          
  </ul>
<?php endif; ?>