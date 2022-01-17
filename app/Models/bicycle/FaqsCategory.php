<?php

namespace App\Models\bicycle;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqsCategory extends Model
{
    use HasFactory;

    protected $table = 'faqs_category';

    protected $fillable = [

        'category_name',

    ];

    public function faqs(){

        return $this->hasMany(Faqs::class, 'category_id','id');

    }
}
