<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br><br>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" required>
        <br><br>

        <button type="submit">Register</button>
    </form>

    <a href="{{ route('login') }}">Already have an account? Login</a>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
       <!-- Navbar (Universal) -->
       @include('navbar');
    <!-- Register Form -->
    <section class="max-w-2xl mx-auto my-12 px-6 py-8 bg-white rounded-lg shadow-lg">
        <h1 class="text-3xl font-semibold text-center text-indigo-600 mb-8">Create Your Account</h1>

        @if ($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-6">
                <label for="name" class="block text-lg font-medium text-gray-700">Name</label>
                <input type="text" name="name" class="w-full p-3 border border-gray-300 rounded-md mt-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-6">
                <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
                <input type="email" name="email" class="w-full p-3 border border-gray-300 rounded-md mt-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-6">
                <label for="password" class="block text-lg font-medium text-gray-700">Password</label>
                <input type="password" name="password" class="w-full p-3 border border-gray-300 rounded-md mt-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <div class="mb-6">
                <label for="password_confirmation" class="block text-lg font-medium text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" class="w-full p-3 border border-gray-300 rounded-md mt-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>

            <button type="submit" class="w-full py-3 bg-indigo-600 text-white text-xl font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Register</button>
        </form>

        <div class="text-center mt-6">
            <p class="text-gray-600">Already have an account? <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-700 font-semibold">Login</a></p>
        </div>
    </section>

</body>

</html>
