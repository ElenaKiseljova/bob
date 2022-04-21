<?php 
  global $list;

  $list = get_sub_field( 'list' ) ?? [];
?>

<div class="composition__block">
  <div class="composition__snail-move">
    <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-smile.svg" alt="snail-smile" />
    <div class="composition__snail-text">
      <p><?= __( 'А ти - розкручуєш, щоб насолода була до-о-овшою!', 'bob' ); ?></p>
    </div>
  </div>

  <?php 
    get_template_part( 'templates/advantages' );
  ?>
</div>