<?php

namespace App\Models\bicycle;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faqs extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [

        'category_id',
        'question',
        'description',

    ];

    public function category(){

        return $this->hasOne(FaqsCategory::class, 'id','category_id');

    }
}
