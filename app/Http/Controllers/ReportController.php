<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Http\Requests\StoreReportRequest;

class ReportController extends Controller
{
    public function store(StoreReportRequest $request)
    {
        $validatedData = $request->validated();

        $report = Report::create($validatedData);

        return response()->json(['message' => 'Dane zostały zapisane poprawnie'], 201);
    }
}
