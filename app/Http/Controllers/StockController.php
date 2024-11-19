<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index() 
    {
        $StockArr = [
            [
                'SKU' => 12345676890,
                'Desc' => "Cola Product 500ml",
                "Stock" => 10
            ],
            [
                'SKU' => 894894321651,
                'Desc' => "Handsaw 0.8m",
                "Stock" => 25
            ],
            [
                'SKU' => 5788946210,
                'Desc' => "Soap",
                "Stock" => 100
            ],
        ];
        return view('Stock', ['StockArr' => $StockArr]);
    }
}
