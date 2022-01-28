<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'uid','products_id','name','email','phone','adress',
        'transaction_total','transaction_status'
    ];

    protected $hidden = [

    ];


    public function details()
    {
        return $this->hasMany(TransactionDetail::class,'transactions_id','id');
    }
     public function product()
    {
        return $this->belongsTo(Product::class,'products_id','id');
    }
    



}
