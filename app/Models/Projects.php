<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_by',
        'company_id',
        'projectname'
    ];

    public function companies(){
        return $this->belongsTo(Companies::class, 'company_id', 'id');
    }
}

