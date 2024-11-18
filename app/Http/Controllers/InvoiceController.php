<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Stringable;

class InvoiceController extends Controller
{
    /**
     * List all invoices
     *
     * @return view invoices
     */
    public function index() 
    {
        $data = rand(1000000, 9999999);
        $all = Invoice::all();

        return view("invoices", ['all' => $all]);
    }   
    /**
     * Create Invoice
     * 
     * @return view created-invoice
     */
    public function create(Request $request) 
    {
        // return response()->json("Duplicate Entry", '500');
        Invoice::create(['title' => $request->get("title")]);
        return redirect('/invoices');
    }

    public function new() 
    {
        return view('new-invoice');
    }

    /**
     * Delete all Invoices
     *
     * @return void
     */
    public function delete() 
    {
        Invoice::truncate();

    }
}
