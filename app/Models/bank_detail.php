<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class bank_detail extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates =['deleted_at'];


    protected $fillable=[

        'user_id',
        'account_name',
        'account_number',
        'ifsc_code',
        'bank_name',
        // 'bank',
        'created_by',
        'updated_by',

    ];

}
