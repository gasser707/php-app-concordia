<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VaccinationFacilityController extends Controller
{

    public function index()
    {
        $facilities = DB::select('select * from dnc353_2.vaccinationFacility');

        // return view('user.index', ['users' => $users]);

        return view('vaxfacility.index', ['facilities' => $facilities]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
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