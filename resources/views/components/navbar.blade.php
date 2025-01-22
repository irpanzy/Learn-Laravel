<nav class="sticky top-0 z-50 bg-blue-200 transition-opacity duration-500" x-data="{ isScrolling: false, scrollTimeout: null }" x-init="$watch('isScrolling', (value) => {
    if (value) {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => isScrolling = false, 200);
    }
})"
    x-bind:class="{ 'opacity-50': isScrolling, 'opacity-100': !isScrolling }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <img class="size-8" src="{{ asset('img/muria-cell.png') }}" alt="Logo Image">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <x-nav-link href="/" :active="request()->is('/')"
                            class="text-gray-800 hover:bg-blue-800 hover:text-white rounded-md px-3 py-2 text-base">BERANDA</x-nav-link>
                        <x-nav-link href="/blogs" :active="request()->is('blogs')"
                            class="text-gray-800 hover:bg-blue-800 hover:text-white rounded-md px-3 py-2 text-base">TENTANG
                            KAMI</x-nav-link>
                        <x-nav-link href="/galeri" :active="request()->is('galeri')"
                            class="text-gray-800 hover:bg-blue-800 hover:text-white rounded-md px-3 py-2 text-base">GALERI</x-nav-link>
                        <x-nav-link href="/informasi" :active="request()->is('informasi')"
                            class="text-gray-800 hover:bg-blue-800 hover:text-white rounded-md px-3 py-2 text-base">INFORMASI</x-nav-link>
                        <x-nav-link href="/status-produksi" :active="request()->is('status-produksi')"
                            class="text-gray-800 hover:bg-blue-800 hover:text-white rounded-md px-3 py-2 text-base">STATUS
                            PRODUKSI</x-nav-link>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button type="button"
                                class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-200">
                                <img class="size-11 rounded-full" src="{{ asset('img/profile-irpan.jpeg') }}"
                                    alt="Profile Image">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-black-400 hover:bg-blue-800 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-200">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <x-nav-link href="/" :active="request()->is('/')"
                class="text-gray-800 hover:bg-blue-800 hover:text-white rounded-md px-3 py-2 text-base">BERANDA</x-nav-link>
            <x-nav-link href="/blogs" :active="request()->is('blogs')"
                class="text-gray-800 hover:bg-blue-800 hover:text-white rounded-md px-3 py-2 text-base">TENTANG
                KAMI</x-nav-link>
            <x-nav-link href="/galeri" :active="request()->is('galeri')"
                class="text-gray-800 hover:bg-blue-800 hover:text-white rounded-md px-3 py-2 text-base">GALERI</x-nav-link>
            <x-nav-link href="/informasi" :active="request()->is('informasi')"
                class="text-gray-800 hover:bg-blue-800 hover:text-white rounded-md px-3 py-2 text-base">INFORMASI</x-nav-link>
            <x-nav-link href="/status-produksi" :active="request()->is('status-produksi')"
                class="text-gray-800 hover:bg-blue-800 hover:text-white rounded-md px-3 py-2 text-base">STATUS
                PRODUKSI</x-nav-link>
        </div>
        <div class="border-t border-gray=-700 pb-3 pt-4">
            <div class="flex items-center px-5">
                <div class="shrink-0">
                    <img class="size-10 rounded-full"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base/5 font-medium text-gray-800">Tom Cook</div>
                    <div class="text-sm font-medium text-gray-800">tom@example.com</div>
                </div>
            </div>
            <div class="mt-3 space-y-1 px-2">
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-800 hover:bg-blue-800 hover:text-white">Your
                    Profile</a>
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-800 hover:bg-blue-800 hover:text-white">Settings</a>
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-800 hover:bg-blue-800 hover:text-white">Sign
                    out</a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('scroll', {
            lastScroll: 0,
            isScrolling: false,
            init() {
                window.addEventListener('scroll', () => {
                    const currentScroll = window.pageYOffset;
                    this.isScrolling = true;
                    this.lastScroll = currentScroll;
                });
            }
        });
    });
</script>
