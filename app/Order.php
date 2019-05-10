<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['product_id','user_id'];

    public function User()
    {
        return
            $this
                ->belongsTo(User::class);
    }

    public function Product()
    {
        return
            $this
                ->belongsTo(Product::class);
    }
}
