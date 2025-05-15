<div>
    <article class="rounded-[10px] border border-gray-200 bg-white px-4 py-4 mb-6 dark:border-gray-700 dark:bg-gray-900">
        <!-- Layout com grid para posicionar conteúdo à esquerda e imagem à direita -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Conteúdo à esquerda (2/3 do espaço) -->
            <div class="md:col-span-2 flex flex-col justify-between">
                <div>
                    <time class="block text-xs text-gray-500 dark:text-gray-400">
                        Published
                        <span class="font-medium text-gray-900 dark:text-white">
                            {{ $post->created_at->diffForHumans() }}
                        </span>
                    </time>

                    <a href="#">
                        <h3 class="mt-1 text-xl font-medium text-gray-900 dark:text-white">
                            {{ $post->title }}
                        </h3>
                    </a>

                    <!-- Conteúdo do artigo -->
                    <p class="mt-3 text-sm text-gray-600 dark:text-gray-300 line-clamp-3">
                        {{ Str::words($post->content, 50) }}
                    </p>
                </div>

                <!-- Botão Read More -->
                <div class="mt-4">
                    <a href="#"
                        class="inline-flex items-center justify-center gap-2 rounded-full bg-purple-600 px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 dark:bg-purple-700 dark:hover:bg-purple-800 dark:focus:ring-purple-600">
                        Read More
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Imagem à direita (1/3 do espaço) -->
            <div class="md:col-span-1 order-first md:order-last">
                <div class="overflow-hidden rounded-lg aspect-video">
                    <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}"
                        class="w-full h-auto object-contain" />
                </div>
            </div>
        </div>
    </article>
</div>
