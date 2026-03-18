<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900">
                <h1 class="bg-blue-500 p-20 text-white">Welkom bij KONA</h1>
                <p class="mt-4">Je nieuwe shop-omgeving is nu technisch in orde.</p>
                
                <div class="mt-6 flex gap-4">
                    <a href="{{ route('login') }}" class="px-4 py-2 bg-konablack text-konabeige rounded">Inloggen</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 border border-konablack text-konablack rounded">Registreren</a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>