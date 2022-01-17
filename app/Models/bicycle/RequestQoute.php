<?php

namespace App\Models\bicycle;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestQoute extends Model
{
    use HasFactory;

    protected $table = 'request_a_qoute';

    protected $fillable = [

            'first_name',
            'last_name',
             'email',
             'telephone',
             'height_participants',
             'additional_info',
              'remarks',
              'dietary',
              'daterange',
              'num_of_adults',
              'num_of_youths',
               'people',
            'categories',
            

    ];


}
