$(document).ready(function(){
$('#subject').change(function(){

var val =$("#subject :selected").val();

if(val === 'Other'){
      $('#Other').show() && 
      $('#count-subject').show();
}
else{
     $('#Other').hide() && 
      $('#count-subject').hide();

		}
	})
});