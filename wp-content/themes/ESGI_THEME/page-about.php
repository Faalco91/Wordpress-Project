<?php
/*
Template Name: About us.
*/
get_header();
?>

<main>
  <!-- HERO -->
  <section class="intro-container">
    <div class="page-main-title">
      <h1 class="main-title"><?php the_field('intro-title'); ?></h1>
    </div>
    <div id="img-container-about" class="img-container">
      <img src="<?php the_field('intro-img'); ?>" alt="">
    </div>
  </section>

  <!-- ABOUT US -->
  <section class="about-us">
    <div class="information-1">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h2><?php the_field('section-1-title-1'); ?></h2>
      <p><?php the_field('section-1-description-1'); ?></p>
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

  <!-- TEA -->
  <section class="team">
    <h2><?php the_field('section-title-2') ?></h2>
    <div class="team-list">
      <article class="team-member service-1">
        <img src="<?php the_field('section-2-img-1'); ?>" alt="">
        <h3 class="team-member-role"><?php the_field('team-member-1-role') ?></h3>
        <div class="team-member-phone"><?php the_field('team-member-1-phone') ?></p>
        <p class="team-member-email"><?php the_field('team-member-1-email') ?></p>
      </article>
      <article class="team-member service-2">
        <img src="<?php the_field('section-2-img-2'); ?>" alt="">
        <h3 class="team-member-role"><?php the_field('team-member-2-role') ?></h3>
        <p class="team-member-phone"><?php the_field('team-member-2-phone') ?></p>
        <p class="team-member-email"><?php the_field('team-member-2-email') ?></p>
      </article>
      <article class="team-member service-3">
        <img src="<?php the_field('section-2-img-3'); ?>" alt="">
        <h3 class="team-member-role"><?php the_field('team-member-3-role') ?></h3>
        <p class="team-member-phone"><?php the_field('team-member-3-phone') ?></p>
        <p class="team-member-email"><?php the_field('team-member-3-email') ?></p>
      </article>
      <article class="team-member service-4">
        <img src="<?php the_field('section-2-img-4'); ?>" alt="">
        <h3 class="team-member-role"><?php the_field('team-member-4-role') ?></h3>
        <p class="team-member-phone"><?php the_field('team-member-4-phone') ?></p>
        <p class="team-member-email"><?php the_field('team-member-4-email') ?></p>
      </article>
    </div>
  </section>
</main>

<?php get_footer(); ?>
