<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profile";
    protected $primaryKey = 'id';
    protected $foreignKey = 'users_id';
    protected $fillable = ["bio", "email", "umur", "alamat", "users_id"];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
