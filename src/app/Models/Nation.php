<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Nation extends Model
{
    protected $fillable = ['name', 'flag_url'];

    public function ships(): HasMany
    {
        return $this->hasMany(Ship::class);
    }
    public function docks(): HasMany
    {
        return $this->hasMany(Dock::class);
    }
}
