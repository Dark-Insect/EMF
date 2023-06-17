<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['firstname', 'middlename', 'lastname', 'birthdate', 'street', 'barangay', 'town', 'fname', 'mname'];

    
    public function orderdetail()
    {
        return $this->hasMany('App\Models\Order_detail');
    }

}
