<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pictures extends Model
{
    use HasFactory;

    protected $table = 'pictures'; // Menetapkan nama tabel yang benar
    
    protected $fillable = [
        'menu_id',
        'name',
    ];
}
