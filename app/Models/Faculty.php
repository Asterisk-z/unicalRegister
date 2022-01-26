<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected $casts = [
            'name' => 'array',
            'amount' => 'array',
            'dueName' => 'array',
            'bankName' => 'array',
            'accountName' => 'array',
            'accountNumber' => 'array',
            'contactPersonName' => 'array',
            'contactPersonNumber' => 'array',
    ];
}
