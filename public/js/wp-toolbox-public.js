(function($) {
    'use strict';

    $(function() {
        $('form').on('submit', function(e, data) {
            var input = $("#testData");
            e.preventDefault();
            $.ajax({
                url: wpApiSettings.root + 'api/',
                method: 'POST',
                beforeSend: function(xhr) {
                    /* The function that set the nonce */
                    xhr.setRequestHeader('X-WP-Nonce', wpApiSettings.nonce); /* The XMLHttpRequest.setRequestHeader() method sets the value of an HTTP request header. */
                },
                data: {
                    'user_id': data.userId,
                    'test_data': data.testData,
                }
            }).done(function(response) {
                if (response.message == 'Added Data') {
                    //Add response handling
                }
                // console.log(response);
            });

        });
    });

})(jQuery);