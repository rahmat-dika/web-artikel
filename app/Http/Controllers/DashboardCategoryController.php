<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id_user = Auth::user()->id;
        $category = Category::where('created_by', $id_user)->get();

        $data = [
            'title' => 'Kategori',
            'category' => $category,
        ];
        return view('category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create', [
            'title' => 'Kelola Kategori'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'name' => 'required|max:500',
            'slug' => 'required',
            'ket' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'ket' => $request->ket,
            'created_by' => Auth::user()->id,
        ];

        Category::insert($data);

        Session()->flash('succes', 'Kategori sudah disimpan');

        return redirect('/category');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::where('id', $id)->first();

        $data = [
            'category' => $category,
        ];
        return view('category/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        dd($category);
        // $data = [
        //     'category' => $category,
        // ];
        // return view('category/edit')->with('data', $data);
        return view('category/edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}