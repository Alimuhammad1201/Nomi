<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'total_amount', 
        'status', 
        'country', 
        'f_name',
        'l_name', 
        'street_address', 
        'apartment', 
        'city', 
        'postal_code',  
        'email', 
        'phone_number'];

    public function items()
    {
        return $this->hasMany(OrderItems::class, 'order_id');
    }

   public function city()
{
    return $this->belongsTo(City::class, 'city_id');
}
}

