<?php

namespace App\Models;

use App\Models\video;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class catagory extends Model
{
    use HasFactory;

    protected $table = "categories";

    public function videos()
    {
        $this->hasMany(video::class, "category_id", "id");
    }
}