<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\createPostValidate;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pages.login");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        if ($request->password === env('ADMIN_PASSWORD')) {
            session(['admin' => true]);
            return redirect('/dashboard');
        }

        return back()->with('erro', 'Senha incorreta');
    }

    public function create()
    {
        return view("pages.admin");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(createPostValidate $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $validated['image'] = $path;
        } else {
            $validated['image'] = null;
        }

        $post = new Post();

        $uuid = Uuid::uuid4()->toString();
        
        $post->id = $uuid;
        $post->title = $validated['title'];
        $post->description = $validated['description'];
        $post->category = $validated['category'];
        $post->date = $validated['data'];
        $post->image = $validated['image'];

        $post->save();

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Post $post)
    {
        return view('pages.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(createPostValidate $request, Post $post)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $validated['image'] = $path;
        } else {
            $validated['image'] = $post->image;
        }

        $post->title = $validated['title'];
        $post->description = $validated['description'];
        $post->category = $validated['category'];
        $post->date = $validated['data'];
        $post->image = $validated['image'];

        $post->save();

        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }

        $post->delete();

        return redirect()->route('admin');
    }
}
