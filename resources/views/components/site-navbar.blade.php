<nav x-data="{ mobileMenuOpen: false }" class="bg-konabeige text-konablack">
    <div class="px-12 py-12">
        <div class="flex justify-between items-center">

            <div class="flex-shrink-0 flex items-center">
                <a href="/">
                    <img src="{{ asset('images/kona_logo_black.svg') }}" alt="logo KONA" class="h-10 w-auto">
                </a>
            </div>

            <div class="hidden md:flex space-x-4 uppercase tracking-widest text-base font-medium">
                <a href="{{ route('shop') }}" class="relative group py-1 transition-colors {{ request()->is('shop*') ? 'font-bold' : 'font-medium' }}">
                    <span>Shop</span>
                    <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-konablack -translate-x-1/2 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="{{ route('about') }}" class="relative group py-1 transition-colors {{ request()->is('about*') ? 'font-bold' : 'font-medium' }}">
                    <span>About</span>
                    <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-konablack -translate-x-1/2 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="{{ route('archive') }}" class="relative group py-1 transition-colors {{ request()->is('archive*') ? 'font-bold' : 'font-medium' }}">
                    <span>Archive</span>
                    <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-konablack -translate-x-1/2 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="{{ route('terms') }}" class="relative group py-1 transition-colors {{ request()->is('terms*') ? 'font-bold' : 'font-medium' }}">
                    <span>Terms</span>
                    <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-konablack -translate-x-1/2 transition-all duration-300 group-hover:w-full"></span>
                </a>

                <a href="{{ route('contact') }}" class="relative group py-1 transition-colors {{ request()->is('contact*') ? 'font-bold' : 'font-medium' }}">
                    <span>Contact</span>
                    <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-konablack -translate-x-1/2 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="/cart" class="hover:font-bold">
                    <img src="{{ asset('images/icon_hold_black.svg') }}" alt="logo KONA" class="h-7 w-auto" />
                </a>
            </div>

            <!--<div class="hidden md:flex items-center space-x-5">
                <a href="/cart" class="hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                </a>
                <a href="/login" class="hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                </a>
            </div>-->

            <div class="md:hidden flex items-center">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="focus:outline-none">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path :class="mobileMenuOpen ? 'hidden' : 'inline-flex'" d="M4 6h16M4 12h16M4 18h16" stroke-width="2" stroke-linecap="round"></path>
                        <path :class="mobileMenuOpen ? 'inline-flex' : 'hidden'" d="M6 18L18 6M6 6l12 12" stroke-width="2" stroke-linecap="round"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="mobileMenuOpen" x-cloak class="fixed inset-0 z-[100] md:hidden" role="dialog" aria-modal="true">
        <!--<div x-show="mobileMenuOpen" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" 
        x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="mobileMenuOpen = false"
        class="fixed inset-0 bg-black/100 backdrop-blur-sm">
        </div>-->

        <div 
            x-show="mobileMenuOpen"
    x-transition:enter="transition ease-out duration-300 transform"
    x-transition:enter-start="translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transition ease-in duration-200 transform"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="translate-x-full"
    class="fixed inset-y-0 right-0 w-full bg-konablack p-12 shadow-2xl flex flex-col justify-between z-[100] will-change-transform"
        >
            <div>
                <div class="flex justify-between mb-12">
                    <a href="/">
                        <img src="{{ asset('images/kona_logo_beige.svg') }}" alt="logo KONA" class="h-10 w-auto">
                    </a>
                    <button @click="mobileMenuOpen = false" class="text-konabeige hover:text-white">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <nav class="space-y-8 uppercase tracking-[0.2em] text-lg font-medium text-konabeige">
                    <a href="{{ route('shop') }}" class="block hover:text-white transition-colors {{ request()->is('shop*') ? 'font-bold' : 'font-medium' }}">Shop</a>
                    <a href="{{ route('about') }}" class="block hover:text-white transition-colors {{ request()->is('about*') ? 'font-bold' : 'font-medium' }}">About</a>
                    <a href="{{ route('archive') }}" class="block hover:text-white transition-colors {{ request()->is('archive*') ? 'font-bold' : 'font-medium' }}">Archive</a>
                    <a href="{{ route('terms') }}" class="block hover:text-white transition-colors {{ request()->is('terms*') ? 'font-bold' : 'font-medium' }}">Terms</a>
                    <a href="{{ route('contact') }}" class="block hover:text-white transition-colors {{ request()->is('contact*') ? 'font-bold' : 'font-medium' }}">Contact</a>
                </nav>
            </div>

            <!--<div class="border-t border-gray-800 pt-8 pb-4 space-y-6 uppercase tracking-widest text-sm text-konabeige">
                <a href="/cart" class="flex items-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                    Winkelwagen
                </a>
                <a href="/login" class="flex items-center gap-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    Mijn Account
                </a>
            </div>-->
        </div>
    </div>
</nav>