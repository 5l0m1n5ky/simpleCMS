<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    use HasFactory;
    protected $table = "enterprise";
    protected $fillable = ['id', 'name', 'logo_path', 'description', 'address', 'email', 'phone', 'bg_path'];
}
