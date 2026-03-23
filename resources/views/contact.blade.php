<x-guest-layout>
     <x-slot name="title">
        KONA - connect & collect
    </x-slot>
    <div class="ppy-12 px-12 text-left max-w-prose">
        <h1 class="text-konablack-500">Connect<br />& Collect</h1>
        <!--<p class="text-konablack-200 mt-4 italic">Sometimes, we're older then our furniture, but mostely not.</p>-->
    </div>
    <div class="w-full lg:w-[80%] mx-auto py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
            <div class="space-y-12 p-9">
                <div class="max-w-prose mb-24">
                    <h2>We’re here to help you find that perfect piece.</h2>
                    <p class="mb-4">
                        Whether you have a specific question about dimensions, the condition of an item, or the history behind a design, <b>don’t hesitate to reach out</b>. 
                    </p>
                    <p class="font-bold">
                        <a href="tel:+32491076753">+32 (0) 491 076 753</a><br />
                        <a href="mailto:info@kona-interior.be">info@konavintagedesign.be</a>
                    </p>
                </div>
                <div class="max-w-prose">
                    <h3>Our studio is always open for visits by appointment.</h3>
                    <p class="mb-4">
                        Simply fill out the contact form or send us a message to schedule a time that suits you. We look forward to meeting you.
                    </p>
                    <p class="font-bold">
                        Schoolstraat 14b,<br />9870 Machelen/Zulte (Deinze)
                    </p>
                </div>
            </div>
            <div class="bg-white/30 p-2 shadow-sm border border-gray-100/50 p-9">
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div>
                        <label class="block text-sm font-medium uppercase tracking-wider mb-1">Name *</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="w-full border-konablack focus:border-konablack focus:ring-0 transition py-3 px-2 
                        border-2 @error('name') border-red-500 @enderror">
                        @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium uppercase tracking-wider mb-1">Phone</label>
                        <input type="phone" name="phone" value="{{ old('phone') }}" class="w-full border-konablack focus:border-konablack focus:ring-0 transition py-3 border-2 px-2 @error('phone') border-red-500 @enderror">
                        @error('phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium uppercase tracking-wider mb-1">Email *</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full border-konablack focus:border-konablack focus:ring-0 transition py-3 border-2 px-2 @error('email') border-red-500 @enderror">
                        @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium uppercase tracking-wider mb-1">Subject *</label>
                        <input type="text" name="subject" value="{{ old('subject') }}" class="w-full border-konablack focus:border-konablack focus:ring-0 transition py-3 border-2 px-2 @error('email') border-red-500 @enderror">
                        @error('subject') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium uppercase tracking-wider mb-1">Message *</label>
                        <textarea name="message" rows="4" class="w-full border-konablack-500 focus:border-konablack focus:ring-0 transition py-3 border-2 px-2 @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                        @error('message') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="bg-black text-white px-8 py-3 uppercase tracking-widest hover:bg-amber-800 transition">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>