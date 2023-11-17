<?php

return [
    'client_id' => env('CONNECTWISE_CLIENT_ID'),
    'company_id' => env('CONNECTWISE_COMPANY_ID'),
    'url' => env('CONNECTWISE_URL', 'https://api-na.myconnectwise.net'),
    'public_key' => env('CONNECTWISE_PUBLIC_KEY'),
    'private_key' => env('CONNECTWISE_PRIVATE_KEY'),
    'integrator_login' => env('CONNECTWISE_INTEGRATOR_LOGIN'),
    'integrator_password' => env('CONNECTWISE_INTEGRATOR_PASSWORD'),
];
