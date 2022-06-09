<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use Uuids;
    use HasFactory;

    public function applications()
    {
        return $this->hasMany(Tier_Type::class, 'application_id');
    }

    public function application_types()
    {
        return $this->belongsTo(ApplicationType::class, 'type_id');
    }
}
