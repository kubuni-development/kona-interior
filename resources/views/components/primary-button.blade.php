<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex cursor-pointer items-center px-4 py-2 bg-konablack border border-transparent rounded-none font-semibold text-xs text-white uppercase tracking-widest hover:bg-konablack focus:bg-konablack active:bg-konablack focus:outline-none focus:ring-0 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
