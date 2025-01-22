<x-layout>
    <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $blog['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $blog['author'] }}</a> {{ $blog['date'] }}
        </div>
        <p class="my-4 font-light">{{ $blog['body'] }}</p>
        <a href="/blogs" class="font-medium text-indigo-600 hover:underline">&laquo; Back to blogs
        </a>
    </article>
</x-layout>
