<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyBook extends Model
{
    use HasFactory;
    
    protected $table = 'books';

    protected $fillable = [
        'isbn',
        'title',
        'author',
        'description',
        'date_published',
    ];
}
