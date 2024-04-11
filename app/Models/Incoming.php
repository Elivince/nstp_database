<?php

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class incoming extends Model
{
    use Sortable;
    
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
    ];
}
