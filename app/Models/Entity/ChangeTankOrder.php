<?php
namespace App\Models\Entity;

use App\Models\Entity\Mechanic;

class ChangeTankOrder
{
    private $tank;

    private $executedBy;

    public function fetchTank(Mechanic $executedBy)
    {
        $this->executedBy = $executedBy;
        return $this->tank;
    }


}
