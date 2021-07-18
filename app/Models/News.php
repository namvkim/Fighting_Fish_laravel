<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = "news";
    protected $fillable = ["news_type_id", "title", "shortContent", "content", "img", "users_like"];
    public function news_comments()
    {
        return $this->hasMany('App\Models\News_comments');
    }
    public function news_type()
    {
        return $this->belongsTo('App\Models\News_type');
    }
}
