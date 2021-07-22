<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AnalyseRequest;
use App\Models\Analyse;

class AnalyseController extends Controller
{
    public function index()
    {
        return view('analyse-index');
    }

    public function outPut(AnalyseRequest $request)
    {
        $results = Analyse::out($request->string);

        return view('analyse-result')->with('results', $results);
    }
}
