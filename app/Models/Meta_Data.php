<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Meta_Data extends Model
{
    use Uuids;
    use HasFactory;

    public function metas_data()
    {
        return $this->belongsTo(Meta::class, 'meta_id');
    }

    public function metabledata()
    {
        return $this->morphTo();
    }
}
