<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br><br>

        <button type="submit">Login</button>
    </form>

    <a href="{{ route('register') }}">Don't have an account? Register</a>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-gray-50">

    <!-- Navbar (Universal) -->
    @include('navbar');

  
    <!-- Login Form -->
<section class="max-w-2xl mx-auto my-20 px-6 py-8 bg-white rounded-lg shadow-lg">
    <h1 class="text-3xl font-semibold text-center text-indigo-600 mb-8">Login to Document Matcher</h1>

    @if ($errors->any())
    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-6">
            <label for="email" class="block text-lg font-medium text-gray-700">Email</label>
            <input type="email" name="email" class="w-full p-3 border border-gray-300 rounded-md mt-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
        </div>

        <div class="mb-6">
            <label for="password" class="block text-lg font-medium text-gray-700">Password</label>
            <input type="password" name="password" class="w-full p-3 border border-gray-300 rounded-md mt-2 focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
        </div>

        <button type="submit" class="w-full py-3 bg-indigo-600 text-white text-xl font-semibold rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">Login</button>
    </form>

    <div class="text-center mt-6">
        <p class="text-gray-600">Don't have an account? <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-700 font-semibold">Register</a></p>
    </div>
</section>

</body>

</html>
