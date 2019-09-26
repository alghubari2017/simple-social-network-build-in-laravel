<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return(view('posts.index'))->with('posts',Post::all());
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags =Tag::all();
        return(view('posts.create'))->with('categories',Category::all())->with('tags',$tags)->with('posts',Post::all()) ; 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $this->validate($request,[
            "content" => "required",
            "category_id"=>"required",
             "photo"  => "required|image",
             "tags"   => "required"
             
      ]);

      $photo = $request->photo;
      $photo_new_name = $photo->getClientOriginalName();
      $photo_new_name = time(). $photo_new_name;
      
      $photo->move('upload/posts',$photo_new_name);

      $post =  Post::create([
           "content" => $request->content,
           "category_id"=>$request->category_id,
           "photo"  => 'upload/posts/'.$photo_new_name,
           "slug" =>str_slug($request->content)
           ]);
             
      $post->tags()->attach($request->tags);
           
           return redirect()->back();
      
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
       
        $tags =Tag::all();
       $post =Post ::find($id);
      
        
        return(view('posts.edit'))->with('post',$post)->with('categories',Category::all())->with('tags',$tags) ;
        
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


        $post =  Post::find($id);

        $this->validate($request,[
            "content" => "required",
            "category_id"=>"required",
           
             
            ]);
            if($request->hasFile('photo')){
                $photo = $request->photo;
                $photo_new_name = $photo->getClientOriginalName();
                $photo_new_name = time(). $photo_new_name;
          
                $photo->move('upload/posts',$photo_new_name);
    
                $post->photo =  'upload/posts/'.$photo_new_name; 
            }

           
             $post->content = $request->content;
             $post->category_id = $request->category_id;
             $post->tags()->sync($request->tags);
           
            $post->save();
             return(\redirect()->route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post ::find($id);
        if ($post != null) {
            $post->delete();
            return redirect()->route('posts.index')->with(['message'=> 'Successfully deleted!!']);
        }
        
        
    }
}
