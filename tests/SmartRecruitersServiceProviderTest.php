<?php

namespace Krdinesh\Laravel\OAuth2\SmartRecruiters\Test;

use Krdinesh\Laravel\OAuth2\SmartRecruiters\Test\SmartRecruitersTestCase;
use Krdinesh\OAuth2\Client\Provider\GreenHouse as KrSmartRecruiters;

class SmartRecruitersServiceProviderTest extends SmartRecruitersTestCase {

    public function testRegister(){
        $this->assertInstanceOf(KrSmartRecruiters::class,$this->app[KrSmartRecruiters::class]);
    }
}

