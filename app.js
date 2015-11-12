jQuery(document).ready(function($) {
    var data = {
        'action': 'aliqtisadi_ajax',
    };
    // We can also pass the url value separately from ajaxurl for front end AJAX implementations
    jQuery.post(ourData.ajaxurl, data, function(response) {
        console.log(jQuery.parseJSON(response));
    });
});
