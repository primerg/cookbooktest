$(document).ready(function(){

    $(".delete").click(function(e){
        var $el = $(this);
        e.preventDefault();
        var confirmText = $el.attr('data-submit-confirm-text');
        var result = confirm(confirmText);
        if (result) {
            $el.closest('form').trigger('submit');
        }
    });

});