<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Productos extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'productos';

    protected $fillable = [
        'codprod',
        'nombreprod',
        'descriprod',
        'typprod',
        'costunit',
        'cantprod'
    ];
}
