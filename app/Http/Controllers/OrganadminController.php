<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organ; // Assuming Organ model is used

class OrganadminController extends Controller
{
    public function addorganadmed(Request $request)
    {
        // Your data insertion logic here...

        $isInsertSuccess = Organ::create([
            'name' => $name,
            'age' => $age,
            'gender' => $gender,
            'blood' => $blood,
            'organ' => $organ,
            'state' => $state,
        ]);

        // Redirect or return a response based on the insertion success...

        // For example:
        if ($isInsertSuccess) {
            return view('addorganadmin');
        } else {
            // Handle insertion failure...
        }
    }


    public function update(Request $request, Organ $organ)
    {
        $organ->update([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'gender' => $request->input('gender'),
            'blood' => $request->input('blood'),
            'organ' => $request->input('organ'),
            'state' => $request->input('state'),
            'status' => $request->input('status'),
            // Add more fields if needed
        ]);

        return Redirect::route('orginadmin')->with('success', 'Organ details updated successfully');
    }



}
