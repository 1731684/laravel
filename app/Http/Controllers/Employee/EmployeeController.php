<?php

namespace App\Http\Controllers\Employee;
use App\Models\Department\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Employee\Employee;


class EmployeeController extends Controller
{

    private $country = [
        ''=>'',
        'Afghanistan'=>'Afghanistan',
        'Aland Islands'=>'Aland Islands',
        'Albania'=>'Albania',
        'Algeria'=>'Algeria',
        'American Samoa'=>'American Samoa',
        'Andorra'=>'Andorra',
        'Angola'=>'Angola',
        'Anguilla'=>'Anguilla',
        'Antarctica'=> 'Antarctica',
        'Antigua'=>'Antigua',
        'Argentina'=>'Argentina',
        'Armenia'=>'Armenia',
        'Australia'=>'Australia',
        'Bangladesh'=>'Bangladesh',
        'Bolivia'=>'Bolivia',
        'Canada'=>'Canada',
        'China'=>'China',
        'Colombia'=>'Colombia',
        'Denmark'=>'Denmark',
        'Egypt'=>'Egypt',
        'France'=>'France',
        'Germany'=>'Germany',
        'Greece'=>'Greece',
        'Hong Kong'=>'Hong Kong',
        'Iceland'=>'Iceland',
        'India'=>'India',
        'Indonesia'=>'Indonesia',
        'Singapore'=>'Singapore',
        'South Africa'=>'South Africa',
        'Sri Lanka'=>'Sri Lanka',
        'Switzerland'=>'Switzerland',
        'United Kingdom'=>'United Kingdom',
        'United States of America'=>'United States of America',
        'Zimbabwe'=>'Zimbabwe',
    ];


    public function index()
    {
        $employee=Employee::all();
        //$depart = Department::pluck('deptno');
        return view('employee.index',['employee'=>$employee]);

    }

    public function create()
    {

        //$depart = Department::pluck('deptno');


        return view('employee.create',['country' => $this->country]);
    }

    public function store(Request $request)
    {
        try
        {
            //$this->validate($request, $this->rules());
            $objEmployee = new Employee();
            $objEmployee->empno = $request->input('empno');
            $objEmployee->ename = $request->input('ename');
            $objEmployee->email = $request->input('email');
            $objEmployee->house_number = $request->input('house_number');
            $objEmployee->street = $request->input('street');
            $objEmployee->city = $request->input('city');
            $objEmployee->state = $request->input('state');
            $objEmployee->postcode = $request->input('postcode');
            $objEmployee->country = $request->input('country');
            $objEmployee->job = $request->input('job');
            $objEmployee->mgr = $request->input('mgr');
            $objEmployee->hiredate = $request->input('hiredate');
            $objEmployee->sal = $request->input('sal');
            $objEmployee->comm = $request->input('comm');
            $objEmployee->deptno = $request->input('deptno');


            if ($objEmployee->save()) {
                session()->flash('status', 'The new employee is added sucessfully');
                return redirect(route('employee.index'));
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

    public function show(Employee $employee)
    {
        return view('employee.show',['employee'=>$employee]);

    }
    public function edit(Employee $employee)
    {
        //$depart = Department::pluck('deptno');
        return view('employee.edit',['employee'=>$employee,'country' => $this->country]);

    }

    public function update(Request $request, Employee $employee)
    {
        try
        {
            $employee->ename = $request->input('ename');
            $employee->email = $request->input('email');
            $employee->house_number = $request->input('house_number');
            $employee->street = $request->input('street');
            $employee->city = $request->input('city');
            $employee->state = $request->input('state');
            $employee->postcode = $request->input('postcode');
            $employee->country = $request->input('country');
            $employee->job = $request->input('job');
            $employee->mgr = $request->input('mgr');
            $employee->hiredate = $request->input('hiredate');
            $employee->sal = $request->input('sal');
            $employee->comm = $request->input('comm');
            $employee->deptno = $request->input('deptno');

            if ($employee->save()) {
                session()->flash('status', 'The  employee is updated sucessfully');
                return redirect(route('employee.index'));
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


        exit;
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        session()->flash('status', 'The  department has been deleted');
        return redirect(route('employee.index'));
    }


    private function rules() {
        $rules = [
            'ename'     => 'required|min:6',
            'email' => 'required',
            'house_number' => 'required|min:3|max:4',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => 'required|min:5',
            'budget' => 'required|min:5',
            'country' => 'required|min:4',
            'job' => 'required|min:5',
            'hiredate' => 'required',
            'sal' => 'required|min:5',
            'comm' => 'required|min:4',
            'deptno' => 'required|min:2',
        ];

        return $rules;
    }
}
