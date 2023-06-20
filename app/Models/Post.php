<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug', 
        'category',
        'excerpt',
        'body'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    
    public function user(){
        return $this->belongsTo(User::class);
    }
//   use Sluggable;

    // public function sluggable(): array {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //         ];
    // }
}