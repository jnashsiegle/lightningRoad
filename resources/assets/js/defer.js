
  //hide and show text field and character count
// dependant on what is selected in the subject.

$(document).ready(function() {

    //Subject Other Hide & Show

    $('#subject').change(function() {

        var val = $("#subject :selected").val();

        if (val === 'Other') {
            $('#customOther').show() &&
                $('#count-subject').show() &&
                $('#charCount').show();
        } else {
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


    $('#userfile').on('change', function() {
        // output raw value of file input
        $('#userfilename').html($(this).val());

        // or, manipulate it further with regex etc.
        var userfilename = $(this).val();
        // .. do your magic

        $('#userfilename').html(userfilename);
    });




}); //end of first document.