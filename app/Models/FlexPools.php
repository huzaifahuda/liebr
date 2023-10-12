<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class FlexPools extends Model
{
    use HasFactory;

    protected $fillable = [
        'created_by',
        'client_id',
        'category_id',
        'flexpoolname',
    ];

//    public function category(){
//        return $this->(Category::class, 'id','category_id');
//    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

}

