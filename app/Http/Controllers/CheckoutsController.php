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

    public function add(Request $request)
    {
        $input = $request->all();
        $checkout = new Checkout();
        $checkout->ref_user_id = $input['user'];
        $checkout->ref_book_id = $input['book'];
        $checkout->checkout_date = \date_create()->format('Y-m-d H:i:s');
        $checkout->due_date = \date_create()->format('Y-m-d H:i:s');
        $checkout->save();
        return response(['message' => 'Book checked out successfully!', 'status' => true, 'checkout' => $checkout]);
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
