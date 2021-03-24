(function($) {
    $(function() {
      $('nav ul li > a:not(:only-child)').click(function(e) {
        $(this).siblings('.nav-dropdown').toggle();
        $('.nav-dropdown').not($(this).siblings()).hide();
        e.stopPropagation();
      });
      $('html').click(function() {
        $('.nav-dropdown').hide();
      });
    });
    document.querySelector('#nav-mobile').addEventListener('click', function() {
      this.classList.toggle('active');
    });
    $('#nav-mobile').click(function() {
      $('nav ul').toggle();
    })(jQuery);
