<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Dock extends Model
{
    protected $fillable = ['name', 'location'];

    public function ships(): HasMany
    {
        return $this->hasMany(Ship::class);
    }

    public function nations(): BelongsTo
    {
        return $this->belongsTo(Nation::class);
    }
}
