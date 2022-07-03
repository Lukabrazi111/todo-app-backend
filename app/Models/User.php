<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'image',
        'password',
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
    private $storagePath = '/storage/images/';

    /*
     * Relationship for profile
     */
    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id');
    }

    /*
     * Check if image is exist in database
     */

    public function isImageExists()
    {
        if (is_null($this->image)) {
            return asset('avatars/default-avatar.png');
        }

        return config('app.url') . $this->storagePath . $this->image;
    }
}
