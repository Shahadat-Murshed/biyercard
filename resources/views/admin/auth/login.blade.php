{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <h1>Admin Login</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>Login | {{ config('app.name', 'Laravel') }}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('backend/public') }}/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('backend/public') }}/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/public') }}/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('backend/public') }}/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="{{ asset('backend/public') }}/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Template -->
    <link rel="stylesheet" href="{{ asset('backend/public') }}/graindashboard/css/graindashboard.css">
</head>

<body class="">

    <main class="main">

        <div class="content">

            <div class="container-fluid pb-5">

                <div class="row align-items-center justify-content-md-center">
                    <div class="card-wrapper col-12 col-md-4 mt-5">
                        <div class="brand text-center mb-3">
                            <a href="/"><img src="public/img/logo.png"></a>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Login</h4>
                                <form>
                                    <div class="form-group">
                                        <label for="email">E-Mail Address</label>
                                        <input id="email" type="email" class="form-control" name="email" required=""
                                            autofocus="">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password
                                        </label>
                                        <input id="password" type="password" class="form-control" name="password" required="">
                                        <div class="text-right">
                                            <a href="password-reset.html" class="small">
                                                Forgot Your Password?
                                            </a>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-check position-relative mb-2">
                                            <input type="checkbox" class="form-check-input d-none" id="remember" name="remember">
                                            <label class="checkbox checkbox-xxs form-check-label ml-1" for="remember"
                                                data-icon="&#xe936">Remember Me</label>
                                        </div>
                                    </div>

                                    <div class="form-group no-margin">
                                        <a href="/index.html" class="btn btn-primary btn-block">
                                            Sign In
                                        </a>
                                    </div>
                                    <div class="text-center mt-3 small">
                                        Don't have an account? <a href="register.html">Sign Up</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <footer class="footer mt-3">
                            <div class="container-fluid">
                                <div class="footer-content text-center small">
                                    <span class="text-muted">&copy; 2019 Graindashboard. All Rights Reserved.</span>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>

            </div>

        </div>
    </main>

    <script src="public/graindashboard/js/graindashboard.js"></script>
    <script src="public/graindashboard/js/graindashboard.vendor.js"></script>
</body>

</html>
