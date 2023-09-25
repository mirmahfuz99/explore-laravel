<?php

namespace App\Observers;

use App\Models\Travels;

class TravelObserver
{
    
    public function creating(Travels $travels): void
    {
        $travels->slug = str($travels->name)->slug();
    }


}
