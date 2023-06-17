<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

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

        // dd($request->title);

        // $this->validate($request, array (
        //     'title' => 'required',
        //     'content' => 'required'
        // ));

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
