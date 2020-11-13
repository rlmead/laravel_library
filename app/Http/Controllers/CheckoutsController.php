<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Checkout;

class CheckoutsController extends Controller
{
    public function index()
    {
        return Checkout::get();
    }

    public function show($id)
    {
        return Checkout::findOrFail($id);
    }

    public function active()
    {
        return Checkout::whereNull('return_date')->get();
    }

    public function return_book(Request $request)
    {
        $input = $request->all();
        $checkout = Checkout::find($input['id']);
        $checkout->return_date = \date_create()->format('Y-m-d H:i:s');
        $checkout->save();
        
        return response(['message' => 'Book returned successfully!', 'status' => true, 'checkout' => $checkout]);
    }
}
