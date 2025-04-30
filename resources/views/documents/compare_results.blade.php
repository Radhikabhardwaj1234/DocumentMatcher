<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comparison Results</title>
    <style>
        .progress {
            width: 100%;
            background-color: #eee;
            border-radius: 10px;
            overflow: hidden;
            height: 20px;
            margin-top: 5px;
        }
        .progress-bar {
            height: 100%;
            text-align: center;
            color: white;
            line-height: 20px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <h1>Comparison Results</h1>

    @if (count($similarDocuments) > 0)
        <table border="1" cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>Document Title</th>
                    <th>Similarity (%)</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($similarDocuments as $result)
                    <tr>
                        <td>{{ $result['document']->title }}</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" style="width: {{ $result['similarity'] }}%; background-color: {{ $result['similarity'] >= 80 ? '#4caf50' : ($result['similarity'] >= 50 ? '#ffc107' : '#f44336') }}">
                                    {{ $result['similarity'] }}%
                                </div>
                            </div>
                        </td>
                        <td><a href="{{ route('documents.show', $result['document']->id) }}">View</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No similar documents found!</p>
    @endif

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Results</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-gray-50">

    <!-- Include Navbar -->
    @include('navbar')

    <!-- Main Content -->
    <div class="container mx-auto py-16 px-6">

        <!-- Page Heading -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-indigo-600">Comparison Results</h1>
            <p class="text-lg text-gray-600 mt-2">Here are the documents similar to the one you uploaded.</p>
        </div>

        <!-- Results Table -->
        @if (count($similarDocuments) > 0)
            <div class="overflow-x-auto bg-white rounded-lg shadow-lg">
                <table class="min-w-full table-auto border-collapse">
                    <thead>
                        <tr class="bg-indigo-600 text-white text-lg">
                            <th class="px-6 py-4 text-left">Document Title</th>
                            <th class="px-6 py-4 text-left">Similarity (%)</th>
                            <th class="px-6 py-4 text-left">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($similarDocuments as $result)
                            <tr class="border-b hover:bg-indigo-50">
                                <td class="px-6 py-4 text-gray-800 font-medium">{{ $result['document']->title }}</td>
                                <td class="px-6 py-4">
                                    <div class="relative w-full h-4 rounded-full">
                                        <div class="progress-bar absolute top-0 left-0 h-full text-xs text-white flex items-center justify-center rounded-full"
                                             style="width: {{ $result['similarity'] }}%; background-color: {{ $result['similarity'] >= 80 ? '#4caf50' : ($result['similarity'] >= 50 ? '#ffc107' : '#f44336') }}">
                                            {{ $result['similarity'] }}%
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('documents.show', $result['document']->id) }}" class="text-indigo-600 hover:text-indigo-800 font-medium">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                                        </svg> View
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center mt-8">
                <h3> <p class="text-xl text-gray-600">No similar documents found!</p>
            </div>
        @endif
    </div>
    <div class="text-center mt-8">
    <a href="{{ route('documents.compare.form') }}"
        class="bg-indigo-600 text-white py-3 px-6 rounded-full text-xl hover:bg-indigo-700 transition duration-300">
        Back to Compare
    </a>
</div>
</body>

</html>
