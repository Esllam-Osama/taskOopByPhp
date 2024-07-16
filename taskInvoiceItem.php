<?php
class invoiceItem
{
  protected int $id;
  protected string $desc;
  protected int $qty;
  protected float $unitPrice;
  public function __construct(int $id, string $desc, int $qty, float $unitPrice)
  {
    $this->id = $id;
    $this->desc = $desc;
    $this->qty = $qty;
    $this->unitPrice = $unitPrice;
  }
  public function getId(): int
  {
    return $this->id;
  }
  public function getDesc(): string
  {
    return $this->desc;
  }
  public function getQty(): int
  {
    return $this->qty;
  }
  public function setQty(int $qty): void
  {
    $this->qty = $qty;
  }
  public function getUnitPrice(): float
  {
    return $this->unitPrice;
  }
  public function setUnitPrice(float $unitPrice): void
  {
    $this->unitPrice = $unitPrice;
  }
  public function getTotal(): float
  {
    return $this->qty * $this->unitPrice;
  }
  public function toString(): string
  {
    return "id is: {$this->id}<br>desc is: {$this->desc}<br>qty is: {$this->qty}<br>unit price is: {$this->unitPrice}<br>total is: " . $this->getTotal();
  }
}
?>