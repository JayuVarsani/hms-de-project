<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <div class="logo">
                <i class="fas fa-hospital"></i>
                <span>Hospital Management</span>
            </div>
            <nav class="nav-links">
                <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
                <a href="{{ route('patients') }}" class="nav-link {{ request()->routeIs('patients*') ? 'active' : '' }}">
                    <i class="fas fa-user"></i>
                    <span>Patients</span>
                </a>
                <a href="{{ route('doctors') }}" class="nav-link {{ request()->routeIs('doctors*') ? 'active' : '' }}">
                    <i class="fas fa-user-md"></i>
                    <span>Doctors</span>
                </a>
                <a href="{{ route('appointments') }}" class="nav-link {{ request()->routeIs('appointments*') ? 'active' : '' }}">
                    <i class="fas fa-calendar-check"></i>
                    <span>Appointments</span>
                </a>
            </nav>
        </div>
    </header>

    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

