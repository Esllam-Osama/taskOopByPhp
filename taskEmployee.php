<?php
class employee{
  protected int $id;
  protected string $firstName;
  protected string $lastName;
  protected int $sallery;
  public function __construct(int $id , string $firstName ,string $lastName,int $sallery){
    $this->id=$id;
    $this->firstName=$firstName;
    $this->lastName=$lastName;
    $this->sallery=$sallery;
  }
  public function getId():int{
    return $this->id;
  }
  public function getFirstName():string{
    return $this->firstName;
  }
  public function getLastName():string{
    return $this->lastName;
  }
  public function getName():string{
    return $this->getFirstName() ." " . $this->getLastName();
  }
  public function getSallery():int{
    return $this->sallery;
  }
  public function setSallery($sallery):void{
    $this->sallery=$sallery;
  }
  public function getSalleryInYear():int{
    return $this->sallery*12;
  }
  public function toString():string{
    return "id is: {$this->id}<br>name is: ". $this->getName() ."<br>sallery is: " . $this->getSallery();
  }
}
?>