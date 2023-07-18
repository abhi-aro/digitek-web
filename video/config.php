<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('713098661448-m5frmripv3r1qn0pmsvkbg25594a7j9d.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://www.digitekservice.com/');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>