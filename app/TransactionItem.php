<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    protected $table = 'transactions_items';
    protected $fillable = ['transaction_id', 'item_id'];
}
