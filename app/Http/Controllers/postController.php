<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB; //this line will bring the database for us
//now we can use the models functions in our controller
//bcz the mention class extends models class

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //here you go here are those function that we can use to add cr
    //crud functionality with our app
    //now lets make routes for all these function by using the folowing command
    //php artisan route:list
    //ORM object reltional mapper 
    public function index()
    {
        //

        // $posts = Post::all();
        
        //$posts = Post::orderBy('title','asc')->take(1)->get();
        //only one post will be displayed this is called limitting
        //for pagination
        //but wait$posts = Post::orderBy('title','asc')->get(); there should be enough posts so that pagination shows up
        //instead of get use paginate
        $posts = Post::orderBy('title','asc')->paginate(5);
        //this line will order the posts assending or you can also use 
        //dsc there are so many many clauses you can use them as you want 
        //you can also use where clause 
        //like 
        //$posts = Post::where('title','dummy post')->get();
        //yeah itsjust working fine
//now here is another deal if you dont want Alocoin 
//relationship mapper 
//lets use queries

//$posts = DB::select('SELECT*FROM posts WHERE title="dummy post"');
//this line for sure bring back some memories

        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
        ]);
        
        //now we must prompt the user for validation so that
        //they know what they are doing and what they should do
        //inside inc folder create messages.blade.php

        //now let create post and insert it in database
        //that we did earlier with tinker

        //create post


        $post = new Post;
       // $post -> id =$request->input(1000);
        $post -> title =$request->input('title');
        $post -> body =$request->input('body');
$post->save();
return redirect('/posts')->with('success','Post created successfully...!');

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
            $myPost = Post::find($id);
        return view('posts.show')->with('myPost',$myPost);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
