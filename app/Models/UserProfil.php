<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserProfil extends Model
{
    protected $fillable = [
        'tgl_lahir',
        'jenkel',
        'alamat',
        'nama',
        'no_telp',
        'pic',
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}