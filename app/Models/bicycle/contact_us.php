<?php

namespace App\Models\bicycle;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_us extends Model
{
    use HasFactory;

    protected $table = 'contact_us';

    protected $fillable = [

        'first_name',
        'last_name',
        'email',
        'telephone',
        'description',
        'term_condition',

    ];
}
