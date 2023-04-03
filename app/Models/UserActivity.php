<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $table = 'activity_data';

    protected $fillable = [
        'user_id',
        'activity_id',
        'point_in_time',
        'speed'
    ];
}
