<?php
class Account
{
  protected int $id;
  protected string $name;
  protected int $balance = 0;
  public function __construct(int $id, string $name, int $balance)
  {
    $this->id = $id;
    $this->name = $name;
    $this->balance = $balance;
  }
  public function getId(): int
  {
    return $this->id;
  }
  public function getName(): string
  {
    return $this->name;
  }
  public function getBalance(): int
  {
    return $this->balance;
  }
  public function credit(int $amount): int
  {
    return $this->balance + $amount;
  }
  public function debit(int $amount):int{
  if ($amount <= $this->balance){
    $this->balance-=$amount;
  }else{
      print ("the amount is largest than your balance");
  }
  return $this->balance;
  }
  public function transfeTo(string $anotherAccount, int $amount):int{
    if ($amount <= $this->balance) {
      $this->balance-=$amount;
    }else{
      print "Amount exceeded balance";
    }
    return $this->balance;
  }
  public function toString():string{
    return "id is: {$this->id}<br>name is: {$this->name}<br>balanse is: {$this->balance}";
  }
}
?>