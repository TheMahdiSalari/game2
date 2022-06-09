<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use Uuids;
    use HasFactory;

    public function metas_data()
    {
        return $this->hasMany(Meta_Data::class, 'meta_id');
    }

    public function metasdata()
    {
        return $this->morphMany(Meta_Data::class, 'metabledata');
    }

    public function metable()
    {
        return $this->morphTo();
    }
}
