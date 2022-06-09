<?php

namespace App\Models;

use Alive2212\LaravelMobilePassport\Models\AliveMobilePassportRole;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\Uuids;
use Fico7489\Laravel\Pivot\Traits\PivotEventTrait ;

class User extends Authenticatable
{
    use Uuids;
    use PivotEventTrait;
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'profile_id',
        'password',
        'phone_number',
        'country_code',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//    public function tiers()
//    {
//        return $this->hasMany(Tier::class, 'user_id');
//    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function profiles()
    {
        return $this->hasMany(Profile::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(
            AliveMobilePassportRole::class,
            'alive_mobile_passport_role_user',
            'user_id',
            'role_id'
        );
    }
}
