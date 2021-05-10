<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function park()
    {
        return $this->morphMany(Park::class,'parkable');
    }
    public function userable()
    {
        return $this->morphTo();
    }
    public function breeds()
    {
        return $this->morphMany(breed::class,'breedable');
    }
}
