$(document).ready(function() {
    $.ajax({
        url: firstmodule_ajax_url,
        type: 'POST',
        dataType: 'json',
        data: {
            ajax: true
        },
        success: function(response) {
            if (response.success) {
                $('#ajaxx').text(response.data);
            } else {
                console.log('Błąd:', response.message);
            }
        },
        error: function() {
            console.error('ERROR: ', response.message);
        }
    });
}); 