//hide and show text field and character count
// dependant on what is selected in the subject.


$(document).ready(function(){
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


});