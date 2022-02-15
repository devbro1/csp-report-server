<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCSPReportRequest;
use App\Http\Requests\UpdateCSPReportRequest;
use App\Models\CSPReport;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return [];
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
        $csp_report = $request->get('csp-report',[]);

        $report = new CSPReport();
        $report->document_uri = $csp_report['document-uri'];
        $report->referrer = $csp_report['referrer'];
        $report->blocked_uri = $csp_report['blocked-uri'];
        $report->violated_directive = $csp_report['violated-directive'];
        $report->original_policy = $csp_report['original-policy'];
        $report->status_code = $csp_report['status-code'];
        $report->script_sample = $csp_report['script-sample'];
        $report->report = json_encode($csp_report,false);
        $report->save();

        return [];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CSPReport  $cSPReport
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if(!hash_equals($request->get('code'),env('access_code'))){
            return [];
        }
        $report = CSPReport::findOrFail($id);
        return (json_decode($report->report));
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
