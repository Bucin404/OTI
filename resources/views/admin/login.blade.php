<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - OTI</title>
    <link rel="stylesheet" href="{{ asset('css/admin/admin-style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="admin-body">
    <div class="login-container">
        <div class="login-box">
            <div style="text-align: center; margin-bottom: 30px;">
                <h2 style="color: #4F46E5; margin-bottom: 5px;">OTI Admin</h2>
                <p style="color: #6B7280;">Masuk ke Dashboard</p>
            </div>

            @if($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.login.post') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" value="{{ old('username') }}" required autofocus>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 10px;">
                    <i class='bx bx-log-in'></i> Login
                </button>
            </form>

            <div style="margin-top: 20px; padding: 15px; background: #F3F4F6; border-radius: 8px;">
                <p style="text-align: center; color: #6B7280; font-size: 13px; margin-bottom: 8px;">
                    <strong>Default Admin Accounts:</strong>
                </p>
                <p style="text-align: center; color: #374151; font-size: 12px; line-height: 1.6;">
                    <strong>admin</strong> / admin123<br>
                    <strong>oti_admin</strong> / OTI@2025
                </p>
                <p style="text-align: center; color: #9CA3AF; font-size: 11px; margin-top: 8px;">
                    Run: <code>php artisan db:seed --class=AdminSeeder</code>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
