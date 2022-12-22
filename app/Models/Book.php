<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable =[
        'title',
        'content',
        'price',
        'pushlisher',
        'nickname'
    ];

    public function author(){
        return $this->belongsTo(Author::class, 'nickname', 'nickname');
    }
}
