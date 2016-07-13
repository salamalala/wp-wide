var emptyPTag = function() {
  $('p:empty').remove();
};

var mobileMenu = function () {
  var menuToggle = $('#js-mobile-menu').unbind();
    $('#js-navigation-menu').removeClass("show");

  menuToggle.on('click', function(e) {
    e.preventDefault();
    $(this).toggleClass('close');
    $('#js-navigation-menu').toggle('slide',  function(){
      if($('#js-navigation-menu').is(':hidden')) {
        $('#js-navigation-menu').removeAttr('style');
      }
    });
  });
}

var sectionAnimationTriggered = function() {
	var controller = new ScrollMagic.Controller();

  //loop through each section and add animation class the nth-child, last child has to be done separately
  $(".news section").each(function(i) {
    var x = i++;

    if (i > 1 ) {
    new ScrollMagic.Scene({
      triggerElement: ".news section:nth-child("+ x +")",
      reverse:false
    })
				.setClassToggle(".news section:nth-child("+ x +")"
        , "news__item--animation") // add class toggle
				// .addIndicators()
				.addTo(controller);
    }
  });

  new ScrollMagic.Scene({
    triggerElement: ".news section:last-child",
    reverse:false
  })
    .setClassToggle(".news section:last-child"
    , "news__item--animation") // add class toggle
    // .addIndicators()
    .addTo(controller);
};

$(function() {

  emptyPTag();
  mobileMenu();
  sectionAnimationTriggered();

});
