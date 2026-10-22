<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;


#[Fillable(['child_name', 'parent_email', 'age', 'camp_session', 'accomodation', 'notes'])]
class CampApplication extends Model
{
    public const SESSIONS = [
        '1' => '1. turnus (június 22-28.)',
        '2' => '2. turnus (július 6-12.)',
        '3' => '3. turnus (július 20-26.)',
    ];

    public const ACCOMMODATIONS = [
        'residential' => 'Bentlakásos',
        'day' => 'Napközis',
    ];
}

