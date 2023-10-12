<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_by',
        'companiesname'
    ];

    public function projects(){
        return $this->hasMany(Projects::class);
    }
}
