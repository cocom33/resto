<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('name', 'like', '%'.request('name').'%')->paginate(10);

        return view('pages.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['model'] = null;
        $data['route'] = route('user.store');

        return view('pages.user.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'role' => 'required|in:admin,user,staff',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('user.index')->with('success', 'User updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['model'] = User::find($id);
        $data['route'] = route('user.update', $data['model']->id);

        return view('pages.user.form', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $request->validate([
            'name' => 'required|min:3',
            'role' => 'required|in:admin,user,staff',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'nullable|confirmed|min:8',
        ]);

        $user->name = $request->name;
        $user->role = $request->role;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('user.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with('success', 'User Deleted Successfully');
    }
}
