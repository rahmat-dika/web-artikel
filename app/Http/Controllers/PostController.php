<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index(){
        return view('index', [
            'title' => 'Home',
            'posts' => Post::all()
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->all();

        
        
        Post::create($validatedData);

        session()->flash('succes', 'Artikel anda sudah disimpan');

        return redirect('/'); 
    }
}