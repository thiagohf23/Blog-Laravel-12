<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-category-tabs />
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg dark:bg-gray-800">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                @forelse ($posts as $post)
                    <x-post-item :post="$post" />
                @empty
                    <div class="text-center py-8">
                        <p class="text-xl font-semibold text-gray-700 dark:text-gray-300">Posts not found 👻</p>
                    </div>
                @endforelse
            </div>
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ $posts->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
