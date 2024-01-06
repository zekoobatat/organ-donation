<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\organ;

class DataAdminController extends Controller
{
    //

    function show(){
        $data = organ::all();
        return view('organadmin', ['organ' => $data]);
    }


    public function edit(Organ $organ){

        return view('organadminedit', ['organ' => $organ]);
    }

    public function update(Request $request, Organ $organ)
{
    $organ->ic = $request->input('ic');
    $organ->name = $request->input('name');
    $organ->age = $request->input('age');
    $organ->gender = $request->input('gender');
    $organ->blood = $request->input('blood');
    $organ->organ = $request->input('organ');
    $organ->state = $request->input('state');
    $organ->status = $request->input('status');


    $isUpdated = $organ->save();

    if ($isUpdated) {
        return redirect()->route('addorganadmin')->with('success', 'Record updated successfully');
    } else {
        return redirect()->back()->with('error', 'Failed to update record');
    }
}


    public function post(Request $request)
    {
        // Your logic for handling POST requests
        $data = new organ(); // Replace 'Data' with your model name if needed

        // Assuming 'name', 'age', 'gender', 'blood', 'organ', 'state' are fields in your form
        $data->ic = $request->input('ic');
        $data->name = $request->input('name');
        $data->age = $request->input('age');
        $data->gender = $request->input('gender');
        $data->blood = $request->input('blood');
        $data->organ = $request->input('organ');
        $data->state = $request->input('state');
        $data->status = $request->input('status');

        // Save the data
        $isSaved = $data->save();

        if ($isSaved) {
            return redirect()->route('addorganadmin')->with('success', 'Data saved successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to save data');
        }
    }

    public function delete(Organ $organ)
{
    $organ->delete();

    // Redirect or return a response after deletion...
    return redirect()->route('admin')->with('success', 'Organ deleted successfully.');
}




}
