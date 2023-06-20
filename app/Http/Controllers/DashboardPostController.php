<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        return Post::where('user_id', auth()->user()id)->get();
        return view('dashboard.index', [
            'title'=>'Dashboard'
//            'post'=> Post::all();
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create', [
            'title'=>'Add Article',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'title' => 'required|max:255',
        'slug' => 'required',
        'category' => 'required',
        'body' => 'required'
        ]);

        $data = [
            'name' => $request->title,
            'slug' => $request->slug,
            'category' => $request->category,
            'body' => $request->body,
        ];

        Post::insert($data);

        Session()->flash('succes', 'Postingan sudah disimpan');

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}