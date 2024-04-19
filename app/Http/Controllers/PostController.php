<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::latest()->paginate(5);
        return view('posts.index', compact('posts'));
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'nim'           => 'required|integer',
            'nama'          => 'required|string',
            'alamat'        => 'required|string',
            'nomorhp'       => 'required|integer',
            'motivasikuliah'=> 'required|string',
        ]);

        Post::create([
            'nim'           => $request->nim,
            'nama'          => $request->nama,
            'alamat'        => $request->alamat,
            'nomorhp'       => $request->nomorhp,
            'motivasikuliah'=> $request->motivasikuliah,
        ]);

        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function edit(string $id): View
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'nim'           => 'required|integer',
            'nama'          => 'required|string',
            'alamat'        => 'required|string',
            'nomorhp'       => 'required|integer',
            'motivasikuliah'=> 'required|string',
        ]);

        $post = Post::findOrFail($id);

        $post->update([
            'nim'           => $request->nim,
            'nama'          => $request->nama,
            'alamat'        => $request->alamat,
            'nomorhp'       => $request->nomorhp,
            'motivasikuliah'=> $request->motivasikuliah,
        ]);

        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //delete image
        Storage::delete('public/posts/'. $post->image);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Mahasiswa Berhasil Dihapus!']);
    }
}
