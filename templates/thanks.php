<section class="thanks">
  <div class="container">
    <div class="thanks__inner">
      <div class="thanks__head">
        <h1 class="thanks__title title">
          <?= __( 'юхууу, дякую <br>тобі за лист!', 'bob' ); ?>
        </h1>
        <div class="thanks__snail-top">
          <img src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/snail-thanks.svg" alt="<?= get_bloginfo( 'name' ); ?>" />
          <div class="thanks__snail-text">
            <p><?= __( 'Сенк ю!', 'bob' ); ?></p>
          </div>
        </div>
      </div>
      <div class="thanks__descr">
        <p>          
          <?= __( 'Я уважно прочитаю <br>та невдовзі відповім. <br>Не забудь перевірити email!', 'bob' ); ?>
        </p>
      </div>

      <a class="thanks__btn btn" href="<?= get_bloginfo( 'url' ); ?>">        
        <?= __( 'повернутись на головну', 'bob' ); ?>
      </a>
    </div>
  </div>
  <img
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/strawberry-2.svg"
    class="icon thanks__image thanks__image--1"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/banana.svg"
    class="icon thanks__image thanks__image--2"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/mango.svg"
    class="icon thanks__image thanks__image--3"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/apple-piece.svg"
    class="icon thanks__image thanks__image--4"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/pear.svg"
    class="icon thanks__image thanks__image--5"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
  <img
    src="<?= get_template_directory_uri(  ); ?>/assets/img/icons/persimmon.svg"
    class="icon thanks__image thanks__image--6"
    alt="<?= get_bloginfo( 'name' ); ?>"
  />
</section>