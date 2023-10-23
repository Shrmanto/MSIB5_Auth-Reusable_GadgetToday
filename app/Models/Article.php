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
        'writer_id',
    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'writer_id');
    }

    public function latestNews()
    {
        return $this->hasMany(LatestNews::class);
    }

    public function recommendNews()
    {
        return $this->hasMany(RecommendNews::class);
    }

}
