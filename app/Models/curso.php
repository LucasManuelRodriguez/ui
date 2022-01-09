<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category',
        'user_id'
    ];

    public function autor(){
        return $this->belongsTo(User::class,'user_id');
    }
}
