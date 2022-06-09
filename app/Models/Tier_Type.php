<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tier_Type extends Model
{
    use Uuids;
    use HasFactory;

    public function tier_types()
    {
        return $this->belongsTo(Tier::class, 'tier_id');
    }

    public function applications()
    {
        return $this->belongsTo(Application::class, 'application_id');
    }

    public function metas()
    {
        return $this->morphMany(Meta::class, 'metable');
    }
}
