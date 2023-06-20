<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Article::all();
        return view('Article', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {   
        return view('Upload');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $content = Article::create([
                    'title' => $request->title,
                    'content' => $request->content,
                ]);

        $content->save();
        
        return view('Upload');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detail = Article::where('id', $id)->get();
        return view('Article', compact('detail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $show = $id;
        return view('Update', compact('show'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        if (!Gate::allows('update-post')) {
            abort(403);
        }

        $content = Article::find($id)->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Article::find($id);
        $post->delete();
        return redirect()->back();
    }
}
