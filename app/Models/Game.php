<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $guarded = false;

    protected $table = 'games';

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
