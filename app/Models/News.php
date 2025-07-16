<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model{
    use HasFactory;

    protected $table = 't_news';
    protected $primaryKey = 'news_id';
    public $timestamps = false;
    protected $fillable = [
        'news_title',
        'news_thumbnail',
        'news_content',
        'news_tag',
        'news_date',
    ];
}
