<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHistory extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function TransactionDetail(){
        return $this->hasMany(TransactionDetail::class, 'txHistory_id', 'id');
    }

    public function User(){
        return $this->belongsTo(User::class);
    }
}
