<?php

/**
 * Template Name: Dental Implants Landing Page
 */
get_header();
?>
<main class="dental-implants">
  <section class="hero">
    <div class="container">
      <div class="hero-text">
        <h1>Dental Implants</h1>
        <h3 class="subheading">in Toronto</h3>
        <p>An Implant acts like a natural tooth root and is finished off with a restoration such as a dental crown to help restore the function of your teeth, look good and feel natural.</p>
        <a href="#" class="button button-secondary">Request An Appointment</a>
        <a href="#" class="button button-primary">Call (905) 848 2250</a>
      </div>
      <div class="hero-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dental-implants.jpg" alt="Dental Implants">
      </div>
    </div>
  </section>


  <section class="benefits">
    <div class="container">
      <div class="section-image">
        <div class="image-container">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/benefits.jpg" alt="Benefits of Dental Implants">
        </div>
      </div>
      <div>
        <h2>What Are Dental Implants?</h2>
        <p> An implant is a small metal screw that replaces an entire tooth. In a brief surgical procedure, the dentist inserts an implant into the bone beneath your gums right in the spot where a tooth should be. The implant acts like a natural tooth root and is finished off with a restoration such as a dental crown to help it look and feel just like a real tooth.</p>
        <p> Getting dental implants is a big deal. You think you might like an implant, but you aren’t sure what to expect. We explain everything here so that you can make an informed decision about your dental treatment.</p>
      </div>
    </div>
  </section>

  <section class="cta">
    <div class="container">
      <div class="cta-body">
        <div class="cta-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta.jpg" alt="Contact Us">
        </div>
        <div class="cta-text">
          <h2>Contact us today</h2>
          <h3 class="paragrah-title">to schedule an initial consultation & exam.</h3>
          <p>Your consultation will include an examination of everything from your teeth, gums and soft tissues to the shape and condition of your bite. Generally, we want to see how your whole mouth looks and functions. Before we plan your treatment we want to know everything about the health and aesthetic of your smile, and, most importantly, what you want to achieve so we can help you get there.</p>
          <a href="#" class="button button-primary">Book a Consultation</a>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>