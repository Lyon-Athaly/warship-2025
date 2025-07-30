<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ship extends Model
{
    protected $fillable = ['name', 'type_id', 'dock_id', 'nation_id', 'built_year'];

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public function dock(): BelongsTo
    {
        return $this->belongsTo(Dock::class);
    }

    public function nation(): BelongsTo
    {
        return $this->belongsTo(Nation::class);
    }
}
