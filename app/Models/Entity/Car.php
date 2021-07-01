<?php
namespace App\Models\Entity;

use App\Models\Entity\FillingOrder;
use App\Models\Entity\ChangeTankOrder;
use App\Models\Entity\Tank;

class Car
{

    /**
     * @var Tank
     */

    private $tank;

    // public function __construct(Tank $tank)   // EUREKA implementation new method construct
    // {
    //     $this->tank = $tank;
    // }

    public function fillTank(FillingOrder $fillingOrder): FillingOrder
    {   
        $this->tank = new Tank;
        $fillingOrder->fill($this->tank);
        return $fillingOrder;
    }

    public function changeTank(ChangeTankOrder $changeTankOrder, Mechanic $mechanic): void
    {
        $oldTank = $this->tank;
        $this->tank = $changeTankOrder->fetchTank($mechanic);
        // StaticEventPublisher::getInstance()->record(
        // );
    }

}