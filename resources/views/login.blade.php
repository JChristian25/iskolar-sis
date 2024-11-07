<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISKOLAR-SIS | Login</title>

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Scripts -->
    <script src="/assets/jquery.js"></script>
    <script src="/assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <!-- Stylesheets -->
    <link rel="stylesheet" href="/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">

</head>
<body class="bg-slate-200">

    <div class="min-h-screen flex flex-col items-center justify-center px-4">
    <!-- Logo -->
    <div class="mb-8">
        <span class="text-2xl font-bold text-indigo-600">ISKOLAR-SIS</span>
    </div>

    <!-- Sign in container -->
    <div class="w-full max-w-md">
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Sign in to your account</h1>

        <form>
            <!-- Email field -->
            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-900 mb-2">
                    Email address
                </label>
                <input
                    type="email"
                    id="email"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                    required
                >
            </div>

            <!-- Password field -->
            <div class="mb-6">
                <div class="flex justify-between items-center mb-2">
                    <label for="password" class="block text-sm font-medium text-gray-900">
                        Password
                    </label>
                    <a href="#" class="text-sm text-indigo-600 hover:text-indigo-500">
                        Forgot password?
                    </a>
                </div>
                <input
                    type="password"
                    id="password"
                    class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                    required
                >
            </div>

            <!-- Sign in button -->
            <button
                type="submit"
                class="w-full bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
                Sign in
            </button>
        </form>
    </div>
</div>

    <script>
        $(document).ready(function() {
            $('#login').on('click', function() {  
                window.location.href = "{{route('students.index')}}";
            });
        });
    </script>
</body>
</html>