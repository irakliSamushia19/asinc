<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;

    protected $table = 'posts';
    
    protected $fillable = [
        "title",
        "content"
    ];


    public function post(){
        return $this->hasMany(Coms::class);
    }
   
}
