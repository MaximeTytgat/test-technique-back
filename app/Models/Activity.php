<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    
    public $timestamps = true;

    protected $table = 'activities';

    protected $fillable = [
        'name',
        'description',
        'duration'
    ];
}
