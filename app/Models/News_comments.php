<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_comments extends Model
{
    use HasFactory;
    protected $table = "news_comments";
    protected $fillable = ["news_id", "users_id", "content"];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function news()
    {
        return $this->belongsTo('App\Models\News');
    }
}
