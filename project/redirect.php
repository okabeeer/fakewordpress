<?php

require __DIR__ . "/vendor/autoload.php";

$client = new Google\Client;

$client->setClientId("987309453270-5psup4obanoq707c75e637246vu62ig0.apps.googleusercontent.com");
$client->setClientSecret("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");
$client->setRedirectUri("http://localhost/redirect.php");

if (!isset($_GET['code'])) {
    exit("Login failed");
}

try {
    // Fetch the access token using the authorization code
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token["access_token"]);

    // Get user info
    $oauth = new Google\Service\Oauth2($client);
    $userinfo = $oauth->userinfo->get();

    // Extract user information
    $email = $userinfo->email;
    $familyName = $userinfo->familyName;
    $givenName = $userinfo->givenName;
    $name = $userinfo->name;

    // Check if user exists in the database
    $user = checkUserInDatabase($email); 

    // If the user does not exist, register them
    if (!$user) {
        registerNewUser($userinfo); 
    }

    // Start a session and store user email
    session_start();
    $_SESSION['user_email'] = $email;

    // Redirect to home page
    header("Location: home.php"); 
    exit();

} catch (Exception $e) {
    // Handle exceptions
    exit('Error: ' . $e->getMessage());
}

// Define these functions or include them from another file
function checkUserInDatabase($email) {
    // Implement your database check logic here
    // Return true if user exists, false otherwise
}

function registerNewUser($userinfo) {
    // Implement your user registration logic here
    // Use $userinfo to get the data you need
}
