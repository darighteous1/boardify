<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

// TODO: add attributes
class Game extends BaseModel
{
    public function collections(): BelongsToMany
    {
        return $this->belongsToMany(Collection::class, 'collection_items');
    }
}
