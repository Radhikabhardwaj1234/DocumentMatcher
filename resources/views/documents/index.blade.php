<!--  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Documents</title>
</head>
<body>
    <h1>All Uploaded Documents</h1>
    
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($documents as $document)
                <tr>
                    <td>{{ $document->title }}</td>
                    <td>
                        <a href="{{ route('documents.show', $document->id) }}">View</a> |
                        <a href="{{ route('documents.match', $document->id) }}">Find Similar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Documents</title>
</head>
<body>
    <h1>All Uploaded Documents</h1>
    
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($documents as $document)
                <tr>
                    <td>{{ $document->title }}</td>
                    <td>
                        <a href="{{ route('documents.show', $document->id) }}">View</a> |
                        <a href="{{ route('documents.match', $document->id) }}">Find Similar</a> |
                        <form action="{{ route('documents.destroy', $document->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this document?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Documents</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 font-sans">

    <!-- Navbar (Universal) -->
   @include('navbar');

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto py-16 px-6">
        <h1 class="text-4xl font-bold text-center mb-8">All Uploaded Documents</h1>

        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-8">
            <p>{{ session('success') }}</p>
        </div>
        @endif

        @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-8">
            <p>{{ session('error') }}</p>
        </div>
        @endif

        <div class="space-y-4">
            @foreach ($documents as $document)
            <div class="bg-white shadow-lg rounded-lg mb-4">
                <button class="w-full text-left p-4 bg-indigo-600 text-white font-semibold rounded-t-lg" onclick="toggleAccordion('doc-{{ $document->id }}')">
                    {{ $document->title }}
                </button>
                <div id="doc-{{ $document->id }}" class="accordion-content hidden p-4">
                    <div class="flex justify-between">
                        <div class="flex space-x-4">
                            <a href="{{ route('documents.show', $document->id) }}" class="text-indigo-600 hover:text-indigo-800">
                                <i class="fas fa-eye"></i> View
                            </a>
                            <a href="{{ route('documents.match', $document->id) }}" class="text-indigo-600 hover:text-indigo-800">
                                <i class="fas fa-search"></i> Find Similar
                            </a>
                        </div>
                        <form action="{{ route('documents.destroy', $document->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure you want to delete this document?')">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script>
        function toggleAccordion(id) {
            var content = document.getElementById(id);
            content.classList.toggle('hidden');
        }
    </script>

</body>
</html>
