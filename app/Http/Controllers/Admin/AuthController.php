<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Try to find admin user in database
        $admin = Admin::where('username', $request->username)->first();

        if ($admin && $admin->checkPassword($request->password)) {
            session([
                'admin_logged_in' => true, 
                'admin_username' => $admin->username,
                'admin_id' => $admin->id,
                'admin_name' => $admin->name
            ]);
            return redirect()->route('admin.dashboard')->with('success', 'Selamat datang, ' . $admin->name . '!');
        }

        return back()->withErrors(['error' => 'Username atau password salah!'])->withInput();
    }

    public function logout()
    {
        session()->forget(['admin_logged_in', 'admin_username', 'admin_id', 'admin_name']);
        return redirect()->route('admin.login')->with('success', 'Anda telah logout.');
    }
}
