<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Connection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;

class Reservation extends Model
{
    use HasFactory;

    public function connections(){
        return $this->belongsTo(Connection::class, 'foreign_key');
    }
}
