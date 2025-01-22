<x-layout>
    <section class="py-8">
        <div class="container mx-auto px-6">
            <h1 class="text-3xl font-bold mb-4">{{ $pesawat['name'] }}</h1>
            <img src="{{ $pesawat['image'] }}" alt="{{ $pesawat['name'] }}" class="w-full max-w-md mx-auto mb-6">
            <p class="text-lg">{{ $pesawat['description'] }}</p>
            <a href="/" class="mt-4 inline-block bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Kembali</a>
        </div>
    </section>
    <x-footer></x-footer>
</x-layout>
