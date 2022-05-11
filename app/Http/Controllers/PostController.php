<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use File;
use App\Models\Post;
use Illuminate\Support\Facades\App;


class PostController extends Controller
{
    public function posts()
    {
        // $posts = Post::all();
        $posts = Post::with('comments')->get();
        $data = [ 
            'posts' => $posts
        ];
        return view('pages.posts', $data);
    }

    // function posts() {
        
    //     return view('pages.Posts');
    // }

    function show($id) {
        $post = post::findOrFail($id);
        $data = [
            'post' => $post         
        ];
        return view('pages.post-show', $data);
    }


    function create() {
        $languages = ['en', 'ka'];
        $random_number = random_int(0, count($languages) - 1);
        $sel_language = $languages[$random_number];
        App::setLocale($sel_language);


        // App::setLocale('ka');
        return view('pages.post-create');
    }

    function store(Request $request) {
        $post = new Post;

        $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();
        $request->image->move(public_path('images/posts/'), $imageName);

        
        $post->brand = $request->brand;
        $post->model = $request->model;
        $post->category = $request->category;
        $post->year = $request->year;
        $post->wheel = $request->wheel;
        $post->image = $imageName;
        $post->save();
        return redirect()->route('posts')->with('message', 'post created successfully');
    }

    function edit($id) {
        $post = post::findOrFail($id);
        $data = [ 
            'post' => $post
        ];
        return view('pages.post-edit', $data);
    }

    function update($id, Request $request) {
        $imageName = null;
        $post = Post::findOrFail($id);
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('images/posts/'), $imageName);
            $deletePath = 'images/posts/' . $post -> image;
            if(File::exists(public_path($deletePath))){
                File::delete(public_path($deletePath)); 
            }
        }

        $post->brand = $request->brand;
        $post->model = $request->model;
        $post->category = $request->category;
        $post->year = $request->year;
        $post->wheel = $request->wheel;
        if ($imageName) $post->image = $imageName;
        $post->save();
        return redirect()->route('post-edit', ['id'=> $id])->with('message', 'post update successfully');
        // return redirect() -> route('posts'); 
    }

    function destroy($id) {
        $post = post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts')->with('message', 'post delete successfully');
    }

}
