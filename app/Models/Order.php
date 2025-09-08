<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'customer_id',
        'invoice_number',
        'sub_total',
        'grand_total',
        'status',
        'payment_status',
        'discount',
        'delivery_date',
        'remarks',
    ];

    // 🔗 Add relationship to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 🔗 Add relationship to Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // 🔗 Add relationship to OrderDetail
       public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
