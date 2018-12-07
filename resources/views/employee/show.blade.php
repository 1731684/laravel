@extends('layouts.default.layout')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item active">Employee</li>
    </ol>
    <h3>Employee #{{$employee->empno}}</h3>
    <hr>
    @if(session()->has('status'))
        <p class="alert alert-info">
            {{	session()->get('status') }}
        </p>
    @endif

    <div class="panel panel-default">

        <div class="col-sm-12 col-sm-offset-3">

            <div class="panel-top-links m-t-sm m-b-sm float-lg-right">
                <a href="#" class="btn btn-secondary btn-xs go-to-back-button"><i class="fa fa-arrow-left"></i> Go Back</a>
            </div>
            <div class="panel-body">
                <div class="col-sm-6 dataview">
                    <table style="width:100%">
                        <tr>
                            <th>Name:</th>
                            <td>{{$employee->ename}}</td>
                        </tr>
                        <tr>
                            <th>Location:</th>
                            <td>{{$employee->email}}</td>
                        </tr>
                        <tr>
                            <th>House number:</th>
                            <td>{{$employee->house_number}}</td>
                        </tr>
                        <tr>
                            <th>Street:</th>
                            <td>{{$employee->street}}</td>
                        </tr>
                        <tr>
                            <th>City:</th>
                            <td>{{$employee->city}}</td>
                        </tr> <tr>
                            <th>State:</th>
                            <td>{{$employee->state}}</td>
                        </tr> <tr>
                            <th>Postcode:</th>
                            <td>{{$employee->postcode}}</td>
                        </tr>
                        <tr>
                            <th>Country:</th>
                            <td>{{$employee->country}}</td>
                        </tr>
                        <tr>
                            <th>Job:</th>
                            <td>{{$employee->job}}</td>
                        </tr>
                        <tr>
                            <th>Mgr:</th>
                            <td>{{$employee->mgr}}</td>
                        </tr>
                        <tr>
                            <th>Hiredate:</th>
                            <td>{{$employee->hiredate}}</td>
                        </tr>
                        <tr>
                            <th>Salary:</th>
                            <td>{{$employee->sal}}</td>
                        </tr>
                        <tr>
                            <th>Commission:</th>
                            <td>{{$employee->comm}}</td>
                        </tr>
                        <tr>
                            <th>Dept no:</th>
                            <td>{{$employee->deptno}}</td>
                        </tr>


                        <tr>
                            <th>Created at:</th>
                            <td>{{$employee->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Modified at:</th>
                            <td>{{$employee->updated_at}}</td>
                        </tr>

                    </table>


                </div>

            </div>

        </div>
    </div>

@endsection