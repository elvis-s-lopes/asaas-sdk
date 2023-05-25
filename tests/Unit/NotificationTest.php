<?php

namespace Lopes\Test\Unit;

use Lopes\Asaas\Facade\Asaas;
use Lopes\Test\TestCase;

class NotificationTest extends TestCase
{
     public function testUpdateNotification()
    {
        $values = [];

        $result = Asaas::notification()->update('1', $values);

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
