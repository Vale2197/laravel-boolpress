<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $posts = Post::paginate(12);

        
        $categories = Category::all();
        
        /* $posts = Post::all();
        $tags = Tag::all()->pluck('id');

        foreach ($posts as $post) {
            # code...
            $post->tags()->attach($tags->random());
        } */

        return view('guest.Post.index', compact('posts', 'categories'));
    }

    public function dashboard()
    {
        //
        $posts = Post::all();

        return view('admin.Post.dashboard', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();

        $tags = Tag::all();

        return view('admin.Post.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validated_data = $request->validate([
            'title' => ['required', 'max:200'],
            'subtitle' => ['max:200', 'nullable'],
            'text' => ['nullable'],
            'image' => ['max:200', 'nullable'],
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->description = $request->description;
        $post->image = $request->image;
        $post->category_id = $request->category_id;
        $post->tags()->attach($request->input('tag_id'));
        $post->save();

        return redirect()->route('posts.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //

        return view('guest.Post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.Post.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $new_post = $request->validate([
            'title' => ['required', 'max:200'],
            'subtitle' => ['max:200', 'nullable'],
            'text' => ['nullable'],
            'image' => ['max:200', 'nullable']
        ]);
        $post->category_id = $request->input('category_id'); 

        $post->tags()->sync($request->input('tag_id'));

        if($request->file('image')) {
           
            $path = $request->file('image')->store('post-imgs');
        }

        $post->update($new_post);
 

        return redirect()->route('posts.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //

        $post->delete();

        return redirect()->route('posts.dashboard');
    }
}
