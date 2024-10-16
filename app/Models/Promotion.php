<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $guarded = false;
    protected $table = 'promotions';

    public function set()
    {
        return $this->belongsTo(Set::class);
    }
}
