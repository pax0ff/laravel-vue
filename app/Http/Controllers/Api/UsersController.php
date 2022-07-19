<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UsersResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return UsersResource::collection(User::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return UsersResource
     */
    public function store(Request $request)
    {
        $user = User::create($request->validated());

        return new UsersResource($user);
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return UsersResource
     */
    public function show(User $user): UsersResource
    {
        return new UsersResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @return UsersResource
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->validated());

        return new UsersResource($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return response()->noContent();
    }
}
