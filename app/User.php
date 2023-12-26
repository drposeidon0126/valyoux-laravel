<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $dates = [
        'updated_at',
        'created_at',
        'email_verified_at',
        'two_factor_expires_at',
    ];

    protected $fillable = [
        'first_name', 'last_name', 'email','country','phone_number', 'password', 'dob', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    final public function videos(): HasMany
    {
        return $this->hasMany(\App\Models\VideoUploads::class, 'user_id', 'id');
    }

    /*Login with Socialite*/
    public function socialProviders()
    {
        return $this->hasMany(socialProvider::class);
    }

    final public function roles()
    {
        return $this->belongsToMany(\App\Models\Role::class);
    }

    public function generateTwofactor()
    {
        $this->two_factor_code = rand(100000,999999);
        $this->two_factor_expires_at = now()->addMinutes(10);
        $this->save();
    }

    final public function resetTwoFactorCode()
    {
        $this->two_factor_code = null;
        $this->two_factor_expires_at = null;
        $this->save();
    }
}
