<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $table = 'cart_items';

    protected $guarded = false;

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function console()
    {
        return $this->belongsTo(Console::class);
    }
}
