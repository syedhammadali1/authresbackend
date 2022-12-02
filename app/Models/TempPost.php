<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempPost extends Model
{
    use HasFactory;

   protected $fillable = ['post_id','first_name','last_name','email','phone_no','address','is_over_words','is_exclusive'];
   
    public function post()
    {
        return $this->hasOne(Post::class);
    }
}
