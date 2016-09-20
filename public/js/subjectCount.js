
//**jslint browser: true*/
/*global $, jQuery, alert*/
/*$('#Other').on('input', function () { "use strict";
/*function updateCount() {
        var cs = $(this).val().length;
        $("#characters").text(cs);
    }
    );**//*/
/**/
   $('#Other').keyup(function () {
  var max = 50;
  var len = $(this).val().length;
  if (len >= max) {
    $('#charCount').text(' you have reached the limit');
  } else {
    var char = max - len;
    $('#charCount').text(char + ' characters left');
  }
});