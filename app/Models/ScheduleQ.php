<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleQ extends Model
{
    use HasFactory;
    public $fillable = ['first_name', 'second_name', 'last_name', 'reception_number', 'description'];
    protected $table = 'applications';
}
