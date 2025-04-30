<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
<body>
    <h1>About Us</h1>
    <p>We are a company that specializes in document management and template matching solutions. Our goal is to make document management easier and more efficient for businesses and individuals.</p>
    <a href="{{ route('landing') }}">Back to Landing Page</a>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
        @include('navbar');
        
    <!-- About Us Section -->
    <section class="max-w-4xl mx-auto my-12 px-6 py-8 bg-white rounded-lg shadow-lg">
        <h1 class="text-4xl font-semibold text-center text-indigo-600 mb-8">About Us</h1>

        <div class="mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Mission</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                At Document Matcher, we aim to simplify and accelerate document management by providing cutting-edge
                tools that allow users to easily compare and find similar documents. Whether it's for research, business, or
                legal purposes, we offer a powerful platform to enhance productivity and save time.
            </p>
        </div>

        <div class="mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Vision</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                We envision a world where users can instantly find the information they need from any document. Our goal is
                to be the go-to tool for document comparison and matching, empowering users across various industries.
            </p>
        </div>

        <div class="mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Our Values</h2>
            <ul class="list-disc list-inside text-lg text-gray-700">
                <li>Innovation - We continuously improve our technology to offer better results.</li>
                <li>Integrity - We maintain transparency and honesty in our services.</li>
                <li>Customer-centric - Our solutions are designed to help our users succeed.</li>
                <li>Efficiency - We prioritize speed and simplicity in everything we do.</li>
            </ul>
        </div>

        <div class="text-center mt-8">
            <p class="text-gray-600">Want to learn more about our team and services? Feel free to <a href="/contact"
                    class="text-indigo-600 hover:text-indigo-700 font-semibold">contact us</a> today!</p>
        </div>
    </section>

</body>

</html>
