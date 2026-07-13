(function () {
  if (!document.body.classList.contains('protocol-peptides-theme')) return;

  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function revealElement(element) {
    element.classList.add('protocol-animate--ready', 'protocol-animate--in');
  }

  function enhanceProductLists() {
    document.querySelectorAll('.section-resource-list').forEach((section, index) => {
      const header = section.querySelector('.section-resource-list__header');
      const grid = section.querySelector('.resource-list, .product-grid, [data-testid="resource-list-grid"]');

      if (header && !header.classList.contains('protocol-animate')) {
        header.classList.add(
          'protocol-animate',
          'protocol-animate--slide-up',
          index === 0 ? 'protocol-animate--delay-600' : 'protocol-animate--delay-100'
        );
      }

      if (grid && !grid.classList.contains('protocol-animate')) {
        grid.classList.add('protocol-animate', 'protocol-animate--slide-right', 'protocol-animate--delay-400');
      }
    });
  }

  function initProtocolAnimations() {
    enhanceProductLists();

    const elements = document.querySelectorAll('.protocol-animate');

    if (reduceMotion) {
      elements.forEach(revealElement);
      return;
    }

    elements.forEach((element) => {
      if (!element.classList.contains('protocol-animate--ready')) {
        element.classList.add('protocol-animate--ready');
      }
    });

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;
          entry.target.classList.add('protocol-animate--in');
          observer.unobserve(entry.target);
        });
      },
      {
        root: null,
        rootMargin: '0px 0px -8% 0px',
        threshold: 0.12,
      }
    );

    elements.forEach((element) => {
      if (!element.classList.contains('protocol-animate--in')) {
        observer.observe(element);
      }
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initProtocolAnimations);
  } else {
    initProtocolAnimations();
  }

  document.addEventListener('shopify:section:load', initProtocolAnimations);
})();
