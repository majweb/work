<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use App\Imports\CategoryImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        Excel::import(new CategoryImport, 'BRANŻE.xlsx');
    }
}
