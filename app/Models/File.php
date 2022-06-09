<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class File extends Model
{
    use Uuids;
    use HasFactory;

    public function tiers()
    {
        return $this->belongsToMany(Tier::class, 'file_tier', 'file_id', 'tier_id');
    }
}
