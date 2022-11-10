<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
 use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class  HotelController extends Controller
{
    public function index()
    {
  
        $hotels = Hotel::with('country')->get();
        return $hotels;
    }
    public function show($id) {
        return  Hotel::find($id);
    }

    public function store(Request $request)
    {
        $hotel = new Hotel();
        $hotel->fill($request->all());
        return ($hotel->save())
            ? response()->json(['success' => 'Created successfully'], 201)
            : response()->json(['error' => 'Creation failed'], 400);
    }

    public function update(Request $request, $id)
    {
        
        $hotel = Hotel::find($id);
        $hotel->fill($request->all());
        return ($hotel->save())
            ? response()->json(['success' => 'Updated successfully'], 200)
            : response()->json(['error' => 'Update failed'], 400);
    }



    public function destroy($id)
    {
        Hotel::find($id)->delete();
        return 'Post deleted';
    }
}
