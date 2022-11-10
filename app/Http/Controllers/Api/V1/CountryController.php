<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class CountryController extends Controller
{

    public function index() {
        return  Country::all();


        
    }
    public function show($id) {
        return  Country::find($id);

    }


    public function store(Request $request)
    {
        $newCountry = new Country();
        $newCountry ->fill($request->all());
        return ($newCountry->save())
        ? response()->json(['success' => 'Created successfully'], 201)
        : response()->json(['error' => 'Creation failed'], 400);
}


    public function update(Request $request, $id)
    {
        $country = Country::find($id);
        $country->fill($request->all());
 
        return ($country->save())
        ? response()->json(['success' => 'Updated successfully'], 200)
        : response()->json(['error' => 'Update failed'], 400);
}



    public function destroy($id){
        Country::find($id)->delete();
        return 'Post deleted';
    }
}
