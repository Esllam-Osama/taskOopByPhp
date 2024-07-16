<?php
abstract class shape{
  protected string $color="red";
  protected bool $filled=true;
  public function __construct(string $color = "", bool $filled)
  {
$this->color = $color;
$this->filled = $filled;
  }
  public function getColor(): string{
    return $this->color;
  }
  public function setColor(string $color): void
  {
    $this->color = $color;
  }
  public function isFilled( ): bool{
  return $this->filled;
  }
  public function setFilled(bool $filled): void{
    $this->filled = $filled;
  }
  public abstract function getArea(): float;
  public abstract function getPerimeter(): float;
  public function toString(): string
  {
    return "color is:" . $this->color."<br>the filled is: ".$this->filled;
  }
}
class circle extends shape
{
  protected float $radius;
  public function __construct(string $color , bool $filled,float $radius)
{
  $this->radius = $radius;
  parent::__construct($color, $filled);
}
public function getRadius() :float {
  return $this->radius;
}
public function setRadius(float $radius): void{
  $this->radius = $radius;
}
public function getArea(): float{
  return pow($this->radius,2)*M_PI;
}
public function getPerimeter() :float{
  return $this->radius*2*M_PI;
}
public function toString(): string{
    return parent::toString() . "<br>radius is: {$this->radius}";
}
}
class rectangle extends shape{
  protected float $width;
  protected float $lenght;
  public function __construct(string $color , bool $filled ,float $width,float $lenght){
    $this->width = $width;
    $this->lenght = $lenght;
    parent::__construct($color, $filled);
  }
  public function getWidth(): float
  {
  return $this->width;
  }
  public function setWidth(float $width): void{
    $this->width = $width;
  }
  public function getlenght(): float
  {
    return $this->lenght;
  }
  public function setlenght(float $lenght): void{
    $this->lenght = $lenght;
  }
  public function getArea(): float{
    return $this->lenght * $this->width;
  }
  public function getPerimeter(): float{
    return ($this->width + $this->lenght) * 2;
  }
  public function toString(): string
  {
    return parent::toString() . "<br>width is: {$this->width}<br>lenght is: {$this->lenght}";
  }
}
class square extends rectangle{
  public function __construct(string $color , bool $filled ,float $width,float $lenght){
    parent::__construct($color, $filled, $width, $lenght);
  }
  public function getSide():float{
    return $this->lenght;
  }
  public function setSide(float $side): void{
    $this->lenght = $side;
  }
  public function getWidth():float{
    return $this->width;
  }
  public function setWidth(float $width): void{
    $this->width = $width;
  }
  public function toString():string{
    return parent::toString();
  }
}
?>