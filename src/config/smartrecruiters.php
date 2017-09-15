<?php

return [
    /*
      |--------------------------------------------------------------------------
      | SmartRecruiters Client Details
      |--------------------------------------------------------------------------
      |
      | When you run `artisan vendor:publish`, this config file will be copied
      | to `config/smartrecruiters.php`.
      |
      | After registering, either update the values directly in
      | `config/smartrecruiters.php` or add them as the following environment
      | variables to your local `.env` file.
      |
      | * SMARTRECRUITER_CLIENT_ID
      | * SMARTRECRUITER_CLIENT_SECRET
      | * SMARTRECRUITER_REDIRECT_URI
      |
     */
    'clientId'     => env('SMARTRECRUITER_CLIENT_ID'),
    'clientSecret' => env('SMARTRECRUITER_CLIENT_SECRET'),
    'redirectUri'  => env('SMARTRECRUITER_REDIRECT_URI'),
];
