<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery_type extends Model
{
    use HasFactory;
    protected $table = "gallery_type";
    protected $fillable = ["type"];
    public function gallerys()
    {
        return $this->hasMany("App\Models\Gallery");
    }
}
