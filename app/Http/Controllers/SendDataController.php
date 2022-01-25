<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Http\Request;

class SendDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storefaculty(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|unique:faculties,name',
            'amount' => 'required|numeric',
            'bankName' => 'required|string',
            'accountName' => 'required|string',
            'accountNumber' => 'required|numeric',
            'contactPersonName' => 'required|string',
            'contactPersonNumber' => 'required|numeric',
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
            'name' => 'required|string|unique:departments,name',
            'facultyName' => 'required|string',
            'amount' => 'required|array',
            'dueName' => 'required|array',
            'bankName' => 'required|array',
            'accountName' => 'required|array',
            'accountNumber' => 'required|array',
        ]);

        // dd($data);
        
        if (Department::create($data)) {
            return back()->with('success', 'Department Added Successfully');
        }
        
        return back()->with('error', 'Failed to upload');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
