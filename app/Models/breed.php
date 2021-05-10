<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;
class breed extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function breedable()
    {
        return $this->morphTo();
    }
    public function users()
    {
        return $this->morphMany(User::class,'userable');

    }
    public function park()
    {
        return $this->morphOne(Park::class,'parkable');
    }

}
