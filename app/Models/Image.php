<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = "image";
    protected $fillable = ['id', 'tags', 'file_path'];

    public function scopeFilter($query, $filter)
    {
        $query->where('tags', 'like', '%' . request('search') . '%');
    }
}
