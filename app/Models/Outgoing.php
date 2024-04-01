<?php

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class outgoing extends Model
{
    use Sortable;

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
