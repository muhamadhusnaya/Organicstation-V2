<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'amount',
        'status',
        'xendit_invoice_id',
        'xendit_payment_method',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
