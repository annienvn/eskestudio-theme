/**
 * Eske Studio - Scroll Animations
 * 
 * Uses IntersectionObserver to add 'is-visible' class
 * to elements when they scroll into the viewport.
 * The CSS handles the actual animation via transitions.
 */
document.addEventListener('DOMContentLoaded', function() {
  
  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.15
  });

  // Observe all animated elements
  var animatedElements = document.querySelectorAll(
    '.post-card, .section-header, .project-card, .coming-soon, .contact-section'
  );

  animatedElements.forEach(function(el) {
    observer.observe(el);
  });

});
