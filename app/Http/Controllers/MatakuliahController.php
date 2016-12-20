<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Matakuliah;
use Illuminate\Http\Request;
use Session;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $matakuliah = Matakuliah::paginate(25);

        return view('admin.matakuliah.index', compact('matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.matakuliah.create');
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
        
        Matakuliah::create($requestData);

        Session::flash('flash_message', 'Matakuliah added!');

        return redirect('admin/matakuliah');
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
        $matakuliah = Matakuliah::findOrFail($id);

        return view('admin.matakuliah.show', compact('matakuliah'));
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
        $matakuliah = Matakuliah::findOrFail($id);

        return view('admin.matakuliah.edit', compact('matakuliah'));
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
        
        $matakuliah = Matakuliah::findOrFail($id);
        $matakuliah->update($requestData);

        Session::flash('flash_message', 'Matakuliah updated!');

        return redirect('admin/matakuliah');
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
        Matakuliah::destroy($id);

        Session::flash('flash_message', 'Matakuliah deleted!');

        return redirect('admin/matakuliah');
    }
}
