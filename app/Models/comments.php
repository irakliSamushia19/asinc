<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;
    protected $table = "comments";
    protected $fillable = [
        "title",
        "comment",
        "comment_id"
    ];

    public function post(){
        return $this->belongsTo(Posts::class);
    }
}
