<?php

namespace Krdinesh\Laravel\OAuth2\SmartRecruiters\Test\Facades;

use Krdinesh\Laravel\OAuth2\SmartRecruiters\Test\SmartRecruitersTestCase;
use Krdinesh\Laravel\OAuth2\SmartRecruiters\Facades\SmartRecruiters;
use Krdinesh\OAuth2\Client\Provider\GreenHouse as KrGreenhosue;

class SmartRecruitersFacadeTest extends SmartRecruitersTestCase {

    public function testGetFacadeAccessor(){
        $this->assertInstanceOf(KrGreenhosue::class, SmartRecruiters::getFacadeRoot());
    }
}