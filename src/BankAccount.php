<?php

class BankAccountHolder
{
    private $name;

    private $address;

    private function hasCorrectFormat($value)
    {
        if (is_string($value)) {
            return true;
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setName($name)
    {
        if ($this->hasCorrectFormat($name)) {
            $this->name = $name;
        }
    }

    public function setAddress($address)
    {
        if ($this->hasCorrectFormat($address)) {
            $this->address = $address;
        }
    }
}

class BankAccount
{
    private $balance = 0.00;

    public $accountHolder;

    public function __construct(BankAccountHolder $accountHolder, $name, $address)
    {
        $this->accountHolder = $accountHolder;
        $this->accountHolder->setName($name);
        $this->accountHolder->setAddress($address);
    }

    private function amountHasValidFormat($amount)
    {
        if (is_float($amount)) {
            return true;
        }
    }

    public function getBalance()
    {
        return $this->balance;
    }

    public function deposit($amount)
    {
        if ($this->amountHasValidFormat($amount)) {
            return $this->balance += $amount;
        }
    }

    public function withdraw($amount)
    {
        if ($this->amountHasValidFormat($amount) && $this->balance >= $amount) {
            return $this->balance -= $amount;
        }
    }
}

// $account = new BankAccount(new BankAccountHolder, 'Paul Bergmann', 'Waanderweg 152');
// $account->deposit(5.00);
// echo $account->withdraw(4.44);
// echo $account->accountHolder->getName();
