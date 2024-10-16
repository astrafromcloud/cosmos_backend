<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;

    protected $table = 'baskets';

    protected $guarded = false;

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }

    public function consoles()
    {
        return $this->belongsToMany(Console::class);
    }
}
