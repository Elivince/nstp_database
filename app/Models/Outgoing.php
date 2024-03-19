<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outgoing extends Model
{
    use HasFactory;
    protected $table = 'outgoing';

    protected $primaryKey = 'outgoing_no';

    public $timestamps = false;

    protected $fillable = [
        'date',
        'to_office',
        'for',
        'subject',
        'remarks',
        'action',
        'action_date',
    ];
}
