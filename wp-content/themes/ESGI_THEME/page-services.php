<?php
/*
Template Name: Our Services
*/
get_header();
?>

<main>
  <!-- SERVICES -->
  <section id="services-page" class="services">
    <h2><?php the_field('section-title-1') ?></h2>
    <div class="services-list">
      <div class="service-item service-1">
        <img src="<?php the_field('section-1-img-1'); ?>"/>
      </div>
      <div class="service-item service-2">
        <img src="<?php the_field('section-1-img-2'); ?>"/>
      </div>
      <div class="service-item service-3">
        <p><?php the_field('text-section-1') ?>
          <span class="service-bar"></span>
        </p>
      </div>
      <div class="service-item service-4">
        <img src="<?php the_field('section-1-img-3'); ?>"/>
      </div>
    </div>

    <div id="private-parties" class="information-1">
        <div class="information-1-content">
            <h2><?php the_field('section-1-h2'); ?></h2>
            <p><?php the_field('section-1-description-1'); ?></p>
        </div>
    </div>
    <img src="<?php the_field("section-1-img-4") ?>"/>

  </section>

</main>

<?php get_footer(); ?>