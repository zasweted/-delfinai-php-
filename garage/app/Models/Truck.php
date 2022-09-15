<?php

namespace App\Models;
namespace App\Models\Mechanic;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    use HasFactory;

    public function getMechanic()
    {
        return $this->belongsTo(Mechanic::class, 'mechanic_id', 'id');
    }
}
