<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() 
    {
        $PersArr = [
            [
                'persnr' => "0123456",
                'name' => "Sannie",
                'age' => "35"
            ],
            [
                'persnr' => "889531",
                'name' => "George",
                'age' => "22"
            ],
            [
                'persnr' => "5552881",
                'name' => "Rina",
                'age' => "61"
            ],
            [
                'persnr' => "8976325",
                'name' => "Tiaan",
                'age' => "45"
            ],
            [
                'persnr' => "7777777",
                'name' => "Theo",
                'age' => "19"
            ],
            [
                'persnr' => "9639638",
                'name' => "Olaf",
                'age' => "52"
            ],
            [
                'persnr' => "1478963",
                'name' => "Rico",
                'age' => "63"
            ],
            [
                'persnr' => "7412369",
                'name' => "Jonah",
                'age' => "39"
            ],
        ];
        return view('Employee', ['PersArr' => $PersArr]);
    }
}
