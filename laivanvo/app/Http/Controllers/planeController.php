<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plane;

class bill_detailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$planes=plane::paginate(10);
        $planes=plane::all();
        return view('plane.tables')->with('planes',$planes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plane.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        plane::create($request->all());
        return redirect()->route('plane.index')->with('msg','sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $planes=plane::find($id);
        return view('plane.detail')->with('planes',$planes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planes=plane::find($id);
        return view('plane.edit')->with('planes',$planes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $planes = plane::find($id);
        $planes->name=$request->name;
        $planes->phone=$request->phone;
        $planes->id_card=$request->id_card;
        $planes->save();
        return redirect()->route('plane.index')->with('msg','sucess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $planes=plane::find($id);
        $planes->delete();
        return redirect()->route('plane.index')->with('msg','sucess');
    }
}
