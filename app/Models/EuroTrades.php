<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EuroTrades extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'open_time',
        'close_time',
        'symbol',
        'action',
        'open_price',
        'tp_price',
        'sl_price',
        'pips',
        'result',
    ];
}