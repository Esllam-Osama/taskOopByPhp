<?php
class person{
  protected string $name;
  protected string $address;
  public function __construct(string $name , string $address){
    $this->name=$name;
    $this->address=$address;
  }
  public function getName():void{
    echo ($this->name);
  }
  public function getAddress():void{
    echo ($this->address);
  }
  public function setAddress(string $address):void{
    $this->address=$address;
  }
  public function toString():string{
    return "the name is: {$this->name} </br> the address is: {$this->address}";
  }
}
class student extends person{
  protected string $program;
  protected int $year;
  protected float $fee;
  public function __construct(string $name , string $address , string $program , int $year , float $fee){
    parent::__construct($name , $address);
    $this->program=$program;
    $this->year=$year;
    $this->fee=$fee;
  }
  public function getProgram():string{
    return "the program is: {$this->program}";
  }
  public function setProgram($program):void{
    $this->program=$program;
  }
  public function getYear():string{
    return "the Year is {$this->year}";
  }
  public function setYear($year):void{
    $this->year=$year;
  }
  public function getFee():string{
    return "the fee is: {$this->fee}";
  }
  public function setFee($fee):void{
    $this->fee=$fee;
  }
  public function toString():string{
    return parent::toString() . "</br> program is: {$this->program}</br> the year is: {$this->year}</br> the fee is: {$this->fee}";
  }
}
class staff extends person{
  protected string $school;
  protected float $pay;
  public function __construct(string $name , string $address, string $school , float $pay){
    parent::__construct($name,$address);
    $this->school=$school;
    $this->pay=$pay;
  }
  public function getSchool():string{
    return "the school is: {$this->school}";
  }
  public function setSchool($school):void{
    $this->school=$school;
  }
  public function getPay():string{
    return "the pay is: {$this->pay}";
  }
  public function setPay($pay):void{
    $this->pay=$pay;
  }
  public function toString():string{
    return parent::toString() . "</br>the school is: {$this->school} </br>the pay is: {$this->pay}";
  }
}

?>