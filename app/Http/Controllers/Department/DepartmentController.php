<?php

namespace App\Http\Controllers\Department;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Department\Department;

class DepartmentController extends Controller
{
    private $locations = [
        ''=>'',
        'NEW YORK'=>'NEW YORK',
        'DALLAS'=>'DALLAS',
        'CHICAGO'=>'CHICAGO',
        'BOSTON'=>'BOSTON',
        'TEXAS'=>'TEXAS',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments=Department::all();
        return view('department.index',['departments'=>$departments]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.create',['locations' => $this->locations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
            $this->validate($request, $this->rules());
            $objDepartment = new Department();
            $objDepartment->dname = $request->input('dname');
            $objDepartment->loc = $request->input('loc');
            

            if ($objDepartment->save()) {
                session()->flash('status', 'The new department is added sucessfully');
                return redirect(route('department.index'));
            }

            session()->flash('status', 'OOps! an unexpected error occured');
            return back()->withInput();
        }
        catch(\Exception $ex)
        {
            $error= $ex->getMessage();
            error_log($error,3,"../logs/myerrors.log");
            session()->flash('status', "OOps! an unexpected error occured");
            return back()->withInput();
        }

        print("came here...");
        exit;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        return view('department.show',['department'=>$department]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
       // print($department->deptno);exit;
        return view('department.edit',['locations' => $this->locations,'department'=>$department]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        try
        {
            $department->dname = $request->input('dname');
            $department->loc = $request->input('loc');


            if ($department->save()) {
                session()->flash('status', 'The  department is updated sucessfully');
                return redirect(route('department.index'));
            }

            session()->flash('status', 'OOps! an unexpected error occured');
            return back()->withInput();
        }
        catch(\Exception $ex)
        {
            $error= $ex->getMessage();
            error_log($error,3,"../logs/myerrors.log");
            session()->flash('status', "OOps! an unexpected error occured");
            return back()->withInput();
        }

        print("came here...");
        exit;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $department->delete();
        session()->flash('status', 'The  department has been deleted');
        return redirect(route('department.index'));
    }


    private function rules() {
        $rules = [
            'dname'     => 'required|min:6',
            'loc' => 'required|min:4'
        ];

        return $rules;
    }
}
