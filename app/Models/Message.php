<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    
    protected $fillable = ['message'];

    // We’re going to to use these functions to retrieve the messages for a user and vice versa.
    
    public function user(){
        return $this->belongsTo(User::class);
    }


}
