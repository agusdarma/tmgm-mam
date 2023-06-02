<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'item_name',
        'rental_price',
        'rental_time',        
        'email',
        'no_hp',
        'telegram_id',
        'discount',
        'status',
        'payment_method',
        'payment_status',
        'payment_url',
        'total_price',
        'item_id',
        'user_id',
    ];

    // protected $dates = [
    //     'start_date',
    //     'end_date',
    // ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
