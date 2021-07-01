<?php
namespace App\Models\Entity;

use App\Models\Entity\Mechanic;

use App\Models\Entity\Tank;

class ChangeTankOrder
{
    private $tank;

    private $executedBy;

    public function __construct(Tank $tank)
    {
        $this->tank = $tank;
    }

    public function fetchTank(Mechanic $executedBy)
    {
        $this->executedBy = $executedBy;
        return $this->tank;
    }


}
