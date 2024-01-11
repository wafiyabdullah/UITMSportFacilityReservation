<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            // If the user is already logged in, redirect to the reservation page or any other page you prefer
            return redirect('reservation');
        }
        return view('auth.login');
    }
    public function customLogin(Request $request)
    {
        $request->validate([
            'studentemail' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('studentemail', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('reservation');
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }
    public function registration()
    {
        return view('auth.register');
    }
    public function customRegistration(Request $request)
    {
        $request->validate([
            'studentname' => 'required',
            'studentemail' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect("login")->withSuccess('You successful registered');
    }
    public function create(array $data)
    {
        return User::create([
            'studentname' => $data['studentname'],
            'studentemail' => $data['studentemail'],
            'password' => Hash::make($data['password'])
        ]);
    }
    public function reservation()
    {
        if (Auth::check()) {
            return view('auth.reservation');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
    

}