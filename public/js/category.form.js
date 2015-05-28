$(document).ready(function(){

    $('form').submit(function(){
        var submit = true;
        $(this).find('.field.required').each(function(n, obj) {
            var val = $(obj).val().trim();
            if (val == '') {
                $('form').prepend('<div class="alert alert-danger"><strong>Whoops!</strong> Category is required!</div>')
                submit = false;
            }
        });

        return submit;
    });

});