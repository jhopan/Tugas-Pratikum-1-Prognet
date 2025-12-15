<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Menampilkan semua post
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // Menampilkan form untuk membuat post baru
    public function create()
    {
        return view('posts.create');
    }

    // Menyimpan post baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')
                       ->with('success', 'Post created successfully.');
    }

    // Menampilkan form untuk mengedit post
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Memperbarui post yang ada
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index')
                       ->with('success', 'Post updated successfully.');
    }

    // Menghapus post
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')
                       ->with('success', 'Post deleted successfully.');
    }
}
