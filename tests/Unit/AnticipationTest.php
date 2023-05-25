<?php

namespace Lopes\Test\Unit;

use Lopes\Asaas\Facade\Asaas as FacadeAsaas;
use Lopes\Test\TestCase;

class AnticipationTest extends TestCase
{
    public function testeCreateAnticipation()
    {
        $values = [];

        $result = FacadeAsaas::anticipation()->create($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testeSimulateAnticipation()
    {
        $values = [];

        $result = FacadeAsaas::anticipation()->simulate($values);

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAnticipationById()
    {
        $result = FacadeAsaas::anticipation()->find('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAnticipationByPaymentId()
    {
        $result = FacadeAsaas::anticipation()->findByPaymentId('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAnticipationByInstallmentId()
    {
        $result = FacadeAsaas::anticipation()->findByInstallmentId('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }

    public function testFindAnticipationByStatus()
    {
        $result = FacadeAsaas::anticipation()->findByStatus('1');

        $this->assertEquals($result->getStatusCode(), 200);
    }
}
