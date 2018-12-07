@extends('layouts.default.layout')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item active">Project</li>
    </ol>
    <h3>Project #{{$project->projno}}</h3>
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
                            <td>{{$project->projno}}</td>
                        </tr>
                        <tr>
                            <th>Location:</th>
                            <td>{{$project->pname}}</td>
                        </tr>
                        <tr>
                            <th>Location:</th>
                            <td>{{$project->budget}}</td>
                        </tr>
                        <tr>
                            <th>Created at:</th>
                            <td>{{$project->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Modified at:</th>
                            <td>{{$project->updated_at}}</td>
                        </tr>

                    </table>


                </div>

            </div>

        </div>
    </div>

@endsection