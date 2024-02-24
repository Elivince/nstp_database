<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    use HasFactory;

    protected $table = 'requests';

    public $timestamps = false;
    
    protected $fillable = [
        'date',
        'name',
        'component',
        'campus',
        'course',
        'graduation_year',
        'serial_no',
        'remarks',
        'issued_by'
    ];
}
