var emptyPTag = function() {
  $('p:empty').remove();

  if ($('p:empty')) {
    console.log("this is empty");
  }
};

$(function() {

  emptyPTag();

});
