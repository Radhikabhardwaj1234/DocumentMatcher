<!-- resources/views/components/navbar.blade.php -->
<nav class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-white shadow-md sticky top-0 z-10 py-6">
    <div class="max-w-7xl mx-auto px-6 py-4">
        <div class="flex justify-between items-center">
            <div class="text-3xl font-semibold">
                <a href="/">Document Matcher</a>
            </div>
            <div class="space-x-6">
                <a href="/documents/compare" class="text-lg text-white hover:text-indigo-200">Match Documents</a>
                
                @if(Auth::check())
                    <a href="{{ route('documents.upload') }}" class="text-lg text-white hover:text-indigo-200">Upload Document</a> 
                 @endif
                @if(Auth::check())
                <a href="{{ route('documents.list') }}" class="text-lg text-white hover:text-indigo-200">My Documents</a>
                 @endif
                 <a href="/about" class="text-lg text-white hover:text-indigo-200">About Us</a>
                 <a href="/contact" class="text-lg text-white hover:text-indigo-200">Contact Us</a>
                 @if(Auth::check())
                 <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                     @csrf
                      <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-full text-lg font-semibold transition duration-300">Logout</button>
                    </form>
                    @else
                    <a href="{{ route('login') }}" class="text-lg text-white hover:text-indigo-200">Login</a>
                    <a href="{{ route('register') }}" class="text-lg text-white bg-indigo-600 hover:bg-indigo-700 py-2 px-4 rounded-full">Register</a>
                    @endif
                   
            </div>
        </div>
    </div>
</nav>