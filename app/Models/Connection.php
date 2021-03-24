<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthAuthenticatable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Connection extends Model implements Authenticatable
{
    use AuthAuthenticatable;
    use HasFactory;
    public function reservation(){
        return $this->hasMany(Reservation::class);
    }
}
