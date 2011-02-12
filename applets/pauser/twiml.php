<?php

$response = new Response();

// Default Settings
define('PAUSER_DEFAULT_PAUSE_TIME', 1);

// Configs
$pause_time = (int) AppletInstance::getValue('pause-time', PAUSER_DEFAULT_PAUSE_TIME);
$next_step  = AppletInstance::getDropZoneUrl('next-step');

// Sanitize
if($pause_time <= 0) {
    $pause_time = PAUSER_DEFAULT_PAUSE_TIME;
}

// Flow
$response->addPause(array('length' => $pause_time));

if(!empty($next_step)) {
    $response->addRedirect($next_step);
} else {
    $response->addHangup();
}

$response->Respond();
