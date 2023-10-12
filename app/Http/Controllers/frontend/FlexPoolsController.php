<?php

namespace App\Http\Controllers\frontend;

use App\Models\FlexPools;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class FlexPoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $data['flexpools'] = FlexPools::with('category')->get();
        return view('frontend.flexpools.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = Category::whereStatus(1)->get();
//        dd($data);
        return view('frontend.flexpools.add', $data);
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
        FlexPools::create($data);

        return redirect()->route('flexpools.index')
            ->with('success','FlexPool created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FlexPools  $flexPools
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(FlexPools $flexPools)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FlexPools  $flexPools
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = base64_decode($id);
        $data['category'] = Category::whereStatus(1)->get();
        $data['flexpools'] = FlexPools::findorfail($id);
        return view('frontend.flexpools.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FlexPools  $flexPools
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $id = base64_decode($id);
        request()->validate([
            'flexpoolname' => 'required',
        ]);

        FlexPools::findorfail($id)->update($request->all());
        return redirect()->back()
            ->with('success','Flexpools updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FlexPools  $flexPools
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(FlexPools $flexPools, $id)
    {
        FlexPools::findorfail($id)->delete();


        return redirect()->back()
            ->with('wrong','FlexPools deleted successfully');
    }
}
