<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    protected $fillable = ['name', 'description'];
    public function ships(): HasMany
    {
        return $this->hasMany(Ship::class);
    }
}
