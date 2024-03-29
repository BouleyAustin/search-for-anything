<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Laravel\Cashier\Subscription;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function showOnboarding()
    {
        $page = $this->pages()->first();
        $rss = $page->podcast_rss != null;
        $apple = $page->apple_link != null;
        $color = $page->background_color != null;
        $share = $page->social_share;

        return !($rss && $apple && $color && $share);
    }

    public function getSubscription()
    {
        if($this->email == 'marketingsecretstest@gmail.com' || $this->email == 'marketinginyourcartest@gmail.com' || $this->email == 'jordanpetersontest@gmail.com'){
            return true;
        }

        return Subscription::where('user_id', $this->id)->first();
    }

    public function isAdmin()
    {
        return $this->email == 'bouleyaustin@gmail.com';
    }
}
