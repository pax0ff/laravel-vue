<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Http\Requests\GeneralRequest;
use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;
use Symfony\Component\Console\Input\Input;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function userExists($id) {

    }
    public static function getUsers()
    {
        return DB::table('users')
            ->selectRaw('users.id,users.name,users.email,users.password,users.created_at')
            ->get();
    }

    public static function getUser() {
        return DB::table('users')
            ->selectRaw('users.id,users.name,users.email,users.password')
            ->where('users.id','=',GeneralRequest::getUserIdFromRequest())
            ->get();
    }

    public static function saveUser() {
        $req = GeneralRequest::getRequest();
        dd($req);
        $query = DB::table('users')
            ->where('id', '=',GeneralRequest::getUserIdFromRequest())
            ->update(['name'=> 'asd1232224','email'=>'asd@a.com']);
        //return $query;
    }
    public static function login() {
        dd("aaa");
    }

    public static function registerUser() {
        dd("register");
    }
}
