<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = "contacts";
    protected $fillable = ["users_id", "title", "message"];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
