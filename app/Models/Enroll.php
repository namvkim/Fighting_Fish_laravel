<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    use HasFactory;
    protected $table = "enroll";
    protected $fillable = ["name", "img", "phone", "school", "email", "address", "circumstance"];
}
