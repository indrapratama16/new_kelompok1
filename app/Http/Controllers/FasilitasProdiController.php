<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\FasilitasProdi;
use Illuminate\Http\Request;
use Session;

class FasilitasProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $fasilitasprodi = FasilitasProdi::paginate(25);

        return view('admin.fasilitasprodi.index', compact('fasilitasprodi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.fasilitasprodi.create');
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
        
        FasilitasProdi::create($requestData);

        Session::flash('flash_message', 'FasilitasProdi added!');

        return redirect('admin/fasilitasprodi');
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
        $fasilitasprodi = FasilitasProdi::findOrFail($id);

        return view('admin.fasilitasprodi.show', compact('fasilitasprodi'));
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
        $fasilitasprodi = FasilitasProdi::findOrFail($id);

        return view('admin.fasilitasprodi.edit', compact('fasilitasprodi'));
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
        
        $fasilitasprodi = FasilitasProdi::findOrFail($id);
        $fasilitasprodi->update($requestData);

        Session::flash('flash_message', 'FasilitasProdi updated!');

        return redirect('admin/fasilitasprodi');
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
        FasilitasProdi::destroy($id);

        Session::flash('flash_message', 'FasilitasProdi deleted!');

        return redirect('admin/fasilitasprodi');
    }
}
