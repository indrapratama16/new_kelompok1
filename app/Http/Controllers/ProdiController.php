<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Prodi;
use Illuminate\Http\Request;
use Session;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $prodi = Prodi::paginate(25);

        return view('admin.prodi.index', compact('prodi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.prodi.create');
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
        
        Prodi::create($requestData);

        Session::flash('flash_message', 'Prodi added!');

        return redirect('admin/prodi');
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
        $prodi = Prodi::findOrFail($id);

        return view('admin.prodi.show', compact('prodi'));
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
        $prodi = Prodi::findOrFail($id);

        return view('admin.prodi.edit', compact('prodi'));
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
        
        $prodi = Prodi::findOrFail($id);
        $prodi->update($requestData);

        Session::flash('flash_message', 'Prodi updated!');

        return redirect('admin/prodi');
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
        Prodi::destroy($id);

        Session::flash('flash_message', 'Prodi deleted!');

        return redirect('admin/prodi');
    }
}
