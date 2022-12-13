<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advisee;

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

    public function generate_program_engagement()
    {
        $advisee_id = Advisee::where('user_id ', auth()->user()->id)->first()->id;
        
        $data = [
            ['advisee_id ' => $advisee_id, 'term_id' => 'term id'],
            ['advisee_id ' => $advisee_id, 'term_id' => 'term id'],
            ['advisee_id ' => $advisee_id, 'term_id' => 'term id'],
            ['advisee_id ' => $advisee_id, 'term_id' => 'term id'],
            ['advisee_id ' => $advisee_id, 'term_id' => 'term id']
        ];
    }
    public function generate_program_output() 
    {
        
    }
    public function generate_program_consultation() 
    {
        
    }
    public function generate_program_risk() {
        
    }
    public function generate_program_collaboration() 
    {
        
    }
    public function generate_program_problem() 
    {
        
    }
    public function generate_program_recommendations() 
    {
        
    }
    public function generate_program_plans() 
        {
        
    }

}
