<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class PersonController extends Controller
{

    public function index()
    {

        $person = DB::select('select * from Person');
        return view('persons.show', [
            'person' => $person
        ]);   
    }
    

    public function showCreateform(){
        return view('persons.create');
    }

    public function create(Request $request){

        $affected=  DB::insert(
         'insert into Person (firstName, lastName, age, email, citizenship, dateOfBirth, phoneNumber, 
         address, city, postalCode, province, isRegistered, idDocumentCreated, idDocumentExpired) 
         values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
         [
             $request->input('firstName'),
             $request->input('lastName'),
             $request->input('age'),
             $request->input('email'),
             $request->input('citizenship'),
             $request->input('dateOfBirth'),
             $request->input('phoneNumber'),
             $request->input('address'),
             $request->input('city'),
             $request->input('postalCode'),
             $request->input('province'),
             $request->input('isRegistered'),
             $request->input('idDocumentCreated'),
             $request->input('idDocumentExpired')
             ]
     );
     error_log($affected);

     return back();

 }



    public function showEditform($id){

        $person = DB::select('select * from Person where id = :id', ['id' => $id]);

        return view('persons.edit', [
            'person' => $person[0]
        ]);
    }

    
    public function edit(Request $request, $id){

           $affected=  DB::update(
            'update Person set firstName=?, lastName =?, age=?,
             email=?, citizenship=?,  dateOfBirth=?, phoneNumber=?,
             address=?, city=?, postalCode=?, province=?, isRegistered=?,
             idDocumentCreated=?, idDocumentExpired=? Where id =?
            ',
            [
                $request->input('firstName'),
                $request->input('lastName'),
                $request->input('age'),
                $request->input('email'),
                $request->input('citizenship'),
                $request->input('dateOfBirth'),
                $request->input('phoneNumber'),
                $request->input('address'),
                $request->input('city'),
                $request->input('postalCode'),
                $request->input('province'),
                $request->input('isRegistered'),
                $request->input('idDocumentCreated'),
                $request->input('idDocumentExpired'),
                $id
            ]
        );
        error_log($affected);

        return back();

    }


    public function show($id)
    {

        $person = DB::select('select * from Person where id = :id', ['id' => $id]);
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

    public function destroy($id)
    {
        $deleted = DB::delete('delete from Person where id =?', [$id]);
        return back();
    }
}
