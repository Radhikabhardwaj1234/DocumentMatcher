<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Document</title>
</head>
<body>
    <h1>Upload Document Template</h1>
    
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Document Title:</label>
        <input type="text" name="title" id="title" required>
        <br><br>
        <label for="document">Upload Document:</label>
        <input type="file" name="document" id="document" required>
        <br><br>
        <button type="submit">Upload Document</button>
    </form>

</body>
</html> -->

<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Document</title>
</head>

<body>

    @if(Auth::check())
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @endif

    <h1>Upload Document Template</h1>
    
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Document Title:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <br><br>
        <div>
            <label for="document">Upload Document:</label>
            <input type="file" name="document" id="document" accept=".pdf,.docx,.txt" required>
        </div>
        <br><br>
        <button type="submit">Upload Document</button>
    </form>

</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">

    <!-- Navbar (Universal) -->
    @include('navbar')

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto py-16 px-6">
        <h1 class="text-3xl font-bold text-center mb-8">Upload Document Template</h1>

        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-8">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        <!-- Upload Form -->
        <form action="{{ route('documents.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div>
                <label for="title" class="block text-lg font-medium">Document Title:</label>
                <input type="text" name="title" id="title" class="w-full p-3 mt-2 border border-gray-300 rounded-lg" required>
            </div>
            
            <div>
                <label for="document" class="block text-lg font-medium">Upload Document:</label>
                <input type="file" name="document" id="document" accept=".pdf,.docx,.txt" class="w-full p-3 mt-2 border border-gray-300 rounded-lg" required>
            </div>
            
            <div class="text-center">
                <button type="submit" class="bg-indigo-600 text-white py-3 px-6 rounded-full text-xl hover:bg-indigo-700 transition duration-300">Upload Document</button>
            </div>
        </form>
    </div>
</body>
</html>
