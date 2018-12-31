<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\employee;
use App\Http\Requests\StoreValidation;
use Carbon\Carbon;
use File;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeelist = employee::paginate(10);
        return view('employee.emp_lists',compact('employeelist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.emp_master');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreValidation $request)
    {
        $employee = new employee;
        // $this->validate($request,[
        //         'name'=>'bail|required|between:3,20',
        //         'email'=>'required|unique:employees|email',
        //         'address'=>'required',
        //         'phone'=>'required',
        //         'mobile'=>'required',
        //         'gender'=>'required',
        //         'age'=>'required',
        //         'dob'=>'required',
        //         'status'=>'required',
        //     ]);

        if($request->hasFile('empImg'))
        {
            // $request->file('empImg');
            // return Storage::putFile('public',$request->file('empImg'));
            // return $request->empImg->storeAs('public','logo.jpg');

            $name = $request->empImg->getClientOriginalName();
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $filename = $timestamp.$name;
            $request->empImg->storeAs('public/upload',$filename);

            // $file->move(public_path().'/storage/uploads/', $filename);  

        }else { $filename = ''; }
        

        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->phone = $request->phone;
        $employee->mobile = $request->mobile;
        $employee->gender = $request->gender;
        $employee->age = $request->age;
        $employee->dob = $request->dob;
        $employee->empImg = $filename;
        if($request->status)
            $employee->status = '1';
        else 
            $employee->status = '0';

        $employee->save();
        session()->flash('message','Employee Record inserted Successfully...');
        return redirect('/employee');
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
        $employee = employee::find($id);
        return view('employee.emp_master',compact('employee'));
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
        $employee = employee::find($id);
        $this->validate($request,[
                'name'=>'bail|required|between:3,100',
                'email'=>'required|unique:employees,email,'.$id,
                'address'=>'required',
                'phone'=>'required',
                'mobile'=>'required',
                'gender'=>'required',
                'age'=>'required',
                'dob'=>'required',
                'status'=>'required',
                'empImg'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

        if($request->hasFile('empImg'))
        {
            //--remove image if exists----
            if($employee->empImg){
                $image = public_path('storage/upload/'.$employee->empImg);
                unlink($image);
            }
            //--end remove image code ---
            $name = $request->empImg->getClientOriginalName();
            $timestamp = str_replace([' ',  ':'], '-', Carbon::now()->toDateTimeString());
            $filename = $timestamp.$name;
            $request->empImg->storeAs('public/upload',$filename);
        }
        else
        {
            $image = employee::find($id);
            $filename = $image->empImg;
        }

        
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->phone = $request->phone;
        $employee->mobile = $request->mobile;
        $employee->gender = $request->gender;
        $employee->age = $request->age;
        $employee->dob = $request->dob;
        $employee->empImg = $filename;
        if($request->status)
            $employee->status = '1';
        else 
            $employee->status = '0';

        $employee->save();
        session()->flash('message','Employee Record Updated Successfully...');
        return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = employee::find($id);
        if(!empty($employee->empImg) && file_exists(public_path('storage/upload/'.$employee->empImg)))
        {
            $image = public_path('storage/upload/'.$employee->empImg);
            unlink($image);
        }
        $employee->delete();
        session()->flash('message','Employee Record deleted Successfully');
        return redirect('/employee');
    }

    public function removeEmployeeImage($id)
    {
        $emp = employee::find($id);
        $image = public_path('storage/upload/'.$emp->empImg);

        // if(File::exists($image)) {
        if(file_exists($image)){
            unlink($image);
            $emp->empImg ='';
            $emp->save();

        }else { echo "file not found"; }
        session()->flash('message','Employee Image Remove Successfully');
        return redirect('/employee/'.$id.'/edit');
    }
}
