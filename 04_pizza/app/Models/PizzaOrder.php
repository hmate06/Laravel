<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'address', 'size', 'pasta'])]
class PizzaOrder extends Model
{
    public const SIZES = [
        'small' => 'Kicsi',
        'large' => 'Nagy',
        'XXL' => 'XXL',
    ];
    public const PASTA = [
        'thin' => 'Vékony',
        'thick' => 'Vastag',
    ];
}
