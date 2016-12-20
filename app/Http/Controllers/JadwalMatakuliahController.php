<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\JadwalMatakuliah;
use Illuminate\Http\Request;
use Session;

class JadwalMatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $jadwalmatakuliah = JadwalMatakuliah::paginate(25);

        return view('admin.jadwalmatakuliah.index', compact('jadwalmatakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.jadwalmatakuliah.create');
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
        
        JadwalMatakuliah::create($requestData);

        Session::flash('flash_message', 'JadwalMatakuliah added!');

        return redirect('admin/jadwalmatakuliah');
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
        $jadwalmatakuliah = JadwalMatakuliah::findOrFail($id);

        return view('admin.jadwalmatakuliah.show', compact('jadwalmatakuliah'));
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
        $jadwalmatakuliah = JadwalMatakuliah::findOrFail($id);

        return view('admin.jadwalmatakuliah.edit', compact('jadwalmatakuliah'));
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
        
        $jadwalmatakuliah = JadwalMatakuliah::findOrFail($id);
        $jadwalmatakuliah->update($requestData);

        Session::flash('flash_message', 'JadwalMatakuliah updated!');

        return redirect('admin/jadwalmatakuliah');
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
        JadwalMatakuliah::destroy($id);

        Session::flash('flash_message', 'JadwalMatakuliah deleted!');

        return redirect('admin/jadwalmatakuliah');
    }
}
