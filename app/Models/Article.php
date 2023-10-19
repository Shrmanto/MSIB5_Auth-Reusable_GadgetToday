<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'article';
    protected $fillable = [
        'article_name',
        'image',
        'categories_id',
        'description',
    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

}
