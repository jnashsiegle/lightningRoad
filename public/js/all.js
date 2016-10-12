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


/*jslint browser: true*/

   
   var animationName = "animated bounceInDown";
   var animationEnd = "webkitAnimationEnd mozAnimatinEnd MsAnimationEnd oanimationend animationend";
           $('#arrow').addClass(animationName).one(animationEnd,
             function() {
               $(this).removeClass(animationName);
             });
       


}); //end of first document.

$(document).ready(function(){

    loadGallery(true, 'a.gImage');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }
});
//# sourceMappingURL=all.js.map
