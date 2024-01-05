<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255',
            'level' => 'required', // Assuming 'level' is required
        ]);

        // Check if 'level' is present in the request before accessing it
        $validatedData['level'] = $request->has('level') ? $request->input('level') : null;

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);

        $success['token'] = $user->createToken('authToken')->plainTextToken;
        $success['name'] = $user->name;

        // Return a JSON response instead of redirecting
        // return response()->json(['success' => $success, 'message' => 'Registration successful. Please login!']);
        return redirect('/login')->with('success', "Registration successfull, Please login!");
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'zipcode' => 'required',
            // 'new_password' => ['nullable', 'string'],
            'password' => 'required',
            'username' => 'required'
        ]);
        // if ($validatedData['new_password'] != null) {
        //     if (Hash::check($validatedData['new_password'], auth()->user()->password)) {
        //         $validatedData['password'] = auth()->user()->password;
        //     } else {
        //         $validatedData['password'] = Hash::make($validatedData['new_password']);
        //         $validatedData['new_password'] = $validatedData['password'];
        //     }
        // }

        user::where('id', $id)->update($validatedData);
        return redirect("/profile")->with('success', 'User details has been changed');
    }
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect("/dashboard/user")->with('success', 'user has been delete');
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255',
        ]);
        $validatedData['level'] = $request['level'];
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/dashboard/user')->with('success', "Success Create User!");
    }
}
