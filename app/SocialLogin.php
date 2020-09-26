<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialLogin extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'provider_user_id', 'provider'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
