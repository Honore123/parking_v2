<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemperatureData extends Model
{
    use HasFactory;
    protected $fillable = ['temperature_data', 'recorded_at'];
}
