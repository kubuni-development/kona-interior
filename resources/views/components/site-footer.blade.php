<footer class="bg-konabeige border-t border-gray-300">
    <div class="w-full lmx-auto px-12 pt-24 pb-6 md:px-12">
        <div class="">
            <h3 class="mb-0">
                We’re here for everyone,<br />just not all at once.<br />
Please book your visit.
            </h3>
        </div>
    </div>
    <div class="w-full lmx-auto px-12 pt-6 pb-24 md:px-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <div class="">
                
                <p class="font-bold mb-4">
                    <a href="tel:+32491076753">+32 (0) 491 076 753</a><br />
                    <a href="mailto:appointment@kona-interior.be">appointment@kona-interior.be</a>
                </p>
                <p class="font-bold">
                        Schoolstraat 14b,<br />9870 Machelen/Zulte (Deinze)
                </p>
            </div>
            <div class="">
                <p>
                     <a href="{{ route('shop') }}" class="inline-block mb-1.5 uppercase tracking-widest leading-none text-base relative group py-1 transition-colors {{ request()->is('shop*') ? 'font-bold' : 'font-medium' }}">
                        <span>Shop</span>
                        <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-konablack -translate-x-1/2 transition-all duration-300 group-hover:w-full"></span>
                    </a><br />
                    <a href="{{ route('about') }}" class="inline-block mb-1.5 uppercase tracking-widest leading-none text-base relative group py-1 transition-colors {{ request()->is('shop*') ? 'font-bold' : 'font-medium' }}">
                        <span>About</span>
                        <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-konablack -translate-x-1/2 transition-all duration-300 group-hover:w-full"></span>
                    </a><br />
                    <a href="{{ route('archive') }}" class="inline-block mb-1.5 uppercase tracking-widest leading-none text-base relative group py-1 transition-colors {{ request()->is('archive*') ? 'font-bold' : 'font-medium' }}">
                        <span>Archive</span>
                        <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-konablack -translate-x-1/2 transition-all duration-300 group-hover:w-full"></span>
                    </a><br />
                    <a href="{{ route('terms') }}" class="inline-block mb-1.5 uppercase tracking-widest leading-none text-base relative group py-1 transition-colors {{ request()->is('terms*') ? 'font-bold' : 'font-medium' }}">
                        <span>Terms</span>
                        <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-konablack -translate-x-1/2 transition-all duration-300 group-hover:w-full"></span>
                    </a><br />
                    <!--<a href="{{ route('contact') }}" class="inline-block mb-1 relative group py-1 transition-colors {{ request()->is('contact*') ? 'font-bold' : 'font-medium' }}">
                        <span>Contact</span>
                        <span class="absolute bottom-0 left-1/2 w-0 h-0.5 bg-konablack -translate-x-1/2 transition-all duration-300 group-hover:w-full"></span>
                    </a><br />-->
                </p>
            </div>
            <div class="mb-0">
            </div>
            <div class="">
                <h4 class="mb-3">Subscribe to our newsletter for the latest updates from the studio.</h4>
                <form class="relative flex items-center h-[40px] w-full">
                    <input type="email" 
                        placeholder="Your email" 
                        class="w-full h-full bg-transparent border border-1 border-konablack pl-3 pr-[50px] text-s focus:ring-0 focus:border-konablack transition-colors 
                        placeholder-konablack-100">
                    
                    <button type="submit" class="group absolute right-0 h-full aspect-square flex items-center justify-center bg-konablack text-white cursor-pointer 
                    hover:overflow-hidden">
                        <div class="relative w-4 h-4 overflow-hidden pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" 
                                class="w-4 h-4 absolute inset-0 transform translate-x-0 group-hover:transition-transform group-hover:duration-300 group-hover:ease-in-out group-hover:translate-x-full">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" 
                                class="w-4 h-4 absolute inset-0 transform -translate-x-full group-hover:transition-transform group-hover:duration-300 group-hover:ease-in-out group-hover:translate-x-0 group-hover:delay-150">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>
</footer>
{{-- Onderste Balk --}}
<div class="w-full px-12 py-6 border-t border-gray-300">
        <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <div class="text-[10px] uppercase tracking-[0.2em] text-konablack">
                &copy; {{ date('Y') }} Kona Interior. All rights reserved.
            </div>
            
            <div class="flex space-x-8 text-[10px] uppercase tracking-[0.2em] text-konablack">
                <a href="#" class="hover:text-konablack-500 transition-colors">Instagram</a>
                <a href="#" class="hover:text-konablack-500 transition-colors">Pinterest</a>
            </div>
        </div>
</div>