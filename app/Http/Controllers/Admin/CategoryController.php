<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // We sorteren eerst de hoofdcategorieën, en daarna hun subcategorieën
        $categories = Category::whereNull('parent_id')
            ->with(['children' => function($query) {
                $query->orderBy('sort_order', 'asc');
            }])
            ->orderBy('sort_order', 'asc') 
            ->get();

        return view('admin.categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'parent_id' => 'nullable|exists:categories,id'
        ]);

        Category::create($request->all());

        return redirect()->back()->with('success', 'Categorie succesvol aangemaakt.');
    }
    public function destroy(Category $category)
    {
        // Verwijder de categorie (en door 'cascade' in de migratie ook de subcategorieën)
        $category->delete();

        return redirect()->back()->with('success', 'Categorie en eventuele subcategorieën zijn verwijderd.');
    }
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|max:255',
            'parent_id' => 'nullable|exists:categories,id',
            'sort_order' => 'required|integer'
        ]);

        $category->update($request->all());

        return redirect()->back()->with('success', 'Categorie bijgewerkt!');
    }
}