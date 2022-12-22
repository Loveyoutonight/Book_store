<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $table = 'authors';
    protected $primaryKey = 'nickname';
    public $incrementing = false;
    protected $keyType = 'string';
    
    protected $fillable = [
        'nickname',
        'fullname',
        'address',
        'email',
        'phone',
    ];

    public function books(){
        return $this->hasMany(Book::class, 'nickname', 'nickname');
    }
}
