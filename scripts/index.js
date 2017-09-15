
// ABOUT/TABS
$('.tab-button').click(function() {
    var index = $(this).index();
    $('.tab-button--active').removeClass('tab-button--active');
    $('.tab-content--active').removeClass('tab-content--active');
    $('.tab-content').eq(index).addClass('tab-content--active');
    $(this).addClass('tab-button--active');
})










