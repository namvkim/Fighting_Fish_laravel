<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = "staffs";
    protected $fillable = ["staffs_type_id", "name", "content", "facebook", "linkin", "twitter", "instagram"];
    public function staffType()
    {
        return $this->belongsTo("App\Models\Staff_type");
    }
}
