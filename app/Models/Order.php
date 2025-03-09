<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_name',
        'external_id',
        'no_transaction',
        'grand_total',
        'description',
        'order_date',
        'payment_status',
        'invoice_url',
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
