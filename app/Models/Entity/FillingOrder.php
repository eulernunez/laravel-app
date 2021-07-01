<?php
namespace App\Models\Entity;

use App\Models\Entity\Tank;

class FillingOrder
{

    private $isFull;

    private $liters;
    
    private $litersLeft;

    public function __construct(bool $isFull, float $liters = 0.0)
    {
        if(!$isFull && $liters === 0.0) {
            throw new \DomainException("You must specify liters if this is not a full fill");
        }
        $this->isFull = $isFull;
        $this->liters = $liters;
        $this->litersLeft = 0.0;
    }

    public function getLitersLeft(): float
    {
        return $this->litersLeft;
    }

    public function fill(Tank $tank): void	
    {   
        if($this->isFull) {
            $tank->fillInFull();
            return;
        }
         
        $this->litersLeft = $tank->fill($this->liters);
        
    }

}  
