<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'username',
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
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            $user->profile()->create([
                'title'=> $user->username,
                ]);
        });
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }

    public function likesGiven() {
        return $this->hasMany(Like::class);
    }

    public function likesReceived() {
        return $this->hasManyThrough(Like::class, Post::class);
    }

    public function timeline() {
        $ids = $this->follows->pluck('id'); // return posts of users followed by user
        $ids->push($this->id); // return own user's post
        return Post::whereIn('user_id', $ids)->latest()->get();
    }

    public function userPosts() {
        return Post::where('user_id', $this->id)->latest()->get();
    }

    public function follow(User $user) {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user) {
        return $this->follows()->detach($user);
    }
    
    public function follows() {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }
    
    public function following(User $user) {
        return $this->follows()
            ->where('following_user_id', $user->id)
            ->exists();
    }

}
