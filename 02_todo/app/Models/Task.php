<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


#[Fillable('title', 'description', 'due_date', 'is_done')]
class Task extends Model
{
    use HasFactory;

    protected function casts() : array
    {
        return [
            'due_date' => 'datetime',
            'is_done' => 'boolean',
        ];



    }



}
