// ABOUT/TABS
$('.tab-button').click(function() {
    var index = $(this).index();
    $('.tab-button--active').removeClass('tab-button--active');
    $('.tab-content--active').removeClass('tab-content--active');
    $('.tab-content').eq(index).addClass('tab-content--active');
    $(this).addClass('tab-button--active');
})

// SKILLS
$(document).ready(function() {
  $('.progress .progress-bar').css("width",
                                   function() {
    return $(this).attr("aria-valuenow") + "%";
  }
 )
});


// SMOOTH SCROLL NAVIGATION
$('nav a[data-target]').on('click', function(event) {
    var target = $(event.currentTarget).attr('data-target');
    console.log('Menüpunkt wurde in der Navigation angeklickt');

    //go to the section
    var scroll_to = $('[name="' + target + '"]').offset().top;

    //smoothscroll for whole site
    $('html, body').animate({
        scrollTop: scroll_to
    }, 1000);

 });


// BACK TO TOP
$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#toTop').fadeIn();
    } else {
        $('#toTop').fadeOut();
    }
});

$("#toTop").click(function () {
   $("html, body").animate({scrollTop: 0}, 1000);
   console.log('Back-To-Top');
});
