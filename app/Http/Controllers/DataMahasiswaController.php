<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\DataMahasiswa;
use Illuminate\Http\Request;
use Session;

class DataMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $datamahasiswa = DataMahasiswa::paginate(25);

        return view('admin.datamahasiswa.index', compact('datamahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.datamahasiswa.create');
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
        
        DataMahasiswa::create($requestData);

        Session::flash('flash_message', 'DataMahasiswa added!');

        return redirect('admin/datamahasiswa');
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
        $datamahasiswa = DataMahasiswa::findOrFail($id);

        return view('admin.datamahasiswa.show', compact('datamahasiswa'));
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
        $datamahasiswa = DataMahasiswa::findOrFail($id);

        return view('admin.datamahasiswa.edit', compact('datamahasiswa'));
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
        
        $datamahasiswa = DataMahasiswa::findOrFail($id);
        $datamahasiswa->update($requestData);

        Session::flash('flash_message', 'DataMahasiswa updated!');

        return redirect('admin/datamahasiswa');
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
        DataMahasiswa::destroy($id);

        Session::flash('flash_message', 'DataMahasiswa deleted!');

        return redirect('admin/datamahasiswa');
    }
}
