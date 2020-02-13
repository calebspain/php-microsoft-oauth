<?php

    $provider = new Stevenmaguire\OAuth2\Client\Provider\Microsoft([
        // Required
        'clientId'                  => '',
        'clientSecret'              => '',
        'redirectUri'               => 'https://localhost:8888/signin.php',
        // Optional
        'urlAuthorize'              => 'https://login.windows.net/common/oauth2/authorize',
        'urlAccessToken'            => 'https://login.windows.net/common/oauth2/token',
        'urlResourceOwnerDetails'   => 'https://outlook.office.com/api/v1.0/me'
    ]);

    $authUrl = $provider->getAuthorizationUrl();

    echo "<p>Auth URL: $authUrl</p>";
?>