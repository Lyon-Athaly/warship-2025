<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Dock extends Model
{
    protected $fillable = ['name', 'location'];

    public function ships(): HasMany
    {
        return $this->hasMany(Ship::class);
    }
}
