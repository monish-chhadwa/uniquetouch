/**
 * Created by monish.c on 12/07/19.
 * Assumes jquery to be present on the page
 * Reference: https://code.tutsplus.com/tutorials/submit-a-form-without-page-refresh-using-jquery--net-59
 */
$(function () {
    $('.error').hide();//Hide any previously loaded errors on page load
    $("#contactSubmit").click(function () {
        // validate and process form here

        $('.error').hide();//Hide any loaded errors on previous submit
        var validations = [
                {
                    elemSelector: "input[name=name]",
                    errElemSelector: "label#name_error"
                },
                {
                    elemSelector: "input[name=email]",
                    errElemSelector: "label#email_error"
                },
                {
                    elemSelector: "input[name=subject]",
                    errElemSelector: "label#subject_error"
                },
                {
                    elemSelector: "textarea[name=message]",
                    errElemSelector: "label#message_error"
                }
            ],
            focusDone = false,
            validation = true,
            dataString = '';
        for (var i = 0; i < validations.length; i++) {
            var currValidation = validations[i],
                elementInCheck = $(currValidation.elemSelector),
                elementValue = elementInCheck.val();
            if (elementValue == "") {//Todo-m: Support validation functions and more validations
                $(currValidation.errElemSelector).show();
                if (!focusDone) {//To focus the first element with error
                    elementInCheck.focus();
                }
                focusDone = true;
                validation = false;//Set it to false even if one validation fails but let all validations take place so as to show errors
            } else {
                dataString += elementInCheck.attr('name') + '=' + elementInCheck.val() + '&';
            }
        }

        if (validation === false) {
            return false;//Return false says page shouldn't reload
        }
        //If all validations pass, send ajax request to server
        // var dataString = 'name='+ name + '&email=' + email + '&phone=' + phone;
        //alert (dataString);return false;
        $.ajax({
            type: "POST",
            url: "service/sendmail-oauth.php",
            data: dataString,
            success: function() {
                //Todo-m: Show loading bar in contact us form
                $("#contactSuccess").modal();
            }
        });
        return false;
    });
});