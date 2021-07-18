<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_type extends Model
{
    use HasFactory;
    protected $table = "news_type";
    protected $fillable = ["type"];
    public function news()
    {
        return $this->hasMany('App\Models\News');
    }
}
