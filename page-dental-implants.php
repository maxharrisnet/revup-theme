<?php

/**
 * Template Name: Dental Implants
 *
 * @package WordPress
 * @subpackage RevUp
 * @since RevUp Theme Version 1.0
 */

if (!defined('ABSPATH')) {
  exit;
}

get_header();

?>
<main class="dental-implants">
  <section class="hero">
    <div class="container">
      <div class="text-container">
        <h1>Dental Implants</h1>
        <h3 class="subheading">in Toronto</h3>
        <p>An Implant acts like a natural tooth root and is finished off with a restoration such as a dental crown to help restore the function of your teeth, look good and feel natural.</p>
        <a href="#" class="button button-secondary">Request An Appointment</a>
        <a href="#" class="button button-primary">Call (905) 848 2250</a>
      </div>
      <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dental-implants.jpg" alt="Dental Implants">
      </div>
    </div>
  </section>

  <?php the_content(); ?>

  <section class="benefits">
    <div class="container">
      <div class="section-image">
        <div class="image-container">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/benefits.jpg" alt="Benefits of Dental Implants">
        </div>
      </div>
      <div class="text-container">
        <h2>What Are Dental Implants?</h2>
        <p> An implant is a small metal screw that replaces an entire tooth. In a brief surgical procedure, the dentist inserts an implant into the bone beneath your gums right in the spot where a tooth should be. The implant acts like a natural tooth root and is finished off with a restoration such as a dental crown to help it look and feel just like a real tooth.</p>
        <p> Getting dental implants is a big deal. You think you might like an implant, but you aren’t sure what to expect. We explain everything here so that you can make an informed decision about your dental treatment.</p>
      </div>
    </div>
  </section>

  <section class="faq">
    <div class="container faq-container">
      <div>
        <div class="desktop text-centered">
          <h2>Frequently Asked Questions</h2>
          <p>Do you still have some questions for us? No worries; we’re breaking down some of the most frequently asked questions about dental veneers.</p>
        </div>
        <div class="mobile text-centered">
          <h2>FAQ's</h2>
        </div>
        <div class="faq-list">
          <?php
          $args = array(
            'post_type' => 'faq',
            'posts_per_page' => -1,
          );
          $faqs = new WP_Query($args);
          if ($faqs->have_posts()) :
            while ($faqs->have_posts()) : $faqs->the_post(); ?>
              <details class="faq-item" open>
                <summary class="faq-question"><?php the_title(); ?></summary>
                <div class="faq-answer"><?php the_content(); ?></div>
              </details>
            <?php endwhile;
            wp_reset_postdata();
          else : ?>
            <p>No FAQs found.</p>
          <?php endif; ?>
        </div>
        <div class="desktop inline-cta ">
          <h4>Have a Different Question?</h4>
          <a href="#" class="button ">Ask our Doctor</a>
        </div>
      </div>
    </div>
  </section>


  <section class="cta">
    <div class="container">
      <div class="cta-body">
        <div class="cta-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dental-chair.svg" alt="Contact Us">
        </div>
        <div class="cta-text">
          <div>
            <h2>Contact us today</h2>
            <h3 class="paragrah-title">to schedule an initial consultation & exam.</h3>
          </div>
          <p>Your consultation will include an examination of everything from your teeth, gums and soft tissues to the shape and condition of your bite. Generally, we want to see how your whole mouth looks and functions. Before we plan your treatment we want to know everything about the health and aesthetic of your smile, and, most importantly, what you want to achieve so we can help you get there.</p>
          <a href="#" class="button button-primary">Book a Consultation</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>