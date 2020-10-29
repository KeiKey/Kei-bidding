<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
     * @return \Illuminate\Contracts\Support\Renderable
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
     * Update
     * @param Request $request
     */
    public function update(Request $request)
    {
        if(request()->user()->can('view', $product)){
            if (Hash::check($request['oldPass'], auth()->user()->password)) {
                dd($request);
            }else{
                dd($request['oldPass']);
            }
        };
//        dd($request);
//        dd(auth()->user()->password);
//        dump($request['oldPass']);
//        if (auth()->user()->password === Hash::make($request['oldPass'])){
//            dump($request['oldPass']);
//        } else {
//            dump($request['newPass']);
//        }
        //check if the old pwd is correct
        //update the pwd

    }
}
