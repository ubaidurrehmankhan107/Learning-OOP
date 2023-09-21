<?php 
    
class BankAccount{
    private $balance = 0;

    public function deposit($amount){
        if($amount > 0) {
            $this->balance += $amount;
        }
    }
    public function getBalance(){
        return $this->balance;
    }
}
   

$account = new BankAccount();

$account = new BankAccount();

$account->deposit(100);

echo $account->balance;


?> 

