<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'travel_id',
        'name',
        'starting_date',
        'ending_date',
        'price'
    ];


    public function getPriceAttribute($value): float
    {
        return $value / 100;
    }


    public function setPriceAttribute($value): void
    {
        $this->attributes['price'] = $value * 100;
    }

}
