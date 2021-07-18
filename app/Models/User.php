<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $fillable = ["name", "email", "phone", "address"];
    public function contacts()
    {
        return $this->hasMany('App\Models\Contact');
    }
    public function donations()
    {
        return $this->hasMany('App\Models\Donation');
    }
    public function news_comments()
    {
        return $this->hasMany('App\Models\News_comments');
    }
}
