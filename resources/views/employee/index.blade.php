@extends('layouts.default.layout')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item active">Employee</li>
    </ol>
    <h3>Employee</h3>

    <hr>

    @if(session()->has('status'))
        <p class="alert alert-info">
            {{	session()->get('status') }}
        </p>
    @endif

    <div class="panel panel-default">
        <div class="panel-top-links m-t-sm m-b-sm">
            <a href="#" class="btn btn-secondary btn-xs go-to-back-button"><i class="fa fa-arrow-left"></i> Go Back</a>
            <a href="{{ route('employee.create') }}" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Add Employee</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Street</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Postcode</th>
                    <th>Country</th>
                    <th>Job</th>
                    <th>mgr</th>
                    <th>Hiredate</th>
                    <th>Sal</th>
                    <th>Comm</th>
                    <th>Deptno</th>
                    <th>Created</th>
                    <th>Modified</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($employee As $employee)
                    <tr>
                        <td>{{$employee->empno}}</td>
                        <td>{{$employee->ename}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->house_number}}</td>
                        <td>{{$employee->street}}</td>
                        <td>{{$employee->city}}</td>
                        <td>{{$employee->state}}</td>
                        <td>{{$employee->postcode}}</td>
                        <td>{{$employee->country}}</td>
                        <td>{{$employee->job}}</td>
                        <td>{{$employee->mgr}}</td>
                        <td>{{$employee->hiredate}}</td>
                        <td>{{$employee->sal}}</td>
                        <td>{{$employee->comm}}</td>
                        <td>{{$employee->deptno}}</td>
                        <td>{{$employee->created_at}}</td>
                        <td>{{$employee->updated_at}}</td>
                        <td>
                            <a href="{{ route('employee.edit',$employee->empno) }}" class="btn btn-success btn-sm">Edit</a>
                            <a href="{{ route('employee.show', $employee->empno) }}" class="btn btn-info btn-sm">View</a>
                            <form action="{{ route('employee.destroy',$employee->empno) }}" method="POST" style="display:inline-block">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-sm">
                                    <span>DELETE</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

@endsection