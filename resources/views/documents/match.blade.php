<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Similar Documents for {{ $document->title }}</title>
    <style>
        .progress-bar {
            background-color: #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
            width: 100%;
            height: 20px;
            margin-top: 5px;
        }
        .progress-fill {
            height: 100%;
            text-align: center;
            color: white;
            white-space: nowrap;
            font-size: 12px;
            transition: width 0.5s ease;
        }
        .green {
            background-color: #4caf50;
        }
        .orange {
            background-color: #ff9800;
        }
        .red {
            background-color: #f44336;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Similar Documents to {{ $document->title }}</h1>
    
    @if (count($similarDocuments) > 0)
        <table>
            <thead>
                <tr>
                    <th>Document Title</th>
                    <th>Similarity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($similarDocuments as $item)
                    @php
                        // Access document and similarity separately
                        $similarity = $item['similarity'];
                        $doc = $item['document']; // The document object
                        $colorClass = 'red';
                        
                        // Assign color based on similarity percentage
                        if ($similarity > 80) {
                            $colorClass = 'green';
                        } elseif ($similarity >= 50) {
                            $colorClass = 'orange';
                        }
                    @endphp
                    <tr>
                        <td>{{ $doc->title }}</td>
                        <td>
                            <div class="progress-bar">
                                <div class="progress-fill {{ $colorClass }}" style="width: {{ $similarity }}%;">
                                    {{ $similarity }}%
                                </div>
                            </div>
                        </td>
                        <td><a href="{{ route('documents.show', $doc->id) }}">View</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No similar documents found.</p>
    @endif

    <br><br>
    <a href="{{ route('documents.list') }}">Back to Document List</a>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Similar Documents for {{ $document->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-gray-50">

    <!-- Include Navbar -->
    @include('navbar')

    <!-- Main Content -->
    <div class="container mx-auto py-16 px-6">

        <!-- Page Heading -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-indigo-600">Similar Documents to "{{ $document->title }}"</h1>
            <p class="text-lg text-gray-600 mt-2">Here are the documents similar to the one you selected.</p>
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
                        @foreach ($similarDocuments as $item)
                            @php
                                $similarity = $item['similarity'];
                                $doc = $item['document'];
                                $color = $similarity >= 80 ? '#4caf50' : ($similarity >= 50 ? '#ffc107' : '#f44336');
                            @endphp
                            <tr class="border-b hover:bg-indigo-50">
                                <td class="px-6 py-4 text-gray-800 font-medium">{{ $doc->title }}</td>
                                <td class="px-6 py-4">
                                    <div class="relative w-full h-4 bg-gray-200 rounded-full">
                                        <div class="absolute top-0 left-0 h-full text-xs text-white flex items-center justify-center rounded-full"
                                            style="width: {{ $similarity }}%; background-color: {{ $color }};">
                                            {{ $similarity }}%
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('documents.show', $doc->id) }}" class="text-indigo-600 hover:text-indigo-800 font-medium">
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
                <p class="text-xl text-gray-600">No similar documents found!</p>
            </div>
        @endif

        <!-- Back Button -->
        <div class="text-center mt-8">
            <a href="{{ route('documents.list') }}"
                class="bg-indigo-600 text-white py-3 px-6 rounded-full text-xl hover:bg-indigo-700 transition duration-300">
                Back to Document List
            </a>
        </div>

    </div>

</body>

</html>
