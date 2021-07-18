<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff_type extends Model
{
    use HasFactory;
    protected $table = "staffs_type";
    protected $fillable = ["type"];
    public function staffs()
    {
        return $this->hasMany("App\Models\Staff");
    }
}
