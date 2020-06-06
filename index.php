

<?php


$query = 'Event';

    $contactData = array(
        'eventId'       =>   $event_id,-->(String)'salesforce id'
        'appFormId'     =>   $form_id, --> (String)'salesforce id'
        'contactId'     =>   $sfcontact,--> (String)'salesforce id'
        'appData'       =>   $args --> (Array) {'name':'danryl','lastname':'carpio'}
     );

    $sf_helpers = new Test_Helpers();
    $response = $sf_helpers->SF_CREATE($query, $contactData);


?>