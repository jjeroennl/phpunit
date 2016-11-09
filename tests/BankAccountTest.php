<?php
require_once '../src/BankAccount.php';

class BankAccountTest extends PHPUnit_Framework_TestCase
{
    private $bankAccount;

    public function __construct()
    {
        $this->bankAccount = new BankAccount(new BankAccountHolder, 'Paul Bergmann', 'Waanderweg 152');
    }

    public function testBalance()
    {
        // Vul de bankrekening met 100.00
        $this->bankAccount->deposit(100.00);
        // Haal er 50.00 vanaf
        $this->bankAccount->withdraw(50.00);

        // 100.00 - 50.00 = 50.00 - De uitkomst moet 50.00 zijn
        $this->assertEquals(50.00, $this->bankAccount->getBalance());
    }

    public function testName()
    {
        // De naam staat gelijk aan "Paul Bergmann"
        $this->assertEquals('Paul Bergmann', $this->bankAccount->accountHolder->getName());
    }
}
