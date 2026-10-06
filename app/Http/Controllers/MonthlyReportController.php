<?php

namespace App\Http\Controllers;

use App\Models\MonthlyReport;
use Illuminate\Http\Request;

class MonthlyReportController extends Controller
{
    public function index()
    {
        return response()->json(MonthlyReport::all());
    }

    public function store(Request $request)
    {
        return response()->json(MonthlyReport::create($request->all()), 201);
    }

    public function show(MonthlyReport $monthlyreport)
    {
        return response()->json($monthlyreport);
    }

    public function update(Request $request, MonthlyReport $monthlyreport)
    {
        $monthlyreport->update($request->all());
        return response()->json($monthlyreport);
    }

    public function destroy(MonthlyReport $monthlyreport)
    {
        $monthlyreport->delete();
        return response()->json(['message' => 'تم الحذف']);
    }
}
