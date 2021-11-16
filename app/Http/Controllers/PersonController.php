<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{

    public function index()
    {

        return view('persons.index');
    }

    public function show($id)
    {

        $person = DB::select('select * from Person where id = :id', ['id' => $id]);
        echo(1);
        return view('persons.show', [
            'person' => $person
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $request->user()->posts()->create($request->only('body'));

        return back();
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return back();
    }
}
