<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'img_path', 'description', 'status'];

    public function images()
    {
        return $this->hasMany(Image::class)->where('status', true);
    }

    public function collectoinPaner()
    {
        return $this->img_path;
    }
}
