console.log('file is working...');
jQuery(window).on('load', function($) {
    jQuery(function($) {
        jQuery('form.checkout').on('change', 'input[name="payment_method"]', function() {
            jQuery('body').trigger('update_checkout');
        });
    });
    jQuery(function($) {
        $('#billing_area_dropdown').on('change', function () {
            var selectedArea = $(this).val();
            $.ajax({
                url: wc_checkout_params.ajax_url,
                type: 'POST',
                data: {
                    action: 'update_travel_fee',
                    selected_area: selectedArea,
                },
                success: function (response) {
                    if (response.success) {
                        console.log(response.data.message);
                        setTimeout(function() {
                            jQuery(document.body).trigger('update_checkout');
                        }, 100);
                    }
                }
            });
        });
    });
});
