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


        // SELECT acad_years.acad_yr, students.stud_idnum, students.stud_last, students.stud_first, students.stud_mi, (SUM(subject_grades.grade*subjects.subject_unit)/SUM(subjects.subject_unit)) as GPA FROM subject_grades
        // INNER JOIN subjects ON subject_grades.subject_id = subjects.id
        // INNER JOIN students ON subject_grades.stud_id = students.id
        // INNER JOIN acad_terms ON subject_grades.term_id = acad_terms.id
        // INNER JOIN acad_years ON acad_terms.acadyear_id = acad_years.id
        // WHERE acad_terms.acad_sem =1 AND acad_years.id = 1 AND students.id = 2;
        $adviseelist = [];
        $academic_school_year = AcadYear::orderBy('status', 'DESC')->get();

        $adviseelist_students = DB::table('advisees')
        ->join('users', 'users.id', '=', 'advisees.user_id')
        ->join('students', 'advisees.student_id', '=', 'students.id')
        ->join('acad_terms', 'advisees.term_id', '=', 'acad_terms.id')
        ->where('users.id', '=', auth()->user()->id)
        ->where('acad_terms.acadyear_id', 1,) 
        ->where('acad_terms.acad_sem',1)
        ->select('students.*')
        ->get(); 

        foreach ($adviseelist_students as $value) {
             $student_gpa = DB::table('subject_grades')
            ->join('subjects', 'subject_grades.subject_id', '=', 'subjects.id')
            ->join('students', 'subject_grades.stud_id', '=', 'students.id')
            ->join('acad_terms', 'subject_grades.term_id', '=', 'acad_terms.id')
            ->join('acad_years', 'acad_terms.acadyear_id', '=', 'acad_years.id')
            ->where('acad_terms.acad_sem', '=', 1)
            ->where('acad_years.id', 1,) 
            ->where('students.id',$value->id)
            ->select(DB::raw('(SUM(subject_grades.grade*subjects.subject_unit)/SUM(subjects.subject_unit)) as GPA'))
            ->first(); 


            $student_gpa = array(
                'id' => $value->id,
                'stud_idnum' => $value->stud_idnum,
                'stud_last' => $value->stud_last,
                'stud_first' => $value->stud_first,
                'stud_mi' => $value->stud_mi,
                'student_gpa' => $student_gpa->GPA
            );

            array_push($adviseelist, $student_gpa);
        }

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
