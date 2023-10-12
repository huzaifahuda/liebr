<?php

namespace App\Http\Controllers\management;

use App\Http\Controllers\Controller;
use App\Models\Skills;
use Illuminate\Http\Request;
use App\Models\{
    Category,
};
use Illuminate\Support\Facades\Auth;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $data['category'] = Category::findorfail($request->p);
        return view('management.skills.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        $data['created_by'] = Auth::user()->id;

        Skills::create($data);
        return response()->json(['success','Skills Created Sucessfully'], 200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $data['skills'] = Skills::where('category_id', $id)->get();
       return view('management.skills.loop', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skills  $skills
     * @return \Illuminate\Http\Response
     */
    public function edit(Skills $skills)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skills  $skills
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'title' => 'required',
        ]);

        $skills = Skills::findorfail($id);
        $skills->update($request->all());
        return redirect()->back()
            ->with('success','Skills updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skills  $skills
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Skills $skills, $id)
    {
        Skills::findorfail($id)->delete();

        return redirect()->back()
            ->with('success','Skills deleted successfully');
    }
}
