<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>
    <h1>Welcome to the Document Matcher</h1>
    <nav>
        <ul>
            <li><a href="{{ route('documents.upload') }}">Upload Document</a></li>
            <li><a href="{{ route('documents.compare.form') }}">Compare Documents</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
            <li><a href="{{ route('login') }}">Login</a> | <a href="{{ route('register') }}">Register</a></li>
        </ul>
    </nav>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Document Matcher</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-gray-50">

    <!-- Navbar -->
<!-- Navbar (Universal) -->
    @include('navbar')
0
<!-- Hero Section (Full Screen) -->
<section class="relative bg-white text-indigo-600 h-screen flex flex-col justify-center items-center">
    <div class="text-center">
        <h1 class="text-5xl font-extrabold mb-6">Find and Match Documents Instantly</h1>
        <p class="text-lg mb-8">Easily compare and find similar documents in seconds. Upload and match documents with advanced algorithms.</p>
        <a href="documents/compare" class="bg-indigo-600 text-white py-3 px-8 rounded-full text-xl hover:bg-indigo-700">Match Documents</a>
    </div>
</section>


    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 text-center">
        <p>&copy; 2025 Document Matcher. All rights reserved.</p>
    </footer>

</body>

</html>
