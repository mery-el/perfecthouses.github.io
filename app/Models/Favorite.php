<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $table = 'favorite';
    protected $primarykey = ['annonce_id','users_id'];
    protected $fillable = ['annonce_id','users_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function annonce(){
        return $this->hasOne(Annonce::class);
    }
}
