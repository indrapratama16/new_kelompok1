<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\DosenWali;
use Illuminate\Http\Request;
use Session;

class DosenWaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $dosenwali = DosenWali::paginate(25);

        return view('admin.dosenwali.index', compact('dosenwali'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.dosenwali.create');
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
        
        DosenWali::create($requestData);

        Session::flash('flash_message', 'DosenWali added!');

        return redirect('admin/dosenwali');
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
        $dosenwali = DosenWali::findOrFail($id);

        return view('admin.dosenwali.show', compact('dosenwali'));
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
        $dosenwali = DosenWali::findOrFail($id);

        return view('admin.dosenwali.edit', compact('dosenwali'));
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
        
        $dosenwali = DosenWali::findOrFail($id);
        $dosenwali->update($requestData);

        Session::flash('flash_message', 'DosenWali updated!');

        return redirect('admin/dosenwali');
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
        DosenWali::destroy($id);

        Session::flash('flash_message', 'DosenWali deleted!');

        return redirect('admin/dosenwali');
    }
}
