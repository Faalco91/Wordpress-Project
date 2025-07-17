<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <header id="masthead" class="site-header">
    <div class="container">
      <div class="site-branding">
        <a href="<?php echo esc_url( home_url() ); ?>">
          <img class="logo" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/icon_esgi.png" alt="<?php bloginfo('name'); ?>">
        </a>
              <!-- Bouton “hamburger” -->
        <button id="js-menu-toggle" class="menu-toggle" aria-label="Ouvrir le menu" aria-controls="js-overlay-menu" aria-expanded="false">
          <span class="menu-toggle__bar"></span>
          <span class="menu-toggle__bar"></span>
          <span class="menu-toggle__bar"></span>
        </button>
      </div>
      </nav>
    </div>
  </header>

  <div id="js-overlay-menu" class="overlay-menu" aria-hidden="true">

    <div class="header-open-menu">
        <div class="overlay-menu__logo">
        <a href="<?php echo esc_url( home_url() ); ?>">
            <?php bloginfo( 'name' ); ?>
        </a>
        </div>
        <button id="js-menu-close" class="overlay-menu__close" aria-label="Fermer le menu">×</button>
    </div>
    <div class="content-open-menu">
    <div class="overlay-menu__search">
        <!-- Texte cliquable -->
        <span id="js-search-placeholder" class="search-placeholder">
          Or try Search
        </span>
        <!-- Le vrai formulaire, caché par défaut -->
        <div id="js-search-form" class="search-form" style="display: none;">
          <?php get_search_form(); ?>
        </div>
    </div>

        <div class="overlay-menu_sections">
            <?php
                wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'container'      => false,
                'menu_class'     => 'overlay-menu__list',
                'link_before'    => '<span>',
                'link_after'     => '</span>',
                ) );
            ?>
        </div>
    </div>

  </div>

<?php wp_footer(); ?>
</body>
</html>
