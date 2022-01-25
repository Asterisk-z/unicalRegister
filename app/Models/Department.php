<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
           'amount' => 'array',
            'dueName' => 'array',
            'bankName' => 'array',
            'accountName' => 'array',
            'accountNumber' => 'array',
    ];
}
