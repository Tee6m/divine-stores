<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    
    function user() {
        return $this->belongsTo(User::class, 'user_id')->withTrashed();
        return $this->belongsTo(Category::class)->withTrashed();
    }
    function orders() {
        return $this->hasMany(Order::class);
    }
}