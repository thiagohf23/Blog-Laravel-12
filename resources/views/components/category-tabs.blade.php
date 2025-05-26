<div
    class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px justify-center">
        <li class="me-2">
            <a href="/"
                class="{{ request('category')
                    ? 'inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300'
                    : 'inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500' }}">
                All
            </a>
        </li>
        @forelse ($categories as $category)
            <li class="me-2">
                <a href="{{ route('post.byCategory', $category) }}"
                    class="{{ Route::currentRouteNamed('post.byCategory') && request('category')->id == $category->id
                        ? 'inline-block p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500'
                        : 'inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300' }}">
                    {{ $category->name }}
                </a>
            </li>
        @empty
            {{ $slot }}
        @endforelse
    </ul>
</div>
