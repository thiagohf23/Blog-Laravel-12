<div>
    <article class="rounded-[10px] border border-gray-200 bg-white px-4 py-4 mb-6 dark:border-gray-700 dark:bg-gray-900">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="md:col-span-2 flex flex-col justify-between">
                <div>
                    <time class="block text-xs text-gray-500 dark:text-gray-400">
                        Published
                        <span class="font-medium text-gray-900 dark:text-white">
                            {{ $post->created_at->diffForHumans() }}
                        </span>
                    </time>

                    <a href="{{ route('post.show', ['username' => $post->user->username, 'post' => $post->slug]) }}"
                        class="group" aria-label="Read article: {{ $post->title }}">
                        <h3
                            class="text-xl font-semibold text-gray-900 group-hover:text-purple-600 transition-colors dark:text-white dark:group-hover:text-purple-400">
                            {{ $post->title }}
                        </h3>
                    </a>

                    <!-- Article content -->
                    <p class="mt-3 text-sm text-gray-600 dark:text-gray-300 line-clamp-3">
                        {{ Str::words($post->content, 50) }}
                    </p>
                </div>

                <!-- Read More button -->
                <div class="mt-4">
                    <a href="{{ route('post.show', ['username' => $post->user->username, 'post' => $post->slug]) }}"
                        class="inline-flex items-center justify-center gap-2 rounded-full bg-purple-600 px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 dark:bg-purple-700 dark:hover:bg-purple-800 dark:focus:ring-purple-600">
                        Read More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Image on the right (1/3 of space) -->
            <div class="md:col-span-1 order-first md:order-last">
                <div class="overflow-hidden rounded-lg aspect-video">
                    <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}"
                        class="w-full h-auto object-contain" />
                </div>
            </div>
        </div>
    </article>
</div>
