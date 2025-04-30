<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Compare Document</title>
</head>
<body>
    <h1>Upload Document to Find Similar Templates</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('documents.compare.process') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="document">Select Document:</label>
        <input type="file" name="document" id="document" required>
        <br><br>
        <button type="submit">Find Similar Documents</button>
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compare Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-gray-50">

    <!-- Include Navbar -->
    @include('navbar')

    <!-- Main Content -->
    <div class="container mx-auto py-16 px-6">
        <!-- Page Heading -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-indigo-600">Find Similar Documents</h1>
            <p class="text-lg text-gray-600 mt-2">Upload a document and match it against others instantly.</p>
        </div>

        <!-- Error Messages -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 mb-8 rounded-lg shadow-lg">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Section -->
        <div class="max-w-3xl mx-auto bg-white p-10 shadow-2xl rounded-xl">
            <form action="{{ route('documents.compare.process') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-6">
                    <label for="document" class="block text-xl font-semibold text-gray-800 mb-2">Upload Document:</label>
                    <input type="file" name="document" id="document" required class="p-3 border-2 border-gray-300 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-indigo-600 text-white py-3 px-10 rounded-full text-xl hover:bg-indigo-700 transition duration-300 shadow-md">
                        Find Similar Documents
                    </button>
                </div>
            </form>
        </div>
    </div>


</body>

</html>
