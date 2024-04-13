<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Disc extends Model
{
    use HasFactory;

    public function getDiscs(){
        return $this->all();
    }

    public function clients(): BelongsToMany{
        return $this->belongsToMany(Client::class);
    }
}
