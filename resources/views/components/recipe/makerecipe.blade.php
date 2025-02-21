@props(['catigorys'])
@if ($errors->any())
    <div class="bg-red-500 text-white p-3 rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="max-w-2xl mx-auto">
    <!-- Form Header -->
    <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">
            Create Your Post
        </h2>
        <p class="mt-2 text-gray-600">Share your amazing story with the world</p>
    </div>

    <!-- Main Form -->
    <form class="bg-white backdrop-blur-lg bg-opacity-70 rounded-2xl shadow-xl p-8 space-y-6 border border-gray-200" action="/create/recipe" method="post">
        <!-- Title Input -->
        @csrf
        <div class="space-y-2">
            <label for="title" class="block text-lg font-semibold text-gray-700">
                Title
            </label>
            <input type="text" id="title" name="title" placeholder="Enter a catchy title..."
                class="block w-full px-4 py-3 bg-gradient-to-r from-purple-50 to-pink-50 border border-gray-200 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent text-gray-700 placeholder-gray-400" />
        </div>

        <!-- Category Selection -->
        <div class="space-y-2">
            <label for="category" class="block text-lg font-semibold text-gray-700">
                Category
            </label>
            <div class="relative">
                <select id="category" name="category"
                    class="block w-full px-4 py-3 bg-gradient-to-r from-purple-50 to-pink-50 border border-gray-200 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent appearance-none text-gray-700">
                    <option value="" disabled selected>Select a category ✨</option>
                    @foreach ($catigorys as $catigorie )
                    <option value="{{$catigorie->id}}">{{$catigorie->name}}</option>
                    @endforeach
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="space-y-2">
            <label for="content" class="block text-lg font-semibold text-gray-700">
                Main Content
            </label>
            <div class="relative">
                <textarea id="content" name="content" rows="8" placeholder="Write your full story here..."
                    class="block w-full px-4 py-3 bg-gradient-to-r from-purple-50 to-pink-50 border border-gray-200 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent resize-none text-gray-700 placeholder-gray-400"></textarea>
                <div class="absolute bottom-3 right-3 text-sm text-gray-400" id="contentCount">0 characters</div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex gap-4 pt-4">
            <button type="reset"
                class="flex-1 px-6 py-3 text-sm font-medium text-gray-600 bg-gray-100 rounded-xl hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500 transition-colors duration-200">
                Clear All
            </button>
            <button type="submit"
                class="flex-1 px-6 py-3 text-sm font-medium text-white bg-gradient-to-r from-purple-600 to-pink-600 rounded-xl hover:from-purple-700 hover:to-pink-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transform hover:-translate-y-0.5 transition-all duration-200">
                Publish Post ✨
            </button>
        </div>
    </form>
</div>