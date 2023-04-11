<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enums\UserTypesEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements JWTSubject
{
    use HasRoles, HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name','email','password','user_type','phone','gender','comment','r_access','r_new','r_del','r_edit','r_read','r_edit_all','r_del_all',
        'r_print','r_post','group_id','menu_hide','language','status','user_id0','ma_td1','ngay_td1','gc_td1'
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
//    public function getActivitylogOptions(): LogOptions
//    {
//        return LogOptions::defaults()
//            ->logOnly(['last_login']);
//        // Chain fluent methods for configuration options
//    }
    public function getRules(){
        return [
            'name'=>['nullable','string','max:30'],
            'email'=>['nullable'],
            'phone' => ['nullable'],
            'user_type' => ['nullable', 'enum:'.UserTypesEnum::class],
            'gender' => ['nullable', 'string', 'max:50'],
            'comment'=>['nullable'],
            'r_access'=>['nullable'],
            'r_new'=>['nullable'],
            'r_del'=>['nullable'],
            'r_edit'=>['nullable'],
            'r_read'=>['nullable'],
            'r_edit_all'=>['nullable'],
            'r_del_all'=>['nullable'],
            'r_print'=>['nullable'],
            'r_post'=>['nullable'],
            'group_id'=>['nullable'],
            'menu_hide'=>['nullable'],
            'language'=>['nullable'],
            'status' => ['required', 'integer', 'min:0'],
        ];
    }
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [
            'id'              => $this->id,
            'name'            => $this->name,
            'email'           => $this->email,
            'created_at'      => $this->created_at,
            'updated_at'      => $this->updated_at,
        ];
    }
}
