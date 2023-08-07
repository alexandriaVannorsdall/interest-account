<?php

use PHPUnit\Framework\TestCase;
use InterestAccount\Statement;

class StatementTest extends TestCase
{
    public function testGetAmount(): void {
        $amount = 100;
        $transactions = [];
        $interestPayouts = [];

        $statement = new Statement($amount, $transactions, $interestPayouts);

        $this->assertEquals($amount, $statement->getAmount());
    }

    public function testGetTransactions(): void {
        $amount = 100;
        $transactions = [['type' => 'debit', 'amount' => 50]];
        $interestPayouts = [];

        $statement = new Statement($amount, $transactions, $interestPayouts);

        $this->assertEquals($transactions, $statement->getTransactions());
    }

    public function testGetInterestPayouts(): void {
        $amount = 100;
        $transactions = [];
        $interestPayouts = [['type' => 'credit', 'amount' => 20]];

        $statement = new Statement($amount, $transactions, $interestPayouts);

        $this->assertEquals($interestPayouts, $statement->getInterestPayouts());
    }
}
