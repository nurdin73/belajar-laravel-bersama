<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts()
    {
        $data['posts'] = Post::all();
        return view('posts', $data);
    }

    public function detail($id)
    {
        $post = Post::find($id);
        return $post;
    }

    public function create()
    {
        return view('post-create');
    }

    public function insert(Request $request)
    {
        $data = $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required'
        ]);
        $insert = Post::create($data);
        return redirect()->to('posts');
    }

    public function edit($id)
    {
        $data['post'] = Post::findOrFail($id);
        return view('post-edit', $data);
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required'
        ]);
        /**
         * 
         * $data = ['judul' => 'isinya', 'isi' => 'judulnya']
         */
        $post = Post::find($id);
        $post->update($data);
        return redirect()->to('posts');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }
}
