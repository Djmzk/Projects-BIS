<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * index
     *
     * @return View
     */

public function index()
{
    $posts = Post::latest()->paginate(20);
    $categories = Category::all(); // Mengambil semua kategori

    return view('admin.postingan.index', compact('posts', 'categories'));
}
    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.postingan.create');
    }

    /**
     * store
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10',
            'category_id' => 'required|exists:categories,id', // Validate that the category exists
        ]);

        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        Post::create([
            'image'       => $image->hashName(),
            'title'       => $request->title,
            'content'     => $request->content,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  string  $id
     * @return View
     */
//     public function recomendedpost()
// {
//     $posts = Post::latest()->paginate(5);
//     $recomendedPosts = Post::where('category_id', $posts->category_id)
//     ->where('id', '<>', $posts->id)
//     ->latest()
//     ->take(3) // Mengambil 3 post rekomendasi
//     ->paginate(3); // Menyesuaikan dengan jumlah yang ditampilkan di tampilan

//     return view('showposts', compact('posts', 'categories'));
// }


public function detail(string $id): View
{
    $post = Post::findOrFail($id);

    // Ambil data rekomendasi berita lainnya
    $rekomendasiBerita = Post::where('category_id', $post->category_id)
    ->where('id', '<>', $post->id)
    ->latest()
    ->take(6) // Mengambil 3 post rekomendasi
    ->paginate(6); // Menyesuaikan dengan jumlah yang ditampilkan di tampilan

    // Kirim data ke view
    return view('showposts', compact('post', 'rekomendasiBerita'));
}



    /**
     * edit
     *
     * @param  string  $id
     * @return View
     */
    public function edit(string $id): View
    {
        $post = Post::findOrFail($id);
        $categories = Category::all(); // Mengambil semua kategori
        return view('admin.postingan.edit', compact('post','categories' ));
    }

    /**
     * update
     *
     * @param  Request  $request
     * @param  string  $id
     * @return RedirectResponse
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        $post = Post::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            Storage::delete('public/posts/'.$post->image);

            $post->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        } else {
            $post->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        }

        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  string  $id
     * @return RedirectResponse
     */
    public function destroy(string $id): RedirectResponse
    {
        $post = Post::findOrFail($id);

        Storage::delete('public/posts/'. $post->image);

        $post->delete();

        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function postingan()
{
    $posts = Post::latest()->paginate(5);
    $new = Post::inRandomOrder()->paginate(8);
    $categories = Category::all(); // Mengambil semua kategori

    return view('berita', compact('posts', 'new','categories'));
}
}
