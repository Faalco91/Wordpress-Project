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
      <h1 class="main-title">A really professional structure for all your events!</h1>
    </div>
    <div class="img-container">
      <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/image1_home.png" alt="Event Photo">
    </div>
  </section>

  <!-- ABOUT US -->
  <section class="about-us">

    <div class="information-1">
      <h2>About Us</h2>
      <p>Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution.</p>
    </div>

    <!-- BLOCK WHO/VISION/MISSION -->
    <div class="about-us-content">
      <div class="about-us-img">
        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_1_about.png" alt="">
      </div>
      <div class="information information-2">
        <div class="information-2-content">
          <h3>Who are we?</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu convallis elit, at convallis magna.</p>
        </div>
        <div class="information-2-content">
          <h3>Our vision</h3>
          <p> Nullam faucibus interdum massa. Duis eget leo mattis, pulvinar nisi et, consequat lectus. Suspendisse commodo magna orci, id luctus risus porta pharetra. Fusce vehicula aliquet urna non ultricies.</p>
        </div>
        <div class="information-2-content">
          <h3>Our mission</h3>
          <p>Vivamus et viverra neque, ut pharetra ipsum. Aliquam eget consequat libero, quis cursus tortor. Aliquam suscipit eros sit amet velit malesuada dapibus. Fusce in vehicula tellus. Donec quis lorem ut magna tincidunt egestas. </p>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="services">
    <h2>Our Services</h2>
    <div class="services-list">
      <div class="service-item service-1">
        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_1_services.png" alt="">
      </div>
      <div class="service-item service-2">
        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_2_services.png" alt="">
      </div>
      <div class="service-item service-3">
        <p>Private Parties
          <span class="service-bar"></span>
        </p>
      </div>
      <div class="service-item service-4">
        <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_3_services.png" alt="">
      </div>
    </div>
  </section>

  <!-- PARTNERS -->
  <section class="partners">
    <h2>Our Partners</h2>
    <div class="partners-logos">
      <img class="partner-logo-1" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_1_partners.png" alt="">
      <img class="partner-logo-3" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_3_partners.png" alt="">
      <img class="partner-logo-4" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_4_partners.png" alt="">
      <img class="partner-logo-5" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_5_partners.png" alt="">
      <img class="partner-logo-6" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/img_6_partners.png" alt="">

      <!-- ... -->
    </div>
  </section>
</main>

<?php get_footer(); ?>