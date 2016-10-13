/*google analytics tracking  */
   
 /* (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83128316-1', 'auto');
  ga('require', 'linkid');
  ga('send', 'pageview');*/

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-83128316-1', 'auto');
ga('send', 'pageview');

/* End Google Analytics */
  //hide and show text field and character count
// dependant on what is selected in the subject.

$(document).ready(function(){

//Subject Other Hide & Show

$('#subject').change(function(){

var val =$("#subject :selected").val();

if(val === 'Other'){
      $('#customOther').show() && 
      $('#count-subject').show() &&
      $('#charCount').show();
}
else{
     $('#customOther').hide() && 
      $('#count-subject').hide() &&
      $('#charCount').hide();

		}
	})

// Fade in & out of messages

	$(".alert").fadeIn().delay(5000).fadeOut();
	 
	//Count characters in optional subject field
  
  $('#customOther').keyup(function() {
    var max = 50;
    var len = $(this).val().length;
    if (len >= max) {
        $('#charCount').text(' you have reached the limit');
    } else {
        var char = max - len;
        $('#charCount').text(char + ' characters left');
    }
  });

}); //end of first document.
