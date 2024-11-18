<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/users", function () {
    return view("users");
});

Route::get("/invoices", [InvoiceController::class, 'index']);
Route::post("/invoices/create", [InvoiceController::class, 'create']);
Route::get("/invoices/delete", [InvoiceController::class, 'delete']);
Route::get("/invoices/new", [InvoiceController::class, 'new']);

Route::get("/article", [ArticleController::class, 'index']);

Route::get("/branch", [BranchController::class, 'index']);

Route::get("/employee", [EmployeeController::class, 'index']);

Route::get("/leave", [LeaveController::class, 'index']);

Route::get("/stock", [StockController::class, 'index']);        