<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function checklogin(Request $request)
    {
       $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required',
       ]);
        // Kiểm tra thông tin đăng nhập
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();

            // Kiểm tra userstype
            if ($user->userstype === 'admin') {
                return redirect()->route('Trangchuql'); // Đường dẫn cho trang admin
            } elseif ($user->userstype === 'user') {
                return redirect()->route('Trangchu'); // Đường dẫn cho trang người dùng
            }
        }

        // Nếu không xác thực thành công
        return redirect()->route('login')->with('error', 'Bạn nhập sai mật khẩu hoặc tài khoản!');
    }

    public function Trangchu()
    {
        return view('Trangchu');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Tạo người dùng mới
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Đăng ký thành công!');
    }

    public function logout(Request $request)
    {
        Auth::logout(); 
        
        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 

        return redirect()->route('index'); 
    }

    public function Trangchuql(){
        return view('Trangchuql');
    }

    public function create(){
        return view('Dangki');
    }

}
