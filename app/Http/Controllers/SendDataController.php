<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Faculty;
use Illuminate\Support\Facades\DB;
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

        DB::beginTransaction();
        try {
            foreach ($data['name'] as $key => $value) {
                $faculty = new Faculty;
                $faculty->name = $data['name'][$key];
                $faculty->amount = $data['amount'][$key];
                $faculty->dueName = $data['dueName'][$key];
                $faculty->bankName = $data['bankName'][$key];
                $faculty->accountName = $data['accountName'][$key];
                $faculty->accountNumber = $data['accountNumber'][$key];
                $faculty->contactPersonName = $data['contactPersonName'][$key];
                $faculty->contactPersonNumber = $data['contactPersonNumber'][$key];
                $faculty->save();
            }
            DB::commit();
            return back()->with('success', 'Faculty Added Successfully');
            
        }catch(\Exception $e){
            DB::rollBack();
            return back()->with('error', 'Failed to upload');
        }

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


        DB::beginTransaction();
        try {
            foreach ($data['dueName'] as $key => $value) {
                $department = new Department;
                $department->name = $data['name'];
                $department->facultyName = $data['facultyName'];
                $department->amount = $data['amount'][$key];
                $department->dueName = $data['dueName'][$key];
                $department->bankName = $data['bankName'][$key];
                $department->accountName = $data['accountName'][$key];
                $department->accountNumber = $data['accountNumber'][$key];
                $department->contactPersonName = $data['contactPersonName'][$key];
                $department->contactPersonNumber = $data['contactPersonNumber'][$key];
                $department->save();
            }
            DB::commit();
            return back()->with('success', 'Department Added Successfully');
            
        }catch(\Exception $e){
            DB::rollBack();
            return back()->with('error', 'Failed to upload');
        }
    }


}
