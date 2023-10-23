<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecommendNews extends Model
{
    use HasFactory;

    protected $table = 'recommend_news';

    protected $fillable = [
        'article_id',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
