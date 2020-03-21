<?php

namespace App\Http\Controllers;

use App\publicPost;
use Illuminate\Http\Request;

class PublicPostController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth')->except('index', 'create');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(publicPost $publicPost)
    {
        $posts = publicPost::where('approved', false)->latest()->get();
        return view('public.blog', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(publicPost $publicPost)
    {

        publicPost::create(request()->validate([
            'name' => ['required'],
            'title' => ['required', 'min:10'],
            'igHandle' => ['present'],
            'description' => ['required', 'min:30']
        ]));

        return redirect()->route('blog.index')->with('message', "Your Post is now being reviewed!");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\publicPost  $publicPost
     * @return \Illuminate\Http\Response
     */
    public function show(publicPost $publicPost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\publicPost  $publicPost
     * @return \Illuminate\Http\Response
     */
    public function edit(publicPost $publicPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\publicPost  $publicPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, publicPost $publicPost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\publicPost  $publicPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(publicPost $publicPost)
    {
        //
    }
}
