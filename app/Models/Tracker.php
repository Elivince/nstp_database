<?php

namespace App\Models;

use Kyslik\ColumnSortable\Sortable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    use Sortable;

    use HasFactory;

    protected $table = 'requests';

    protected $primaryKey = 'request_id';

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

    public $sortable = [
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
