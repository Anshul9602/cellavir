(function () {
  if (!document.body.classList.contains('protocol-peptides-theme')) return;

  const FAQ_PATH = /\/pages\/(?:faq|faqs)\b/i;

  function isFaqPage() {
    return FAQ_PATH.test(window.location.pathname) || document.body.classList.contains('template-page-faq');
  }

  function isHeading(node) {
    if (node.nodeType !== 1) return false;
    return /^H[2-4]$/.test(node.tagName);
  }

  function isDivider(node) {
    if (node.nodeType !== 1) return false;
    return node.tagName === 'HR';
  }

  function getQuestionText(heading) {
    return heading.textContent.replace(/\s+/g, ' ').trim();
  }

  function createFaqItem(question, contentNodes) {
    const details = document.createElement('details');
    details.className = 'protocol-faq__item';

    const summary = document.createElement('summary');
    summary.className = 'protocol-faq__question';
    summary.innerHTML =
      '<span class="protocol-faq__question-text"></span>' +
      '<span class="protocol-faq__icon">' +
      '<i data-lucide="chevron-down" class="cv-lucide cv-lucide--chevron" aria-hidden="true"></i>' +
      '</span>';

    summary.querySelector('.protocol-faq__question-text').textContent = question;

    const answer = document.createElement('div');
    answer.className = 'protocol-faq__answer rte';
    contentNodes.forEach((node) => answer.appendChild(node));

    details.append(summary, answer);
    return details;
  }

  function convertStaticContent(container) {
    if (!container || container.dataset.protocolFaqReady === 'true') return;

    const root = container.querySelector('rte-formatter') || container;
    const nodes = Array.from(root.childNodes).filter((node) => {
      if (node.nodeType === 3) return node.textContent.trim().length > 0;
      if (node.nodeType !== 1) return false;
      if (isDivider(node)) return false;
      return true;
    });

    const groups = [];
    let current = null;

    nodes.forEach((node) => {
      if (isHeading(node)) {
        current = {
          question: getQuestionText(node),
          nodes: [],
        };
        groups.push(current);
        return;
      }

      if (!current) return;
      current.nodes.push(node);
    });

    if (groups.length === 0) return;

    const accordion = document.createElement('div');
    accordion.className = 'protocol-faq__accordion protocol-faq__accordion--converted';

    groups.forEach((group) => {
      if (!group.question) return;
      accordion.appendChild(createFaqItem(group.question, group.nodes));
    });

    root.replaceChildren(accordion);
    container.dataset.protocolFaqReady = 'true';
  }

  function bindExclusiveAccordion() {
    document.querySelectorAll('.protocol-faq__accordion').forEach((accordion) => {
      accordion.querySelectorAll('.protocol-faq__item').forEach((item) => {
        if (item.dataset.protocolFaqBound === 'true') return;
        item.dataset.protocolFaqBound = 'true';

        item.addEventListener('toggle', () => {
          if (!item.open) return;
          accordion.querySelectorAll('.protocol-faq__item').forEach((other) => {
            if (other !== item) other.open = false;
          });
        });
      });
    });
  }

  function initProtocolFaq() {
    if (!isFaqPage()) return;

    document.body.classList.add('protocol-faq-page');

    if (!document.querySelector('.protocol-faq__accordion:not(.protocol-faq__accordion--converted)')) {
      document.querySelectorAll('.page-content, .protocol-page-content__body').forEach(convertStaticContent);
    }

    bindExclusiveAccordion();

    if (window.lucide && typeof window.lucide.createIcons === 'function') {
      window.lucide.createIcons();
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initProtocolFaq);
  } else {
    initProtocolFaq();
  }

  document.addEventListener('shopify:section:load', initProtocolFaq);
})();
