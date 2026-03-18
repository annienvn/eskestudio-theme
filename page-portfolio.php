<?php
/**
 * Template: Portfolio Page
 * 
 * WordPress automatically uses this template for any page
 * with the slug "portfolio". So in WordPress admin, you just
 * create a new Page, title it "Portfolio", and this template
 * takes over.
 * 
 * The project data below is hardcoded for now. When you want
 * to make projects editable from WordPress admin, you could
 * use Custom Post Types or Advanced Custom Fields plugin.
 * But hardcoded is perfectly fine to start.
 */
get_header();
?>

  <!-- PORTFOLIO HERO -->
  <section class="portfolio-hero">
    <h1 class="portfolio-hero-title">Selected work</h1>
    <p class="portfolio-hero-desc">
      Marketing, design, and content strategy projects across brand identity, 
      social campaigns, SEO-driven content, and corporate communications.
    </p>
    <div class="portfolio-hero-divider"></div>
  </section>

  <!-- PROJECT LIST -->
  <div class="project-list">

    <!-- PROJECT 1: Lymphoma Campaign -->
    <article class="project-card">
      <div class="project-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-lymphoma.jpg" alt="Lymphoma Awareness Campaign">
      </div>
      <div class="project-info">
        <div class="project-number">01</div>
        <h2 class="project-title">Lymphoma awareness campaign</h2>
        <p class="project-role">Strategy, SEO, social media, content — Artron Laboratories</p>
        <p class="project-desc">
          Identified World Lymphoma Awareness Day as a strategic window, 
          built an SEO-driven blog and 4-week LinkedIn content calendar, 
          and launched a newsletter that gained 400+ subscribers in week one. 
          Results: 34.7% increase in page views, 50% increase in clicks, 
          47.5% follower growth.
        </p>
        <a href="<?php echo esc_url(home_url('/portfolio/lymphoma-campaign')); ?>" class="project-link">
          View project <span class="project-link-arrow">&rarr;</span>
        </a>
      </div>
    </article>

    <!-- PROJECT 2: Shibui Concept -->
    <article class="project-card">
      <div class="project-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-shibui.jpg" alt="Shibui Concept brand identity">
      </div>
      <div class="project-info">
        <div class="project-number">02</div>
        <h2 class="project-title">Shibui Concept 渋井</h2>
        <p class="project-role">Brand identity, packaging, menu design — freelance</p>
        <p class="project-desc">
          Designed bottle labels and a double-sided menu for a minimalist 
          Vietnamese coffee and vinyl shop in Saigon. Worked remotely 
          with the founders to translate Japanese-inspired aesthetics 
          into a cohesive brand identity for a startup on a lean budget.
        </p>
        <a href="<?php echo esc_url(home_url('/portfolio/shibui-concept')); ?>" class="project-link">
          View project <span class="project-link-arrow">&rarr;</span>
        </a>
      </div>
    </article>

    <!-- PROJECT 3: KhaiAn Rebranding -->
    <article class="project-card">
      <div class="project-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-khaian.jpg" alt="KhaiAn rebranding">
      </div>
      <div class="project-info">
        <div class="project-number">03</div>
        <h2 class="project-title">KhaiAn rebranding</h2>
        <p class="project-role">Logo design, brand identity, marketing collateral — freelance</p>
        <p class="project-desc">
          Led a complete logo redesign and brand refresh for a Vietnamese 
          logistics company. Developed multiple concept directions from 
          initial sketches through to final deliverables including business 
          cards, letterheads, and vehicle branding.
        </p>
        <a href="<?php echo esc_url(home_url('/portfolio/khaian-rebranding')); ?>" class="project-link">
          View project <span class="project-link-arrow">&rarr;</span>
        </a>
      </div>
    </article>

    <!-- PROJECT 4: Artron Company Profile -->
    <article class="project-card">
      <div class="project-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-artron.jpg" alt="Artron company profile">
      </div>
      <div class="project-info">
        <div class="project-number">04</div>
        <h2 class="project-title">Artron company profile</h2>
        <p class="project-role">Corporate design, InDesign — Artron Laboratories</p>
        <p class="project-desc">
          Redesigned a dated B2B company profile into a modern, 
          magazine-style brochure. Researched competitor materials, 
          restructured content to reduce text density, and introduced 
          infographic elements to communicate complex product lines clearly.
        </p>
        <a href="<?php echo esc_url(home_url('/portfolio/artron-profile')); ?>" class="project-link">
          View project <span class="project-link-arrow">&rarr;</span>
        </a>
      </div>
    </article>

  </div>

  <!-- COMING SOON -->
  <div class="coming-soon">
    <div class="coming-soon-inner">
      <p class="coming-soon-label">More work coming soon</p>
      <p class="coming-soon-text">Social strategy, SEO content, member communications, and brand design</p>
    </div>
  </div>

<?php get_footer(); ?>
