<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Http\Requests\GeneralRequest;
use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Laravel\Sanctum\HasApiTokens;
use Symfony\Component\Console\Input\Input as Input;
use Throwable;

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
    public static function getUsers(): \Illuminate\Support\Collection
    {
        return DB::table('users')
            ->selectRaw('users.id,users.name,users.email,users.password,users.created_at')
            ->get();
    }

    public static function getUser(): \Illuminate\Support\Collection
    {
        return DB::table('users')
            ->selectRaw('users.id,users.name,users.email,users.password')
            ->where('users.id','=',GeneralRequest::getUserIdFromRequest())
            ->get();
    }


    public static function saveUser() {

//        $req = GeneralRequest::getRequest();
//        dd($req);
//        $query = DB::table('users')
//            ->where('id', '=',GeneralRequest::getUserIdFromRequest())
//            ->update(['name'=> 'asd1232224','email'=>'asd@a.com']);
        //return $query;
    }
    public static function loginUser() {
        $requestData = GeneralRequest::getUserLoginDataFromRequest();
        //dd(empty($requestData));
//        if(!empty($requestData)) {
//            $email = $requestData['email'];
//            $password = $requestData['password'];
//            if($email && $password) {
//                $data = DB::table('users')
//                    ->where('users.email', '=', $email)
//                    ->where('users.password', '=', $password)
//                    ->get()[0];
//
//                if ($data) {
//                    Session::put('name', $data->name);
//                    //Redirect::to('/');
//                }
//            }
//        }
    }

    public static function logoutUser() {
        $ses = Session::get('name');
        //Redirect::to('/');
    }

    public static function registerUser() {
        $requestData = GeneralRequest::getUserDataFromRequest();
        if(!empty($requestData)) {
            try {
                $query = DB::table('users')->insert($requestData);
                if($query) {
                    return $query;
                }
            }
            catch(Throwable $e){
                $e->getMessage();
            }
        }
    }

    public static function deleteUser() {
        $id = GeneralRequest::getUserIdFromRequest();
        return DB::table('users')->where('id', '=', $id)->delete();
    }
}
