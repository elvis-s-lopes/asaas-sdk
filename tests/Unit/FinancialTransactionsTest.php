<?php

namespace Lopes\Test\Unit;

use Exception;
use Lopes\Asaas\Facade\Asaas;
use Lopes\Test\TestCase;

class FinancialTransactionsTest extends TestCase
{
    public function testFindFinancialTransactions()
    {
        $this->expectException(Exception::class); //api fault

        $result = Asaas::financialTransactions()->find();
    }
}
