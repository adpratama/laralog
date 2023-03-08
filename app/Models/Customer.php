<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'address',
        'city',
        'zipcode',
        'email',
        'phone',
        'tax_number',
        'active_status'
    ];
}
