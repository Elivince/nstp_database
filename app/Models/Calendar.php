<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calendar extends Model
{
    use HasFactory;

    protected $table = 'calendar';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'event_title',
        'event_date',
        'event_theme',
    ];
}
