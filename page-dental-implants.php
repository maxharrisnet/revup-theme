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
    <div class="hero-container">
      <div class="text-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/content/smile@2x.png" alt="Dental Implants Icon">
        <h1>Dental Implants</h1>
        <h3 class="subheading">in Toronto</h3>
        <p>An Implant acts like a natural tooth root and is finished off with a restoration such as a dental crown to help restore the function of your teeth, look good and feel natural.</p>
        <a href="#" class="button button-secondary">Request An Appointment</a>
        <a href="#" class="button button-primary">Call (905) 848 2250</a>
      </div>
      <div class="image-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/content/dental-implants-hero.png" alt="Dental Implants">
      </div>
    </div>
  </section>

  <?php the_content(); ?>

  <section class="benefits">
    <div class="container">
      <div class="section-image">
        <div class="image-container">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/content/benefits.png" alt="Benefits of Dental Implants" loading="lazy">
        </div>
      </div>-
      <div class="text-container">
        <h2>What Are Dental Implants?</h2>
        <p> An implant is a small metal screw that replaces an entire tooth. In a brief surgical procedure, the dentist inserts an implant into the bone beneath your gums right in the spot where a tooth should be. The implant acts like a natural tooth root and is finished off with a restoration such as a dental crown to help it look and feel just like a real tooth.</p>
        <p> Getting dental implants is a big deal. You think you might like an implant, but you aren’t sure what to expect. We explain everything here so that you can make an informed decision about your dental treatment.</p>
      </div>
    </div>
  </section>

  <section>
    <div class="container column">
      <h2> What To Expect On Your Dental Implant Treatment Journey</h2>
      <p>The actual implant placement process is much more comfortable than you might imagine.</p>

      <div class="step">
        <div class="step-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-dental-chair.svg" alt="Dental Chair Icon">
        </div>
        <div class="step-tex">
          <h3>Preparing your teeth</h3>
          <p>To make space for your veneer, a thin layer of enamel is removed from the front of your tooth. We numb the area before we start working and the amount of enamel removed is very minimal. Next, we will take an impression of your prepared tooth and it’s neighbours to make sure your veneers fit perfectly and blend in with your smile.</p>
        </div>
      </div>


      <div class="step">
        <div class="step-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-brushing.svg" alt="Toothpaste and Toothbrush Icon">
        </div>
        <div class="step-tex">
          <h3>Creation and Placement</h3>
          <p>A temporary veneer will be placed for your comfort while your permanent veneers are being created. Once they’re ready to go, your temporary veneers will be removed and the perfect permanent veneers will be permanently bonded in place. After some finishing touches and a quick polish, your smile will be ready to dazzle.</p>
        </div>
      </div>


      <div class="step">
        <div class="step-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/icon-veneers.svg" alt="Veneers Icon">
        </div>
        <div class="step-tex">
          <h3>Caring for Your Veneers</h3>
          <p>When you depart with your new veneers, you’ll be given detailed instructions on how to best care for them. Your new veneers will look and feel like natural teeth, and you must take care of them like you would your natural teeth. Brushing and flossing twice a day and routine cleanings and checkups are highly recommended! With proper care, your veneers will last ten years or more.</p>
        </div>
      </div>

    </div>
  </section>

  <section>
    <div class="container">
      <div>
        <h2>Cost of Invisalign in Toronto</h2>
        <p>The out-of-pocket cost for a dental veneer can vary widely from patient to patient. With a typical insurance plan, a single veneer averages out to about $200 to $600+. Without insurance, a reasonable ball-park figure for a veneer would be about $800 to $1200 and up.</p>
        <p>So what goes into determining the cost of veneers?</p>
        <p>The number of veneers that are needed.</p>
        <p>The work that will be involved in the preparation and placement of the veneers.</p>
        <p>The type of veneers that are used.</p>
        <p>Your vision for your smile.</p>
        <p>Remember, no dental practice can provide an accurate quote over the phone. Ultimately, your needs are as unique as your smile. It’s important to speak with a dentist and undergo an oral exam to find out all your treatment options and to receive an accurate quote. If you have dental insurance, we would be happy to supply you with a quote to submit to them so you can find out your out-of-pocket costs before you make a decision.</p>
      </div>
    </div>
  </section>

  <section class="faq-section">
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

  <section class="cta-section">
    <div class="container">
      <div class="cta-body">
        <div class="cta-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dental-chair.svg" alt="Contact Us">
        </div>
        <div class="cta-text">
          <div>
            <h2>Contact us today</h2>
            <h3 class="paragraph-title">to schedule an initial consultation & exam.</h3>
          </div>
          <p>Your consultation will include an examination of everything from your teeth, gums and soft tissues to the shape and condition of your bite. Generally, we want to see how your whole mouth looks and functions. Before we plan your treatment we want to know everything about the health and aesthetic of your smile, and, most importantly, what you want to achieve so we can help you get there.</p>
          <a href="#" class="button button-primary">Book a Consultation</a>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="location-wrapper">
        <div class="location-details">
          <address>
            <p>310 Wellington Rd, London, Ontario, Canada, N6C 4P4</p>
            <p>226-781-7262</p>
            <p><a href="mailto:info@wellingtondentistry.ca">info@wellingtondentistry.ca</a></p>
          </address>
          <!--  social icons -->
          <div class=" social-icons">
            <a href="#" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/mail.svg" alt="Email"></a>
            <a href="#" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/facebook.svg" alt="Facebook"></a>
            <a href="#" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/linkedin.svg" alt="LinkedIn"></a>
            <a href="#" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/instagram.svg" alt="Instagram"></a>
            <a href="#" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/social/twitter.svg" alt="Twitter"></a>
          </div>
          <hr />
          <!-- Schedule -->
          <div class=Wellington Dentistry "location-hours">
            <h3>Office Hours</h3>
            <ul>
              <li>Monday: 10am-6pm</li>
              <li>Tuesday: 11am-7pm</li>
              <li>Wednesday: 10am-6pm</li>
              <li>Thursday: 11am-7pm</li>
              <li>Friday: 10am-3pm</li>
              <li>Saturday: 10am-3pm</li>
              <li>Sunday: Closed</li>
            </ul>
          </div>
        </div>
        <div class="location-map">
          <?php echo do_shortcode('[clinic_location name="Wellington Dentistry" width="100%" height="420px"]'); ?>
        </div>
      </div>
  </section>
</main>

<?php get_footer(); ?>