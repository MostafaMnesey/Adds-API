<?php

namespace App\Service;

use App\Http\Requests\UserRequest;
use App\Models\User;
class AuthUserService
{
    protected $imageservice;
    public function __construct(ImageService $imageservice)
    {
        $this->imageservice = $imageservice;
    }

    public function register($request)
    {

        $user = $request->validated();

        $z = User::create([
            'name' => $user['name'],
            'email' => $user['email'],
            'password' => bcrypt($user['password']),
            'profile_photo' => $this->imageservice->storeProfilePhoto($request),

        ]);
        dd($z);
        return view('adds.login');

    }

    public function login($request)
    {

    }
}
