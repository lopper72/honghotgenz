<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClonedData extends Model
{
    use HasFactory;

    // Bảng thật trong database
    protected $table = 'clones';

    protected $fillable = [
        'source_url',
        'title',
        'content',
        'images',
        'videos',
        'author',
        'publish_date',
        'category',
        'status',
        'crawled_at',
    ];

    protected $casts = [
        'publish_date' => 'datetime',
        'crawled_at' => 'datetime',
    ];
}
