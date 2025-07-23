<?php
/*
Template Name: Our Services
*/
get_header();
?>

<main>
  <!-- SERVICES SECTION -->
  <section id="services-page" class="services">
    <h2>Our Services.</h2>
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

    <!-- PRIVATE PARTIES SECTION -->
    <div id="private-parties" class="information-1">
        <div class="information-1-content">
            <h2>Corp. Parties</h2>
            <p>Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution.</p>
        </div>
    </div>
    
    <div class="full-width-image-container">
        <img class="full-width-image" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_1_corpParties.png" alt="Private Parties"/>
    </div>

  </section>

</main>

<?php get_footer(); ?>