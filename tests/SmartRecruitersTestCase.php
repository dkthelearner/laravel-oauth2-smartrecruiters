<?php 


namespace Krdinesh\Laravel\OAuth2\SmartRecruiters\Test;
 

use Orchestra\Testbench\TestCase; 
use Krdinesh\Laravel\OAuth2\SmartRecruiters\Facades\SmartRecruiters;
use Krdinesh\Laravel\OAuth2\SmartRecruiters\SmartRecruitersServiceProvider;

class SmartRecruitersTestCase extends TestCase 
{
    protected function getEnvironmentSetUp($app){
        // Setup default database to use sqlite :memory:
        $app['config']->set('smartrecruiters.clientId', 'XXXXXXXXX');
        $app['config']->set('smartrecruiters.clientSecret','XXXXXXXXXXX');
        $app['config']->set('smartrecruiters.redirectUri','XXXXXXXXXXXXXXXXXX');
    }
    protected function getPackageProviders($app) {
        return [
            SmartRecruitersServiceProvider::class,
        ]; 
    }
    protected function getPackageAliases($app)
    {
        return [
            'SmartRecruiters' => SmartRecruiters::class,
        ];
    }
}

