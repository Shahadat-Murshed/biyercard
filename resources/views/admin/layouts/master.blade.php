<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>@yield('title') {{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('backend/public') }}/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('backend/public') }}/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/public') }}/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('backend/public') }}/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="{{ asset('backend/public') }}/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- DEMO CHARTS -->
    <link rel="stylesheet" href="{{ asset('backend/public') }}/demo/chartist.css">
    <link rel="stylesheet" href="{{ asset('backend/public') }}/demo/chartist-plugin-tooltip.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('backend/public') }}/graindashboard/css/graindashboard.css">
    @stack('styles')
</head>

<body class="has-sidebar has-fixed-sidebar-and-header">
    <!-- Header -->
    <header class="header bg-body">
        <!-- Navbar -->
        @include('admin.layouts.navbar')
        <!-- Navbar  End-->
    </header>
    <!-- End Header -->

    <main class="main">
        <!-- Sidebar Nav -->
        @include('admin.layouts.sidebar')
        <!-- End Sidebar Nav -->

        <div class="content">
            <div class="py-4 px-3 px-md-4">
                @yield('content')
            </div>

            <!-- Footer -->
            @include('admin.layouts.footer')
            <!-- End Footer -->
        </div>
    </main>

    <!-- Scripts --->
    @include('admin.layouts.scripts')
    <!-- End Scripts --->

</body>

</html>
