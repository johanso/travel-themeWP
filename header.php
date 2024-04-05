<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <nav class="header__top">
    <div class="container">
      <div class="header__logo">
        <a href="<?php echo site_url('/'); ?>">
          <span class="header__logo-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo">
          </span>
          <span class="header__logo-text">San Andres <strong>Travel</strong></span>
        </a>
      </div>

      <div id="menu-icon" class="header__menu-icon">
        <span class="line-one"></span>
        <span class="line-two"></span>
      </div>

      <?php
        $args = array(
          'theme_location' => 'main-menu',
          'container_class' => 'header__nav',
          'menu_class' => 'header__nav-list',
          'container' => 'nav'
        );
        wp_nav_menu($args)
      ?>
    </div>
  </nav>

  <header class="header">
    <?php if( is_front_page() ) : ?>
      <div class="container container-home">
        <div class="header__hero">
          <div class="hero__info">
            <h1 class="hero__title"><?php the_field('hero_titulo_principal') ?></h1>
            <p class="hero__subtitle"><?php the_field('hero_titulo_secundario') ?></p>
          </div>

          <?php if( get_field('hero_boton') ) : ?>
            <div class="hero__button">
              <a class="button button--primary button--large" href="<?php the_field('hero_link_del_boton'); ?>">
                <?php the_field('hero_mensaje_del_boton') ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                </svg>
              </a>
            </div>
          <?php endif; ?>

          <div class="hero__features">
            <div class="hero__features_stars">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffb900" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffb900" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffb900" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffb900" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#bdbdbd" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
              </svg>
            </div>
            <div class="hero__features_texts">
              <p class="hero__features_text"><strong>4.7</strong> Stars</p>
              <p class="hero__features_text"><strong>3.91M</strong> Reviews</p>
              <p class="hero__features_text"><strong>500M+</strong> Downloads</p>
            </div>
          </div>

          <section class="platformlogos_platforms">
            <div class="platformlogos_platforms__logos">
              <div class="platformlogos_platforms__logo">
                <img alt="logo booking" width="100" height="26" decoding="async" src="<?php the_field('hero_logo_1') ?>">
              </div>
              <div class="platformlogos_platforms__logo">
                <img alt="logo expedia" width="100" height="26" decoding="async" src="<?php the_field('hero_logo_2') ?>">
              </div>
              <div class="platformlogos_platforms__logo">
                <img alt="logo tripadvisor" width="100" height="26" decoding="async" src="<?php the_field('hero_logo_3') ?>">
              </div>
              <div class="platformlogos_platforms__logo">
                <img alt="logo airbnb" width="100" height="26" decoding="async" src="<?php the_field('hero_logo_4') ?>">
              </div>
              <div class="platformlogos_platforms__logo">
                <img alt="logo orbitz" width="100" height="26" decoding="async" src="<?php the_field('hero_logo_5') ?>">
              </div>
            </div>
          </section>

        </div>
      </div>
    <?php endif; ?>
  </header>
  <main>