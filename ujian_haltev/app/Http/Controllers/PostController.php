<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $posts = Post::latest()->paginate();

        //render view with posts
        return view('posts.index', compact('posts'));
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'namatokoh'      => 'required|min:5',
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'orientasi'     => 'required|min:5',
            'peristiwapenting'   => 'required|min:10',
            'riorientasi'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        Post::create([
            'namatokoh'      => $request->namatokoh,
            'image'     => $image->hashName(),
            'orientasi'     => $request->orientasi,
            'peristiwapenting'   => $request->peristiwapenting,
            'riorientasi'   => $request->riorientasi

        ]);

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function show(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.show', compact('post'));
    }

    public function edit(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'namatokoh'      => 'required|min:5',
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'orientasi'     => 'required|min:5',
            'peristiwapenting'   => 'required|min:10',
            'riorientasi'   => 'required|min:10'
        ]);

        //get post by ID
        $post = Post::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/' . $post->image);

            //update post with new image
            $post->update([
                'namatokoh'      => $request->namatokoh,
                'image'     => $image->hashName(),
                'orientasi'     => $request->orientasi,
                'peristiwapenting'   => $request->peristiwapenting,
                'riorientasi'   => $request->riorientasi
            ]);
        } else {

            //update post without image
            $post->update([
                'orientasi'     => $request->orientasi,
                'peristiwapenting'   => $request->peristiwapenting,
                'riorientasi'   => $request->riorientasi
            ]);
        }

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //delete image
        Storage::delete('public/posts/' . $post->image);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
