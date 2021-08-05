<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts = Post::with(['author'])->get();
       return view('site.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = User::orderBy('name')->get();
        return view('site.posts.create', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
           'name' => ['required', 'string', 'min:4', 'max:150'],
           'content' => ['required', 'string', 'min:4'],
           'author_id' =>['required']
       ]);

       Post::create([
        'name' => $request->input('name'),
        'content' => $request->input('content'),
        'author_id' => $request->input('author_id'),
       ]);

       return redirect()->route('posts.index')->with('success', 'Done');
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
        $authors = User::orderBy('name')->get();
        $post = Post::findOrFail($id);
        return view('site.posts.edit', compact('authors','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Post $post)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:4', 'max:150'],
            'content' => ['required', 'string', 'min:4'],
            'author_id' => ['required']
        ]);

        $post->name = $request->input('name');
        $post->content = $request->input('content');
        $post->author_id = $request->input('author_id');
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Blog::findOrFail($id)->delete();
            return redirect()->back()->with('success', 'Registro excluido com sucesso: ' . $id);
        } catch(\Exception $exception){
            return redirect()->back()->with('error', 'Erro ao tentar excluir o registro: ' . $id);
        }
    }
}
