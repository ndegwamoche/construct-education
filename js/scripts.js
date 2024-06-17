//flkty slider settings

var jQuerycarousel = jQuery('.carousel').flickity({
    prevNextButtons: false,
    pageDots: false,
    imagesLoaded: true,
    cellAlign: 'left',
    contain: true,
    lazyLoad: false,
    preloadCount: 1,
});
// Flickity instance
var flkty = jQuerycarousel.data('flickity');

// elements
var jQuerycellButtonGroup = jQuery('.button-group--cells');
var jQuerycellButtons = jQuerycellButtonGroup.find('.button');

// update selected cellButtons
jQuerycarousel.on('select.flickity', function () {
    jQuerycellButtons.filter('.is-selected')
        .removeClass('is-selected');
    jQuerycellButtons.eq(flkty.selectedIndex)
        .addClass('is-selected');
});

// select cell on button click
jQuerycellButtonGroup.on('click', '.button', function () {
    var index = jQuery(this).index();
    jQuerycarousel.flickity('select', index);
});
// previous
jQuery('.button--previous').on('click', function () {
    jQuerycarousel.flickity('previous');
});
// next
jQuery('.button--next').on('click', function () {
    jQuerycarousel.flickity('next');
});


