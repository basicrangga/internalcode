<?php
namespace Tests\Unit;

use InternalCode\Math;
use Tests\TestBase;

class MathTest extends TestBase{


    public function testSum()
    {
        $result = Math::sum([1,2,3,4,5]);
        $this->assertSame(15,$result);
    }

}