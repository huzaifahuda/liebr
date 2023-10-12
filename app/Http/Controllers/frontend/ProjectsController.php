<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Companies;
use App\Models\FlexPools;
use App\Models\Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $data['projects'] = Projects::where('created_by', Auth::user()->id)->get();
        return view('frontend.projects.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $data['companies'] = Companies::get();
//        dd($data);
        return view('frontend.projects.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data =$request->all();
        $data['created_by'] = Auth::user()->id;
//        dd($data);
        Projects::create($data);

        return redirect()->route('projects.index')
            ->with('success','Comapny saved successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['projects'] = Projects::where('created_by', Auth::user()->id)->where('id', $id)->first();
        if ($data['projects']){
            return view('frontend.projects.show', $data);
        }
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['companies'] = Companies::get();
        $data['projects'] = Projects::where('created_by', Auth::user()->id)->where('id', $id)->first();
        return view('frontend.projects.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'projectname' => 'required',
        ]);
       $project = Projects::findorfail(base64_decode($id));
       $project->update($request->all());
        return redirect()->back()
            ->with('success','Projects updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projects $projects)
    {
        //
    }
}
