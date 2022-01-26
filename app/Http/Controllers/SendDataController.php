<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Http\Request;

class SendDataController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storefaculty(Request $request)
    {
        
        $data = $request->validate([
            'name' => 'required|array',
            'amount' => 'required|array',
            'dueName' => 'required|array',
            'bankName' => 'required|array',
            'accountName' => 'required|array',
            'accountNumber' => 'required|array',
            'contactPersonName' => 'required|array',
            'contactPersonNumber' => 'required|array',
        ]);

        
        if (Faculty::create($data)) {
            return back()->with('success', 'Faculty Added Successfully');
        }
        
        return back()->with('error', 'Failed to upload');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storedepartment(Request $request)
    {   
        
        $data = $request->validate([
            'name' => 'required|string',
            'facultyName' => 'required|string',
            'dueName' => 'required|string',
            'amount' => 'required|array',
            'dueName' => 'required|array',
            'bankName' => 'required|array',
            'accountName' => 'required|array',
            'accountNumber' => 'required|array',
            'contactPersonName' => 'required|array',
            'contactPersonNumber' => 'required|array',
        ]);
        
        if (Department::create($data)) {
            return back()->with('success', 'Department Added Successfully');
        }
        
        return back()->with('error', 'Failed to upload');
    }


}
