
jQuery($ => {

  console.log('Page loaded with template ' + $('body').data('template') + '!');

  console.log(ajaxurl);

  $('.temoignage-ajax a').on('click', function (e) {
    e.preventDefault();
    var testimonial = $(this).parent();
    var postId = testimonial.data('id');

    testimonial.find('a').text('Chargement...');

    $.post(ajaxurl, {
      action: 'ajax-actionpost',
      postid: postId,
    }, function (response) {
      testimonial.empty().append(response);
    });

  });

});
