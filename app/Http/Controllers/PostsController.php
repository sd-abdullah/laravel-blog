<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\File;

use App\Models\Post;

class PostsController extends Controller
{
   
    public function index()
    {
        /* $post = Post::all();
        dd($post); */


        return view('blog.index') 
        ->with('posts', Post::all());

        /* return view('blog.index') 
        ->with('posts', Post::OrderdBy('title','Desc')->get()); */
    }


    public function create()
    {
        return view('blog.create');
    }

    
    public function store(Request $request)
    {
        // dd($request);


        $request->validate([
            'title'=> 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);


        $slug = str::slug($request->title,'-');

        $newImageName = uniqid() . "-" . $slug . "." . $request->image->extension();
        $request->image->move(public_path("images"), $newImageName);


        Post::create([
            // 'title' => $request->input('title'),
            'title' => $request->title,
            'description' => $request->input('description'),
            'slug' => $slug,
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/blog');


    }

 
    public function show($slug)
    {
        // dd($slug);
        $post = Post::where('slug',$slug)->first();
        // dd($post);
        return view('blog.show')
        ->with('post', $post);
    }


    public function edit($slug)
    {
        return view('blog.edit')
        ->with('post', Post::where('slug', $slug)->first());
    }


    public function update(Request $request, $slug)
    {
        // dd($request);
        //dd($slug);

        $request->validate([
            'title'=> 'required',
            'description' => 'required',
            'image' => 'mimes:jpg,png,jpeg|max:5048',
        ]);


        $newSlug = str::slug($request->title,'-'); 


        // dd($request->image, $slug, $newSlug);

        $oldImageName = Post::select("image_path")->where("slug", '=', $slug)->first()->image_path;


        if($request->image){
            $newImageName = uniqid() . "-" . $newSlug . "." . $request->image->extension();
            File::delete(public_path('images/'.$oldImageName));
            $request->image->move(public_path("images"), $newImageName);
            

        }else{
            
            $extension = pathinfo($oldImageName, PATHINFO_EXTENSION);
            $newImageName = uniqid() . "-" . $newSlug . "." . $extension;
            //dd($oldImageName, $newImageName);
        
            rename(public_path('images/'.$oldImageName), public_path('images/'.$newImageName));
        
            // dd(rename(public_path('images/'.$oldImageName), public_path('images/'.$oldImageName)));
        }

    
        
        //dd(Post::select("image_path")->where("slug", '=', $slug)->first()->image_path);
        // dd($newImageName);

        Post::where('slug', $slug)
        ->first()
        ->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => $newSlug,
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id
        ]);


        $post = Post::where('slug','=', $newSlug)->first();
        // dd($post);
        return redirect('/blog/'.$newSlug)
        ->with('post', $post)
        ->with('message', 'Your post updated successfuly.');

        /* return redirect('/blog/{{$newSlug}}')
        ->with('message', 'updated correctly'); */

    }


    public function destroy($slug)
    {


        $oldImageName = Post::select("image_path")->where("slug", $slug)->first()->image_path;


        File::delete(public_path('images/'.$oldImageName));


        Post::where("slug",$slug)->delete();

        return redirect('/blog')
        ->with("message", "Your post deleted successfuly.");
    }
}
