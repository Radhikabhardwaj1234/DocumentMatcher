<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form method="POST" action="">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br><br>
        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea>
        <br><br>
        <button type="submit">Send Message</button>
    </form>
    <a href="{{ route('landing') }}">Back to Landing Page</a>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans">

    <!-- Include Navbar -->
    @include('navbar')

    <div class="container mx-auto px-6 py-16">

        <!-- Heading -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-indigo-600">Contact Us</h1>
            <p class="text-lg text-gray-600 mt-2">We would love to hear from you!</p>
        </div>

        <!-- Success Message -->
        @if (session('success'))
            <div class="max-w-xl mx-auto mb-8">
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            </div>
        @endif

        <!-- Contact Form -->
        <div class="max-w-xl mx-auto bg-white rounded-lg shadow-lg p-8">
            <form method="get" action="/contact">
                @csrf

                <div class="mb-6">
                    <label for="name" class="block text-gray-700 font-semibold mb-2">Name:</label>
                    <input type="text" name="name" id="name" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                </div>

                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email:</label>
                    <input type="email" name="email" id="email" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                </div>

                <div class="mb-6">
                    <label for="message" class="block text-gray-700 font-semibold mb-2">Message:</label>
                    <textarea name="message" id="message" rows="5" required
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="bg-indigo-600 text-white font-semibold py-3 px-6 rounded-full hover:bg-indigo-700 transition duration-300">
                        Send Message
                    </button>
                </div>
            </form>
        </div>

        <!-- Back Button -->
        <div class="text-center mt-8">
            <a href="{{ route('landing') }}"
                class="text-indigo-600 hover:text-indigo-800 text-lg font-semibold ">
                ← Back to Home Page
            </a>
        </div>

    </div>

</body>

</html>
