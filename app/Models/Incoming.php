<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class incoming extends Model
{
    use HasFactory;

    protected $table = 'incoming';

    protected $primaryKey = 'incoming_no';

    public $timestamps = false;

    protected $fillable = [
        'date',
        'received_by',
        'from_office',
        'subject',
        'remarks',
        'action',
        'action_date',
        'action_received_by'
    ];
}
