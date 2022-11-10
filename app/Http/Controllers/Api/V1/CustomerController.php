<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class  CustomerController extends Controller
{

    public function index()
    { 
        $customers = Customer::with('hotel')->get();
        return $customers;
    }
    public function show($id) {
        return Customer::find($id);
    }
    public function store(Request $request)
    
          
        {
            $newCustomer = new  Customer();
            $newCustomer ->fill($request->all());
            return ($newCustomer->save())
            ? response()->json(['success' => 'Created successfully'], 201)
            : response()->json(['error' => 'Creation failed'], 400);
    }
    


    public function update(Request $request, $id)
     
    {
        $customers = Customer::find($id);
        $customers->fill($request->all());
 
        return ($customers->save())
        ? response()->json(['success' => 'Updated successfully'], 200)
        : response()->json(['error' => 'Update failed'], 400);
}

    public function destroy($id)
    {
        Customer::find($id)->delete();
        return 'Post deleted';
    }
}
