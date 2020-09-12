<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\testing_case;
use Illuminate\Http\Request;
use Exception;

class TestingCasesController extends Controller
{

    /**
     * Display a listing of the testing cases.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $testingCases = testing_case::paginate(25);

        return view('tables', compact('testingCases'));
    }

}
