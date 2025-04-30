<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $document->title }}</title>
</head>
<body>
    <h1>{{ $document->title }}</h1>
    <p><strong>Content:</strong></p>
    <pre>{{ $document->content }}</pre> 
    <p><a href="{{ asset('storage/'.$document->file_path) }}" download>Download Document</a></p> <!-- Link to download original documen
    <br><br>
    <a href="{{ route('documents.list') }}">Back to Document List</a>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $document->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans">

    <!-- Include Navbar -->
    @include('navbar')

    <div class="container mx-auto px-6 py-16">

        <!-- Heading -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-indigo-600">{{ $document->title }}</h1>
        </div>

        <!-- Content Section -->
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8">

            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Content:</h2>

            <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto text-gray-700 mb-6 whitespace-pre-wrap">{{ $document->content }}</pre>

            <!-- Download Button -->
            <div class="text-center mb-6">
                <a href="{{ asset('storage/' . $document->file_path) }}" download
                    class="bg-indigo-600 text-white py-3 px-6 rounded-full text-xl hover:bg-indigo-700 transition duration-300 inline-block">
                    Download Document
                </a>
            </div>

            <!-- Back Button -->
            <div class="text-center">
            @if(Auth::check())
            <a href="{{ route('documents.list') }}" class="text-indigo-600 hover:text-indigo-800 text-lg font-semibold">
                ← Back to Document List
            </a>
            @else
            <a href="{{ route('documents.compare.process') }}" class="text-indigo-600 hover:text-indigo-800 text-lg font-semibold">
                ← Back to Match Documents
            </a>
            @endif

            </div>

        </div>

    </div>

</body>

</html>
