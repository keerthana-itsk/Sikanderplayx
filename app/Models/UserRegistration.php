<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRegistration extends Model
{
    use HasFactory,SoftDeletes;

    protected $dates =['deleted_at'];


    protected $fillable=[

        'user_id',
        'name',
        'email',
        'mobile',
        'dob',
        'lead_source',
        'location',
        'date',
        'is_active',
        'alternative_mobile',
        'auth_user_id',
        'created_by',
        'updated_by',

    ];
}
