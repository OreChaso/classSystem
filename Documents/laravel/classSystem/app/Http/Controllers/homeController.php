<?php

namespace App\Http\Controllers;
use App\Http\Requests\loginRequest;
use Illuminate\Http\Request;

class homeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function loginShow()
    {
        return view('/login');
    }

    /**
     * @param App\Http\Requests\loginRequest
     * $request
     */
    public function login(loginRequest $request) {
        dd($request->all());
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('/home');
    }
}
