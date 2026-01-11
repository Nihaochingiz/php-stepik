<?php

class BankAccount {
    private string $owner;
    private float $balance = 0;

    public function __construct(string $owner, float $balance) {
        $this->owner = $owner;
        $this->balance = $balance;
        echo "Счёт владельца {$this->owner} открыт. Баланс: {$this->balance}.\n";
    }

    public function deposit(float $amount): void {
        $this->balance += $amount;
    }

    public function withdraw(float $amount): void {
        if ($this->balance < $amount) {
            return;
        }
        $this->balance -= $amount;
    }

    public function getBalance(): float {
        return $this->balance;
    }

    public function __destruct() { 
        echo "Счёт владельца {$this->owner} закрыт. Итоговый баланс: {$this->balance}.\n";
    }
}

$account1 = new BankAccount("Иван", 500);
$account1->deposit(300);
$account1->withdraw(200);
echo "Баланс Ивана: " . $account1->getBalance() . PHP_EOL;

$account2 = new BankAccount("Мария", 1000);
$account2->withdraw(400);
$account2->deposit(150);
echo "Баланс Марии: " . $account2->getBalance() . PHP_EOL;

unset($account1);
unset($account2);