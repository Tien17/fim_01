<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lyric extends Model
{
    protected $fillable = [
        'user_id',
        'song_id',
        'content',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function song()
    {
        return $this->belongsTo(Song::class);
    }
}
