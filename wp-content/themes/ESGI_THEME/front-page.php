<?php
/*
Template Name: Accueil ESGI
*/
get_header();
?>

<main>
  <!-- HERO -->
  <section class="intro-container">
    <div class="page-main-title">
      <h1 class="main-title"><?php the_field('intro-title'); ?></h1>
    </div>
    <div class="img-container">
      <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/image1_home.png" alt="Accueil ESGI"/>
    </div>
  </section>

  <!-- ABOUT US -->
  <section class="about-us">
    <div class="information-1">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h2><?php the_field('section-title-1'); ?></h2>
      <p><?php the_field('section-description-1'); ?></p>
    <?php endwhile; endif; ?>
    </div>
    <!-- BLOCK WHO/VISION/MISSION -->
    <div class="about-us-content">
      <div class="about-us-img">
        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_1_about.png" alt="About ESGI"/>
      </div>
      <div class="information information-2">
        <div class="information-2-content">
          <h3><?php the_field('info-h3-1') ?></h3>
          <p><?php the_field('info-description-1') ?></p>
        </div>
        <div class="information-2-content">
          <h3><?php the_field('info-h3-2') ?></h3>
          <p><?php the_field('info-description-2') ?></p>
        </div>
        <div class="information-2-content">
          <h3><?php the_field('info-h3-3') ?></h3>
          <p><?php the_field('info-description-3') ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="services">
    <h2><?php the_field('section-title-2') ?></h2>
    <div class="services-list">
      <div class="service-item service-1">
        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_1_services.png" alt="Service 1"/>
      </div>
      <div class="service-item service-2">
        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_2_services.png" alt="Service 2"/>
      </div>
      <div class="service-item service-3">
        <p>Private Parties
          <span class="service-bar"></span>
        </p>
      </div>
      <div class="service-item service-4">
        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_3_services.png" alt="Service 3"/>
      </div>
    </div>
  </section>

  <!-- PARTNERS -->
  <section class="partners">
    <h2><?php the_field('section-title-3') ?></h2>
    <div class="partners-logos">
      <img class="partner-logo-1" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_1_partners.png" alt="Partenaire 1"/>
      <img class="partner-logo-3" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_2_partners.png" alt="Partenaire 2"/>
      <img class="partner-logo-4" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_3_partners.png" alt="Partenaire 3"/>
      <img class="partner-logo-5" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_4_partners.png" alt="Partenaire 4"/>
      <img class="partner-logo-5" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_5_partners.png" alt="Partenaire 5"/>
      <img class="partner-logo-6" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_6_partners.png" alt="Partenaire 6"/>
    </div>
  </section>
</main>

<?php get_footer(); ?>