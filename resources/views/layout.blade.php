<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    @vite('resources/css/app.css') <!-- Link to Tailwind or other CSS -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">
</head>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <!-- Navbar -->
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center mx-6">
                @auth
                <span class="text-xs font-bold uppercase">Welcome Back, {{ auth()->user()->name }}</span>
                @if (auth()->user()->username === 'admin')
                <a href="admin/posts/create" class="ml-4">New Post</a>
                @endif

                <!-- Logout functionality -->
                <form method="POST" action="/logout" class="ml-4">
                    @csrf
                    <button type="submit" class="font-semibold">Log Out</button>
                </form>
                @else
                <a href="/register" class="text-xs font-bold uppercase">Register</a>
                @endauth

                <a href="#newsletter"
                    class="bg-blue-500 ml-4 rounded-full text-xs font-semibold text-white uppercase py-2 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>

        <!-- Dynamic content -->
        @yield('banner')
        @yield('content')

        <!-- Footer -->
        <footer class="mt-16">
            <!-- Footer content here -->
        </footer>
    </section>

    <!-- Success Message -->
    @if (session()->has('success'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)"
        class="fixed right-0 bg-blue-500 text-white text-sm py-2 px-4 rounded-xl bottom-3 right-3" x-show="show">
        <p>{{ session('success') }}</p>
    </div>
    @endif
</body>

</html>
