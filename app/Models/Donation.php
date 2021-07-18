<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $table = "donation";
    protected $fillable = ["users_id", "money", "message"];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
