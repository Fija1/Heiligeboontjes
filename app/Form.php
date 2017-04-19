<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $table = 'quizzes';

    protected $fillable = [
        'user_id', 'score', 'weeknummer'
    ];
}
