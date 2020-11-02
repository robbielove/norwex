<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    //enable calling $order->completedAt
    public function getCustomerNameAttritube() {
        return $this->Name;
    }
    /**
     * Get the customer status
     */
    public function customerStatus()
    {
        return $this->belongsTo('App\Models\CustomerStatus', 'Code', 'CustomerStatusId');
    }

    /**
     * Get the customer status
     */
    public function Orders()
    {
        return $this->belongsTo('App\Models\Order', 'OrderId', 'OrderId');
    }
}
