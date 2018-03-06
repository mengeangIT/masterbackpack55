$(function () {

    $('[name="request_type"]').on('change',function () {
        hideChangeRequestType();
    });

});

function hideChangeRequestType() {
    var v = $('[name="request_type"]').val();

    $('[new="new"],[more="more"]').each(function () {
        $(this).closest('.form-group').hide();
    });

    if(v=='use new electricity' ){
        $('[new="new"]').each(function () {
            $(this).closest('.form-group').show();
        });
    }else if(v == 'change electricity power') {
        $('[more="more"]').each(function () {
            $(this).closest('.form-group').show();
        });
    }
}