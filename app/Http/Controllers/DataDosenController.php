<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\DataDosen;
use Illuminate\Http\Request;
use Session;

class DataDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $datadosen = DataDosen::paginate(25);

        return view('admin.datadosen.index', compact('datadosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.datadosen.create');
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
        
        DataDosen::create($requestData);

        Session::flash('flash_message', 'DataDosen added!');

        return redirect('admin/datadosen');
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
        $datadosen = DataDosen::findOrFail($id);

        return view('admin.datadosen.show', compact('datadosen'));
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
        $datadosen = DataDosen::findOrFail($id);

        return view('admin.datadosen.edit', compact('datadosen'));
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
        
        $datadosen = DataDosen::findOrFail($id);
        $datadosen->update($requestData);

        Session::flash('flash_message', 'DataDosen updated!');

        return redirect('admin/datadosen');
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
        DataDosen::destroy($id);

        Session::flash('flash_message', 'DataDosen deleted!');

        return redirect('admin/datadosen');
    }
}
