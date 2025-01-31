<?php

add_action('woocommerce_before_checkout_billing_form', 'custom_pickup_fields');
function custom_pickup_fields($checkout) { ?>
	<div id="custom_pickup_fields">
		<p class="form-row validate-required" id="billing_pickup_time_field">
			<label for="billing_pickup_time" class="">Pickup Time&nbsp;<abbr class="required" title="required">*</abbr></label>
			<span class="woocommerce-input-wrapper">
				<select name="billing_pickup_time" id="billing_pickup_time" class="pickup-option-class form-row-wide" data-allow_clear="true" data-placeholder="Select an option">
					<option value="9:00 AM - 12:00 PM">9:00 AM - 12:00 PM</option>
					<option value="12:00 PM - 3:00 PM">12:00 PM - 3:00 PM</option>
					<option value="3:00 PM - 6:00 PM">3:00 PM - 6:00 PM</option>
				</select>
			</span>
		</p>

		<p class="form-row validate-required" id="billing_pickup_option_field">
			<label for="billing_pickup_option" class="">Pickup Option&nbsp;<abbr class="required" title="required">*</abbr></label>
			<span class="woocommerce-input-wrapper">
				<select name="billing_pickup_option" id="billing_pickup_option" class="pickup-option-class form-row-wide" data-allow_clear="true" data-placeholder="Select an option" required>
					<option value="">Select an option</option>
					<option value="deliver_home">Deliver Home</option>
					<option value="deliver_ups_point">Deliver UPS Points</option>
				</select>
			</span>
		</p>

		<p class="form-row validate-required" id="billing_ups_pickup_point_field" style="display: none;">
			<label for="billing_ups_pickup_point" class="">Select UPS Point&nbsp;<abbr class="required" title="required">*</abbr></label>
			<span class="woocommerce-input-wrapper">
				<select name="billing_ups_pickup_point" id="billing_ups_pickup_point" class="ups-points-class form-row-wide" data-allow_clear="true" data-placeholder="Select an option">
					<option value="">Select UPS Point</option>
					<option value="UPS Point 1">UPS Point 1</option>
					<option value="UPS Point 2">UPS Point 2</option>
					<option value="UPS Point 3">UPS Point 3</option>
				</select>
			</span>
		</p>


	</div>
<?php }
?>