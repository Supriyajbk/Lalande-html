$(document).ready(function () {
    const $faqMain = $('.faq-main');
    const accordionShow = function (main) {
      const $link = main.find('.faq-btn-link');
      const $list = main.find('.accordion-list');
      const totalList = $list.length;
      if (!$link.length) return;
      let currentIndex = 12;
      $link.on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('open');
        let nextIndex = Math.min(currentIndex + 12, totalList);
        for (let i = currentIndex; i < nextIndex; i++) {
          $list.eq(i).css('display', 'block');
        }
        currentIndex = nextIndex;
        if (currentIndex >= totalList) {
          $link.css('display', 'none');
          return false;
        }
      });
    };
    if ($faqMain.length) {
      accordionShow($faqMain);
    }
  });