<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\County;
use App\City;

class CountyController extends Controller
{
    public function index()
    {
    	$counties = County::all();
    	return view('counties.index', compact('counties'));
    }

    public function cities($id) {
    	$county = County::find($id);
    	$cities = City::where('county_id', $id)->get();

    	return view('cities.county_index', compact(['cities', 'county']));
    }

    public function create() 
    {
    	return view('counties.form_create');
    }

    public function save(Request $request)
    {
    	if ($request->id == null) {
    		// Am venit din formularul de adaugare
    		$county = new County;
    	} else {
    		// Am venit din formularul de editare 
    		// Cautam judetul cu idul selectat
	    	$county = County::find($request->id);
    	}

    	$county->name = $request->name;

    	$county->save();

    	// redirect catre listare judete
    	return redirect('/counties');
    }

     public function edit($id)
    {
    	
    	$county = County::find($id);

    	return view('counties.form_edit', compact('county'));
    }

     public function delete($id)
    {
    	$county = County::find($id);
    	$county->delete();

    	// redirect catre listare judete
    	return redirect('/counties');
    }
}
