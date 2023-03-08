<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incoming extends Model
{
    use HasFactory;

    protected $table = 'incoming';

    protected $fillable = [
        'airline',
        'flight_number',
        'origin',
        'destination',
        'flight_date',
        'arrival_time',
        'type_of_goods',
        'awb_num',
        'awb_date',
        'agent',
        'consignee',
        'pieces',
        'weight',
        'acceptance'
    ];
}
