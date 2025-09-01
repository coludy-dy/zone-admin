<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobile Zone| Admin</title>
    @vite(['resources/css/app.css','resources/css/admin.css','resources/css/style.css','resources/js/app.js'])
   <style>
        body {
            background-color: #bff5c2;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 250px;
            background-color:#198754;
            color: white;
            z-index: 1030; /* higher than navbar default */
        }
        .sidebar .nav-link {
            color: #cfd8dc;
        }
        /* Strongly override Bootstrap's active link */
        .sidebar .nav-link.active,
        .sidebar .nav-link.active:focus,
        .sidebar .nav-link.active:hover {
            background-color: #9ae6ab !important; /* bright green */
            color: black !important;
            font-weight: bold;
        }
        .navbar-custom {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            z-index: 1020;
            position: fixed;
            top: 0;
            left: 0;        /* <-- FIX: start at left edge of screen */
            right: 0;
            height: 60px;
            width: 100%;    /* <-- ensure full width */
        }
        .main-content {
            margin-left: 250px;
            padding-top: 70px;
        }
        .navbar-nav .nav-item .badge {
            font-size: 0.6rem;
            padding: 4px 6px;
            border-radius: 50%;
            position: absolute;
            top: 0;
            right: -4px;
            transform: translate(50%, -50%);
        }
        

        /* Mobile View */
        @media (max-width: 768px) {
            .sidebar {
                left: -250px;
                transition: all 0.3s;
            }
            .sidebar.active {
                left: 0;
            }
            .navbar-custom {
                left: 0;
            }
            .main-content {
                margin-left: 0;
            }
            .navbar-nav .nav-item .nav-link i {
                font-size: 1rem;
            }
        }

        .toast-container {
            position: fixed;
            top: 1rem;
            right: 1rem;
            z-index: 1055;
        }

        .toast {
            display: flex;
            align-items: center;
            width: 50px;
            margin-top: 10px;
            padding: 4px 6px;
            border-radius: 8px;
            color: #fff;
            font-weight: 500;
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
            opacity: 0;
            transform: translateY(20px);
            animation: slideIn 0.5s forwards, fadeOut 0.5s 6s forwards;
        }

        .toast-success { background: #28a745; } /* green */
        .toast-error { background: #dc3545; }   /* red */

        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeOut {
            to {
                opacity: 0;
                transform: translateY(20px);
            }
        }
    </style>
</head>
<body>
    @include('layouts.sidebar')
    @include('layouts.navbar')
    @include('layouts.message')

    <div class="main-content p-4">
        @yield('content')
    </div>
    @stack('scripts') 
</body>
</html>