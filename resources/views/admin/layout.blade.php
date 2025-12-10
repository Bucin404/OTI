<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard') - OTI</title>
    <link rel="stylesheet" href="{{ asset('css/admin/admin-style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @livewireStyles
</head>
<body class="admin-body">
    <!-- Sidebar -->
    <aside class="admin-sidebar">
        <div class="logo">
            <h2>OTI Admin</h2>
            <span>Dashboard Panel</span>
        </div>
        
        <nav class="admin-nav">
            <a href="{{ route('admin.dashboard') }}" class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <i class='bx bx-home'></i> Dashboard
            </a>
            <a href="{{ route('admin.products.index') }}" class="{{ Request::is('admin/products*') ? 'active' : '' }}">
                <i class='bx bx-package'></i> Products
            </a>
            <a href="{{ route('admin.testimonials.index') }}" class="{{ Request::is('admin/testimonials*') ? 'active' : '' }}">
                <i class='bx bx-star'></i> Testimonials
            </a>
            <a href="{{ route('admin.clients.index') }}" class="{{ Request::is('admin/clients*') ? 'active' : '' }}">
                <i class='bx bx-building'></i> Clients
            </a>
            <a href="{{ route('admin.contacts.index') }}" class="{{ Request::is('admin/contacts') ? 'active' : '' }}">
                <i class='bx bx-envelope'></i> Contacts
            </a>
            <form action="{{ route('admin.logout') }}" method="POST" style="margin-top: 2rem;">
                @csrf
                <button type="submit" style="width: 100%; padding: 12px 20px; background: rgba(239, 68, 68, 0.1); border: none; color: #EF4444; text-align: left; cursor: pointer; border-radius: 8px; font-size: 15px;">
                    <i class='bx bx-log-out'></i> Logout
                </button>
            </form>
        </nav>
    </aside>

    <!-- Main Content -->
    <div class="admin-main">
        <header class="admin-header">
            <h1>@yield('header', 'Dashboard')</h1>
            <div class="admin-user">
                <span>Admin: {{ session('admin_username') }}</span>
                <img src="https://ui-avatars.com/api/?name={{ session('admin_username') }}&background=4F46E5&color=fff" alt="Admin">
            </div>
        </header>

        <div class="admin-content">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            
            @yield('content')
        </div>
    </div>

    @livewireScripts
    @yield('scripts')
</body>
</html>
