<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatePasswordValidation;
use Illuminate\Support\Facades\Hash;

class CPController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application CP.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('CP/panel');
    }

    /**
     * Retrive
     */
    public function edit()
    {
        $user = auth()->user();

        return view('CP.profile', compact('user'));
    }

    /**
     * Update the User password
     * @param Request $request
     */
    public function update(UpdatePasswordValidation $request)
    {
//        $request['newPass'] = Hash::make($request['newPass']);
        UserService::update($request['oldPass'], $request['newPass'], auth()->user());

    }
}
