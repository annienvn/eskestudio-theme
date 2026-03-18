<?php
/**
 * Template: About Page
 * 
 * Create a page called "About" in WordPress admin
 * and this template will be used automatically.
 */
get_header();
?>

  <!-- ABOUT SECTION -->
  <section class="about-section">

    <div class="about-bio">
      <h1 class="about-title">About</h1>

      <p class="about-text">
        I'm Annie, a marketing and design specialist based in Metro Vancouver. 
        I work across brand identity, content strategy, social media, and 
        communications design, with a focus on making complex information 
        clear and accessible for diverse audiences.
      </p>

      <p class="about-text">
        My professional background spans healthcare diagnostics, natural pet 
        products, and environmental stewardship, where I've led SEO-driven 
        blog campaigns, LinkedIn strategy, email marketing, internal 
        communications, and conference presentation design. I studied 
        Interactive Arts and Technology at Simon Fraser University, which 
        gave me a foundation that sits right at the intersection of design 
        thinking and technical execution.
      </p>

      <div class="about-divider"></div>

      <p class="about-text">
        Eske Studio is my personal space, part journal, part portfolio, part 
        love letter to the places I've been and the food I've found along the way. 
        When I'm not designing or writing, I'm probably exploring a new 
        restaurant or planning the next trip somewhere I've never been.
      </p>
    </div>

    <!-- SIDEBAR -->
    <aside class="about-sidebar">
      <div class="sidebar-card">
        <div class="sidebar-label">At a glance</div>

        <div class="sidebar-item">
          <div class="sidebar-item-label">Based in</div>
          <div class="sidebar-item-value">Surrey, BC, Canada</div>
        </div>

        <div class="sidebar-item">
          <div class="sidebar-item-label">Focus</div>
          <div class="sidebar-item-value">Marketing, design, content strategy, communications</div>
        </div>

        <div class="sidebar-item">
          <div class="sidebar-item-label">Education</div>
          <div class="sidebar-item-value">Interactive Arts + Technology, SFU</div>
        </div>

        <div class="sidebar-item">
          <div class="sidebar-item-label">Tools</div>
          <div class="sidebar-item-value">Adobe Creative Suite, Figma, WordPress, Mailchimp, HTML/CSS, CapCut</div>
        </div>

        <div class="sidebar-item">
          <div class="sidebar-item-label">Connect</div>
          <div class="sidebar-item-value">
            <a href="https://www.linkedin.com/in/annienn/" target="_blank" rel="noopener">LinkedIn</a>
          </div>
        </div>
      </div>
    </aside>

  </section>

  <!-- CONTACT SECTION -->
  <section class="contact-section">
    <div class="contact-header">
      <h2 class="contact-title">Get in touch</h2>
      <p class="contact-subtitle">Have a question, a project idea, or just want to say hello? I'd love to hear from you.</p>
    </div>

    <div class="contact-form">
      <?php
      // If you install WPForms or Contact Form 7 plugin,
      // replace the HTML form below with the plugin shortcode.
      // Example: echo do_shortcode('[wpforms id="123"]');
      // For now, this is the visual form layout:
      ?>
      <div class="form-row">
        <div class="form-group">
          <label class="form-label" for="name">Name</label>
          <input type="text" id="name" class="form-input" placeholder="Your name">
        </div>
        <div class="form-group">
          <label class="form-label" for="email">Email</label>
          <input type="email" id="email" class="form-input" placeholder="your@email.com">
        </div>
      </div>

      <div class="form-group form-group-full">
        <label class="form-label" for="message">Message</label>
        <textarea id="message" class="form-textarea" placeholder="What's on your mind?"></textarea>
      </div>

      <button type="button" class="form-submit">Send message</button>
    </div>
  </section>

<?php get_footer(); ?>
