<x-layout>
    @foreach ($blogs as $blog)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/blogs/{{ $blog['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $blog['title'] }}</h2>
            </a>
            <div class="text-base text-gray-500">
                <a href="#">{{ $blog['author'] }}</a> | {{ $blog['date'] }}
            </div>
            <p class="my-4 font-light">{{ Str::limit($blog['body'], 100) }}</p>
            <a href="/blogs/{{ $blog['slug'] }}" class="font-medium text-indigo-600 hover:underline">Read more
                &raquo;</a>
        </article>
    @endforeach
</x-layout>
