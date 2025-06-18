<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $users = DB::table('t_user')->get();

        return view('pages/admin/user/index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('pages/admin/user/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $validated = $request->validate([
            'username'  => 'required|string|max:100',
            'pwd' => 'required'
        ]);

        // Save to database
        $user = User::create([
            'username' => $validated['username'],
            'password' => MD5($validated['pwd']), // hash the password
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user){
        $users = DB::table('t_user')->where('user_id', '=', $user->user_id)->get()[0];

        return view('pages/admin/user/edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user){
        $users = DB::table('t_user')->where('user_id', '=', $user->user_id)->get()[0];

        $validated = $request->validate([
            'username'  => 'required|string|max:100',
            'pwd' => 'required'
        ]);

        // Save to database
        $user = User::where('user_id', $user->user_id)->update([
            'username' => $validated['username'],
            'password' => MD5($validated['pwd']), // hash the password
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user){
        $user = User::findOrFail($user->user_id);
        $user->delete();
    }
}
