<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatbotFlow extends Model
{
    protected $fillable = [
        'queries_id',
        'actions_id',
        'goto',
        'created_by',
        'updated_by'
        ];
}
