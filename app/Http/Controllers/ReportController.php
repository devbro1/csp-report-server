<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCSPReportRequest;
use App\Http\Requests\UpdateCSPReportRequest;
use App\Models\CSPReport;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd("ASD");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCSPReportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCSPReportRequest $request)
    {
        dd("ASD");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CSPReport  $cSPReport
     * @return \Illuminate\Http\Response
     */
    public function show(CSPReport $cSPReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CSPReport  $cSPReport
     * @return \Illuminate\Http\Response
     */
    public function edit(CSPReport $cSPReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCSPReportRequest  $request
     * @param  \App\Models\CSPReport  $cSPReport
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCSPReportRequest $request, CSPReport $cSPReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CSPReport  $cSPReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(CSPReport $cSPReport)
    {
        //
    }
}
