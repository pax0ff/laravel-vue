<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UsersResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class UsersController extends Controller
{

//    public function index(): AnonymousResourceCollection
//    {
//        return UsersResource::collection(User::all());
//    }
    public function index(): \Illuminate\Support\Collection
    {
        return (new \App\Models\User)->getUsers();
    }

//    public function store(Request $request): UsersResource
//    {
//
//        $user = User::create($request->all());
//
//        return new UsersResource($user);
//    }
//
//
//
//    public function show(User $user): UsersResource
//    {
//        return new UsersResource($user);
//    }
//
//    public function update(Request $request, User $user): UsersResource
//    {
//        $user->update($request->all());
//
//        return new UsersResource($user);
//    }
//
//    public function destroy(User $user): Response
//    {
//        $userID = $user->id;
//        $user->delete($userID);
//
//        return response()->noContent();
//    }
//
//    public function login(User $user) {
//
//    }
}
