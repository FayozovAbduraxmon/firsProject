<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptops extends Model
{
    use HasFactory;
    protected $table ='laptops';

    protected $fillable =[
        'name',
        'manufakturer',
        'os',
        'ram',
        'img',
        'date',
    
    ];

}
