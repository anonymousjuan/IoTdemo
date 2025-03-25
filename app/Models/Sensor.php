<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    // use HasFactory;
    
    protected $table = 'ir_sensor'; // Ensure this matches your database table name
    protected $fillable = ['obstacle'];
}
