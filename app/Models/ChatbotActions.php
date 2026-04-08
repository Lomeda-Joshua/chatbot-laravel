<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatbotActions extends Model
{
    protected $fillable = [
        'action_name',
        'query_id'
    ];

    protected $table = 'chatbotactions';
}
