<?php

namespace App\Http\Controllers;

use App\Models\Post;
// use App\Models\Pages;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return view('post/post', ['post' => $post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();

        $categoriesData = array();
        foreach( $categories as $category )
        {            
            $temp = $category->category_name;
            $categoriesData[$category->id] = $temp; 
        }

        return view('post/add_post',['add_post' => $categoriesData]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
        ]);
        
        return redirect(route('post.index'))->with(['success' => 'Post is added!!!!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('id', $id)->first();
        $categories = Categories::all();

        $categoriesData = array();
        foreach( $categories as $category )
        {            
            $temp = $category->category_name;
            $categoriesData[$category->id] = $temp; 
        }

        return view('post/edit_post', ['post' => $post, 'edit_post' => $categoriesData]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::where('id', $id)->update([
                'title' => $request->title,
                'content' => $request->content,
                'category_id' => $request->category_id,
        ]);

        return redirect(route('post.index'))->with(['success' => 'Post is updated!!!!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        return redirect(route('post.index'))->with(['success' => 'Post is Deleted!!!!']);
    }
}
