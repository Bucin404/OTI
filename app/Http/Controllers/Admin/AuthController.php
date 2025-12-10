<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        // Simple admin credentials (you should use database in production)
        $adminUsername = env('ADMIN_USERNAME', 'admin');
        $adminPassword = env('ADMIN_PASSWORD', 'admin123');

        if ($request->username === $adminUsername && $request->password === $adminPassword) {
            session(['admin_logged_in' => true, 'admin_username' => $request->username]);
            return redirect()->route('admin.dashboard')->with('success', 'Selamat datang, Admin!');
        }

        return back()->withErrors(['error' => 'Username atau password salah!'])->withInput();
    }

    public function logout()
    {
        session()->forget(['admin_logged_in', 'admin_username']);
        return redirect()->route('admin.login')->with('success', 'Anda telah logout.');
    }
}
