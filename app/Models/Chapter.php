<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chapter extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function verses()
    {
        return $this->hasMany(Verse::class);
    }
}
