<x-app-layout>
    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 text-konablack">
        <h1 class="text-2xl uppercase tracking-[0.2em] mb-10 border-b-2 border-konablack pb-4">Category Management</h1>

        <div class="mb-12 bg-gray-50 p-6 border border-gray-200">
            <h2 class="text-sm uppercase font-bold mb-4">Add New Category</h2>
            <form action="{{ route('categories.store') }}" method="POST" class="flex flex-wrap gap-4">
                @csrf
                <input type="text" name="name" placeholder="Category Name" required 
                    class="border-2 border-konablack focus:ring-0 focus:border-konablack py-3 px-4 w-72 rounded-none">
                
                <select name="parent_id" class="border-2 border-konablack focus:ring-0 focus:border-konablack py-3 px-4 w-72 rounded-none">
                    <option value="">-- Main Category (None) --</option>
                    @foreach($categories as $mainCat)
                        <option value="{{ $mainCat->id }}">{{ $mainCat->name }}</option>
                    @endforeach
                </select>
                <input type="number" name="sort_order" value="0" placeholder="Order" 
    class="border-2 border-konablack focus:ring-0 focus:border-konablack py-3 px-4 w-24 rounded-none">
                <button type="submit" class="bg-konablack text-white px-10 uppercase text-[10px] tracking-widest font-bold hover:bg-white hover:text-konablack border-2 border-konablack transition-all">
                    Save Category
                </button>
            </form>
        </div>
        <h2 class="text-xl uppercase tracking-[0.2em] mb-10 border-b-2 border-konablack pb-4">Overview</h2>
        <div class="space-y-4">
            @foreach($categories as $category)
                <div class="border-2 border-konablack p-4 mb-2 bg-white flex items-center justify-between gap-4">
    
                    <form action="{{ route('categories.update', $category) }}" method="POST" class="flex items-center gap-4 flex-grow">
                        @csrf
                        @method('PATCH')
                        
                        <input type="number" name="sort_order" value="{{ $category->sort_order }}" 
                            class="w-16 border-2 border-gray-200 py-1 px-2 text-xs focus:border-konablack rounded-none">
                        
                        <input type="text" name="name" value="{{ $category->name }}" 
                            class="flex-grow border-none font-bold uppercase tracking-wider focus:ring-0 p-0 text-sm">

                        <button type="submit" class="text-[10px] uppercase font-bold tracking-widest text-gray-400 hover:text-konablack transition px-2 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </button>
                    </form>

                    <form action="{{ route('categories.destroy', $category) }}" method="POST" 
                        onsubmit="return confirm('Weet je het zeker? Dit verwijdert ook alle subcategorieën!');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="p-2 text-red-600 hover:text-red-900 transition" title="Verwijder">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </button>
                    </form>
                </div>
                
                @if($category->children->count() > 0)
                    <div class="ml-12 mt-2 space-y-2 mb-6">
                        @foreach($category->children as $child)
                            <div class="border border-gray-300 p-3 flex justify-between items-center bg-gray-50">
                                
                                <form action="{{ route('categories.update', $child) }}" method="POST" class="flex items-center gap-4 flex-grow">
                                    @csrf
                                    @method('PATCH')
                                    
                                    <input type="number" name="sort_order" value="{{ $child->sort_order }}" 
                                        class="w-14 border border-gray-300 py-1 px-2 text-[10px] focus:border-konablack rounded-none bg-white">
                                    
                                    <input type="text" name="name" value="{{ $child->name }}" 
                                        class="flex-grow border-none text-sm uppercase tracking-tight text-gray-600 focus:ring-0 p-0 bg-transparent">

                                    <button type="submit" class="p-1.5 text-green-600 hover:text-green-800 hover:bg-green-100 transition" title="Subcategorie opslaan">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                        </svg>
                                    </button>
                                </form>

                                <form action="{{ route('categories.destroy', $child) }}" method="POST" onsubmit="return confirm('Deze subcategorie verwijderen?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-1.5 text-red-500 hover:text-red-700 hover:bg-red-100 transition" title="Verwijder subcategorie">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </button>
                                </form>

                            </div>
                        @endforeach
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</x-app-layout>