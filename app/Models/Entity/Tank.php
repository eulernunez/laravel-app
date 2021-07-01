<?php
namespace App\Models\Entity;

class Tank
{

    private $maxCapacity = 100.0;      // 100
    private $currentCapacity = 40.0;   // 40

    public function setMaxCapacity(float $maxCapacity): void
    {
        $this->maxCapacity = $maxCapacity;
    }

    public function setCurrentCapacity(float $currentCapacity): void
    {
        $this->currentCapacity = $currentCapacity;
    }    

    public function fillInFull(): float
    {
        $filled = $this->maxCapacity - $this->currentCapacity;
        $this->currentCapacity = $this->maxCapacity;
        return $filled; 
    }

    public function fill(float $liters): float
    {

        
        if(($this->currentCapacity + $liters) >= $this->maxCapacity) {
            return $liters - $this->fillinFull();
        }
        $this->currentCapacity += $liters;
        return $this->currentCapacity - $this->maxCapacity;  // EUREKA change this line => retur n$liters
    }
   
    public function isFull(): bool
    {
        return $this->currentCapacity === $this->maxCapacity;
    }

}
