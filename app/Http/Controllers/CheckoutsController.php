<?php

namespace App\Http\Controllers;

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
}
