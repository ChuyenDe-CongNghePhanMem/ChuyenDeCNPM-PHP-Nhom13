<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\airline_company;

class airline_companyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $airline_companies=airline_company::all();
        return view('airline_company.tables')->with('airline_companys',$airline_companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('airline_company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        airline_company::create($request->all());
        return redirect()->route('airline_company.index')->with('msg','sucess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $airline_companys=airline_company::find($id);
        return view('airline_company.detail')->with('airline_companys',$airline_companys);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $airline_companys=airline_company::find($id);
        return view('airline_company.edit')->with('airline_companys',$airline_companys);
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
        $airline_companys = airline_company::find($id);
        $airline_companys->name=$request->name;
        $airline_companys->phone=$request->phone;
        $airline_companys->id_card=$request->id_card;
        $airline_companys->save();
        return redirect()->route('airline_company.index')->with('msg','sucess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $airline_companys=airline_company::find($id);
        $airline_companys->delete();
        return redirect()->route('airline_company.index')->with('msg','sucess');
    }
}
