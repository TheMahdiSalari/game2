<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Tier extends Model
{
    use Uuids;
    use HasFactory;

    protected $fillable =
        [
            'key',
            'title',
            'subtitle',
            'description',
            'revoked_at'
        ];

    public function tier_types()
    {
        return $this->hasMany(Tier_Type::class, 'tier_id');
    }

//    public function tiers()
//    {
//        return $this->belongsToMany(User::class, 'tier_id');
//    }

    public function profiles()
    {
        return $this->belongsToMany(Profile::class, 'profile_tier' , 'tier_id' , 'profile_id');
    }

    public function files()
    {
        return $this->belongsToMany(
            File::class, 'file_tier', 'tier_id', 'file_id')
            ->withPivot('type');
    }

    public function metasdata()
    {
        return $this->morphMany(Meta_Data::class, 'metabledata');
    }
}
