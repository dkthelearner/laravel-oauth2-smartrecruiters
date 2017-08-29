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
      | Please register your application as an SmartRecruiters Client here:
      | https://developers.smartrecruiters.io/candidate-ingestion.html#authentication
      |
      |
      | After registering, either update the values directly in
      | `config/smartrecruiters.php` or add them as the following environment
      | variables to your local `.env` file.
      |
      | * SMARTRECRUITERS_CLIENT_ID
      | * SMARTRECRUITERS_CLIENT_SECRET
      | * SMARTRECRUITERS_REDIRECT_URI
      |
     */
    'clientId'     => env('SMARTRECRUITERS_CLIENT_ID'),
    'clientSecret' => env('SMARTRECRUITERS_CLIENT_SECRET'),
    'redirectUri'  => env('SMARTRECRUITERS_REDIRECT_URI'),
];
