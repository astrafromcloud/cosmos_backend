<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    use HasFactory;

    protected $table = 'consoles';

    protected $guarded = false;

    public function sets() {
        return $this->belongsToMany(Set::class);
    }
}
