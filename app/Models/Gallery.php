<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = "gallery";
    protected $fillable = ["gallery_type_id", "title", "img", "content"];
    public function galleryType()
    {
        return $this->belongsTo("App\Models\Gallery_type");
    }
}
