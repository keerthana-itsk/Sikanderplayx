<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class deposit extends Model
{
    use HasFactory,SoftDeletes;

    protected $dates =['deleted_at'];

    protected $fillable=[

        'user_id',
        'platform_id',
        'utr',
        'deposit_amount',
        'bonus',
        'total_deposit_amount',
        'image',
        'created_by',
        'updated_by',

    ];
}
