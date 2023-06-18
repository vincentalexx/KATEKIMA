<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(){
        return view('user.register');
    }

    // public function logistic() {
    //     // Retrieve products from the database or any other data source
    //     $users = User::all();
    //     // Pass the $products variable to the view
    //     return view('products.logistic', ['users' => $users]);
    // }

    public function logistic(){
        return view('products.logistic');
    }

    public function signin(){
        return view('user.signin');
    }

    public function store(Request $request){
        $password = $_REQUEST['password'];
        $confirm_password = $_REQUEST['confirm_password'];

        if(strcmp($password, $confirm_password) == 0){
            $data = $request->validate([
                'name' => 'required',
                'username' => 'required',
                'email' => 'required',
                'password' => 'required',
                'confirm_password' => 'required',
            ], [
                'name.required' => 'Nama kosong!',
                'username.required' => 'Username kosong!',
                'email.required' => 'Email kosong!',
                'password.required' => 'Password kosong!',
                'confirm_password.required' => 'Re-Password kosong!',
            ]);

            $newUser = User::create($data);

            return redirect(route('user.signin'));
        } else{
            return redirect(route('user.register'))->withErrors('Password atau re-password tidak valid!');
        }
    }
    
    public function storeSignin(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => 'Username kosong!',
            'password.required' => 'Password kosong!',
        ]);

        $signin = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if(Auth::attempt($signin)){
            return redirect(route('product.logistic'));
        }
        else{
            return redirect(route('user.signin'))->withErrors('Username atau password tidak valid!');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('user.signin');
    }
}
