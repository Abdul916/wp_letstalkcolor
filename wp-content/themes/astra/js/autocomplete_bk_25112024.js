console.log('file is working...');
jQuery(window).on('load', function($) {
    // jQuery('#billing_address_1').on('input', function() {
    //     console.log('Key up triggered!');
    //     var input = document.getElementById('billing_address_1');
    //     if (input) {
    //         var options = {
    //             types: ['geocode'],
    //         };
    //         var autocomplete = new google.maps.places.Autocomplete(input, options);
    //         google.maps.event.addListener(autocomplete, 'place_changed', function() {
    //             var place = autocomplete.getPlace();
    //             var components = place.address_components;
    //             console.log('components')
    //             console.log(components)
    //             components.forEach(function(component) {
    //                 if (component.types.includes("locality")) {
    //                     jQuery('#billing_city').val(component.long_name);
    //                     console.log("city " + jQuery('#billing_city').val());
    //                 }
    //                 if (component.types.includes("postal_code")) {
    //                     jQuery('#billing_postcode').val(component.long_name);
    //                     console.log("zipcode " + component.long_name);
    //                 }else{
    //                     jQuery('#billing_postcode').val('');
    //                 }
    //                 if (component.types.includes("neighborhood")) {
    //                     jQuery('#billing_address_1').val(component.long_name);
    //                     console.log("address " + component.long_name);
    //                 }else if (component.types.includes("route")) {
    //                     jQuery('#billing_address_1').val(component.long_name);
    //                     console.log("address " + component.long_name);
    //                 }
    //             });
    //             jQuery('body').trigger('update_checkout');
    //         });
    //     } else {
    //         console.log('Input element not found.');
    //     }
    // });

    jQuery(function($) {
        jQuery('form.checkout').on('change', 'input[name="payment_method"]', function() {
            jQuery('body').trigger('update_checkout');
        });
    });
});