<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id', 'books_id', 'body', 'rating'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    public function book()
    {
        return $this->belongsTo(Book::class, 'books_id', 'id');
    }
}
