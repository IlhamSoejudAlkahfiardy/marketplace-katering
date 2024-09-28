<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    use HasFactory;

    protected $table = 'menus'; // Menetapkan nama tabel yang benar
    
    protected $fillable = [
        'name',
        'desc',
        'price',
        'user_id',
    ];

    public function pictures()
    {
        return $this->hasMany(Pictures::class, 'menu_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
