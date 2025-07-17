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
      <img src="<?php the_field('intro-img'); ?>" alt="">
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
        <img src="<?php the_field('section-1-img-1'); ?>" alt="">
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
        <img src="<?php the_field('section-2-img-1'); ?>" alt="">
      </div>
      <div class="service-item service-2">
        <img src="<?php the_field('section-2-img-2'); ?>" alt="">
      </div>
      <div class="service-item service-3">
        <p><?php the_field('text-section-2') ?>
          <span class="service-bar"></span>
        </p>
      </div>
      <div class="service-item service-4">
        <img src="<?php the_field('section-2-img-3'); ?>" alt="">
      </div>
    </div>
  </section>

  <!-- PARTNERS -->
  <section class="partners">
    <h2><?php the_field('section-title-3') ?></h2>
    <div class="partners-logos">
      <img class="partner-logo-1" src="<?php the_field('section-3-img-1'); ?>" alt="">
      <img class="partner-logo-3" src="<?php the_field('section-3-img-2'); ?>" alt="">
      <img class="partner-logo-4" src="<?php the_field('section-3-img-3'); ?>" alt="">
      <img class="partner-logo-5" src="<?php the_field('section-3-img-4'); ?>" alt="">
      <img class="partner-logo-5"  src="<?php the_field('section-3-img-5'); ?>" alt="">
      <img class="partner-logo-6"  src="<?php the_field('section-3-img-6'); ?>" alt="">
    </div>
  </section>
</main>

<?php get_footer(); ?>