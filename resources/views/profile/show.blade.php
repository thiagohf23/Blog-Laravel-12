<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 p-4 sm:p-8">
                    <!-- Posts here -->
                    <div class="lg:col-span-3 lg:order-1">
                        <h1 class="text-5xl font-bold pb-4 text-gray-900 dark:text-gray-100">{{ $user->name }}</h1>
                        <div class="space-y-4">
                            @forelse ($posts as $post)
                                <x-post-item :post="$post" />
                            @empty
                                <div class="text-center py-8">
                                    <p class="text-xl font-semibold text-gray-700 dark:text-gray-300">Posts not found 👻
                                    </p>
                                </div>
                            @endforelse
                        </div>
                    </div>

                    <div class="lg:col-span-1 lg:order-2 flex items-center mt-4">
                        <x-follow-ctr :user="$user">
                            <x-user-avatar :user="$user" size="w-48 h-48" class="mx-auto" />
                            <h3 class="mt-4 text-xl font-semibold text-gray-900 dark:text-gray-100">{{ $user->name }}
                            </h3>
                            <p class="text-gray-500 dark:text-gray-400">
                                <span x-text="followersCount"></span> followers
                            </p>
                            <p class="text-center text-gray-700 dark:text-gray-300 mt-2">{{ $user->bio }}</p>
                            @if (auth()->check() && auth()->user()->id !== $user->id)
                                <button @click="follow()" class="mt-4 text-white font-bold py-2 px-4 rounded-full"
                                    :class="{
                                        'bg-blue-500 hover:bg-blue-700': !following,
                                        'bg-red-500 hover:bg-red-700': following
                                    }"
                                    x-text="following ? 'Unfollow' : 'Follow'">
                                </button>
                            @endif
                        </x-follow-ctr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
