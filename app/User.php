<?php
namespace app;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function sothich()
    {
        return $this->hasMany('App\Sothich','user_id','id');
    }
    public function binhluan()
    {
        return $this->hasMany('App\Binhluan','user_id','id');
    }
    public function sanpham()
    {
        return $this->hasMany('App\Sanpham','user_id','id');
    }
    
}
