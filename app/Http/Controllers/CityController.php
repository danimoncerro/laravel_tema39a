<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
{
    public function index()
    {
    	$cities = City::all();
    	return view('cities.index', compact('cities'));
    }

    public function create() 
    {
    	return view('cities.form_create');
    }

    public function save(Request $request)
    {
    	if ($request->id == null) {
    		// Am venit din formularul de adaugare
    		$city = new City;
    	} else {
    		// Am venit din formularul de editare 
    		// Cautam orasul cu idul selectat
	    	$city = City::find($request->id);
    	}

    	$city->name = $request->name;
    	$city->county_id = $request->county_id;

    	$city->save();

    	// redirect catre listare judete
    	return redirect('/cities');
    }

     public function edit($id)
    {
    	
    	$city = City::find($id);

    	return view('cities.form_edit', compact('city'));
    }

     public function delete($id)
    {
    	$city = City::find($id);
    	$city->delete();

    	// redirect catre listare orase
    	return redirect('/cities');
    }
}
