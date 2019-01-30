<?php

namespace App\Http\Controllers;

use App\Catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Catagory::all();
        return view('catagory.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("catagory.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // step 1 : validate data from form
        $this -> validate($request, array(
            'catname' => 'required|max:255',
        ));

        // step 2 : save data to the database
        $cat = new Catagory;
        $cat->name = $request->catname;
        $cat->save();

        // step 3 : redirect web pages
        $data = Catagory::all();
        return view('catagory.index')->with('data',$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Catagory::find($id);
        return view('catagory.show')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function edit(Catagory $catagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catagory $catagory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Catagory::find($id);
        $data->delete();

        $data = Catagory::all();
        return view('catagory.index')->with('data',$data);
    }
}
