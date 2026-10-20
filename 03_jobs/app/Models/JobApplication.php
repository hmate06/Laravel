<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['name', 'email', 'birth_year', 'position', 'introduction'])]
class JobApplication extends Model
{
    public const POSITION = [
        'developer' => 'Fejlesztő',
        'designer' => 'Tervező',
        'sysadmin' => 'Rendszergazda',
        'tester' => 'Tesztelő',
    ];
}
