<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komen extends Model
{
    public function tugasan()
    {
        return $this->belongsTo(Tugasan::class, 'foreign_key');
    }
}
