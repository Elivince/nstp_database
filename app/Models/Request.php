<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $table = 'requests';
    protected $fillable = ['date', 'name', 'component', 'campus', 'course', 'gradyear', 'serialno', 'remarks', 'issuedby'];
}
