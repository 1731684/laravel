<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project\Project;

class ProjectController extends Controller
{

    public function index()
    {
        $projects=Project::all();
        return view('project.index',['projects'=>$projects]);

    }

    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    {
        try
        {
            $this->validate($request, $this->rules());
            $objProject = new Project();
            $objProject->pname = $request->input('pname');
            $objProject->budget = $request->input('budget');


            if ($objProject->save()) {
                session()->flash('status', 'The new project is added sucessfully');
                return redirect(route('project.index'));
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

    public function show(Project $project)
    {
        return view('project.show',['project'=>$project]);

    }

    public function edit(Project $project)
    {
        // print($department->deptno);exit;
        return view('project.edit',['project'=>$project]);

    }

    public function update(Request $request, Project $project)
    {
        try
        {
            $project->pname = $request->input('pname');
            $project->budget = $request->input('budget');


            if ($project->save()) {
                session()->flash('status', 'The  project is updated sucessfully');
                return redirect(route('project.index'));
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

    public function destroy(Project $project)
    {
        $project->delete();
        session()->flash('status', 'The  department has been deleted');
        return redirect(route('project.index'));
    }


    private function rules() {
        $rules = [
            'pname'     => 'required|min:6',
            'budget' => 'required|min:5'
        ];

        return $rules;
    }
}
