<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Client extends Model
{
    use HasFactory;

    public function getClients(){
      return $this->all();
    }   

    public function discs(): BelongsToMany{
      return $this->belongsToMany(Disc::class);
    } 
}
