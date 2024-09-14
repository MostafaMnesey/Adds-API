<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Service\AuthUserService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $authservice;
    public function showRegister(Request $request)
    {

        return view('adds.register');
    }
    public function __construct(AuthUserService $authservice)
    {
        $this->authservice = $authservice;
    }
    public function login(UserRequest $request)
    {
        $this->authservice->login($request);
    }


    public function register(UserRequest $request)
    {
        $this->authservice->register($request);
    }
}
