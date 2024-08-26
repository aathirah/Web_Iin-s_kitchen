<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login', ['title' => ' Login']);
    }

    public function authenticate(Request $request)
    {
        $crendential = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        if (Auth::attempt($crendential)) {
            $request->session()->regenerate();
            if (auth()->user()->role == "customer") {
                return redirect()->intended('home');
            } else {
                return redirect()->intended('welcome');
            }
        }
        return "salah";
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        return redirect('/home');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function register(request $request)
    {
        $data = [
            "username" => $request->username,
            "name" => $request->name,
            "password" => Hash::make($request->password),
            "email" => $request->email,
            "role" => "customer",
        ];

        User::insert($data);

        return redirect()->to("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
