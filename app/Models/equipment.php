<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipment extends Model
{
    use HasFactory;
    protected $primaryKey = 'eq_code';
    protected $keyType = 'string';
    protected $fillable = [
        'eq_name',
        'eq_code',
        'eq_status',
        'eq_sn',
        'date_receive',
        'eq_fund',
        'eq_price',
        'eq_amount',
        'eq_expire',
        'eq_place',
        'eq_ref',
        'eq_pic',
        'eq_note',
        'eq_organization',
        'eq_code',
        'eq_receive_method',
        'agent_name',
        'type_id',
        'user_id'
    ];
}
