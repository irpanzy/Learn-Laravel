<x-layout>

    <!-- Hero Section -->
    <section class="relative bg-cover bg-center h-[91vh]" style="background-image: url('{{ asset('img/image-1.png') }}')">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <h1 class="text-white text-3xl sm:text-4xl lg:text-5xl font-bold text-center px-4">Welcome to Departemen
                Spirit</h1>
        </div>
    </section>


    <!-- Komponen Section -->
    <section class="py-8">
        <div class="container mx-auto px-20">
            <h2 class="text-2xl font-semibold text-center mb-8">Komponen</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Komponen A321 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <a href="{{ route('pesawat.show', 'a321') }}">
                        <img src="{{ asset('img/image-2.png') }}" alt="A321" class="w-full h-64 object-cover">
                        <div class="p-4 text-center">
                            <h3 class="font-medium text-lg">A321</h3>
                        </div>
                    </a>
                </div>


                <!-- Komponen A350 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <a href="{{ route('pesawat.show', 'a350') }}">
                        <img src="{{ asset('img/image-3.png') }}" alt="A350" class="w-full h-64 object-cover">
                        <div class="p-4 text-center">
                            <h3 class="font-medium text-lg">A350</h3>
                        </div>
                    </a>
                </div>
                

                <!-- Komponen A380 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <a href="{{ route('pesawat.show', 'a380') }}">
                        <img src="{{ asset('img/image-4.png') }}" alt="A380" class="w-full h-64 object-cover">
                        <div class="p-4 text-center">
                            <h3 class="font-medium text-lg">A380</h3>
                        </div>
                    </a>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Footer -->
    <x-footer></x-footer>
</x-layout>
