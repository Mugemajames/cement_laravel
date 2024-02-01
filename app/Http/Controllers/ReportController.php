<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materials;

class ReportController extends Controller
{
    function reportView(){
        $report = Materials::all();
        return view('admin.report.report',compact('report')); 
    }
}
