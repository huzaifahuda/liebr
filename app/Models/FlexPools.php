<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlexPools extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_by',
        'client_id',
        'category_id',
        'flexpoolname',
    ];

    function ()
    {
        
    }

}

