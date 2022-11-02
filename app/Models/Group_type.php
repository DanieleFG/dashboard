<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_type extends Model
{
    use HasFactory;
    protected $fillable = ["cod_grouptype","type"];
}
