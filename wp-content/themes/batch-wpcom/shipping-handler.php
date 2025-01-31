<?php
// Previeni l'accesso diretto al file
if (!defined('ABSPATH')) {
    exit;
}

// Valida i campi del form
add_action('woocommerce_checkout_process', 'validate_shipping_address_fields');
function validate_shipping_address_fields() {
    // Campi obbligatori per l'indirizzo di partenza
    $pickup_required = array(
        'pickup_first_name' => 'Nome mittente',
        'pickup_last_name'  => 'Cognome mittente',
        'pickup_address_1'  => 'Indirizzo di partenza',
        'pickup_city'       => 'Città di partenza',
        'pickup_postcode'   => 'CAP di partenza'
    );

    // Campi obbligatori per l'indirizzo di destinazione
    $destination_required = array(
        'destination_first_name' => 'Nome destinatario',
        'destination_last_name'  => 'Cognome destinatario',
        'destination_address_1'  => 'Indirizzo di destinazione',
        'destination_city'       => 'Città di destinazione',
        'destination_postcode'   => 'CAP di destinazione'
    );

    // Verifica che i campi obbligatori siano compilati
    foreach ($pickup_required as $field => $label) {
        if (empty($_POST[$field])) {
            wc_add_notice(sprintf('Il campo %s è obbligatorio.', $label), 'error');
        }
    }

    foreach ($destination_required as $field => $label) {
        if (empty($_POST[$field])) {
            wc_add_notice(sprintf('Il campo %s è obbligatorio.', $label), 'error');
        }
    }
}

// Salva i dati degli indirizzi nell'ordine
add_action('woocommerce_checkout_create_order', 'save_shipping_address_fields', 10, 2);
function save_shipping_address_fields($order, $data) {
    // Campi dell'indirizzo di partenza
    $pickup_fields = array(
        'pickup_first_name',
        'pickup_last_name',
        'pickup_company',
        'pickup_address_1',
        'pickup_city',
        'pickup_postcode'
    );

    // Campi dell'indirizzo di destinazione
    $destination_fields = array(
        'destination_first_name',
        'destination_last_name',
        'destination_company',
        'destination_address_1',
        'destination_city',
        'destination_postcode'
    );

    // Salva i dati di partenza
    foreach ($pickup_fields as $field) {
        if (!empty($_POST[$field])) {
            $order->update_meta_data('_' . $field, sanitize_text_field($_POST[$field]));
        }
    }

    // Salva i dati di destinazione
    foreach ($destination_fields as $field) {
        if (!empty($_POST[$field])) {
            $order->update_meta_data('_' . $field, sanitize_text_field($_POST[$field]));
        }
    }
}

// Aggiungi gli indirizzi alle email
add_action('woocommerce_email_after_order_table', 'add_shipping_addresses_to_emails', 10, 4);
function add_shipping_addresses_to_emails($order, $sent_to_admin, $plain_text, $email) {
    if ($plain_text) {
        echo "\n=== Indirizzo di Partenza ===\n";
        echo "Nome: " . $order->get_meta('_pickup_first_name') . " " . $order->get_meta('_pickup_last_name') . "\n";
        if ($order->get_meta('_pickup_company')) {
            echo "Azienda: " . $order->get_meta('_pickup_company') . "\n";
        }
        echo "Indirizzo: " . $order->get_meta('_pickup_address_1') . "\n";
        echo "Città: " . $order->get_meta('_pickup_city') . "\n";
        echo "CAP: " . $order->get_meta('_pickup_postcode') . "\n";

        echo "\n=== Indirizzo di Destinazione ===\n";
        echo "Nome: " . $order->get_meta('_destination_first_name') . " " . $order->get_meta('_destination_last_name') . "\n";
        if ($order->get_meta('_destination_company')) {
            echo "Azienda: " . $order->get_meta('_destination_company') . "\n";
        }
        echo "Indirizzo: " . $order->get_meta('_destination_address_1') . "\n";
        echo "Città: " . $order->get_meta('_destination_city') . "\n";
        echo "CAP: " . $order->get_meta('_destination_postcode') . "\n";
    } else {
        ?>
        <h2>Indirizzo di Partenza</h2>
        <p>
            <strong>Nome:</strong> <?php echo esc_html($order->get_meta('_pickup_first_name') . " " . $order->get_meta('_pickup_last_name')); ?><br>
            <?php if ($order->get_meta('_pickup_company')): ?>
                <strong>Azienda:</strong> <?php echo esc_html($order->get_meta('_pickup_company')); ?><br>
            <?php endif; ?>
            <strong>Indirizzo:</strong> <?php echo esc_html($order->get_meta('_pickup_address_1')); ?><br>
            <strong>Città:</strong> <?php echo esc_html($order->get_meta('_pickup_city')); ?><br>
            <strong>CAP:</strong> <?php echo esc_html($order->get_meta('_pickup_postcode')); ?>
        </p>

        <h2>Indirizzo di Destinazione</h2>
        <p>
            <strong>Nome:</strong> <?php echo esc_html($order->get_meta('_destination_first_name') . " " . $order->get_meta('_destination_last_name')); ?><br>
            <?php if ($order->get_meta('_destination_company')): ?>
                <strong>Azienda:</strong> <?php echo esc_html($order->get_meta('_destination_company')); ?><br>
            <?php endif; ?>
            <strong>Indirizzo:</strong> <?php echo esc_html($order->get_meta('_destination_address_1')); ?><br>
            <strong>Città:</strong> <?php echo esc_html($order->get_meta('_destination_city')); ?><br>
            <strong>CAP:</strong> <?php echo esc_html($order->get_meta('_destination_postcode')); ?>
        </p>
        <?php
    }
}

// Aggiungi gli indirizzi al pannello amministrativo
add_action('woocommerce_admin_order_data_after_shipping_address', 'show_shipping_addresses_in_admin');
function show_shipping_addresses_in_admin($order) {
    echo '<h3>Indirizzo di Partenza</h3>';
    echo '<p>';
    echo '<strong>Nome:</strong> ' . esc_html($order->get_meta('_pickup_first_name') . ' ' . $order->get_meta('_pickup_last_name')) . '<br>';
    if ($order->get_meta('_pickup_company')) {
        echo '<strong>Azienda:</strong> ' . esc_html($order->get_meta('_pickup_company')) . '<br>';
    }
    echo '<strong>Indirizzo:</strong> ' . esc_html($order->get_meta('_pickup_address_1')) . '<br>';
    echo '<strong>Città:</strong> ' . esc_html($order->get_meta('_pickup_city')) . '<br>';
    echo '<strong>CAP:</strong> ' . esc_html($order->get_meta('_pickup_postcode'));
    echo '</p>';

    echo '<h3>Indirizzo di Destinazione</h3>';
    echo '<p>';
    echo '<strong>Nome:</strong> ' . esc_html($order->get_meta('_destination_first_name') . ' ' . $order->get_meta('_destination_last_name')) . '<br>';
    if ($order->get_meta('_destination_company')) {
        echo '<strong>Azienda:</strong> ' . esc_html($order->get_meta('_destination_company')) . '<br>';
    }
    echo '<strong>Indirizzo:</strong> ' . esc_html($order->get_meta('_destination_address_1')) . '<br>';
    echo '<strong>Città:</strong> ' . esc_html($order->get_meta('_destination_city')) . '<br>';
    echo '<strong>CAP:</strong> ' . esc_html($order->get_meta('_destination_postcode'));
    echo '</p>';
}