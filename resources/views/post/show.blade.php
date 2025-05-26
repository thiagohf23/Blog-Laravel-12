<x-app-layout>
    <main class="py-9">
        <article class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg dark:bg-gray-800 text-zinc-200 p-9">
                <header>
                    <h1 class="text-5xl font-bold mb-4">{{ $post->title }}</h1>
                    <div class="flex gap-4">
                        <x-user-avatar :user="$post->user" />

                        <div>
                            <x-follow-ctr :user="$post->user" class="flex items-center gap-2">
                                <a href="{{ route('profile.show', $post->user) }}"
                                    class="text-gray-900 dark:text-white hover:underline">
                                    {{ $post->user->name }}
                                </a>

                                @auth
                                    &middot;
                                    <button x-text="following ? 'Unfollow' : 'Follow'"
                                        :class="following ? 'text-red-600' : 'text-emerald-600'" @click="follow()">
                                    </button>

                                @endauth

                            </x-follow-ctr>

                            <div class="flex gap-2 text-sm text-gray-500">
                                {{ $post->readTime() }} min read
                                &middot;
                                <time datetime="{{ $post->created_at->toIso8601String() }}">
                                    {{ $post->created_at->format('F j, Y') }}
                                </time>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <x-clap-button :post="$post" />
                    </div>
                </header>

                <section class="mt-6">
                    {{-- Share Section --}}
                </section>

                <section class="mt-6">
                    <figure>
                        <img src="{{ $post->imageUrl() }}" alt="{{ $post->title }}" class="w-full rounded-sm">
                    </figure>

                    <div class="mt-6 prose prose-lg dark:prose-invert max-w-none">
                        {!! $post->content !!}
                    </div>
                </section>

                <div class="mt-8">
                    <span class="px-4 py-2 bg-gray-200 text-gray-700 rounded-full text-sm">
                        {{ $post->category->name }}

                    </span>
                </div>

                <div>
                    <x-clap-button :post="$post" />
                </div>
            </div>
        </article>
    </main>
</x-app-layout>
