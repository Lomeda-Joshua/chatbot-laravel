<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChatbotFlow extends Model
{
    protected $fillable = [
        'group_id',
        'sequence',
        'query_name',
        'goto',
        'type',
        'action',
        'is_active',
        'is_submit',
        'is_ticket',
        'created_by',
        'updated_by'
        ];
}
