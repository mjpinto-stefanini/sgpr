<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameters extends Model
{
    use HasFactory;



    protected $fillable = [
        'year',
        'units_id',
        'economic_ratings_id',
        'sources_id',
        'type_of_expenses_id',
        'upgs_id',
        'budget_ceilling',
        'type',
        'type_parameters',

    ];

    public function units(){
        return $this->hasOne(Unit::class);
    }
}
