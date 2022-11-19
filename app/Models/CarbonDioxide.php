<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarbonDioxide extends Model
{
    use HasFactory;
    
    protected $fillable = ['carbon_data'];
}
