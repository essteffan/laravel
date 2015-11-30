<?php

namespace App\Http\Controllers;

use App\Tag;
use Auth;
use Illuminate\Http\Request;

use App\Post;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth", ['only' => array('create', 'edit')]);
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get("search");
        if(!empty($search)){
            $posts = Post::where('name', 'Like', '%'.$search.'%')->orderBy('created_at', 'DESC')->paginate(3);
        }else{
            $posts = Post::orderBy('created_at', 'DESC')->paginate(3);
        }
        return view("posts.index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $tags = Tag::lists('name', 'id');
        return view("posts.create", compact('tags'));
    }


    /**
     * @param PostRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(PostRequest $request)
    {
        $post = Auth::user()->posts()->save(new Post($request->all()));

        $post->tags()->attach($request->input('tags'));

        return redirect("posts");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view("posts.show", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tags = Tag::lists('name', 'id');
        $post = Post::findOrFail($id);
        $tags_exist = $post->tags->lists('id')->all();

        return view("posts.edit", compact("post", 'tags', 'tags_exist'));
    }

    /**
     * @param PostRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->name = $request->get("name");
        $post->content = $request->get("content");
        $post->save();

        $this->sync($post, $request->input("tags"));

        return redirect()->route("posts.index")->with("message", "The post was updated");
    }


    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, $id)
    {
        Post::findOrFail($id)->delete();

        return redirect()->route("posts.index")->with("message", "The post has been deleted");
    }


    /**
     * @param Post $post
     * @param $tags
     */
    private function sync(Post $post, array $tags)
    {
        $post->tags()->sync($tags);
    }
}
