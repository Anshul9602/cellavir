(function () {
  if (!document.body.classList.contains('protocol-peptides-theme')) return;

  function initContactPage(section) {
    const tabs = section.querySelectorAll('[data-protocol-contact-tab]');
    const panels = section.querySelectorAll('[data-protocol-contact-panel]');
    const subjectInput = section.querySelector('[data-protocol-contact-subject]');
    const useButtons = section.querySelectorAll('[data-protocol-contact-use]');

    if (!tabs.length || !panels.length) return;

    function activateTab(tab) {
      const panelId = tab.getAttribute('aria-controls');

      tabs.forEach((item) => {
        const isActive = item === tab;
        item.classList.toggle('is-active', isActive);
        item.setAttribute('aria-selected', isActive ? 'true' : 'false');
      });

      panels.forEach((panel) => {
        const isActive = panel.id === panelId;
        panel.classList.toggle('is-active', isActive);
        panel.hidden = !isActive;
      });
    }

    tabs.forEach((tab) => {
      tab.addEventListener('click', () => {
        activateTab(tab);
        if (subjectInput && tab.dataset.subject) {
          subjectInput.value = tab.dataset.subject;
          subjectInput.classList.add('is-highlighted');
          window.setTimeout(() => subjectInput.classList.remove('is-highlighted'), 700);
        }
      });
    });

    useButtons.forEach((button) => {
      button.addEventListener('click', () => {
        const subject = button.dataset.subject;
        const tab = Array.from(tabs).find((item) => item.dataset.subject === subject);

        if (tab) activateTab(tab);
        if (subjectInput && subject) {
          subjectInput.value = subject;
          subjectInput.classList.add('is-highlighted');
          window.setTimeout(() => subjectInput.classList.remove('is-highlighted'), 700);
          subjectInput.focus();
          subjectInput.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
      });
    });
  }

  function initAllContactPages() {
    document.querySelectorAll('[data-protocol-contact]').forEach((section) => {
      document.body.classList.add('protocol-contact-page');
      initContactPage(section);
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initAllContactPages);
  } else {
    initAllContactPages();
  }

  document.addEventListener('shopify:section:load', (event) => {
    const section = event.target.querySelector('[data-protocol-contact]');
    if (section) initContactPage(section);
  });
})();
