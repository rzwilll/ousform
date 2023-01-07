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
use Auth;



class OUSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reports = DB::table('acad_years')
        ->join('acad_terms', 'acad_terms.acadyear_id', '=', 'acad_years.id')
        ->join('advisees', 'advisees.term_id', '=', 'acad_terms.id')
        ->join('reports', 'reports.advisee_id', '=', 'advisees.id')
        ->where('advisees.user_id', '=', auth()->user()->id)
        ->select('reports.id as re_id', 'reports.status', 'acad_years.acad_yr as school_year', 'reports.created_at')
        ->get();
        return view('ous.index', compact('reports'));
    }

    public function submit_ous_report(Request $request){
        
        $data = $request->all();
        if(isset($data['report_id'])){

                
            $reports = Reports::where('id', $data['report_id'])->first();
            $reports->status = 1;
            $reports->save();

            return response()->json(array('success' => true), 200);
        }

    }
    
    public function get_ous_details($id){

        $total_REA =0;
        $total_DEA =0;
        $total_CEA =0;
        $total_GPA_below =0;
        $total_CGPA_below =0;
        $total_completion = 0;
        $failure_rate= 0;
        $dropout_rate=0;
        $total_gpa = 0;
        $total_cgpa = 0;

     


        $advisee = Auth::user()->name;
        $report_status = Reports::where('id', $id)->first();
        $report_academic_year = DB::table('acad_years')
            ->join('acad_terms', 'acad_terms.acadyear_id', '=', 'acad_years.id')
            ->join('advisees', 'advisees.term_id', '=', 'acad_terms.id')
            ->join('reports', 'reports.advisee_id', '=', 'advisees.id')
            ->where('advisees.user_id', '=', auth()->user()->id)
            ->where('reports.id',$id)
            ->select('acad_years.id','acad_years.acad_yr as school_year', 'reports.created_at')
            ->first();


        // return $report_academic_year->id;


            
    
         
        
        
        $program_activities = ProgramEngagementActivities::where("report_id", $id)->get();
        $program_outputs_deliverables = ProgramOutputsDeliverables::where("report_id", $id)->get();
        $program_consultation_advising = ConsultationAdvising::where("report_id", $id)->get();
        $program_risk_challenges = RiskChallenges::where("report_id", $id)->get();
        $program_collaboration_linkages= CollaborationsLinkages::where("report_id", $id)->get();
        $program_problems_encountered = ProblemsEncountered::where("report_id", $id)->get();
        $program_recommendations = Recommendations::where("report_id", $id)->get();
        $program_program_plans = ProgramPlans::where("report_id", $id)->get();

        $report_id = $id;

        $program_name = DB::table('advisees')
        ->join('users', 'users.id', '=', 'advisees.user_id')
        ->join('students', 'advisees.student_id', '=', 'students.id')
        ->join('programs','programs.id','students.program_id')
        ->join('departments','programs.department_id','departments.id')
        ->join('acad_terms', 'advisees.term_id', '=', 'acad_terms.id')
        ->where('users.id', '=', auth()->user()->id)
        ->where('acad_terms.acadyear_id', $report_academic_year->id)
        ->select('programs.program_name','departments.department_name')
        ->first(); 

        $adviseelist_students = DB::table('advisees')
        ->join('users', 'users.id', '=', 'advisees.user_id')
        ->join('students', 'advisees.student_id', '=', 'students.id')
        ->join('programs','programs.id','students.program_id')
        ->join('acad_terms', 'advisees.term_id', '=', 'acad_terms.id')
        ->where('users.id', '=', auth()->user()->id)
        ->where('acad_terms.acadyear_id', $report_academic_year->id)
        ->select('students.*','programs.program_name')
        ->get(); 

        // dd($program_name);


        $total_program_enrolees = DB::table('advisees')
        ->join('users', 'users.id', '=', 'advisees.user_id')
        ->join('students', 'advisees.student_id', '=', 'students.id')
        ->join('acad_terms', 'advisees.term_id', '=', 'acad_terms.id')
        ->join('programs','programs.id','students.program_id')
        ->where('acad_terms.acadyear_id', $report_academic_year->id)
        ->select('students.*')
        ->count(); 

        //return $total_program_enrolees;

        $total_enroled = DB::table('advisees')
        ->join('users', 'users.id', '=', 'advisees.user_id')
        ->join('students', 'advisees.student_id', '=', 'students.id')
        ->join('acad_terms', 'advisees.term_id', '=', 'acad_terms.id')
        ->join('programs','programs.id','students.program_id')
        ->where('users.id', '=', auth()->user()->id)
        ->where('acad_terms.acadyear_id', $report_academic_year->id)
        ->select('students.*')
        ->count(); 

        $students_failing = DB::table('subject_grades')
        ->join('acad_terms', 'subject_grades.term_id', '=', 'acad_terms.id')
        ->join('subjects', 'subject_grades.subject_id', '=', 'subjects.id')
        ->join('advisees','subject_grades.stud_id','advisees.student_id')
        ->join('users','advisees.user_id','users.id')
        ->where('users.id', Auth::user()->id)
        ->where('acad_terms.acadyear_id', $report_academic_year->id) 
        ->where('subject_grades.grade', 5)
        ->count();

        $total_grade_INC = DB::table('subject_grades')
        ->join('acad_terms', 'subject_grades.term_id', '=', 'acad_terms.id')
        ->join('subjects', 'subject_grades.subject_id', '=', 'subjects.id')
        ->join('advisees','subject_grades.stud_id','advisees.student_id')
        ->join('users','advisees.user_id','users.id')
        ->where('users.id', Auth::user()->id)
        ->where('acad_terms.acadyear_id', $report_academic_year->id) 
        ->where('subject_grades.grade', 'INC')
        ->count();

        $total_withdrawn_students  = DB::table('subject_grades')
        ->join('acad_terms', 'subject_grades.term_id', '=', 'acad_terms.id')
        ->join('subjects', 'subject_grades.subject_id', '=', 'subjects.id')
        ->join('advisees','subject_grades.stud_id','advisees.student_id')
        ->join('users','advisees.user_id','users.id')
        ->where('users.id', Auth::user()->id)
        ->where('acad_terms.acadyear_id', $report_academic_year->id) 
        ->where('subject_grades.grade', 'WDRW')
        ->count();





        foreach ($adviseelist_students as $value) {

            $student_grade = DB::table('subject_grades')
            ->join('acad_terms', 'subject_grades.term_id', '=', 'acad_terms.id')
            ->join('subjects', 'subject_grades.subject_id', '=', 'subjects.id')
            ->where('acad_terms.acadyear_id', $report_academic_year->id) 
            ->where('subject_grades.stud_id',$value->id)
            ->select('subjects.subject_unit', 'subject_grades.year_level', 'subject_grades.grade')
            ->get();

            $gpa = 0;
            $total_units = 0;
            $total_subject_times_unit = 0;
            $yearLevel = "";

            
            foreach ($student_grade as $std_grade){
                if($std_grade-> grade != 'INC'||$std_grade-> grade != 'WDRW' || $std_grade-> grade != 'DRP' ){
                    $total_units = ($total_units + $std_grade->subject_unit);
                    $total_subject_times_unit = ($total_subject_times_unit + ((float)$std_grade->grade * $std_grade->subject_unit));
                    $yearLevel = $std_grade->year_level;

                }

                if($std_grade == 'DRP')
                {
                    $dropout_rate++;
                }
                
            }

            $gpa = ($total_subject_times_unit/$total_units);


            if($gpa <= 1.25)
            {
                $total_REA ++;
            }

            if($gpa <= 1.5)
            {
                $total_CEA ++;
            }

            if($gpa <= 1.75)
            {
                $total_DEA ++;
            }

            if($gpa <= 3)
            {
                $total_completion++;
            }

            if($gpa > 3)
            {
                $failure_rate++;
            }

            if($gpa > 2.50)
            {
                $total_GPA_below++;
            }
            
            $total_gpa +=$gpa;

            $total_cgpa += $gpa;

            
        }

         
 
        return view('ous.details', compact('program_activities', 'report_id', 'program_outputs_deliverables', 
                    'program_consultation_advising', 'program_risk_challenges','program_collaboration_linkages', 
                    'program_problems_encountered','program_recommendations','program_program_plans', 'report_status',
                    'advisee','report_academic_year','total_grade_INC','total_withdrawn_students', 'total_gpa','total_cgpa',
                    'total_REA','total_CEA','total_DEA','total_GPA_below','total_CGPA_below','total_program_enrolees',
                    'total_enroled','program_name','total_completion','students_failing','failure_rate'));
    }

    //UPDATE 
    public function update_program_consultation_advising(Request $request){

        $field_name = $request->fieldname;
        
        $prog_activities = ConsultationAdvising::where('id', $request->id)->first();
        $prog_activities->$field_name = $request->value;
        $prog_activities->save();

    }

    public function update_program_risk_challenges(Request $request){

        $field_name = $request->fieldname;
        
        $prog_activities = RiskChallenges::where('id', $request->id)->first();
        $prog_activities->$field_name = $request->value;
        $prog_activities->save();

    }

    public function update_program_collaboration_linkages(Request $request){

        $field_name = $request->fieldname;
        
        $prog_activities =CollaborationsLinkages::where('id', $request->id)->first();
        $prog_activities->$field_name = $request->value;
        $prog_activities->save();

    }

    public function update_program_problems_ecountered(Request $request){

        $field_name = $request->fieldname;
        
        $prog_activities =ProblemsEncountered::where('id', $request->id)->first();
        $prog_activities->$field_name = $request->value;
        $prog_activities->save();

    }

    public function update_program_recommendations(Request $request){

        $field_name = $request->fieldname;
        
        $prog_activities =Recommendations::where('id', $request->id)->first();
        $prog_activities->$field_name = $request->value;
        $prog_activities->save();

    }

    public function update_program_plans(Request $request){

        $field_name = $request->fieldname;
        
        $prog_activities =ProgramPlans::where('id', $request->id)->first();
        $prog_activities->$field_name = $request->value;
        $prog_activities->save();

    }


    public function update_program_activities(Request $request){

        $field_name = $request->fieldname;
        
        $prog_activities = ProgramEngagementActivities::where('id', $request->id)->first();
        $prog_activities->$field_name = $request->value;
        $prog_activities->save();

    }

    public function update_program_output_deliverables(Request $request){
        $field_name = $request->fieldname;

        $prog_activities = ProgramOutputsDeliverables::where('id', $request->id)->first();
        $prog_activities->$field_name = $request->value;
        $prog_activities->save();
    }

    //ADD
    
    public function add_program_output_deliverables(Request $request){
        $data = $request->all();
        if(isset($data['report_id'])){
            $output_deliverables = new ProgramOutputsDeliverables;
            $output_deliverables->report_id = $data['report_id'];
            $output_deliverables->save();
            $insertedid = $output_deliverables->id;

            return response()->json(array('insertedid' => $insertedid), 200);
        }
    }

    public function add_program_activities(Request $request){
        $data = $request->all();
        if(isset($data['report_id'])){
            $engagementProgramm = new ProgramEngagementActivities;
            $engagementProgramm->report_id = $data['report_id'];
            $engagementProgramm->save();
            $insertedid = $engagementProgramm->id;

            return response()->json(array('insertedid' => $insertedid), 200);
        }
    }


    public function add_program_consultation_advising(Request $request){
        $data = $request->all();
        if(isset($data['report_id'])){
            $program_consultation = new ConsultationAdvising;
            $program_consultation->report_id = $data['report_id'];
            $program_consultation->save();
            $insertedid = $program_consultation->id;

            return response()->json(array('insertedid' => $insertedid), 200);
        }
    }

    public function add_program_risk_challenges(Request $request){
        $data = $request->all();
        if(isset($data['report_id'])){
            $program_risk= new RiskChallenges;
            $program_risk->report_id = $data['report_id'];
            $program_risk->save();
            $insertedid =  $program_risk->id;

            return response()->json(array('insertedid' => $insertedid), 200);
        }
    }

    public function add_pogram_collaborations_linkages(Request $request){
        $data = $request->all();
        if(isset($data['report_id'])){
            $program_collaborations = new CollaborationsLinkages;
            $program_collaborations ->report_id = $data['report_id'];
            $program_collaborations ->save();
            $insertedid =$program_collaborations ->id;

            return response()->json(array('insertedid' => $insertedid), 200);
        }
    }

    public function add_program_problems(Request $request){
        $data = $request->all();
        if(isset($data['report_id'])){
            $program_problems = new ProblemsEncountered;
            $program_problems ->report_id = $data['report_id'];
            $program_problems ->save();
            $insertedid = $program_problems ->id;

            return response()->json(array('insertedid' => $insertedid), 200);
        }
    }

    public function add_program_recommendations(Request $request){
        $data = $request->all();
        if(isset($data['report_id'])){
            $program_recommend = new Recommendations;
            $program_recommend ->report_id = $data['report_id'];
            $program_recommend ->save();
            $insertedid = $program_recommend ->id;

            return response()->json(array('insertedid' => $insertedid), 200);
        }
    }

    public function add_program_plans(Request $request){
        $data = $request->all();
        if(isset($data['report_id'])){
            $program_plans = new ProgramPlans;
            $program_plans ->report_id = $data['report_id'];
            $program_plans ->save();
            $insertedid =  $program_plans ->id;

            return response()->json(array('insertedid' => $insertedid), 200);
        }
    }

    //Remove

    public function  remove_program_output_deliverables(Request $request){
        $data = $request->all();
        if(isset($data['report_id'])){

            $engagementProgramm=ProgramOutputsDeliverables::where('id',$data['report_id'])->delete();

            return response()->json(array('succcess' => true), 200);
        }
    }
    public function remove_program_activities(Request $request){
        $data = $request->all();
        if(isset($data['report_id'])){

            $engagementProgramm=ProgramEngagementActivities::where('id',$data['report_id'])->delete();

            return response()->json(array('succcess' => true), 200);
        }
    }

    public function remove_program_consultation(Request $request){
        $data = $request->all();
        if(isset($data['report_id'])){

            $program_consultation=ConsultationAdvising::where('id',$data['report_id'])->delete();

            return response()->json(array('succcess' => true), 200);
        }
    }

    public function remove_program_risk(Request $request){
        $data = $request->all();
        if(isset($data['report_id'])){

            $program_risk=RiskChallenges::where('id',$data['report_id'])->delete();

            return response()->json(array('succcess' => true), 200);
        }
    }

    public function remove_program_collaborations(Request $request){
        $data = $request->all();
        if(isset($data['report_id'])){

            $program_collaboration=CollaborationsLinkages::where('id',$data['report_id'])->delete();

            return response()->json(array('succcess' => true), 200);
        }
    }

    public function remove_program_problems(Request $request){
        $data = $request->all();
        if(isset($data['report_id'])){

            $program_problems=ProblemsEncountered::where('id',$data['report_id'])->delete();

            return response()->json(array('succcess' => true), 200);
        }
    }

    public function remove_program_recommendations(Request $request){
        $data = $request->all();
        if(isset($data['report_id'])){

            $program_recommendations=Recommendations::where('id',$data['report_id'])->delete();

            return response()->json(array('succcess' => true), 200);
        }
    }

    public function remove_program_plans(Request $request){
        $data = $request->all();
        if(isset($data['report_id'])){

            $program_plans=ProgramPlans::where('id',$data['report_id'])->delete();

            return response()->json(array('succcess' => true), 200);
        }
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ous.add');

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
        return view('ous.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        return view('ous.edit');
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

    public function load_modal_report(){

        $data = DB::table('acad_years')
        ->whereNotIn('acad_years.id', DB::table('acad_years')
        ->join('acad_terms', 'acad_terms.acadyear_id', '=', 'acad_years.id')
        ->join('advisees', 'advisees.term_id', '=', 'acad_terms.id')
        ->join('reports', 'reports.advisee_id', '=', 'advisees.id')
        ->where('advisees.user_id', '=', auth()->user()->id)
        ->pluck('acad_years.id'))
        ->select('acad_years.id', 'acad_years.acad_yr')
        ->get();

        return view('modal.gen_report_content', compact('data'));
    }

    public function gen_report(Request $request){
        
        if($request->academic_year == ""){
            return response()->json(array('success' => false), 400);
        }
        $todayDate = Carbon::now()->format('Y-m-d');


        $advisee_id = DB::table('acad_terms')
        ->join('acad_years', 'acad_terms.acadyear_id', '=', 'acad_years.id')
        ->join('advisees', 'advisees.term_id', '=', 'acad_terms.id')
        ->where('acad_terms.acadyear_id', $request->academic_year)
        ->where('advisees.user_id', auth()->user()->id)
        ->select('advisees.id')
        ->first();



        // $advisee_id = Advisee::where('user_id', auth()->user()->id)->first()->id;


        $Reports = new Reports;
        $Reports->advisee_id = $advisee_id->id;
        $Reports->save();

        $insertedid = $Reports->id;

       
        $this->generate_program_engagement($insertedid);
        $this->generate_program_output($insertedid);
        $this->generate_program_consultation($insertedid);
        $this->generate_program_risk($insertedid);
        $this->generate_program_collaboration($insertedid);
        $this->generate_program_problem($insertedid);
        $this->generate_program_recommendations($insertedid);
        $this->generate_program_plans($insertedid);

        return $insertedid;
        
    }

    private function get_program_engagement_list(){
        $report_id = Report::where('report_id', $report_id);
        $advisee_id =Advisee::where('advisee_id', auth()->user()->id)->first()->id;

        // $advisee_id = Advisee::where('advisee_id', auth()->user()->id)->first()->id;
        // // $activeYear = AcadYear::where('status', 1)->first()->id;
        $data = ProgramEngagementActivities::where('advisee_id', $advisee_id)->first();
        // ->where('acadyr_id', $activeYear)->get();
        return $data;
    }

    private function generate_program_engagement($insertedid)
    {

        $count_check = ProgramEngagementActivities::where('report_id', $insertedid)->count();
        $current_date_time = Carbon::now()->toDateTimeString();
        if($count_check <= 0){
            $data = [
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time]
            ];
    
            ProgramEngagementActivities::insert($data);
        }

    }
    private function generate_program_output($insertedid) 
    {
        $count_check = ProgramOutputsDeliverables::where('report_id', $insertedid)->count();
        $current_date_time = Carbon::now()->toDateTimeString();

        if($count_check <= 0){
            $data = [
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time]
            ];
    
            ProgramOutputsDeliverables::insert($data);
        }

    }
    private function generate_program_consultation($insertedid) 
    {
        $count_check = ConsultationAdvising::where('report_id', $insertedid)->count();
        $current_date_time = Carbon::now()->toDateTimeString();

        if($count_check <= 0){
            $data = [
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time]
            ];
    
            ConsultationAdvising::insert($data);
        }
    }

    private function generate_program_risk($insertedid) {
        $count_check = RiskChallenges::where('report_id', $insertedid)->count();
        $current_date_time = Carbon::now()->toDateTimeString();

        if($count_check <= 0){
            $data = [
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time]
            ];
    
            RiskChallenges::insert($data);
        }
    }

    private function generate_program_collaboration($insertedid) 
    {
        $count_check = CollaborationsLinkages::where('report_id', $insertedid)->count();
        $current_date_time = Carbon::now()->toDateTimeString();

        if($count_check <= 0){
            $data = [
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time]
            ];
    
            CollaborationsLinkages::insert($data);
        }
    }
    private function generate_program_problem($insertedid) 
    {
        $count_check = ProblemsEncountered::where('report_id', $insertedid)->count();
        $current_date_time = Carbon::now()->toDateTimeString();
        
        if($count_check <= 0){
            $data = [
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time]
            ];
    
            ProblemsEncountered::insert($data);
        }
    }
    private function generate_program_recommendations($insertedid) 
    {
        $count_check = Recommendations::where('report_id', $insertedid)->count();
        $current_date_time = Carbon::now()->toDateTimeString();

        if($count_check <= 0){
            $data = [
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time]
            ];
    
            Recommendations::insert($data);
        }
    }
    private function generate_program_plans($insertedid) {
        $count_check = ProgramPlans::where('report_id', $insertedid)->count();
        $current_date_time = Carbon::now()->toDateTimeString();
        
        if($count_check <= 0){
            $data = [
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time],
                ['report_id' => $insertedid, 'created_at' => $current_date_time, 'updated_at' => $current_date_time]
            ];
    
            ProgramPlans::insert($data);
            
        }
    }
}
