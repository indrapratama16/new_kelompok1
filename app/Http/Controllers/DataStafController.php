<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\DataStaf;
use Illuminate\Http\Request;
use Session;

class DataStafController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $datastaf = DataStaf::paginate(25);

        return view('admin.datastaf.index', compact('datastaf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.datastaf.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        DataStaf::create($requestData);

        Session::flash('flash_message', 'DataStaf added!');

        return redirect('admin/datastaf');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $datastaf = DataStaf::findOrFail($id);

        return view('admin.datastaf.show', compact('datastaf'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $datastaf = DataStaf::findOrFail($id);

        return view('admin.datastaf.edit', compact('datastaf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $datastaf = DataStaf::findOrFail($id);
        $datastaf->update($requestData);

        Session::flash('flash_message', 'DataStaf updated!');

        return redirect('admin/datastaf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        DataStaf::destroy($id);

        Session::flash('flash_message', 'DataStaf deleted!');

        return redirect('admin/datastaf');
    }
}
