<?php

namespace App\Http\Controllers;
use App\Models\User;
use \App\Models\User as UserModel;
use Illuminate\Http\Request as Request;

class UserController extends Controller
{
    public static function getUsers(): \Illuminate\Support\Collection
    {
        return UserModel::getUsers();
    }

    public static function getUser(): \Illuminate\Support\Collection
    {
        return UserModel::getUser();
    }

    public static function register() {
        return UserModel::registerUser();
    }

    public static function login(Request $request) {

    }

    public static function save() {
        return UserModel::saveUser();
    }

    public static function delete() {
        return UserModel::deleteUser();
    }
}
