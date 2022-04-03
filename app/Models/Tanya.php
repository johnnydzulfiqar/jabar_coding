<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanya extends Model
{
    protected $table = "tanya";
    protected $fillable = ["pertanyaan", "gambar", "kategori_id", "users_id"];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function jawab()
    {
        return $this->hasMany(Jawab::class);
    }

    public function isTheOwner($user)
    {
        return $this->user_id === $user->id;
    }
}
