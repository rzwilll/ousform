<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advisee;
use App\Models\AcadYear;
use App\Models\ProgramOutputsDeliverables;
use App\Models\ProgramEngagementActivities;
use App\Models\ConsultationAdvising;
use App\Models\RiskChallenges;
use App\Models\CollaborationsLinkages;
use App\Models\ProblemsEncountered;
use App\Models\Recommendations;
use App\Models\Reports;
use App\Models\ProgramPlans;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;



class AdviseeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = Auth::user();

        //


        // SELECT * FROM advisees 
        // INNER JOIN users ON users.id = advisees.user_id 
        // INNER JOIN students ON advisees.student_id = students.id 
        // INNER JOIN acad_terms ON advisees.term_id = acad_terms.id 
        // WHERE users.id = 1 AND acad_terms.acadyear_id = 1 AND acad_terms.acad_sem = 2;
        
        
        $academic_school_year = AcadYear::orderBy('status', 'DESC')->get();

        // $reports = DB::table('acad_years')
        // ->join('acad_terms', 'acad_terms.acadyear_id', '=', 'acad_years.id')
        // ->join('advisees', 'advisees.term_id', '=', 'acad_terms.id')
        // ->join('reports', 'reports.advisee_id', '=', 'advisees.id')
        // ->where('advisees.user_id', '=', auth()->user()->id)
        // ->select('reports.id as re_id', 'acad_years.acad_yr as school_year', 'reports.created_at')
        // ->get();

        // ->join('users', 'users.id', '=', 'advisees.user_id')

        $adviseelist = DB::table('advisees')
        ->join('users', 'users.id', '=', 'advisees.user_id')
        ->join('students', 'advisees.student_id', '=', 'students.id')
        ->join('acad_terms', 'advisees.term_id', '=', 'acad_terms.id')
        ->where('users.id', '=', auth()->user()->id)
        ->where('acad_terms.acadyear_id', 1,) 
        ->where('acad_terms.acad_sem',1)
        ->get(); 



        return view('advisee.index', compact('adviseelist', 'academic_school_year'));



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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        return view('advisee.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
