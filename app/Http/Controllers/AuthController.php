<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    private $errMes = [
        'email.required' => 'Email không được để trống',
        'password.required' => 'Password không được để trống',
//        'email.email:rfc,dns'
        'email.email' => 'Email không đúng định dạng',
    ];

    private $errMes2 = [
        'email.required' => 'Email không được để trống',
        'password.required' => 'Password không được để trống',
        'email.email' => 'Email không đúng định dạng',
        're_password.same' => 'Bạn phải nhập lại đúng password',
        're_password.required' => 'Bạn hãy nhập lại password',
        'name.required' => 'Tên không được để trống'
    ];

    public function login(Request $request){
        $data = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ], $this->errMes);

        $dataLogin = $request->only('email','password');

        if (Auth::attempt($dataLogin)){
            return redirect()->route('index')->with('msg','Đăng nhập thành công.');
        } else {
            $mes = "Đăng nhập không thành công";
            return view('authentication.login', compact('mes'));
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('welcome');
    }

    public function register(Request $request){
        $data = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
            're_password' => 'required|same:password',
            'name' => 'required'
        ], $this->errMes2);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        $user = new User();
        $user->fill($data);
        $user->save();

        return redirect()->route('login');
    }
}
