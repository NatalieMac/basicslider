jQuery(document).ready(function(){
  jsAvail();
  sliderInit();
  elastislideInit();
});

function sliderInit() {
  jQuery('ul.bjqs').hide();
  jQuery('#slideshow').bjqs({
    height      : 680,
    width       : 1024,
    responsive  : true
  });
}

function jsAvail() {
  jQuery('html').removeClass('no-js');
}

function elastislideInit() {
  jQuery('#carousel').elastislide();
}