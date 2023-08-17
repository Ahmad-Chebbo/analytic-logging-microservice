<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StreamingLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'episode_id',
        'streamed_at',
        'ip_address',
    ];

    protected $casts = [
        'streamed_at' => 'datetime',
    ];

}
