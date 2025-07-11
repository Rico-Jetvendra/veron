<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model{
    use HasFactory;

    protected $table = 't_language';
    protected $primaryKey = 'language_id';
    public $timestamps = false;
    protected $fillable = [
        'language_menu',
        'language_indo',
        'language_eng',
    ];
}
