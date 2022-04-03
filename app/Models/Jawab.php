<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawab extends Model
{
    protected $table = "jawab";
    protected $fillable = ['users_id', 'tanya_id', 'jawaban', ''];
    public function tanya()
    {
        return $this->belongsTo(Tanya::class, 'tanya_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
