<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'transactions_id',
        'books_id',
        'quantity'
    ];

    public function transaction()
    {
        return $this->hasOne(Transaction::class, 'transactions_id', 'id');
    }

    public function book()
    {
        return $this->hasOne(Book::class, 'books_id', 'id');
    }
}
