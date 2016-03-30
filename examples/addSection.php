<?php
/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */

// Include Composer autoloader class
include('vendor/autoload.php');

// Include credentials. Defines ONTRAPORT_APPID and ONTRAPORT_KEY
include('ontraport-credentials.php');

// Create new Ontraport object
$Ontraport = new \Ontraport\Ontraport(ONTRAPORT_APPID, ONTRAPORT_KEY);

// Add Section
$response = $Ontraport->addSection([
    'New Section Name' => [
        'Custom text field name'  => 'text',
        'Custom date field name'  => 'date',
        'Custom phone field name' => 'phone'
    ],
]);

// Display unformatted (XML) response
// echo $response;

// Debugging info
// var_dump($Ontraport->debug);

// Parse response
$op_contact = new SimpleXMLElement($response);

// Display response attributes
echo $op_contact->status . "\n";
echo $op_contact->contact['id'] . "\n";