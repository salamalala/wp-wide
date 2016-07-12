var emptyPTag = function() {
  $('p:empty').remove();
};

// with scrollMagic library define the place where animation has to be triggered and add class there
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
  sectionAnimationTriggered();

});
