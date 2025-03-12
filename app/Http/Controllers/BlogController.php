<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index($id){
        $blog = Blog::find($id);

        return view('blog', [
            'blog' => $blog
        ]);
    }

    public function destroy($id){
        $blog = Blog::find($id);

        $blog->delete();

        return view('/home');
    }

    public function show($id){
        $blog = Blog::find($id);

        return view('edit', [
            'blog' => $blog
        ]);
    }

    public function update($id){

        $blog = request()->validate([
            'title' => ['required'],
            'text' => ['required']
        ]);

        $blog = Blog::find($id);

        $blog->update([
            'title' => request('title'),
            'text' => request('text')
        ]);

        return redirect('/home');
    }

    public function create(){
        return view('add');
    }

    public function store(Request $request){
        $attributes = $request->validate([
            'title' => ['required'],
            'text' => ['required']
        ]);

        Blog::create([
            'title' => $request['title'],
            'text' => $request['text'],
            'user_id' => auth()->user()->id
        ]);

        return redirect('/home');
    }

    //Para test
    public function list(Request $request) {
        $userId = auth()->id();
        $blogs = Blog::where('user_id', $userId)->orderBy('id', 'desc')->get();
        return response()->json($blogs);
    }
}
