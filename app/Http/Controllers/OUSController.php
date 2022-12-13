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
use App\Models\ProgramPlans;

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
        return view('ous.index');
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

    public function gen_report(){
        $this->generate_program_engagement();
        $this->generate_program_output();
        $this->generate_program_consultation();
        $this->generate_program_risk();
        $this->generate_program_collaboration();
        $this->generate_program_problem();
        $this->generate_program_recommendations();
        $this->generate_program_plans();
    
    }

    private function generate_program_engagement()
    {
        $advisee_id = Advisee::where('user_id', auth()->user()->id)->first()->id;
        $activeYear = AcadYear::where('status', 1)->first()->id;

        $count_check = ProgramEngagementActivities::where('advisee_id', $advisee_id)->where('acadyr_id', $activeYear)->count();
        if($count_check <= 0){
            $data = [
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear]
            ];
    
            ProgramEngagementActivities::insert($data);
        }

    }
    private function generate_program_output() 
    {
        $advisee_id = Advisee::where('user_id', auth()->user()->id)->first()->id;
        $activeYear = AcadYear::where('status', 1)->first()->id;

        $count_check = ProgramOutputsDeliverables::where('advisee_id', $advisee_id)->where('acadyr_id', $activeYear)->count();
        if($count_check <= 0){
            $data = [
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear]
            ];
    
            ProgramOutputsDeliverables::insert($data);
        }

    }
    private function generate_program_consultation() 
    {
        $advisee_id = Advisee::where('user_id', auth()->user()->id)->first()->id;
        $activeYear = AcadYear::where('status', 1)->first()->id;

        $count_check = ConsultationAdvising::where('advisee_id', $advisee_id)->where('acadyr_id', $activeYear)->count();
        if($count_check <= 0){
            $data = [
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
            ];
    
            ConsultationAdvising::insert($data);
        }
    }

    private function generate_program_risk() {
        $advisee_id = Advisee::where('user_id', auth()->user()->id)->first()->id;
        $activeYear = AcadYear::where('status', 1)->first()->id;

        $count_check = RiskChallenges::where('advisee_id', $advisee_id)->where('acadyr_id', $activeYear)->count();
        if($count_check <= 0){
            $data = [
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
            ];
    
            RiskChallenges::insert($data);
        }
    }

    private function generate_program_collaboration() 
    {
        $advisee_id = Advisee::where('user_id', auth()->user()->id)->first()->id;
        $activeYear = AcadYear::where('status', 1)->first()->id;

        $count_check = CollaborationsLinkages::where('advisee_id', $advisee_id)->where('acadyr_id', $activeYear)->count();
        if($count_check <= 0){
            $data = [
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
            ];
    
            CollaborationsLinkages::insert($data);
        }
    }
    private function generate_program_problem() 
    {
        $advisee_id = Advisee::where('user_id', auth()->user()->id)->first()->id;
        $activeYear = AcadYear::where('status', 1)->first()->id;

        $count_check = ProblemsEncountered::where('advisee_id', $advisee_id)->where('acadyr_id', $activeYear)->count();
        if($count_check <= 0){
            $data = [
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
            ];
    
            ProblemsEncountered::insert($data);
        }
    }
    private function generate_program_recommendations() 
    {
        $advisee_id = Advisee::where('user_id', auth()->user()->id)->first()->id;
        $activeYear = AcadYear::where('status', 1)->first()->id;

        $count_check = Recommendations::where('advisee_id', $advisee_id)->where('acadyr_id', $activeYear)->count();
        if($count_check <= 0){
            $data = [
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
            ];
    
            Recommendations::insert($data);
        }
    }
    private function generate_program_plans() {
        $advisee_id = Advisee::where('user_id', auth()->user()->id)->first()->id;
        $activeYear = AcadYear::where('status', 1)->first()->id;

        $count_check = ProgramPlans::where('advisee_id', $advisee_id)->where('acadyr_id', $activeYear)->count();
        if($count_check <= 0){
            $data = [
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
                ['advisee_id' => $advisee_id, 'acadyr_id' => $activeYear],
            ];
    
            ProgramPlans::insert($data);
        }
    }

}
