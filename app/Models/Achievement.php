<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;
    protected $table = "achievements";
    protected $fillable = ["classes_id", "authorName", "topic", "technology", "img", "shortContent", "content", "link"];
    function class ()
    {
        return $this->belongsTo('App\Models\Classes');
    }
}
