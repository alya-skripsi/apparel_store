<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.categories.index', [
            'title' => 'Categories',
            'active' => 'categories',
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('dashboard.categories.create', [
        //     'title' => 'Create Category',
        //     'active' => 'categories',
        //     'categories' => Category::all()
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Category::create($request->validate([
        //     'name' => 'required|max:255',
        //     'slug' => 'required|unique:categories'
        // ]));

        // return redirect('/dashboard/categories')->with('success', 'Category has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        // return view('dashboard.categories.edit', [
        //     'title' => 'Edit Category',
        //     'active' => 'categories',
        //     'category' => $category,
        //     'categories' => Category::all()
        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // $category->update($request->validate([
        //     'name' => 'required|max:255',
        //     'slug' => 'required|unique:categories,slug,' . $category->id
        // ]));

        // return redirect('/dashboard/categories')->with('success', 'Category has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        // $category->delete();

        // return redirect('/dashboard/categories')->with('success', 'Category has been deleted successfully');
    }
}
