<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users()
    {
        $this->morphMany(User::class,'userable');
    }
    public function parkable()
    {
        return $this->morphTo();
    }
    public function breeds()
    {
        return $this->morphMany(breed::class,'breedable');
    }

}
