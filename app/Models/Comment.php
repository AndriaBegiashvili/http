<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = "comments";
    protected $fillable = [
        "posts_id",
        "name",
        "text"
    ];
    public function posts()
    {
        return $this->belongsTo(Posts::class);
    }
}
