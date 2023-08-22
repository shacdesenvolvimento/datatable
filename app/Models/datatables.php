<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datatables extends Model
{
    protected $fillable= [
        'name',
        'body',
        'date'
    ];
    use HasFactory;
}
