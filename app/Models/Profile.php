<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Profile extends Model
{
    use Uuids;
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'tier_id',
        'gender',
        'age'
    ];

    public function tiers()
    {
        return $this->belongsToMany(Tier::class, 'profile_tier','profile_id' , 'tier_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id')->withPIV;
    }
}
