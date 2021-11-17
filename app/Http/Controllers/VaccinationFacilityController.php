<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class VaccinationFacilityController extends Controller
{

    public function index()
    {

        $person = DB::select('select * from Person');
        return view('facility.show', [
            'person' => $person
        ]);   
    }
    

    public function showCreateform(){
        return view('facility.create');
    }

    public function create(Request $request){


        $affected=  DB::insert(
         'insert into vaccinationFacility (capacity, facilityName, facilityType, webAddress, phoneNumber, facilityAddress, city, province, postalCode, manager, isRequiredAppointment) 
         values(?,?,?,?,?,?,?,?,?,?,?)',
         [
             $request->input('capacity'),
             $request->input('facilityName'),
             $request->input('facilityType'),
             $request->input('webAddress'),
             $request->input('phoneNumber'),
             $request->input('facilityAddress'),
             $request->input('city'),
             $request->input('province'),
             $request->input('postalCode'),
             $request->input('manager'),
             $request->input('isRequiredAppointment'), 
             ]
     );
     error_log($affected);

     return back();

 }



    public function showEditform($id){

        $facility = DB::select('select * from vaccinationFacility where id = :id', ['id' => $id]);

        return view('facility.edit', [
            'facility' => $facility[0]
        ]);
    }

    
    public function edit(Request $request, $id){

           $affected=  DB::update(
            'update Person set capacity=?, facilityName =?, facilityType=?,
             webAddress=?, phoneNumber=?,  facilityAddress=?, city=?,
             province=?, postalCode=?, manager=?, isRequiredAppointment=?,
            ',
            [
             $request->input('capacity'),
             $request->input('facilityName'),
             $request->input('facilityType'),
             $request->input('webAddress'),
             $request->input('phoneNumber'),
             $request->input('facilityAddress'),
             $request->input('city'),
             $request->input('province'),
             $request->input('postalCode'),
             $request->input('manager'),
             $request->input('isRequiredAppointment'),
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