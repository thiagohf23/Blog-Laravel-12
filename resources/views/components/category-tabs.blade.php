<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg dark:bg-gray-800">
    <div
        class="p-6 text-sm font-medium text-center text-gray-500 border-gray-200 dark:text-gray-400 dark:border-gray-700">
        <div class="grid grid-flow-col auto-cols-fr gap-1">
            <div>
                <a href="{{ route('dashboard') }}"
                    class="flex items-center justify-center p-4 w-full h-full {{ !request()->has('category') ? 'text-blue-600 border-b-2 border-blue-600 rounded-t-lg dark:text-blue-500 dark:border-blue-500' : 'border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300' }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                    <span class="truncate">All</span>
                </a>
            </div>

            @foreach ($categories as $category)
                <div>
                    <a href="{{ route('dashboard', ['category' => $category->id]) }}"
                        class="flex items-center justify-center p-4 w-full h-full {{ request()->has('category') && request('category') == $category->id ? 'text-blue-600 border-b-2 border-blue-600 rounded-t-lg dark:text-blue-500 dark:border-blue-500' : 'border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300' }}">
                        @if ($category->icon)
                            <i class="{{ $category->icon }} h-5 w-5 mr-2"></i>
                        @endif
                        <span class="truncate">{{ $category->name }}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
