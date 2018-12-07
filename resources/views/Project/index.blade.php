@extends('layouts.default.layout')

@section('content')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item active">Projects</li>
    </ol>
    <h3>Projects</h3>
    <hr>

    @if(session()->has('status'))
        <p class="alert alert-info">
            {{	session()->get('status') }}
        </p>
    @endif

    <div class="panel panel-default">
        <div class="panel-top-links m-t-sm m-b-sm">
            <a href="#" class="btn btn-secondary btn-xs go-to-back-button"><i class="fa fa-arrow-left"></i> Go Back</a>
            <a href="{{ route('project.create') }}" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Add Project</a>
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Budget</th>
                    <th>Created</th>
                    <th>Modified</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($projects As $project)
                    <tr>
                        <td>{{$project->projno}}</td>
                        <td>{{$project->pname}}</td>
                        <td>{{$project->budget}}</td>
                        <td>{{$project->created_at}}</td>
                        <td>{{$project->updated_at}}</td>
                        <td>
                            <a href="{{ route('project.edit',$project->projno) }}" class="btn btn-success btn-sm">Edit</a>
                            <a href="{{ route('project.show', $project->projno) }}" class="btn btn-info btn-sm">View</a>
                            <form action="{{ route('project.destroy', $project->projno) }}" method="POST" style="display:inline-block">
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